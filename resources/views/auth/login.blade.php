<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Portal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-white text-gray-900 antialiased">
    <div class="flex min-h-screen">
        <!-- Left Side: Image/Branding -->
        <div class="hidden lg:flex lg:w-1/2 relative bg-gray-900 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=2564&auto=format&fit=crop" alt="Abstract Background" class="absolute inset-0 h-full w-full object-cover opacity-60">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
            <div class="relative z-10 flex flex-col justify-end px-12 py-16 w-full">
                <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mb-8">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h1 class="text-4xl font-bold text-white mb-4">Welcome back to the future of administration.</h1>
                <p class="text-lg text-gray-300 max-w-lg">Manage your users, departments, and roles with our state-of-the-art dashboard built for scale.</p>
            </div>
        </div>

        <!-- Right Side: Form -->
        <div class="w-full lg:w-1/2 flex flex-col justify-center px-8 sm:px-16 md:px-24 xl:px-32 relative">
            
            <div class="absolute top-8 right-8">
                <span class="text-sm text-gray-500">Don't have an account?</span>
                <a href="{{ route('register') }}" class="ml-2 text-sm font-semibold text-indigo-600 hover:text-indigo-500 transition-colors">Sign up</a>
            </div>

            <div class="w-full max-w-md mx-auto">
                <div class="mb-10">
                    <h2 class="text-3xl font-bold text-gray-900">Sign in</h2>
                    <p class="text-gray-500 mt-2">Please enter your details to access your account.</p>
                </div>
                
                @if ($errors->any())
                    <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-r-lg">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" /></svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-red-700">
                                    {{ $errors->first() }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

                <form method="POST" action="/login" class="space-y-5">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <input id="email" name="email" type="email" required class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors placeholder-gray-400" placeholder="Enter your email">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" name="password" type="password" required class="mt-1 block w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-colors placeholder-gray-400" placeholder="••••••••">
                    </div>

                    <div class="flex items-center justify-between pt-2">
                        <div class="flex items-center">
                            <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded cursor-pointer">
                            <label for="remember" class="ml-2 block text-sm text-gray-700 cursor-pointer">Remember for 30 days</label>
                        </div>
                        <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500 transition-colors">Forgot password?</a>
                    </div>

                    <button type="submit" class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-xl shadow-sm text-sm font-semibold text-white bg-gray-900 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors mt-4">
                        Sign in
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>