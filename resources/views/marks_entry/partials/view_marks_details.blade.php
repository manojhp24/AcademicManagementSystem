<div class="mt-3 flex flex-col gap-4">
    <div class="bg-white rounded-lg p-4 shadow-md border-l-4 border-l-blue-600">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Student Marks</h2>
        <p class="text-gray-500 mt-1">Student mark Details</p>
    </div>

    <div class="overflow-x-auto">
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
