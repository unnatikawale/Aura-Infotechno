<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful - Aura Infotech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #050505; color: #fff; }
    </style>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="w-full max-w-md text-center">
            <div class="mb-6">
                <div class="w-20 h-20 bg-green-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h1 class="text-4xl font-bold text-green-500 mb-2">Payment Successful!</h1>
                <p class="text-gray-400 text-lg">Your order has been confirmed</p>
            </div>

            <div class="bg-[#080808]/50 backdrop-blur-sm border border-gray-700 rounded-lg p-6 mb-6 text-left">
                <div class="space-y-4">
                    <div class="flex justify-between pb-3 border-b border-gray-700">
                        <span class="text-gray-400">Order Number:</span>
                        <span class="font-semibold">#{{ request()->query('order', 'N/A') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-400">Date & Time:</span>
                        <span class="font-semibold">{{ now()->format('d M Y, H:i A') }}</span>
                    </div>
                </div>
            </div>

            <div class="space-y-3">
                <a href="/" class="w-full block bg-[#00e5ff] hover:bg-[#0099cc] text-black font-bold py-3 rounded-lg transition-colors text-center">
                    Back to Home
                </a>
                <a href="/cart" class="w-full block bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 rounded-lg transition-colors text-center">
                    Continue Shopping
                </a>
            </div>

            <p class="text-sm text-gray-400 mt-6">
                A confirmation email has been sent to your registered email.
            </p>
        </div>
    </div>

    <script>
        // Clear cart after successful payment
        localStorage.removeItem('cart');
    </script>
</body>
</html>