<!-- app/Views/admin/pages/roles/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles List</title>
</head>
<body>
    <h1>Roles List</h1>
    <a href="/roles/create">Create New Role</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Role Name</th>
            <th>Action</th>
        </tr>
        <?php foreach ($roles as $role): ?>
            <tr>
                <td><?= $role['id']; ?></td>
                <td><?= $role['role_name']; ?></td>
                <td>
                    <a href="/roles/edit/<?= $role['id']; ?>">Edit</a>
                    <a href="/roles/delete/<?= $role['id']; ?>" onclick="return confirm('Are you sure you want to delete this role?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
