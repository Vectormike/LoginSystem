<?php
require_once('../header.php');

if(isset($_SESSION['U_D'])) {
    echo "<div> Welcome to My Login System</div>";
}
else {
    header('location: ../signin.php');
    exit();    
}



?>