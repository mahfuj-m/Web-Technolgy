<?php
require_once('Database.php');
$conn=new Model;
$err="";
if(isset($_POST['submit'])){
	session_start();
	$id=$_POST['id'];
	$pass=$_POST['pass'];
	$sql="SELECT password FROM `student_info` WHERE student_id='$id'";
	$row=$conn->executeQuery($sql);
	if(password_verify($pass, $row[0]['password'])){
		
		$_SESSION['id']=$id;
       header("location: home_view.php");
    }else
    {
        $err= "Incorrect email/password combination";
    }

}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form align='center' action="#" method="post">
		User ID <input type="text" name="id"> <br> <br>
		Password <input type="password" name="pass">  <br> <br>
		<input type="submit" name="submit" value="Submit">
		<input type="reset" name="res" value="Reset">  <?php echo $err; ?>
	</form>

</body>
</html>