<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Infotech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #050505;
            color: #ffffff;
            overflow-x: hidden;
        }
        .bg-letters { position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; pointer-events: none; overflow: hidden; }
        .bg-letter { position: absolute; font-size: 35vw; font-weight: 300; color: transparent; -webkit-text-stroke: 1px rgba(255,255,255,0.05); line-height: 1; user-select: none; }
    </style>
</head>
<body class="relative min-h-screen flex flex-col">
    <!-- Background Letters -->
    <div class="bg-letters font-bold">
        <div class="bg-letter" style="top: -10%; left: 60%; transform: rotate(-10deg);">U</div>
        <div class="bg-letter" style="top: 25%; right: -5%; transform: rotate(5deg);">R</div>
        <div class="bg-letter" style="bottom: -15%; right: 15%; transform: rotate(-5deg);">A</div>
        <div class="bg-letter" style="bottom: 5%; left: -5%; transform: rotate(10deg);">A</div>
    </div>
    <!-- Navbar -->
    <nav class="flex items-center justify-between px-6 md:px-10 py-6 md:py-8 max-w-[1400px] w-full mx-auto z-50 relative">
        <div class="flex items-center gap-3">
            <svg width="46" height="22" viewBox="0 0 100 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24 44C12.9543 44 4 35.0457 4 24C4 12.9543 12.9543 4 24 4C31.5435 4 38.0772 8.16335 41.5173 14.5029L58.4827 33.4971C61.9228 39.8367 68.4565 44 76 44C87.0457 44 96 35.0457 96 24C96 12.9543 87.0457 4 76 4C68.4565 4 61.9228 8.16335 58.4827 14.5029L41.5173 33.4971C38.0772 39.8367 31.5435 44 24 44Z" stroke="url(#paint0_linear)" stroke-width="8" stroke-linecap="round"/>
                <defs>
                    <linearGradient id="paint0_linear" x1="4" y1="24" x2="96" y2="24" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#00f2fe"/>
                        <stop offset="0.33" stop-color="#4facfe"/>
                        <stop offset="0.66" stop-color="#f5576c"/>
                        <stop offset="1" stop-color="#f09819"/>
                    </linearGradient>
                </defs>
            </svg>
            <span class="text-[20px] md:text-[22px] font-bold tracking-tight">Aura Infotech</span>
        </div>
        <!-- Desktop Links -->
        <div class="hidden md:flex items-center gap-8 text-[15px] ml-6">
            <a href="#" class="text-[#00e5ff] font-medium transition-colors">Home</a>
            <a href="/services" class="text-gray-100 hover:text-white transition-colors">Services</a>
            <a href="/blogs" class="text-gray-100 hover:text-white transition-colors">Blogs</a>
            <a href="/about" class="text-gray-100 hover:text-white transition-colors">About Us</a>
            <a href="/contact-us" class="text-gray-100 hover:text-white transition-colors">Contact Us</a>
            <a href="/login" class="text-gray-100 hover:text-white transition-colors">Login</a>
            <a href="/register" class="text-gray-100 hover:text-white transition-colors">Register</a>
        </div>
        <div class="flex items-center ml-auto mr-6">
            <a href="/cart" id="cart-link" class="relative text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7a1 1 0 00.9 1.5h12a1 1 0 00.9-1.5L17 13M7 13L5 6"/></svg>
                <span id="cart-count" class="absolute -top-2 -right-2 bg-[#00e5ff] text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
            </a>
        </div>
        <!-- User Icon Dropdown -->
        @auth
        <div class="relative" id="user-menu-container">
            <button id="user-menu-btn" class="flex items-center space-x-2 text-gray-100 focus:outline-none" type="button" aria-haspopup="true" aria-expanded="false">
                <div class="h-8 w-8 flex items-center justify-center bg-gray-800 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9 9 0 1118.879 6.196a9 9 0 01-13.758 11.608z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
            </button>
            <div id="user-menu" class="hidden absolute right-0 mt-2 w-48 bg-[#050505] rounded-md shadow-lg py-1 z-50">
                <a href="/purchases" class="block px-4 py-2 text-sm text-gray-100 hover:bg-[#00e5ff]">View Purchase</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-100 hover:bg-[#00e5ff]">Logout</button>
                </form>
            </div>
        </div>
        @endauth
        <!-- Mobile Hamburger -->
        <button id="mobile-menu-btn" class="md:hidden flex flex-col justify-between w-6 h-4 text-white focus:outline-none z-50">
            <span class="w-full h-[2px] bg-white rounded-full transition-transform duration-300 origin-left"></span>
            <span class="w-full h-[2px] bg-white rounded-full transition-opacity duration-300"></span>
            <span class="w-full h-[2px] bg-white rounded-full transition-transform duration-300 origin-left"></span>
        </button>
    </nav>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed top-0 left-0 w-full h-[50vh] bg-[#050505]/98 backdrop-blur-xl flex flex-col items-center justify-center gap-6 text-[18px] font-semibold text-white transition-transform duration-500 -translate-y-full md:hidden z-40 border-b border-white/[0.05] shadow-[0_10px_35px_rgba(0,0,0,0.9)]">
        <a href="#" class="mobile-nav-link text-[#00e5ff] transition-colors">Home</a>
        <a href="/services" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Services</a>
        <a href="/blogs" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Blogs</a>
        <a href="/about" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">About Us</a>
        <a href="/contact-us" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Contact Us</a>
    </div>
    <!-- Page Content -->
    @yield('content')
<script>
document.addEventListener('DOMContentLoaded', function () {
  const userBtn = document.getElementById('user-menu-btn');
  const userMenu = document.getElementById('user-menu');
  const userContainer = document.getElementById('user-menu-container');
  if (userBtn && userMenu) {
    userBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      userMenu.classList.toggle('hidden');
      const expanded = userMenu.classList.contains('hidden') ? 'false' : 'true';
      userBtn.setAttribute('aria-expanded', expanded);
    });
    // close when clicking outside
    document.addEventListener('click', function (e) {
      if (!userContainer.contains(e.target)) {
        userMenu.classList.add('hidden');
        userBtn.setAttribute('aria-expanded', 'false');
      }
    });
  }

  const mobileBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  if (mobileBtn && mobileMenu) {
    mobileBtn.addEventListener('click', function () {
      mobileMenu.classList.toggle('-translate-y-full');
    });
  }
});
</script>
</body>
</html>
