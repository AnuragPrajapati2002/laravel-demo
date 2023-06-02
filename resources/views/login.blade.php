<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="users" method="POST">
        @csrf
        {{method_field('PUT')}}
        <label>Name</label>
        <input type="text" name="username" placeholder="Enter username"/><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password" /><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>