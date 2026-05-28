<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Failed - Aura Infotech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #050505; color: #fff; }
    </style>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="w-full max-w-md text-center">
            <div class="mb-6">
                <div class="w-20 h-20 bg-red-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
                <h1 class="text-4xl font-bold text-red-500 mb-2">Payment Failed</h1>
                <p class="text-gray-400 text-lg">We couldn't process your payment</p>
            </div>

            <div class="bg-[#080808]/50 backdrop-blur-sm border border-gray-700 rounded-lg p-6 mb-6">
                <p class="text-sm text-gray-400">
                    {{ request()->query('error', 'Unknown error occurred') }}
                </p>
            </div>

            <div class="space-y-3">
                <a href="{{ route('checkout.select-gateway', ['items' => request('items'), 'total' => request('total')]) }}" class="w-full block bg-[#00e5ff] hover:bg-[#0099cc] text-black font-bold py-3 rounded-lg transition-colors text-center">
                    Try Again
                </a>
                <a href="/" class="w-full block bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 rounded-lg transition-colors text-center">
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</body>
</html>