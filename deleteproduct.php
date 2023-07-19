<?php
$id=$_REQUEST['id'];
include "connection.php";
$q="delete from product_details where p_id='$id'";
mysqli_query($con,$q);
?>
<script>
	window.location="viewproduct.php";
</script>