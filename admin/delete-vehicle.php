<?php
session_start();
include "../connect.php";
$id=$_GET['id'];
mysqli_query($link,"delete from vehicle where vid='$_GET[id]'");

?>
<script type="text/javascript">

    alert("Vehicle Deleted Successfully");
    window.location = "view-vehicle.php";


</script>
