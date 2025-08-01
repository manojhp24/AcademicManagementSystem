<div class=" student-detail-container m-4">
    <div class="mb-4 text-sm text-gray-600">
        <a href="{{ route('admin.dashboard') }}" class="text-blue-600 hover:underline ajax-link">Dashboard</a>
        <span class="mx-1">/</span>
        <a href="" class="">View Course </a>
    </div>

    <div class="rounded-md bg-white p-4   border-l-4 border-l-blue-600 shadow-md">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Course List</h1>
        <p class="text-sm md:text-base text-gray-600 mt-1">
            View, Update and Manage The Course
        </p>
    </div>

    <div class="overflow-x-auto shadow rounded-lg p-4 mt-5">
        <table class="data-table course-table w-full text-sm text-gray-700 border border-gray-300">

            <thead class="text-xs uppercase ">
                <tr class="bg-blue-600 text-white ">
                    <th class="p-3 border border-gray-300">Course Name</th>
                    <th class="p-3 border border-gray-300">Course Code</th>
                    <th class="p-3 border border-gray-300">Semester</th>
                    <th class="p-3 border border-gray-300">Structure</th>
                    <th class="p-3 border border-gray-300">Elective Group</th>
                    <th class="p-3 border border-gray-300">Lecture Credits</th>
                    <th class="p-3 border border-gray-300">Practical Credits</th>
                    <th class="p-3 border border-gray-300">Total Credits</th>
                    <th class="p-3 border border-gray-300">Internal Marks</th>
                    <th class="p-3 border border-gray-300">External Marks</th>
                    <th class="p-3 border border-gray-300">Total Marks</th>
                    <th class="p-3 border border-gray-300">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($courseData as $course)
                <tr>
                    <td class="p-3 border border-gray-300">{{$course->course_name}}</td>
                    <td class="p-3 border border-gray-300">{{$course->course_code}}</td>
                    <td class="p-3 border border-gray-300">{{$course->semester}}</td>
                    <td class="p-3 border border-gray-300">{{$course->structure_code}}</td>
                    <td class="p-3 border border-gray-300">{{$course->elective_group ?? "-"}} </td>
                    <td class="p-3 border border-gray-300">{{$course->lecture_credits}}</td>
                    <td class="p-3 border border-gray-300">{{$course->practical_credits}}</td>
                    <td class="p-3 border border-gray-300">{{$course->total_credits}}</td>
                    <td class="p-3 border border-gray-300">{{$course->internal_marks}}</td>
                    <td class="p-3 border border-gray-300">{{$course->external_marks}}</td>
                    <td class="p-3 border border-gray-300">{{$course->total_marks}}</td>
                    <td class="p-3 border border-gray-300 ">
                        <div class="flex space-x-4 items-center">
                            <a href="#" class="ajax-link text-green-700" title="Edit ">
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