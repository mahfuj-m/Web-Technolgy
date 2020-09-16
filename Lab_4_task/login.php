<html>
<body>
<?php
<<<<<<< HEAD
    $nameerr=$passerr=$npass="";
=======
    $nameerr=$passerr=$npass=$showp="";
>>>>>>> a0d9ece33a77b1d2e50cf9c07eb9fea1a5b96824
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST['username']) || (!preg_match("/[\w_\.-]{2,}/" , $_POST["username"]))){
            if(empty($_POST['username'])){
                $nameerr="This field is required";
            }
            else{
                $nameerr="Invalied format";
            }
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
<<<<<<< HEAD
                if($_POST["userpass"]!=$_POST["conpass"]){
                    $npass="New password and Re type password must be same";
                }
=======
          if($_POST["userpass"]!=$_POST["conpass"]){
                        $npass="New password and Re type password must be same";
                    }
          if(isset($_POST['showpass'])){
           
          }
                 
>>>>>>> a0d9ece33a77b1d2e50cf9c07eb9fea1a5b96824
    }  

    ?>
    <form action=" <?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <fieldset>
    <legend>LOGIN</legend>
    <label for="name" >User Name   :</label>
    <input type="text" name="username"><?php echo $nameerr; ?> <br>
    <label for="userpass">Password   :</label>
    <input type="password" name="userpass" id="userpass"><?php echo $passerr; ?>
<<<<<<< HEAD
=======
    <br>
    <input type="checkbox" name="showpass" value="showpass">
    <label for="showpass">Show Password</label>
>>>>>>> a0d9ece33a77b1d2e50cf9c07eb9fea1a5b96824
    <hr>
    <input type="checkbox"  name="rm" value="remember">
    <label for="rm"> Remember Me</label><br>
   
     <table>
      <tr>
      <td>
      <input type="submit" name="Submit" id="Submit">
      </td>
      <td>
       <a href="public_home.php? tab=forgot">Forgot Password?</a>
      </td>
      
      </tr>
     </table>


    
    </fieldset>
    
    
    
    </form>
<<<<<<< HEAD

=======
    <?php
    echo $showp;
    ?>
>>>>>>> a0d9ece33a77b1d2e50cf9c07eb9fea1a5b96824


</body>


</html>