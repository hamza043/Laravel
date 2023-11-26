<h1>User Login</h1>
<form action="car" method="post">
    @csrf
    <input type="text" name="username" placeholder="Enter user id">
    <br>
    <span style="color: red">@error('username'){{$message}}@enderror</span>
    <br>
    <input type="password" name="userpassword" placeholder="Enter user password">
    <br>
    <span style="color: red">@error('userpassword'){{$message}}@enderror</span>
    <br>
    <button type="submit">Login</button>
</form>
