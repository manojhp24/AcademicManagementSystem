<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        .loader {
            width: 50px;
            aspect-ratio: 1;
            --_c: no-repeat radial-gradient(farthest-side, #2563eb 92%, #0000);
            background:
                var(--_c) top,
                var(--_c) left,
                var(--_c) right,
                var(--_c) bottom;
            background-size: 12px 12px;
            animation: l7 1s infinite;
            margin: 0 auto;
        }

        @keyframes l7 {
            to {
                transform: rotate(.5turn);
            }
        }
    </style>



</head>

<body class="bg-gray-100 font-sans">

    <!-- Mobile Menu Toggle Button -->
    <button data-drawer-target="sidebar" data-drawer-toggle="sidebar"
        class="sm:hidden p-3 m-2 rounded bg-blue-600 text-white z-50" aria-controls="sidebar" type="button">
        ☰
    </button>

    <!-- Sidebar -->
    @include('components.sidebar')

    <!-- Main Content -->
    <div class="sm:ml-64 min-h-screen flex flex-col">

        <!-- Navbar -->
        <div class="flex items-center justify-between bg-white shadow px-6 h-16">
            <!-- Left: App Name -->
            <div class="text-lg sm:text-xl font-bold text-black-600 hidden sm:block">
                Attendance Admin Panel
            </div>

            <!-- Right: User Profile Dropdown -->
            <div class="relative">
                <button id="userDropdownButton" data-dropdown-toggle="userDropdown"
                    class="flex items-center space-x-2 focus:outline-none">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" class="w-8 h-8 rounded-full" alt="User" />
                    <span class="font-semibold text-sm hidden sm:block">Tom Cook</span>
                </button>

                <!-- Dropdown Menu -->
                <div id="userDropdown"
                    class="hidden z-50 absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded shadow">
                    <ul class="py-1 text-sm text-gray-700">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                        </li>
                        <li>
                            <hr class="my-1 border-gray-200">
                        </li>
                        <li>
                            <a href=""
                                class="block px-4 py-2 text-red-600 hover:bg-gray-100">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="p-4 flex-1" id="main-content">
            @yield('content')
        </div>
    </div>

    <!-- Dropdown Toggle Script -->
    <script>
        const btn = document.getElementById('userDropdownButton');
        const dropdown = document.getElementById('userDropdown');
        btn?.addEventListener('click', () => {
            dropdown.classList.toggle('hidden');
        });
    </script>

    <!-- jQuery core -->
    <script src="{{ asset('js/jquery_libreries/jquery.js') }}"></script>

    <!-- Plugin libraries -->
    <script src="{{ asset('js/jquery_libreries/datatables.js') }}"></script>

    <!-- Custom JS Modules -->
    <script src="{{ asset('js/ajax-handler.js') }}"></script>
    <script src="{{ asset('js/sidebar-dropdown-handler.js') }}"></script>
    <script src="{{ asset('js/state_dropdown.js') }}"></script>
    <script src="{{ asset('js/datatable-script.js') }}"></script>
    <script src="{{ asset('js/doc-toggle.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>




</body>

</html>