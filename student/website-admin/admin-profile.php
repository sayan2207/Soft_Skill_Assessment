<br><br>
<div class="content-box">
<?php 
if (!empty($_GET['view'])) {?>
	
	<?php
    $id= $_GET['view'];
   $query="SELECT * FROM admin_profile WHERE email='$id' LIMIT 1";
   $res= $conn->query($query);
$viewData=$res->fetch_assoc();
$res= $conn->query($query);
$viewData=$res->fetch_assoc();
	if(1)
   {
	$backId=$viewData['id']-1;
	$fullName=$viewData['full_name'];
	$email=$viewData['email'];
	$mobile=$viewData['mobile'];
	$address=$viewData['address'];
	$marks=$viewData['marks'];
   $time=$viewData['time'];
   $times=$viewData['times'];
   }
   else{
	$backId='';
	$fullName='';
	$email='';
	$mobile='';
	$address='';
	$marks=$viewData['marks'];
   $time=$viewData['time'];
   $times=$viewData['times'];
   }
   ?>
<div class="row">
	<div class="col">
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
}?>
</div>