<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover | Awareness by Adoptail</title>
    <link rel="icon" href="images/pet.ico">
    <!-- Bootstrap CSS CDN LINKS -->
    <style>
    @media only screen and (min-width: 1200px) {
        .media-range2 {
            display: none;
        }
    }

    @media only screen and (max-width:992px) {
        .media-range2 {
            display: none;
        }
    }

    @media only screen and (max-width: 1200px) and (min-width: 992px) {
        .media-range1 {
            display: none;
        }

        .media-range2 {
            display: block;
        }
    }


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
    <!-- <link rel="stylesheet" href="css/mdb.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <script src="https://kit.fontawesome.com/037215761c.js" crossorigin="anonymous"></script> -->

</head>

<body>
    <?php include 'menu.php';?>

    <section class="discoverAdoptionSection mt-4 text-center">
        <div class="container" style="">
            <img src="images/Discover/DiscoverAdoption.svg" alt="">
        </div>
    </section>

    <section class="statsSection">
        <div class="stats-and-facts container">
            <div class="mt-5" style="display:inline-block">
                <h4 id="text-stats" class="">Statistics & Facts</h4>
                <div id="hr-bar4"></div>
            </div>
            <div class="row mt-4">
                <div class="col-md-2 col-sm-6 counter-box1" style="margin-left: 1%;width: 270px;">
                    <h4 class="text-center text-white m-0 stat">80 Million+</h4>
                    <p class="text-center text-white ">Total sheltered/street Dogs & Cats in India</p>
                </div>

                <div class="col-md-2 col-sm-6 ms-auto counter-box2" style="width: 270px;">
                    <h4 class="text-center text-white m-0 stat">Approx. 34%</h4>
                    <p class="text-center text-white ">Pet owners prefer Dogs as pet to adopt</p>
                </div>

                <div class="col-md-2 col-sm-6 ms-auto counter-box3" style="width: 270px;">
                    <h4 class="text-center text-white m-0 stat">Approx. 20%</h4>
                    <p class="text-center text-white ">Pet owners prefer Cats as pet to adopt</p>
                </div>

                <div class="col-md-2 col-sm-6 ms-auto counter-box4 media-range1" style="width: 270px;">
                    <h4 class="text-center text-white m-0 stat">Only 60%</h4>
                    <p class="text-center text-white ">People have pets in India</p>
                </div>

                <div class="col-md-2 col-sm-6 ms-auto me-auto mt-3 counter-box4 media-range2" style="width: 270px;">
                    <h4 class="text-center text-white m-0 stat">Only 60%</h4>
                    <p class="text-center text-white ">People have pets in India</p>
                </div>

                <div class="textUnderCounter mt-4">
                    <p id="underCounter" class="text-center mb-0">Millions of stray dogs and cats worldwide lack
                        shelter,
                        food, and owners.</p>
                    <p class="text-center mb-4" style="font-size:100%; font-family:'Poppins';">Collective efforts are
                        needed to
                        address their needs. Together, we can create
                        a better place for
                        these animals.</p>
                </div>
            </div>
            <!-- <div class="textUnderDiscover mt-4">
                <p>Welcome to the "Adopters Hub"<br>
                    Your central destination for all things related to <span>Pet Adoption Education.</span> </p>

                <p class="m-0">Equip yourself with the knowledge and understanding you need to provide a loving home for
                    your newly
                    adopted pet. </p>
                <p>Together, let's embark on this incredible journey of companionship, growth, and unconditional love.
                </p>
            </div> -->
        </div>
    </section>

    <!-- <div class="divider text-center mt-3"><img src="images/Discover/divider.svg" alt="divider"></div> -->

    <section class="adoptionTipsSection">
        <div class="container">
            <div class="mt-5" style="display:inline-block">
                <h4 id="text-beforeAdoption" class="">Before Adoption</h4>
                <div id="hr-bar2"></div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4"><img src="images/Discover/commitment.svg" alt=""></div>
                <div class="col-md-7 ms-auto " style="padding: 3% 0%;">
                    <h5 class="text-heading" style="position:relative;"><img src="images/Discover/line.svg" alt="line"
                            style="">
                        Commitment</h5>
                    <p class="text1-right">Adopting a pet requires a lifelong commitments like - </p>
                    <ul class="text2-right">
                        <li> Time Commitment</li>
                        <li> Financial Commitment</li>
                        <li> Lifestyle Adjustment</li>
                        <li> Long-Term Responsibility</li>
                    </ul>
                    <p class="text3-right">Consider their lifespan and ensure you meet their needs.</p>
                </div>

                <div class="col-md-7 me-auto " style="padding: 3% 0%;text-align: right;">
                    <h5 class="text-heading" style="position:relative;">
                        Lifestyle Compatibility <img src="images/Discover/line.svg" alt="line" style=""></h5>
                    <p class="text1-left">Assess your lifestyle and choose a pet that suits your activity level, living
                        situation, and family dynamics. </p>
                    <p class="text2-left">Consider factors like size, energy level, exercise requirements, and
                        compatibility
                        with children or other pets.</p>
                </div>
                <div class="col-md-4"><img src="images/Discover/lifestyle.svg" alt=""></div>

                <div class="col-md-4"><img src="images/Discover/time.svg" alt=""></div>
                <div class="col-md-7 ms-auto " style="padding: 5% 0%;">
                    <h5 class="text-heading" style="position:relative;"><img src="images/Discover/line.svg" alt="line"
                            style="">
                        Time and Care</h5>
                    <p class="text1-right" style="padding-right: 40%;">Evaluate the time and effort you can devote to a
                        pet. Pets require daily
                        care, including feeding, grooming, exercise, training, and companionship. Ensure you have the
                        time and resources to meet their needs.</p>
                    <!-- <p class="text3-right">Consider their lifespan and ensure you meet their needs.</p> -->
                </div>

                <div class="col-md-7 me-auto " style="padding: 5% 0%;text-align: right;">
                    <h5 class="text-heading" style="position:relative;">
                        Training and Socialization <img src="images/Discover/line.svg" alt="line" style=""></h5>
                    <p class="text1-left">Be prepared to invest time and effort in training and socializing your pet.
                        Proper training and socialization are crucial for their well-being, behavior, and integration
                        into your family and community.</p>
                    <!-- <p class="text2-left">Consider factors like size, energy level, exercise requirements, and
                        compatibility
                        with children or other pets.</p> -->
                </div>
                <div class="col-md-4"><img src="images/Discover/training.svg" alt=""></div>
            </div>

            <div class="divider text-center mt-3"><img src="images/Discover/divider.svg" alt="divider"></div>

            <!-- After Adoption -->
            <div class="mt-5" style="display:inline-block">
                <h4 id="text-afterAdoption" class="">After Adoption</h4>
                <div id="hr-bar2"></div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4"><img src="images/Discover/transition.svg" alt=""></div>
                <div class="col-md-7 ms-auto " style="padding: 5% 0%;">
                    <h5 class="text-heading" style="position:relative;"><img src="images/Discover/line.svg" alt="line"
                            style="">
                        Transition Period</h5>
                    <p class="text1-right" style="padding-right: 40%;">Understand that your newly adopted pet may need
                        time to adjust to their new
                        environment. Provide a calm and safe space, gradually introduce them to your home, and establish
                        a routine to help them settle in comfortably.</p>
                </div>

                <div class="col-md-7 me-auto " style="padding: 5% 0%;text-align: right;">
                    <h5 class="text-heading" style="position:relative;">
                        Veterinary Care <img src="images/Discover/line.svg" alt="line" style=""></h5>
                    <p class="text1-left">Schedule a visit to the veterinarian for health check-up, vaccinations, and to
                        discuss any specific needs of your pet. Maintain regular veterinary visits for preventive care
                        and
                        address any health concerns promptly.</p>
                </div>
                <div class="col-md-4"><img src="images/Discover/vet_care.svg" alt=""></div>

                <div class="col-md-4"><img src="images/Discover/nutrition.svg" alt=""></div>
                <div class="col-md-7 ms-auto " style="padding: 5% 0%;">
                    <h5 class="text-heading" style="position:relative;"><img src="images/Discover/line.svg" alt="line"
                            style="">
                        Nutritional Needs</h5>
                    <p class="text1-right" style="padding-right: 40%;">Provide a balanced and appropriate diet for your
                        pet's age, size, and health condition. Consult your veterinarian for dietary recommendations and
                        feeding guidelines.</p>
                </div>

                <div class="col-md-7 me-auto " style="padding: 5% 0%;text-align: right;">
                    <h5 class="text-heading" style="position:relative;">
                        Exercise and Mental Stimulation <img src="images/Discover/line.svg" alt="line" style=""></h5>
                    <p class="text1-left">Ensure your pet receives regular exercise and mental stimulation. Engage them
                        in play, interactive toys, and provide opportunities
                        for social interaction with other animals.</p>
                </div>
                <div class="col-md-4"><img src="images/Discover/exercise.svg" alt=""></div>
            </div>
        </div>
    </section>

    <!-- <div class="divider text-center mt-3"><img src="images/Discover/divider.svg" alt="divider"></div> -->

    <section class="">
        <div class="container">
            <div class="mt-5" style="display:inline-block">
                <h4 id="text-breedInfo" class="">Breed Information</h4>
                <div id="hr-bar2"></div>
            </div>
            <div class="row ">
                <img class="mt-4" src="images/breed_Info.svg" alt="">
                <div class="col-sm-6 text-center mt-3">
                    <a class="knowMore text-decoration-none" target="_blank"
                        href="https://www.petfinder.com/dogs-and-puppies/breeds/?page=1" style="margin-right: 8%;">Know
                        More</a>
                </div>
                <div class="col-sm-6 text-center mt-3">
                    <a class="knowMore text-decoration-none" target="_blank"
                        href="https://www.petfinder.com/cats-and-kittens/breeds/?page=1" style="margin-left: 8%;">Know
                        More</a>
                </div>
            </div>
        </div>
    </section>
    <section class="faqSection mb-5">
        <div class="container">
            <div class="mt-5" style="display:inline-block">
                <h4 id="text-faq" class="">Frequently Asked Question</h4>
                <div id="hr-bar2"></div>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            How Do I Search For a Pet?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">To find an adoptable pet, you can begin your search using <code>“Find a
                            Pet”</code> located above. Since Adoptail is updated regularly, we recommend that you keep
                            checking
                            back or create a saved search email alert to be notified when new pets matching your search
                            criteria are added to the site.</div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Is the Pet I See on Adoptail Still Adoptable?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Across the 11,000 shelter and rescue groups in Adoptail's North
                            India network, each is responsible for updating adoptable pet listings. To learn about a
                            specific pet, please contact the shelter or rescue directly by going to the Footer and
                            clicking the Shelters name buttons under the <code>"connected shelters"</code> list.</div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            How Often is Adoptail Updated?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Because each shelter and rescue group is responsible for keeping its
                            adoptable pet listings current, Adoptail is continuously updated.</div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                            How Do I Meet a Pet I See on Adoptail?
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Because each shelter and rescue group is responsible for keeping its
                            adoptable pet listings current, Adoptail is continuously updated.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                            aria-controls="flush-collapseFive">
                            Do I Need to Apply to Adoptail?
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Because each shelter and rescue group is responsible for keeping its
                            adoptable pet listings current, Adoptail is continuously updated.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php';?>
    <!-- Bootstrap Js Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/stickyNav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html> 
