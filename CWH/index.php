<?php
$insert = false;
if(isset($_POST['name'])){


    $server ="localhost";
    $username ="root";
    $password ="";
    $dbname = "trip";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    else
    {
        echo "successful the connection with Database";
    }
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc= $_POST['desc'];

    $sql ="INSERT INTO trip (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true)
    {
        // echo "successfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to GDEC US Trip Form</h1>
        <p>Enter your details and submit this form to confirm your Participation in the Trip</p>
        <?php
            if($insert == true)
            echo "<p class='submitMsg'> Thanks for submitting your form. We are happy to see you Joining us for the Trip </p>";

        ?>
    </div>
    <form action="index.php" method="post">
        Name:<input type="text" name="name" id="name" placeholder="Enter Your Name">
        <br>
        Age:<input type="text" name="age" id="age" placeholder="Enter Your Age">
        <br>
    <div style="left: 0%; align-items:start; ">
        Gender: <label for="male" >
            <input type="radio" name="gender" id="gender" value="male" >male
        </label>
        <label for="female">
            <input type="radio" name="gender" id="gender" value="female">female
        </label>
    </div>
    <br>
    email:
    <input type="email" name="email" id="email" placeholder="Enter Your Email">
    <br>
    Ph. No.:
    <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone Number">
    <br>
    Description:
     <textarea name="desc" id="desc" cols="30" rows="10" placeholder="You can Enter any other Info. "></textarea>
     <br>
     <button class="btn">submit</button>
    
    </form>
    
<script src="index.js"></script>
</body>
</html> -->
<!-- <?php
// Connect to database
// $servername = "localhost:3306";
// $username = "root";
// $password = "";
// $dbname = "students";
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($con->connect_error)
// {
// die("Connection failed: " . $con->connect_error);
// }
// Retrieve student data
$sql = "SELECT 'sno', `name`, `age`, `gender`, `email`, `phone`, `desc`, `dt` FROM trip";
$result = $con->query($sql);
// Display student data
if ($result->num_rows > 0)
{
echo "<table>
<tr>
<th>ID</th>
201100107066
WEB Programming (3160713) 39
<th>Name</th>
<th>Department</th>
<th>Semester</th>
</tr>";
while($row = $result->fetch_assoc())
{
echo "<tr>
<td>".$row["sno"]."</td>
<td>".$row["name"]."</td>
<td>".$row["age"]."</td>
<td>".$row["gender"]."</td>
<td>".$row["email"]."</td>
<td>".$row["phone"]."</td>
<td>".$row["desc"]."</td>
<td>".$row["dt"]."</td>
</tr>";
}
echo "</table>";
}
else
{
echo "No students found";
}
// Close connection
// $conn->close();
?> -->