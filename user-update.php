<?php 

    require_once('dbconnect.php');
    session_start();

    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if(empty($name)){
        header('location:allusers.php');
    }
    else if(empty($username)){
        header('location:allusers.php');
    }
    else if(empty($email)){
        header('location:allusers.php');
    }
    else if(empty($phone)){
        header('location:allusers.php');
    }
    else{
        $update_user = "UPDATE users SET name = '$name', username = '$username', email = '$email', phone = '$phone'  WHERE id = '$id'";
        $query_update_user = mysqli_query($dbconnect, $update_user);
    
        if($query_update_user){
            $_SESSION['update-user'] = 'User Updated successfully !!!';
            header('location:allusers.php');
        }
    }

?>