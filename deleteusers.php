<?php
$id=$_REQUEST['id'];
include "connection.php";
$q="delete from registration_details where u_id='$id'";
mysqli_query($con,$q);
?>
<script>
	window.location="viewusers.php";
</script>