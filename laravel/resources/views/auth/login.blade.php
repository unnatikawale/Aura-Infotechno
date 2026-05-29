<?php
?>
{{-- resources/views/auth/login.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login – Aura Infotech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {font-family: 'Inter', sans-serif; background-color: #050505; color: #fff;}
        .glass {background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 12px;}
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full glass p-8">
        <h2 class="text-2xl font-bold text-center mb-6">Sign In</h2>
        @if ($errors->any())
            <div class="bg-red-600 bg-opacity-20 text-red-200 p-3 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('login.post') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium mb-1">Email</label>
                <input id="email" name="email" type="email" required class="w-full px-4 py-2 bg-gray-800 rounded focus:outline-none focus:ring-2 focus:ring-[#00e5ff]" />
            </div>
            <div>
                <label for="password" class="block text-sm font-medium mb-1">Password</label>
                <input id="password" name="password" type="password" required class="w-full px-4 py-2 bg-gray-800 rounded focus:outline-none focus:ring-2 focus:ring-[#00e5ff]" />
            </div>
            <div class="flex items-center justify-between">
                <a href="{{ route('register') }}" class="text-[#00e5ff] hover:underline text-sm">Create account</a>
                <button type="submit" class="bg-[#00e5ff] hover:bg-[#0099cc] text-white px-4 py-2 rounded transition">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
