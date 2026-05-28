<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Aura Infotech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {font-family: 'Inter', sans-serif; background-color: #050505; color: #fff; overflow-x: hidden;}
    </style>
</head>
<body class="relative min-h-screen flex flex-col">
    <!-- Navbar (reuse same as welcome page) -->
    <nav class="flex items-center justify-between px-6 md:px-10 py-6 md:py-8 max-w-[1400px] w-full mx-auto z-50 relative">
        <div class="flex items-center gap-3">
            <svg width="46" height="22" viewBox="0 0 100 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24 44C12.9543 44 4 35.0457 4 24C4 12.9543 12.9543 4 24 4C31.5435 4 38.0772 8.16335 41.5173 14.5029L58.4827 33.4971C61.9228 39.8367 68.4565 44 76 44C87.0457 44 96 35.0457 96 24C96 12.9543 87.0457 4 76 4C68.4565 4 61.9228 8.16335 58.4827 14.5029L41.5173 33.4971C38.0772 39.8367 31.5435 44 24 44Z" stroke="url(#paint0_linear)" stroke-width="8" stroke-linecap="round"/>
                <defs>
                    <linearGradient id="paint0_linear" x1="4" y1="24" x2="96" y2="24" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#00f2fe" />
                        <stop offset="0.33" stop-color="#4facfe" />
                        <stop offset="0.66" stop-color="#f5576c" />
                        <stop offset="1" stop-color="#f09819" />
                    </linearGradient>
                </defs>
            </svg>
            <span class="text-[20px] md:text-[22px] font-bold tracking-tight">Aura Infotech</span>
        </div>
        <div class="flex items-center gap-8 text-[15px] ml-6">
            <a href="/" class="text-[#00e5ff] font-medium transition-colors">Home</a>
            <a href="/services" class="text-gray-100 hover:text-white transition-colors">Services</a>
            <a href="/blogs" class="text-gray-100 hover:text-white transition-colors">Blogs</a>
            <a href="/about" class="text-gray-100 hover:text-white transition-colors">About Us</a>
            <a href="/contact-us" class="text-gray-100 hover:text-white transition-colors">Contact Us</a>
            <a href="/cart" class="relative text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7a1 1 0 00.9 1.5h12a1 1 0 00.9-1.5L17 13M7 13L5 6" /></svg>
                <span id="cart-count" class="absolute -top-2 -right-2 bg-[#00e5ff] text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
            </a>
        </div>
    </nav>

    <main class="flex-1 flex flex-col items-center max-w-[1400px] mx-auto w-full px-6 md:px-10 py-12">
        <h2 class="text-3xl font-bold mb-6">Checkout</h2>
        <p class="text-gray-300 mb-4">This is a placeholder checkout page. Implement your checkout flow here.</p>
        <a href="/" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded">Return to Home</a>
    </main>

    <script>
        // Placeholder script to keep cart count in sync (same logic as welcome page)
        function updateCartCount() {
            const stored = JSON.parse(localStorage.getItem('cart') || '[]');
            const count = stored.length;
            document.getElementById('cart-count').textContent = count;
        }
        document.addEventListener('DOMContentLoaded', updateCartCount);
    </script>
</body>
</html>
