<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs - Aura Infotech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #050505;
            color: #ffffff;
            overflow-x: hidden;
        }
        .bg-letters {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
            overflow: hidden;
        }
        .bg-letter {
            position: absolute;
            font-size: 35vw;
            font-weight: 300;
            color: transparent;
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.05);
            line-height: 1;
            user-select: none;
        }
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
                        <stop stop-color="#00f2fe" />
                        <stop offset="0.33" stop-color="#4facfe" />
                        <stop offset="0.66" stop-color="#f5576c" />
                        <stop offset="1" stop-color="#f09819" />
                    </linearGradient>
                </defs>
            </svg>
            <span class="text-[20px] md:text-[22px] font-bold tracking-tight">Aura Infotech</span>
        </div>
        
        <!-- Desktop Navbar Links -->
        <div class="hidden md:flex items-center gap-8 text-[15px]">
            <a href="/" class="text-gray-100 hover:text-white transition-colors">Home</a>
            <a href="/services" class="text-gray-100 hover:text-white transition-colors">Services</a>
            <a href="/blogs" class="text-[#00e5ff] font-medium transition-colors">Blogs</a>
            <a href="/#about" class="text-gray-100 hover:text-white transition-colors">About Us</a>
            <a href="/services#contact" class="text-gray-100 hover:text-white transition-colors">Contact Us</a>
        </div>

        <!-- Hamburger Icon (Three lines) -->
        <button id="mobile-menu-btn" class="md:hidden flex flex-col justify-between w-6 h-4 text-white focus:outline-none z-50">
            <span class="w-full h-[2px] bg-white rounded-full transition-transform duration-300 origin-left"></span>
            <span class="w-full h-[2px] bg-white rounded-full transition-opacity duration-300"></span>
            <span class="w-full h-[2px] bg-white rounded-full transition-transform duration-300 origin-left"></span>
        </button>

        <!-- Mobile Menu Dropdown Panel -->
        <div id="mobile-menu" class="fixed top-0 left-0 w-full h-[50vh] bg-[#050505]/98 backdrop-blur-xl flex flex-col items-center justify-center gap-6 text-[18px] font-semibold text-white transition-transform duration-500 -translate-y-full md:hidden z-40 border-b border-white/[0.05] shadow-[0_10px_35px_rgba(0,0,0,0.9)]">
            <a href="/" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Home</a>
            <a href="/services" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Services</a>
            <a href="/blogs" class="mobile-nav-link text-[#00e5ff] transition-colors">Blogs</a>
            <a href="/#about" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">About Us</a>
            <a href="/services#contact" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Contact Us</a>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="flex-1 max-w-[1400px] w-full mx-auto px-6 md:px-10 py-12 md:py-20 z-10 relative">
        
        <!-- Blogs Section -->
        <section id="blogs" class="w-full flex flex-col items-center">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-5 py-2 rounded-xl bg-[#1e40af] bg-gradient-to-r from-blue-600 to-blue-500 mb-6 shadow-[0_0_20px_rgba(59,130,246,0.3)]">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                    <polyline points="2 12 12 17 22 12"></polyline>
                    <polyline points="2 17 12 22 22 17"></polyline>
                </svg>
                <span class="text-white text-[14px] font-medium tracking-wide">Our Blogs</span>
            </div>

            <!-- Heading -->
            <h2 class="text-[32px] md:text-[44px] font-bold text-white mb-4 text-center tracking-tight max-w-4xl">Empowering the Future of Business with Modern Digital Solutions</h2>
            <p class="text-[#9ca3af] text-[15px] md:text-[16px] text-center max-w-3xl mb-16 leading-relaxed">
                Welcome to the Aura Infotech Blog — where strategy meets storytelling and technology fuels transformation.
            </p>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-[1200px] mx-auto">
                <!-- Card 1 -->
                <a href="/blog/ui-design-principles" class="bg-[#080808]/60 border border-white/[0.05] rounded-[24px] overflow-hidden cursor-pointer flex flex-col hover:border-[#00e5ff]/30 hover:-translate-y-1 transition-all duration-300 group shadow-lg">
                    <div class="w-full h-[240px] overflow-hidden relative bg-[#130d26]">
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&h=400&fit=crop" alt="UI Design" class="w-full h-full object-cover opacity-80 mix-blend-screen transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#080808] to-transparent"></div>
                    </div>
                    <div class="p-8 pt-6 flex-1 flex flex-col">
                        <h3 class="text-[19px] font-bold text-white mb-3 leading-snug group-hover:text-[#00e5ff] transition-colors">UI Design Principles That Enhance User Engagement</h3>
                        <p class="text-[#8c92a0] text-[14px] leading-relaxed">
                            User Interface (UI) design is much more than just making a website look pretty. It's about designing clear pathways.
                        </p>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="/blog/boost-ecommerce-sales" class="bg-[#080808]/60 border border-white/[0.05] rounded-[24px] overflow-hidden cursor-pointer flex flex-col hover:border-[#00e5ff]/30 hover:-translate-y-1 transition-all duration-300 group shadow-lg">
                    <div class="w-full h-[240px] overflow-hidden relative bg-[#0d1626]">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=400&fit=crop" alt="E-Commerce" class="w-full h-full object-cover opacity-80 mix-blend-screen transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#080808] to-transparent"></div>
                    </div>
                    <div class="p-8 pt-6 flex-1 flex flex-col">
                        <h3 class="text-[19px] font-bold text-white mb-3 leading-snug group-hover:text-[#00e5ff] transition-colors">Boost Online Sales with Smart E-Commerce</h3>
                        <p class="text-[#8c92a0] text-[14px] leading-relaxed">
                            In the rapidly evolving digital marketplace, e-commerce is no longer just about setting up a storefront.
                        </p>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="/blog/scalable-web-solutions" class="bg-[#080808]/60 border border-white/[0.05] rounded-[24px] overflow-hidden cursor-pointer flex flex-col hover:border-[#00e5ff]/30 hover:-translate-y-1 transition-all duration-300 group shadow-lg">
                    <div class="w-full h-[240px] overflow-hidden relative bg-[#0d2126]">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop" alt="Web Solutions" class="w-full h-full object-cover opacity-80 mix-blend-screen transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#080808] to-transparent"></div>
                    </div>
                    <div class="p-8 pt-6 flex-1 flex flex-col">
                        <h3 class="text-[19px] font-bold text-white mb-3 leading-snug group-hover:text-[#00e5ff] transition-colors">The Power of Scalable Web Solutions</h3>
                        <p class="text-[#8c92a0] text-[14px] leading-relaxed">
                            In the fast-paced digital economy, businesses need solutions that can handle millions of dynamic users.
                        </p>
                    </div>
                </a>
            </div>
        </section>
    </main>

    <!-- Footer Main Section -->
    <footer class="w-full bg-[#030303] border-t border-white/[0.04] pt-16 pb-8 z-10 relative">
        <div class="max-w-[1200px] mx-auto px-6 md:px-10 flex flex-col items-center">
            <!-- Brand Logo -->
            <div class="flex items-center gap-3 mb-6">
                <!-- Infinity Logo -->
                <svg width="40" height="20" viewBox="0 0 100 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 44C12.9543 44 4 35.0457 4 24C4 12.9543 12.9543 4 24 4C31.5435 4 38.0772 8.16335 41.5173 14.5029L58.4827 33.4971C61.9228 39.8367 68.4565 44 76 44C87.0457 44 96 35.0457 96 24C96 12.9543 87.0457 4 76 4C68.4565 4 61.9228 8.16335 58.4827 14.5029L41.5173 33.4971C38.0772 39.8367 31.5435 44 24 44Z" stroke="url(#paint0_linear_footer_blogs_page)" stroke-width="8" stroke-linecap="round"/>
                    <defs>
                        <linearGradient id="paint0_linear_footer_blogs_page" x1="4" y1="24" x2="96" y2="24" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#00f2fe" />
                            <stop offset="0.33" stop-color="#4facfe" />
                            <stop offset="0.66" stop-color="#f5576c" />
                            <stop offset="1" stop-color="#f09819" />
                        </linearGradient>
                    </defs>
                </svg>
                <span class="text-[20px] font-bold text-white tracking-tight">Aura Infotech</span>
            </div>

            <!-- Email -->
            <a href="mailto:support@aurainfotechno.in" class="flex items-center gap-2 text-[#9ca3af] hover:text-white transition-colors duration-300 text-[14px] mb-8">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="rotate-45"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                support@aurainfotechno.in
            </a>

            <!-- Links -->
            <div class="flex flex-wrap justify-center gap-6 md:gap-8 text-[13px] text-[#6b7280] mb-12">
                <a href="#" class="hover:text-white transition-colors duration-300">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors duration-300">Terms & Conditions</a>
                <a href="#" class="hover:text-white transition-colors duration-300">Disclaimer</a>
            </div>

            <!-- Horizontal Divider -->
            <div class="w-full border-t border-white/[0.04] mb-8"></div>

            <!-- Copyright -->
            <div class="text-[12px] text-[#4b5563] text-center tracking-wide">
                Copyright © 2026 Aura Infotech. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
        const lines = mobileMenuBtn.querySelectorAll('span');

        mobileMenuBtn.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.contains('-translate-y-full');
            if (isOpen) {
                mobileMenu.classList.remove('-translate-y-full');
                mobileMenu.classList.add('translate-y-0');
                lines[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                lines[1].style.opacity = '0';
                lines[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
            } else {
                mobileMenu.classList.remove('translate-y-0');
                mobileMenu.classList.add('-translate-y-full');
                lines[0].style.transform = 'none';
                lines[1].style.opacity = '1';
                lines[2].style.transform = 'none';
            }
        });

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
</body>
</html>
