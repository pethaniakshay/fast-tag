<?php
session_start();
?>
    <!DOCTYPE html>
    <html>
    <head>
        <?php include "design.php"; ?>
    </head>
    <title>Home</title>

<body>

<?php include "sidebar.php"; ?>

    <div class="col-sm-10  col-lg-10 col-lg-offset-1 col-sm-offset-2  main">


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div><!--/.row-->


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">WelCome <?php echo $username;?></div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-lg-6">

                                <div class="row">
                                    <div class="col-lg-3">
                                        <b>User Id:</b>
                                    </div>
                                    <div class="col-lg-3">
                                        <?php echo $userid ;?>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <b>First Name:</b>
                                    </div>
                                    <div class="col-lg-3">
                                        <?php echo $username;?>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <b>Last Name:</b>
                                    </div>
                                    <div class="col-lg-3">
                                        <?php echo $lname;?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <b>Mobile:</b>
                                    </div>
                                    <div class="col-lg-3">
                                        <?php echo $mobile;?>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <b>Email:</b>
                                    </div>
                                    <div class="col-lg-3">
                                        <?php echo $email;?>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <b>Balance:</b>
                                    </div>
                                    <div class="col-lg-3">
                                        <?php echo $balance;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <!-- <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Hello</div>
                    <div class="panel-body">


                    </div>
                </div>
            </div>
        </div>-->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">My Vehicles</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table">
                                    <thead class="thead-inverse">
                                    <tr>
                                        <th>Vid</th>
                                        <th>Company</th>
                                        <th>Model</th>
                                        <th>Number</th>
                                        <th>Type</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include "connect.php";
                                    $res = mysqli_query($link,"select * from vehicle where uid = $userid")or die(mysqli_errno($link));

                                    while ($row = mysqli_fetch_array($res))
                                    {


                                        $vid=$row['vid'];
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
                                            <td><?php echo $vcmpny; ?></td>
                                            <td><?php echo $vmodel; ?></td>
                                            <td><?php echo $vnumber; ?></td>
                                            <td><?php echo $type;?></td>
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

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">My Transactions</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table">
                                    <thead class="thead-inverse">
                                    <tr>
                                        <th>Transaction Id</th>
                                        <th>Vehicle ID</th>
                                        <th>Location</th>
                                        <th>Time</th>
                                        <th>Charge</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include "connect.php";
                                    $res = mysqli_query($link,"select * from transaction where uid = $userid")or die(mysqli_errno($link));

                                    while ($row = mysqli_fetch_array($res))
                                    {
                                        $tid = $row['tid'];
                                        $gtid= mysqli_query($link,"select * from tollbooth where tid = $tid")or die(mysqli_errno($link));
                                        $row2 = mysqli_fetch_array($gtid);

                                        $trid=$row['trid'];
                                        $vid=$row['vid'];
                                        $location=$row2['location'];
                                        $time=$row['time'];
                                        $charge=$row['charge'];
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $trid; ?></th>
                                            <td><?php echo $vid; ?></td>
                                            <td><?php echo $location; ?></td>
                                            <td><?php echo $time; ?></td>
                                            <td><?php echo $charge;?></td>
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

<?php include "footer.php"; ?>