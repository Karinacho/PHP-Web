<?php /** @var \app\Data\UserDTO $data */
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="/public/css/style.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <header>

            <nav class="navbar">
                <h2>E-shop</h2>
                <ul class>
                    <li>Home</li>
                    <li>Categories</li>
                </ul>
                <ul class="profile-info">
                    <?php if($data!==null): ?><li>Hello, <?= $data->getUsername(); ?> </li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php else : ?>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    <?php endif; ?>

                </ul>
            </nav>

        </header>
        <div></div>
        <div></div>
        <div></div>
        <div></div>

    </div>

</body>
</html>
