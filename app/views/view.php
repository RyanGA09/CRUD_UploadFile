<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View File</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>File Details</h1>
    <table>
        <tr>
            <th>ID</th>
            <td><?= htmlspecialchars($file['id']) ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= htmlspecialchars($file['name']) ?></td>
        </tr>
        <tr>
            <th>File</th>
            <td><a href="<?= htmlspecialchars($file['path']) ?>" download>Download</a></td>
        </tr>
        <tr>
            <th>Uploaded At</th>
            <td><?= htmlspecialchars($file['uploaded_at']) ?></td>
        </tr>
    </table>
    <a href="/public/index.php">Back to File List</a>
</body>
</html>
