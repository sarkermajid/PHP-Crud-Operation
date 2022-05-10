<?php 
    require_once('./dbconnect.php');
    require_once('./header.php');
    session_start();

    $id = $_GET['user_id'];

    $query_edit = "SELECT * FROM users WHERE id = '$id'";
    $query_edit_connect = mysqli_query($dbconnect, $query_edit);
    $query_for_per_user = mysqli_fetch_assoc($query_edit_connect);
    

?>
<body class="bg-dark">
    <h1 class="display-3 text-warning text-center">User Edit</h1>
    <hr class="text-danger">
    <hr class="text-success">
    <hr class="text-danger">
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 mt-5">
        <form action="user-update.php" method="POST">
            <div class="form-group">
                <input type="hidden" value="<?= $query_for_per_user['id'] ?>" class="form-control" name="id">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" value="<?= $query_for_per_user['name'] ?>" class="form-control nameErr" name="name" id="name" placeholder="Enter Your Name">
            </div>
            <br>
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" value="<?= $query_for_per_user['username'] ?>" class="form-control nameErr" name="username" id="username" placeholder="Enter User Name">
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" value="<?= $query_for_per_user['email'] ?>"  class="form-control emailErr emailValidationErr" name="email" id="email" placeholder="Enter Your email">
            </div>
            <br>
            <div class="form-group">
                <label for="number">Phone Number</label>
                <input type="number" value="<?= $query_for_per_user['phone'] ?>"  class="form-control emailErr emailValidationErr" name="phone" id="number" placeholder="Phone Number">
            </div>
            <br>
            <button type="submit" class="btn btn-success w-100">Update</button>
        </form>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
</body>
</html>