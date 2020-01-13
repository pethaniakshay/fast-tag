<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Admin</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><?php echo $_SESSION['username'];
                        ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <br/>
    <?php
    $pname=basename($_SERVER['PHP_SELF']);
    ?>
    <ul class="nav menu">
        <li <?php if($pname=="admin-home.php"){echo "class=active";} ?>><a href="admin-home.php"><i class="fa fa-cube" aria-hidden="true"></i>&nbsp;Dashboard</a></li><hr>
        <li <?php if($pname=="view-user.php"){echo "class=active";} ?>><a href="view-user.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;View User</a></li>
        <li <?php if($pname=="add-user.php"){echo "class=active";} ?>><a href="add-user.php"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add User</a></li><hr>

        <li <?php if($pname=="view-vehicle.php"){echo "class=active";} ?>><a href="view-vehicle.php"><i class="fa fa-automobile" aria-hidden="true"></i>&nbsp;View Vehicles</a></li>
        <li <?php if($pname=="add-vehicle.php"){echo "class=active";} ?>><a href="add-vehicle.php"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Vehicle</a></li><hr>

        <li <?php if($pname=="recharge.php"){echo "class=active";} ?>><a href="recharge.php"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Recharge</a></li><hr>

        <li <?php if($pname=="view-toll.php"){echo "class=active";} ?>><a href="view-toll.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;View TollBooth</a></li>
        <li <?php if($pname=="add-toll.php"){echo "class=active";} ?>><a href="add-toll.php"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add TollBooth</a></li>

    </ul>

</div>