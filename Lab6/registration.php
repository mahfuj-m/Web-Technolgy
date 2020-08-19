<?php
require_once('Database.php');
$db=new Model;
$passerr=$img="";

if (isset($_POST['submit'])) {
	if($_POST['pass1']==$_POST['pass2']){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$dept= $_POST['dept'];
	$cgpa = $_POST['cgpa'];
	$credit = $_POST['credit'];
	$address=$_POST['address'];
	$password = password_hash($_POST['pass1'], PASSWORD_BCRYPT, ["cost" => 12]);
	$image= basename($_FILES["image"]["name"]);

	$target_dir = "image/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $img= "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
              }   
           else {
               $img= "Sorry, there was an error uploading your file.";
             }
     $sql="INSERT INTO `student_info`(`student_id`, `name`, `dept`, `cgpa`, `password`, `address`, `credit`, `image`) VALUES ('$id','$name','$dept','$cgpa','$password','$address','$credit','$image')";
    // echo $sql;
    $db->executeNonQuery($sql);

    }
    	else
	{
		$passerr= "Password Not matched";
	}

    }


?>




<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<form  align='center' action="#" method="post" enctype="multipart/form-data">
		Your ID <input type="text" name="id"> <br> <br>
		Your Name <input type="text" name="name"> <br> <br>
		Your Department <input type="text" name="dept"><br> <br>
		Your CGPA <input type="text" name="cgpa"><br> <br>
		Your Credit <input type="text" name="credit"><br> <br>
		Your Address <input type="text" name="address"><br> <br>
		Your Password <input type="text" name="pass1"><?php echo $passerr ?> <br> <br> 
		Re-enter Password <input type="text" name="pass2"><br> <br>
		Upload Your Profile Picture <br>
		<input type="file" name="image">    <?php echo $img ?> <br> <br>
		<input type="submit" name="submit" value="Register">
		<input type="reset" Value="Cancel">
		

	</form>

</body>
</html>