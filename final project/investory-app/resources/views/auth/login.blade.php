<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'InvestoryApp') }} - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="max-w-md w-full">
            <!-- Logo -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-xl mb-4">
                    <span class="text-white text-3xl font-bold">I</span>
                </div>
                <h2 class="text-3xl font-bold text-gray-800">InvestoryApp</h2>
                <p class="text-gray-500 mt-2">Masuk ke akun Anda</p>
            </div>

            <!-- Login Card -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('email') border-red-500 @enderror"
                               placeholder="nama@investory.com">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <p class="text-xs text-gray-400 mt-1">Gunakan email dengan domain <strong>@investory.com</strong></p>
                    </div>

                    <!-- Password -->
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <input type="password" name="password" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('password') border-red-500 @enderror"
                               placeholder="••••••••">
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember & Forgot -->
                    <div class="flex items-center justify-between mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">
                                Forgot password?
                            </a>
                        @endif
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transition font-medium">
                        LOG IN
                    </button>
                </form>

                <!-- Register Link -->
                <div class="text-center mt-6 pt-4 border-t border-gray-200">
                    <p class="text-gray-600">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="text-blue-600 hover:underline font-medium">
                            Daftar sekarang
                        </a>
                    </p>
                    <p class="text-xs text-gray-400 mt-2">
                        * Hanya email dengan domain @investory.com yang dapat mendaftar
                    </p>
                </div>
            </div>

            <!-- Footer -->
            <p class="text-center text-gray-400 text-sm mt-8">
                &copy; {{ date('Y') }} InvestoryApp. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>