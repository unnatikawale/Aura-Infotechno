<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Aura Infotech</title>
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
            <a href="/about" class="text-gray-100 hover:text-white transition-colors">About Us</a>
            <a href="/contact-us" class="text-[#00e5ff] font-medium transition-colors">Contact Us</a>
        </div>

        <!-- Hamburger Icon (Three lines) -->
        <button id="mobile-menu-btn" class="md:hidden flex flex-col justify-between w-6 h-4 text-white focus:outline-none z-50">
            <span class="w-full h-[2px] bg-white rounded-full transition-transform duration-300 origin-left"></span>
            <span class="w-full h-[2px] bg-white rounded-full transition-opacity duration-300"></span>
            <span class="w-full h-[2px] bg-white rounded-full transition-transform duration-300 origin-left"></span>
        </button>

        <!-- Mobile Menu Slide-over Panel -->
        <div id="mobile-menu" class="fixed top-0 left-0 w-full h-[50vh] bg-[#050505]/98 backdrop-blur-xl flex flex-col items-center justify-center gap-6 text-[18px] font-semibold text-white transition-transform duration-500 -translate-y-full md:hidden z-40 border-b border-white/[0.05] shadow-[0_10px_35px_rgba(0,0,0,0.9)]">
            <a href="/" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Home</a>
            <a href="/services" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Services</a>
            <a href="/blogs" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">Blogs</a>
            <a href="/about" class="mobile-nav-link text-gray-200 hover:text-white transition-colors">About Us</a>
            <a href="/contact-us" class="mobile-nav-link text-[#00e5ff] transition-colors">Contact Us</a>
        </div>
    </nav>

    <!-- Main Content Section -->
    <main class="flex-1 z-10 relative">
        <!-- Contact Us Section (Matching welcome page) -->
        <section class="relative w-full max-w-[1400px] mx-auto px-10 py-16 md:py-24 z-10">
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
    </main>

    <!-- Footer CTA Section (Sweeping gradient CTA) -->
    <section class="relative w-full max-w-[1400px] mx-auto px-10 mb-20 z-10">
        <div class="w-full bg-gradient-to-r from-blue-600 via-cyan-500 to-cyan-400 rounded-[32px] py-16 px-8 md:px-16 flex flex-col items-center text-center shadow-[0_20px_50px_rgba(6,182,212,0.2)]">
            <h2 class="text-white text-[28px] md:text-[40px] font-bold tracking-tight mb-4">Crafted by Experts, Built for Growth</h2>
            <p class="text-blue-950 font-medium text-[15px] md:text-[16px] max-w-2xl mb-8 leading-relaxed">
                Take your business to the next level with cutting-edge web development and digital solutions.
            </p>
            <a href="#contact-form" class="bg-black text-white font-semibold px-8 py-4 rounded-xl hover:bg-black/90 active:scale-[0.98] transition-all duration-300 shadow-xl text-[14px]">
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
                <span class="text-[17px] font-bold tracking-tight">Aura Infotech</span>
            </div>

            <!-- Contact/Support details -->
            <p class="text-[#9ca3af] text-[13px] mb-8 hover:text-white transition-colors">support@aurainfotechno.in</p>

            <!-- Horizontal divider -->
            <div class="w-full border-t border-white/[0.04] mb-8"></div>

            <!-- Footer links & copyright -->
            <div class="w-full flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-8 text-[13px] text-[#9ca3af]">
                    <a href="/" class="hover:text-white transition-colors">Home</a>
                    <a href="/services" class="hover:text-white transition-colors">Services</a>
                    <a href="/blogs" class="hover:text-white transition-colors">Blogs</a>
                    <a href="/about" class="hover:text-white transition-colors">About Us</a>
                    <a href="/contact-us" class="text-white font-medium transition-colors">Contact Us</a>
                </div>
                <div class="text-[#4b5563] text-[12px] font-normal tracking-wide">
                    Copyright © 2026 Aura Infotech. All Rights Reserved.
                </div>
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
                // Animate hamburger back
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
        
        // Add CSS keyframe style dynamically
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
