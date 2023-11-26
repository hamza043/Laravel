<h1>User Login</h1>
<form action="car" method="post">
    @csrf
    <input type="text" name="username" placeholder="Enter user id">
    <br><br>
    <input type="password" name="userpassword" placeholder="Enter user password">
    <br><br>
    <button type="submit">Login</button>
</form>
