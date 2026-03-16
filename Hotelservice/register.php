<?php
session_start();
require_once 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //$password = password_hash($password, PASSWORD_DEFAULT);
    
    //$doc = $_POST['doc'];
   // $ss= $_SESSION['username'];

    $sql = "INSERT INTO user (fname, username, password) VALUES ('$fname', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<html>  
<head>  
    <title>PHP Register system</title>  

    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body>  
    <div id = "frm">
        <h3>HOTEL GUEST SERVICE SYSTEM</h3>  
        <h1>Registration</h1>  
        <form name="f1" action = "" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> FirstName: </label>  
                <input type = "text" id ="username" name  = "fname" />  
            </p>  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="password" name  = "username" />  
            </p>  
            <p>  
                <label> Password : </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>
            <p>     
                <input type =  "submit" id = "btn" value = "Register" />
                <div class="bottom">
           
            <span><a href="index.php">LOGIN</a></span>
            
        </div>
            </p>  
        </form>  
    </div>  

   
</body>     
</html>  