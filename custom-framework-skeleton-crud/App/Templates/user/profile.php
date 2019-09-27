<?php /** @var \App\Data\UserDTO $data */?>

<h2> Edit</h2>

<form method="post">
    <label>
        Username: <input type="text" name="username" value="<?= $data->getUsername() ?>">
    </label>
    <br>
    <label>
        Password: <input type="password" name="password">
    </label>
    <br>
    <label>
        Confirm Password: <input type="password" name="confirm_password">
    </label>
    <br>
    <label>
        First Name: <input type="text" name="first_name" value="<?= $data->getFirstName();?>">
    </label>
    <br>
    <label>
        Last Name:  <input type="text" name="last_name" value="<?= $data->getLastName(); ?>">
    </label>
    <br>
    <label>
        Birth Date: <input type="date" name="born_on" value="<?= $data->getBornOn(); ?>">
    </label>
    <br>
    <input type="submit" name="edit" value="Register">
</form>

You can <a href="logout.php">Logout</a> or see <a href="all.php">all users</a>.