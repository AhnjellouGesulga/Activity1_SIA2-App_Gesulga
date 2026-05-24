<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

<h1>Student List</h1>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Student No</th>
        <th>Name</th>
        <th>Course</th>
    </tr>

    @foreach($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->student_no }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->course }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>