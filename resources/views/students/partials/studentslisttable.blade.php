<div class="w-full p-4 space-y-6">
    <div class="mb-6 border-l-8 border-blue-700 pl-4">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
            Student List
        </h1>
        <p class="text-sm md:text-base text-gray-500 mt-1">
            View, manage, and update student records from this dashboard.
        </p>
    </div>


    <!-- Filter + Search Bar -->
    <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4">
        <!-- Filters -->
        <div class="flex flex-col sm:flex-row flex-wrap gap-4">
            <div>
                <label for="course" class="block mb-1 text-sm font-medium text-gray-700">Course</label>
                <select id="course" name="course" class="w-36 p-2 border border-gray-300 rounded-md text-sm focus:ring-blue-500 focus:border-blue-500">
                    <option selected disabled>Choose</option>
                    <option>MCA</option>
                    <option>MBA</option>
                </select>
            </div>
            <div>
                <label for="year" class="block mb-1 text-sm font-medium text-gray-700">Year</label>
                <select id="year" name="year" class="w-36 p-2 border border-gray-300 rounded-md text-sm focus:ring-blue-500 focus:border-blue-500">
                    <option selected disabled>Choose</option>
                    <option>1st Year</option>
                    <option>2nd Year</option>
                </select>
            </div>
            <div>
                <label for="section" class="block mb-1 text-sm font-medium text-gray-700">Section</label>
                <select id="section" name="section" class="w-36 p-2 border border-gray-300 rounded-md text-sm focus:ring-blue-500 focus:border-blue-500">
                    <option selected disabled>Choose</option>
                    <option>A</option>
                    <option>B</option>
                </select>
            </div>
        </div>

        <!-- Search -->
        <div class="relative w-full sm:w-72">
            <input type="search" placeholder="Search by name or ID" class="w-full p-2.5 pl-10 text-sm border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500" />
            <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Student Table -->
    <div class="overflow-x-auto shadow rounded-lg">
        <table class="w-full text-sm text-left text-gray-700">
            <thead class="bg-gray-100 text-xs uppercase">
                <tr>
                    <th class="p-3">ID</th>
                    <th class="p-3">Full Name</th>
                    <th class="p-3">Course</th>
                    <th class="p-3">Year</th>
                    <th class="p-3">Section</th>
                    <th class="p-3">Email</th>
                    <th class="p-3">Phone</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Row -->
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="p-3 font-medium text-gray-900">MCA001</td>
                    <td class="p-3">John Doe</td>
                    <td class="p-3">MCA</td>
                    <td class="p-3">1st Year</td>
                    <td class="p-3">A</td>
                    <td class="p-3">john@example.com</td>
                    <td class="p-3">+91 9876543210</td>
                    <td class="p-3 flex gap-2">
                        <a href="#" class="text-blue-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Remove</a>
                    </td>
                </tr>
                <!-- Repeat more rows -->
            </tbody>
        </table>
    </div>
</div>