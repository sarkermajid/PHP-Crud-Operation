<?php 

    session_start();

    require_once('./dbconnect.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if(empty($name)){
            $_SESSION['nameErr'] = 'Please enter your name';
            header('location:sign-up.php');
        }
        else if(empty($username)){
            $_SESSION['usernameErr'] = 'Please enter username';
            header('location:sign-up.php');
        }
        else if(strlen($username) < 6){
            $_SESSION['usernamelErr'] = 'Username More than 6 Character Long';
            header('location:sign-up.php');
        }
        else if(empty($email)){
            $_SESSION['emailErr'] = 'Please enter Email address';
            header('location:sign-up.php');
        }
        else if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)){
            $_SESSION['emailValidationErr'] = 'Please enter a valid email';
            header('location:sign-up.php');
        }
        else if(empty($phone)){
            $_SESSION['phoneErr'] = 'Please enter phone number';
            header('location:sign-up.php');
        }
        else if (empty($password)){
            $_SESSION['passwordErr'] = 'Please a enter Password';
            header('location:sign-up.php');
        }
        else if (strlen($password) < 8){
            $_SESSION['passwordlErr'] = 'Password More Than 8 Character Long';
            header('location:sign-up.php');
        }
        else if(empty($confirm_password)){
            $_SESSION['confirm_passwordErr'] = 'Please enter a confirm password';
            header('location:sign-up.php');
        }
        else if($password != $confirm_password){
            $_SESSION['passNotMatch'] = 'Confirm password does not match';
            header('location:sign-up.php');
        }

        $password = md5($password);
        $email_check = "SELECT COUNT(*) as total FROM users WHERE email = '$email' ";
        $query_email_check = mysqli_query($dbconnect, $email_check);
        $after_assoc = mysqli_fetch_assoc($query_email_check);

        if($after_assoc['total'] > 0){
            $_SESSION['emailFOundErr'] = 'This email already registered';
            header('location:sign-up.php');

        }
        else{

            $insert = "INSERT INTO users (name, username, email, phone, password ) VALUES ('$name','$username','$email','$phone','$password')";

            $query_for_insert = mysqli_query($dbconnect, $insert);
            if($query_for_insert){
                $_SESSION['success'] = 'You Have Been Registered';
                header('location:allusers.php');
            }
            
        }

    }
    else{
        header('location:sign-up.php');
    }
    
?>