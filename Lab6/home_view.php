<?php
session_start();
$id=$_SESSION['id'];
if(is_null($id)){
	 header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td> <a href="home_view.php?tab=home">Dashboard</a> <br>  <br> 
			 <a href="home_view.php?tab=vp">View Profile</a> <br> <br> 
			 <a href="home_view.php?tab=ep">Edit Profile</a> <br> <br> 
			<a href="home_view.php?tab=cpp">Change Profile Picture</a> <br> <br> 
			<a href="home_view.php?tab=cp">Change Password</a><br> <br> 
			 <a href="logout.php">Log Out</a> <br> <br>
		   </td>
			<td>
	 <?php
        $tb = isset($_GET['tab']) ? $_GET['tab'] : '';
       switch($tb) { 
    case 'home':
         include('dashboard.php');
    break;
    case 'cpp':
       include('change_profile_pic.php');
        break;
    case 'vp':
        include('view_profile.php');
    break;
    case 'ep':
        include('edit_profile.php');
        break;
       case 'cp':
        include('chnage_password.php');
        break;
       } 

            ?>
			</td>
		</tr>
	</table>
	<!--Welcome to Your Portal <?php echo $profile[0]['name']; ?> 

	<img width="250px" src="image/<?php echo $profile[0]['image'] ?>" alt="<?php echo $profile[0]['name'] ?>"> -->

</body>
</html>