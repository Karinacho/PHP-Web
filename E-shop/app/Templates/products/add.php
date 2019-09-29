
<?php /** @var \app\Data\CategoryDTO[] $data */ ?>
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
<div class="add-product">
    <h2> Add Product</h2>
    <form method="post">
        <label>
            <input type="text" name="name" placeholder="Product Name">
        </label>
        <br>
        <label>
            <input type="text" name="image" placeholder="Product Image">
        </label>
        <br>
        <label>
            <input type="text" name="price" placeholder="Product Price">
        </label>
        <br>
        <label>
            <input type="text" name="description" placeholder="Product Description">
        </label>
        <br>
        <select name="category" class="categories" >
            <?php foreach($data as $category): ?>
            <option value="<?=$category->getName()?>"><?=$category->getName()?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="submit" name="add" value="Add Product">
    </form>
</div>

</body>
</html>
