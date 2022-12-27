<?php      
    include('connection.php');
    $email= "priyu@gmail.com";  
    $id= 1;  
    $sql = "INSERT INTO customerorder(email,productid) VALUES ('$email',$id)"; 
    if ($con->query($sql) === TRUE) {
        echo "Success";
    } 
    else 
    {
        echo "Failure";
    }
    $con->close();
        
?>  
