<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    // Show gateway selection
    public function showPaymentMethods(Request $request)
    {
        $total = $request->query('total');
        $items = $request->query('items');
        
        return view('checkout.select-gateway', [
            'total' => $total,
            'items' => $items
        ]);
    }

    // Process payment
    public function processPayment(Request $request)
    {
        $request->validate([
            'gateway' => 'required|in:razorpay',
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'customer_phone' => 'required',
            'total_amount' => 'required|numeric',
            'items' => 'required'
        ]);

        // Create order
        $order = Order::create([
            'order_id' => 'ORD-' . uniqid(),
            'items' => json_decode($request->items, true),
            'total_amount' => $request->total_amount,
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'status' => 'pending'
        ]);

        // Initiate Razorpay
        return $this->initiateRazorpay($order);
    }

    // Initiate Razorpay payment
    private function initiateRazorpay($order)
    {
        $api = new \Razorpay\Api\Api(
            env('RAZORPAY_KEY'),
            env('RAZORPAY_SECRET')
        );

        try {
            $razorpayOrder = $api->order->create([
                'amount' => $order->total_amount * 100, // in paise
                'currency' => 'INR',
                'receipt' => $order->order_id,
                'description' => 'Order from Aura Infotech'
            ]);

            // Save payment record
            Payment::create([
                'order_id' => $order->id,
                'gateway' => 'razorpay',
                'amount' => $order->total_amount,
                'status' => 'pending',
                'response' => ['razorpay_order_id' => $razorpayOrder->id]
            ]);

            // Redirect to payment page with data
            return redirect()->route('checkout.razorpay-payment', [
                'order_id' => $order->id,
                'razorpay_order_id' => $razorpayOrder->id
            ]);

        } catch (\Exception $e) {
            // Return with validation-like error to display in Blade
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    // Show Razorpay payment page
    public function showRazorpayPayment($order_id, $razorpay_order_id)
    {
        $order = Order::findOrFail($order_id);
        
        return view('checkout.razorpay-payment', [
            'order' => $order,
            'razorpay_order_id' => $razorpay_order_id,
            'razorpay_key' => env('RAZORPAY_KEY')
        ]);
    }

    // Verify Razorpay payment
    public function razorpayCallback(Request $request)
    {
        $paymentId = $request->razorpay_payment_id;
        $orderId = $request->razorpay_order_id;
        $signature = $request->razorpay_signature;

        $api = new \Razorpay\Api\Api(
            env('RAZORPAY_KEY'),
            env('RAZORPAY_SECRET')
        );

        try {
            $attributes = [
                'razorpay_order_id' => $orderId,
                'razorpay_payment_id' => $paymentId,
                'razorpay_signature' => $signature
            ];

            // Verify signature
            $api->utility->verifyPaymentSignature($attributes);

            // Find and update payment
            $payment = Payment::where('response->razorpay_order_id', $orderId)->first();
            
            if ($payment) {
                $payment->update([
                    'status' => 'completed',
                    'transaction_id' => $paymentId,
                    'response' => array_merge($payment->response ?? [], [
                        'razorpay_payment_id' => $paymentId,
                        'verified_at' => now()
                    ])
                ]);

                // Update order status
                $payment->order->update(['status' => 'completed']);

                return response()->json([
                    'success' => true,
                    'message' => 'Payment successful',
                    'order_id' => $payment->order->order_id
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Order not found'
            ], 404);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 400);
        }
    }

    // Success page
    public function paymentSuccess()
    {
        return view('checkout.success');
    }

    // Failed page
    public function paymentFailed()
    {
        return view('checkout.failed');
    }
}