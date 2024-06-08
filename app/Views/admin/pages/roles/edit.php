<!-- app/Views/admin/pages/roles/edit.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Role</title>
</head>
<body>
    <h1>Edit Role</h1>
    <form action="/roles/update" method="post">
        <input type="hidden" name="id" value="<?= $role['id']; ?>">
        <label for="role_name">Role Name:</label><br>
        <input type="text" id="role_name" name="role_name" value="<?= $role['role_name']; ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
