<form method="post">
    <label>Name:</label>
    <input type="text" name="name" value="<?= $user['name']; ?>" required>
    <label>Email:</label>
    <input type="email" name="email" value="<?= $user['email']; ?>" required>
    <button type="submit">Update</button>
</form>