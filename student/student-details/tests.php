<br><br>
<?php
$db= $conn; // update with your database connection
$id= 0;
$steps=0;
$testmarks=0;
$mins=0;
$sec=0;
$test=0;
?>
<div class="content-box">







<?php
if (!empty($_GET['view'])) {
	global $mail;
    $mail= $_GET['view'];
 ?>

<?php
if (!empty($_GET['id'])) {
	global $test;
    $test= $_GET['id'];
}
 ?>
<?php
if (!empty($_GET['testm'])) {
	global $steps;
	global $testmarks;
    $steps= $_GET['testm'];
	$testmarks=min(100,(int)(50/$steps*100));
}
 ?>
<?php
if (!empty($_GET['testt'])) {
	global $mins;
    $mins= $_GET['testt'];
}
 ?>
<?php
if (!empty($_GET['tests'])) {
	global $sec;
    $sec= $_GET['tests'];
}
 ?>
 <?php
if (!empty($_GET['stat'])) {
	global $mail;
	global $test;
	global $mins;
	global $testmarks;
	global $sec;
 	$sql1= "SELECT * FROM admin_profile where email='$mail'";
    $res1= $conn->query($sql1);
    $data=$res1->fetch_assoc();
    $id=$data['id'];
	
	$sql3="SELECT * FROM $test where id=$id";
	$res3= $db->query($sql3);
	if($res3->num_rows==0)
	{
    	$sql2= "INSERT INTO $test (id, steps, time, times, marks) VALUES ($id, $steps,$mins , $sec, $testmarks)";
		$res2= $db->query($sql2);
		$prevmark=$data['marks']+$testmarks;
		$prevtime=$data['time']+$mins+(int)(($data['times']+$sec)/60);
		$prevtimes=(int)(($data['times']+$sec)%60);
		$sql4="UPDATE admin_profile SET marks = $prevmark, time = $prevtime, times = $prevtimes WHERE id = $id";
		$res4= $db->query($sql4);
	}
}
 ?>


<!-----=================table content start=================-->
	
	<div class="row">
		<div class="col">
			<h4>Tests</h4>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>S.N</th>
				<th>Test Name</th>
				<th>Full Marks</th>
				<th>Marks</th>
				<th>Time</th>
				<th>Test Link</th>
			</tr>
			<?php
  $sql1="SELECT * FROM test";
  $res1= $conn->query($sql1);
  
  if($res1->num_rows>0)
  {$i=1;
   while($data=$res1->fetch_assoc())
   {
			$mark=0;
			$time=0;
			$times=0;
			$exam=$data['test_id'];
			global $mail;
			$sql2= "SELECT $exam.marks,$exam.time,$exam.times FROM $exam INNER JOIN admin_profile ON picture_puzzle.id=admin_profile.id where admin_profile.email='$mail'";
			$res2= $conn->query($sql2);
			if($res2->num_rows>0)
				{
					$data2=$res2->fetch_assoc();
					$mark=$data2['marks'];
					$time=$data2['time'];
					$times=$data2['times'];
				}
		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $data['test_name']; ?></td>
			<td><?php echo $data['marks']; ?></td>
			<td><?php echo $mark; ?></td>
			<td><?php echo $time; ?>:<?php echo $times; ?></td>
			<td><a  href="dashboard.php?cat=student-details&subcat=<?php echo $data['test_id'];?>&id=<?php echo $data['test_id'];?>"><i class='far fa-eye'></i></a></td>
		</tr>
		<?php
   $i++;
}
}else{

?>
<tr>
	<td colspan="6">No Test Data</td>
</tr>
<?php } ?>
			
		</table>
	</div>
</div>
</div>
	<!-----==================table content end===================-->
<?php } ?>

</div>