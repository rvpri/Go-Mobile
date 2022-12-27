<?php      
    include('connection.php');
    session_start();
    $email=$_SESSION["email"] ;
    $namee=$_POST['namee'];
    $phone=$_POST['phone'];
    $address=$_POST['caddress'];
    $sql ="UPDATE customer SET cname='$namee',phone='$phone', caddress='$address' where email='$email' ";
        
    if ($con->query($sql) === TRUE) {
      echo '<script type="text/javascript"> window.open("MyAccount.php","_self");</script>'; 
    } 
    else 
    {
      echo"Success";
    }

$con->close();
        
?>  
