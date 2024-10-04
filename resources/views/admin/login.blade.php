<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
{{-- <nav id="navbar"
    class="fixed top-0 left-0 right-0 z-20 w-full bg-transparent p-4 transition-all duration-300 border-b-2 border-black">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <div class="flex flex-col justify-center">
                <span class="text-lg">Halaman Admin</span>
            </div>
        </div>
    </div>
</nav> --}}

<body class="bg-blue-400 min-h-screen flex justify-center">
    <div class="w-full bg-white rounded-2xl my-4 mx-4 shadow-lg flex flex-col">
        <div class="flex items-center">
            <h2 class="pl-10 py-5 font-semibold text-xl">Halaman Admin</h2>
        </div>
        <hr class="border-grey-300 border" />


        <!-- Logo -->
        <div class="flex justify-center mb-6 pt-32">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="w-32 h-36">
        </div>

        <!-- Login Form -->
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

        <form action="{{ url('/api/login') }}" method="POST">
            @csrf
            <!-- Username Input -->
            <div class="mb-4 px-96">
                <label for="username" class="block text-lg font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username"
                    class="w-full px-4 py-2 border border-gray-300 bg-sky-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>

            <!-- Password Input -->
            <div class="mb-6 px-96">
                <label for="password" class="block text-lg font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full px-4 py-2 border border-gray-300 bg-sky-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit"
                    class="w-1/6 bg-amber-500 text-white py-2 rounded-xl hover:bg-gray-300 transition duration-300">
                    Login
                </button>
            </div>
        </form>
    </div>
</body>

</html>
