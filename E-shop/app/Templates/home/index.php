<?php /** @var \app\Data\UserDTO $data
 * @var \app\Data\ProductDTO[] $additionalData
 */


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
                    <?php if($data!== null && $data->getId()==='1'): ?>
                    <li><a href="addProduct.php">Add Product</a></li>
                    <?php endif ?>
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
        <main class="main-content">
            <div class="main-banners">
                <div class="image-container"><img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"><h2 class="centered">Clothes</h2></div>
                <div class="image-container"><img class="portrait"src="https://images.unsplash.com/photo-1518049362265-d5b2a6467637?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=687&q=80"><h2 class="centered">Shoes</h2></div>
                <div class="image-container"><img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"><h2 class="centered">Dresses</h2></div>
                <div class="image-container"><img src="https://images.unsplash.com/photo-1560158623-9669b8879c8e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"><h2 class="centered">Watches</h2></div>
            </div>
            <h4>New products</h4>
            <div class="new-products">
                <?php foreach($additionalData as $product):

                    $image = getimagesize($product->getImage());
                    $class = '';

                    if($image[1] < 500):
                        $class = 'landscape';
                    endif;
                    ?>
                <div class="product">
                    <span><img class="<?= $class?>" src="<?= $product->getImage() ?>"></span>
                    <div class="product-info">
                        <h5><?= $product->getName()?></h5>
                        <p style="font-style: italic; margin-bottom: 1em;">Category: <?=$product->getCategory() ?> </p>
                        <p style="margin-bottom:1em;"><?= $product->getDescription()?></p>
                        <p><b>Price: <?= $product->getPrice()?></b> </p>

                        <input type="submit" name="buy" value="Add to Cart">
                    </div>

                </div>
                <?php endforeach; ?>
            </div>

    </main>


    </div>

</body>
</html>
