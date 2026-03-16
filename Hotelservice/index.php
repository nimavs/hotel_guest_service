<?php
include 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST)){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        
        session_start();
        $_SESSION['username'] = $_POST['username']; // Set the session variable
        header("Location: dashboard.php");
        exit();
    }
else {
        echo '<h5>Invalid username or password</h5>' ;
    }
}
    $conn->close();

}

?>
<html>  
<head>  
    <title>PHP login system</title>  
<!--<h2>HOTEL GUEST SERVICE SYSTEM<h2>-->
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body>  
    <div id = "frm"> 
        <h3>HOTEL GUEST SERVICE SYSTEM</h3>  
        <h1>Login</h1>  
        <form name="f1" action = "" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> Username: </label>  
                <input type = "text" id ="username" name  = "username" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />
                <div class="bottom">
           
            <span><a href="register.php">SIGN UP</a></span>
            
        </div>
            </p>  
        </form>  
    </div>  

    <script>  
            function validation()  
            {  
                var id=document.f1.username.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  