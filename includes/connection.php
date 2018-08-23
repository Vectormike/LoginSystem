<?php
$conn=mysqli_connect('localhost', 'root', '', 'loginsystem');
    if(!$conn){
        die('Connection Error' .mysqli_error());
    }


?>