<aside id="sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen bg-blue-600 text-white transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">

    <div class="h-full flex flex-col overflow-y-auto px-3 py-4">
          <div class="flex items-center justify-center mb-6">
            <span class="text-2xl font-bold tracking-wide">AMS Admin Panel</span>
        </div>

        <nav>
            <a href="{{ route('admin.dashboard') }}"
                class="dashboard-button ajax-link flex items-center px-4 py-2 mb-2 rounded-lg hover:bg-blue-500 bg-blue-700 font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0,0,256,256" class="w-5 h-5">
                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <g transform="scale(5.33333,5.33333)">
                            <path d="M39.5,43h-9c-1.381,0 -2.5,-1.119 -2.5,-2.5v-9c0,-1.105 -0.895,-2 -2,-2h-4c-1.105,0 -2,0.895 -2,2v9c0,1.381 -1.119,2.5 -2.5,2.5h-9c-1.381,0 -2.5,-1.119 -2.5,-2.5v-19.087c0,-2.299 1.054,-4.471 2.859,-5.893l14.212,-11.199c0.545,-0.428 1.313,-0.428 1.857,0l14.214,11.199c1.805,1.422 2.858,3.593 2.858,5.891v19.089c0,1.381 -1.119,2.5 -2.5,2.5z"></path>
                        </g>
                    </g>
                </svg> <span class="ms-3 text-gray-800 dark:text-gray-100">Dashboard</span>
            </a>

            <button type="button"
                class="student-button flex items-center justify-between w-full px-4 py-2 mb-2 hover:bg-blue-500 rounded-lg"
                data-collapse-toggle="students-dropdown"
                aria-controls="students-dropdown"
                aria-expanded="false">
                <span class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                    </svg></span> <span class="ms-3 text-gray-800 dark:text-gray-100">Students</span>
                <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <ul id="students-dropdown" class="hidden space-y-1 ml-6">
                <li>
                    <a href="{{ route('students.addstudents') }}" class="ajax-link flex items-center gap-2 py-1 hover:bg-blue-500 rounded px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                        </svg>
                        Add Student
                    </a>
                </li>
                <li>
                    <a href="{{ route('students.view') }}" class="ajax-link flex items-center gap-2 py-1 hover:bg-blue-500 rounded px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                        </svg>

                        View Students
                    </a>
                </li>
            </ul>

            <button type="button"
                class="subjects-button flex items-center justify-between w-full px-4 py-2 mb-2 hover:bg-blue-500 rounded-lg"
                data-collapse-toggle="subjects-dropdown"
                aria-controls="subjects-dropdown"
                aria-expanded="false">
                <span class="flex items-center"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M4 19V6.2C4 5.0799 4 4.51984 4.21799 4.09202C4.40973 3.71569 4.71569 3.40973 5.09202 3.21799C5.51984 3 6.0799 3 7.2 3H16.8C17.9201 3 18.4802 3 18.908 3.21799C19.2843 3.40973 19.5903 3.71569 19.782 4.09202C20 4.51984 20 5.0799 20 6.2V17H6C4.89543 17 4 17.8954 4 19ZM4 19C4 20.1046 4.89543 21 6 21H20M9 7H15M9 11H15M19 17V21" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg></span> <span class="ms-3 text-gray-800 dark:text-gray-100">Subjects</span>
                <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <ul id="subjects-dropdown" class="hidden space-y-1 ml-6">
                <li>
                    <a href="{{ route('subject.addsubjects') }}" class="ajax-link flex items-center gap-2 py-1 hover:bg-blue-500 rounded px-2">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000" class="w-5 h-5">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title></title>
                                <g id="Complete">
                                    <g data-name="add" id="add-2">
                                        <g>
                                            <line fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12" x2="12" y1="19" y2="5"></line>
                                            <line fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="5" x2="19" y1="12" y2="12"></line>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        Add Subjects
                    </a>
                </li>
                <li>
                    <a href="{{ route('subject.viewsubjects') }}" class="ajax-link flex items-center gap-2 py-1 hover:bg-blue-500 rounded px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                        </svg>

                        View Subjects
                    </a>
                </li>
            </ul>

            <button type="button"
                class="marks-entry-button flex items-center justify-between w-full px-4 py-2 mb-2 hover:bg-blue-500 rounded-lg"
                data-collapse-toggle="marks-dropdown"
                aria-controls="marks-dropdown"
                aria-expanded="false">
                <span class="flex items-center">
                    <i class="fa-solid fa-file" style="color: #ffffff;"></i>
                </span> <span class="ms-3 text-gray-800 dark:text-gray-100">Marks</span>
                <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <ul id="marks-dropdown" class="hidden space-y-1 ml-6">
                <li>
                    <a href="{{ route('marks_entry.entrymarks') }}" class="ajax-link flex items-center gap-2 py-1 hover:bg-blue-500 rounded px-2">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000" class="w-5 h-5">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title></title>
                                <g id="Complete">
                                    <g data-name="add" id="add-2">
                                        <g>
                                            <line fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12" x2="12" y1="19" y2="5"></line>
                                            <line fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="5" x2="19" y1="12" y2="12"></line>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        Entry Marks
                    </a>
                </li>
            </ul>

            <button type="button"
                class="imp-exp-button flex items-center justify-between w-full px-4 py-2 mb-2 hover:bg-blue-500 rounded-lg"
                data-collapse-toggle="imp-exp-dropdown"
                aria-controls="imp-exp-dropdown"
                aria-expanded="false">
                <span class="flex items-center">
                    <i class="fa-solid fa-file" style="color: #ffffff;"></i>
                </span> <span class="ms-3 text-gray-800 dark:text-gray-100">Import / Export</span>
                <svg class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <ul id="imp-exp-dropdown" class="hidden space-y-1 ml-6">
                <li>
                    <a href="" class="ajax-link flex items-center gap-2 py-1 hover:bg-blue-500 rounded px-2">
                       <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
<g id="Communication / Share_iOS_Export">
<path id="Vector" d="M9 6L12 3M12 3L15 6M12 3V13M7.00023 10C6.06835 10 5.60241 10 5.23486 10.1522C4.74481 10.3552 4.35523 10.7448 4.15224 11.2349C4 11.6024 4 12.0681 4 13V17.8C4 18.9201 4 19.4798 4.21799 19.9076C4.40973 20.2839 4.71547 20.5905 5.0918 20.7822C5.5192 21 6.07899 21 7.19691 21H16.8036C17.9215 21 18.4805 21 18.9079 20.7822C19.2842 20.5905 19.5905 20.2839 19.7822 19.9076C20 19.4802 20 18.921 20 17.8031V13C20 12.0681 19.9999 11.6024 19.8477 11.2349C19.6447 10.7448 19.2554 10.3552 18.7654 10.1522C18.3978 10 17.9319 10 17 10" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</svg>
                        Export
                    </a>
                </li>
                <li>
                    <a href="" class="ajax-link flex items-center gap-2 py-1 hover:bg-blue-500 rounded px-2">
                      

                        <svg fill="#ffffff" class="h-5 w-5" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M435.2,153.6H320v25.6h102.4v307.2H89.6V179.2H192v-25.6H76.8c-7.066,0-12.8,5.734-12.8,12.8v332.8 c0,7.066,5.734,12.8,12.8,12.8h358.4c7.066,0,12.8-5.734,12.8-12.8V166.4C448,159.334,442.266,153.6,435.2,153.6z"></path> </g> </g> <g> <g> <path d="M341.956,234.249c-4.941-5.052-13.056-5.146-18.099-0.205L268.8,287.898V12.8C268.8,5.734,263.066,0,256,0 c-7.066,0-12.8,5.734-12.791,12.8v275.089l-55.057-53.854c-5.043-4.941-13.158-4.847-18.099,0.205 c-4.941,5.06-4.855,13.158,0.205,18.099l76.8,75.128c5.043,4.949,13.158,4.855,18.099-0.188l76.595-74.931 C346.803,247.407,346.897,239.309,341.956,234.249z"></path> </g> </g> </g></svg>
                       
                        Import
                    </a>
                </li>
            </ul>



        </nav>
    </div>
    
</aside>