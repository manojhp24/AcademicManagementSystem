<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>

<body>
    @extends('admin.dashboard')

    @section('content')
    @include('students.partials.studentsaddform')

    @endsection
</body>

</html>