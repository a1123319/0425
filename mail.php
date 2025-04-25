<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="send.php" method="post">
        <label for="subject">Subject</label>
        <input type="text" name="subject"><br>
        <label for="receipt">Receipt</label>
        <input type="email" name="receipt"><br>
        <label for="details">Details</label>
        <textarea name="details" col=20 row=20></textarea>
        <input type="submit">
    </form>
</body>
</html>