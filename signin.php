<?php include_once('header.php'); ?>

<h4 class="display-4 text-center mt-5">Login Form</h4>
<body style="background-color:lightblue;">    
<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card bg-light">
                <div class="card-title bg-dark text-white">
                    <h3 class="text-center">Welcome back</h3>
                </div>

                <!--Displayed if field is empty-->
                <?php
                    if(isset($_GET['empty'])){
                        $message=$_GET['empty'];
                        $message=" Enter your details ";
                    
                ?>
                <div class="alert alert-danger text-center"><?php echo $message?></div>
                 <?php
                    }
                ?>

                <!--Displayed if username is invalid-->
                <?php
                    if(isset($_GET['userIn'])){
                        $message=$_GET['userIn'];
                        $message=" Username invalid ";
                    
                ?>
                <div class="alert alert-danger text-center"><?php echo $message?></div>
                <?php
                    }
                ?>

                     <!--Displayed if field is empty-->
                <?php
                    if(isset($_GET['passIn'])){
                        $message=$_GET['passIn'];
                        $message=" Incorrect password ";
                    
                ?>
                <div class="alert alert-danger text-center"><?php echo $message?></div>
                <?php
                    }
                ?>

                <div class="card-body">
                    <form action="includes/login.php" method="POST">
                    <input type="text" name="user" placeholder="Enter your username" class="form-control my-3" >
                    <input type="text" name="pass" placeholder="Enter your password" class="form-control my-4">
                    <button class="btn btn-success" name="login">Login</button>
                    </form>
                </div>
            </div>
        </div>    
    </div>
</div>
</body>