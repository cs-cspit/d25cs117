    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Sr No</th>
                <th>Name</th>
                <th>Surname</th>
                <th>City</th>
            </tr>
            <?php 

            $db = mysqli_connect("localhost","root","","practical_8");
            if(!$db){
                echo "Connection Failed".mysqli_connect_errno();
            }

            $result = mysqli_query($db,"SELECT * FROM users");
            
            while($row=$result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['Name']."</td>";
                echo "<td>".$row['Surname']."</td>";
                echo "<td>".$row['City']."</td>";    
                echo "</tr>";
            }

            ?>
        </table>
    </body>
    </html>