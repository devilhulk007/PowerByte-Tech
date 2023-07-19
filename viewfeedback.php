<?php 
	include "header.php";
	include "connection.php";
?>
<div class="clearfix"></div>
				<div class="inner_content">
				    <div class="inner_content_w3_agile_info">
					  
					  <?php
					  $q="select * from feedback";
					  $c=mysqli_query($con,$q);
					 ?>
					 <h2 class="w3_inner_tittle">Feedback</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two">Feedback Listing</h3>
											<table id="table">
											<thead>
											  <tr>
												<th>FeedBack_ID</th>
												<th>Name</th>
												<th>Message</th>
												<th>Subject</th>
												<th>Email</th>
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
												<td align="center"><?php echo $r['feedback_id'];?></td>
												<td  align="center"><?php echo $r['name'];?></td>
												<td><?php echo $r['message'];?></td>
												<td><?php echo $r['subject'];?></td>
												<td><?php echo $r['email'];?></td>
												<td><?php echo $r['feedback_date'];?></td>
												<td>
												
												<a onclick="return confirm('Are You Sure you want to delete this records?')" href="deletefeedback.php?id=<?php echo $r['feedback_id'];?>">
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