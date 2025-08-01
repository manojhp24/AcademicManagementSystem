<div class="marks-entry-container m-4 flex flex-col gap-4">

    <div class="rounded bg-white border-l-4 border-blue-600 shadow-md p-4">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Student Marks Entry</h1>
        <p class="text-sm md:text-base text-gray-600">Enter internal and exam marks for each student</p>

    </div>

    <div class="marks-entry-table rounded bg-white shadow-md p-4 ">
        <form action="" method="post">
            @csrf
            <div>
                <label for="" class="block text-sm font-medium text-gray-700 mb-2">Select Student</label>
                <select name="student_name" id="#student_name" class="mt-1 block w-full rounded-md border border-gray-300 p-2">
                    <option value="">Select a Student</option>
                    <option value="">Manoj</option>
                    <option value="">Karthik</option>
                    <option value="">Rahul</option>
                    <option value="">Darshan</option>
                </select>
            </div>
            <div class="mt-5 overflow-x-auto">
                <h3 class="text-md font-bold text-gray-700">Marks Entry Table</h3>
                <table class="table-auto overflow-auto  w-full border border-gray-300 mt">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2 text-left min-w-[200px]">Course Name</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Course Code</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Credits</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">CIE</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">SEE</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Total Marks</th>
                            <th class="border border-gray-300 px-4 py-2 text-left min-w-[180px]">Grade</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Credits Earned</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Grade Points</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Credit Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">
                                <select name="course_name" class="w-full rounded-md border border-gray-300 p-2">
                                    <option value="">Select Course</option>
                                    <option value="">Java</option>
                                    <option value="">Python</option>
                                </select>
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="course_code" type="text" />
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="credits" type="number" />
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="cie" type="number" />
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="see" type="number" />
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="total_marks" type="number" />
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <select name="grade" id="#grade" class="w-full rounded-md border border-gray-300 p-2">
                                    <option value="">Select Grade</option>
                                    <option value="">A</option>
                                    <option value="">B</option>
                                    <option value="">C</option>
                                </select>
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="credits_earned" type="number" />
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="grade_points" type="number" />
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <x-input-field name="credit_points" type="number" />
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </form>
    </div>

</div>