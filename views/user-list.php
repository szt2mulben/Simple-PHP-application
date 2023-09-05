<!DOCTYPE html>
<html lang="en">
<head>
    <title>User List</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>User List</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= $user['name'] ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php">Back</a>
</body>
</html>
