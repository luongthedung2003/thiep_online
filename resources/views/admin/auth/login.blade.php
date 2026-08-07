<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BankDash Admin Sign In</title>

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
            background-color: #F5F7FA;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 relative antialiased">

    <!-- Top Left Brand Logo -->
    <a href="{{ route('admin.index') }}" class="absolute top-8 left-8 flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-[#1814F3] flex items-center justify-center text-white shadow-md shadow-[#1814F3]/20">
            <i class="ti ti-credit-card text-2xl"></i>
        </div>
        <span class="text-2xl font-extrabold tracking-tight text-[#343C6A]">BankDash</span>
    </a>

    <!-- Main Auth Card -->
    <div class="w-full max-w-md bg-white rounded-3xl p-8 border border-[#E6EFF5] shadow-xl shadow-slate-200/50">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-[#343C6A]">Admin Sign In</h1>
            <p class="text-sm text-[#718EBF] mt-1.5">Welcome back! Access your BankDash portal</p>
        </div>

        <form action="{{ route('login.submit') }}" method="POST" class="space-y-5">
            @csrf
            <div>
                <label for="email" class="block text-xs font-semibold text-[#343C6A] mb-2">Email Address</label>
                <div class="relative">
                    <i class="ti ti-at absolute left-4 top-1/2 -translate-y-1/2 text-[#718EBF] text-lg"></i>
                    <input type="email" id="email" name="email" required placeholder="admin@bankdash.com" class="w-full pl-11 pr-4 py-3 text-sm bg-[#F5F7FA] border-0 rounded-2xl text-[#343C6A] placeholder-[#8BA3CB] focus:ring-2 focus:ring-[#1814F3] transition-all outline-none">
                </div>
            </div>

            <div>
                <label for="password" class="block text-xs font-semibold text-[#343C6A] mb-2">Password</label>
                <div class="relative">
                    <i class="ti ti-lock absolute left-4 top-1/2 -translate-y-1/2 text-[#718EBF] text-lg"></i>
                    <input type="password" id="password" name="password" required placeholder="••••••••" class="w-full pl-11 pr-11 py-3 text-sm bg-[#F5F7FA] border-0 rounded-2xl text-[#343C6A] placeholder-[#8BA3CB] focus:ring-2 focus:ring-[#1814F3] transition-all outline-none">
                    <button type="button" onclick="togglePass()" class="absolute right-4 top-1/2 -translate-y-1/2 text-[#718EBF] hover:text-[#343C6A]">
                        <i class="ti ti-eye text-lg" id="eyeIcon"></i>
                    </button>
                </div>
            </div>

            <div class="flex items-center justify-between pt-1">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" class="w-4 h-4 accent-[#1814F3] rounded border-slate-300">
                    <span class="text-xs font-medium text-[#718EBF]">Remember me</span>
                </label>
                <a href="#forgot" class="text-xs font-semibold text-[#1814F3] hover:underline">Forgot password?</a>
            </div>

            <button type="submit" class="w-full py-3.5 px-4 bg-[#1814F3] hover:bg-blue-700 text-white font-bold text-sm rounded-2xl shadow-lg shadow-[#1814F3]/30 transition-all transform active:scale-[0.99] mt-2">
                Sign In
            </button>
        </form>
    </div>

    <script>
        function togglePass() {
            const passInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            if (passInput.type === 'password') {
                passInput.type = 'text';
                eyeIcon.className = 'ti ti-eye-off text-lg';
            } else {
                passInput.type = 'password';
                eyeIcon.className = 'ti ti-eye text-lg';
            }
        }
    </script>
</body>
</html>
