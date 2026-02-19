<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'InvestoryApp') }} - Register</title>
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
                <p class="text-gray-500 mt-2">Buat akun baru</p>
            </div>

            <!-- Register Card -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Nama Depan -->
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nama Depan</label>
                        <input type="text" name="first_name" value="{{ old('first_name') }}" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('first_name') border-red-500 @enderror"
                               placeholder="Nama depan">
                        @error('first_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Nama Belakang -->
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nama Belakang</label>
                        <input type="text" name="last_name" value="{{ old('last_name') }}" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('last_name') border-red-500 @enderror"
                               placeholder="Nama belakang">
                        @error('last_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('email') border-red-500 @enderror"
                               placeholder="nama@investory.com">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <p class="text-xs text-gray-400 mt-1">* Hanya email dengan domain <strong>@investory.com</strong> yang dapat mendaftar</p>
                    </div>

                    <!-- Password -->
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <input type="password" name="password" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('password') border-red-500 @enderror"
                               placeholder="Minimal 8 karakter">
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="Ketik ulang password">
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transition font-medium">
                        DAFTAR
                    </button>
                </form>

                <!-- Login Link -->
                <div class="text-center mt-6 pt-4 border-t border-gray-200">
                    <p class="text-gray-600">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-blue-600 hover:underline font-medium">
                            Login di sini
                        </a>
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