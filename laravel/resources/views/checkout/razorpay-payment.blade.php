<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay with Razorpay - Aura Infotech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #050505; color: #fff; }
    </style>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="w-full max-w-md bg-[#080808]/50 backdrop-blur-sm border border-gray-700 rounded-lg p-8">
            <h1 class="text-3xl font-bold mb-2">Complete Payment</h1>
            <p class="text-gray-400 mb-6">Order #{{ $order->order_id }}</p>

            <!-- Order Summary -->
            <div class="bg-[#0a0a0a] border border-gray-700 rounded-lg p-4 mb-6">
                <div class="flex justify-between mb-3">
                    <span>Order Amount:</span>
                    <span class="font-bold text-[#00e5ff]">₹{{ number_format($order->total_amount, 2) }}</span>
                </div>
                <div class="flex justify-between text-sm text-gray-400">
                    <span>Items:</span>
                    <span>{{ count($order->items) }} items</span>
                </div>
            </div>

            <!-- Payment Button -->
            <button 
                id="razorpay-button" 
                class="w-full bg-[#00e5ff] hover:bg-[#0099cc] text-black font-bold py-3 rounded-lg transition-colors mb-4">
                Pay ₹{{ number_format($order->total_amount, 2) }}
            </button>

            <p class="text-xs text-gray-500 text-center">
                🔒 Secure payment powered by Razorpay
            </p>
        </div>
    </div>

    <script>
    document.getElementById('razorpay-button').onclick = function(e) {
        e.preventDefault();
        
        const options = {
            key: "{{ $razorpay_key }}",
            amount: {{ $order->total_amount * 100 }},
            currency: "INR",
            name: "Aura Infotech",
            description: "Order #{{ $order->order_id }}",
            order_id: "{{ $razorpay_order_id }}",
            prefill: {
                name: "{{ $order->customer_name }}",
                email: "{{ $order->customer_email }}",
                contact: "{{ $order->customer_phone }}"
            },
            theme: {
                color: "#00e5ff"
            },
            handler: function(response) {
                verifyPayment(response);
            },
            modal: {
                ondismiss: function() {
                    alert('Payment cancelled');
                    window.location.href = "{{ route('checkout.select-gateway') }}";
                }
            }
        };
        
        var rzp = new Razorpay(options);
        rzp.open();
    }

    function verifyPayment(response) {
        fetch("{{ route('payment.razorpay-callback') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                razorpay_order_id: response.razorpay_order_id,
                razorpay_payment_id: response.razorpay_payment_id,
                razorpay_signature: response.razorpay_signature
            })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                window.location.href = "{{ route('checkout.success') }}?order=" + data.order_id;
            } else {
                alert('Payment verification failed: ' + data.message);
                window.location.href = "{{ route('checkout.failed') }}?error=" + data.message;
            }
        })
        .catch(err => {
            alert('Error: ' + err.message);
            window.location.href = "{{ route('checkout.failed') }}?error=" + err.message;
        });
    }
    </script>
</body>
</html>