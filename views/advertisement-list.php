<!DOCTYPE html>
<html lang="en">
<head>
    <title>Advertisement List</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Advertisement List</h1>
    <ul>
        <?php foreach ($advertisements as $advertisement): ?>
            <li>
                <strong><?= $advertisement['title'] ?></strong><br>
                User: <?= $advertisement['username'] ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php">Back</a>
</body>
</html>
