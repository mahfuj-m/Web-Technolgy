
<html>
<body>
    <?php
    $nameerr=$name=$mailerr=$mail=$doberr=$dob=$gender=$gendererr=$degree=$degreeerr=$bgerr=$bg="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST['name']) || (!preg_match("/^[a-zA-Z\_]{2,}/" , $_POST["name"]))){
            if(empty($_POST['name'])){
                $nameerr="This field is required";
            }
            else{
                $nameerr="Invalied format";
            }
        }
        else{
                $name="Your name is : ".$_POST["name"];          
        }
        if(empty($_POST['mail'])){
            $mailerr="This field is required";
        }
        else{
            $mail="Your mail ID : ".$_POST["mail"];
        }
        if(empty($_POST["day"])||empty($_POST["month"])||empty($_POST["year"])){
                if(empty($_POST["day"])){
                    $doberr="Day";
                }
                if(empty($_POST["month"])){
                    $doberr=$doberr." Month";
                }
                if(empty($_POST["year"])){
                    $doberr=$doberr." Year";
                }
                $doberr=$doberr." is required";

        }
        else
        {
            $dob="Your Date of Birth : " .$_POST["day"]."/".$_POST["month"]."/".$_POST["year"];
        }
        if(empty($_POST["gender"])){
            $gendererr="Gender is required";
        }
        else{
            $gender="Your gender is ".$_POST["gender"];
        }
        if((!isset($_POST["ssc"])&&!isset($_POST["hsc"])&&!isset($_POST["bsc"]))||
        (!isset($_POST["ssc"])&&!isset($_POST["hsc"])&&!isset($_POST["msc"]))||
        (!isset($_POST["ssc"])&&!isset($_POST["bsc"])&&!isset($_POST["msc"]))||
        (!isset($_POST["hsc"])&&!isset($_POST["bsc"])&&!isset($_POST["msc"]))){
            $degreeerr="Select At least Two items";

        }
        else{
             if(isset($_POST["ssc"])&&isset($_POST["bsc"])&&isset($_POST["msc"])&&isset($_POST["hsc"])){
                 $degree=$_POST["ssc"]." , ".$_POST["hsc"]." , ".$_POST["bsc"]." , ".$_POST["msc"];
             }
             else if(isset($_POST["ssc"])&&isset($_POST["hsc"])&&isset($_POST["bsc"])){
                 $degree=$_POST["ssc"]." , ".$_POST["hsc"]." , ".$_POST["bsc"];
            }
            else if(isset($_POST["ssc"])&&isset($_POST["hsc"])&&isset($_POST["msc"])){
                 $degree=$_POST["ssc"]." , ".$_POST["hsc"]." , ".$_POST["msc"];
            }
            else if(isset($_POST["ssc"])&&isset($_POST["bsc"])&&isset($_POST["msc"])){
                 $degree=$_POST["ssc"]." , ".$_POST["bsc"]." , ".$_POST["msc"];
            }
            else if(isset($_POST["hsc"])&&isset($_POST["bsc"])&&isset($_POST["msc"])){
                 $degree=$_POST["hsc"]." , ".$_POST["bsc"]." , ".$_POST["msc"];
            }

            else if(isset($_POST["ssc"])&&isset($_POST["hsc"])){
                $degree=$_POST["ssc"]." , ".$_POST["hsc"];
            }
            else if(isset($_POST["ssc"])&&isset($_POST["bsc"])){
                $degree=$_POST["ssc"]." , ".$_POST["bsc"];
            }
             else if(isset($_POST["ssc"])&&isset($_POST["msc"])){
                $degree=$_POST["ssc"]." , ".$_POST["msc"];
            }
            else if(isset($_POST["hsc"])&&isset($_POST["bsc"])){
                $degree=$_POST["hsc"]." , ".$_POST["bsc"];
            }
            else if(isset($_POST["hsc"])&&isset($_POST["msc"])){
                $degree=$_POST["hsc"]." , ".$_POST["msc"];
            }
            else if(isset($_POST["bsc"])&&isset($_POST["msc"])){
                $degree=$_POST["bsc"]." , ".$_POST["msc"];
            }
            $degree="Your Degrees are : ".$degree;
        }
        if(!isset($_POST["bg"])){
            $bgerr="This field is required";
        }
        else{
            $bg="Your blood group is ".$_POST["bg"];
        }
    }


    ?>

    <form action=" <?php echo $_SERVER["PHP_SELF"] ?>" method="post" >
    <h2>Email</h2>
    <input type="email" name="mail" ><span >*</span><?php echo $mailerr; ?> <br>
    <h2>DATE OF BIRTH</h2>
    <table> 
    <tr>
    <th>dd</th>
    <th>mm</th>
    <th>yyyy</th>
    </tr>
    <tr>
    <td><input type="number" name="day" min="1" max="31">/ </td>
    <td> <input type="number" name="month" min="1" max="12">/ </td>
    <td> <input type="number" name="year" min="1953" max="1998"> </td> 
    <td><span >*</span><?php echo $doberr; ?></td>
    </tr>
    </table>
    <h2>Gender</h2>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other
    <span >*</span><?php echo $gendererr; ?><br>
    <h2>DEGREE</h2>
    <input type="checkbox" name="ssc" value="SSC"> SSC
    <input type="checkbox" name="hsc" value="HSC"> HSC
    <input type="checkbox" name="bsc" value="BSc"> BSc
    <input type="checkbox" name="msc" value="MSc"> MSc
    <span >*</span><?php echo $degreeerr; ?>
    <br>
    <h2>BLOOD GROUP</h2>
    <select name="bg" id="bg">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
    </select>
    <span >*</span><?php echo $bgerr; ?>
    <br>
    <h2>Your Name </h2>
    <input type="text" name="name"> <span >*</span><?php echo $nameerr; ?>
    <br>
    <input type="submit" name="submit" value="Submit">
    <br>
    </form>
    <h1>Your Input</h1>
    <?php
    echo $name; 
    echo "<br>";
    echo $mail;
    echo "<br>";
    echo $dob;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $degree;
    echo "<br>";
    echo $bg;
    ?>
</body>
</html>