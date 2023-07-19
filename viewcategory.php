<?php 
	include "header.php";
	include "connection.php";
?>
<div class="clearfix"></div>
				<div class="inner_content">
				    <div class="inner_content_w3_agile_info">
					  
					  <?php
					  $q="select * from category_details";
					  $c=mysqli_query($con,$q);
					 ?>
					 <h2 class="w3_inner_tittle">Category</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
									<a href="addcategory.php" style="float:right"><b><u>Add new Category</u></b></a>
										 <h3 class="w3_inner_tittle two">Category Listing</h3>
											<table id="table">
											<thead>
											  <tr>
												<th>Category_ID</th>
												<th>Name</th>
												<!--th>Image</th-->
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
										<?php
										 while($r=mysqli_fetch_array($c))
										 {
											?>
					 
											<tr>
												<td align="center"><?php echo $r['cat_no'];?></td>
												<td  align="center"><?php echo $r['cat_name'];?></td>
												<!--td><img src="upload/<?php //echo $r['category_image'];?>" height=100 width=100/></td-->
												<td>
												<a href="editcategory.php?cat_no=<?php echo $r['cat_no'];?>">
													<i style="color: green; font-size:18px " class="fa fa-pencil-square-o"></i>
												</a>

												&nbsp;&nbsp;&nbsp;
												<a onclick="return confirm('Are You Sure you want to delete this records?')" href="deletecategory.php?id=<?php echo $r['cat_no'];?>">
													<i style="color: red;  font-size:18px" class="fa fa-trash-o"></i>
												</a>
												</td>
										    </tr>
										<?php
										 }
										?>										 
											</tbody>
										  </table>
									
									  
								</div>
					</div>
						
				    </div>
				</div>
	</div>
	<?php 
		include "footer.php";
	?>