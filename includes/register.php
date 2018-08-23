<?php

    require_once('connection.php');

    // removes special characters
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    
    if(isset($_POST['signup'])) {
        
        if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password'])){
            header("location: ../signup.php?empty");
            exit();
        }
        if(preg_match("/^[a-zA-Z]*$/").$fname && preg_match("/^[a-zA-Z]*$/").$lname) {
            header("location: ../signup.php?Invalid");
            exit();
        }       
       
        
        $query = "SELECT * FROM userregister WHERE Username = '".$username."'";
        $result=mysqli_query($conn,$query);
        if(mysqli_fetch_assoc($result)){
            header("location: ../signup.php?username"); 
            exit(); 
        }
        
        $query = "SELECT * FROM userregister WHERE Email = '".$email."'";
        $result = mysqli_query($conn,$query);   
        if(mysqli_fetch_assoc($result)){
            header("location: ../signup.php?email"); 
            exit();
        }
        else{
        $encrypt = password_hash($password, PASSWORD_DEFAULT);
        $query = " INSERT INTO userregister(Fname,Lname,Email,Username,Pass) VALUES('$fname', '$lname', '$email', '$username', '$password')";
        $result=mysqli_query($conn,$query);
        header("location: ../signup.php?success"); 
            exit();
        }
                            
                             
    }
    else{
        header("location: ../index.php");
        exit();
    }