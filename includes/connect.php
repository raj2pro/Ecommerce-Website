<?php
    $con=mysqli_connect('localhost','root','','my store');
    if(!$con){
        echo "Not Connected" .
        mysqli_connect_error();
    }
?>