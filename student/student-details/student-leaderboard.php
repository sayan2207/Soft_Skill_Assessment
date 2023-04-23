<br><br>
<?php
$db= $conn; // update with your database connection
$id= 0;
?>



<div class="content-box">
		<?php
if (!empty($_GET['view'])) {?>
	<?php 
    $id= $_GET['view'];
   $query="SELECT * FROM admin_profile WHERE id=$id";
   $res= $conn1->query($query);
   $viewData=$res->fetch_assoc();
   $backId=$viewData['id']-1;
   $fullName=$viewData['full_name'];
   $email=$viewData['email'];
   $mobile=$viewData['mobile'];
   $address=$viewData['address'];
   $marks=$viewData['marks'];
   $time=$viewData['time'];
   $times=$viewData['times'];
   ?>
<div class="row">
	<div class="col">
	</div>
	<div class="col text-right">
		<a href="dashboard.php?cat=student-details&subcat=student-profile" class="btn btn-secondary content-link">Back</a>
	</div>
</div>
<br>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Full Name -</th><td><?php echo $fullName; ?></td>
		</tr>
		<tr>
			<th>Email -</th><td><?php echo $email; ?></td>
		</tr>
		<tr>
			<th>Mobile Number -</th><td><?php echo $mobile; ?></td>
		</tr>
		<tr>
			<th>Address -</th><td><?php echo $address; ?></td>
		</tr>
		<tr>
			<th>Marks -</th><td><?php echo $marks; ?></td>
		</tr>
		<tr>
			<th>Time -</th><td><?php echo $time; ?>:<?php echo $times; ?></td>
		</tr>
	</table>
</div>
   <?php
   
	

 }else {?>

 


<!-----=================table content start=================-->
	
	<div class="row">
		<div class="col">
			<h4>Student Leaderboard</h4>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col">
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Rank</th>
				<th>Full Name</th>
				<th>Marks</th>
				<th>Time</th>
			</tr>
			<?php
  $sql1="SELECT * FROM admin_profile ORDER BY marks DESC, time ASC, times ASC";
  $res1= $conn->query($sql1);
  if($res1->num_rows>0)
  {$i=1;
   while($data=$res1->fetch_assoc()){
	global $id;
	$id=$data['id'];
   	?>
   	<tr>
   		<td><?php echo $i; ?></td>
   		<td><?php echo $data['full_name']; ?></td>
		<td><?php echo $data['marks']; ?></td>
		<td><?php echo $data['time']; ?>:<?php echo $data['times']; ?></td>
   	</tr>
   	<?php
   $i++;}
}else{

?>
<tr>
	<td colspan="6">No Student Profile Data</td>
</tr>
<?php } ?>
			
		</table>
	</div>
</div>
</div>
	<!-----==================table content end===================-->
<?php } ?>

</div>