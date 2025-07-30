<div class="w-full mx-auto">
    <!-- Header -->

    <div class="mb-4 text-sm text-gray-600">
        <a href="{{ route('admin.dashboard') }}" class="text-blue-600 hover:underline ajax-link">Dashboard</a>
        <span class="mx-1">/</span>
        <span class="text-gray-700">Add Student</span>
    </div>

    <div class="w-full  space-y-6">
        <div class="rounded-md bg-white p-4  border-l-4 border-l-blue-700 shadow-md">
            <div class="flex justify-between  items-center">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
                        Add Student
                    </h1>
                    <p class="text-sm md:text-base text-gray-500 mt-1">
                        Add New student records from this dashboard.
                    </p>
                </div>

                <a href="/students/view" class="text-blue-600 hover:underline font-semibold ajax-link">
                    <button class="bg-blue-700 p-3 text-white rounded-md hover:bg-blue-600 cursor-pointer">View Students</button>
                </a>
            </div>
        </div>
    </div>






    <form class="space-y-8" action="{{ route('students.store') }}" method="POST" id="student-form" data-url="{{ route('students.store') }}">
        @csrf
        <!-- Basic Information Section -->
        <div class=" section-card rounded-lg overflow-hidden mt-5">
            <div class="section-header">
                <i class="fas fa-user"></i>
                <span>Personal Information</span>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <x-input-field
                        name="student_name"
                        label="Student Name"
                        placeholder="Enter Student Name" />
                    <x-input-field
                        name="roll_number"
                        label="Roll Number"
                        placeholder="Enter Roll Number" />

                    <x-input-field
                        name="place"
                        label="Place"
                        placeholder="Enter Place" />

                    <x-dropdown name="state" label="State" id="stateDropdown" />

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Date of Birth</label>
                        <input type="date" name="dob" class="input-field" />
                    </div>

                    <x-input-field
                        name="phone_number"
                        label="Phone Number"
                        placeholder="Enter Phone Number"
                        type="number"
                        minlength="10"
                        maxlength="10" />
                    <x-input-field
                        name="alternative_phone_number"
                        label="Alternative Phone Number"
                        placeholder="Enter Alternative Phone Number"
                        type="number" />

                    <x-input-field
                        name="email"
                        label="Email"
                        placeholder="Enter Email Address"
                        type="email" />

                </div>
                <div class="mt-4">
                    <label class="block  text-sm font-medium text-gray-700 mb-2">Permanent Address</label>
                    <textarea name="permanent_address" class="input-field" rows="3" placeholder="Enter permanent address"></textarea>
                </div>
            </div>
        </div>

        <!-- Academic Information Section -->
        <div class="section-card rounded-lg overflow-hidden">
            <div class="section-header">
                <i class="fas fa-book"></i>
                <span>Academic Information</span>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Graduation</label>
                        <input type="text" name="graduation_background" class="input-field" placeholder="Enter graduation " />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Languages Known</label>
                        <select name="language" id="laguagesknownDropdown" class="mt-1 block w-full rounded-md border border-gray-300 p-2">
                            <option value="">Select Language</option>
                            <option value="kannada">Kannada</option>
                            <option value="English">English</option>
                            <option value="Hindi">Hindi</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">SSC %</label>
                        <input type="number" name="ssc_percent" class="input-field" placeholder="SSC percentage" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">HSC %</label>
                        <input type="number" name="hsc_percent" class="input-field" placeholder="HSC percentage" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Graduation %</label>
                        <input type="number" name="graduation_percent" class="input-field" placeholder="Graduation percentage" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Fee Information Section -->
        <div class="section-card rounded-lg overflow-hidden">
            <div class="section-header">
                <i class="fas fa-money-bill-wave"></i>
                <span>Fee Information</span>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Actual Fees</label>
                        <input type="number" name="actual_fees" class="input-field" placeholder="Actual fees amount" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Discount</label>
                        <input type="number" name="discount" class="input-field" placeholder="Discount amount" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Registration Fees</label>
                        <input type="number" name="registration_fees" class="input-field" placeholder="Registration fees" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Accommodation</label>
                        <select name="accommodation" id="accomodationDropdown" class="mt-1 block w-full rounded-md border border-gray-300 p-2">
                            <option value="Hostel">Hostel</option>
                            <option value="PG">PG</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Exam</label>
                        <select name="Exam" id="ExamDropdown" class="mt-1 block w-full rounded-md border border-gray-300 p-2">
                            <option value="Hostel">AFMI</option>
                            <option value="PG">MCAER</option>
                            <option value="PG">CMAT</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Documents Section -->
        <div class="section-card rounded-lg overflow-hidden">
            <div class="section-header">
                <i class="fas fa-file-alt"></i>
                <span>Documents Submitted</span>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- 10th Marksheet -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                        <div class="checkbox-container">
                            <input type="hidden" name="doc_10th" value="0">
                            <input type="checkbox" name="doc_10th" id="doc_10th" class="doc-toggle" value="1" data-target="#doc_10th_input" />
                            <label for="doc_10th" class="text-sm font-medium text-gray-700">10th Marksheet</label>
                        </div>
                        <div id="doc_10th_input" class="hidden">
                            <input type="text" id="10th_ms" name="doc_10th_registerNumber" class="form-input block w-full rounded-md border border-gray-300 p-2.5" placeholder="10th Marksheet Number" />
                        </div>
                    </div>

                    <!-- 12th Marksheet -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                        <div class="checkbox-container">
                            <input type="hidden" name="doc_12th" value="0">
                            <input type="checkbox" name="doc_12th" id="doc_12th" class="doc-toggle" value="1" data-target="#12th_marksheet_number" />
                            <label for="doc_12th" class="text-sm font-medium text-gray-700">12th Marksheet</label>
                        </div>
                        <div id="12th_marksheet_number" class="hidden">
                            <input type="text" name="doc_12th_registerNumber" class="block w-full rounded-md border border-gray-300 p-2.5" placeholder="12th Marksheet Number" />
                        </div>
                    </div>

                    <!-- Degree/PDC -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                        <div class="checkbox-container">
                            <input type="hidden" name="doc_degree" value="0">
                            <input type="checkbox" name="doc_degree" id="doc_degree" class="doc-toggle" value="1" data-target="#degree_marksheet_number" />
                            <label for="doc_degree" class="text-sm font-medium text-gray-700">Degree/PDC</label>
                        </div>
                        <div id="degree_marksheet_number" class="hidden">
                            <input type="text" name="degree_marksheet_number" class="block w-full rounded-md border border-gray-300 p-2.5" placeholder="Degree Marksheet Number">
                        </div>
                    </div>

                    <!-- Migration/TC -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                        <div class="checkbox-container">
                            <input type="hidden" name="doc_migration" value="0">
                            <input type="checkbox" name="doc_migration" id="doc_migration" class="doc-toggle" value="1" data-target="#migration_certificate_number" />
                            <label for="doc_migration" class="text-sm font-medium text-gray-700">Migration/TC</label>
                        </div>
                        <div id="migration_certificate_number" class="hidden">
                            <input type="text" name="migration_certificate_number" class="block w-full rounded-md border border-gray-300 p-2.5" placeholder="Migration Certificate Number">
                        </div>
                    </div>

                    <!-- Caste Certificate -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                        <div class="checkbox-container">
                            <input type="hidden" name="doc_caste" value="0">
                            <input type="checkbox" name="doc_caste" id="doc_caste" class="doc-toggle" value="1" data-target="#caste_certificate_number" />
                            <label for="doc_caste" class="text-sm font-medium text-gray-700">Caste Certificate</label>
                        </div>
                        <div id="caste_certificate_number" class="hidden">
                            <input type="text" name="caste_certificate_number" class="block w-full rounded-md border border-gray-300 p-2.5" placeholder="Caste-Certificate Number">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Action Buttons -->
        <div class="form-container rounded-lg p-6">
            <div class="flex gap-4 justify-center">
                <button type="submit" class="btn-primary bg-blue-600 flex items-center ">
                    <i class="fas fa-plus"></i>
                    Add Student
                </button>
                <button type="reset" class="btn-secondary flex items-center gap-2">
                    <i class="fas fa-redo"></i>
                    Clear Form
                </button>
            </div>
        </div>
    </form>
    <div id="toast-box"></div>
</div>