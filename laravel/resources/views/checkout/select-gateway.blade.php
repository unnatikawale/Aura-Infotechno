<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Payment Method - Aura Infotech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #050505; color: #fff; }
    </style>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="w-full max-w-md">
            <h1 class="text-3xl font-bold mb-6">Checkout</h1>
            
            @if ($errors->any())
                <div class="bg-red-500/20 border border-red-500 rounded-lg p-4 mb-6">
                    @foreach ($errors->all() as $error)
                        <p class="text-red-400">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('checkout.process') }}" method="POST">
                @csrf

                <!-- Hidden cart data -->
                <input type="hidden" name="items" value="{{ request('items') }}">
                <input type="hidden" name="total_amount" value="{{ request('total') }}">

                <!-- Customer Details -->
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2">Full Name</label>
                    <input type="text" name="customer_name" required 
                        class="w-full bg-[#080808] border border-gray-700 rounded-lg p-3 text-white focus:outline-none focus:border-[#00e5ff]">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2">Email</label>
                    <input type="email" name="customer_email" required 
                        class="w-full bg-[#080808] border border-gray-700 rounded-lg p-3 text-white focus:outline-none focus:border-[#00e5ff]">
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-2">Phone</label>
                    <input type="tel" name="customer_phone" required 
                        class="w-full bg-[#080808] border border-gray-700 rounded-lg p-3 text-white focus:outline-none focus:border-[#00e5ff]">
                </div>

                <!-- Order Summary -->
                <div class="bg-[#080808] border border-gray-700 rounded-lg p-4 mb-6">
                    <div class="flex justify-between">
                        <span class="text-gray-400">Order Total:</span>
                        <span class="font-bold text-[#00e5ff]">₹{{ request('total') }}</span>
                    </div>
                </div>

                <!-- Payment Gateway Selection -->
                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-3">Select Payment Gateway</label>
                    
                    <label class="flex items-center p-3 border border-gray-700 rounded-lg cursor-pointer hover:bg-[#080808] mb-2">
                        <input type="radio" name="gateway" value="razorpay" checked required class="mr-3 w-4 h-4">
                        <div>
                            <span class="font-semibold">Razorpay</span>
                            <p class="text-xs text-gray-400">Debit Card, Credit Card, UPI, NetBanking</p>
                        </div>
                    </label>
                </div>

                <button type="submit" class="w-full bg-[#00e5ff] hover:bg-[#0099cc] text-black font-bold py-3 rounded-lg transition-colors">
                    Continue to Payment
                </button>
            </form>

            <p class="text-xs text-gray-500 text-center mt-4">
                🔒 Secure payment powered by Razorpay
            </p>
        </div>
    </div>
</body>
</html>