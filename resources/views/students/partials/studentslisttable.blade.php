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
    

    <!-- Student Table -->
    <div class="overflow-x-auto shadow rounded-lg p-4">
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
                    <td class="p-3 border border-gray-300 "><a href="" class="underline text-blue-500">View Details</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>