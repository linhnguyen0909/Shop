<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo ListUsers</title>
</head>

<body>
    <h1>List</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>pass</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td> {{$user->id}} </td>
            <td> {{$user->name}} </td>
            <td> {{$user->email}} </td>
            <td>{{$user->password}}</td>
            <td><button type="submit"></button></td>
        </tr>
        @endforeach
    </table>
</body>

</html>
