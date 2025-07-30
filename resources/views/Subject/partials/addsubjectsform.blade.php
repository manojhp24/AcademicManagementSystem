<div class="w-full mx-auto flex flex-col gap-5">
    <div class="rounded-md bg-white p-4   border-l-4 border-l-blue-600 shadow-md">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Add Subjects</h1>
        <p class="text-sm md:text-base text-gray-600 mt-1">
            Add Subjects records from this dashboard
        </p>
    </div>
    <div class="w-full mx-auto p-6 bg-white rounded-lg shadow-md  border-dashed">
        <form id="course-form" class="grid grid-cols-1 md:grid-cols-2 gap-4" action="{{ route('subject.store') }}" method="POST" data-url="{{ route('subject.store') }}">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">Course</label>
                <input type="text" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md" name="course_name">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Course Code</label>
                <input type="text" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md" name="course_code">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Semester</label>
                <select name="semester" id="semester-dropdown" class="block p-2 w-full border border-gray-300 rounded-md text-gray-700">
                    <option value="">Select Semester</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>

            <div>
                <label for="" class="block text-sm font-medium text-gray-700">Structure Code</label>
                <select name="structure_code" id="structure-code-dropdown" class="block p-2 w-full border border-gray-300 rounded-md text-gray-700">
                    <option value="">Select Structure Code</option>
                    <option value="CC">CC-Core Course</option>
                    <option value="EC">EC-Elective Course</option>
                </select>
            </div>

            <div class="hidden" id="elective-group">
                <label for="" class="block text-sm font-medium text-gray-700">Elective Group</label>
                <select name="elective_group" id="elective-group-dropdown" class="block p-2 w-full border border-gray-300 rounded-md text-gray-700">
                    <option value="">Select Elective Group</option>
                    <option value="Major">Major</option>
                    <option value="Minor">Minor</option>
                </select>
            </div>

            <!--Course-Credits-Fields  -->

            <div>
                <label class="block text-sm font-medium text-gray-700">Lecture(L)</label>
                <input type="number" id="lecture-credits" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md" name="lecture_credits">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Practical(P)</label>
                <input type="number" id="practical-credits" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md" name="practical_credits">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Total Credits</label>
                <input type="number" readonly value="" id="total-credits" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md" name="total_credits">
            </div>

            <!-- Course-Marks-Fields-->

            <div>
                <label class="block text-sm font-medium text-gray-700">Internal Marks</label>
                <input type="number" id="internal-marks" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md" name="internal_marks">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">External Marks</label>
                <input type="number" id="external-marks" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md" name="external_marks">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Total Marks</label>
                <input type="number" name="total_marks" readonly value="" id="total-marks" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md">
            </div>


            <div class="md:col-span-2">

                <button type="submit" class="mt-4 px-6 py-2 bg-green-600 text-white rounded-md hover:bg-green-700"> Add </button>
                <button type="reset" class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Clear
                </button>
            </div>


        </form>
        <div id="toast-box"></div>
    </div>
</div>