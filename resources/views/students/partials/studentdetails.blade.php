<div class="student-detail-container m-4">
    <div class="mb-4 text-sm text-gray-600">
        <a href="{{ route('admin.dashboard') }}" class="text-blue-600 hover:underline ajax-link">Dashboard</a>
        <span class="mx-1">/</span>
        <a href="{{ route('students.view') }}" class="text-blue-600 hover:underline ajax-link">View Students</a>
        <span class="mx-1">/</span>
        <span class="text-gray-700">Student Details</span>
    </div>

    <div class="rounded-md bg-white p-4   border-l-4 border-l-blue-600 shadow-md">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Student Detail</h1>
        <p class="text-sm md:text-base text-gray-600 mt-1">
            Comprehensive view of student information and academic progress
        </p>
    </div>

    <div class="mt-5 section-stu-name rounded-xl overflow-hidden shadow-lg ">
        <!-- Gradient top border -->

        <div class="container bg-white border-t-4 border-t-blue-700 p-8 relative overflow-hidden">
            <!-- Decorative background elements -->

            <div class="flex items-center gap-4 mb-4">
                <div class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center shadow-lg">
                    <i class="fas fa-user-graduate text-white text-lg"></i>
                </div>
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent mb-1">
                        {{ $student->student_name }}
                    </h1>
                </div>
            </div>

            <div class="flex space-x-4 items-center">
                <div>
                    <i class="fa-solid fa-receipt"></i>
                    <span>Roll No: {{ $student->roll_number}}</span>
                </div>
                <div>
                    <i class="fa-solid fa-user"></i>
                    <span>Candidate ID: {{ $student->id }}</span>
                </div>
                <div>
                    <i class="fa-solid fa-phone text-green-700"></i>
                    <span>Mobile No: {{ $student->phone_number }}</span>
                </div>

            </div>

        </div>
    </div>

    <div class="bg-white mt-5 flex flex-col rounded-lg shadow">
        <div class="bg-blue-600 rounded-t-lg p-4 text-white">
            <h1 class="text-lg font-bold">Personal Information</h1>
        </div>
        <div class="overflow-x-auto p-4">
            <table class="min-w-full divide-y divide-gray-200">
                <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                    <tr>
                        <td class="px-4 py-2 font-semibold w-1/3">Name</td>
                        <td class="px-4 py-2">{{ $student->student_name}}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-semibold">Roll Number</td>
                        <td class="px-4 py-2">{{ $student->roll_number}}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-semibold">Student ID</td>
                        <td class="px-4 py-2">{{ $student->id }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-semibold">Mobile Number</td>
                        <td class="px-4 py-2">{{ $student->phone_number}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-white mt-5 flex flex-col rounded-lg shadow">
        <div class="bg-blue-600 rounded-t-lg p-4 text-white">
            <h1 class="text-lg font-bold">Academic Information</h1>
        </div>
        <div class="overflow-x-auto p-4">
            <table class="min-w-full divide-y divide-gray-200">
                <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                    <tr>
                        <td class="px-4 py-2 font-semibold w-1/3">Graduation</td>
                        <td class="px-4 py-2">{{ $student->acdemicDetail->graduation }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-semibold">SSC Percentage</td>
                        <td class="px-4 py-2">{{ $student->acdemicDetail->ssc_percent }}%</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-semibold">HSC Percentage</td>
                        <td class="px-4 py-2">{{ $student->acdemicDetail->hsc_percent }}%</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-semibold">Graduation Percentage</td>
                        <td class="px-4 py-2">89<span>%</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-white mt-5 flex flex-col rounded-lg shadow">
        <div class="bg-blue-600 rounded-t-lg p-4 text-white">
            <h1 class="text-lg font-bold">Fee Information</h1>
        </div>
        <div class="overflow-x-auto p-4">
            <table class="min-w-full divide-y divide-gray-200">
                <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                    <tr>
                        <td class="px-4 py-2 font-semibold w-1/3">Actual Fee</td>
                        <td class="px-4 py-2">{{ $student->fee->actual_fee}}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-semibold">Discount</td>
                        <td class="px-4 py-2">{{ $student->fee->discount}}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-semibold">Registration Fee</td>
                        <td class="px-4 py-2">{{ $student->fee->registration_fee}}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-semibold">Accomodation</td>
                        <td class="px-4 py-2 ">{{ $student->fee->accommodation}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-white mt-5 flex flex-col rounded-lg shadow">
        <div class="bg-blue-600 rounded-t-lg p-4 text-white">
            <h1 class="text-lg font-bold">Document Submitted</h1>
        </div>
        <div class="overflow-x-auto p-4">
            <table class="min-w-full divide-y divide-gray-200">
                <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                    <tr>
                        <td class="px-4 py-2 font-semibold w-1/3">10th Marks Card</td>
                        <td class="px-4 py-2">{{ $student->document->marksheet_10th == 1 ? "Yes" : "No"}}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-semibold">12th Marks Card</td>
                        <td class="px-4 py-2">{{ $student->document->marksheet_12th == 1 ? "Yes" : "No"}}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-semibold">Degree/PDC</td>
                        <td class="px-4 py-2">{{ $student->document->marksheet_degree == 1 ? "Yes" : "No"}}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-semibold">Migration Certificate</td>
                        <td class="px-4 py-2">{{ $student->document->migration == 1 ? "Yes" : "No"}}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-semibold">Caste Certificate</td>
                        <td class="px-4 py-2 ">{{ $student->document->caste_certificate == 1 ? "Yes" : "No"}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</div>
</div>