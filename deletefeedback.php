<?php
$id=$_REQUEST['id'];
include "connection.php";
$q="delete from feedback where feedback_id='$id'";
mysqli_query($con,$q);
?>
<script>
	window.location="viewfeedback.php";
</script>