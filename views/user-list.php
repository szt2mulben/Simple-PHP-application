<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>User List</h1>
    <ul>
    <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
                <li><?= $user['name'] ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No users found.</li>
        <?php endif; ?>
    </ul>
    <a href="index.php">Back</a>
</body>
</html>
