<?php 
$db = mysqli_connect("localhost","root","","practical_11");
if(!$db){
    echo "Failed Connection".mysqli_connect_error();
}
if(isset($_POST["name"]) && isset($_POST["age"])){

    $name = $_POST["name"];
    $age = $_POST["age"];
    $insert = "INSERT INTO users(Name,Age) VALUES ('$name','$age')";
    $result = mysqli_query($db,$insert);
    if(!$result){
        echo "Data is not stored successfully";
    }else{
     $retrival = "SELECT * FROM users";
     $result = mysqli_query($db,$retrival);
        if($result->num_rows > 0){
            echo "<table border = '1'>";
            
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row["Id"]."</td>";
                echo "<td>".$row["Name"]."</td>";
                echo "<td>".$row["Age"]."</td>";
                echo "</tr>";
            }
            
            echo "</table>";
    }
    }
}
?>