<?php
require_once "controllers/UserController.php";
$controller = new UserController();
$users = $controller->$userModel->getAllUsers();
?>

<h2>User List</h2>
<a href="index.php?action=create">Add User</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= $user["id"]; ?></td>
            <td><?= $user["name"]; ?></td>
            <td><?= $user["email"]; ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $user["id"]; ?>">Edit</a>
                <a href="index.php?action=delete&id=<?= $user["id"]; ?>" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
