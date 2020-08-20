<?php
require_once('Database.php');
$db=new Model;
//session_start();
$id=$_SESSION['id'];
if(is_null($id)){
	 header('location:login.php');
}

$sql="SELECT * FROM `student_info` WHERE student_id='$id'";
$profile=$db->executeQuery($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td> 	Your ID <?php echo $profile[0]['student_id']; ?><br>
	Your Name <?php echo $profile[0]['name']; ?> <br>
	Your Department Name <?php echo $profile[0]['dept']; ?> <br>
	Your CGPA <?php echo $profile[0]['cgpa']; ?> <br>
	Your Completed Credit <?php echo $profile[0]['credit']; ?> <br>
	Your Address <?php echo $profile[0]['address']; ?>

			</td>
			<td>
				<img width="250px" src="image/<?php echo $profile[0]['image'] ?>" alt="<?php echo $profile[0]['name'] ?>">
			</td>
		</tr>

	</table>

</body>
</html>