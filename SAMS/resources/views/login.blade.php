<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- Tailwind CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body class="h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-sm bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold text-center mb-6">SAMS Admin Login</h2>

        <form action="{{ route('admin.login') }}" method="POST">
            @csrf <!-- Laravel protection -->

            <div class="mb-4">
                <label for="email" class="block mb-1 text-sm font-medium text-gray-700">E-mail</label>
                <input type="email" name="email" id="email"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required />
            </div>

            <div class="mb-4">
                <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" required />
            </div>

            <div class="mb-4 text-sm text-gray-600">
                Forgot Password?
                <a href="#" class="text-blue-600 hover:underline ml-1">Reset your Password</a>
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">
                Login
            </button>
        </form>
    </div>
    
</body>

</html>