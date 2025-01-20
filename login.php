<?php
if(isset($_POST['submit'])){
    $conn=mysqli_connect("localhost","root","","adoptail");
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $incpass=md5($password);
    $sql="SELECT * FROM userlogin WHERE email = '{$email}'";
    $res=mysqli_query($conn, $sql);
    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
        $pass=$row['password'];
        if($pass===$incpass){
            session_start();
            $_SESSION['user']=$row['username'];
            $_SESSION['fname']=$row['fname'];
            $_SESSION['lname']=$row['lname'];
            header("location://localhost/adoptail/index.php");
            echo "<script type='text/javascript'>window.location.href='login.php'</script>";
        }
        else{
            echo "<script>alert('Invalid Password');</script>";
            echo "<script type='text/javascript'>window.location.href='login.php'</script>";
    }
    }
    else{
        echo "<script>alert('Email do not match');</script>";
        echo "<script type='text/javascript'>window.location.href='login.php'</script>";
}
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Adoptail</title>

    <link rel="icon" href="images/pet.ico">
    <!-- Bootstrap CSS CDN LINKS & External CSS -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
    /*Poppins Font*/
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,200;1,300;1,400&display=swap');

    /*Inter Font*/
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    /* Leckerli One Font */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Leckerli+One&display=swap');

    /* Rubik Font */
    @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,600&display=swap');
    </style>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <script src="https://kit.fontawesome.com/037215761c.js" crossorigin="anonymous"></script> -->

</head>

<body style="overflow-x: hidden;">
    <!-- <div class="container-fluid"> -->

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-6 p-0"
                style="background-color:#CCE7E4;position:relative;box-shadow: inset -12px 0px 28px -3px rgba(169,169,169,0.6);">
                <a href="#" class="text-decoration-none" style="cursor:default;">
                    <img class="bi me-2" width="161.92" height="44.19" role="img" aria-label="Adoptail_Logo"
                        src="images/Adoptail_logo.png" style="margin: 4% 16%;">
                </a>
                <div id="circle1">
                    <img src="images/circle1_login.svg" alt="">
                </div>
                <div id="circle2">
                    <img src="images/circle2_login.svg" alt="">
                </div>
                <div class="text-center centerTextAdoptail">
                    <img src="images\pet_in_home.svg" alt="" style="margin-bottom: 36%;margin-right: 4%;">
                    <p id="textJoinUs">Not only
                        People need
                        A
                        <span>House</span>
                        does
                        Our gentle
                        Friends too.
                    </p>
                </div>
                <div id="circle3">
                    <img src="images/circle3_login.svg" alt="">
                </div>
            </div>
            <div class="col-md-6 p-0">
                <form action="" method="POST" class="login-form" id="login-form">
                    <h1 id="signup-head" class="mb-4">Login</h1>

                    <!-- <div class="form-group">
                    <label for="email">Email ID</label>
                    <input type="email" name="email" id="email">
                </div> -->


                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="email" class="form-control form-control-lg" required="">
                        <label class="form-label" for="email" style="margin-left: 0px;">Email address</label>
                        <div class="form-notch">
                            <div class="form-notch-leading" style="width: 9px;"></div>
                            <div class="form-notch-middle" style="width: 90.4px;"></div>
                            <div class="form-notch-trailing"></div>
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="password" name="pass" class="form-control form-control-lg"
                            required="">
                        <img class="eye" id="eyeicon" src="images/eye-closed.png"
                            style="position: absolute;right: 10px;top: 13px;cursor:pointer;">
                        <label class="form-label" for="password">Password</label>

                        <div class="form-notch">
                            <div class="form-notch-leading" style="width: 9px;"></div>
                            <div class="form-notch-middle" style="width: 90.4px;"></div>
                            <div class="form-notch-trailing"></div>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="pass" id="password">
                </div> -->
                    <div class="form-submit">
                        <input type="submit" value="Login" class="submitbtn" name="submit" id="submit">
                    </div>
                    <div class="text-center">
                        <hr style=" width: 45%;margin-right: 2%;display: inline-block;margin: 0.3rem 0;">
                        or
                        <hr style="width: 45%;margin-left: 2%;display: inline-block; margin: 0.3rem 0;">
                    </div>
                    <div class="signup-with" style="/* margin-top: 23px; *//* margin-bottom: 23px; */margin: 5% 0%;">
                        <div class="text-center google-fb"
                            style="display: inline-block;border: #DAB3F2 1px solid;border-radius: 12px;padding: 2% 0%;cursor: pointer;/* margin-left: -2%; */width: 47%;">
                            <a class="text-decoration-none" name="" href="https://www.google.com" target="_blank"
                                id="googleText"><img src="images/googleIcon.png">
                                Login With
                                Google</a>
                        </div>
                        <div class="text-center google-fb"
                            style="border: #DAB3F2 1px solid;border-radius: 12px;padding: 2% 0%;cursor: pointer;/* margin-right: -2%; */width: 47%;display: inline-block;margin-left: 5%;">
                            <a class="text-decoration-none" href="https://www.facebook.com" target="_blank"
                                id="fbText"><img src="images/fbIcon.png"> Login With
                                Facebook</a>
                        </div>
                    </div>
                    <!-- <div class="row" style="margin-top: 23px;margin-bottom: 23px;">
                        <div class="col-md-6 text-center google-fb"
                            style="border: #DAB3F2 1px solid;border-radius: 25px;padding: 2% 0%;cursor: pointer;margin-left: -2%;">
                            <a class="text-decoration-none" name="" href="https://www.google.com" target="_blank"
                                id="googleText"><img src="images/googleIcon.png">
                                Join With
                                Google</a>
                        </div> -->
                    <!-- <div class="col-md-6 text-center ms-auto google-fb"
                            style="border: #DAB3F2 1px solid;border-radius: 25px;padding: 2% 0%;cursor: pointer;margin-right: -2%;">
                            <a class="text-decoration-none" href="https://www.facebook.com" target="_blank"
                                id="fbText"><img src="images/fbIcon.png"> Join With
                                Facebook</a>
                        </div> -->
                    <!-- </div> -->
                    <div class="text-center haveAccount">
                        <p class="m-0">Don't have an account? <a class="text-decoration-none" href="signup.php">Sign
                                Up
                                Now</a></p>
                        <div>
                            <div class="notNow text-center"><a class="text-decoration-none text-dark"
                                    href="index.php">Not Now</a></div>
                        </div>
                </form>

            </div>
        </div>

        <!-- </div> -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html> 
 
 
 
