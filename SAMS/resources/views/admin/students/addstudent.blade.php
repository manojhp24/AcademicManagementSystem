@extends('admin.dashboard')

@section('content')
<div class="form-cont w-full   bg-white  p-8 rounded-2xl shadow-lg" style="background-color: #111827;">
    <h2 class="text-3xl font-semibold mb-8 text-center text-gray-800 dark:text-white">🎓 Add New Student</h2>

    <form action="{{ route('students.create') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block mb-1 text-sm font-semibold text-gray-700 dark:text-gray-300">Full Name</label>
                <input type="text" name="name" placeholder="Enter Student Name" required
                    class="w-full px-4 py-2 rounded-lg border focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            </div>

            <div>
                <label class="block mb-1 text-sm font-semibold text-gray-700 dark:text-gray-300">Roll Number</label>
                <input type="text" name="roll_number" required
                    class="w-full px-4 py-2 rounded-lg border focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            </div>

            <div>
                <label class="block mb-1 text-sm font-semibold text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email"
                    class="w-full px-4 py-2 rounded-lg border focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            </div>

            <div>
                <label class="block mb-1 text-sm font-semibold text-gray-700 dark:text-gray-300">Phone</label>
                <input type="text" name="phone"
                    class="w-full px-4 py-2 rounded-lg border focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            </div>

            <div>
                <label class="block mb-1 text-sm font-semibold text-gray-700 dark:text-gray-300">Gender</label>
                <select name="gender"
                    class="w-full px-4 py-2 rounded-lg border focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    <option value="">Select</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>

            <div>
                <label class="block mb-1 text-sm font-semibold text-gray-700 dark:text-gray-300">Date of Birth</label>
                <input type="date" name="dob"
                    class="w-full px-4 py-2 rounded-lg border focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            </div>

            <div>
                <label class="block mb-1 text-sm font-semibold text-gray-700 dark:text-gray-300">Class</label>
                <select name="class_id"
                    class="w-full px-4 py-2 rounded-lg border focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    <option value="">Select Class</option>
                    <!-- Add class options dynamically -->
                </select>
            </div>

            <div>
                <label class="block mb-1 text-sm font-semibold text-gray-700 dark:text-gray-300">Admission Date</label>
                <input type="date" name="admission_date"
                    class="w-full px-4 py-2 rounded-lg border focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            </div>

            <div class="md:col-span-2">
                <label class="block mb-1 text-sm font-semibold text-gray-700 dark:text-gray-300">Photo</label>
                <input type="file" name="photo"
                    class="w-full px-4 py-2 rounded-lg border focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
            </div>
        </div>

        <div class="pt-6 text-center">
            <button type="submit"
                class="bg-green-500 hover:bg-green-600 text-white font-semibold px-8 py-2 rounded-full shadow hover:scale-105 transition-transform duration-300">
                Add Student
            </button>
        </div>

    </form>
</div>
@endsection