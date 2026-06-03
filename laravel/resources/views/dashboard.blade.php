<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard – Aura Infotech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {font-family: 'Inter', sans-serif; background-color:#050505; color:#fff;}
    </style>
</head>
<body class="min-h-screen flex">

    @include('partials.sidebar')

    <!-- Main Content -->
    <main class="flex-1 p-10 md:ml-64">
        <h1 class="text-4xl font-bold mb-6 text-[#00e5ff]">Welcome, {{ Auth::user()->name ?? 'User' }}!</h1>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 mb-8">
            <!-- Account Details Card -->
            <div class="bg-white/10 backdrop-blur-lg rounded-xl shadow-xl p-6 flex flex-col space-y-3">
                <div class="flex items-center space-x-4">
                    <img src="{{ Auth::user()->profile_photo ? asset('storage/' . Auth::user()->profile_photo) : 'https://i.pravatar.cc/80' }}" alt="Avatar" class="w-16 h-16 rounded-full ring-2 ring-[#00e5ff]" />
                    <div>
                        <h2 class="text-xl font-semibold text-[#00e5ff]">{{ Auth::user()->name }}</h2>
                        <p class="text-sm text-[#9ca3af]">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <div class="border-t border-white/20 pt-3">
                    <p class="text-sm"><strong>Member Since:</strong> {{ Auth::user()->created_at->format('M d, Y') }}</p>
                    <p class="text-sm"><strong>Last Login:</strong> {{ Auth::user()->last_login_at ? Auth::user()->last_login_at->diffForHumans() : 'Never' }}</p>
                    <p class="text-sm"><strong>Status:</strong> <span class="{{ Auth::user()->is_active ? 'text-green-400' : 'text-red-400' }}">{{ Auth::user()->is_active ? 'Active' : 'Inactive' }}</span></p>
                </div>
            </div>

            <!-- Purchases Chart Card -->
            <div class="bg-white/10 backdrop-blur-lg rounded-xl shadow-xl p-6 col-span-2 lg:col-span-2">
                <h2 class="text-xl font-semibold text-[#00e5ff] mb-2">Purchases Overview ({{ now()->year }})</h2>
                <canvas id="purchasesChart" class="w-full h-64"></canvas>
            </div>
        </div>
        <p class="text-lg text-[#9ca3af]">
            This is your dashboard. Use the navigation on the left to access your purchases,
            courses, profile, or to log out.
        </p>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('purchasesChart').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: @json($labels),
                    datasets: [{
                        label: 'Purchases',
                        data: @json($monthlyData),
                        backgroundColor: 'rgba(0, 229, 255, 0.2)',
                        borderColor: '#00e5ff',
                        tension: 0.4,
                        fill: true,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: { legend: { display: false } },
                    scales: {
                        y: { beginAtZero: true, ticks: { color: '#fff' } },
                        x: { ticks: { color: '#fff' } }
                    }
                }
            });
        </script>
    </main>
</body>
</html>
