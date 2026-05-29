<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Aura Infotech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {font-family: 'Inter', sans-serif; background-color: #050505; color: #fff;}
        .glass {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,0.12);
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md mx-4 glass p-8">
        <h2 class="text-2xl font-bold text-center mb-6">Create Account</h2>
        @if(session('status'))
            <div class="bg-green-600 text-sm text-center rounded p-2 mb-4">{{ session('status') }}</div>
        @endif
        @if($errors->any())
            <div class="bg-red-600 text-sm text-center rounded p-2 mb-4">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register.post') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-sm mb-1" for="name">Name</label>
                <input type="text" name="name" id="name" required class="w-full px-3 py-2 rounded bg-[#1a1a1a] border border-[#333] focus:outline-none focus:ring-2 focus:ring-[#00e5ff]" placeholder="Your Name">
            </div>
            <div class="mb-4">
                <label class="block text-sm mb-1" for="email">Email</label>
                <input type="email" name="email" id="email" required class="w-full px-3 py-2 rounded bg-[#1a1a1a] border border-[#333] focus:outline-none focus:ring-2 focus:ring-[#00e5ff]" placeholder="you@example.com">
            </div>
            <div class="mb-4">
                <label class="block text-sm mb-1" for="password">Password</label>
                <input type="password" name="password" id="password" required class="w-full px-3 py-2 rounded bg-[#1a1a1a] border border-[#333] focus:outline-none focus:ring-2 focus:ring-[#00e5ff]" placeholder="••••••••">
            </div>
            <div class="mb-4">
                <label class="block text-sm mb-1" for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full px-3 py-2 rounded bg-[#1a1a1a] border border-[#333] focus:outline-none focus:ring-2 focus:ring-[#00e5ff]" placeholder="••••••••">
            </div>
            <button type="submit" class="w-full py-2 bg-[#00e5ff] hover:bg-[#0099cc] text-white rounded transition-colors shadow-lg">Sign Up</button>
        </form>
        <p class="text-center text-sm mt-4">Already have an account? <a href="{{ route('login') }}" class="text-[#00e5ff] hover:underline">Login</a></p>
    </div>
</body>
</html>
