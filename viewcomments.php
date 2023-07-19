<?php 
	include "header.php";
	include "connection.php";
?>
<div class="clearfix"></div>
				<div class="inner_content">
				    <div class="inner_content_w3_agile_info">
					  
					  <?php
					  $q="select * from comments";
					  $c=mysqli_query($con,$q);
					 ?>
					 <h2 class="w3_inner_tittle">Comments-Details</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two">Comments Listing</h3>
											<table id="table">
											<thead>
											  <tr>
												<th>Comments_ID</th>
												<th>Artical_ID</th>
												<th>Username</th>
												<th>Comments</th>
												<th>Date</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
										<?php
										 while($r=mysqli_fetch_array($c))
										 {
											?>
					 
											<tr>
												<td align="center"><?php echo $r['c_id'];?></td>
												<td  align="center"><?php echo $r['a_id'];?></td>
												<td><?php echo $r['username'];?></td>
												<td><?php echo $r['comments'];?></td>
												<td><?php echo $r['c_date'];?></td>
												<td>
												<a onclick="return confirm('Are You Sure you want to delete this records?')" href="deletecomment.php?id=<?php echo $r['c_id'];?>">
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