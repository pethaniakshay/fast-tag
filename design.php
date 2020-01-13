<?php
if($_SESSION['username']=="")
{
    ?>
    <script type="text/javascript">
    window.location="index.php" ;
    </script>


<?php
}
else{
    include "connect.php";

    $un = $_SESSION['username'];

    $getd = mysqli_query($link,"select * from ttusers where mobile = $un")or die(mysqli_errno($link));

    $data = mysqli_fetch_array($getd);

    $username = $data['fname'];
    $userid = $data['uid'];
    $balance = $data['balance'];
    $mobile = $data['mobile'];
    $email = $data['email'];
    $lname = $data['lname'];
}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
