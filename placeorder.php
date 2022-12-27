<?php
include "connection.php";
$email = $_POST["email"];
$sql = "select * from cart where email='$email' ";
$result = mysqli_query($con, $sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        $productid = $row[1];
        $sql1 = "INSERT INTO customerorder(email,productid) VALUES ('$email',$productid)";

        if ($con->query($sql1) === true) {
        } else {
        }
    }
}
$sql = "DELETE FROM cart WHERE email='$email' ";

if ($con->query($sql) === true) {
} else {
}

$con->close();
?>   ?>