<?php
session_start();
include "../connect.php";
?>
    <!DOCTYPE html>
    <html>
    <head>
        <?php include "design.php"; ?>
    </head>
    <title>Add User</title>

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
                                    <h3 class="title-2 uppercase text-center"><strong>New User Registration</strong></h3>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                                <fieldset>

                                                        <div class="alert-success text-center" id="msg">
                                                            <span></span>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">First Name</label>

                                                            <div class="col-md-8">
                                                                <input id="fname" name="fname"
                                                                       class="form-control input-md" required pattern="[A-Za-z  ]+"
                                                                       placeholder="Enter Alphabetic A To Z Only"
                                                                       title="Enter Alphabetic A to Z Only" type="text">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Last Name</label>

                                                            <div class="col-md-8">
                                                                <input id="lname" name="lname"
                                                                       class="form-control input-md" required pattern="[A-Za-z  ]+"
                                                                       placeholder="Enter Alphabetic A To Z Only"
                                                                       title="Enter Alphabetic A to Z Only" type="text">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="textarea">Mobile Number</label>

                                                            <div class="col-md-8">
                                                                <input id="mobile" name="mobile" placeholder="Enter Mobile Number 10 Digit Only"
                                                                       title="Enter Mobile Number 10 Digit Only"
                                                                       class="form-control input-md" required pattern="[0-9]{10}" type="text">
                                                            </div>
                                                        </div>


                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="textarea">Email Id</label>

                                                            <div class="col-md-8">
                                                                <input id="email" name="email" placeholder="Enter Your Valid Email Id"
                                                                       title="Enter Your Valid Email Id"
                                                                       class="form-control input-md" autocomplete="off" required
                                                                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="email">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="textarea">Password</label>

                                                            <div class="col-md-8">
                                                                <input id="password" name="password"
                                                                       placeholder="Alphanumeric Only Between 5 To 20 Character"
                                                                       title="Alphanumeric Only Between 5 To 20 Character"
                                                                       class="form-control input-md" required pattern="[A-Za-z0-9]{5,20}"
                                                                       type="password">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label" for="textarea">Balance</label>

                                                            <div class="col-md-8">
                                                                <input id="balance" name="balance" placeholder="Enter Balance"
                                                                       title="Enter Balance"
                                                                       class="form-control input-md" required pattern="[0-9]{3,8}" type="text">
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

                                                include "../connect.php";
                                                mysqli_query($link, "insert into ttusers values ('','$_POST[fname]','$_POST[lname]','$_POST[mobile]','$_POST[email]','$_POST[password]','$_POST[balance]')") or die(mysqli_errno($link));

                                                ?>
                                                <script type="text/javascript">
                                                    alert("User Added Successfully");
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