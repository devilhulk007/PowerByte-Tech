<?php 
	include "header.php";
	include "connection.php";
?>
<div class="clearfix"></div>
				<div class="inner_content">
				    <div class="inner_content_w3_agile_info">
					  
					  <?php
					  $q="select * from result_info";
					  $c=mysqli_query($con,$q);
					 ?>
					 <h2 class="w3_inner_tittle">Result-Details</h2>
									<!-- tables -->
									
									<div class="agile-tables">
										<div class="w3l-table-info agile_info_shadow">
										 <h3 class="w3_inner_tittle two">Result Listing</h3>
											<table id="table">
											<thead>
											  <tr>
												<th>Result_ID</th>
												<th>UserName</th>
												<th>ExamID</th>
												<th>Result</th>
												<th>Result-Date</th>
												<th>Action</th>
											  </tr>
											</thead>
											<tbody>
										<?php
										 while($r=mysqli_fetch_array($c))
										 {
											?>
					 
											<tr>
												<td align="center"><?php echo $r['result_id'];?></td>
												<td  align="center"><?php echo $r['username'];?></td>
												<td><?php echo $r['exam_id'];?></td>
												<td><?php echo $r['result'];?></td>
												<td><?php echo $r['r_date'];?></td>
												<td>
												
											
												<a onclick="return confirm('Are You Sure you want to delete this records?')" href="deleteresult.php?id=<?php echo $r['result_id'];?>">
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