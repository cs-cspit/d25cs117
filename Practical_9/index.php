<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php 
if(isset($_POST['username'])){
    $username = $_POST['username'];
    file_put_contents("data.txt",$username);
}
?>