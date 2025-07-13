<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SAMS Admin Login</title>
    <!-- Tailwind CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 50%, #1e3a8a 100%);
            min-height: 100vh;
        }

        .glass-card {
            backdrop-filter: blur(16px);
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .input-group {
            position: relative;
        }

        .input-field {
            transition: all 0.3s ease;
        }

        .input-field:focus {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 50%, #1e3a8a 100%);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(59, 130, 246, 0.4);
        }

        .floating-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 20%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            right: 20%;
            animation-delay: 2s;
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 10%;
            animation-delay: 4s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        .logo-container {
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 50%, #1e3a8a 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .input-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            transition: color 0.3s ease;
        }

        .input-field:focus+.input-icon {
            color: #3b82f6;
        }

        .remember-me {
            position: relative;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .remember-me input[type="checkbox"] {
            appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #d1d5db;
            border-radius: 4px;
            margin-right: 8px;
            position: relative;
            transition: all 0.3s ease;
        }

        .remember-me input[type="checkbox"]:checked {
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 50%, #1e3a8a 100%);
            border-color: #3b82f6;
        }

        .remember-me input[type="checkbox"]:checked::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 12px;
        }
    </style>
</head>

<body class="gradient-bg flex items-center justify-center p-4">
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="w-full max-w-md glass-card p-8 rounded-2xl relative z-10">
        <!-- Logo/Header -->
        <div class="text-center mb-8">
            <div class="logo-container text-3xl font-bold mb-2">
                <i class="fas fa-shield-alt"></i> SAMS
            </div>
            <h2 class="text-2xl font-semibold text-gray-800 mb-2">Admin Login</h2>
            <p class="text-gray-600 text-sm">Welcome back! Please sign in to your account.</p>
        </div>

        <form action="{{ route('admin.login') }}" method="POST" class="space-y-6">
            @csrf <!-- Laravel protection -->

            <!-- Email Field -->
            <div class="input-group">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email Address</label>
                <div class="relative">
                    <input type="email" name="email" id="email" placeholder="Enter your email"
                        class="input-field w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                    <i class="fas fa-envelope input-icon"></i>
                </div>
            </div>

            <!-- Password Field -->
            <div class="input-group">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                <div class="relative">
                    <input type="password" name="password" id="password" placeholder="Enter your password"
                        class="input-field w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
                    <i class="fas fa-lock input-icon"></i>
                </div>
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between">
                <label class="remember-me text-sm text-gray-600">
                    <input type="checkbox" name="remember" id="remember">
                    <span>Remember me</span>
                </label>
                <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium transition-colors">
                    Forgot Password?
                </a>
            </div>

            <!-- Login Button -->
            <button type="submit"
                class="btn-primary w-full text-white py-3 rounded-lg font-semibold text-lg shadow-lg">
                <i class="fas fa-sign-in-alt mr-2"></i>
                Sign In
            </button>
        </form>

        <!-- Footer -->
        <div class="mt-8 text-center">
            <p class="text-gray-500 text-sm">
                Need help?
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Contact Support</a>
            </p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.input-field');

            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });

                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('focused');
                });
            });
        });
    </script>
</body>

</html>