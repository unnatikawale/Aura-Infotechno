<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Aura Infotech</title>
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
    <nav
        class="flex items-center justify-between px-6 md:px-10 py-6 md:py-8 max-w-[1400px] w-full mx-auto z-50 relative">
        <div class="flex items-center gap-3">
            <svg width="46" height="22" viewBox="0 0 100 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M24 44C12.9543 44 4 35.0457 4 24C4 12.9543 12.9543 4 24 4C31.5435 4 38.0772 8.16335 41.5173 14.5029L58.4827 33.4971C61.9228 39.8367 68.4565 44 76 44C87.0457 44 96 35.0457 96 24C96 12.9543 87.0457 4 76 4C68.4565 4 61.9228 8.16335 58.4827 14.5029L41.5173 33.4971C38.0772 39.8367 31.5435 44 24 44Z"
                    stroke="url(#paint0_linear)" stroke-width="8" stroke-linecap="round" />
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
            <a href="/services" class="text-[#00e5ff] font-medium transition-colors">Services</a>
            <a href="/blogs" class="text-gray-100 hover:text-white transition-colors">Blogs</a>
            <a href="/#about" class="text-gray-100 hover:text-white transition-colors">About Us</a>
            <a href="#contact" class="text-gray-100 hover:text-white transition-colors">Contact Us</a>
        </div>

        <!-- Hamburger Icon (Three lines) -->
        <button id="mobile-menu-btn"
            class="md:hidden flex flex-col justify-between w-6 h-4 text-white focus:outline-none z-50">
            <span class="w-full h-[2px] bg-white rounded-full transition-transform duration-300 origin-left"></span>
            <span class="w-full h-[2px] bg-white rounded-full transition-opacity duration-300"></span>
            <span class="w-full h-[2px] bg-white rounded-full transition-transform duration-300 origin-left"></span>
        </button>

        <!-- Mobile Menu Slide-over Panel -->
        <div id="mobile-menu"
            class="fixed top-0 left-0 w-full h-[50vh] bg-[#050505]/98 backdrop-blur-xl flex flex-col items-center justify-center gap-6 text-[18px] font-semibold text-white transition-transform duration-500 -translate-y-full md:hidden z-40 border-b border-white/[0.05] shadow-[0_10px_35px_rgba(0,0,0,0.9)]">
            <a href="/" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Home</a>
            <a href="/services" class="mobile-nav-link text-[#00e5ff] transition-colors">Services</a>
            <a href="/blogs" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Blogs</a>
            <a href="/#about" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">About Us</a>
            <a href="#contact" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Contact Us</a>
        </div>
    </nav>


    <!-- Our Services Section -->
    <section class="relative w-full max-w-[1400px] mx-auto px-6 md:px-10 py-16 z-10 mb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

            <!-- Intro Block -->
            <div class="bg-[#070707] rounded-[16px] p-10 flex flex-col justify-center min-h-[320px]">
                <h2 class="text-[44px] font-bold text-white mb-6 leading-[1.15]">Our<br>Services</h2>
                <p class="text-[#00e5ff] text-[16px] font-medium leading-relaxed max-w-[220px]">
                    Our Services That Drive Real Business Growth
                </p>
            </div>

            <!-- Card 1 -->
            <div
                class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 hover:-translate-y-2 hover:border-[#00ff88]/40 hover:shadow-[0_10px_30px_rgba(0,255,136,0.06)] transition-all duration-300 group cursor-default min-h-[320px] flex flex-col">
                <div class="mb-5 text-[#00ff88]">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                        <line x1="12" y1="18" x2="12.01" y2="18"></line>
                    </svg>
                </div>
                <h3 class="text-[16px] font-semibold text-white mb-3 group-hover:text-[#00ff88] transition-colors">
                    Application Modernization</h3>
                <p class="text-[#9ca3af] text-[12px] leading-[1.6] mb-6">
                    Upgrade your existing applications with modern technology, improved performance, and a better user
                    experience.
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
            <div
                class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 hover:-translate-y-2 hover:border-[#ff3366]/40 hover:shadow-[0_10px_30px_rgba(255,51,102,0.06)] transition-all duration-300 group cursor-default min-h-[320px] flex flex-col">
                <div class="mb-5 text-[#ff3366]">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="3" y1="9" x2="21" y2="9"></line>
                        <polyline points="9 16 6 13 9 10"></polyline>
                        <polyline points="15 10 18 13 15 16"></polyline>
                    </svg>
                </div>
                <h3 class="text-[16px] font-semibold text-white mb-3 group-hover:text-[#ff3366] transition-colors">
                    Modern Website Development</h3>
                <p class="text-[#9ca3af] text-[12px] leading-[1.6] mb-6">
                    We build fast, secure, and modern websites designed to represent your brand and convert visitors
                    into customers.
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
            <div
                class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 hover:-translate-y-2 hover:border-[#00e5ff]/40 hover:shadow-[0_10px_30px_rgba(0,229,255,0.06)] transition-all duration-300 group cursor-default min-h-[320px] flex flex-col">
                <div class="mb-5 text-[#00e5ff]">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="2" y1="12" x2="22" y2="12"></line>
                        <path
                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-[16px] font-semibold text-white mb-3 group-hover:text-[#00e5ff] transition-colors">
                    Digital Presence Management</h3>
                <p class="text-[#9ca3af] text-[12px] leading-[1.6] mb-6">
                    We help businesses establish and manage a strong online presence to increase visibility and attract
                    more customers.
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
            <div
                class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 hover:-translate-y-2 hover:border-[#ffffff]/40 hover:shadow-[0_10px_30px_rgba(255,255,255,0.06)] transition-all duration-300 group cursor-default min-h-[320px] flex flex-col">
                <div class="mb-5 text-[#ffffff]">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9.06 11.9 8.07-8.06a2.85 2.85 0 1 1 4.03 4.03l-8.06 8.08"></path>
                        <path
                            d="M7.07 14.94c-1.66 0-3 1.35-3 3.02 0 1.33-2.5 1.52-2 2.02 1.08 1.1 2.49 2.02 4 2.02 2.2 0 4-1.8 4-4.04a3.01 3.01 0 0 0-3-3.02z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-[16px] font-semibold text-white mb-3 group-hover:text-[#ffffff] transition-colors">
                    Modern UI/UX Design</h3>
                <p class="text-[#9ca3af] text-[12px] leading-[1.6] mb-6">
                    Our design approach focuses on creating beautiful and intuitive interfaces that enhance user
                    engagement.
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
            <div
                class="bg-[#070707] border border-white/[0.04] rounded-[16px] p-8 hover:-translate-y-2 hover:border-[#a855f7]/40 hover:shadow-[0_10px_30px_rgba(168,85,247,0.06)] transition-all duration-300 group cursor-default min-h-[320px] flex flex-col">
                <div class="mb-5 text-[#a855f7]">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                </div>
                <h3 class="text-[16px] font-semibold text-white mb-3 group-hover:text-[#a855f7] transition-colors">SaaS
                    & E-Commerce Platforms</h3>
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

    <!-- Contact Us Section -->
    <section id="contact" class="relative w-full max-w-[1400px] mx-auto px-6 md:px-10 py-24 z-10 mb-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

            <!-- Left Side Info -->
            <div class="lg:col-span-5 flex flex-col items-start">
                <!-- Badge -->
                <div
                    class="inline-flex items-center gap-2 px-5 py-2 rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 mb-6 shadow-[0_0_20px_rgba(59,130,246,0.2)]">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="text-white">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 12 12 17 22 12"></polyline>
                        <polyline points="2 17 12 22 22 17"></polyline>
                    </svg>
                    <span class="text-white text-[14px] font-medium tracking-wide">Contact Us</span>
                </div>

                <!-- Gradient Infinity Logo -->
                <div class="mb-6">
                    <svg width="60" height="30" viewBox="0 0 100 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24 44C12.9543 44 4 35.0457 4 24C4 12.9543 12.9543 4 24 4C31.5435 4 38.0772 8.16335 41.5173 14.5029L58.4827 33.4971C61.9228 39.8367 68.4565 44 76 44C87.0457 44 96 35.0457 96 24C96 12.9543 87.0457 4 76 4C68.4565 4 61.9228 8.16335 58.4827 14.5029L41.5173 33.4971C38.0772 39.8367 31.5435 44 24 44Z"
                            stroke="url(#paint0_linear_contact_services)" stroke-width="8" stroke-linecap="round" />
                        <defs>
                            <linearGradient id="paint0_linear_contact_services" x1="4" y1="24" x2="96" y2="24"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#00f2fe" />
                                <stop offset="0.33" stop-color="#4facfe" />
                                <stop offset="0.66" stop-color="#f5576c" />
                                <stop offset="1" stop-color="#f09819" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <h2 class="text-[28px] md:text-[36px] font-bold text-white mb-6 tracking-tight leading-snug">Let's build
                    something great together.</h2>
                <p class="text-[#9ca3af] text-[14px] leading-relaxed mb-10">
                    Have a project in mind or just want to say hello? We'd love to hear from you. Whether you're ready
                    to get started or just exploring ideas, our team is here to help.
                </p>

                <!-- Contact Details -->
                <div class="space-y-6 w-full">
                    <!-- Phone -->
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-white/[0.03] border border-white/[0.08] rounded-xl flex items-center justify-center text-[#00e5ff]">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[15px] font-semibold text-white">Talk to Us</h4>
                            <p class="text-[#9ca3af] text-[13px] mt-0.5">+91 9881361677</p>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 bg-white/[0.03] border border-white/[0.08] rounded-xl flex items-center justify-center text-[#00e5ff]">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
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
                <form action="#" method="POST"
                    class="bg-[#0c0c0c]/40 border border-white/[0.04] p-8 md:p-12 rounded-[24px] shadow-[0_30px_60px_rgba(0,0,0,0.6)] space-y-6">
                    @csrf
                    <!-- Name -->
                    <div>
                        <input type="text" name="name" placeholder="Name"
                            class="w-full bg-[#030303] border border-white/[0.08] rounded-xl px-5 py-4 text-white text-[14px] placeholder-white/30 focus:outline-none focus:border-blue-500/50 focus:ring-1 focus:ring-blue-500/30 transition-all duration-300">
                    </div>

                    <!-- Email -->
                    <div>
                        <input type="email" name="email" placeholder="Email"
                            class="w-full bg-[#030303] border border-white/[0.08] rounded-xl px-5 py-4 text-white text-[14px] placeholder-white/30 focus:outline-none focus:border-blue-500/50 focus:ring-1 focus:ring-blue-500/30 transition-all duration-300">
                    </div>

                    <!-- Phone and Option Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <input type="tel" name="phone" placeholder="Phone"
                                class="w-full bg-[#030303] border border-white/[0.08] rounded-xl px-5 py-4 text-white text-[14px] placeholder-white/30 focus:outline-none focus:border-blue-500/50 focus:ring-1 focus:ring-blue-500/30 transition-all duration-300">
                        </div>
                        <div class="relative">
                            <select name="service"
                                class="w-full bg-[#030303] border border-white/[0.08] rounded-xl px-5 py-4 text-white/50 text-[14px] appearance-none focus:outline-none focus:border-blue-500/50 focus:ring-1 focus:ring-blue-500/30 transition-all duration-300 cursor-pointer">
                                <option value="" disabled selected>Web Development</option>
                                <option value="app">App Development</option>
                                <option value="uiux">UI/UX Design</option>
                                <option value="seo">SEO & Digital Presence</option>
                            </select>
                            <div
                                class="absolute inset-y-0 right-0 flex items-center pr-5 pointer-events-none text-white/40">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Message -->
                    <div>
                        <textarea name="message" rows="5" placeholder="Message"
                            class="w-full bg-[#030303] border border-white/[0.08] rounded-xl px-5 py-4 text-white text-[14px] placeholder-white/30 focus:outline-none focus:border-blue-500/50 focus:ring-1 focus:ring-blue-500/30 transition-all duration-300 resize-none"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full bg-[#f3f4f6] text-black font-semibold py-4 rounded-xl hover:bg-white active:scale-[0.98] transition-all duration-300 shadow-lg">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <!-- Footer CTA Section -->
    <section class="relative w-full max-w-[1400px] mx-auto px-6 md:px-10 mb-20 z-10">
        <div
            class="w-full bg-gradient-to-r from-blue-600 via-cyan-500 to-cyan-400 rounded-[32px] py-16 px-8 md:px-16 flex flex-col items-center text-center shadow-[0_20px_50px_rgba(6,182,212,0.2)]">
            <h2 class="text-white text-[28px] md:text-[40px] font-bold tracking-tight mb-4">Crafted by Experts, Built
                for Growth</h2>
            <p class="text-blue-950 font-medium text-[15px] md:text-[16px] max-w-2xl mb-8 leading-relaxed">
                Take your business to the next level with cutting-edge web development and digital solutions.
            </p>
            <a href="#contact"
                class="bg-black text-white font-semibold px-8 py-4 rounded-xl hover:bg-black/90 active:scale-[0.98] transition-all duration-300 shadow-xl text-[14px]">
                Partner with Us Today
            </a>
        </div>
    </section>

    <!-- Footer Main Section -->
    <footer class="w-full bg-[#030303] border-t border-white/[0.04] pt-16 pb-8 z-10 relative">
        <div class="max-w-[1200px] mx-auto px-6 md:px-10 flex flex-col items-center">
            <!-- Brand Logo -->
            <div class="flex items-center gap-3 mb-6">
                <!-- Infinity Logo -->
                <svg width="40" height="20" viewBox="0 0 100 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24 44C12.9543 44 4 35.0457 4 24C4 12.9543 12.9543 4 24 4C31.5435 4 38.0772 8.16335 41.5173 14.5029L58.4827 33.4971C61.9228 39.8367 68.4565 44 76 44C87.0457 44 96 35.0457 96 24C96 12.9543 87.0457 4 76 4C68.4565 4 61.9228 8.16335 58.4827 14.5029L41.5173 33.4971C38.0772 39.8367 31.5435 44 24 44Z"
                        stroke="url(#paint0_linear_footer_services)" stroke-width="8" stroke-linecap="round" />
                    <defs>
                        <linearGradient id="paint0_linear_footer_services" x1="4" y1="24" x2="96" y2="24"
                            gradientUnits="userSpaceOnUse">
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
            <a href="mailto:support@aurainfotechno.in"
                class="flex items-center gap-2 text-[#9ca3af] hover:text-white transition-colors duration-300 text-[14px] mb-8">
                <!-- Telegram-like Send Icon -->
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="rotate-45">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
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