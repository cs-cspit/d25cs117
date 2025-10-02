<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical_12</title>
</head>
<body>
<?php 
// Import DB connection
include('dbconnection.php');

// Initialize variables
$fname = "";
$lname = "";
$email = "";
$editId = "";

// Check if we are editing (coming from display.php with GET)
if (isset($_GET["editId"])) {
    $editId = $_GET["editId"];

    $sql = "SELECT * FROM users WHERE ID = '$editId'";
    $result = mysqli_query($db, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
    }
}

// Insert / Update logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];

    if (!empty($_POST["editId"])) {
        // UPDATE record
        $editId = $_POST["editId"];
        $sql = "UPDATE users SET fname='$fname', lname='$lname', email='$email' WHERE ID='$editId'";
        if (mysqli_query($db, $sql)) {
            ?>
                <script>alert("Your data is updated")</script>
            <?php 
        } else {
            echo "Error updating: " . mysqli_error($db);
        }
    } else {
        // INSERT record
        $sql = "INSERT INTO users(fname,lname,email) VALUES ('$fname','$lname','$email')";
        if (mysqli_query($db, $sql)) {
            ?>
                <script>alert("Your data is inserted")</script>
            <?php 
        } else {
            echo "Error inserting: " . mysqli_error($db);
        }
    }
}
?>

<!-- Insert/Edit Form -->
<h2><?php echo ($editId) ? "Edit User" : "Add User"; ?></h2>
<form action="" method="POST">
    <input type="hidden" name="editId" value="<?php echo $editId; ?>">
    <input type="text" name="fname" placeholder="Enter First Name" value="<?php echo $fname; ?>" required>
    <input type="text" name="lname" placeholder="Enter Last Name" value="<?php echo $lname; ?>" required>
    <input type="email" name="email" placeholder="Enter Email" value="<?php echo $email; ?>" required>
    <input type="submit" value="<?php echo ($editId) ? 'Update' : 'Submit'; ?>">        
</form>

<p><a href="index.php">Back to User List</a></p>
</body>
</html>
