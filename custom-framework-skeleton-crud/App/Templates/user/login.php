<h2>Login</h2>
<?php /** @var \App\Data\ErrorDTO $errors*/
?>
<?php if($errors): ?>
<p style="color:red"><?= $errors->getMessage() ?></p>
<?php endif;?>
<form method="post">
    <label>
        Username: <input type="text" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : null ?>">
    </label>
    <br>
    <label>
        Password: <input type="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : null ?>">
    </label>
    <br>
    <input type="submit" name="register" value="Register">
</form>