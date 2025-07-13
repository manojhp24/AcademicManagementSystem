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
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
        <table class="data-table subject-table w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr class="bg-blue-600 text-white">
                    <th class="px-6 py-3 border border-gray-300">ID</th>
                    <th class="px-6 py-3 border border-gray-300">Subject</th>
                    <th class="px-6 py-3 border border-gray-300">Course Code</th>
                    <th class="px-6 py-3 border border-gray-300">Faculty</th>
                    <th class="px-6 py-3 border border-gray-300">Course</th>
                    <th class="px-6 py-3 border border-gray-300">Year</th>
                    <th class="px-6 py-3 border border-gray-300">Section</th>
                    <th class="px-6 py-3 border border-gray-300">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4 border border-gray-300">L001</td>
                    <td class="px-6 py-4 border border-gray-300">Python</td>
                    <td class="px-6 py-4 border border-gray-300">M24MCA202</td>
                    <td class="px-6 py-4 border border-gray-300">MHP</td>
                    <td class="px-6 py-4 border border-gray-300">MCA</td>
                    <td class="px-6 py-4 border border-gray-300">1</td>
                    <td class="px-6 py-4 border border-gray-300">A</td>
                    <td class="px-6 py-4 border border-gray-300 flex gap-3">
                        <div class="flex gap-2">
                            <button class="bg-blue-600 text-white px-6 py-1 rounded hover:bg-blue-700 text-sm">Edit</button>
                            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Remove</button>
                        </div>
                    </td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4 border border-gray-300">L001</td>
                    <td class="px-6 py-4 border border-gray-300">Python</td>
                    <td class="px-6 py-4 border border-gray-300">M24MCA202</td>
                    <td class="px-6 py-4 border border-gray-300">MHP</td>
                    <td class="px-6 py-4 border border-gray-300">MCA</td>
                    <td class="px-6 py-4 border border-gray-300">1</td>
                    <td class="px-6 py-4 border border-gray-300">B</td>
                    <td class="px-6 py-4 border border-gray-300 flex gap-3">
                        <div class="flex gap-2">
                            <button class="bg-blue-600 text-white px-6 py-1 rounded hover:bg-blue-700 text-sm">Edit</button>
                            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Remove</button>
                        </div>
                    </td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4 border border-gray-300">L001</td>
                    <td class="px-6 py-4 border border-gray-300">Python</td>
                    <td class="px-6 py-4 border border-gray-300">M24MCA202</td>
                    <td class="px-6 py-4 border border-gray-300">MHP</td>
                    <td class="px-6 py-4 border border-gray-300">MCA</td>
                    <td class="px-6 py-4 border border-gray-300">2</td>
                    <td class="px-6 py-4 border border-gray-300">A</td>
                    <td class="px-6 py-4 border border-gray-300 flex gap-3">
                        <div class="flex gap-2">
                            <button class="bg-blue-600 text-white px-6 py-1 rounded hover:bg-blue-700 text-sm">Edit</button>
                            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Remove</button>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>