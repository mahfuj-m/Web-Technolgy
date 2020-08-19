<?php
session_start();
require_once('Database.php');
$db=new Model;
$id=$_SESSION['id'];
$sql="SELECT `image` FROM `student_info` WHERE student_id='$id'";
$profile=$db->executeQuery($sql);
$img="";
if(isset($_POST['submit'])){
	$image= basename($_FILES["image"]["name"]);
	$target_dir = "image/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $img= "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
              }   
           else {
               $img= "Sorry, there was an error uploading your file.";
             }
          $sql="UPDATE `student_info` SET `image`='$image' WHERE student_id='$id'";
          $db->executeNonQuery($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Your Profile Picture<img width="250px" src="image/<?php echo $profile[0]['image'] ?>" alt="<?php echo $profile[0]['name'] ?>">
	<form action="#" method="post" enctype="multipart/form-data">
		Change Profile Picture <input type="file" name="image">
		<input type="submit" name="submit" Value="Change">
		<input type="reset" name="res" value="Cancel">
		
	</form>


</body>
</html>