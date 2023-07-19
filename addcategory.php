<?php 
	include "header.php";
	include "connection.php";
	
if(isset($_POST['btnok']))
{
	$category_name=$_POST['cat_name'];
	//$fl=$_FILES['flimg']['name'];
	$q="INSERT INTO category_details values('','$category_name')";
	$c=mysqli_query($con,$q);
	if($c)
	{
		//move_uploaded_file($_FILES['flimg']['tmp_name'],"upload/".$fl);
		?>
		<script>
			alert('Succesfully Inserted');
			window.location="viewcategory.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert('Something Goes Wrong');
		</script>
		<?php
	}
}
?>
<div class="clearfix"></div>
				<div class="inner_content">
				    <div class="inner_content_w3_agile_info">
					  
					
					 <h2 class="w3_inner_tittle">Add New Category</h2>
									<!-- tables -->
									
									<div class="agile-tables">
									<div class="w3l-table-info agile_info_shadow">
									<div class="grid-1">
									<div class="form-body">
									<form class="form-horizontal" action="#" method="post" enctype="multipart/form-data"> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Category-Name</label>
									<div class="col-sm-9"> 
										<input type="text" name="cat_name" class="form-control" id="inputEmail3" placeholder="Category Name"> 
									</div> 
									</div> 
									<!--div class="form-group"> 
										<label for="inputPassword3" class="col-sm-2 control-label">Image</label> 
									<div class="col-sm-9"> 
										<input type="file" name="flimg" class="form-control" id="inputPassword3" placeholder="Image"> 
									</div> 
									</div--> 
									<div class="col-sm-offset-2"> 
									<button type="submit" name="btnok" class="btn btn-default">Insert</button> 
									</div> 
									</form> 
																							</div>

																					</div>				  
								</div>
					</div>
						
				    </div>
				</div>
	</div>
	<?php 
		include "footer.php";
	?>