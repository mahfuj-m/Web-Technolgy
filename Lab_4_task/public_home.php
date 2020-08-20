<html>
<head>
<style>
#Company_name{
    font-size:30px;
    text-align:center;

}
ul{
    list-style-type:none;
    padding:30px;
    text-align:center;
}
li{
    float:left;
    font-size:30px;


}
li:last-child{
    border-right:none;
    text-align:center;

}
li a{
    text-align=center;
}
</style>
</head>
<body>


  <div style="border-width:2px;">
  <ul>
  <li><img src="download.png" alt="Company icon" style="width:50px;height:50px;"> </li>
  <li>Company</li>
  <li style="float:right"> <a href="public_home.php?tab=home">Home</a>&nbsp;|&nbsp;<a href="public_home.php?tab=login">Login</a>&nbsp;|&nbsp;<a href="public_home.php?tab=registration">Registration</a></li>
  
  </ul>
  
  </div>
  <br>
  <div>
  <hr>
  <?php
$tb = isset($_GET['tab']) ? $_GET['tab'] : '';
switch($tb) { 
    case 'registration':
        include('Registration.php');
    break;


    case 'home':
    echo "<h3> Welcome to xCompany</h2>";
    break;
    case 'login':
        include('login.php');
    break;
    case 'forgot':
        include('forgot.php');
   
} 

?>
  </div>
  <footer>
  <hr>
  <p style="text-align:center">Copyright @<?php echo date("Y");?></p>
  </footer>





</body>
</html>