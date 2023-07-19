<?php 
	include "header.php";
	include "connection.php";
	
if(isset($_POST['btnok']))
{
	$qes=$_POST['qetxt'];
	$op1=$_POST['op1txt'];
	$op2=$_POST['op2txt'];
	$op3=$_POST['op3txt'];
	$op4=$_POST['op4txt'];
	$ans=$_POST['anstxt'];
	$cat=$_POST['catsl'];

	$q="INSERT INTO question_master values('','$cat','$qes','$op1','$op2','$op3','$op4','$ans')";
	$c=mysqli_query($con,$q);

	if($c)
	{
		?>
		<script>
			alert('Succesfully Inserted');
			window.location="viewquestion.php";
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
										<select name="catsl" style="padding-top:3px" class="form-control" >
											<option>Select Exam</option>
											<?php 
											$q="select * from exam_details";
											include "connection.php";
											$c=mysqli_query($con,$q);
											while($r=mysqli_fetch_array($c))
											{
												?>
												<option><?php echo $r['title'];?></option>
												<?php
											}
											
											?>
										</select>										
									</div> 
									</div> 
									
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Question-Title</label>
									<div class="col-sm-9"> 
										<input type="text" name="qetxt" class="form-control" required placeholder="Any title for this"> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Option1</label>
									<div class="col-sm-9"> 
										<input type="text" name="op1txt" class="form-control" required placeholder="Options1 here"> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Option2</label>
									<div class="col-sm-9"> 
										<input type="text" name="op2txt" class="form-control" required placeholder="Options2 here"> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Option3</label>
									<div class="col-sm-9"> 
										<input type="text" name="op3txt" class="form-control" required placeholder="Options3 here"> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Option4</label>
									<div class="col-sm-9"> 
										<input type="text" name="op4txt" class="form-control" required placeholder="Options4 here"> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Answer</label>
									<div class="col-sm-9"> 
										<input type="text" name="anstxt" class="form-control" required placeholder="any options"> 
									</div> 
									</div> 
									
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