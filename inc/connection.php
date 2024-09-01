<?php
$conn=mysqli_connect("localhost","root","","application2");

if(!$conn){
    echo "Connection Error !!!" . mysqli_connect_error($conn);
}
?>