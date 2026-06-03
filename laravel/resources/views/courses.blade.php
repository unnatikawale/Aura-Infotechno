<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses – Aura Infotech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {font-family: 'Inter', sans-serif; background-color:#050505; color:#fff;}
    </style>
</head>
<body class="flex min-h-screen bg-[#050505] text-white">
    @include('partials.sidebar')
    <main class="flex-1 p-6">
        <h1 class="text-4xl font-bold mb-6 text-[#00e5ff]">Your Courses</h1>
        @if(isset($orders) && $orders->count())
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach($orders as $order)
                    @php
                        $items = $order->items; // assuming items is decoded JSON array
                    @endphp
                    @foreach($items as $item)
                        <div class="bg-white/10 backdrop-blur-lg rounded-xl shadow-xl p-4 flex flex-col">
                            <img src="{{ $item['image'] ?? 'https://via.placeholder.com/150' }}" alt="{{ $item['title'] ?? 'Course' }}" class="w-full h-40 object-cover rounded-md mb-3">
                            <h2 class="text-xl font-semibold text-[#00e5ff] mb-1">{{ $item['title'] ?? 'Untitled' }}</h2>
                            <p class="text-sm text-[#9ca3af] mb-2">{{ $item['description'] ?? 'No description' }}</p>
                            <div class="mt-auto text-lg font-bold text-[#00e5ff]">{{ $item['price'] ?? $order->total_amount }} {{ $order->currency ?? '' }}</div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        @else
            <p class="text-lg text-[#9ca3af]">You have not purchased any courses yet.</p>
        @endif
    </main>
</body>
</html>
