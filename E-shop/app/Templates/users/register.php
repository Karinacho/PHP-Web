<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/public/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="register">
    <h2> Register</h2>
    <form method="post">
        <label>
            <input type="text" name="username" placeholder="Username">
        </label>
        <br>
        <label>
            <input type="password" name="password" placeholder="Password">
        </label>
        <br>
        <label>
            <input type="password" name="confirm_password" placeholder="Confirm password">
        </label>
        <br>
        <label>
            <input type="text" name="first_name" placeholder="First Name">
        </label>
        <br>
        <label>
            <input type="text" name="last_name" placeholder="Last Name">
        </label>
        <br>
        <label>
            Birth Date: <input type="date" name="born_on">
        </label>
        <br>
        <input type="submit" name="register" value="Register">
    </form>
</div>
<p>If you already have an account you can <a href="login.php">Login</a>.</p>
</body>
</html>
