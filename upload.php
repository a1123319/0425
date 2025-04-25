<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_FILES["file-upload"]["name"] . "<br>";
    echo $_FILES["file-upload"]["tmp_name"] . "<br>";
    echo $_FILES["file-upload"]["size"] . "<br>";
    echo $_FILES["file-upload"]["type"] . "<br>";

    $file_path = "pic\\icon.jpg";

    if (copy($_FILES["file-upload"]["tmp_name"], $file_path)) {
        echo "File uploaded successfully.<br>";
        unlink($_FILES["file-upload"]["tmp_name"]);
    }

    for ($i = 0; $i < count($_FILES["another-files"]["name"]); $i++) {
        if (copy($_FILES["another-files"]["tmp_name"][$i], $i)) {
            echo "File uploaded successfully.<br>";
            unlink($_FILES["another-files"]["tmp_name"][$i]);
        }
    }
    ?>
</body>
</html>