<div class="w-full mx-auto">
    <!-- Header -->
    <div class="mb-6 border-l-8 border-blue-700 pl-4">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
            Add Student
        </h1>
        <p class="text-sm md:text-base text-gray-500 mt-1">
            Add New student records from this dashboard.
        </p>
    </div>


    <form class="space-y-8">
        <!-- Basic Information Section -->
        <div class="section-card rounded-lg overflow-hidden">
            <div class="section-header">
                <i class="fas fa-user"></i>
                <span>Basic Information</span>
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
                        type="number" />

                    <x-input-field
                        name="email"
                        label="Email"
                        placeholder="Enter Email Address"
                        type="email" />
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Permanent Address</label>
                        <textarea name="permanent_address" class="input-field" rows="3" placeholder="Enter permanent address"></textarea>
                    </div>
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
                        <label class="block text-sm font-medium text-gray-700 mb-2">Course</label>
                        <select name="class" class="input-field">
                            <option value="">Select Course</option>
                            <option value="MCA">MCA</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Year</label>
                        <select name="year" class="input-field">
                            <option value="">Select Year</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Section</label>
                        <select name="section" class="input-field">
                            <option value="">Select Section</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Graduation Background</label>
                        <input type="text" name="graduation_background" class="input-field" placeholder="Enter graduation background" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Languages Known</label>
                        <input type="text" name="languages_known" class="input-field" placeholder="Enter languages known" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Project Title & Company</label>
                        <input type="text" name="project_details" class="input-field" placeholder="Enter project details" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Academic Scores Section -->
        <div class="section-card rounded-lg overflow-hidden">
            <div class="section-header">
                <i class="fas fa-chart-line"></i>
                <span>Academic Scores</span>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
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
                        <label class="block text-sm font-medium text-gray-700 mb-2">College Fees</label>
                        <input type="number" name="college_fees" class="input-field" placeholder="College fees amount" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Discount</label>
                        <input type="number" name="discount" class="input-field" placeholder="Discount amount" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Actual Fees</label>
                        <input type="number" name="actual_fees" class="input-field" placeholder="Actual fees amount" />
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
                        <label class="block text-sm font-medium text-gray-700 mb-2">Exam Fees</label>
                        <input type="number" name="exam" class="input-field" placeholder="Exam fees" />
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Bank Name</label>
                        <input type="text" name="bank_name" class="input-field" placeholder="Bank name for transactions" />
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
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                        <div class="checkbox-container ">
                            <input type="checkbox" name="doc_10th" id="doc_10th" class="doc-toggle" data-target="#doc_10th_input" />
                            <label for="doc_10th" class="text-sm font-medium text-gray-700">10th Marksheet</label>
                        </div>
                        <div id="doc_10th_input" class="hidden">
                            <input type="text" id="10th_ms" name="doc_10th_input_value" class="form-input block w-full rounded-md border border-gray-300 p-2.5" placeholder="Enter 10th Marksheet Number" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                        <div class="checkbox-container">
                            <input type="checkbox" name="doc_12th" id="doc_12th" class="doc-toggle" data-target="#12th_marksheet_number" />
                            <label for="doc_12th" class="text-sm font-medium text-gray-700">12th Marksheet</label>
                        </div>
                        <div id="12th_marksheet_number" class="hidden">
                            <input type="text" name="12th_marksheet_number" class="block w-full rounded-md border border-gray-300 p-2.5" placeholder="Enter 12th Marksheet Number" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                        <div class="checkbox-container">
                            <input type="checkbox" name="doc_degree" id="doc_degree" class="doc-toggle" data-target="#degree_marksheet_number" />
                            <label for="doc_degree" class="text-sm font-medium text-gray-700">Degree/PDC</label>
                        </div>
                        <div id="degree_marksheet_number" class="hidden">
                            <input type="text" name="degree_marksheet_number" class="block w-full rounded-md border border-gray-300 p-2.5" placeholder="Enter Degree Marksheet Number">
                        </div>

                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                        <div class="checkbox-container">
                            <input type="checkbox" name="doc_migration" id="doc_migration" class="doc-toggle" data-target="#migration_certificate_number" />
                            <label for="doc_migration" class="text-sm font-medium text-gray-700">Migration/TC</label>
                        </div>
                        <div id="migration_certificate_number" class="hidden">
                            <input type="text" name="migration_certificate_number" class="block w-full rounded-md border border-gray-300 p-2.5" placeholder="Enter Migration Certificate Number">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                        <div class="checkbox-container">
                            <input type="checkbox" name="doc_caste" id="doc_caste" class="doc-toggle" data-target="#caste_certificate_number" />
                            <label for="doc_caste" class="text-sm font-medium text-gray-700">Caste Certificate</label>
                        </div>
                        <div id="caste_certificate_number" class="hidden">
                            <input type="text" name="caste_certificate_number" class="block w-full rounded-md border border-gray-300 p-2.5" placeholder="Enter Caste-Certificate Number">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Professional Status Section -->
        <div class="section-card rounded-lg overflow-hidden">
            <div class="section-header">
                <i class="fas fa-briefcase"></i>
                <span>Professional Status & Placement</span>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Professional Status</label>
                        <input type="text" name="professional_status" class="input-field" placeholder="Current professional status" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Extra Curriculum</label>
                        <input type="text" name="extra_curriculum" class="input-field" placeholder="Extra curricular activities" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Companies Interviewed</label>
                        <input type="text" name="companies_interviewed" class="input-field" placeholder="Companies interviewed with" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Interview Date</label>
                        <input type="date" name="interview_date" class="input-field" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Eligible</label>
                        <select name="eligible" class="input-field">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Interview Status</label>
                        <input type="text" name="interview_status" class="input-field" placeholder="Interview status" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Result</label>
                        <input type="text" name="interview_result" class="input-field" placeholder="Interview result" />
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" name="cv_submitted" id="cv_submitted" />
                        <label for="cv_submitted" class="text-sm font-medium text-gray-700">CV Submitted</label>
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
</div>