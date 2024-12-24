<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File List</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../assets/js/scripts.js"></script>
</head>
<body>
    <h1>Uploaded Files</h1>
    <a href="/public/index.php?action=upload">Upload New File</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>File</th>
                <th>Uploaded At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
                <tr>
                    <td><?= $file['id'] ?></td>
                    <td><?= htmlspecialchars($file['name']) ?></td>
                    <td><a href="<?= $file['path'] ?>" download>Download</a></td>
                    <td><?= $file['uploaded_at'] ?></td>
                    <td><a href="/public/index.php?action=delete&id=<?= $file['id'] ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
