<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>

<body class="bg-gray-100 font-sans">

    <button data-drawer-target="sidebar" data-drawer-toggle="sidebar"
        class="sm:hidden p-3 m-2 rounded bg-blue-600 text-white z-50" aria-controls="sidebar" type="button">
        ☰
    </button>

    @include('components.sidebar')

    <!-- ✅ Main content -->
    <div class="sm:ml-64">
        <div class="flex items-center justify-between bg-white shadow px-6 h-16">
            <input type="text" placeholder="Search"
                class="w-full sm:w-1/3 border border-gray-300 rounded-lg px-3 py-2 text-sm" />
            <div class="flex items-center gap-4 ml-4">
                <img src="https://randomuser.me/api/portraits/men/1.jpg" class="w-8 h-8 rounded-full" />
                <span class="font-semibold text-sm hidden sm:block">Tom Cook</span>
            </div>
        </div>

        <div class="p-6">
            @yield('content')
        </div>
    </div>
</body>

</html>