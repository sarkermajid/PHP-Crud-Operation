<?php 

    require_once('dbconnect.php');
    session_start();
    
    $id = $_GET['user_id'];
    
    $update_status = "UPDATE users SET status = 2 WHERE id = '$id'";
    $query_update_status = mysqli_query($dbconnect, $update_status);

    if($query_update_status){
        $_SESSION['user_delete'] = 'User deleted successfully';
        header('location:allusers.php');
    }else{
        header('location:allusers.php');
    }

    // USE FOR USER DELETE

    // $delete = "DELETE FROM users WHERE id = '$id' ";
    // $query_user_delete = mysqli_query($dbconnect, $delete);

    // if($query_user_delete){
    //     $_SESSION['user_delete'] = 'User deleted successfully';
    //     header('location:allusers.php');
    // }else{
    //     header('location:allusers.php');
    // }

?>