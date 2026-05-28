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
        <div class="hidden md:flex items-center gap-8 text-[15px] ml-6">
            <a href="#" class="text-[#00e5ff] font-medium transition-colors">Home</a>
            <a href="/services" class="text-gray-100 hover:text-white transition-colors">Services</a>
            <a href="/blogs" class="text-gray-100 hover:text-white transition-colors">Blogs</a>
            <a href="/about" class="text-gray-100 hover:text-white transition-colors">About Us</a>
            <a href="/contact-us" class="text-gray-100 hover:text-white transition-colors">Contact Us</a>
        </div>
        <div class="flex items-center ml-auto">
<a href="/cart" id="cart-link" class="relative text-white focus:outline-none"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7a1 1 0 00.9 1.5h12a1 1 0 00.9-1.5L17 13M7 13L5 6" /></svg><span id="cart-count" class="absolute -top-2 -right-2 bg-[#00e5ff] text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span></a>
                </div>

        <!-- Hamburger Icon (Three lines) -->
        <button id="mobile-menu-btn" class="md:hidden flex flex-col justify-between w-6 h-4 text-white focus:outline-none z-50">
            <span class="w-full h-[2px] bg-white rounded-full transition-transform duration-300 origin-left"></span>
            <span class="w-full h-[2px] bg-white rounded-full transition-opacity duration-300"></span>
            <span class="w-full h-[2px] bg-white rounded-full transition-transform duration-300 origin-left"></span>
        </button>

        <!-- Mobile Menu Slide-over Panel -->
        <div id="mobile-menu" class="fixed top-0 left-0 w-full h-[50vh] bg-[#050505]/98 backdrop-blur-xl flex flex-col items-center justify-center gap-6 text-[18px] font-semibold text-white transition-transform duration-500 -translate-y-full md:hidden z-40 border-b border-white/[0.05] shadow-[0_10px_35px_rgba(0,0,0,0.9)]">
            <a href="#" class="mobile-nav-link text-[#00e5ff] transition-colors">Home</a>
            <a href="/services" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Services</a>
            <a href="/blogs" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Blogs</a>
            <a href="/about" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">About Us</a>
            <a href="/contact-us" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Contact Us</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 flex items-center max-w-[1400px] mx-auto w-full px-6 md:px-10 z-10 pb-20 relative mt-4 md:mt-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center w-full">
            <!-- Left Side -->
            <div class="flex flex-col gap-6 max-w-xl text-left">
                <h1 class="text-[36px] sm:text-[48px] md:text-[60px] leading-[1.1] font-medium tracking-tight">
                    We Build Powerful<br>
                    <span id="rotating-text" class="text-[#6b7280] font-normal">- SaaS Platforms</span>
                </h1>
                
                <p class="text-[#9ca3af] text-[15px] sm:text-[17px] leading-[1.7] max-w-[520px] mt-2 mb-2">
                    With strong expertise in web and app development, Aura Infotech partners with businesses to build innovative digital products that drive growth and success.
                </p>
 
                <div>
                    <button class="bg-[#27272a] hover:bg-[#3f3f46] text-[#f4f4f5] px-8 py-3.5 rounded-[32px] text-[15px] font-medium transition-colors flex items-center gap-3 active:scale-[0.98]">
                        Work with us 
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Right Side Image/Card -->
            <div class="relative w-full aspect-[4/3] rounded-[16px] overflow-hidden bg-[#e9ecef] shadow-lg flex items-center justify-center p-8">
                <!-- Background decoration matching the image -->
                <div class="absolute -bottom-32 -left-32 w-[600px] h-[600px]">
                    <div class="absolute inset-0 rounded-full border-[70px] border-[#6528F7] opacity-90 mix-blend-multiply"></div>
                    <div class="absolute inset-8 rounded-full border-[50px] border-[#A076F9] opacity-70 mix-blend-multiply"></div>
                    <div class="absolute inset-16 rounded-full border-[30px] border-[#D7BBF5] opacity-50 mix-blend-multiply"></div>
                    <div class="absolute inset-0 rounded-full border-[100px] border-white opacity-20 filter blur-2xl"></div>
                </div>
                
                <!-- Inner white card -->
                <div class="relative w-full max-w-[420px] bg-[#fdfdfd] rounded-[12px] shadow-[0_20px_50px_rgba(0,0,0,0.1)] p-8 z-10 border border-gray-100">
                    <div class="text-[10px] font-semibold text-gray-400 mb-1">Mailchimp</div>
                    <h3 class="text-[22px] font-bold text-gray-900 leading-tight mb-3">Stay informed, reap<br>the rewards</h3>
                    <p class="text-[11px] text-gray-500 mb-6 leading-relaxed max-w-[280px]">Stay ahead of the curve with our latest insights. Discover new strategies, tips and best practices to improve your business.</p>
                    
                    <div class="space-y-5">
                        <div class="flex items-start gap-4">
                            <div class="mt-0.5 text-gray-400">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                            </div>
                            <div>
                                <h4 class="text-[13px] font-semibold text-gray-800 mb-0.5">Understand</h4>
                                <p class="text-[10px] text-gray-500 leading-[1.4]">Uncover the trends shaping customer behaviors and expectations. Our latest research gives you the insights to plan your next moves.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="mt-0.5 text-gray-400">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                            </div>
                            <div>
                                <h4 class="text-[13px] font-semibold text-gray-800 mb-0.5">Resolve</h4>
                                <p class="text-[10px] text-gray-500 leading-[1.4]">Address the pain points your customers encounter with actionable strategies. Implement solutions that drive engagement and retention.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="mt-0.5 text-gray-400">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </div>
                            <div>
                                <h4 class="text-[13px] font-semibold text-gray-800 mb-0.5">Act</h4>
                                <p class="text-[10px] text-gray-500 leading-[1.4]">Put your plans into action with our comprehensive guides and tools. Drive success for your business and clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Services Section -->
    <section class="relative w-full max-w-[1400px] mx-auto px-10 py-16 z-10">
        <!-- Abstract wave background (CSS approximation) -->
        <div class="absolute right-0 top-0 w-1/2 h-full z-0 overflow-hidden opacity-30 pointer-events-none">
            <div class="absolute -right-[20%] -top-[50%] w-[150%] h-[200%] border border-[#00e5ff]/5 rounded-[40%] animate-[spin_20s_linear_infinite]" style="animation-duration: 40s;"></div>
            <div class="absolute -right-[15%] -top-[45%] w-[140%] h-[190%] border border-[#00e5ff]/10 rounded-[45%] animate-[spin_20s_linear_infinite]" style="animation-duration: 35s; animation-direction: reverse;"></div>
            <div class="absolute -right-[25%] -top-[55%] w-[160%] h-[210%] border border-[#00e5ff]/10 rounded-[35%] animate-[spin_20s_linear_infinite]" style="animation-duration: 45s;"></div>
            <div class="absolute right-0 top-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-[#00e5ff]/5 blur-[100px] rounded-full"></div>
        </div>

        <div class="relative z-10 max-w-4xl mb-12">
            <h2 class="text-[26px] font-semibold mb-6 tracking-tight text-white">Empowering the Future of Business with Modern Digital Solutions</h2>
            <p class="text-[#9ca3af] text-[15px] leading-relaxed max-w-[950px]">
                Outdated systems can slow down your business, increase costs, and create poor user experiences. At Aura Infotech, we help modernize legacy applications into fast, secure, and scalable solutions built for today's digital world.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 relative z-10">
            <!-- Card 1 -->
            <div class="bg-[#080808]/50 backdrop-blur-sm border border-white/10 rounded-[12px] p-8 hover:-translate-y-2 hover:border-[#00e5ff]/50 hover:shadow-[0_10px_30px_rgba(0,229,255,0.08)] transition-all duration-300 group cursor-default">
                <h3 class="text-[17px] font-semibold text-white mb-3 group-hover:text-[#00e5ff] transition-colors">Proven Development Framework</h3>
                <p class="text-[#9ca3af] text-[13px] leading-[1.6]">
                    Our structured and agile development process ensures smooth, efficient, and low-risk project execution.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#080808]/50 backdrop-blur-sm border border-white/10 rounded-[12px] p-8 hover:-translate-y-2 hover:border-[#00e5ff]/50 hover:shadow-[0_10px_30px_rgba(0,229,255,0.08)] transition-all duration-300 group cursor-default">
                <h3 class="text-[17px] font-semibold text-white mb-3 group-hover:text-[#00e5ff] transition-colors">Faster Project Delivery</h3>
                <p class="text-[#9ca3af] text-[13px] leading-[1.6]">
                    Using modern tools, automation, and smart workflows, we deliver solutions 40-50% faster than traditional development approaches.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#080808]/50 backdrop-blur-sm border border-white/10 rounded-[12px] p-8 hover:-translate-y-2 hover:border-[#00e5ff]/50 hover:shadow-[0_10px_30px_rgba(0,229,255,0.08)] transition-all duration-300 group cursor-default">
                <h3 class="text-[17px] font-semibold text-white mb-3 group-hover:text-[#00e5ff] transition-colors">Cost-Effective Solutions</h3>
                <p class="text-[#9ca3af] text-[13px] leading-[1.6]">
                    Get high-quality digital solutions at a lower cost. Our optimized development process helps reduce project costs without compromising quality.
                </p>
            </div>
        </div>
    </section>

<!-- Courses Section -->
<section class="relative w-full max-w-[1400px] mx-auto px-10 py-16 z-10">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight">Our Courses</h2>
        <p class="text-[#9ca3af] text-base md:text-lg mt-4 max-w-2xl mx-auto">
            Explore our expertly crafted courses to upskill your team and accelerate growth.
        </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Course Card -->
        <div class="bg-[#080808]/50 backdrop-blur-sm border border-white/10 rounded-[16px] p-6 flex flex-col hover:-translate-y-2 hover:border-[#00e5ff]/50 transition-all duration-300">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop" alt="Course Image" class="w-full h-48 object-cover rounded-md mb-4">
            <h3 class="text-xl font-semibold text-white mb-2">Full Stack Development</h3>
            <p class="text-[#9ca3af] text-sm flex-1 mb-4">Master modern web technologies, from front‑end frameworks to back‑end APIs.</p>
            <div class="flex items-center justify-between mt-auto">
                <span class="text-[#00e5ff] font-bold text-lg">₹1199</span>
                <button class="bg-[#00e5ff] hover:bg-[#0099cc] text-white px-4 py-2 rounded-md transition-colors add-to-cart-btn" data-title="Full Stack Development" data-price="₹1199" data-description="Master modern web technologies, from front‑end frameworks to back‑end APIs." data-image="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&h=400&fit=crop">Add to Cart</button>
            </div>
        </div>
        <!-- Repeat for more courses -->
        <div class="bg-[#080808]/50 backdrop-blur-sm border border-white/10 rounded-[16px] p-6 flex flex-col hover:-translate-y-2 hover:border-[#00e5ff]/50 transition-all duration-300">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600&h=400&fit=crop" alt="Course Image" class="w-full h-48 object-cover rounded-md mb-4">
            <h3 class="text-xl font-semibold text-white mb-2">UI/UX Design Mastery</h3>
            <p class="text-[#9ca3af] text-sm flex-1 mb-4">Learn design principles, prototyping, and user research for impactful interfaces.</p>
            <div class="flex items-center justify-between mt-auto">
                <span class="text-[#00e5ff] font-bold text-lg">₹1149</span>
                <button class="bg-[#00e5ff] hover:bg-[#0099cc] text-white px-4 py-2 rounded-md transition-colors add-to-cart-btn" data-title="UI/UX Design Mastery" data-price="₹1149" data-description="Learn design principles, prototyping, and user research for impactful interfaces." data-image="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600&h=400&fit=crop">Add to Cart</button>
            </div>
        </div>
        <div class="bg-[#080808]/50 backdrop-blur-sm border border-white/10 rounded-[16px] p-6 flex flex-col hover:-translate-y-2 hover:border-[#00e5ff]/50 transition-all duration-300">
            <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?w=600&h=400&fit=crop" alt="Course Image" class="w-full h-48 object-cover rounded-md mb-4">
            <h3 class="text-xl font-semibold text-white mb-2">Digital Marketing Essentials</h3>
            <p class="text-[#9ca3af] text-sm flex-1 mb-4">Boost traffic, conversions, and brand presence with data‑driven strategies.</p>
            <div class="flex items-center justify-between mt-auto">
                <span class="text-[#00e5ff] font-bold text-lg">₹1129</span>
                <button class="bg-[#00e5ff] hover:bg-[#0099cc] text-white px-4 py-2 rounded-md transition-colors add-to-cart-btn" data-title="Digital Marketing Essentials" data-price="₹1129" data-description="Boost traffic, conversions, and brand presence with data‑driven strategies." data-image="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?w=600&h=400&fit=crop">Add to Cart</button>
            </div>
        </div>
    </div>
</section>

    <!-- Our Services Section -->
    <section class="relative w-full max-w-[1400px] mx-auto px-10 py-16 z-10 mb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            
            <!-- Intro Block -->
            <div class="bg-[#070707] rounded-[16px] p-10 flex flex-col justify-center min-h-[320px]">
                <h2 class="text-[44px] font-bold text-white mb-6 leading-[1.15]">Our<br>Services</h2>
                <p class="text-[#00e5ff] text-[16px] font-medium leading-relaxed max-w-[220px]">
                    Our Services That Drive Real Business Growth
                </p>
            </div>

            <!-- Card 1 -->
            <div class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 hover:-translate-y-2 hover:border-[#00ff88]/40 hover:shadow-[0_10px_30px_rgba(0,255,136,0.06)] transition-all duration-300 group cursor-default min-h-[320px] flex flex-col">
                <div class="mb-5 text-[#00ff88]">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                </div>
                <h3 class="text-[16px] font-semibold text-white mb-3 group-hover:text-[#00ff88] transition-colors">Application Modernization</h3>
                <p class="text-[#9ca3af] text-[12px] leading-[1.6] mb-6">
                    Upgrade your existing applications with modern technology, improved performance, and a better user experience.
                </p>
                <ul class="text-[#9ca3af] text-[11px] space-y-2 mb-8 flex-1">
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Legacy system upgrades</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Performance improvements</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Modern UI redesign</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Scalable architecture</li>
                </ul>
                <div class="text-[11px] text-gray-400 font-medium group-hover:text-white transition-colors">& more</div>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 hover:-translate-y-2 hover:border-[#ff3366]/40 hover:shadow-[0_10px_30px_rgba(255,51,102,0.06)] transition-all duration-300 group cursor-default min-h-[320px] flex flex-col">
                <div class="mb-5 text-[#ff3366]">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><polyline points="9 16 6 13 9 10"></polyline><polyline points="15 10 18 13 15 16"></polyline></svg>
                </div>
                <h3 class="text-[16px] font-semibold text-white mb-3 group-hover:text-[#ff3366] transition-colors">Modern Website Development</h3>
                <p class="text-[#9ca3af] text-[12px] leading-[1.6] mb-6">
                    We build fast, secure, and modern websites designed to represent your brand and convert visitors into customers.
                </p>
                <ul class="text-[#9ca3af] text-[11px] space-y-2 mb-8 flex-1">
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Custom business websites</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Mobile responsive design</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>SEO optimized structure</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Fast loading performance</li>
                </ul>
                <div class="text-[11px] text-gray-400 font-medium group-hover:text-white transition-colors">& more</div>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 hover:-translate-y-2 hover:border-[#00e5ff]/40 hover:shadow-[0_10px_30px_rgba(0,229,255,0.06)] transition-all duration-300 group cursor-default min-h-[320px] flex flex-col">
                <div class="mb-5 text-[#00e5ff]">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                </div>
                <h3 class="text-[16px] font-semibold text-white mb-3 group-hover:text-[#00e5ff] transition-colors">Digital Presence Management</h3>
                <p class="text-[#9ca3af] text-[12px] leading-[1.6] mb-6">
                    We help businesses establish and manage a strong online presence to increase visibility and attract more customers.
                </p>
                <ul class="text-[#9ca3af] text-[11px] space-y-2 mb-8 flex-1">
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Website maintenance</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>SEO optimization</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Social media integration</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Online reputation management</li>
                </ul>
                <div class="text-[11px] text-gray-400 font-medium group-hover:text-white transition-colors">& more</div>
            </div>

            <!-- Card 4 -->
            <div class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 hover:-translate-y-2 hover:border-[#ffffff]/40 hover:shadow-[0_10px_30px_rgba(255,255,255,0.06)] transition-all duration-300 group cursor-default min-h-[320px] flex flex-col">
                <div class="mb-5 text-[#ffffff]">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9.06 11.9 8.07-8.06a2.85 2.85 0 1 1 4.03 4.03l-8.06 8.08"></path><path d="M7.07 14.94c-1.66 0-3 1.35-3 3.02 0 1.33-2.5 1.52-2 2.02 1.08 1.1 2.49 2.02 4 2.02 2.2 0 4-1.8 4-4.04a3.01 3.01 0 0 0-3-3.02z"></path></svg>
                </div>
                <h3 class="text-[16px] font-semibold text-white mb-3 group-hover:text-[#ffffff] transition-colors">Modern UI/UX Design</h3>
                <p class="text-[#9ca3af] text-[12px] leading-[1.6] mb-6">
                    Our design approach focuses on creating beautiful and intuitive interfaces that enhance user engagement.
                </p>
                <ul class="text-[#9ca3af] text-[11px] space-y-2 mb-8 flex-1">
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>User-focused design</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Wireframes & prototypes</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Web & mobile UI design</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Conversion focused layouts</li>
                </ul>
                <div class="text-[11px] text-gray-400 font-medium group-hover:text-white transition-colors">& more</div>
            </div>

            <!-- Card 5 -->
            <div class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 hover:-translate-y-2 hover:border-[#a855f7]/40 hover:shadow-[0_10px_30px_rgba(168,85,247,0.06)] transition-all duration-300 group cursor-default min-h-[320px] flex flex-col">
                <div class="mb-5 text-[#a855f7]">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                </div>
                <h3 class="text-[16px] font-semibold text-white mb-3 group-hover:text-[#a855f7] transition-colors">SaaS & E-Commerce Platforms</h3>
                <p class="text-[#9ca3af] text-[12px] leading-[1.6] mb-6">
                    We develop scalable SaaS solutions and powerful eCommerce platforms to help businesses grow online.
                </p>
                <ul class="text-[#9ca3af] text-[11px] space-y-2 mb-8 flex-1">
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Custom SaaS development</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>E-commerce store setup</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Payment gateway integration</li>
                    <li class="flex items-start"><span class="mr-2 opacity-60">•</span>Secure and scalable systems</li>
                </ul>
                <div class="text-[11px] text-gray-400 font-medium group-hover:text-white transition-colors">& more</div>
            </div>

        </div>
    </section>

    <!-- Blogs Section -->
    <section id="blogs" class="relative w-full max-w-[1400px] mx-auto px-10 py-16 z-10 mb-20 flex flex-col items-center">
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
        <h2 class="text-[32px] md:text-[36px] font-semibold text-white mb-4 text-center tracking-tight">Empowering the Future of Business with Modern Digital Solutions</h2>
        <p class="text-[#9ca3af] text-[15px] text-center max-w-3xl mb-14">
            Welcome to the Aura Infotech Blog — where strategy meets storytelling and technology fuels transformation.
        </p>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full">
            <!-- Card 1 -->
            <a href="/blog/ui-design-principles" class="bg-[#080808] border border-white/[0.05] rounded-[20px] overflow-hidden cursor-pointer flex flex-col hover:border-[#00e5ff]/30 transition-all duration-300">
                <div class="w-full h-[240px] overflow-hidden relative bg-[#130d26]">
                    <!-- Using an Unsplash placeholder that matches the purple UI vibe -->
                    <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&h=400&fit=crop" alt="UI Design" class="w-full h-full object-cover opacity-80 mix-blend-screen">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#080808] to-transparent"></div>
                </div>
                <div class="p-8 pt-4 flex-1 flex flex-col">
                    <h3 class="text-[18px] font-bold text-white mb-3 leading-snug hover:text-[#00e5ff] transition-colors">UI Design Principles That Enhance User Engagement</h3>
                    <p class="text-[#8c92a0] text-[14px] leading-relaxed">
                        User Interface (UI) design is much more than just making
                    </p>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="/blog/boost-ecommerce-sales" class="bg-[#080808] border border-white/[0.05] rounded-[20px] overflow-hidden cursor-pointer flex flex-col hover:border-[#00e5ff]/30 transition-all duration-300">
                <div class="w-full h-[240px] overflow-hidden relative bg-[#0d1626]">
                    <!-- Using an Unsplash placeholder that matches the blue E-commerce vibe -->
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=400&fit=crop" alt="E-Commerce" class="w-full h-full object-cover opacity-80 mix-blend-screen">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#080808] to-transparent"></div>
                </div>
                <div class="p-8 pt-4 flex-1 flex flex-col">
                    <h3 class="text-[18px] font-bold text-white mb-3 leading-snug hover:text-[#00e5ff] transition-colors">Boost Online Sales with Smart E-Commerce</h3>
                    <p class="text-[#8c92a0] text-[14px] leading-relaxed">
                        In the rapidly evolving digital marketplace, e-commerce is no longer
                    </p>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="/blog/scalable-web-solutions" class="bg-[#080808] border border-white/[0.05] rounded-[20px] overflow-hidden cursor-pointer flex flex-col hover:border-[#00e5ff]/30 transition-all duration-300">
                <div class="w-full h-[240px] overflow-hidden relative bg-[#0d2126]">
                    <!-- Using an Unsplash placeholder that matches the dark web solution vibe -->
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop" alt="Web Solutions" class="w-full h-full object-cover opacity-80 mix-blend-screen">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#080808] to-transparent"></div>
                </div>
                <div class="p-8 pt-4 flex-1 flex flex-col">
                    <h3 class="text-[18px] font-bold text-white mb-3 leading-snug hover:text-[#00e5ff] transition-colors">The Power of Scalable Web Solutions</h3>
                    <p class="text-[#8c92a0] text-[14px] leading-relaxed">
                        In the fast-paced digital economy, businesses need web solutions that
                    </p>
                </div>
            </a>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="relative w-full max-w-[1400px] mx-auto px-10 py-16 z-10 mb-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left Side Image -->
            <div class="rounded-[24px] overflow-hidden relative shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
                <!-- Placeholder image for the laptop on black grid -->
                <img src="https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?w=800&fit=crop" alt="Laptop Workspace" class="w-full h-auto object-cover aspect-[4/3] grayscale-[30%] contrast-125">
                <div class="absolute inset-0 bg-gradient-to-tr from-black/40 via-transparent to-orange-900/20 mix-blend-multiply"></div>
            </div>

            <!-- Right Side Content -->
            <div class="flex flex-col items-start max-w-2xl">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-5 py-2 rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 mb-8 shadow-[0_0_20px_rgba(59,130,246,0.2)]">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 12 12 17 22 12"></polyline>
                        <polyline points="2 17 12 22 22 17"></polyline>
                    </svg>
                    <span class="text-white text-[14px] font-medium tracking-wide">About Us</span>
                </div>

                <h2 class="text-[28px] md:text-[32px] font-semibold text-white mb-8 tracking-tight leading-snug">Let's build what's next — together.</h2>
                
                <div class="space-y-6 text-[#9ca3af] text-[13px] leading-[1.7]">
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
            </div>
            
        </div>
    </section>

    <!-- Founder Section -->
    <section class="w-full bg-white py-24">
        <div class="max-w-[1200px] mx-auto px-10">
            
            <!-- Heading -->
            <h2 class="text-[28px] md:text-[32px] font-semibold text-gray-900 text-center max-w-4xl mx-auto mb-20 leading-tight">
                Our mission is to deliver high-quality digital products that<br class="hidden md:block"> combine performance, design, and scalability.
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-12 gap-16 items-center">
                
                <!-- Left Image -->
                <div class="md:col-span-5 relative flex justify-center">
                    <!-- Blue background shape -->
                    <div class="relative w-full max-w-[360px] h-[450px] bg-[#82b1ff] rounded-t-[40px] rounded-b-[16px] overflow-hidden">
                        <!-- Placeholder for founder image -->
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=800&fit=crop" alt="Founder" class="w-full h-full object-cover object-top opacity-100 transition-all duration-500">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="md:col-span-7 flex flex-col items-start">
                    <!-- Quote Icon -->
                    <div class="mb-6">
                        <svg width="44" height="44" viewBox="0 0 24 24" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 7L7 13H10.5V17H5.5V13L8.5 7H10ZM18 7L15 13H18.5V17H13.5V13L16.5 7H18Z" />
                        </svg>
                    </div>

                    <div class="space-y-6 text-[#4b5563] text-[14px] leading-[1.8] mb-12">
                        <p>
                            Hi, I'm Durgesh, the founder of Aura Infotech.<br>
                            I started Aura Infotech with a passion for technology and a vision to help businesses grow in the digital world.
                        </p>
                        <p>
                            I focus on building modern websites, mobile applications, and digital solutions that help businesses create a strong online presence. My goal is to provide simple, effective, and scalable technology solutions that support real business growth.
                        </p>
                        <p>
                            I believe that when creativity and technology come together, they can create powerful digital experiences that not only look great but also deliver real results for businesses.
                        </p>
                    </div>

                    <!-- Founder Info -->
                    <div class="flex items-center gap-5">
                        <!-- Logo in black rounded box -->
                        <div class="w-[64px] h-[64px] bg-black rounded-[14px] flex items-center justify-center p-3 shadow-lg">
                            <svg width="36" height="18" viewBox="0 0 100 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 44C12.9543 44 4 35.0457 4 24C4 12.9543 12.9543 4 24 4C31.5435 4 38.0772 8.16335 41.5173 14.5029L58.4827 33.4971C61.9228 39.8367 68.4565 44 76 44C87.0457 44 96 35.0457 96 24C96 12.9543 87.0457 4 76 4C68.4565 4 61.9228 8.16335 58.4827 14.5029L41.5173 33.4971C38.0772 39.8367 31.5435 44 24 44Z" stroke="url(#paint0_linear_small)" stroke-width="8" stroke-linecap="round"/>
                                <defs>
                                    <linearGradient id="paint0_linear_small" x1="4" y1="24" x2="96" y2="24" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#00f2fe" />
                                        <stop offset="0.33" stop-color="#4facfe" />
                                        <stop offset="0.66" stop-color="#f5576c" />
                                        <stop offset="1" stop-color="#f09819" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[17px] font-bold text-gray-900 tracking-tight">Mr. Durgesh S. Kirnapure</h4>
                            <p class="text-gray-500 text-[13px] font-medium mt-0.5">Founder & CEO</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- What We Focus On Section -->
    <section class="relative w-full max-w-[1400px] mx-auto px-10 py-24 z-10">
        <div class="text-center mb-16">
            <h2 class="text-[36px] font-bold text-white tracking-tight">What We Focus On</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 flex flex-col min-h-[220px]">
                <div class="flex justify-between items-start mb-6">
                    <h3 class="text-[19px] font-semibold text-white leading-snug">Results That<br>Drive Growth</h3>
                    <div class="text-[#00e5ff] mt-1">
                        <!-- Rocket Icon -->
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.25-2.5 3.5-2.5 3.5s2.25-1 3.5-2.5L16.5 6.5c1.5-1.5 1.5-2.5 1.5-2.5s-1 0-2.5 1.5L4.5 16.5z"></path><path d="M12 5l9 9"></path><path d="M9 15l1.5 1.5"></path><path d="M11.5 11.5l1 1"></path><circle cx="16.5" cy="7.5" r="1.5"></circle></svg>
                    </div>
                </div>
                <p class="text-[#00e5ff] text-[13px] leading-[1.6]">
                    We're not here to check boxes. We focus on delivering measurable results.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 flex flex-col min-h-[220px]">
                <div class="flex justify-between items-start mb-6">
                    <h3 class="text-[19px] font-semibold text-white leading-snug">Client-First<br>Mindset</h3>
                    <div class="text-[#00e5ff] mt-1">
                        <!-- User Icon -->
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </div>
                </div>
                <p class="text-[#00e5ff] text-[13px] leading-[1.6]">
                    Every project begins with understanding you — your goals, your challenges, and your vision.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 flex flex-col min-h-[220px]">
                <div class="flex justify-between items-start mb-6">
                    <h3 class="text-[19px] font-semibold text-white leading-snug">Strategic<br>Problem Solving</h3>
                    <div class="text-[#00e5ff] mt-1">
                        <!-- Tools Icon -->
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                    </div>
                </div>
                <p class="text-[#00e5ff] text-[13px] leading-[1.6]">
                    We love solving problems with smart, scalable digital solutions. we build with the future in mind — not just a quick fix.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 flex flex-col min-h-[220px]">
                <div class="flex justify-between items-start mb-6">
                    <h3 class="text-[19px] font-semibold text-white leading-snug">Creative Meets<br>Functional</h3>
                    <div class="text-[#00e5ff] mt-1">
                        <!-- Lightbulb Icon -->
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A5 5 0 0 0 8 8c0 1 .3 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path><line x1="9" y1="18" x2="15" y2="18"></line><line x1="10" y1="22" x2="14" y2="22"></line></svg>
                    </div>
                </div>
                <p class="text-[#00e5ff] text-[13px] leading-[1.6]">
                    Design isn't just about looking good — it's about creating intuitive, high-performing experiences.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 flex flex-col min-h-[220px]">
                <div class="flex justify-between items-start mb-6">
                    <h3 class="text-[19px] font-semibold text-white leading-snug">End-to-End<br>Excellence</h3>
                    <div class="text-[#00e5ff] mt-1">
                        <!-- Sync Icon -->
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"></path></svg>
                    </div>
                </div>
                <p class="text-[#00e5ff] text-[13px] leading-[1.6]">
                    From strategy to launch — and beyond — we handle every stage with care.
                </p>
            </div>

            <!-- Card 6 -->
            <div class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 flex flex-col min-h-[220px]">
                <div class="flex justify-between items-start mb-6">
                    <h3 class="text-[19px] font-semibold text-white leading-snug">Transparency &<br>Trust</h3>
                    <div class="text-[#00e5ff] mt-1">
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

    <!-- Contact Us Section -->
    <section id="contact" class="relative w-full max-w-[1400px] mx-auto px-10 py-24 z-10 mb-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            <!-- Left Side Info -->
            <div class="lg:col-span-5 flex flex-col items-start">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-5 py-2 rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 mb-6 shadow-[0_0_20px_rgba(59,130,246,0.2)]">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 12 12 17 22 12"></polyline>
                        <polyline points="2 17 12 22 22 17"></polyline>
                    </svg>
                    <span class="text-white text-[14px] font-medium tracking-wide">Contact Us</span>
                </div>

                <!-- Gradient Infinity Logo -->
                <div class="mb-6">
                    <svg width="60" height="30" viewBox="0 0 100 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 44C12.9543 44 4 35.0457 4 24C4 12.9543 12.9543 4 24 4C31.5435 4 38.0772 8.16335 41.5173 14.5029L58.4827 33.4971C61.9228 39.8367 68.4565 44 76 44C87.0457 44 96 35.0457 96 24C96 12.9543 87.0457 4 76 4C68.4565 4 61.9228 8.16335 58.4827 14.5029L41.5173 33.4971C38.0772 39.8367 31.5435 44 24 44Z" stroke="url(#paint0_linear_contact)" stroke-width="8" stroke-linecap="round"/>
                        <defs>
                            <linearGradient id="paint0_linear_contact" x1="4" y1="24" x2="96" y2="24" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#00f2fe" />
                                <stop offset="0.33" stop-color="#4facfe" />
                                <stop offset="0.66" stop-color="#f5576c" />
                                <stop offset="1" stop-color="#f09819" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <h2 class="text-[28px] md:text-[36px] font-bold text-white mb-6 tracking-tight leading-snug">Let's build something great together.</h2>
                <p class="text-[#9ca3af] text-[14px] leading-relaxed mb-10">
                    Have a project in mind or just want to say hello? We'd love to hear from you. Whether you're ready to get started or just exploring ideas, our team is here to help.
                </p>

                <!-- Contact Details -->
                <div class="space-y-6 w-full">
                    <!-- Phone -->
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-white/[0.03] border border-white/[0.08] rounded-xl flex items-center justify-center text-[#00e5ff]">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-[15px] font-semibold text-white">Talk to Us</h4>
                            <p class="text-[#9ca3af] text-[13px] mt-0.5">+91 9881361677</p>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-white/[0.03] border border-white/[0.08] rounded-xl flex items-center justify-center text-[#00e5ff]">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div>
                            <h4 class="text-[15px] font-semibold text-white">Reach Out Anytime</h4>
                            <p class="text-[#9ca3af] text-[13px] mt-0.5">Gondia, Maharashtra</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side Form -->
            <div class="lg:col-span-7">
                <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" class="bg-[#0c0c0c]/40 border border-white/[0.04] p-8 md:p-12 rounded-[24px] shadow-[0_30px_60px_rgba(0,0,0,0.6)] space-y-6">
                    @csrf
                    <!-- Name -->
                    <div>
                        <input type="text" name="name" placeholder="Name" class="w-full bg-[#030303] border border-white/[0.08] rounded-xl px-5 py-4 text-white text-[14px] placeholder-white/30 focus:outline-none focus:border-blue-500/50 focus:ring-1 focus:ring-blue-500/30 transition-all duration-300">
                    </div>

                    <!-- Email -->
                    <div>
                        <input type="email" name="email" placeholder="Email" class="w-full bg-[#030303] border border-white/[0.08] rounded-xl px-5 py-4 text-white text-[14px] placeholder-white/30 focus:outline-none focus:border-blue-500/50 focus:ring-1 focus:ring-blue-500/30 transition-all duration-300">
                    </div>

                    <!-- Phone and Option Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <input type="tel" name="phone" placeholder="Phone" class="w-full bg-[#030303] border border-white/[0.08] rounded-xl px-5 py-4 text-white text-[14px] placeholder-white/30 focus:outline-none focus:border-blue-500/50 focus:ring-1 focus:ring-blue-500/30 transition-all duration-300">
                        </div>
                        <div class="relative">
                            <select name="service" class="w-full bg-[#030303] border border-white/[0.08] rounded-xl px-5 py-4 text-white/50 text-[14px] appearance-none focus:outline-none focus:border-blue-500/50 focus:ring-1 focus:ring-blue-500/30 transition-all duration-300 cursor-pointer">
                                <option value="" disabled selected>Web Development</option>
                                <option value="app">App Development</option>
                                <option value="uiux">UI/UX Design</option>
                                <option value="seo">SEO & Digital Presence</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-5 pointer-events-none text-white/40">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Message -->
                    <div>
                        <textarea name="message" rows="5" placeholder="Message" class="w-full bg-[#030303] border border-white/[0.08] rounded-xl px-5 py-4 text-white text-[14px] placeholder-white/30 focus:outline-none focus:border-blue-500/50 focus:ring-1 focus:ring-blue-500/30 transition-all duration-300 resize-none"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="w-full bg-[#f3f4f6] text-black font-semibold py-4 rounded-xl hover:bg-white active:scale-[0.98] transition-all duration-300 shadow-lg">Submit</button>
                    </div>
                </form>
            </div>
            
        </div>
    </section>

    <!-- Footer CTA Section -->
    <section class="relative w-full max-w-[1400px] mx-auto px-10 mb-20 z-10">
        <div class="w-full bg-gradient-to-r from-blue-600 via-cyan-500 to-cyan-400 rounded-[32px] py-16 px-8 md:px-16 flex flex-col items-center text-center shadow-[0_20px_50px_rgba(6,182,212,0.2)]">
            <h2 class="text-white text-[28px] md:text-[40px] font-bold tracking-tight mb-4">Crafted by Experts, Built for Growth</h2>
            <p class="text-blue-950 font-medium text-[15px] md:text-[16px] max-w-2xl mb-8 leading-relaxed">
                Take your business to the next level with cutting-edge web development and digital solutions.
            </p>
            <a href="/contact-us" class="bg-black text-white font-semibold px-8 py-4 rounded-xl hover:bg-black/90 active:scale-[0.98] transition-all duration-300 shadow-xl text-[14px]">
                Partner with Us Today
            </a>
        </div>
    </section>

    <!-- Footer Main Section -->
    <footer class="w-full bg-[#030303] border-t border-white/[0.04] pt-16 pb-8 z-10 relative">
        <div class="max-w-[1200px] mx-auto px-10 flex flex-col items-center">
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

        // Rotating Text Effect

// Cart functionality
const cart = JSON.parse(localStorage.getItem('cart') || '[]');
function updateCartCount() {
    const countEl = document.getElementById('cart-count');
    if (countEl) countEl.textContent = cart.length;
}
function addToCart(event) {
    const btn = event.currentTarget;
    const title = btn.dataset.title || '';
    const price = btn.dataset.price || '';
    const description = btn.dataset.description || '';
    const image = btn.dataset.image || '';
    // Check if item already exists in cart by title
    const existing = cart.find(item => item.title === title);
    if (existing) {
        existing.quantity = (existing.quantity || 1) + 1;
    } else {
        cart.push({ title, price, description, image, quantity: 1 });
    }
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCount();
    alert(`${title} added to cart`);
}
document.querySelectorAll('.add-to-cart-btn').forEach(btn => btn.addEventListener('click', () => {
    addToCart(event);
    window.location.href = '/cart';
}));
updateCartCount();

        function renderCart() {
            const stored = JSON.parse(localStorage.getItem('cart') || '[]');
            cartItemsEl.innerHTML = '';
            if (stored.length === 0) {
                cartItemsEl.innerHTML = '<li class="text-gray-400">Cart is empty.</li>';
            } else {
                stored.forEach(item => {
                    const li = document.createElement('li');
                    li.className = 'flex justify-between';
                    li.innerHTML = `<span>${item.title}</span><span>${item.price}</span>`;
                    cartItemsEl.appendChild(li);
                });
            }
        }

        cartBtn?.addEventListener('click', () => {
            renderCart();
            cartModal.classList.remove('hidden');
        });

        closeCartBtn?.addEventListener('click', () => {
            cartModal.classList.add('hidden');
        });

        proceedBtn?.addEventListener('click', () => {
            alert('Proceed to checkout (not implemented).');
        });

        // Existing words array for rotating text
        const words = [
            "- SaaS Platforms",
            "- Web Development",
            "- App Development",
            "- Digital Presence",
            "- UI/UX Design"
        ];
        let currentWordIndex = 0;
        const rotatingTextEl = document.getElementById('rotating-text');

        function rotateText() {
            if (!rotatingTextEl) return;
            rotatingTextEl.style.opacity = 0;
            rotatingTextEl.style.transform = 'translateY(10px)';
            rotatingTextEl.style.transition = 'opacity 0.5s ease, transform 0.5s ease';

            setTimeout(() => {
                currentWordIndex = (currentWordIndex + 1) % words.length;
                rotatingTextEl.textContent = words[currentWordIndex];
                rotatingTextEl.style.opacity = 1;
                rotatingTextEl.style.transform = 'translateY(0)';
            }, 500);
        }

        setInterval(rotateText, 3000);

        // AJAX Contact Form Handler
        function initContactForm() {
            const contactForm = document.getElementById('contact-form');
            if (!contactForm) return;

            contactForm.addEventListener('submit', async (e) => {
                e.preventDefault();

                const submitBtn = contactForm.querySelector('button[type="submit"]');
                const originalBtnText = submitBtn.textContent;

                // Show spinner / loading state
                submitBtn.disabled = true;
                submitBtn.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-black inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" style="animation: spin 1s linear infinite; width: 1.25rem; height: 1.25rem;">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" style="opacity: 0.25;"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z" style="opacity: 0.75;"></path>
                    </svg>
                    Sending...
                `;

                const formData = new FormData(contactForm);

                try {
                    const response = await fetch(contactForm.action, {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        },
                        body: formData
                    });

                    const data = await response.json();

                    if (response.ok && data.success) {
                        showToast(data.message, 'success');
                        
                        // Hide the form fields
                        const formFields = contactForm.querySelectorAll(':scope > :not(input[name="_token"])');
                        formFields.forEach(el => el.style.display = 'none');

                        // Insert a beautiful confirmation message
                        const confirmationEl = document.createElement('div');
                        confirmationEl.id = 'form-success-message';
                        confirmationEl.className = 'flex flex-col items-center justify-center text-center py-10 space-y-6 transition-all duration-500 opacity-0 transform translate-y-4';
                        confirmationEl.innerHTML = `
                            <!-- Animated Checkmark Icon -->
                            <div class="w-20 h-20 bg-[#00f2fe]/10 border border-[#00f2fe]/30 rounded-full flex items-center justify-center shadow-[0_0_30px_rgba(0,242,254,0.2)]" style="animation: bounce 2s infinite;">
                                <svg class="text-[#00e5ff]" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                            
                            <div class="space-y-2">
                                <h3 class="text-white text-[22px] font-bold tracking-tight">Inquiry Sent Successfully!</h3>
                                <p class="text-[#9ca3af] text-[14px] max-w-sm leading-relaxed mx-auto">
                                    Thank you for reaching out to Aura Infotech. Your message has been safely delivered, and our technology experts will get back to you within 24 hours.
                                </p>
                            </div>

                            <button type="button" id="reset-form-btn" class="px-6 py-2.5 bg-white/[0.08] hover:bg-white/[0.15] text-white text-[13px] font-semibold rounded-xl border border-white/[0.08] transition-all duration-300 active:scale-[0.98]">
                                Send Another Message
                            </button>
                        `;

                        contactForm.appendChild(confirmationEl);

                        // Fade in
                        setTimeout(() => {
                            confirmationEl.classList.remove('opacity-0', 'translate-y-4');
                            confirmationEl.classList.add('opacity-100', 'translate-y-0');
                        }, 50);

                        // Reset handler
                        const resetBtn = confirmationEl.querySelector('#reset-form-btn');
                        resetBtn.addEventListener('click', () => {
                            confirmationEl.remove();
                            contactForm.reset();
                            formFields.forEach(el => el.style.display = '');
                        });
                    } else {
                        showToast(data.message || 'An error occurred. Please check your fields.', 'error');
                    }
                } catch (error) {
                    showToast('Something went wrong. Please try again later.', 'error');
                } finally {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalBtnText;
                }
            });

            function showToast(message, type) {
                // Remove existing toasts first to prevent stacking clutter
                const existing = document.querySelectorAll('.custom-toast');
                existing.forEach(t => t.remove());

                const toast = document.createElement('div');
                toast.className = `custom-toast fixed bottom-6 right-6 z-[9999] flex items-center gap-3 px-6 py-4 rounded-2xl border backdrop-blur-xl transition-all duration-500 transform translate-y-10 opacity-0 shadow-[0_20px_50px_rgba(0,0,0,0.5)] ${
                    type === 'success' 
                        ? 'bg-[#00f2fe]/10 border-[#00f2fe]/30 text-white' 
                        : 'bg-red-500/10 border-red-500/30 text-white'
                }`;
                
                const icon = type === 'success' 
                    ? `<svg class="text-[#00e5ff]" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>`
                    : `<svg class="text-red-500" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>`;

                toast.innerHTML = `
                    ${icon}
                    <span class="text-[14px] font-medium tracking-wide">${message}</span>
                `;

                document.body.appendChild(toast);

                setTimeout(() => {
                    toast.classList.remove('translate-y-10', 'opacity-0');
                    toast.classList.add('translate-y-0', 'opacity-100');
                }, 100);

                setTimeout(() => {
                    toast.classList.remove('translate-y-0', 'opacity-100');
                    toast.classList.add('translate-y-10', 'opacity-0');
                    setTimeout(() => toast.remove(), 500);
                }, 4000);
            }
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initContactForm);
        } else {
            initContactForm();
        }
        
        // Add CSS keyframe style for rotating spinner dynamically
        if (!document.getElementById('spin-keyframe-style')) {
            const style = document.createElement('style');
            style.id = 'spin-keyframe-style';
            style.textContent = `
                @keyframes spin {
                    from { transform: rotate(0deg); }
                    to { transform: rotate(360deg); }
                }
                @keyframes bounce {
                    0%, 100% { transform: translateY(0); }
                    50% { transform: translateY(-12px); }
                }
            `;
            document.head.appendChild(style);
        }
    </script>
</body>
</html>
