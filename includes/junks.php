
           
          
                
                
                   
                    
                    
                       
    if(isset($_POST['signup'])) {
        
        if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password'])){
            header("location: ../signup.php?empty");
        }
        else{
            // removes special characters in SQL
            $fname=mysqli_real_escape_string($conn,$_POST['fname']);
            $lname=mysqli_real_escape_string($conn,$_POST['lname']);
            $email=mysqli_real_escape_string($conn,$_POST['email']);
            $username=mysqli_real_escape_string($conn,$_POST['username']);
            $password=mysqli_real_escape_string($conn,$_POST['password']);
            
            if(preg_match("/^[a-zA-Z]*$/").$fname || preg_match("/^[a-zA-Z]*$/").$lname) {
                header("location: ../signup.php?Invalid");
                exit();

            }
            else{
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    header("location: ../signup.php?emailIn");
                    exit();
                }
                else{
                    $query = "SELECT * FROM userregister WHERE Username = '".$username."'";
                    $result=mysqli_query($conn,$query);
                    
                    if(mysqli_fetch_assoc($result)){
                        header("location: ../signup.php?username"); 
                        exit(); 
                    }
                    else{
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
                }
            }
        }
    }
    else{
        header("location: ../index.php");
        exit();
    }

                       
                    
                       
                    
                
        
        
               
  
