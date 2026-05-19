<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog['title'] }} - Aura Infotech</title>
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

    <!-- Main Content Grid -->
    <main class="flex-1 max-w-[1400px] w-full mx-auto px-6 md:px-10 py-8 md:py-16 z-10 relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16">
            
            <!-- Left Column: Blog Content -->
            <article class="lg:col-span-8 flex flex-col">
                <!-- Blog Hero Image -->
                <div class="w-full aspect-[16/9] rounded-[24px] md:rounded-[32px] overflow-hidden relative mb-10 {{ $blog['bg_class'] }} border border-white/[0.04]">
                    <img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}" class="w-full h-full object-cover opacity-90 mix-blend-screen">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#050505] to-transparent"></div>
                </div>

                <!-- Blog Title -->
                <h1 class="text-[32px] md:text-[44px] font-bold text-white mb-6 leading-tight tracking-tight">
                    {{ $blog['title'] }}
                </h1>

                <!-- Divider -->
                <div class="w-full border-t border-white/[0.06] mb-8"></div>

                <!-- Blog Content Body -->
                <div class="text-[#9ca3af] text-[15px] md:text-[16px] leading-[1.8] space-y-6">
                    {!! $blog['content'] !!}
                </div>
            </article>

            <!-- Right Column: Related Blogs Sidebar -->
            <aside class="lg:col-span-4 space-y-8">
                <!-- Header Badge Card -->
                <div class="bg-[#0c0c0c]/60 border border-white/[0.05] rounded-2xl p-5 shadow-lg">
                    <h2 class="text-[17px] font-bold text-white tracking-wide border-l-4 border-[#00e5ff] pl-3">
                        Related Blogs
                    </h2>
                </div>

                <!-- Related Blog List -->
                <div class="space-y-6">
                    @foreach($relatedBlogs as $related)
                        @php
                            $relatedUrl = '/blog/' . $related['id'];
                        @endphp
                        <a href="{{ $relatedUrl }}" class="block bg-[#0c0c0c]/40 border border-white/[0.04] rounded-2xl overflow-hidden hover:border-[#00e5ff]/30 transition-all duration-300 group shadow-md hover:-translate-y-1">
                            <!-- Preview Image -->
                            <div class="w-full h-[160px] overflow-hidden relative {{ $related['bg_class'] }}">
                                <img src="{{ $related['image'] }}" alt="{{ $related['title'] }}" class="w-full h-full object-cover opacity-80 mix-blend-screen">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0c0c0c] to-transparent"></div>
                            </div>
                            <!-- Details -->
                            <div class="p-6">
                                <h3 class="text-[15px] font-semibold text-white mb-2 leading-snug group-hover:text-[#00e5ff] transition-colors line-clamp-2">
                                    {{ $related['title'] }}
                                </h3>
                                <p class="text-[#8c92a0] text-[12px] leading-relaxed line-clamp-2">
                                    {{ $related['preview'] }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </aside>

        </div>
    </main>

    <!-- Footer Main Section -->
    <footer class="w-full bg-[#030303] border-t border-white/[0.04] pt-16 pb-8 z-10 relative">
        <div class="max-w-[1200px] mx-auto px-6 md:px-10 flex flex-col items-center">
            <!-- Brand Logo -->
            <div class="flex items-center gap-3 mb-6">
                <!-- Infinity Logo -->
                <svg width="40" height="20" viewBox="0 0 100 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 44C12.9543 44 4 35.0457 4 24C4 12.9543 12.9543 4 24 4C31.5435 4 38.0772 8.16335 41.5173 14.5029L58.4827 33.4971C61.9228 39.8367 68.4565 44 76 44C87.0457 44 96 35.0457 96 24C96 12.9543 87.0457 4 76 4C68.4565 4 61.9228 8.16335 58.4827 14.5029L41.5173 33.4971C38.0772 39.8367 31.5435 44 24 44Z" stroke="url(#paint0_linear_footer_blog)" stroke-width="8" stroke-linecap="round"/>
                    <defs>
                        <linearGradient id="paint0_linear_footer_blog" x1="4" y1="24" x2="96" y2="24" gradientUnits="userSpaceOnUse">
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
                <!-- Telegram-like Send Icon -->
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
</body>
</html>
