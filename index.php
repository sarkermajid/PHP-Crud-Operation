<?php 

    session_start();

    require_once('./header.php');

?>

<body class="bg-dark">
    <h1 class="display-3 text-warning text-center">PHP CRUD OPERATION</h1>
    <hr class="text-danger">
    <hr class="text-success">
    <hr class="text-danger">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 mt-2">
            <form action="sign-up-v.php" method="POST">
                <div class="text-success text-center">
                    <?php 
                        if(isset($_SESSION['success'])){
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        }
                    ?>
                </div>
                <div class="form-group">
                    <label class="text-white" for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
                </div>
                <span class="text-danger">
                    <?php 
                        if(isset($_SESSION['nameErr'])){
                            echo $_SESSION['nameErr'];
                            unset($_SESSION['nameErr']);
                        }
                    ?>
                </span>
                <br>
                <div class="form-group">
                    <label class="text-white" for="username">User Name</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter User Name">
                </div>
                <span class="text-danger">
                    <?php 
                        if(isset($_SESSION['usernameErr'])){
                            echo $_SESSION['usernameErr'];
                            unset($_SESSION['usernameErr']);
                        };
                    ?>
                </span>
                <span class="text-danger">
                    <?php 
                        if(isset($_SESSION['usernamelErr'])){
                            echo $_SESSION['usernamelErr'];
                            unset($_SESSION['usernamelErr']);
                        };
                    ?>
                </span>
                <br>
                <div class="form-group">
                    <label class="text-white" for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your email">
                </div>
                <span class="text-danger">
                    <?php 
                        if(isset($_SESSION['emailErr'])){
                            echo $_SESSION['emailErr'];
                            unset($_SESSION['emailErr']);
                        }
                    ?>
                </span>
                <span class="text-danger">
                    <?php 
                        if(isset($_SESSION['emailValidationErr'])){
                            echo $_SESSION['emailValidationErr'];
                            unset($_SESSION['emailValidationErr']);
                        }
                    ?>
                </span>
                <span class="text-danger">
                    <?php 
                        if(isset($_SESSION['emailFOundErr'])){
                            echo $_SESSION['emailFOundErr'];
                            unset($_SESSION['emailFOundErr']);
                        }
                    ?>
                </span>
                <br>
                <div class="form-group">
                    <label class="text-white" for="phone">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone Number">
                </div>
                <span class="text-danger">
                    <?php 
                        if(isset($_SESSION['phoneErr'])){
                            echo $_SESSION['phoneErr'];
                            unset($_SESSION['phoneErr']);
                        }
                    ?>
                </span>
                <br>
                <div class="form-group">
                    <label class="text-white" for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <span class="text-danger">
                    <?php 
                        if(isset($_SESSION['passwordErr'])){
                            echo $_SESSION['passwordErr'];
                            unset($_SESSION['passwordErr']);
                        }
                    ?>
                </span>
                <span class="text-danger">
                    <?php 
                        if(isset($_SESSION['passwordlErr'])){
                            echo $_SESSION['passwordlErr'];
                            unset($_SESSION['passwordlErr']);
                        }
                    ?>
                </span>
                <br>
                <div class="form-group">
                    <label class="text-white" for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                </div>
                <span class="text-danger">
                    <?php 
                        if(isset($_SESSION['confirm_passwordErr'])){
                            echo $_SESSION['confirm_passwordErr'];
                            unset($_SESSION['confirm_passwordErr']);
                        }
                    ?>
                </span>
                <span class="text-danger">
                    <?php 
                        if(isset($_SESSION['passNotMatch'])){
                            echo $_SESSION['passNotMatch'];
                            unset($_SESSION['passNotMatch']);
                        }
                    ?>
                </span>
                <br>
                <button type="submit" class="btn btn-success w-100">Add Student</button>
                <br><br>
            </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</body>
</html>