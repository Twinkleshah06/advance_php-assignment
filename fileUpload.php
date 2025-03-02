<!-- Create a file upload form that allows users to upload files and handle the uploaded files safely on the server. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="upload_handler.php" method="post" enctype="multipart/form-data">
        <label>Select a file:</label>
        <input type="file" name="uploaded_file" required>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>