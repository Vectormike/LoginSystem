<?php include_once('header.php'); ?>

<h4 class="display-4 text-center mt-5">Sign Up Form</h4>

<body style="background-color:lightgreen;">    
<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card bg-light">
                <div class="card-title bg-warning text-white">
                    <h3 class="text-center">Welcome</h3>
                </div>

                <!--Displayed if empty-->
                <?php

                    if(isset($_GET['empty'])){
                        $message=$_GET['empty'];
                        $message=" Enter your details ";
                ?>  
                    <div class="alert alert-danger text-center"><?php echo $message ?> </div>      
                <?php    
                    }

                ?>

                <!--Displayed if characters are invalid-->
                <?php

                    if(isset($_GET['Invalid'])){
                        $message=$_GET['Invalid'];
                        $message=" Invalid characters ";
                ?>  
                    <div class="alert alert-danger text-center"><?php echo $message ?> </div>      
                <?php    
                    }

                ?>  

                 <!--Displayed if email is invalid-->
                <?php

                    if(isset($_GET['emailIn'])){
                        $message=$_GET['emailIn'];
                        $message=" Email invalid ";
                ?>  
                    <div class="alert alert-danger text-center"><?php echo $message ?> </div>      
                <?php    
                    }

                ?>      

                <!--Displayed if username is taken-->
                <?php

                    if(isset($_GET['username'])){
                        $message=$_GET['username'];
                        $message=" Use another username ";
                ?>  
                    <div class="alert alert-danger text-center"><?php echo $message ?> </div>      
                <?php    
                    }

                ?>

                <!--Displayed if email is taken-->
                <?php

                    if(isset($_GET['email'])){
                        $message=$_GET['email'];
                        $message=" Use another email ";
                ?>  
                    <div class="alert alert-danger text-center"><?php echo $message ?> </div>      
                <?php    
                    }

                ?>

                
                <!--Displayed if registration is successful-->
                <?php

                    if(isset($_GET['success'])){
                        $message=$_GET['success'];
                        $message=" Registration successful ";
                ?>  
                    <div class="alert alert-danger text-center"><?php echo $message ?> </div>      
                <?php    
                    }

                ?>    


                <div class="card-body">
                    <form action="includes/register.php" method="POST">
                    <input type="text" name="fname" placeholder="First name" class="form-control my-3" >
                    <input type="text" name="lname" placeholder="Last name" class="form-control my-4">
                    <input type="text" name="email" placeholder="Email" class="form-control my-4">
                    <input type="text" name="username" placeholder="Username" class="form-control my-4">
                    <input type="text" name="password" placeholder="Password" class="form-control my-4">
                    <button class="btn btn-dark" name="signup">Sign up</button>
                    </form>
                </div>
            </div>
        </div>    
    </div>
</div>
</body>

