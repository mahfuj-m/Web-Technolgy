<html>
<head>
 <style>

#first{
    list-style-type:none;
    padding:30px;
    text-align:center;
}
#select{

}
#cname{
    float:left;
    font-size:30px;
}
li{
    float:left;


}
#verticle-line {
  width: 1px;
  min-height: 400px;
  background: black;
}



 
 
 </style>
</head>

<body>
    
<div>
  <ul id="first">
  <li ><img src="download.png" alt="Company icon" style="width:50px;height:50px;"> </li>
  <li id="cname">Company</li>
  <li style="float:right"> Logged in as <a href="dashboard.php? tab=profile">Bob</a>&nbsp;|&nbsp;<a href="public_home.php">Logout</a></li>
  
  </ul>
  </div> <br><hr>
  

<table >
<tr>
   <td valign="top">
   <p><b>Account</b></p>
   <hr>
   <ul id="select">
   <li><a href="dashboard.php? tab=dash">Dashboard</a></li> <br>
   <li><a href="dashboard.php? tab=profile">View Profile</a></li><br>
   <li><a href="dashboard.php? tab=edit_prof">Edit Profile</a></li> <br>
   <li><a href="dashboard.php? tab=cpp">Change Profile Picture</a></li> <br>
   <li><a href="dashboard.php? tab=cp">Change Password</a></li> <br>
   <li><a href="public_home.php">Logout</a></li> <br>
   </ul>
   
   </td>
   <td>
   <div id="verticle-line"></div>
   </td>

   <td valign="top">
   <?php
$tb = isset($_GET['tab']) ? $_GET['tab'] : '';
switch($tb) { 
    case 'dash':
        echo "<h3>Welcome Bob </h3>";
    break;


    case 'profile':
    include('view_profile.php');
    break;
    case 'edit_prof':
        include('edit_profile.php');
    break;
    case 'cpp':
        include('edit_profile_pic.php');
    break;
    case 'cp':
        include('change_password.php');
    break;
   
} 

?>

   
   </td>


</tr>


</table>


</body>
<footer>
<hr>
  
  <p style="text-align:center">Copyright @<?php echo date("Y");?></p>
  </footer>

</html>