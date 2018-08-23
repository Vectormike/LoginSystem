<?php
    require_once('connection.php');

    if(isset($_POST['login'])) {

        if(empty($_POST['user']) || empty($_POST['password'])) {
            header("location: ../signin.php?empty");
            exit();
        }
        else {
            $user = mysqli_real_escape_string($conn,$_POST['user']);
            $pass = mysqli_real_escape_string($conn,$_POST['pass']);

            $Query = "SELECT * FROM userregister WHERE Username = '".$user."' or Email = '".$user."'";
            $result = mysqli($conn,$Query);

            if($row=mysqli_fetch_assoc($result)){
                $hasspass = password_verify($pass,$row['pass']);
                
                if($hashpass==false){
                    header("location: ../signin.php?passIn");
                    exit();         
                }
                elseif($hashpass==true) {
                    //save the user
                    $_SESSION['U_D'] = row['ID'];
                    $_SESSION['Fname'] = row['Fname'];
                    $_SESSION['Lname'] = row['Lname'];
                    $_SESSION['Email'] = row['Email'];
                    $_SESSION['Username'] = row['Username'];
                    $_SESSION['Pass'] = row['Pass'];
                    
                    header("location: account.php?logged");
                    exit();
                }
            }   
            else{
                header("location: ../signin.php");
                exit();       
            }
            

        }
        
    }
    else{
        header("location: ../signin.php");
        exit();
    }
?>