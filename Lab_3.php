<html>
<head>
<title>Validation</title>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php
    $notimage=$file_exits=$imagesize=$supportedfiles=$sorry=$success="";
    $target_dir = "Upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $nameerr=$name=$passerr=$cpass=$npass="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['username']) || (!preg_match("/[\w_\.-]{2,}/" , $_POST["username"]))){
        if(empty($_POST['username'])){
            $nameerr="This field is required";
        }
        else{
            $nameerr="Invalied format";
        }
    }
    else{
            $name="Your name is : ".$_POST["username"];          
        }
    if(empty($_POST['userpass']) || (!preg_match("/^(?=.{8,}$)(?=.*[a-zA-Z0-9])(?=.*[@#$%]).*$
    /" , $_POST["userpass"]))){
        if(empty($_POST['userpass'])){
                    $passerr="Password can't be empty";
                }
                else{
                    $passerr="Lenght not less than 8 characters";
                }
            }
        if($_POST["currpass"]==$_POST["newpass"]){
            $cpass="Currrent password and New password must be different";
        }
        if($_POST["newpass"]!=$_POST["repass"]){
            $npass="New password and Re type password must be same";
        }
            $notimage=$file_exits=$imagesize=$supportedfiles=$sorry=$success="";
    $target_dir = "Upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image

    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $notimage= "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $notimage= "File is not an image.";
        $uploadOk = 0;
    }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
    $file_exits= "Sorry, file already exists.";
    $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
    $imagesize= "Sorry, your file is too large.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    $supportedfiles= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    $sorry= "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $success= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        $sorry= "Sorry, there was an error uploading your file.";
    }
    }

 
 }
?>
<div >
<h2>LOGIN</h2>
<form action=" <?php echo $_SERVER["PHP_SELF"] ?>" method="post">
User Name : <input type="text" name="username" > <?php echo $nameerr; ?><br>
<br>
Password &nbsp;&nbsp; : <input type="password" name="userpass"> <?php echo $passerr; ?>
<hr>
<input type="checkbox" name="remember" id="remember">Remember Me</tr>
<br>
<input type="submit" name="submit" value="Submit">
</form>

</div>

<div>
<h2>CHANGE PASSWORD</h2>
<hr>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
Current Password: <input type="text" name="currpass"><?php echo $cpass; ?><br><br>
New Password : <input type="text" name="newpass" >  <?php echo $npass; ?><br><br>
Retype New Password: <input type="text" name="repass"><?php echo $npass; ?><br>
<input type="submit" name="submit">

</form>
</div>

<div>
<h2>PROFILE PICTURE</h2>
<hr>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
<i class='fas fa-user' style='font-size:100px;color:black'></i><br><br>
  <input type="file" name="fileToUpload" id="fileToUpload"> <?php echo $sorry.$success.$supportedfiles.$imagesize ?>
  <hr>
  <input type="submit" value="Submit" name="submit">
</form>
</div>

</body>
<footer>

<h2>Your Input</h2>
<hr>
<?php
echo $name;
?>
</footer>

</html>