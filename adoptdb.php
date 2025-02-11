<?php include 'config\constraints.php'
?>




<?php 
            //CHeck whether Update Button is Clicked or Not
            if(isset($_POST['submit']))
            {
                //echo "Clicked";
                //Get All the Values from Form
                $pid = $_POST['id'];
               $address =$_POST['address'];
               $mobile=$_POST['mobile'];

                //Update the Values
                $sql2 = "INSERT INTO `adopt`( `pid`, `uname`, `address`, `mobile`) VALUES ('$pid','$_SESSION[user]','$address','$mobile')
                ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //CHeck whether update or not
                //And REdirect to Manage Order with Message
                
                $sqli6 ="UPDATE `pets` SET  `urequest`= '$_SESSION[user]' WHERE `id` =$pid";
                mysqli_query($conn,$sqli6);
                
                $sqli9 ="UPDATE `pets` SET  `status`= '1' WHERE `id` =$pid";
                mysqli_query($conn,$sqli9);

            } 
            echo "<script>alert('Adoption Request Sent Successfully');</script>";
            echo "<script type='text/javascript'>window.location.href='adopt.php'</script>";
        ?> 
