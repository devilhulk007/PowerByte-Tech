<?php 
	include "header.php";
	include "connection.php";
?>
<div class="clearfix"></div>
				<div class="inner_content">
				    <div class="inner_content_w3_agile_info">
					  
					  <?php
					  $q="select * from registration_details";
					  $c=mysqli_query($con,$q);
					 ?>
					 <h2 class="w3_inner_tittle">User-Details</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two">User Listing</h3>
											<table id="table">
											<thead>
											  <tr>
												<th>ID</th>
												<th>Name</th>
												<th>Email</th>
												<th>Contact</th>
												<th>Gender</th>
												<th>Address</th>
												<th>City</th>
												<th>State</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
										<?php
										 while($r=mysqli_fetch_array($c))
										 {
											?>
					 
											<tr>
												<td align="center"><?php echo $r['u_id'];?></td>
												<td  align="center"><?php echo $r['u_name'];?></td>
												<td><?php echo $r['u_email'];?></td>
												<td><?php echo $r['u_num'];?></td>
												<td><?php echo $r['u_gnd'];?></td>
												<td><?php echo $r['u_add'];?></td>
												<td><?php echo $r['u_city'];?></td>
												<td><?php echo $r['u_state'];?></td>
												
												<td>
												
												<a onclick="return confirm('Are You Sure you want to delete this records?')" href="deleteusers.php?id=<?php echo $r['u_id'];?>">
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