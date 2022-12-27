<?php      
    include('connection.php');
    $email= $_POST['email'];  
    $id= $_POST['id'];  
    $sql = "INSERT INTO cart VALUES ('$email','$id')"; 
    if ($con->query($sql) === TRUE) {

    } 
    else {
    }
  $con->close();
?>  
