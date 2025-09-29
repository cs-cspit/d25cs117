<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>

    <style>
        body{
            background-color:bisque;
        }
        form{
            padding: 20px 20px;
        }
        input{
            margin: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h2>Login Page</h2>
        Username : <input type="text" name="uname">
        Password : <input type="password" name="pwd">
        <input type="submit" value="submit">

    </form>
</body>
</html>

<?php 
    if(!empty($_POST["uname"]) && !empty($_POST["pwd"])){
        $uname = $_POST["uname"];
        $pwd = $_POST["pwd"];
        session_start();
        $_SESSION["uname"] = $uname;
        $_SESSION["pwd"] = $pwd;
        header("Location: confirm.php");
        exit();
    }
?>