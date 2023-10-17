<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="bg.png" alt="IIT kharagpur">
    <div class="container">
        <h1>Welcome to IIT kharagpur US Trip Travel Form</h1>
        <p>Enter your details and submit this form to confirm your participation in the Trip</p>
        <p class="submitMsg">Thanks for submitting your form We are happy to see you joinning us for the US trip</p>

        <form action="/cws/index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone no.">
            <textarea name="text" id="text" placeholder="pickup location" cols="15" rows="10"></textarea>
            <button class="btn">Submit</button>

        </form>
    </div>
 
</body>

 </html>
<?php
    // Set connection variables
   
    $server = "localhost";
    $username = "root";
    $password = "";
    $database= "cws";
    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $database);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    else{
        echo"the connection is successfull";
    }
    
    // Collect post variables
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
     $name = $_POST["name"];
     $age = $_POST["age"];
     $gender = $_POST["gender"];
     $email = $_POST["email"];
     $phone = $_POST["phone"];
     $sql = "INSERT INTO cws (name, age, gender, email, phone) VALUES ('$name', '$age', '$gender', '$email', '$phone')";
     

    // Execute the query
    if(mysqli_query($con, $sql)){
        echo"Data inserted successfully";
    }
    else{
        echo"Error: " . mysqli_error($con);
    }
    // Close the database connection
    mysqli_close($con);
    }
?>

