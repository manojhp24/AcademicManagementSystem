<div class="p-6 w-full space-y">
    <div class="text-3xl font-extrabold text-gray-800">Welcome Admin</div>
    <div class="">Here is the Quick overview of the attendance system</div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    <div class="bg-gradient-to-br from-blue-500 to-indigo-600 shadow-xl rounded-2xl p-5 text-white">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h3 class="text-sm uppercase font-medium opacity-80">Total Students</h3>
                <p class="text-3xl font-extrabold">120</p>
            </div>
            <div class="bg-white/20 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                </svg>
            </div>
        </div>

        <div class="overflow-x-auto bg-white rounded-xl p-3 shadow-md">
            <table class="min-w-full text-left text-sm text-gray-700">
                <thead>
                    <tr class="bg-blue-100 text-blue-900">
                        <th class="px-4 py-2 font-semibold">Departments</th>
                        <th class="px-4 py-2 font-semibold">Total Students</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-4 py-2">MCA</td>
                        <td class="px-4 py-2">{{  $totalStudents }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl text-white p-5">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h3 class="text-sm uppercase font-medium opacity-90"> Total Lectures</h3>
                <p class="text-3xl font-extrabold">10</p>
            </div>
            <div class="bg-white/20 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                </svg>
            </div>
        </div>
        <div class="overflow-x-auto bg-white rounded-xl p-3 shadow-md">
            <table class="min-w-full text-left text-sm text-gray-700">
                <thead>
                    <tr class="bg-green-100 text-green-900">
                        <th class="px-4 py-2 font-semibold">Departments</th>
                        <th class="px-4 py-2 font-semibold">Total Lectureres</th>
                    </tr>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="py-2 px-4">MCA</td>
                        <td class="py-2 px-4">15</td>
                    </tr>
                </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>


    <div class="bg-white rounded-2xl shadow-lg p-6">
    <h3 class="text-xl font-bold text-gray-800 mb-6">Quick Actions</h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        
        <!-- Add Student -->
        <a href="{{ route('students.addstudents') }}" 
           class="ajax-link flex flex-col items-center justify-center p-5 bg-blue-50 hover:bg-blue-100 text-blue-700 rounded-xl transition-all duration-200 transform hover:-translate-y-1 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
            <div class="bg-blue-100 p-3 rounded-xl mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/>
                </svg>
            </div>
            <span class="text-sm font-semibold">Add Student</span>
        </a>

        <!-- View Reports -->
        <a href="#" 
           class="ajax-link flex flex-col items-center justify-center p-5 bg-purple-50 hover:bg-purple-100 text-purple-700 rounded-xl transition-all duration-200 transform hover:-translate-y-1 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-purple-400 focus:ring-opacity-50">
            <div class="bg-purple-100 p-3 rounded-xl mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16zm1-7.59V7h-2v5.59L9.7 11.3l-1.4 1.42L12 16.41l3.7-3.7-1.4-1.42L13 12.41z"/>
                </svg>
            </div>
            <span class="text-sm font-semibold">View Reports</span>
        </a>

        <!-- Manage Lectures -->
        <a href="#" 
           class="ajax-link flex flex-col items-center justify-center p-5 bg-red-50 hover:bg-red-100 text-red-700 rounded-xl transition-all duration-200 transform hover:-translate-y-1 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-50">
            <div class="bg-red-100 p-3 rounded-xl mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11H7v-2h10v2z"/>
                </svg>
            </div>
            <span class="text-sm font-semibold">Manage Lectures</span>
        </a>

    </div>
</div>

    <!-- Recent Activity Section (New Addition) -->
    <div class="bg-white rounded-xl shadow-lg p-6 mt-6">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-xl font-bold text-gray-800">Recent Activity</h3>
            <button class="text-sm text-blue-600 font-medium">View All</button>
        </div>
        <div class="space-y-4">
            <div class="flex items-center">
                <div class="bg-green-100 p-2 rounded-lg mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium">Attendance marked for MCA Class</p>
                    <p class="text-xs text-gray-500">10 minutes ago</p>
                </div>
            </div>
            <div class="flex items-center">
                <div class="bg-blue-100 p-2 rounded-lg mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium">New student registered</p>
                    <p class="text-xs text-gray-500">45 minutes ago</p>
                </div>
            </div>
            <div class="flex items-center">
                <div class="bg-purple-100 p-2 rounded-lg mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium">Monthly report generated</p>
                    <p class="text-xs text-gray-500">2 hours ago</p>
                </div>
            </div>
        </div>
    </div>
<!-- 
<div class="grid grid-cols-1 mt-5">
    <div class="bg-gradient-to-br from-blue-600 via-blue-500 to-blue-700 shadow-2xs p-5 rounded-2xl">
        <div class="grid grid"></div>
    </div>
</div> -->