<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoptail | Tale of Adoption</title>
    <link rel="icon" href="images/pet.ico">
    <!-- Bootstrap CSS CDN LINKS -->
    <style>
    /*Poppins Font*/
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,200;1,300;1,400&display=swap');

    /*Inter Font*/
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    /* Leckerli One Font */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Leckerli+One&display=swap');
    </style>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <script src="https://kit.fontawesome.com/037215761c.js" crossorigin="anonymous"></script> -->
</head>

<body style="overflow-x: hidden;">
    <?php include 'menu.php';?>
    <div class="container ">
        <section class="heroSection">
            <div class="heroDiv">
                <h1 class="heroContent mb-0">Rescue. Adopt. Love.</h1>
                <h1 class="heroContent mb-0">Be a <span id="hero">Hero</span></h1>
                <h1 class="heroContent mb-4">For Shelter Pets.</h1>
                <p class="hero-p">Give hope a Home:<br>
                    Embrace adoption and Transform a<br>
                    Rescue into a Beloved Companion!</p>
                <!-- <button type="button" class="btn btn-outline-dark me-2"><a class="text-black text-decoration-none"
                        id="login-a" href="login.php">Login</a></button> -->
                <button type="button" class="btn" id="adoptbtn"
                    style="background: #00A892;border: 4px solid #00A892;border-radius: 6px;"><a
                        class="text-white text-decoration-none" href="adopt.php">Adopt Today</a></button>
            </div>
            <img class="heroImg" alt="Cat & Dog" src="images/hero-img.png">
            <section>
                <!-- <div class="heroImgDiv"> -->
                <!-- </div> -->
    </div>
    <section id="coreVision" style="background-image: url(images/bg-img.png); background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7" id="ourCoreVisionDiv">
                    <h1 id="coreVisionText" class="text-center pt-5">OUR CORE VISION</h1>
                    <p class="mt-4"
                        style="line-height: 2;font-family: 'Inter';font-size: 18px;font-weight: 600;text-align: center;text-align: justify;padding: 2% 10%;">
                        Our core vision is to connect people with their perfect pets, promote
                        responsible pet ownership, and eliminate animal homelessness. It provides a user-friendly
                        platform for adopting animals, educates about the benefits of adoption and proper care, and
                        advocates for animal welfare. The website aims to make the adoption process transparent and
                        enjoyable while fostering a supportive community. It celebrates successful adoption stories to
                        inspire others and create a world where every animal finds a loving home.</p>

                </div>
                <div class="col-lg-4 ms-auto image img-responsive" style="margin: 6%  0;">
                    <img class="" src="images/index/coreVision.svg" style="padding-left: 0px;">
                </div>

            </div>
        </div>

    </section>

    <section id="adoptionAwareness">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ms-auto image img-responsive" style="margin: 6%  0;">
                    <img class="" src="images/index/beforeAdopt1.svg" style="padding-left: 0px;">
                </div>
                <div class="col-lg-8" id="beforeAdoptDiv"
                    style="background-image: url(images/Rectangle_35.png); background-size: cover;">
                    <h1 id="beforeAdoptText" class="text-center pt-5">BEFORE YOU ADOPT</h1>
                    <p class="mt-4"
                        style="color:white; line-height: 2;font-family: 'Inter';font-size: 18px;font-weight: 600;text-align: center;text-align: justify;padding: 2% 10%;">
                        Caring for a companion animal goes far beyond
                        providing food, water and shelter. It takes planning to
                        bring the right pet into your home, and to make sure
                        your lifestyle is the right one for your pet.</p>

                    <p class="mb-5"
                        style="color:white; line-height: 2;font-family: 'Inter';font-size: 18px;font-weight: 600;text-align: center;text-align: justify;padding-left: 10%;padding-right: 10%;">
                        Ensure you have the time, resources, and love to
                        provide a forever home. Remember, adopting a pet is a
                        lifelong commitment that brings immeasurable joy and
                        responsibility.</p>
                </div>


            </div>
        </div>

    </section>

    <section id="whyChooseAdoption" style="background-image: url(images/bg-img.png); background-size: cover;">
        <div class="container">
            <div class="row">
                <h1 id="chooseAdoptionHeading" class="text-center"> WHY YOU SHOULD CHOOSE ADOPTION </h1>
                <div class="col-lg-4 col-md-6" id="chooseAdoptionDiv">

                    <h4 id="chooseAdoptionText" class="pt-5">PET IMPROVES YOUR MOOD</h4>
                    <p class="mt-3 mb-0">
                        According to studies, spending time with your pet can trigger an increased level of oxytocin,
                        also known as the “love hormone”</p>
                    <h4 id="chooseAdoptionText" class="pt-5">PET IMPROVES YOUR SOCIAL LIFE</h4>
                    <p class="mt-3 mb-0">
                        Pet owners were significantly more likely to get to know people in their neighborhood than those
                        who did not own a pet.</p>
                    <h4 id="chooseAdoptionText" class="pt-5">PET MAKES YOU A BETTER PERSON</h4>
                    <p class="mt-3 mb-0">
                        According to a study by BarkBox, owning a dog can make you a better person (or at least make you
                        think you are!). Of those surveyed for the study, 93% of pet owners said they make them
                        noticeably more patient or affectionate</p>
                </div>
                <div class="col-lg-4 col-md-6" id="chooseAdoptionDiv">
                    <h4 id="chooseAdoptionText" class="pt-5">PET MAKE YOU FEEL MORE SECURE</h4>
                    <p class="mt-3 mb-0">
                        Large dog breeds like German shepherds and Rottweilers make for great deterrents from outside
                        threats, allowing their owners to feel safer.</p>
                    <h4 id="chooseAdoptionText" class="pt-5">PET IMPROVES PHYSICAL ACTIVITY</h4>
                    <p class="mt-3 mb-0">
                        Taking your dog for a walk also makes you more physically fit and increases the chance you're
                        going to get your daily exercise</p>
                    <h4 id="chooseAdoptionText" class="pt-5">PET MAKES YOU KIND</h4>
                    <p class="mt-3 mb-0">
                        Children growing up with a pet do so with more empathy towards animals and more empathy in
                        general.</p>
                </div>
                <div class="col-lg-4 ms-auto image img-responsive" style="margin: 5%  0;">
                    <img class="ms-5" src="images/index/whyChooseAdoption.svg" style="padding-left: 0px;">
                </div>

            </div>
        </div>
    </section>

    <section id="adoptionProcess">
        <div class="container">
            <div class="row">
                <h1 id="adoptionProcessHeading" class="text-center">ADOPTION PROCESS</h1>
                <div class="text-center m-4">
                    <p id="textUnderHeading">We have made the meeting process as comfortable as possible
                        for owners and their future pets</p>
                </div>
                <div class="feature-box col-lg-4" id="">
                    <div id="adoptionIcon" class="text-center">
                        <img class="mb-3" id="icon1" src="images/icon1.png" alt="">
                    </div>
                    <h4 id="" class="feature-box_head text-center">Browse our available pets</h4>
                    <p class="feature-box_para mt-3 mb-0 text-center">
                        Go through out available pets and
                        submit the Adoption request</p>
                </div>
                <div class="feature-box  col-lg-4" id="">
                    <div id="adoptionIcon" class="text-center">
                        <img class="mb-3" id="icon2" src="images/icon2.png" alt="">
                    </div>
                    <h4 id="" class="feature-box_head text-center">Meet & Greet</h4>
                    <p class="feature-box_para mt-3 mb-0 text-center">
                        Determine if the pet is a good match
                        by meeting in person</p>
                </div>
                <div class="feature-box col-lg-4">
                    <div id="adoptionIcon" class="text-center">
                        <img class="mb-3" id="icon3" src="images/icon3.png" alt="">
                    </div>
                    <h4 id="" class="feature-box_head text-center">Finalize the adoption</h4>
                    <p class="feature-box_para mt-3 mb-0  text-center">
                        Complete some required paper works
                        and get a new Furry Friend</p>
                </div>
                <div class="text-center" style="margin-bottom: 5%;">
                    <p class="" style="color:#256a62;">With just following these super simple steps you will be
                        able to find the best selection for you.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="whoWeAre" style="background-image: url(images/WHO_WE_ARE-bg.png); background-size: cover;">
        <div class="container">
            <div class="row">
                <h1 id="whoWeAreHeading" class="text-center">WHO WE ARE?</h1>
                <div class="col-lg-8 col-md-8" id="whoWeAreDiv">

                    <h3 class="pt-5" style="color:#fff;">Welcome to <span class="textAdoptail">Adoptail</span>, a
                        platform dedicated to helping shelters and rescue organizations find loving
                        homes for their sheltered pets.
                    </h3>
                    <div class="mt-3 mb-0" style="padding-right: 20%;">
                        <p class="">
                            We understand the joy and fulfillment that comes from bringing a furry companion into your
                            life,
                            and our mission is to facilitate the process of pet adoption, making it an enjoyable and
                            seamless experience for both adopters and shelters.</p>
                    </div>

                    <div class="" style="margin-top: 7%;">
                        <h5 class="weOffer">WHAT WE OFFER -</h5>
                        <div class="row">
                            <div id="weOffer1" class="col-lg-6">
                                <img src="images/Group 172.svg" alt="booking" style="">
                                <p id="appointmentText" class="weOfferText"> Appointment Booking</p>
                            </div>

                            <div id="weOffer2" class="col-lg-6">
                                <img src="images/Vector.svg" alt="list">
                                <p class="weOfferText" id=""> Extensive Pet Listings</p>
                            </div>

                            <br>
                            <div id="weOffer3" class="col-lg-6">
                                <img src="images/Group 170.svg" alt="booking">
                                <p id="rehomeText" class="weOfferText"> Re-Home Program</p>
                            </div>

                            <div id="weOffer4" class="col-lg-6">
                                <img src="images/Untitled design (3) 1.svg" alt="booking">
                                <p id="safeTransitionText" class="weOfferText"> Safe Transition</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 ms-auto img-responsive text-center" style="margin-bottom: 5%;">
                    <img class="" src="images/index/whoWeAre.svg" style="padding-left: 10px;width: 95%;">
                </div>

            </div>
        </div>
    </section>

    <section id="helpSection">
        <div class="container">
            <div class="row">
                <h1 id="helpHeading" class="text-center">HOW YOU CAN HELP?</h1>
                <div class="col-md-12" id="donateDiv"
                    style="background-image: url(images/donate_us-bg.png); background-size: cover;">
                    <h3 id="donateUsText" class="text-center pt-5">DONATE US</h3>
                    <p class="mt-4 mb-4">
                        Your valuable donations can make a significant difference in the lives of sheltered pets. By
                        contributing funds, you directly support the shelters and rescue organizations in their efforts
                        to provide proper care, medical treatment, and essential resources for the pets in their care.
                    </p>
                    <div class="row mb-5">
                        <div class="col-sm-12" style="padding: 0% 9%;">
                            <button type="button" class="btn fw-bold text-white" data-bs-toggle="modal"
                                data-bs-target="#empModal" style="border:1px solid #fff; border-radius:6px;">
                                Donate Now
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="empModal" role="dialog" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header" style="display:none;">
                                        <!-- <h4 class="modal-title" id="exampleModalLabel">User Info
                                                            </h4> -->
                                        <h5 class="modal-title fw-bold" id="exampleModalLabel">Donate</h5>

                                    </div>
                                    <div class="modal-body p-0">
                                        <img src="images/index/Donate_Modal2.svg" alt="Donation Details" class="">
                                    </div>
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="btn fw-bold" id="modal_btn-close"
                                            data-bs-dismiss="modal">Close</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 ms-auto" id="volunteerDiv"
                    style="background-image: url(images/volunteer-bg.png); background-size: cover;">
                    <h3 id="volunteerText" class="text-center pt-5">VOLUNTEER</h3>
                    <p class="mt-4 mb-4">
                        We encourage you to participate in our volunteering program. Whether it's walking dogs,
                        socializing cats, or assisting with administrative tasks, your time and skills can greatly
                        benefit the shelters and create a positive impact on the lives of the sheltered pets.</p>
                    <div class="row mb-5">
                        <div class="col-sm-12" style="padding: 0% 9%;">
                            <button type="button" class="btn fw-bold text-white" data-bs-toggle="modal"
                                data-bs-target="#empModal2" style="border:1px solid #fff; border-radius:6px;">
                                Become a Volunteer
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="empModal2" role="dialog" tabindex="-1"
                            aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header" style="display:none;">
                                        <!-- <h4 class="modal-title" id="exampleModalLabel">User Info
                                                            </h4> -->
                                        <h5 class="modal-title fw-bold" id="exampleModalLabel2">Volunteer</h5>

                                    </div>
                                    <div class="modal-body p-0">
                                        <img src="images/index/Volunteer_Modal2.svg" alt="Volunteer Details"
                                            style="position:relative;">
                                        <a href="" style="position: absolute;bottom: 12%;left: 32%;"><img
                                                src="images/index/volunteer_btn.svg" alt=""></a>
                                    </div>
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="btn fw-bold" id="modal_btn-close"
                                            data-bs-dismiss="modal">Close</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include 'footer.php';?>
    <!-- Bootstrap Js Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/index.js"></script>
</body>

</html>

<!-- Gradient border Without border radius
    
    border: 5px solid green;
    border-image: linear-gradient(165deg, #68E7D9, #007787B2);
    border-image-slice: 1; -->

<!-- Gradient border With border radius 
        
    border: 5px solid transparent;
    border-radius: 15px;
    background-image: linear-gradient(white,white), linear-gradient(165deg, #68E7D9, #007787B2);
    background-origin: border-box;
    background-clip: content-box,border-box;
    padding-right: 0px;
    padding-left: 0px; --> 
