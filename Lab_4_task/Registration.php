<html>
<head>
<style>

</style>

</head>
<body>
    <?php
    $nameerr=$passerr=$npass="";
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
                if($_POST["userpass"]!=$_POST["conpass"]){
                    $npass="New password and Re type password must be same";
                }
    }  

    ?>
    <form action=" <?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <fieldset>
    <legend>Registration</legend>
    <label for="name" >Name   :</label>
    <input type="text" name="username"><?php echo $nameerr; ?> <br>
    <hr>
    <label for="mail">Email :</label>
    <input type="email" name="mail" id="mail">
    <hr>
    <label for="userpass">Password :</label>
    <input type="text" name="userpass" id="userpass"><?php echo $passerr; ?>
    <hr>
    <label for="conpass">Confirm Password :</label>
    <input type="text" name="conpass" id="conpass"><?php echo $npass; ?>
    <hr>
    <fieldset>
    <legend>Gender</legend>
    <input type="radio" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" value="female">
    <label for="female">Female</label>
    <input type="radio" name="gender" value="other">
    <label for="other">Other</label>
    </fieldset>
    <hr>
    <fieldset>
    <legend>Date Of Birth</legend>
    <table>
    <tr>
    <td><input type="number" name="day" id="day" min="1" max="31">/</td>
    <td><input type="number" name="month" id="month" min="1" max="12">/</td>
    <td><input type="number" name="year" id="year" min="1950" max="2020"></td>
    <td>(dd/mm/yyyy)</td>
    </tr>
    </table>
    </fieldset>
    <hr>
    <input type="submit" value="Submit">
    <input type="reset" name="reset" id="Reset">


    </fieldset>
    </form>

</body>
</html>