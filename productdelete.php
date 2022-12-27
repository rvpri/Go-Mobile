<?php      
    include('connection.php');
    $email= $_POST['email'];  
    $id= $_POST['id'];  
    $sql = "DELETE FROM cart WHERE email='$email' AND id='$id' LIMIT 1"; 
    if ($con->query($sql) === TRUE) {
    } 
    else 
    {
    }
  $con->close();
        
?>  
