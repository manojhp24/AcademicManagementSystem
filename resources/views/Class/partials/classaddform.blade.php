<div class="w-full mx-auto p-6 bg-white rounded-lg shadow-md  border-dashed">
    <div class="mb-6 border-b border-gray-200 pb-4">
        <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2">
            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 
                19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63
                13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75
                0 0 1-.364-.63l-.001-.122Z" />
            </svg>
            Add Classes
        </h2>
        <p class="text-sm text-gray-500 mt-1">Fill in the form below to register a new Class.</p>
    </div>
    <form class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div>
            <label class="block text-sm font-medium text-gray-700">Course</label>
            <input type="text" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md">
        </div>
        <div>
            <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
            <select name="year" id="year" class="mt-1 block w-full rounded-md border border-gray-300 p-2">
                <option value="">Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Section</label>
            <select name="class" class="mt-1 block w-full rounded-md border border-gray-300 p-2">
                <option value="">Select</option>
                <option value="MCA">A</option>
                <option value="MCA">B</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Semester</label>
            <input type="text" class="block w-full p-2 text-gray-700 border border-gray-300 rounded-md">

        </div>

        <div class="md:col-span-2">

            <button type="submit" class="mt-4 px-6 py-2 bg-green-600 text-white rounded-md hover:bg-green-700"> Add </button>
            <button type="submit" class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                Clear
            </button>
        </div>


    </form>
</div>