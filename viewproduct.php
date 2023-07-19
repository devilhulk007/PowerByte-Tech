<?php 
	include "header.php";
	include "connection.php";
?>
<div class="clearfix"></div>
				<div class="inner_content">
				    <div class="inner_content_w3_agile_info">
					  
					  <?php
					  $q="select * from product_details";
					  $c=mysqli_query($con,$q);
					 ?>
					 <h2 class="w3_inner_tittle">Product-Details</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										<a href="addartical.php" style="float:right"><b><u>Add new Product</u></b></a>
										 <h3 class="w3_inner_tittle two">Product Listing</h3>
											<table id="table">
											<thead>
											  <tr>
												<th>ID</th>
												<th>Catgeory</th>
												<th>Company</th>
												<th>Name</th>
												<th>Detail</th>
												<th>Price</th>
												<th>Image</th>
												<!--th>Image2</th>
												<th>Image3</th>
												<th>Author</th>
												<th>Publish_Date</th-->
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
										<?php
										 while($r=mysqli_fetch_array($c))
										 {
											?>
					 
											<tr>
												<td align="center"><?php echo $r['p_id'];?></td>
												<td  align="center"><?php echo $r['p_cat'];?></td>
												<td><?php echo $r['p_cmpn'];?></td>
												<td><?php echo $r['p_name'];?></td>
												<td><?php echo $r['p_details'];?></td>
												<td><?php echo $r['p_price'];?></td>
												<td><Img src="upload/<?php echo $r['p_img'];?>" height=100 width=100/></td>
												<!--td><Img src="upload/<?php echo $r['image2'];?>" height=100 width=100/></td>
												<td><Img src="upload/<?php echo $r['image3'];?>" height=100 width=100/></td>
												<td><?php echo $r[''];?></td>
												<td><?php echo $r['publish_date'];?></td-->
											
												<td>
												<a href="editproduct.php?id=<?php echo $r['p_id'];?>">
												<i style="color: green; font-size:18px " class="fa fa-pencil-square-o"></i>
												</a>
												
											&nbsp;&nbsp;&nbsp;
												<a onclick="return confirm('Are You Sure you want to delete this records?')" href="deleteproduct.php?id=<?php echo $r['p_id'];?>">
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