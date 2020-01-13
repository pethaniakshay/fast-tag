<?php
session_start();
include "../connect.php";
?>
<!DOCTYPE html>
<html>
<head>
    <?php include "design.php"; ?>
</head>
<title>Add TollBooth</title>

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
                                <h3 class="title-2 uppercase text-center"><strong>Add TollBooth</strong></h3>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                            <fieldset>

                                                <div class="alert-success text-center" id="msg">
                                                    <span></span>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="textarea">Toll Booth Location</label>

                                                    <div class="col-md-8">
                                                        <input id="location" name="location" placeholder="Location"
                                                               title="Location"
                                                               class="form-control input-md" required  type="text">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-md-3 control-label"></label>

                                                    <div class="col-md-8"><input type="submit" class="btn btn-primary" name="registration" id="registration" value="Submit"></div>
                                                </div>
                                            </fieldset>
                                        </form>

                                        <?php
                                        if (isset($_POST["registration"])) {

                                            include "../connect.php";


                                            mysqli_query($link, "insert into tollbooth values ('','$_POST[location]')") or die(mysqli_errno($link));

                                            ?>
                                            <script type="text/javascript">
                                                alert("TollBooth Added Successfully");
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