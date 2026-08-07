<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bankdash. - Sign Up</title>

    <!-- Google Fonts Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tabler Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.46.0/tabler-icons.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F4F7FB;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6 relative antialiased">

    <!-- Top Left Brand Logo -->
    <a href="{{ route('admin.index') }}" class="absolute top-8 left-8 flex items-center gap-1">
        <span class="text-2xl font-extrabold tracking-tight text-[#1F2937]">Bankdash.</span>
    </a>

    <!-- Main Auth Card -->
    <div class="w-full max-w-md bg-white rounded-3xl p-8 sm:p-10 shadow-xl shadow-slate-200/60 border border-slate-100">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-[#1F2937]">Sign Up</h1>
            <p class="text-xs text-[#6B7280] mt-1.5 font-medium">
                Already have an account? <a href="{{ route('admin.login') }}" class="text-[#4B5563] hover:underline font-semibold">Sign In Here!</a>
            </p>
        </div>

        <!-- Social Icons -->
        <div class="grid grid-cols-3 gap-3 mb-6">
            <button type="button" class="py-2.5 px-4 border border-slate-200 rounded-2xl flex items-center justify-center hover:bg-slate-50 transition-colors">
                <span class="font-extrabold text-base text-[#EA4335]">G</span>
            </button>
            <button type="button" class="py-2.5 px-4 border border-slate-200 rounded-2xl flex items-center justify-center hover:bg-slate-50 transition-colors">
                <span class="font-extrabold text-base text-[#1877F2]">f</span>
            </button>
            <button type="button" class="py-2.5 px-4 border border-slate-200 rounded-2xl flex items-center justify-center hover:bg-slate-50 transition-colors text-[#1DA1F2]">
                <i class="ti ti-brand-twitter text-lg"></i>
            </button>
        </div>

        <!-- Divider -->
        <div class="relative flex items-center justify-center mb-6">
            <div class="border-t border-slate-100 w-full"></div>
            <span class="bg-white px-3 text-[11px] font-semibold text-slate-400 tracking-wider uppercase absolute">OR</span>
        </div>

        <!-- Register Form -->
        <form action="{{ route('admin.register.submit') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-xs font-semibold text-[#374151] mb-1.5">Full Name</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-3 text-sm bg-white border border-slate-200 rounded-xl text-slate-800 focus:ring-2 focus:ring-[#1814F3] focus:border-[#1814F3] transition-all outline-none">
            </div>

            <div>
                <label for="email" class="block text-xs font-semibold text-[#374151] mb-1.5">Email address</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-3 text-sm bg-white border border-slate-200 rounded-xl text-slate-800 focus:ring-2 focus:ring-[#1814F3] focus:border-[#1814F3] transition-all outline-none">
            </div>

            <div>
                <label for="password" class="block text-xs font-semibold text-[#374151] mb-1.5">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-3 text-sm bg-white border border-slate-200 rounded-xl text-slate-800 focus:ring-2 focus:ring-[#1814F3] focus:border-[#1814F3] transition-all outline-none">
            </div>

            <button type="submit" class="w-full py-3.5 px-4 bg-[#1814F3] hover:bg-blue-700 text-white font-bold text-sm rounded-xl shadow-lg shadow-[#1814F3]/25 transition-all transform active:scale-[0.99] mt-3">
                Register
            </button>
        </form>
    </div>
</body>
</html>
