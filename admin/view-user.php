<?php
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <title>View User</title>

        <?php include "design.php"; ?>
    </head>
<body>

<?php include "sidebar.php"; ?>
<!--/.sidebar-->
    <div class="container-fluid">
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


            <div class="row">
                <div class="col-lg-12">
                    <br>
                </div>
            </div><!--/.row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">View Users</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th>Uid</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Balance</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include "../connect.php";
                                            $res = mysqli_query($link,"select * from ttusers")or die(mysqli_errno($link));
                                            while ($row = mysqli_fetch_array($res))
                                            {
                                                $id=$row['uid'];
                                                $fname=$row['fname'];
                                                $lanme=$row['lname'];
                                                $mobile=$row['mobile'];
                                                $email=$row['email'];
                                                $balance=$row['balance'];

                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $id; ?></th>
                                                    <td><?php echo $fname;?></td>
                                                    <td><?php echo $mobile; ?></td>
                                                    <td><?php echo $email; ?></td>
                                                    <td><?php echo $balance; ?></td>
                                                    <td><a href="<?php echo 'delete-user.php?id='.$id; ?>" class="btn btn-danger">Delete</a></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>
