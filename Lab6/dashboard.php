<?php
require_once('Database.php');
$db=new Model;
session_start();
$id=$_SESSION['id'];

$sql="SELECT `name`, `image` FROM `student_info` WHERE student_id='$id'";
$profile=$db->executeQuery($sql);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	Welcome to Your Portal <?php echo $profile[0]['name']; ?> 

	<img width="250px" src="image/<?php echo $profile[0]['image'] ?>" alt="<?php echo $profile[0]['name'] ?>">

</body>
</html>