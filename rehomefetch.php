<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details | Rehome </title>
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

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/rehome.css">
    <!-- <link rel="stylesheet" href="css/mdb.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <script src="https://kit.fontawesome.com/037215761c.js" crossorigin="anonymous"></script> -->

</head>

<body>
    <?php include 'menu.php'?>

    <?php
if(isset($_POST['submit']))
{
    $age = $_POST['age'];
    $adesc = $_POST['adesc'];
    $ddesc = $_POST['ddesc'];
    $status = $_POST['status'];
    $spray = $_POST['spray'];
    $vac = $_POST['vaccinated'];
    $name = $_POST['name'];
    $type= $_POST['category'];
    $breed= $_POST['breed'];
    $gender= $_POST['gender'];
    
    
    $img_loc=$_FILES['image']['tmp_name'];
    $img_name=$_FILES['image']['name'];
   
    $img_ext=pathinfo($img_name,PATHINFO_EXTENSION);
    $img_des="images/pet/".$name.".".$img_ext;
    move_uploaded_file($img_loc,$img_des);

    


    $sql2 = "INSERT INTO `pets`( `image_name`, `name`, `breed`, `gender`, `age`, `category`, `userid`, `vaccinated`, `sprayed`,  `adesc`, `ddesc`,`status`) VALUES ('$img_des','$name','$breed','$gender','$age','$type','$_SESSION[user]','$vac','$spray','$adesc','$ddesc','$status')";

    $res2 = mysqli_query($conn, $sql2);

    $q = "SELECT * FROM pets WHERE name = '$name' AND userid = '$_SESSION[user]' ";
    $res5 = mysqli_query($conn, $q);
    $user_fetch=mysqli_fetch_assoc($res5);
    $id = $user_fetch['id'];
   

}
?>

    <section class="rehomeForm mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ms-auto me-auto">
                    <div class="mb-4">
                        <div class="petDetailsHead text-center" style="display: inline-block;">
                            <h4 class="mb-1">Personal Details</h4>
                            <div id="hr-bar3"
                                style="background: linear-gradient(270deg, #00FFE0 -26.15%, #00A894 100%);height: 4px;">
                            </div>
                        </div>
                    </div>
                    <form action="" id="personal_details" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="fullname">Your Name</label>
                                    <input type="text" id="fullname" name="fullname" placeholder="Enter your name"
                                        class="form-control form-control-lg" required="" autocomplete="off" style="">
                                </div>
                            </div>

                            <div class="col-sm-12 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="name">Mobile Number</label>
                                    <input type="tel" pattern="[0-9]{10}" maxlength="10" id="name" name="number"
                                        placeholder="Enter your mobile number" class="form-control form-control-lg"
                                        required="" autocomplete="off" style="">
                                </div>
                            </div>

                            <div class="col-sm-12 mb-4">
                                <label for="state" class="mb-1">Your State</label><br>

                                <select id="stateSelect" name="state" style="width:100%;"
                                    onchange="makeSubmenu(this.value)" required>
                                    <option value="" disabled selected>Choose State/UT</option>
                                    <option>AndhraPradesh</option>
                                    <option>Assam</option>
                                    <option>Bihar</option>
                                    <option>Chhattisgarh</option>
                                    <option>Delhi</option>
                                    <option>Goa</option>
                                    <option>Gujarat</option>
                                    <option>Haryana</option>
                                    <option>Jharkhand</option>
                                    <option>Kerala</option>
                                    <option>Maharashtra</option>
                                    <option>Manipur</option>

                                </select>

                            </div>

                            <div class="col-sm-12 mb-4">
                                <label for="state" class="mb-1">Your City</label><br>
                                <!-- <select name="state" id="stateInput" style="width:100%;appearance:default;" required> -->
                                <!-- <option value=""> ------ Select Breed ------</option> -->
                                <select id="citySelect" name="city" style="width:100%;" required>
                                    <option value="" disabled selected>Choose City/Town</option>
                                    <option></option>
                                </select>
                                <!-- </select> -->
                            </div>
                            <div class="col-sm-12 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                        required="">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree to the Terms and Conditions of Adoptail. You can be contacted through
                                        call or
                                        whatsapp.
                                    </label>
                                </div>
                            </div>
                            <!-- <div class="col-sm-2 ms-auto text-center mb-5">
                                <button class="btn btn-success submit fw-bold w-100"
                                    style="background-color:#00523E;">Finish</button>
                            </div> -->
                            <input type='hidden' name='id' value='<?php echo $id; ?>' />
                            <div class="col-sm-2 ms-auto text-center mb-5">
                                <input id="finishBtn" type="submit" name="finish"
                                    class="btn btn-success submit fw-bold w-100" style="background-color:#00523E;"
                                    value="Finish">
                            </div>


                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <?php 
if(isset($_POST['finish']))
{
    //Add the Food in Database
    $pid = $_POST['id'];
    $number = $_POST['number'];
   
    $state= $_POST['state'];
    $city= $_POST['city'];
    $hname= $_POST['fullname'];
    

   
  
    $sql3 = "INSERT INTO `rehome`(`pid`, `uname`,`oname`,`number`) VALUES ('$pid','$_SESSION[user]','$hname','$number')";
    $res3 = mysqli_query($conn, $sql3);

    $sql13="UPDATE `pets` SET  `city`= '$city' WHERE userid ='$_SESSION[user]' AND id = '$pid' ";
    mysqli_query($conn,$sql13);
    $sql13="UPDATE `pets` SET  `state`= '$state' WHERE userid ='$_SESSION[user]' AND id = '$pid' ";
    mysqli_query($conn,$sql13);
    $sql13="UPDATE `pets` SET  `owner`= '$_SESSION[user]' WHERE userid ='$_SESSION[user]' AND id = '$pid' ";
    mysqli_query($conn,$sql13);

        echo "<script type='text/javascript'>window.location.href='rehomeCongratulation.php'</script>";

}
?>
    <?php include 'footer.php';?>


    <!-- All Js Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script type="text/javascript">
    var citiesByState = {
        AndhraPradesh: ["Visakhapatnam", "Vijayawada", "Guntur", "Nellore"],
        Assam: ["Guwahati", "Tezpur", "Dibrugarh", "Silchar"],
        Bihar: ["Gaya", "Darbhanga ", "Biharsharif", "Bhagalpur"],
        Chhattisgarh: ["Bilaspur", "Korba", "Raigarh ", "Rajnandgaon"],
        Goa: ["Vasco-da-Gama", "Ponda", "Margao", "Mapusa", "Goa Velha"],
        Gujarat: ["Ahmedabad", "Surat", "Rajkot", "Junagadh", "Vadodara"],
        Haryana: ["Faridabad", "Gurgaon", "Sonipat", "Panipat", "Ambala"],
        Jharkhand: ["Bokaro Steel City", "Jamshedpur", "Deoghar", "Hazaribagh"],
        Kerala: ["Kochi", "Kozhikode", "Thrissur", "Malappuram"],
        Maharashtra: ["Pune", "Nagpur", "Nashik", "Aurangabad"],
        Manipur: ["Bishnupur", "Ukhrul", "Tamenglong", "Chandel", "Senapati"],
        Delhi: ["Burari", "Dallopura", "Kondli"]

    }

    function makeSubmenu(value) {
        if (value.length == 0) document.getElementById("citySelect").innerHTML = "<option></option>";
        else {
            var citiesOptions = "";
            for (cityId in citiesByState[value]) {
                citiesOptions += "<option>" + citiesByState[value][cityId] + "</option>";
            }
            document.getElementById("citySelect").innerHTML = citiesOptions;
        }
    }

    // function displaySelected() {
    //     var state = document.getElementById("stateSelect").value;
    //     var city = document.getElementById("citySelect").value;
    //     alert(state + "\n" + city);
    // }

    // function resetSelection() {
    //     document.getElementById("stateSelect").selectedIndex = 0;
    //     document.getElementById("citySelect").selectedIndex = 0;
    // }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/rehome.js"></script>

    <script type="text/javascript" src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html> 
 
 
 
 
