<?php 
	include "header.php";
	include "connection.php";
	$qid=$_REQUEST['id'];
	$q="select * from question_master where ques_id='$qid'";
	$c=mysqli_query($con,$q);
	while($r=mysqli_fetch_array($c))
	{
		$qtitle=$r['question_title'];
		$o1=$r['option1'];
		$o2=$r['option2'];
		$o3=$r['option3'];
		$o4=$r['option4'];
		$ans=$r['answer'];
		
	}
if(isset($_POST['btnok']))
{
	$id=$_REQUEST['id'];
	$qes=$_POST['qetxt'];
	$op1=$_POST['op1txt'];
	$op2=$_POST['op2txt'];
	$op3=$_POST['op3txt'];
	$op4=$_POST['op4txt'];
	$ans=$_POST['anstxt'];
	$cat=$_POST['catsl'];

	$q="update question_master set exam_id='$cat',question_title='$qes',option1='$op1',option2='$op2',option3='$op3',option4='$op4',answer='$ans' where ques_id='$id'";
	$c=mysqli_query($con,$q);

	if($c)
	{
		?>
		<script>
			alert('Succesfully Updated');
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
										<input type="text" value="<?php echo $qtitle;?>" name="qetxt" class="form-control" required placeholder="Any title for this"> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Option1</label>
									<div class="col-sm-9"> 
										<input type="text" value="<?php echo $o1;?>" name="op1txt" class="form-control" required placeholder="Options1 here"> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Option2</label>
									<div class="col-sm-9"> 
										<input type="text" name="op2txt" value="<?php echo $o2;?>" class="form-control" required placeholder="Options2 here"> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Option3</label>
									<div class="col-sm-9"> 
										<input type="text" value="<?php echo $o3;?>" name="op3txt" class="form-control" required placeholder="Options3 here"> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Option4</label>
									<div class="col-sm-9"> 
										<input type="text" value="<?php echo $o4;?>" name="op4txt" class="form-control" required placeholder="Options4 here"> 
									</div> 
									</div> 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">Answer</label>
									<div class="col-sm-9"> 
										<input type="text" value="<?php echo $ans;?>" name="anstxt" class="form-control" required placeholder="any options"> 
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