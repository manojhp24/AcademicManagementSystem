<div class="w-full  space-y-6">
    <div class="mb-4 text-sm text-gray-600">
        <a href="{{ route('admin.dashboard') }}" class="text-blue-600 hover:underline ajax-link">Dashboard</a>
        <span class="mx-1">/</span>
        <span class="text-gray-700">View Student</span>
    </div>
    <div class="rounded-md bg-white p-4  border-l-4 border-l-blue-700 shadow-md">
        <div class="flex justify-between  items-center">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
                    Students List
                </h1>
                <p class="text-sm md:text-base text-gray-500 mt-1">
                    View, manage, and update student records from this dashboard.
                </p>
            </div>

            <a href="{{ route('students.addstudents') }}" class="ajax-link">
                <button class="cursor-pointer bg-blue-700 rounded-md text-white px-4 py-2 hover:bg-blue-600 text-sm md:text-base">
                    Add Students
                </button>
            </a>
        </div>
    </div>
</div>




<!-- Student Table -->
<div class="overflow-x-auto shadow rounded-lg p-4 mt-5">
    <table class="data-table student-table w-full text-sm text-left text-gray-700">
        <thead class="bg-gray-100 text-xs uppercase">
            <tr class="bg-blue-600 text-center text-white">
                <th class="p-3 border border-gray-300">ID</th>
                <th class="p-3 border border-gray-300">Student Name</th>
                <th class="p-3 border border-gray-300">Roll Number</th>
                <th class="p-3 border border-gray-300">Mobile</th>
                <th class="p-3 border border-gray-300">Place</th>
                <th class="p-3 border border-gray-300">State</th>
                <th class="p-3 border border-gray-300">email</th>
                <th class="p-3 border border-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($studentData as $student)
            <tr class="bg-white border border-gray-300 hover:bg-gray-50">
                <td class="p-3 border border-gray-300 font-medium text-gray-900">{{$student->id}}</td>
                <td class="p-3 border border-gray-300 ">{{$student->student_name}}</td>
                <td class="p-3 border border-gray-300 ">{{$student->roll_number}}</td>
                <td class="p-3 border border-gray-300 ">{{$student->phone_number}}</td>
                <td class="p-3 border border-gray-300 ">{{$student->place}}</td>
                <td class="p-3 border border-gray-300 ">{{$student->state}}</td>
                <td class="p-3 border border-gray-300 ">{{$student->email}}</td>
                <td class="p-3 border border-gray-300 ">
                    <div class="flex space-x-5 items-center">
                        <a href="{{ route('students.details',$student->id) }}" class="ajax-link underline text-blue-500" title="View Details">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('students.edit',$student->id)}}" class="ajax-link text-green-700" title="Edit ">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="#" class="ajax-link text-red-700" title="Delete">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>