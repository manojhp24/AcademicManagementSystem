<div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full p-4" style="height: 100vh;">
    <div class="mb-6 border-l-8 border-blue-700 pl-4">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
            Subject List
        </h1>
        <p class="text-sm md:text-base text-gray-500 mt-1">
            View, manage, and update Subject details from this panel.
        </p>
    </div>


    <!-- Filter Section -->
    <div class="flex flex-wrap justify-between items-center my-4 gap-4">
        <div class="flex flex-wrap gap-4 items-center">
            <input type="text" placeholder="Subject Name" class="border border-gray-300 rounded-lg p-2 text-sm w-40">
            <input type="text" placeholder="Course Code" class="border border-gray-300 rounded-lg p-2 text-sm w-40">

            <select class="border border-gray-300 rounded-lg p-2 text-sm w-40">
                <option value="">All Subjects</option>
                <option>Math</option>
                <option>Physics</option>
                <option>Computer Science</option>
            </select>
            <select class="border border-gray-300 rounded-lg p-2 text-sm w-40">
                <option value="">Section</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
            </select>
            <select class="border border-gray-300 rounded-lg p-2 text-sm w-40">
                <option value="">Year</option>
                <option>1</option>
                <option>2</option>
            </select>


        </div>
        <div>
            <button class="bg-blue-600 text-white font-medium rounded-lg text-sm px-6 py-2">Filter</button>
        </div>
    </div>

    <!-- Table Section -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th class="px-6 py-3">ID</th>
                    <th class="px-6 py-3">Subject</th>
                    <th class="px-6 py-3">Course Code</th>
                    <th class="px-6 py-3">Faculty</th>
                    <th class="px-6 py-3">Course</th>
                    <th class="px-6 py-3">Year</th>
                    <th class="px-6 py-3">Section</th>
                    <th class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4">L001</td>
                    <td class="px-6 py-4">Python</td>
                    <td class="px-6 py-4">M24MCA202</td>
                    <td class="px-6 py-4">MHP</td>
                    <td class="px-6 py-4">MCA</td>
                    <td class="px-6 py-4">1</td>
                    <td class="px-6 py-4">A</td>
                    <td class="px-6 py-4 flex gap-3">
                        <a href="#" class="text-blue-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                    </td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4">L001</td>
                    <td class="px-6 py-4">Python</td>
                    <td class="px-6 py-4">M24MCA202</td>
                    <td class="px-6 py-4">MHP</td>
                    <td class="px-6 py-4">MCA</td>
                    <td class="px-6 py-4">1</td>
                    <td class="px-6 py-4">B</td>
                    <td class="px-6 py-4 flex gap-3">
                        <a href="#" class="text-blue-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                    </td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4">L001</td>
                    <td class="px-6 py-4">Python</td>
                    <td class="px-6 py-4">M24MCA202</td>
                    <td class="px-6 py-4">MHP</td>
                    <td class="px-6 py-4">MCA</td>
                    <td class="px-6 py-4">2</td>
                    <td class="px-6 py-4">A</td>
                    <td class="px-6 py-4 flex gap-3">
                        <a href="#" class="text-blue-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>