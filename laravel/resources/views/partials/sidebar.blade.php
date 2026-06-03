<!-- Sidebar Partial -->

<style>
    @media (max-width: 767px) {
        #sidebar {
            display: none !important;
        }
        #sidebar.mobile-open {
            display: flex !important;
        }
    }
    @media (min-width: 768px) {
        #sidebar {
            display: flex !important;
        }
    }
</style>

<aside id="sidebar"
       class="fixed inset-y-0 left-0 bg-[#050505] w-64 p-4 overflow-y-auto z-20 hidden md:flex flex-col"
    <!-- Header / Logo -->
    <div class="flex items-center mb-8">
        <svg class="w-8 h-8 text-[#00e5ff]" fill="none" stroke="currentColor"
             viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                                          stroke-linejoin="round"
                                                                          stroke-width="2"
                                                                          d="M12 8c-1.657 0-3 1.343-3 3v4h6v-4c0-1.657-1.343-3-3-3z"/></svg>
        <span class="ml-2 text-xl font-semibold text-[#00e5ff]">Aura</span>
    </div>

    <!-- Mobile close button -->
    <button id="closeSidebar"
            class="md:hidden absolute top-4 right-4 text-white focus:outline-none">
        ✕
    </button>

    <nav class="space-y-2 mt-8">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-2 px-3 py-2 rounded-md text-[#00e5ff] hover:bg-white/20 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"/></svg>
            Dashboard
        </a>

        <a href="{{ route('courses') }}" class="flex items-center gap-2 px-3 py-2 rounded-md text-[#00e5ff] hover:bg-white/20 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M12 8c-1.657 0-3 1.343-3 3v4h6v-4c0-1.657-1.343-3-3-3z"/></svg>
            Courses
        </a>

        <a href="{{ route('profile') }}" class="flex items-center gap-2 px-3 py-2 rounded-md font-semibold text-[#00e5ff] hover:bg-white/20 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M5.121 17.804A9 9 0 1117.804 5.121"/></svg>
            Profile
        </a>

        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit"
                    class="flex items-center gap-2 px-3 py-2 rounded-md text-[#00e5ff] hover:bg-white/20 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M17 16l4-4m0 0l-4-4m4 4H7"/></svg>
                Logout
            </button>
        </form>
    </nav>
</aside>

<!-- Mobile open button (hamburger) -->
<button id="openSidebar"
        class="md:hidden fixed top-4 left-4 text-white z-50">
    <svg class="w-6 h-6" fill="none" stroke="currentColor"
         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
    </svg>
</button>

<script>
    const sidebar = document.getElementById('sidebar');
    const openBtn = document.getElementById('openSidebar');
    const closeBtn = document.getElementById('closeSidebar');

    // Toggle sidebar visibility on mobile
    openBtn?.addEventListener('click', () => {
        sidebar.classList.add('mobile-open');
    });
    closeBtn?.addEventListener('click', () => {
        sidebar.classList.remove('mobile-open');
    });
</script>
