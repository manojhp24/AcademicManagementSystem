<div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full p-4" style="height: 100vh;">
    <div class="mb-6 border-l-8 border-blue-700 pl-4">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
            Faculties List
        </h1>
        <p class="text-sm md:text-base text-gray-500 mt-1">
            View, manage, and update teacher details from this panel.
        </p>
    </div>


    <!-- Filter Section -->
    <div class="flex flex-wrap justify-between items-center my-4 gap-4">
        <div class="flex flex-wrap gap-4 items-center">
            <input type="text" placeholder="Lecturer Name" class="border border-gray-300 rounded-lg p-2 text-sm w-40">
            <input type="email" placeholder="Email" class="border border-gray-300 rounded-lg p-2 text-sm w-48">
            <select class="border border-gray-300 rounded-lg p-2 text-sm w-40">
                <option value="">All Subjects</option>
                <option>Math</option>
                <option>Physics</option>
                <option>Computer Science</option>
            </select>
            <select class="border border-gray-300 rounded-lg p-2 text-sm w-40">
                <option value="">All Status</option>
                <option>Active</option>
                <option>Inactive</option>
            </select>
            <input type="date" class="border border-gray-300 rounded-lg p-2 text-sm">
            <input type="date" class="border border-gray-300 rounded-lg p-2 text-sm">
        </div>
        <div>
            <button class="bg-blue-600 text-white font-medium rounded-lg text-sm px-6 py-2">Filter</button>
        </div>
    </div>

    <!-- Table Section -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
        <table class="data-table faculty-table w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr class="bg-blue-600 text-white">
                    <th class="px-6 py-3 border border-gray-300">ID</th>
                    <th class="px-6 py-3 border border-gray-300">Name</th>
                    <th class="px-6 py-3 border border-gray-300">Email</th>
                    <th class="px-6 py-3 border border-gray-300">Phone</th>
                    <th class="px-6 py-3 border border-gray-300">Subject</th>
                    <th class="px-6 py-3 border border-gray-300">Status</th>
                    <th class="px-6 py-3 border border-gray-300">Date Added</th>
                    <th class="px-6 py-3 border border-gray-300">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4 border border-gray-300">L001</td>
                    <td class="px-6 py-4 border border-gray-300">Dr. Priya Sharma</td>
                    <td class="px-6 py-4 border border-gray-300">priya.sharma@college.edu</td>
                    <td class="px-6 py-4 border border-gray-300">+91 9876543210</td>
                    <td class="px-6 py-4 border border-gray-300">Computer Science</td>
                    <td class="px-6 py-4 border border-gray-300 text-green-600">Active</td>
                    <td class="px-6 py-4 border border-gray-300">2024-06-10</td>
                    <td class="px-6 py-4 border border-gray-300 flex gap-3">
                        <div class="flex gap-2">
                            <button class="bg-blue-600 text-white px-6 py-1 rounded hover:bg-blue-700 text-sm">Edit</button>
                            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Remove</button>
                        </div>
                    </td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4 border border-gray-300">L002</td>
                    <td class="px-6 py-4 border border-gray-300">Mr. Anil Kumar</td>
                    <td class="px-6 py-4 border border-gray-300">anil.kumar@college.edu</td>
                    <td class="px-6 py-4 border border-gray-300">+91 9876543211</td>
                    <td class="px-6 py-4 border border-gray-300">Mathematics</td>
                    <td class="px-6 py-4 border border-gray-300 text-green-600">Active</td>
                    <td class="px-6 py-4 border border-gray-300">2024-06-12</td>
                    <td class="px-6 py-4 border border-gray-300 flex gap-3">
                        <div class="flex gap-2">
                            <button class="bg-blue-600 text-white px-6 py-1 rounded hover:bg-blue-700 text-sm">Edit</button>
                            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Remove</button>
                        </div>
                    </td>
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 border border-gray-300 py-4">L003</td>
                    <td class="px-6 border border-gray-300 py-4">Ms. Radhika Mehta</td>
                    <td class="px-6 border border-gray-300 py-4">radhika.mehta@college.edu</td>
                    <td class="px-6 border border-gray-300 py-4">+91 9876543212</td>
                    <td class="px-6 border border-gray-300 py-4">Physics</td>
                    <td class="px-6 border border-gray-300 py-4 text-red-600">Inactive</td>
                    <td class="px-6 border border-gray-300 py-4">2023-12-01</td>
                    <td class="px-6 border border-gray-300 py-4 flex gap-3">
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