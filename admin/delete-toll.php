<?php
session_start();
include "../connect.php";
$id=$_GET['id'];
mysqli_query($link,"delete from tollbooth where tid='$_GET[id]'");

?>
<script type="text/javascript">

    alert("TollBooth Deleted Successfully");
    window.location = "view-toll.php";


</script>
