<div class="mt-3 flex flex-col gap-4">
    <div class="bg-white rounded-lg p-4 shadow-md border-l-4 border-l-blue-600">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Student Marks</h2>
        <p class="text-gray-500 mt-1">Student mark Details</p>
    </div>

  <div class="mt-5 section-stu-name rounded-xl overflow-hidden shadow-lg">
    <div class="bg-white border-t-4 border-t-blue-700 p-8 relative overflow-hidden w-full  rounded-xl shadow-md">
        
        <!-- Header -->
        <div class="flex items-center justify-between mb-4">
            <div class="flex gap-4 items-center w-full">
                <div class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center shadow-lg">
                    <i class="fas fa-user-graduate text-white text-lg"></i>
                </div>
                <div class="flex-1">
                    <h1 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 bg-clip-text text-transparent mb-1">
                        {{ $studentData->student_name }}
                    </h1>
                </div>
                 <div>
                    <a href="" class="ajax-link bg-blue-600 p-2 text-white rounded-md m-4 ">
                        <button class="cursor-pointer">Generate Marks</button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Info -->
        <div class="flex flex-wrap gap-6 items-center text-gray-700">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-receipt text-blue-600"></i>
                <span>Roll No: {{ $studentData->roll_number }}</span>
            </div>
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-user text-gray-600"></i>
                <span>Candidate ID: {{ $studentData->id }}</span>
            </div>
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-phone text-green-700"></i>
                <span>Mobile No: {{ $studentData->phone_number }}</span>
            </div>
        </div>
    </div>
</div>



    <div class="overflow-x-auto p-4 bg-white rounded-md shadow">
        <table class="data-table table-auto w-full text-sm text-left text-gray-700">
            <thead class="bg-gray-100 text-sm">
                <tr class="bg-blue-600 text-white">
                    <th class="p-3 border border-gray-300">Course</th>
                    <th class="p-3 border border-gray-300">Course Code</th>
                    <th class="p-3 border border-gray-300">Credits</th>
                    <th class="p-3 border border-gray-300">CIE</th>
                    <th class="p-3 border border-gray-300">SEE</th>
                    <th class="p-3 border border-gray-300">Total</th>
                    <th class="p-3 border border-gray-300">Grade</th>
                    <th class="p-3 border border-gray-300">Credits Earned</th>
                    <th class="p-3 border border-gray-300">Grade Points</th>
                    <th class="p-3 border border-gray-300">Credit Points</th>
                </tr>
            </thead>
            <tbody>
                @foreach($marks as $mark)
                    <tr>
                        <td class="p-3 border border-gray-300">
                            {{ \App\Models\Course::where('course_code', $mark->course_code)->value('course_name') ?? 'N/A' }}
                        </td>
                        <td class="p-3 border border-gray-300">{{ $mark->course_code }}</td>
                        <td class="p-3 border border-gray-300">{{ $mark->credits }}</td>
                        <td class="p-3 border border-gray-300">{{ $mark->cie }}</td>
                        <td class="p-3 border border-gray-300">{{ $mark->see }}</td>
                        <td class="p-3 border border-gray-300">{{ $mark->total_marks }}</td>
                        <td class="p-3 border border-gray-300">{{ $mark->grade }}</td>
                        <td class="p-3 border border-gray-300">{{ $mark->credits_earned }}</td>
                        <td class="p-3 border border-gray-300">{{ $mark->grade_points }}</td>
                        <td class="p-3 border border-gray-300">{{ $mark->credits_points }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
