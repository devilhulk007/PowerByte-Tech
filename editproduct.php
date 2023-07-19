<?php 
	include "header.php";
	include "connection.php";
	
	$id=$_REQUEST['id'];
	$q="select * from product_details where p_id='$id'";
	$c=mysqli_query($con,$q);

if(isset($_POST['btnok']))
{
	$q="Update category_details set cat_name='$category_name' where cat_no='$id'";
	$c=mysqli_query($con,$q);
	if($c)
	{
		
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
					  
					
					 <h2 class="w3_inner_tittle">Edit This Category</h2>
									<!-- tables -->
									
						<div class="agile-tables">
						<div class="w3l-table-info agile_info_shadow">
									<div class="grid-1">
									<div class="form-body">
									<form class="form-horizontal" action="#" method="post" enctype="multipart/form-data"> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Category-Name</label>
									<div class="col-sm-9"> 
										<input type="text" value="<?php echo $category_name;?>" name="cat_name" class="form-control" id="inputEmail3"> 
									</div> 
									</div> 
									<!--div class="form-group"> 
										<label for="inputPassword3" class="col-sm-2 control-label">Image</label> 
									<div class="col-sm-9"> 
										<input type="file" name="flimg" class="form-control" id="inputPassword3"> 
										<br>
										<img src="upload/<?php //echo $image;?>" height=100 width=100/>
									</div> 
									</div--> 
									<div class="col-sm-offset-2"> 
									<button type="submit" name="btnok" class="btn btn-default">Update</button> 
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