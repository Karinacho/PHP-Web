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
<div class="login">
    <h2>User Login</h2>
    <?php /** @var $errors*/
    ?>
    <?php if($errors):
        foreach ($errors as $err):?>
        <p style="color:red"><?= $err ?></p>
    <?php endforeach;
    endif;?>
    <form method="post">
        <label>
            <input type="text" name="username" placeholder="Username" value="<?= isset($_POST['username']) ? $_POST['username'] : null ?>">
        </label>
        <br>

        <label>
            <input type="password" name="password" placeholder="Password" value="<?= isset($_POST['password']) ? $_POST['password'] : null ?>">
        </label>
        <br>
        <input type="submit" name="login" value="Login">
    </form>
</div>

</body>
</html>
