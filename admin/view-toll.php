<?php
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>View TollBooth</title>

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
                    <div class="panel-heading">View TollBooth</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table">
                                    <thead class="thead-inverse">
                                    <tr>
                                        <th>Toll ID</th>
                                        <th>Location</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include "../connect.php";
                                    $res = mysqli_query($link,"select * from tollbooth")or die(mysqli_errno($link));
                                    while ($row = mysqli_fetch_array($res))
                                    {
                                        $id=$row['tid'];
                                        $fname=$row['location'];

                                        ?>

                                        <tr>
                                            <th scope="row"><?php echo $id; ?></th>
                                            <td><?php echo $fname;?></td>
                                            <td><a href="<?php echo 'delete-toll.php?id='.$id; ?>" class="btn btn-danger">Delete</a></td>
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
