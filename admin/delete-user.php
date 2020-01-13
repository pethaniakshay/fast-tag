<?php

include "../connect.php";
$id=$_GET['id'];
mysqli_query($link,"delete from vehicle where uid='$_GET[id]'");
mysqli_query($link,"delete from ttusers where uid='$_GET[id]'");


?>
<script type="text/javascript">

    alert("User As Well As Vehcile Associated with will also be deleted.");
    window.location = "view-user.php";


</script>
