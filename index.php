<?php
$insert = false;
//code to connect to the BD till line 11.
if(isset($_POST['name'])){    //if someone has sent post req with name then only the following code will run or the connection will initiate
    //set connection variables
$server = "localhost";
$username = "root";
$password = "";

//create connection
$con = mysqli_connect($server, $username, $password);

//check for connection sucess
if(!$con){
    die("connection to this database falied dur to".mysqli_connect_error());
}

// echo "Success connectiong to the DB"

//collect post variables
$name = $_POST['name'];
$age = $_POST['age'];
$DOB = $_POST['DOB'];
$gender =$_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];

//execute query
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `dob`, `gender`, `phn`, `email`, `dt`) VALUES ('$name', '$age', '$DOB', '$gender', '$phone', '$email', current_timestamp())"; //`databaseName`.`tableName`
    // echo $sql;

    if($con->query($sql) === true){    //-> is an object operator to run query //if the query is true that is if it has run
        //    echo "Successfully inserted";

        //flag for successful insertion
        $insert = true;
    } 
    else{
        echo "Error: $sql <br> $con->error";     //to access error key of $connection
    }


    //close db connection(very imp)
    $con->close(); //to close conn once work done
}
?>

<!-- HTML code -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&family=Orelega+One&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<!-- HOMEPAGE -->
<section id="home">
<img src="brainobrain.jpeg" alt="image-here" class="homepage">
<header>
    <nav class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">services</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#form">Trip Form</a></li>

            <div class="search">
                <input type="text" name="search" id="search" placeholder="Search this website">
            </div>
        </ul>
    </nav>
</header>
</section>

<section id="form">
    <div class="tripForm" >
        <img src="space.png" alt="space" class="bg" >
        <div class="container">
            <h2>The NASA Trip</h2>
            <p>Enter your details and submit this form to confirm your participation</p>
            
            <?php
            if($insert == true){
            echo "<p class='submitMsg'>Your response has been submitted. We would be happy to see you joining this trip.</p>";
            }
            else
            // echo "Please fill Details";
            ?>
    
            <form action="index.php" method="post">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" placeholder="First Name">
                <label for="age">Age: </label>
                <input type="text" name="age" id="age" placeholder="Enter your Age">
                <label for="DOB">Date of Birth: </label>
                <input type="date" name="DOB" id="DOB">
                <label for="gender">Gender: </label>
                <input type="text" name="gender" id="gender" placeholder="Gender">
                <label for="phone">Phone number: </label>
                <input type="number" name="phone" id="phone" placeholder="Enter your Phone">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" placeholder="Enter your Email">
                <button class="btn">Submit</button>
            </form>
        </div>
        </section>
        <script src="index.js"></script>
        </div>
</body>
</html>