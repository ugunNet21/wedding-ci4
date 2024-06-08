<!-- app/Views/admin/pages/roles/create.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Role</title>
</head>
<body>
    <h1>Create New Role</h1>
    <form action="/roles/store" method="post">
        <label for="role_name">Role Name:</label><br>
        <input type="text" id="role_name" name="role_name"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
