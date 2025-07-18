<div class="w-full mx-auto p-6 bg-white rounded-lg shadow-md  border-dashed">
    <div class="mb-6 border-b border-gray-200 pb-4">
        <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2">
            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 
                19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63
                13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75
                0 0 1-.364-.63l-.001-.122Z" />
            </svg>
            Add New Faculty
        </h2>
        <p class="text-sm text-gray-500 mt-1">Fill in the form below to register a new Lecturer.</p>
    </div>
    <form class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div>
            <label class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" name="name" class="mt-1 block w-full rounded-md border border-gray-300 p-2" />
        </div>

        <div>
            <label for="" class="block text-sm font-medium text-gray-700">E-mail</label>
            <input type="text" name="email" class="mt-1 block w-full border rounded-md border-gray-300 p-2">
        </div>



        <div>
            <label class="block text-sm font-medium text-gray-700">Password</label>
            <input type="text" name="password" class="mt-1 block w-full rounded-md border border-gray-300 p-2" />
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Subject</label>
            <select name="class" class="mt-1 block w-full rounded-md border border-gray-300 p-2">
                <option value="">Select</option>
                <option value="BCA">Web</option>
                <option value="MCA">Java</option>
                <option value="10th A">Python</option>
            </select>
        </div>



        <div>
            <label class="block text-sm font-medium text-gray-700">Phone Number</label>
            <input type="text" name="phone" class="mt-1 block w-full rounded-md border border-gray-300 p-2" />
        </div>


        <div class="md:col-span-2">

            <button type="submit" class="mt-4 px-6 py-2 bg-green-600 text-white rounded-md hover:bg-green-700"> Add </button>
            <button type="submit" class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                Clear
            </button>
        </div>

    </form>
</div>