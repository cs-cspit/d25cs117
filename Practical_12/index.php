<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <h2>User Records</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Operations</th>
        </tr>
        <?php 
        include 'dbconnection.php';
        $sql = 'SELECT * FROM users';
        $result = mysqli_query($db,$sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $id = $row['ID'];
                echo "<tr>";
                echo "<td>".$row['ID']."</td>";
                echo "<td>".$row['fname']."</td>";
                echo "<td>".$row['lname']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>";
                echo "<a href='insert.php?editId=$id'>EDIT</a> | ";

                // Delete form inside table
                echo "<form method='POST' style='display:inline;'>";
                echo "<input type='hidden' name='deleteId' value='$id'>";
                echo "<input type='submit' name='delete' value='Delete'>";
                echo "</form>";

                echo "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    
    <?php 
    if(isset($_POST['delete'])){
        $deleteId = $_POST['deleteId'];
        $delete = "DELETE FROM users WHERE ID = '$deleteId'";
        $result = mysqli_query($db,$delete);
        if($result){
            ?>
                <script>alert("Your data is deleted")</script>
            <?php 
        }else{
            echo "Your record could not be deleted";
        }
    }    
    ?>
</body>
</html>
