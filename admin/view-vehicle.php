<?php
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>View Vehicle</title>

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
                    <div class="panel-heading">View Vehicles</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table">
                                    <thead class="thead-inverse">
                                    <tr>
                                        <th>Vid</th>
                                        <th>Uid</th>
                                        <th>Owner</th>
                                        <th>Company</th>
                                        <th>Model</th>
                                        <th>Number</th>
                                        <th>Type</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include "../connect.php";
                                    $res = mysqli_query($link,"select * from vehicle")or die(mysqli_errno($link));

                                    while ($row = mysqli_fetch_array($res))
                                    {

                                        $uid=$row['uid'];
                                        $res2 = mysqli_query($link,"select fname,lname from ttusers where $uid = uid")or die(mysqli_errno($link));
                                        $row2 = mysqli_fetch_array($res2);

                                        $vid=$row['vid'];
                                        $fname=$row2['fname'];
                                        $lanme=$row2['lname'];
                                        $vcmpny=$row['ccmpny'];
                                        $vmodel=$row['vmodel'];
                                        $vnumber=$row['vnumber'];
                                        $vtype=$row['vtype'];
                                        if($vtype == "tw"){
                                            $type = "Two Wheeler";
                                        }
                                        else{
                                            $type = "Four Wheeler";
                                        }

                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $vid; ?></th>
                                            <td><?php echo $uid;?></td>
                                            <td><?php echo $fname;?></td>
                                            <td><?php echo $vcmpny; ?></td>
                                            <td><?php echo $vmodel; ?></td>
                                            <td><?php echo $vnumber; ?></td>
                                            <td><?php echo $type;?></td>
                                            <td><a href="<?php echo 'delete-vehicle.php?id='.$vid; ?>" class="btn btn-danger">Delete</a></td>

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