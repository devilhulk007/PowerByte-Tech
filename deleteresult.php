<?php
$id=$_REQUEST['id'];
include "connection.php";
$q="delete from result_info where result_id='$id'";
mysqli_query($con,$q);
?>
<script>
	window.location="viewresults.php";
</script>