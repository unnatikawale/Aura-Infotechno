<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Aura Infotech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {font-family: 'Inter', sans-serif; background-color: #050505; color: #fff; overflow-x: hidden;}
    </style>
</head>
<body class="relative min-h-screen flex flex-col">
    <!-- Navbar (reuse same as welcome page) -->
    <nav class="flex items-center justify-between px-6 md:px-10 py-6 md:py-8 max-w-[1400px] w-full mx-auto z-50 relative">
            <!-- Mobile Menu Button (Three lines) -->
<button id="mobile-menu-btn" type="button" class="md:hidden flex flex-col justify-between w-6 h-4 text-white focus:outline-none z-50 cursor-pointer">
    <span class="w-full h-[2px] bg-white rounded-full transition-transform duration-300 origin-left"></span>
    <span class="w-full h-[2px] bg-white rounded-full transition-opacity duration-300"></span>
    <span class="w-full h-[2px] bg-white rounded-full transition-transform duration-300 origin-left"></span>
</button>
            
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
        <div class="hidden md:flex items-center gap-8 text-[15px] ml-6">
            <a href="/" class="text-[#00e5ff] font-medium transition-colors">Home</a>
            <a href="/services" class="text-gray-100 hover:text-white transition-colors">Services</a>
            <a href="/blogs" class="text-gray-100 hover:text-white transition-colors">Blogs</a>
            <a href="/about" class="text-gray-100 hover:text-white transition-colors">About Us</a>
            <a href="/contact-us" class="text-gray-100 hover:text-white transition-colors">Contact Us</a>
        </div>
    </nav>
        <!-- Mobile Menu Slide-over Panel -->
        <div id="mobile-menu" class="fixed top-0 left-0 w-full h-[50vh] bg-[#050505]/98 backdrop-blur-xl flex flex-col items-center justify-center gap-6 text-[18px] font-semibold text-white transition-transform duration-500 -translate-y-full md:hidden z-40 border-b border-white/[0.05] shadow-[0_10px_35px_rgba(0,0,0,0.9)]">
            <a href="/" class="mobile-nav-link text-[#00e5ff] transition-colors">Home</a>
            <a href="/services" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Services</a>
            <a href="/blogs" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Blogs</a>
            <a href="/about" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">About Us</a>
            <a href="/contact-us" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Contact Us</a>
        </div>

    <main class="flex-1 flex flex-col items-center max-w-[1400px] mx-auto w-full px-6 md:px-10 py-12">
        <h2 class="text-3xl font-bold mb-6">Your Cart</h2>
        <ul id="cart-items" class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full max-w-lg mb-6"></ul>
        <div class="w-full max-w-lg flex justify-between items-center mb-4 text-white">
            <span class="font-semibold">Total:</span>
            <span id="cart-total" class="font-bold text-xl">₹0</span>
        </div>
        <div class="flex gap-4">
            <a href="#" onclick="proceedToCheckout(event)" class="bg-[#00e5ff] hover:bg-[#0099cc] text-white px-4 py-2 rounded-md transition-colors">
    Proceed
</a>
            <a href="/" class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded">Continue Shopping</a>
        </div>
    </main>

    <script>
        function renderCart() {
            const stored = JSON.parse(localStorage.getItem('cart') || '[]');
            const list = document.getElementById('cart-items');
            const totalEl = document.getElementById('cart-total');
            list.innerHTML = '';
            let total = 0;
            if (stored.length === 0) {
                list.innerHTML = '<li class="text-gray-400">Cart is empty.</li>';
            } else {
                stored.forEach((item, index) => {
                    const li = document.createElement('li');
                    li.className = 'w-full flex items-start bg-[#080808]/30 backdrop-blur-sm rounded-lg p-4 gap-4';
                    li.innerHTML = `
                        <img src="${item.image ? item.image : 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop'}" alt="${item.title}" class="w-24 h-24 object-cover rounded-md">
                        <div class="flex-1">
                            <h3 class="text-white font-semibold">${item.title}</h3>
                            <p class="text-[#9ca3af] text-sm">${item.description}</p>
                            <div class="flex items-center mt-2">
                                <span class="text-[#00e5ff] font-bold mr-4">${item.price}</span>
                                <button data-index="${index}" class="decrease btn text-white bg-red-600 hover:bg-red-700 rounded px-2">-</button>
                                <span class="mx-2 text-white">${item.quantity}</span>
                                <button data-index="${index}" class="increase btn text-white bg-green-600 hover:bg-green-700 rounded px-2">+</button>
                            </div>
                        </div>`;
                    list.appendChild(li);
                    // calculate numeric price assuming format ₹1234
                    const priceNum = parseFloat(item.price.replace(/[^0-9\.]/g, '')) * (item.quantity || 1);
                    total += priceNum;
                });
            }
            totalEl.textContent = `₹${total.toFixed(2)}`;
            // attach handlers for + and -
            document.querySelectorAll('.increase').forEach(btn => {
                btn.addEventListener('click', () => {
                    const idx = btn.getAttribute('data-index');
                    stored[idx].quantity = (stored[idx].quantity || 1) + 1;
                    localStorage.setItem('cart', JSON.stringify(stored));
                    renderCart();
                    updateCartCount();
                });
            });
            document.querySelectorAll('.decrease').forEach(btn => {
                btn.addEventListener('click', () => {
                    const idx = btn.getAttribute('data-index');
                    if (stored[idx].quantity > 1) {
                        stored[idx].quantity -= 1;
                    } else {
                        stored.splice(idx, 1);
                    }
                    localStorage.setItem('cart', JSON.stringify(stored));
                    renderCart();
                    updateCartCount();
                });
            });
        }
        document.addEventListener('DOMContentLoaded', renderCart);
        
    </script>
    <script>
        // Mobile Menu Toggle (same as welcome page)
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
        const lines = mobileMenuBtn.querySelectorAll('span');

        mobileMenuBtn.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.contains('-translate-y-full');
            if (isOpen) {
                // Open menu
                mobileMenu.classList.remove('-translate-y-full');
                mobileMenu.classList.add('translate-y-0');
                // Animate hamburger to X
                lines[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                lines[1].style.opacity = '0';
                lines[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
            } else {
                // Close menu
                mobileMenu.classList.remove('translate-y-0');
                mobileMenu.classList.add('-translate-y-full');
                // Reset hamburger lines
                lines[0].style.transform = 'none';
                lines[1].style.opacity = '1';
                lines[2].style.transform = 'none';
            }
        });

        // Close menu when clicking a link
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('translate-y-0');
                mobileMenu.classList.add('-translate-y-full');
                lines[0].style.transform = 'none';
                lines[1].style.opacity = '1';
                lines[2].style.transform = 'none';
            });
        });
    </script>
   
<script>
function proceedToCheckout(event) {
    event.preventDefault();
    
    const cart = JSON.parse(localStorage.getItem('cart') || '[]');
    const total = cart.reduce((sum, item) => {
        const price = parseFloat(item.price.replace(/[^0-9\.]/g, ''));
        return sum + (price * (item.quantity || 1));
    }, 0);

    if (cart.length === 0) {
        alert('Cart is empty!');
        return;
    }

    const params = new URLSearchParams({
        items: JSON.stringify(cart),
        total: total.toFixed(2)
    });

    window.location.href = `/checkout/select-gateway?${params.toString()}`;
}
</script>
</body>
</html>
