<?php      
    include('connection.php');  
    $email= $_POST['email'];  
    $password = $_POST['password'];  
    session_start();
    $_SESSION['email']=$email;
    $sql = "select * from customer where email = '$email' and cpassword = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    if($count == 1)
    { 
        echo $email;
        echo '<script type="text/javascript"> window.open("shop4.php","_self");</script>'; 
    }  
    else
    {
        echo '<script type="text/javascript"> window.open("signin1.html","_self");</script>'; 
    }     
       
?> 
