<?php
$id=$_REQUEST['id'];
include "connection.php";
$q="delete from comments where c_id='$id'";
mysqli_query($con,$q);
?>
<script>
	window.location="viewcomments.php";
</script>