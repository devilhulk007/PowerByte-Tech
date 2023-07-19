<?php 
	include "header.php";
	include "connection.php";
	
	$id=$_REQUEST['id'];
	$q="select * from exam_details where exam_id='$id'";
	$c=mysqli_query($con,$q);
	while($r=mysqli_fetch_array($c))
	{
		$tt=$r['title'];
		$noq=$r['noofquestion'];
		$tm=$r['total_marks'];
		$pm=$r['positive_marks'];
		$nm=$r['negative_marks'];
	}
if(isset($_POST['btnok']))
{
	$id=$_REQUEST['id'];
	$title=$_POST['titletxt'];
	$noofque=$_POST['noqtxt'];
	$totalmarks=$_POST['tmtxt'];
	$posmarks=$_POST['pmtxt'];
	$negmarks=$_POST['nmtxt'];
	$cat=$_POST['catsl'];

	$q="update exam_details set category_id='$cat',title='$title',noofquestion='$noofque',total_marks='$totalmarks',positive_marks='$posmarks',negative_marks='$negmarks' where exam_id='$id'";
	$c=mysqli_query($con,$q);

	if($c)
	{
		?>
		<script>
			alert('Succesfully Updated');
			window.location="viewexam.php";
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
					  
					
					 <h2 class="w3_inner_tittle">Edit This Exam</h2>
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
											$q="select * from category";
											include "connection.php";
											$c=mysqli_query($con,$q);
											while($r=mysqli_fetch_array($c))
											{
												?>
												<option><?php echo $r['category_name'];?></option>
												<?php
											}
											
											?>
										</select>										
									</div> 
									</div> 
									
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Exam-Title</label>
									<div class="col-sm-9"> 
										<input type="text" name="titletxt" value="<?php echo $tt;?>" class="form-control" required > 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">No Of Question</label>
									<div class="col-sm-9"> 
										<input type="text" name="noqtxt" value="<?php echo $noq;?>" class="form-control" required > 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Total-Marks</label>
									<div class="col-sm-9"> 
										<input type="text" name="tmtxt" value="<?php echo $tm;?>" class="form-control" required > 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Positive-Marks</label>
									<div class="col-sm-9"> 
										<input type="text" name="pmtxt" value="<?php echo $pm;?>" class="form-control" required > 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Negative-Marks</label>
									<div class="col-sm-9"> 
										<input type="text" name="nmtxt" value="<?php echo $nm;?>" class="form-control" required > 
									</div> 
									</div> 
									
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