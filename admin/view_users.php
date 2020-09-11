<?php
include 'includes/header.php';

function showusers()
{
    global $connection;
    $user = $_SESSION['userLogged'];
    $sql = mysqli_query($connection, "SELECT * FROM users WHERE email='$user'");
    $row = mysqli_fetch_array($sql);
    $role = $row['role'];
    $query = mysqli_query($connection, "SELECT * FROM users ORDER BY id DESC");
    while ($row = mysqli_fetch_array($query)) {
        $username = $row['username'];
        $id = $row['id'];
        $email = $row['email'];
        if ($role == "Admin") {
            echo "<tr>"
                . "<td>$username</td>"
                . "<td>$email</td>"
                . "<td><a href='?id=$id' class='btn btn-danger'>Delete</a></td>"
                . "</tr>";
        } else {
            echo "<tr>"
                . "<td>$username</td>"
                . "<td>$email</td>"
                . "</tr>";
        }

    }
}

?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include 'includes/navigation.php'; ?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">

                <h1 class="page-header">
                    Welcome to the Administration Panel
                </h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped table-success">
                        <thead>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        <?php showusers(); ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="bootstrap/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- our ajax call  -->
<script>
    $(document).ready(function () {
        $("#form").submit(function (e) {
            let name = document.querySelector("#username").value,
                email = document.querySelector("#email").value,
                pwd = document.querySelector("#password").value,
                role = document.querySelector("#role").value,
                submit = document.querySelector("#submit").value;
            $("#msg").load('validator/validate.php', {
                username: name,
                email: email,
                password: pwd,
                role: role,
                submit: submit
            });
            e.preventDefault();
        });
    });
</script>

</body>

</html>