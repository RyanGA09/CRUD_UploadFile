<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete File</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Delete File</h1>
    <p>Are you sure you want to delete this file?</p>
    <form action="/public/index.php?action=delete&id=<?= htmlspecialchars($id) ?>" method="POST">
        <button type="submit" name="confirmDelete">Yes, Delete</button>
        <a href="/public/index.php">Cancel</a>
    </form>
</body>
</html>
