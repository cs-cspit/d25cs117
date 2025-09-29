<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="surname" placeholder="surname">
        <input type="text" name="city" placeholder="city">
    <input type="submit" value="submit">
    </form>
</body>
</html>

    <?php 
    if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['city'])){
        
        $db = mysqli_connect("localhost","root","","practical_8");
        if(!$db){
            echo "Connection Failed ".mysqli_connect_error();
        }

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $city = $_POST['city'];
        $sql = "INSERT INTO users(Name,Surname,City) VALUES ('$name','$surname','$city')";
        $result = mysqli_query($db,$sql);
        if($result){
            echo "Data Inserted Successfully";
        }else{
            echo "Data Insertion Failed ".mysqli_error($db);
        }
    }
    ?>
