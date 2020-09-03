<html>
<body>
your email ID is : <?php echo $_POST["mail"];?> 
 <br>
your date of birth is : <?php echo $_POST["day"].".".$_POST["month"].".".$_POST["year"] ?>
<br>
Your Gender is :<?php  echo $_POST["gender"] ?>
<br>
Your Degrees are : <?php 
if(isset($_POST["ssc"])){
    echo $_POST["ssc"].", ";
}
if(isset($_POST["hsc"])){
    echo $_POST["hsc"].", ";
}
if(isset($_POST["bsc"])){
    echo $_POST["bsc"].", ";
}
if(isset($_POST["msc"])){
    echo $_POST["msc"]." ";
}
?>
<br>
Your blood group is : <?php echo $_POST["bg"] ?>
<br>
Your name is : <?php  echo $_POST["name"]?>
</body>

</html>