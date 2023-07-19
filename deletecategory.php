<?php
include "connection.php";
$id=$_REQUEST['id'];

$q="delete from category_details where cat_no='$id'";
mysqli_query($con,$q);
?>

<script>
	window.location="viewcategory.php";
</script>