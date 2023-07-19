<?php 
	include "header.php";
	include "connection.php";
	
if(isset($_POST['btnok']))
{
	$product_category=$_POST['p_cat'];
	$product_company=$_POST['p_cmpn'];
	$product_name=$_POST['p_name'];
	$product_detail=$_POST['p_details'];
	$product_price=$_POST['p_price'];
	$image=$_FILES['p_img'];
	//$image2=$_FILES['image2']['name'];
	//$image3=$_FILES['image3']['name'];
	//$pdate=$_POST['pdate'];
	//$authorname=$_POST['authorname'];

	$q="INSERT INTO product_details values('','$product_category','$product_company','$product_name','$product_detail','$product_price','$image')";
	$c=mysqli_query($con,$q);

	if($c)
	{
		move_uploaded_file($_FILES['p_img']['tmp_name'],"upload/".$image);
		//move_uploaded_file($_FILES['image2']['tmp_name'],"upload/".$image2);
		//move_uploaded_file($_FILES['image3']['tmp_name'],"upload/".$image3);
		?>
		<script>
			alert('Succesfully Inserted');
			window.location="viewartical.php";
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
					  
					
					 <h2 class="w3_inner_tittle">Add New Product</h2>
					
									<!-- tables -->
									
									<div class="agile-tables">
									<div class="w3l-table-info agile_info_shadow">
									<div class="grid-1">
									<div class="form-body">
									<form class="form-horizontal" action="#" method="post" enctype="multipart/form-data"> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Category-Name</label>
									<div class="col-sm-9"> 
										<select name="catsl" style="padding-top:3px" class="form-control" >
											<option>Select Category</option>
											<?php 
											$q="select * from category_details";
											include "connection.php";
											$c=mysqli_query($con,$q);
											while($r=mysqli_fetch_array($c))
											{
												?>
												<option value="<?php echo $r['cat_no'];?>"><?php echo $r['cat_name'];?></option>
												<?php
											}
											
											?>
										</select>										
									</div> 
									</div> 
									
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Product Category</label>
									<div class="col-sm-9"> 
										<input type="text" name="p_cat" class="form-control" required placeholder=""> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Product Company</label>
									<div class="col-sm-9"> 
										<input type="text" name="p_cmpn" class="form-control" required > 
									</div>
									</div>									
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
									<div class="col-sm-9"> 
										<input type="text" name="p_name" class="form-control" required > 
									</div>
									</div>																		
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Product Details</label>
									<div class="col-sm-9"> 
										<input type="text" name="desc3" class="form-control" required > 
									</div> 
									</div>

									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Product Price</label>
									<div class="col-sm-9"> 
										<input type="text" name="p_price" class="form-control" required > 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Product Image</label>
									<div class="col-sm-9"> 
										<input type="file" name="p_img" class="form-control" required > 
									</div> 
									</div> 
									<!--div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Image2</label>
									<div class="col-sm-9"> 
										<input type="file" name="image2" class="form-control"  > 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Image3</label>
									<div class="col-sm-9"> 
										<input type="file" name="image3" class="form-control"  > 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Author</label>
									<div class="col-sm-9"> 
										<input type="text" name="authorname" class="form-control" required > 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Publish Date</label>
									<div class="col-sm-9"> 
										<input type="text" name="pdate" class="form-control" required > 
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