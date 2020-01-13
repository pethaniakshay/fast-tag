<?php
session_start();
include "../connect.php";
?>
<!DOCTYPE html>
<html>
<head>
    <?php include "design.php"; ?>
</head>
<title>Add Vehicle</title>

<body>

<?php include "sidebar.php"; ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


    <div class="row">
        <div class="col-lg-12">
            <br>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="container" style="max-width:1000px; border-style: solid; border-width: 0px">


                    <div class="row">
                        <div class="col-lg-7 col-lg-push-2 col-md-7 col-md-push-2 page-content">
                            <div class="inner-box category-content">
                                <h3 class="title-2 uppercase text-center"><strong>New Vehicle Registration</strong></h3>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                            <fieldset>

                                                <div class="alert-success text-center" id="msg">
                                                    <span></span>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="textarea">User Id</label>

                                                    <div class="col-md-8">
                                                        <input id="uid" name="uid" placeholder="Enter User Id"
                                                               title="Enter User Id"
                                                               class="form-control input-md" type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="textarea">RFId</label>

                                                    <div class="col-md-8">
                                                        <input id="rfid" name="rfid" placeholder="Enter RFID"
                                                               title="Enter RFID"
                                                               class="form-control input-md" required  type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="textarea">Vehicle Company</label>
                                                    <div class="col-md-8">
                                                        <input id="vcmpny" name="vcmpny" placeholder="Enter Vehicle Company"
                                                               title="Enter Vehicle Company"
                                                               class="form-control input-md" autocomplete="off" required
                                                               type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="textarea">Vehicle Model</label>
                                                    <div class="col-md-8">
                                                        <input id="vmodel" name="vmodel" placeholder="Enter Vehicle Model"
                                                               title="Enter Vehicle Model"
                                                               class="form-control input-md" autocomplete="off" required
                                                               type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="textarea">Vehicle Number</label>
                                                    <div class="col-md-8">
                                                        <input id="vnumber" name="vnumber" placeholder="Enter Vehicle Number"
                                                               title="Enter Vehicle Number"
                                                               class="form-control input-md" autocomplete="off" required
                                                               type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="textarea">Vehicle Type</label>
                                                    <div class="col-md-8">
                                                        <select name="vtype" id="vtype" class="form-control selecter">
                                                            <option selected='selected' disabled='disabled' class='form-control selected'>Select Vehicle Type</option>
                                                            <option value="fw">Four Wheeler</option>
                                                            <option value="tw">Two Wheeler</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-md-3 control-label"></label>

                                                    <div class="col-md-8"><input type="submit" class="btn btn-primary" name="registration" id="registration" value="Register"></div>
                                                </div>
                                            </fieldset>
                                        </form>

                                        <?php
                                        if (isset($_POST["registration"])) {

                                            echo "Piyu 1";
                                            include "../connect.php";
                                            echo "Piyu 2";
                                            mysqli_query($link, "insert into vehicle values ('','$_POST[uid]','$_POST[rfid]','$_POST[vcmpny]','$_POST[vmodel]','$_POST[vnumber]','$_POST[vtype]')") or die(mysqli_errno($link));
                                            echo "Piyu 3";
                                            ?>
                                            <script type="text/javascript">
                                                alert("Vehicle Added Successfully");
                                            </script>

                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
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