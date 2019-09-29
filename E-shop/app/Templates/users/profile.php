<?php /** @var \app\Data\UserDTO $data */?>
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
<div class="profile">

    <h2><?=$data->getUsername() ?>'s Profile</h2>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="orders.php">All Orders</a></li>
        <li><a href="editProfile.php">Edit Profile Info</a></li>
        <li><a href="basket.php">Basket</a></li>
        <li><a href="depositMoney.php">Deposit more money</a></li>
    </ul>
    <div class="user-info">
        <p class="amount-left">AMOUNT LEFT: <?=$data->getMoneyAmount() ?> lv</p>
        <ul>
            <li>First name : <?=$data->getFirstName() ?></li>
            <li>Last name : <?=$data->getLastName() ?></li>
            <li>Birthday: <?=$data->getBornOn() ?></li>
        </ul>


    </div>

</div>

</body>
</html>
