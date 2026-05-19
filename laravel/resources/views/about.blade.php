<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Aura Infotech</title>
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
            <a href="/blogs" class="text-gray-100 hover:text-white transition-colors">Blogs</a>
            <a href="/about" class="text-[#00e5ff] font-medium transition-colors">About Us</a>
            <a href="/contact-us" class="text-gray-100 hover:text-white transition-colors">Contact Us</a>
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
            <a href="/blogs" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Blogs</a>
            <a href="/about" class="mobile-nav-link text-[#00e5ff] transition-colors">About Us</a>
            <a href="/contact-us" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Contact Us</a>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="flex-1 max-w-[1400px] w-full mx-auto px-6 md:px-10 py-12 md:py-20 z-10 relative">
        
        <!-- About Us Hero Section (Matching Image exactly) -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center mb-24">
            
            <!-- Left Side Image Box with decorative blue background shapes -->
            <div class="lg:col-span-6 relative flex justify-center py-6">
                <!-- Top-Right blue decorative shape -->
                <div class="absolute top-0 right-0 w-[150px] h-[150px] bg-[#3b82f6] rounded-[24px]" style="border-radius: 40px 0 40px 0;"></div>
                
                <!-- Bottom-Left blue decorative shape -->
                <div class="absolute bottom-0 left-0 w-[150px] h-[150px] bg-[#3b82f6] rounded-[24px]" style="border-radius: 0 40px 0 40px;"></div>

                <!-- Main Container Image with borders and round corners -->
                <div class="relative w-full aspect-[4/3] rounded-[24px] overflow-hidden border border-white/[0.1] shadow-2xl z-10 m-4">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1000&fit=crop" alt="Team Work" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-tr from-black/40 via-transparent to-transparent"></div>
                </div>
            </div>

            <!-- Right Side Content -->
            <div class="lg:col-span-6 flex flex-col items-start">
                <!-- About Us Badge -->
                <div class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-[#161616] border border-white/[0.08] text-[#8c92a0] text-[13px] font-medium mb-6 shadow-md">
                    <!-- Icon approximation -->
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#00e5ff]">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span>About Us</span>
                </div>

                <!-- Heading -->
                <h1 class="text-[36px] md:text-[46px] font-bold text-white mb-6 leading-tight tracking-tight">
                    Let’s build what’s next — together.
                </h1>

                <!-- Body Copy -->
                <div class="text-[#b3b3b3] text-[15px] md:text-[16px] leading-[1.75] space-y-6 mb-8 max-w-xl">
                    <p>
                        At Aura Infotech, we believe in the power of ideas, innovation, and intelligent digital solutions. We are a team of strategists, creatives, and technologists driven by a shared mission: to help businesses thrive in a constantly evolving digital world.
                    </p>
                    <p>
                        Through our blog, we share insights, stories, and strategies that inspire transformation and spark progress. Whether it's the latest in tech trends, best practices in digital marketing, or deep dives into UX, development, and design — we aim to provide valuable perspectives that fuel growth and excellence.
                    </p>
                    <p>
                        This is more than just a blog. It's a space where curiosity meets expertise, and where we explore the ideas that shape the future of digital.
                    </p>
                </div>

                <!-- Find Us On Social -->
                <div class="flex items-center gap-4 text-[15px] font-semibold text-white">
                    <span>Find us on:</span>
                    <div class="flex items-center gap-2.5">
                        <!-- Facebook Link/Icon -->
                        <a href="#" class="w-9 h-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#00e5ff] hover:text-black transition-all duration-300">
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                        </a>
                        <!-- Instagram Link/Icon -->
                        <a href="#" class="w-9 h-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#00e5ff] hover:text-black transition-all duration-300">
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </a>
                        <!-- Twitter/X Link/Icon -->
                        <a href="#" class="w-9 h-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#00e5ff] hover:text-black transition-all duration-300">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <!-- YouTube Link/Icon -->
                        <a href="#" class="w-9 h-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#00e5ff] hover:text-black transition-all duration-300">
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.163a3.003 3.003 0 0 0-2.11-2.11C19.518 3.545 12 3.545 12 3.545s-7.518 0-9.388.508a3.003 3.003 0 0 0-2.11 2.11C0 8.033 0 12 0 12s0 3.967.502 5.837a3.003 3.003 0 0 0 2.11 2.11c1.87.508 9.388.508 9.388.508s7.518 0 9.388-.508a3.003 3.003 0 0 0 2.11-2.11C24 15.967 24 12 24 12s0-3.967-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Focus On Section (6-card layout matching screenshot exactly) -->
        <section class="relative w-full max-w-[1400px] mx-auto px-10 py-16 z-10 border-t border-white/[0.06] mt-16">
            <div class="text-center mb-16">
                <h2 class="text-[32px] md:text-[38px] font-bold tracking-tight text-white">What We Focus On</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 relative z-10">
                <!-- Card 1 -->
                <div class="bg-[#070707] border border-white/[0.04] rounded-[20px] p-8 hover:-translate-y-1 hover:border-[#00e5ff]/30 hover:shadow-[0_10px_30px_rgba(0,229,255,0.04)] transition-all duration-300 flex flex-col justify-between group cursor-default min-h-[220px]">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-[20px] font-bold text-white leading-tight">Results That<br>Drive<br>Growth</h3>
                        <div class="text-[#00e5ff] mt-1 group-hover:scale-110 transition-transform duration-300">
                            <!-- Rocket Icon -->
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2.5 3.19-2.5 5.5h16c0-2.31-1-4.24-2.5-5.5"></path><path d="M12 2C6.477 2 2 6.477 2 12c0 2.21 1.79 4 4 4h12c2.21 0 4-1.79 4-4 0-5.523-4.477-10-10-10z"></path><path d="M12 8v4"></path></svg>
                        </div>
                    </div>
                    <p class="text-[#00e5ff] text-[13px] leading-[1.6]">
                        We're not here to check boxes. We focus on delivering measurable results.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-[#070707] border border-white/[0.04] rounded-[20px] p-8 hover:-translate-y-1 hover:border-[#00e5ff]/30 hover:shadow-[0_10px_30px_rgba(0,229,255,0.04)] transition-all duration-300 flex flex-col justify-between group cursor-default min-h-[220px]">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-[20px] font-bold text-white leading-tight">Client-First<br>Mindset</h3>
                        <div class="text-[#00e5ff] mt-1 group-hover:scale-110 transition-transform duration-300">
                            <!-- User Icon -->
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </div>
                    </div>
                    <p class="text-[#00e5ff] text-[13px] leading-[1.6]">
                        Every project begins with understanding you — your goals, your challenges, and your vision.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-[#070707] border border-white/[0.04] rounded-[20px] p-8 hover:-translate-y-1 hover:border-[#00e5ff]/30 hover:shadow-[0_10px_30px_rgba(0,229,255,0.04)] transition-all duration-300 flex flex-col justify-between group cursor-default min-h-[220px]">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-[20px] font-bold text-white leading-tight">Strategic<br>Problem<br>Solving</h3>
                        <div class="text-[#00e5ff] mt-1 group-hover:scale-110 transition-transform duration-300">
                            <!-- Tools Icon -->
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                        </div>
                    </div>
                    <p class="text-[#00e5ff] text-[13px] leading-[1.6]">
                        We love solving problems with smart, scalable digital solutions. we build with the future in mind — not just a quick fix.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="bg-[#070707] border border-white/[0.04] rounded-[20px] p-8 hover:-translate-y-1 hover:border-[#00e5ff]/30 hover:shadow-[0_10px_30px_rgba(0,229,255,0.04)] transition-all duration-300 flex flex-col justify-between group cursor-default min-h-[220px]">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-[20px] font-bold text-white leading-tight">Creative<br>Meets<br>Functional</h3>
                        <div class="text-[#00e5ff] mt-1 group-hover:scale-110 transition-transform duration-300">
                            <!-- Lightbulb Icon -->
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .6 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path><path d="M9 18h6"></path><path d="M10 22h4"></path></svg>
                        </div>
                    </div>
                    <p class="text-[#00e5ff] text-[13px] leading-[1.6]">
                        Design isn't just about looking good — it's about creating intuitive, high-performing experiences.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="bg-[#070707] border border-white/[0.04] rounded-[20px] p-8 hover:-translate-y-1 hover:border-[#00e5ff]/30 hover:shadow-[0_10px_30px_rgba(0,229,255,0.04)] transition-all duration-300 flex flex-col justify-between group cursor-default min-h-[220px]">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-[20px] font-bold text-white leading-tight">End-to-End<br>Excellence</h3>
                        <div class="text-[#00e5ff] mt-1 group-hover:scale-110 transition-transform duration-300">
                            <!-- Sync Icon -->
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 4v6h-6"></path><path d="M1 20v-6h6"></path><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                        </div>
                    </div>
                    <p class="text-[#00e5ff] text-[13px] leading-[1.6]">
                        From strategy to launch — and beyond — we handle every stage with care.
                    </p>
                </div>

                <!-- Card 6 -->
                <div class="bg-[#070707] border border-white/[0.04] rounded-[20px] p-8 hover:-translate-y-1 hover:border-[#00e5ff]/30 hover:shadow-[0_10px_30px_rgba(0,229,255,0.04)] transition-all duration-300 flex flex-col justify-between group cursor-default min-h-[220px]">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-[20px] font-bold text-white leading-tight">Transparency<br>& Trust</h3>
                        <div class="text-[#00e5ff] mt-1 group-hover:scale-110 transition-transform duration-300">
                            <!-- Eye Icon -->
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        </div>
                    </div>
                    <p class="text-[#00e5ff] text-[13px] leading-[1.6]">
                        No jargon. No surprises. Just clear communication, honest timelines, and a collaborative approach.
                    </p>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer CTA Section (Same as screenshot 2) -->
    <section class="relative w-full max-w-[1400px] mx-auto px-6 md:px-10 mb-20 z-10">
        <div class="w-full bg-gradient-to-r from-blue-600 via-cyan-500 to-cyan-400 rounded-[28px] py-16 px-6 md:px-16 flex flex-col items-center text-center shadow-[0_20px_50px_rgba(6,182,212,0.15)]">
            <h2 class="text-white text-[28px] md:text-[42px] font-bold tracking-tight mb-4">Crafted by Experts, Built for Growth</h2>
            <p class="text-white/85 font-normal text-[15px] md:text-[16px] max-w-2xl mb-8 leading-relaxed">
                Take your business to the next level with cutting-edge web development and digital solutions.
            </p>
            <a href="/contact-us" class="bg-black text-white hover:bg-black/90 font-medium px-7 py-3.5 rounded-full active:scale-[0.98] transition-all duration-300 shadow-xl text-[14px]">
                Partner with Us Today
            </a>
        </div>
    </section>

    <!-- Footer Main Section -->
    <footer class="w-full bg-[#050505] border-t border-white/[0.04] pt-12 pb-8 z-10 relative">
        <div class="max-w-[1200px] mx-auto px-6 md:px-10 flex flex-col items-center">
            <!-- Brand Logo -->
            <div class="flex items-center gap-3 mb-6">
                <!-- Infinity Logo -->
                <svg width="40" height="20" viewBox="0 0 100 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 44C12.9543 44 4 35.0457 4 24C4 12.9543 12.9543 4 24 4C31.5435 4 38.0772 8.16335 41.5173 14.5029L58.4827 33.4971C61.9228 39.8367 68.4565 44 76 44C87.0457 44 96 35.0457 96 24C96 12.9543 87.0457 4 76 4C68.4565 4 61.9228 8.16335 58.4827 14.5029L41.5173 33.4971C38.0772 39.8367 31.5435 44 24 44Z" stroke="url(#paint0_linear_footer)" stroke-width="8" stroke-linecap="round"/>
                    <defs>
                        <linearGradient id="paint0_linear_footer" x1="4" y1="24" x2="96" y2="24" gradientUnits="userSpaceOnUse">
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
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="rotate-45"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
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
