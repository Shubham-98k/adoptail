<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account | Adoptail</title>
    <link rel="icon" href="images/pet.ico">
    <!-- Bootstrap CSS CDN LINKS -->
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

    <link rel="stylesheet" href="css/adopt.css">
    <link rel="stylesheet" href="css/rehome.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" href="css/mdb.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <script src="https://kit.fontawesome.com/037215761c.js" crossorigin="anonymous"></script> -->

</head>

<body>
    <?php include 'menu.php';
?>
    <section class="profileSidebar">
        <?php 
               error_reporting(0);

$sql = "SELECT * FROM userlogin WHERE username = '$_SESSION[user]'";

//Execute the Query
$res = mysqli_query($conn, $sql);

//Count Rows
$count = mysqli_num_rows($res);

//Check whether user available of not
if($count>0)
{
    //Food Available
    while($row=mysqli_fetch_assoc($res))
    {
        $id = $row['id'];
        $fname =$row['fname']; 
        $lname =$row['lname'];
        $username = $row['username'];
        $email = $row['email'];
        $address = $row['address'];
        $mobile = $row['mobile'];
        ?>
        <div class="container">
            <div class="row" style="padding-left:12px;">

                <div class="col-md-4 d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                    <div class="text-center mt-2">
                        <img src="images\user-icon.svg" alt="user-icon">
                        <!-- <i class="fa fa-user-circle fa-4x" aria-hidden="true"></i> -->
                        <h4 class="text-capitalize mt-2 mb-1 fw-bold"><?php echo $_SESSION['fname'] ?>
                            <?php echo $_SESSION['lname'] ?></h4>
                        <p class="fst-italic m-0"><?php echo  $username;?></p>
                    </div>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="userprofile.php" class="nav-link link-dark" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                Profile
                            </a>
                        </li>
                        <!-- <li>
                            <a href="adoptedpets.php" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                Adopted Pets
                            </a>
                        </li> -->

                        <li>
                            <a href="#adoptMenu" data-bs-toggle="collapse"
                                class="nav-link link-dark align-middle collapsed" style="position:relative;">
                                <!-- <i class="fs-4 bi-speedometer2"></i> -->
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#table"></use>
                                </svg><span class="ms-1 d-none d-sm-inline">Adopt</span><i class="fa fa-angle-down"
                                    style="position:absolute;right:20px;"></i>
                            </a>
                            <ul class="collapse nav flex-column ms-1" id="adoptMenu" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="adoptedpets.php" class="nav-link link-dark ">
                                        <span class="d-none d-sm-inline px-5">Adopted
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <!-- href= "rehomereq.php" -->
                                    <a href="adoptedreq.php" class="nav-link link-dark">
                                        <span class="d-none d-sm-inline px-5">Request</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#" class="nav-link link-dark active" style="background: #008977;">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#table"></use>
                                </svg>
                                Rehomed Pets
                            </a>
                        </li> -->
                        <li>
                            <a href="#rehomeMenu" data-bs-toggle="collapse" class="nav-link link-dark align-middle"
                                style="position:relative;">
                                <!-- <i class="fs-4 bi-speedometer2"></i> -->
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#table"></use>
                                </svg><span class="ms-1 d-none d-sm-inline">Rehome</span><i class="fa fa-angle-down"
                                    style="position:absolute;right:20px;"></i>
                            </a>
                            <ul class="collapse show nav flex-column ms-1" id="rehomeMenu" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="rehomedpets.php" class="nav-link link-dark active"
                                        style="background: #008977;"> <span class="d-none d-sm-inline px-5">Rehomed
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <!-- href= "rehomereq.php" -->
                                    <a href="rehomereq.php" class="nav-link link-dark"> <span
                                            class="d-none d-sm-inline px-5">Request</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#grid"></use>
                                </svg>
                                Close Account
                            </a>
                        </li>
                    </ul>
                    <hr>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class=" mb-4 ms-2">
                            <div class="petDetailsHead text-center" style="display: inline-block;">
                                <h4 class="mb-1">Completed</h4>
                                <div id="hr-bar3"
                                    style="background: linear-gradient(270deg, #00FFE0 -26.15%, #00A894 100%);height: 4px;">
                                </div>
                            </div>
                        </div>
                        <?php
                        
                        $us = $_SESSION['user'];
$query3 = "SELECT * FROM `rehome` WHERE `uname` = '$us'";
$q_run = mysqli_query($conn,$query3);
while($user_fetch = mysqli_fetch_assoc($q_run)){   
    $query31 = "SELECT * FROM `pets` WHERE `id` = '$user_fetch[pid]' AND `request` ='1' AND `urequest` != ''";
$q_run1 = mysqli_query($conn,$query31);
$pets = (mysqli_num_rows($q_run1) >= 0); 
if($pets){
    while($rows2 = mysqli_fetch_assoc($q_run1)){
    $ureq = $rows2['urequest'];
?>

                        <div class='col-md-4 col-lg-4 mb-4'>

                            <div class='card m-auto' style='width: 18rem;'>
                                <img class='card-img-top' style="background: #007D81;border-radius: 10px 10px 0 0;"
                                    src='<?php echo $rows2['image_name'];?>'>
                                <div class='card-body'>
                                    <div class="row">
                                        <div class="col-sm-12 card-text-upper text-white fw-bold"
                                            style="padding-right: 0;position:relative;margin-left: 8%;font-size: 12px;">
                                            <img src="images/FindPet/location.svg" alt=""
                                                style="position: absolute;top: 2px;left: -6px;">
                                            <?php echo $rows2['city'];?>
                                        </div>
                                        <!-- <div class="col-sm-10 card-text" style="padding-right: 0;">

                                    </div> -->

                                        <div class="col-sm-12 card-text-upper text-white fw-bold"
                                            style="padding-right: 0;position:relative;margin-left: 8%;font-size: 12px;">
                                            <?php
                                            if($rows2['gender'] == 'Male' || $rows2['gender'] == 'male')
                                            {
                                        ?>

                                            <img id="genderIcon" src="images/FindPet/male.svg" alt=""
                                                style="position: absolute;top: 2px;left: -6px;">

                                            <?php
                                            }
                                            else
                                            {
                                        ?>

                                            <img id="genderIcon" src="images/FindPet/female.svg" alt=""
                                                style="position: absolute;top: 2px;left: -6px;">

                                            <?php 
                                            }
                                        ?>

                                            <?php echo $rows2['gender'];?>, <?php echo $rows2['age'];?>
                                        </div>
                                        <div class="col-sm-4 card-text mt-3" style="padding-right: 0;">
                                            Name :
                                        </div>

                                        <div class="col-sm-8 card-text mt-3" style="padding-right: 0;">
                                            <?php echo $rows2['name'];?>
                                        </div>

                                        <div class="col-sm-4 card-text" style="padding-right: 0;">
                                            Breed :
                                        </div>

                                        <div class="col-sm-8 card-text" style="padding-right: 0;">
                                            <?php echo $rows2['breed'];?>
                                        </div>

                                        <div class="col-sm-12 fw-bold text-white mt-2" style="padding-right: 0;">
                                            Adopter's Detail:
                                        </div>
                                        <?php
                                            $qt = "SELECT * FROM userlogin WHERE username = '$ureq'
                                            ";
                                            $res5t = mysqli_query($conn, $qt);
                                            $user_fetcht=mysqli_fetch_assoc($res5t);
                                            $fn = $user_fetcht['fname'];
                                            $ln = $user_fetcht['lname'];
                                            $c = $user_fetcht['mobile'];
                                            $ad = $user_fetcht['address'];
                                            ?>

                                        <div class="col-sm-4 card-text" style="padding-right: 0;">
                                            Name :
                                        </div>

                                        <div class="col-sm-8 card-text " style="padding-right: 0;">
                                            <?php echo $fn;?>
                                        </div>

                                        <div class="col-sm-4 card-text" style="padding-right: 0;">
                                            Mobile:
                                        </div>

                                        <div class="col-sm-8 card-text" style="padding-right: 0;">
                                            <?php echo $c;?>
                                        </div>

                                        <!-- <div>

                                            <label>Adoption Request From:</label>
                                            <div class="text-white mb-1"></div>
                                            <div class="text-white mb-1"></div>
                                            <div class="text-white mb-1"></div>

                                        </div> -->
                                    </div>

                                </div>
                            </div>
                            <?php
        }
  
      }
      else
      {
        echo "<h5 class='ms-2'>No Rehomed Yet! Rehome a Pet Now</h5>";
    }
}

?>
                            <div class=" mb-4 ms-2 mt-4">
                                <div class="petDetailsHead text-center" style="display: inline-block;">
                                    <h4 class="mb-1">Pending</h4>
                                    <div id="hr-bar3"
                                        style="background: linear-gradient(270deg, #00FFE0 -26.15%, #00A894 100%);height: 4px;">
                                    </div>
                                </div>
                            </div>

                            <?php
                $us = $_SESSION['user'];
$query3 = "SELECT * FROM `rehome` WHERE `uname` = '$us'";
$q_run = mysqli_query($conn,$query3);
while($user_fetch=mysqli_fetch_assoc($q_run)){  

$query31 = "SELECT * FROM `pets` WHERE `id` = '$user_fetch[pid]' AND `request` ='0'  AND `userid` = '$us' ";
$q_run1 = mysqli_query($conn,$query31);

$pets = mysqli_num_rows($q_run1) >= 0; 
if($pets){
while($rows2 = mysqli_fetch_assoc($q_run1)){

?>

                            <div class='col-md-4 col-lg-4 mb-4'>
                                <form action='rehomedel.php' method='POST'>
                                    <div class='card m-auto' style='width: 18rem;'>
                                        <img class='card-img-top'
                                            style="background: #007D81;border-radius: 10px 10px 0 0;"
                                            src='<?php echo $rows2['image_name'];?>'>
                                        <div class='card-body'>
                                            <div class="row">
                                                <div class="col-sm-12 card-text-upper text-white fw-bold"
                                                    style="padding-right: 0;position:relative;margin-left: 8%;font-size: 12px;">
                                                    <img src="images/FindPet/location.svg" alt=""
                                                        style="position: absolute;top: 2px;left: -6px;">
                                                    <?php echo $rows2['city'];?>
                                                </div>
                                                <!-- <div class="col-sm-10 card-text" style="padding-right: 0;">

                            </div> -->

                                                <div class="col-sm-12 card-text-upper text-white fw-bold"
                                                    style="padding-right: 0;position:relative;margin-left: 8%;font-size: 12px;">
                                                    <?php
                                    if($rows2['gender'] == 'Male' || $rows2['gender'] == 'male')
                                    {
                                ?>

                                                    <img id="genderIcon" src="images/FindPet/male.svg" alt=""
                                                        style="position: absolute;top: 2px;left: -6px;">

                                                    <?php
                                    }
                                    else
                                    {
                                ?>

                                                    <img id="genderIcon" src="images/FindPet/female.svg" alt=""
                                                        style="position: absolute;top: 2px;left: -6px;">

                                                    <?php 
                                    }
                                ?>

                                                    <?php echo $rows2['gender'];?>, <?php echo $rows2['age'];?>
                                                </div>
                                                <div class="col-sm-4 card-text mt-3" style="padding-right: 0;">
                                                    Name :
                                                </div>

                                                <div class="col-sm-8 card-text mt-3" style="padding-right: 0;">
                                                    <?php echo $rows2['name'];?>
                                                </div>

                                                <div class="col-sm-4 card-text " style="padding-right: 0;">
                                                    Breed :
                                                </div>

                                                <div class="col-sm-8 card-text " style="padding-right: 0;">
                                                    <?php echo $rows2['breed'];?>
                                                </div>
                                                <div>

                                                    <input type="hidden" name="urequest"
                                                        value="<?php echo $rows2['urequest']; ?>" />
                                                    <input type="hidden" name="id"
                                                        value="<?php echo $user_fetch['pid']; ?>" />
                                                </div>
                                                <div class="mt-2">
                                                    <input type="submit" class="btn submit fw-bold w-100"
                                                        id="btn-delete" name="delete" value="Remove">
                                                    <!-- style="background-color:#00523E;" -->
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                        <?php
}

}

else
{
    echo "<div><h5 class='ms-2'>No Pending Pet(s) for Rehome</h5></div>";
}

}

?>

                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        }
        else
        {
        //Food Not Available
            
        }

        ?>


    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/rehome.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>

</html> 
 
 
