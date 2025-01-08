<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt a Furry Pet</title>
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
    <section class="findPetHeader">
        <div class="container mt-4 mb-5">
            <h2 class="text-center ">Explore Our Diverse Selection of Adoptable Pets.</h2>
            <p class="text-center">Use filters to customize your search.<span>Start your adoption journey today</span>
            </p>
        </div>
    </section>
    <section class="filter">
        <div class="container">
            <div class="filterBorder"
                style="background-image: url(images/FindPet/filter-bg.svg); background-size: cover;">
                <img src="images/FindPet/dog_bone.svg" alt="" class="bone"
                    style="position: absolute;right: 0px;bottom: 0;">
                <form action="" method="POST">
                    <div id="filters">

                        <label for="dog" class="dog-label margin">
                            <input id="dog" type="radio" name="select" value="dog">
                            <img class="img" id="img-dog" src="images\FindPet\dog_notSelected.svg">
                            <!-- <p class="fw-bold text-center text-white m-0 pt-2">DOGS</p> -->
                        </label>
                        <label for="cat" class="cat-label margin">
                            <input id="cat" type="radio" name="select" value="cat">
                            <img class="img" id="img-cat" src="images\FindPet\cat_notSelected.svg" alt="">
                            <!-- <p class="fw-bold text-center text-white m-0 pt-2">CATS</p> -->
                        </label>
                        <!-- <input id="submitFilter" type="submit" name="submit"> -->
                        <label class="breed-label text-white" for="breed" style="top: -25px;left: 50px;">Breed</label>
                        <select name="breed" id="breed" style="position: relative;top: 15px;bottom: 0;">
                            <option value="">Any</option>
                            <optgroup label="Cats" class="cat-option">
                                <option value="Abyssinian">Abyssinian</option>
                                <option value="Bengal">Bengal</option>
                                <option value="Himalayan">Himalayan</option>
                                <option value="Persian">Persian</option>
                                <option value="Russian Blue">Russian Blue</option>
                                <option value="Scottish Fold">Scottish Fold</option>
                                <option value="Siamese">Siamese</option>
                                <option value="Somali">Somali</option>
                            </optgroup>
                            <optgroup label="Dogs" class="dog-option">
                                <option value="Beagle">Beagle</option>
                                <option value="Boxer">Boxer</option>
                                <option value="Cocker Spaniel">Cocker Spaniel</option>
                                <option value="Dachshund">Dachshund</option>
                                <option value="German shepherd">German shepherd</option>
                                <option value="Labrador retriever">Labrador retriever</option>
                                <option value="Pug">Pug</option>
                                <option value="Shih Tzu">Shih Tzu</option>
                            </optgroup>
                        </select>

                        <label class="gender-label text-white" for="gender"
                            style="top: -25px;left: 60px;">Gender</label>
                        <select name="gender" id="gender"
                            style="position: relative;top: 15px;bottom: 0;margin-right:2%;">
                            <option value="">Any</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>

                        <label class="age-label text-white" for="age" style="top: -25px;left: 40px;">Age</label>
                        <select name="age" id="age" style="position: relative;top: 15px;bottom: 0;">
                            <option value="">Any</option>
                            <option value="Puppyhood">Puppyhood (Upto 6 months)</option>
                            <option value="Adolescence">Adolescence (6-18 months)</option>
                            <option value="Adulthood">Adulthood (1.5-3 years)</option>
                            <option value="Senior">Senior(3 years or more)</option>
                        </select>

                        <input id="submitFilter" type="submit" name="submit" value="Filter"
                            style="position: absolute;top: 68px;right: 45px;padding: 10px 30px;">
                    </div>

                </form>
            </div>
        </div>
    </section>
    <section class="petCards">
        <div class="container mt-5">
            <!-- <div class="col-md-12"> -->
            <div class="row">
                <?php

if(isset($_POST['submit'])){
    $n = $_POST['select'];
    $g = $_POST['gender'];
    $b = $_POST['breed'];
    $a = $_POST['age'];
    if(!empty($_POST['select']) && empty($_POST['gender']) && empty($_POST['breed']) && empty($_POST['age'])){
        $query3 = "SELECT * FROM pets WHERE category = '$_POST[select]' AND status = '0' ";
    }
    

    elseif(!empty($_POST['select']) && empty($_POST['gender']) && !empty($_POST['breed']) && empty($_POST['age'])){
        $query3 = "SELECT * FROM pets WHERE category = '$_POST[select]' AND breed = '$b' AND status = '0'";
    }

    elseif(!empty($_POST['select']) && !empty($_POST['gender']) && empty($_POST['breed']) && empty($_POST['age'])){
        $query3 = "SELECT * FROM pets WHERE category = '$_POST[select]' AND gender = '$g' AND status = '0'";
    }

    elseif(!empty($_POST['select']) && empty($_POST['gender']) && empty($_POST['breed']) && !empty($_POST['age'])){
        $query3 = "SELECT * FROM pets WHERE category = '$_POST[select]' AND age = '$a' AND status = '0'";
    }
    
    elseif(!empty($_POST['select']) && !empty($_POST['gender'])  && !empty($_POST['breed']) && empty($_POST['age'])){
        $query3 = "SELECT * FROM pets WHERE category = '$_POST[select]' AND gender = '$g' AND breed = '$b' AND status = '0'";
    }

    elseif(!empty($_POST['select']) && !empty($_POST['gender'])  && empty($_POST['breed']) && !empty($_POST['age'])){
        $query3 = "SELECT * FROM pets WHERE category = '$_POST[select]' AND gender = '$g' AND age = '$a' AND status = '0'";
    }

    elseif(!empty($_POST['select']) && empty($_POST['gender'])  && !empty($_POST['breed']) && !empty($_POST['age'])){
        $query3 = "SELECT * FROM pets WHERE category = '$_POST[select]' AND breed = '$b' AND age = '$a' AND status = '0'";
    }

    elseif(!empty($_POST['select']) && !empty($_POST['gender'])  && !empty($_POST['breed']) && !empty($_POST['age'])){

        $query3 = "SELECT * FROM pets WHERE category = '$_POST[select]' AND gender = '$g' AND breed = '$b' AND age = '$a' AND status = '0'";
    }
    else{
        echo "<script type='text/javascript'>window.onload=function(){location.replace('adopt.php')}</script>";
    }
    $q_run = mysqli_query($conn,$query3);
    $pets = mysqli_num_rows($q_run) > 0; 
    if($pets){
        while($rows = mysqli_fetch_array($q_run))
        {
           ?>
                <div class='col-md-4 col-lg-3 mb-4'>
                    <form action='fetch.php' method='POST'>
                        <div class='card m-auto' style='width: 18rem;'>
                            <img class='card-img-top' style="background: #007D81;border-radius: 10px 10px 0 0;"
                                src='<?php echo $rows['image_name'];?>'>
                            <div class='card-body'>
                                <div class="row">
                                    <div class="col-sm-12 card-text-upper text-white fw-bold"
                                        style="padding-right: 0;position:relative;margin-left: 8%;font-size: 12px;">
                                        <img src="images/FindPet/location.svg" alt=""
                                            style="position: absolute;top: 2px;left: -6px;">
                                        <?php echo $rows['city'];?>
                                    </div>
                                    <!-- <div class="col-sm-10 card-text" style="padding-right: 0;">

                                    </div> -->

                                    <div class="col-sm-12 card-text-upper text-white fw-bold"
                                        style="padding-right: 0;position:relative;margin-left: 8%;font-size: 12px;">
                                        <?php
                                            if($rows['gender'] == 'Male' || $rows['gender'] == 'male')
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
                                        <?php echo $rows['gender'];?>, <?php echo $rows['age'];?>
                                    </div>
                                    <div class="col-sm-4 card-text mt-3" style="padding-right: 0;">
                                        Name :
                                    </div>

                                    <div class="col-sm-8 card-text mt-3" style="padding-right: 0;">
                                        <?php echo $rows['name'];?>
                                    </div>

                                    <div class="col-sm-4 card-text" style="padding-right: 0;">
                                        Breed :
                                    </div>

                                    <div class="col-sm-8 card-text" style="padding-right: 0;">
                                        <?php echo $rows['breed'];?>
                                    </div>
                                    <div class="col-md-12 mt-3 mb-2 p-0 ">

                                        <div class="row ms-1 me-1">

                                            <!-- Button trigger modal -->
                                            <div class="col-md-6 ps-2">
                                                <a type="button" data-id="<?php echo $rows['id']; ?>"
                                                    class="userinfo btn btn-success fw-bold" id="btn-detail"
                                                    data-bs-toggle="modal" data-bs-target="#details-modal">Detail</a>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="empModal" role="dialog" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <!-- <h4 class="modal-title" id="exampleModalLabel">User Info</h4> -->
                                                            <h5 class="modal-title fw-bold" id="exampleModalLabel">
                                                                Pet
                                                                Detail
                                                            </h5>

                                                        </div>
                                                        <div class="modal-body">

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn fw-bold"
                                                                id="modal_btn-close"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <input type='hidden' name='id' value='<?php echo $id; ?>' />
                                                <?php echo '<a type="button" class="btn fw-bold" id="btn-adopt" href="fetch.php?id='.$rows['id'].' ">Adopt</a>  '; ?>
                                            </div>
                                        </div>
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
        echo "<div class='text-center mb-5'><h5>No Record Available</h5></div>";
    }
}

?>
            <!-- </div> -->
        </div>
        </div>
    </section>
    <?php include 'footer.php';?>
    <!-- Bootstrap Js Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type='text/javascript'>
    $(document).ready(function() {
        $('.userinfo').click(function() {
            var userid = $(this).data('id');
            // alert(userid);
            $.ajax({
                url: 'popupdetail.php',
                type: 'post',
                data: {
                    userid: userid
                },
                success: function(response) {
                    $('.modal-body').html(response);
                    $('#empModal').modal('show');
                }
            });
        });
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/filter.js"></script>

    <script type="text/javascript" src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html>