<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <x-UserComponent  componentname="welcome page"/>
    <P>Hello Everyone</p>
    <form class="mx-5 mt-5" action="users" method="POST">
        @csrf
        <div class="col-md-4">
        <label class="form-label">Name</label> 
        <input type="text" name="username" class="form-control" placeholder="Enter the name"/>
        <span>@error('username'){{$message}}@enderror</span><br>
        <label class="form-label">Password</label>
        <input type="password" name="password"  class="form-control" placeholder="Enter the password" />
        <span style="color:red">@error('password'){{$message}}@enderror</span><br>
        <button type="submit" class="btn btn-success">Submit</button>
        </div>
        @include('about')
    </form>


</body>
</html>

