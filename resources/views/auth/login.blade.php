@extends('layouts.user')

@section('content')

<!-- Nhúng tạm Tailwind CDN nhưng tắt preflight để không làm hỏng CSS của Navbar/Footer -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        corePlugins: {
            preflight: false,
            container: false,
        }
    }
</script>

<section class="py-14">
    <div class="container">
        <div class="flex flex-col lg:flex-row rounded-2xl overflow-hidden shadow-[0_0_40px_rgba(0,0,0,0.05)] border border-gray-100" style="min-height: 600px;">
    <!-- Left Column: Form -->
    <div class="flex-1 bg-white flex flex-col justify-start lg:justify-center items-center p-6 pt-10 lg:p-24">
        @php
            $showRegister = $errors->has('name') || $errors->has('password') || ($errors->has('email') && old('name'));
        @endphp
        <div class="w-full max-w-md flex flex-col {{ $showRegister ? 'hidden' : '' }}" id="login-form">
            <h2 class="text-3xl font-bold mb-8 text-gray-900 text-center">Đăng Nhập</h2>

            <!-- Google Sign In -->
            <button class="w-full flex justify-center items-center gap-3 bg-green-50 hover:bg-rose-100 text-green-900 font-semibold py-3 px-4 rounded-lg transition duration-200 mb-8 border border-green-100">
                <svg class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                </svg>
                Sign In with Google
            </button>

            <!-- Divider -->
            <div class="flex items-center mb-8">
                <div class="flex-grow border-t border-gray-200"></div>
                <span class="flex-shrink-0 mx-4 text-gray-400 text-sm">Hoặc đăng nhập bằng Email</span>
                <div class="flex-grow border-t border-gray-200"></div>
            </div>

            <!-- Form -->
            <form action="{{ route('login.submit') }}" method="POST" class="flex flex-col gap-5">
                @csrf
                @if(session('success'))
                    <div class="bg-green-50 text-green-600 p-3 rounded-lg text-sm">
                        {{ session('success') }}
                    </div>
                @endif
                @if($errors->any() && !$showRegister)
                    <div class="bg-red-50 text-red-500 p-3 rounded-lg text-sm">
                        {{ $errors->first() }}
                    </div>
                @endif
                <div>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="w-full bg-gray-50 border border-gray-100 text-gray-900 rounded-lg focus:ring-green-500 focus:border-green-500 block p-3.5 transition outline-none" required>
                </div>
                <div>
                    <input type="password" name="password" placeholder="Password" class="w-full bg-gray-50 border border-gray-100 text-gray-900 rounded-lg focus:ring-green-500 focus:border-green-500 block p-3.5 transition outline-none" required>
                </div>
                <button type="submit" class="w-full text-white bg-[#20C997] hover:bg-[#1BA87E] focus:ring-4 focus:ring-rose-300 font-bold rounded-lg text-lg px-5 py-3.5 mt-2 flex justify-center items-center gap-2 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M16 19h6" />
                        <path d="M19 16v6" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                    </svg>
                    Đăng Nhập
                </button>
            </form>

            <p class="text-center mt-6 text-gray-600">
                Chưa có tài khoản? <a href="javascript:void(0)" onclick="toggleAuth()" class="text-[#20C997] font-bold hover:underline">Đăng ký ngay</a>
            </p>

            <!-- Terms -->
            <p class="text-center text-gray-400 text-xs mt-6 px-8">
                Khi đăng nhập, bạn đồng ý với <a href="#" class="border-b border-gray-400 border-dashed hover:text-gray-600 transition">Điều khoản sử dụng</a> và <a href="#" class="border-b border-gray-400 border-dashed hover:text-gray-600 transition">Chính sách bảo mật</a> của WeddingCard
            </p>
        </div>

        <div class="w-full max-w-md flex flex-col {{ $showRegister ? '' : 'hidden' }}" id="register-form">
            <h2 class="text-3xl font-bold mb-8 text-gray-900 text-center">Đăng Ký</h2>

            <!-- Google Sign Up -->
            <button class="w-full flex justify-center items-center gap-3 bg-green-50 hover:bg-rose-100 text-green-900 font-semibold py-3 px-4 rounded-lg transition duration-200 mb-8 border border-green-100">
                <svg class="w-5 h-5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                </svg>
                Sign Up with Google
            </button>

            <!-- Divider -->
            <div class="flex items-center mb-8">
                <div class="flex-grow border-t border-gray-200"></div>
                <span class="flex-shrink-0 mx-4 text-gray-400 text-sm">Hoặc đăng ký bằng Email</span>
                <div class="flex-grow border-t border-gray-200"></div>
            </div>

            <!-- Form -->
            <form action="{{ route('register.submit') }}" method="POST" class="flex flex-col gap-5">
                @csrf
                <div>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Họ và tên" class="w-full bg-gray-50 border border-gray-100 text-gray-900 rounded-lg focus:ring-green-500 focus:border-green-500 block p-3.5 transition outline-none" required>
                    @error('name') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>
                <div>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="w-full bg-gray-50 border border-gray-100 text-gray-900 rounded-lg focus:ring-green-500 focus:border-green-500 block p-3.5 transition outline-none" required>
                    @error('email') 
                        @if($showRegister) <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @endif
                    @enderror
                </div>
                <div>
                    <input type="password" name="password" placeholder="Mật khẩu" class="w-full bg-gray-50 border border-gray-100 text-gray-900 rounded-lg focus:ring-green-500 focus:border-green-500 block p-3.5 transition outline-none" required>
                    @error('password') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="w-full text-white bg-[#20C997] hover:bg-[#1BA87E] focus:ring-4 focus:ring-rose-300 font-bold rounded-lg text-lg px-5 py-3.5 mt-2 flex justify-center items-center gap-2 transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M16 19h6" />
                        <path d="M19 16v6" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                    </svg>
                    Đăng Ký
                </button>
            </form>

            <p class="text-center mt-6 text-gray-600">
                Đã có tài khoản? <a href="javascript:void(0)" onclick="toggleAuth()" class="text-[#20C997] font-bold hover:underline">Đăng nhập ngay</a>
            </p>

            <!-- Terms -->
            <p class="text-center text-gray-400 text-xs mt-6 px-8">
                Khi đăng ký, bạn đồng ý với <a href="#" class="border-b border-gray-400 border-dashed hover:text-gray-600 transition">Điều khoản sử dụng</a> và <a href="#" class="border-b border-gray-400 border-dashed hover:text-gray-600 transition">Chính sách bảo mật</a> của WeddingCard
            </p>
        </div>

        <script>
            function toggleAuth() {
                const loginForm = document.getElementById('login-form');
                const registerForm = document.getElementById('register-form');
                loginForm.classList.toggle('hidden');
                registerForm.classList.toggle('hidden');
            }
        </script>
    </div>

    <!-- Right Column: Illustration -->
    <div class="hidden lg:flex lg:flex-1 bg-[#E6F9ED] justify-center items-center p-12">
        <div class="relative w-full max-w-xl">
            <!-- decorative circles -->
            <div class="absolute w-[120%] h-[120%] -left-[10%] -top-[10%] bg-white/40 rounded-full blur-3xl"></div>
            <!-- generated illustration -->
            <img src="https://i.pinimg.com/736x/77/46/bb/7746bbbbfa8e210f67009a11c7e27e5a.jpg" alt="Analytics Illustration" class="relative z-10 w-full drop-shadow-2xl hover:scale-105 transition duration-700">
        </div>
    </div>
        </div>
    </div>
</section>

@endsection
