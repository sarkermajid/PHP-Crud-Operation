

<?php 

    require('header.php');
    require_once('./dbconnect.php');
    $select = "SELECT * FROM users WHERE status = 1";
    $query_all_data = mysqli_query($dbconnect, $select);

?>
        <?php 
        if(isset($_SESSION['user_delete'])){ ?>
        <div class="alert alert-danger">
            <span>
                <?php 
                    echo $_SESSION['user_delete'];
                    unset($_SESSION['user_delete']);
                ?>
            </span>
        </div>
    <?php }?>
    <?php 
        if(isset($_SESSION['update-user'])){ ?>
        <div class="alert alert-success">
            <span>
                <?php 
                    echo $_SESSION['update-user'];
                    unset($_SESSION['update-user']);
                ?>
            </span>
        </div>
    <?php }
    ?>
<body class="bg-white">
    <h1 class="display-3 text-warning text-center bg-dark">All Users</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
            <table class="table table-dark table-hover table-bordered border-warning" id="allusersTable">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">SL</th>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Username</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Phone</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 

                        foreach($query_all_data as $key => $value) { ?>
                    
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['username']  ?></td>
                        <td><?= $value['email'] ?></td>
                        <td><?= $value['phone']  ?></td>
                        <td>
                            <a href="user-edit.php?user_id=<?= $value['id']?>" class="btn btn-outline-info">Edit</a>
                            <a href="user-delete.php?user_id=<?= $value['id']?>" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                    
                    <?php }
                    ?>
                </tbody>
            </table>
            <br>
            <a class="btn btn-danger w-100" href="index.php">Back</a>
            <br><br><br>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>

<?php 
    require_once('footer.php');
?>
<script>
    $(document).ready(function() {
    $('#allusersTable').DataTable();
} );
</script>