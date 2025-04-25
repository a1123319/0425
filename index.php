<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (file_exists("pic\\icon.jpg")) {
        echo "<img src='pic\\icon.jpg' width=100%>";
    }
    ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file-upload"><br>
        <input type="file" name="another-files[]" multiple><br>
        <input type="submit">
    </form>
</body>
</html>