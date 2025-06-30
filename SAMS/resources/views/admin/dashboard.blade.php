@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="p-6 w-full space-y">
    <div class="text-3xl font-extrabold text-gray-800">Welcome Admin</div>
    <div class="">Here is the Quick overview of the attendance system</div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    <div class="bg-gradient-to-br from-blue-500 to-indigo-600 shadow-xl rounded-2xl p-5 text-white">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h3 class="text-sm uppercase font-medium opacity-80">Total Students</h3>
                <p class="text-3xl font-extrabold">120</p>
            </div>
            <div class="bg-white/20 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                </svg>
            </div>
        </div>

        <div class="overflow-x-auto bg-white rounded-xl p-3 shadow-md">
            <table class="min-w-full text-left text-sm text-gray-700">
                <thead>
                    <tr class="bg-blue-100 text-blue-900">
                        <th class="px-4 py-2 font-semibold">Departments</th>
                        <th class="px-4 py-2 font-semibold">Total Students</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-4 py-2">MCA</td>
                        <td class="px-4 py-2">120</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="px-4 py-2">MBA</td>
                        <td class="px-4 py-2">150</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl text-white p-5">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h3 class="text-sm uppercase font-medium opacity-90"> Total Lectures</h3>
                <p class="text-3xl font-extrabold">10</p>
            </div>
            <div class="bg-white/20 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                </svg>
            </div>
        </div>
        <div class="overflow-x-auto bg-white rounded-xl p-3 shadow-md">
            <table class="min-w-full text-left text-sm text-gray-700">
                <thead>
                    <tr class="bg-green-100 text-green-900">
                        <th class="px-4 py-2 font-semibold">Departments</th>
                        <th class="px-4 py-2 font-semibold">Total Lectureres</th>
                    </tr>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="py-2 px-4">MCA</td>
                        <td class="py-2 px-4">15</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">MBA</td>
                        <td class="py-2 px-4">15</td>
                    </tr>
                </tbody>
                </thead>
            </table>
        </div>
    </div>




</div>
<!-- 
<div class="grid grid-cols-1 mt-5">
    <div class="bg-gradient-to-br from-blue-600 via-blue-500 to-blue-700 shadow-2xs p-5 rounded-2xl">
        <div class="grid grid"></div>
    </div>
</div> -->



@endsection