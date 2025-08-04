<div class="marks-entry-container flex flex-col gap-4">

    <div class="rounded bg-white border-l-4 border-blue-600 shadow-md p-4">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Student Marks Entry</h1>
        <p class="text-sm md:text-base text-gray-600">Enter internal and exam marks for each student</p>

    </div>

    <div class="marks-entry-table rounded bg-white shadow-md p-4 ">
        <form action="{{ route('marks_entry.store') }}" method="post">
            @csrf
            <div>
                <label for="" class="block text-sm font-medium text-gray-700 mb-2">Enter Register Number</label>
                <select name="reg_number" id="reg_dropdown" class="rounded-md border border-gray-300 p-2 min-w-[190px]">
                    <option value="">Select Register Number</option>
                    @foreach($studentData as $student)
                    <option value="{{ $student->roll_number }}">{{ $student->roll_number }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-5 overflow-x-auto">
               <div class="flex justify-between mt-4">
                 <h3 class="text-lg font-bold text-gray-700 mb-5">Marks Entry Table</h3>
                <div >
                    <button id="add_subject" type="button" class="bg-blue-600 text-white px-4 py-2 rounded cursor-pointer">Add Subject</button>
                    <button id="delete_subject" type="button" class="bg-red-600 text-white px-4 py-2 rounded cursor-pointer">Delete</button>
                </div>
               </div>

                <table class="table-auto overflow-auto  w-full border border-gray-300 mt">
                    <thead>
                        <tr class="bg-blue-600 text-white" >
                            <th class="border border-gray-300 px-3 py-1 text-left ">Course Code</th>
                            <th class="border border-gray-300 px-3 py-1 text-left">Credits</th>
                            <th class="border border-gray-300 px-3 py-1 text-left">CIE</th>
                            <th class="border border-gray-300 px-3 py-1 text-left">SEE</th>
                            <th class="border border-gray-300 px-3 py-1 text-left">Total Marks</th>
                            <th class="border border-gray-300 px-3 py-1 text-left min-w-[180px]">Grade</th>
                            <th class="border border-gray-300 px-3 py-1 text-left">Credits Earned</th>
                            <th class="border border-gray-300 px-3 py-1 text-left">Grade Points</th>
                            <th class="border border-gray-300 px-3 py-1 text-left">Credit Points</th>
                        </tr>
                    </thead>
                    <tbody id="marks-entry-tbody">
                        <tr>
                            
                            <td class="border border-gray-300 px-4 py-2">
                                <select name="course_code[]" id="#course_code" class="w-full rounded-md border border-gray-300 p-2 min-w-[190px]">
                                    <option value="">Select Course Code</option>
                                    @foreach($courseData as $course)
                                    <option value="{{ $course->course_code }}">{{ $course->course_code}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="credits[]" type="number" />
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="cie[]" type="number" />
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="see[]" type="number" />
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="total_marks[]" type="number" />
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <select name="grade[]" id="#grade" class="w-full rounded-md border border-gray-300 p-2">
                                    <option value="">Select Grade</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="credits_earned[]" type="number" />
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="grade_points[]" type="number" />
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="credit_points[]" type="number" />
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="flex justify-end mt-4">
                 <div class="">
                    <button id="" type="submit" class="bg-green-600 text-white px-4 py-2 rounded cursor-pointer">Submit Marks</button>
                </div>
                
            </div>
           
        </form>
   
</div>

</div>