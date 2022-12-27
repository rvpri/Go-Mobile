<?php      
    include('connection.php');  
    $name = $_POST['name'];  
    $email= $_POST['email'];
    $phone=$_POST['phone'];
    $password = $_POST['password'];
    $caddress=$_POST['caddress'];
    $sql = "INSERT INTO customer(cname,email,phone,cpassword,caddress)VALUES ('$name','$email',$phone,'$password','$caddress')"; 
    if ($con->query($sql) === TRUE) {
      include "signin.html";
    } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $con->error;
    }

$con->close();
?>  
