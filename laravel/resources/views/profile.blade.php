<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile – Aura Infotech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {font-family: 'Inter', sans-serif; background-color:#050505; color:#fff;}
    </style>
</head>
<body class="flex min-h-screen bg-[#050505] text-white">
  <div class="flex flex-1">
    @include('partials.sidebar')

    <!-- Main content -->
    <main class="flex-1 p-6 flex items-center justify-center">
      <div class="w-full max-w-2xl">
        <div class="grid gap-6">
    <!-- Avatar Card -->
    <div class="bg-white/10 backdrop-blur-lg rounded-xl shadow-xl p-6 flex items-center">
        <img src="{{ Auth::user()->profile_photo ? asset('storage/' . Auth::user()->profile_photo) : 'https://i.pravatar.cc/150?img=3' }}" alt="Avatar" class="w-24 h-24 rounded-full ring-4 ring-[#00e5ff]"/>
        <div class="ml-4">
            <h2 class="text-2xl font-semibold text-[#00e5ff]">{{ Auth::user()->name }}</h2>
            <p class="text-sm text-[#9ca3af]">{{ Auth::user()->email }}</p>
        </div>
    </div>

    <!-- Profile Details Card -->
    <div class="bg-white/10 backdrop-blur-lg rounded-xl shadow-xl p-6">
        <h3 class="text-lg font-medium text-[#00e5ff] mb-3">Profile Details</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-sm text-[#9ca3af]">
            <p><span class="font-medium text-[#e0e0e0]">Member Since:</span> {{ Auth::user()->created_at->format('M d, Y') }}</p>
            <p><span class="font-medium text-[#e0e0e0]">Last Login:</span> {{ Auth::user()->last_login_at ? Auth::user()->last_login_at->format('M d, Y H:i') : 'Never' }}</p>
            <p><span class="font-medium text-[#e0e0e0]">Account Status:</span> {{ Auth::user()->is_active ? 'Active' : 'Inactive' }}</p>
        </div>
    </div>

    <!-- Edit Form Card (hidden) -->
    <form id="profileForm" class="space-y-4 hidden bg-white/10 backdrop-blur-lg rounded-xl shadow-xl p-6" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm mb-1">Full Name</label>
            <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="w-full rounded-md bg-white/20 focus:bg-white/30 focus:outline-none text-white px-3 py-2 transition"/>
        </div>
        <div>
            <label class="block text-sm mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="w-full rounded-md bg-white/20 focus:bg-white/30 focus:outline-none text-white px-3 py-2 transition"/>
        </div>
        <div class="mt-4">
            <label class="block text-sm mb-1">Profile Photo</label>
            <input type="file" name="profile_photo" class="w-full text-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:bg-[#00e5ff] file:text-white hover:file:bg-[#00c2e0]"/>
        </div>
        <div class="flex space-x-4 mt-4">
            <button type="submit" class="px-4 py-2 bg-[#00e5ff] rounded-md hover:bg-[#00c2e0] transition">Save</button>
            <button type="button" id="cancelBtn" class="px-4 py-2 bg-gray-600 rounded-md hover:bg-gray-500 transition">Cancel</button>
            <button type="button" id="changePwdBtn" class="px-4 py-2 bg-[#00e5ff] rounded-md hover:bg-[#00c2e0] transition">Change Password</button>
        </div>
        <form id="passwordForm" class="hidden mt-4" method="POST" action="{{ route('profile.password') }}">
            @csrf
            @method('POST')
            <div class="mb-2">
                <label class="block text-sm mb-1">New Password</label>
                <input type="password" name="password" class="w-full rounded-md bg-white/20 focus:bg-white/30 focus:outline-none text-white px-3 py-2 transition" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation" class="w-full rounded-md bg-white/20 focus:bg-white/30 focus:outline-none text-white px-3 py-2 transition" required />
            </div>
            <div class="flex space-x-4">
                <button type="submit" class="px-4 py-2 bg-[#00e5ff] rounded-md hover:bg-[#00c2e0] transition">Save Password</button>
                <button type="button" id="cancelPwdBtn" class="px-4 py-2 bg-gray-600 rounded-md hover:bg-gray-500 transition">Cancel</button>
            </div>
        </form>
    </form>

    <div class="flex space-x-4">
        <button id="editBtn" class="px-4 py-2 bg-[#00e5ff] rounded-md hover:bg-[#00c2e0] transition">Edit Profile</button>
    </div>
</div>
      </div>
    </main>
  </div>
</body>

  <script>
  <script>
  const editBtn = document.getElementById('editBtn');
  const cancelBtn = document.getElementById('cancelBtn');
  const form = document.getElementById('profileForm');
  const changePwdBtn = document.getElementById('changePwdBtn');
  const cancelPwdBtn = document.getElementById('cancelPwdBtn');
  const passwordForm = document.getElementById('passwordForm');

  editBtn?.addEventListener('click', () => {
    form.classList.remove('hidden');
    editBtn.classList.add('hidden');
  });
  cancelBtn?.addEventListener('click', () => {
    form.classList.add('hidden');
    editBtn.classList.remove('hidden');
  });
  changePwdBtn?.addEventListener('click', () => {
    passwordForm.classList.remove('hidden');
  });
  cancelPwdBtn?.addEventListener('click', () => {
    passwordForm.classList.add('hidden');
  });
</script>
  </script>
</body>
</html>
