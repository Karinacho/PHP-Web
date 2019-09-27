<?php /** @var \App\Data\UserDTO[] $data */?>
<table border="1">
    <thead>
        <tr>
            <td>Username </td>
            <td>FullName</td>
            <td>Born On</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach($data as $userDTO):
            ?><tr>
            <td><?= $userDTO->getUsername(); ?></td>
            <td><?= $userDTO->getFirstName() . ' ' . $userDTO->getLastName(); ?></td>
            <td><?= $userDTO->getBornOn(); ?></td>
        </tr>

         <?php endforeach; ?>
    </tbody>
</table>

<a href="profile.php">Go back to your profile</a>
