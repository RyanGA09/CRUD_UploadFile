<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Upload a New File</h1>
    <form action="/public/index.php?action=upload" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="File Name" required>
        <input type="file" name="file" required>
        <button type="submit" name="upload">Upload</button>
    </form>
</body>
</html>
