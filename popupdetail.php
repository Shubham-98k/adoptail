<?php include('config\constraints.php');
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php
$userid = $_POST['userid'];
$query3 = "SELECT * FROM pets where id=".$userid;
$q_run = mysqli_query($conn,$query3);
$pets = mysqli_num_rows($q_run) > 0;
$q = "SELECT * FROM rehome WHERE pid = '$userid' ";
$res5 = mysqli_query($conn, $q);
$user_fetch=mysqli_fetch_assoc($res5);
$oname = $user_fetch['oname'];
$mobile = $user_fetch['number'];
if($pets){


while($rows = mysqli_fetch_array($q_run))
{
?>

<form action='fetch.php' method='POST'>
    <div class="row ">
        <div class="modalImg col-sm-4">
            <img class='' src='<?php echo $rows['image_name'];?>'>
        </div>
        <div class='col-sm-8'>
            <h3 class='mb-4 fw-bold'>Hey! I am <?php echo $rows['name'];?>. Adopt Me ❤️</h3>
            <div class="row mb-3">
                <h5 class="info-head fw-bold mb-3" style="color:#009294;">General Info</h5>
                <div class="col-md-6">

                    <div class="row">
                        <div class="col-sm-6">
                            <p class='mb-1 generalInfo' style="font-weight: 600;
  font-family: 'Poppins';">Breed</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="generalInfoValue" style="font-family: 'Inter';"><?php echo $rows['breed'];?></p>
                        </div>
                        <div class="col-sm-6">
                            <p class='mb-1 generalInfo' style="font-weight: 600;
  font-family: 'Poppins';">Gender</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="generalInfoValue" style="font-family: 'Inter';"><?php echo $rows['gender'];?></p>
                        </div>

                        <div class="col-sm-6">
                            <p class='mb-1 generalInfo' style="font-weight: 600;
  font-family: 'Poppins';">Age</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="generalInfoValue" style="font-family: 'Inter';"><?php echo $rows['age'];?></p>
                        </div>
                    </div>
                    <div class="col md-6">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class='mb-1 generalInfo' style="font-weight: 600;
  font-family: 'Poppins';">Vaccinated</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="generalInfoValue" style="font-family: 'Inter';">
                                <?php echo $rows['vaccinated'] == 1 ? 'YES' : 'NO' ?>
                                <!-- vac -->
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class='mb-1 generalInfo' style="font-weight: 600;
  font-family: 'Poppins';">Neutered/Spayed</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="generalInfoValue" style="font-family: 'Inter';">
                                <?php echo $rows['sprayed'] == 1 ? 'YES' : 'NO' ?></p>
                            <!-- spray -->
                        </div>


                    </div>
                </div>
            </div>



            <div class="row mb-3">
                <h5 class="info-head fw-bold mb-3" style="color:#009294;">Additional Info About Me</h5>
                <div class="row">
                    <div class="col-sm-12">
                        <p class="generalInfoValue" style="font-family: 'Inter';"><?php echo $rows['adesc'];?></p>
                        <!-- adesc -->
                    </div>
                </div>

            </div>
            <div class="row mb-3">
                <h5 class="info-head fw-bold mb-3" style="color:#009294;">Reason for Donating Me</h5>
                <div class="row">
                    <div class="col-sm-12">
                        <p class="generalInfoValue" style="font-family: 'Inter';"><?php echo $rows['ddesc'];?></p>
                        <!-- ddesc -->
                    </div>
                </div>

            </div>

            <div class="row mb-3">
                <h5 class="info-head fw-bold mb-3" style="color:#009294;">Contact Info</h5>
                <div class="row">
                    <div class="col-sm-6">
                        <p class='mb-1 generalInfo' style="font-weight: 600;
  font-family: 'Poppins';">Name</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="generalInfoValue" style="font-family: 'Inter';"><?php echo $oname;?></p>
                        <!-- oname -->
                    </div>
                    <div class="col-sm-6">
                        <p class='mb-1 generalInfo' style="font-weight: 600;
  font-family: 'Poppins';">Mobile</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="generalInfoValue" style="font-family: 'Inter';"><?php echo $mobile;?></p>
                        <!-- mobile -->
                    </div>
                </div>

            </div>

            <input type='hidden' name='id' value='<?php echo $id; ?>' />
            <?php echo '<a class="btn fw-bold" id="modal_btn-adopt" href="fetch.php?id='.$rows['id'].' ">Adopt</a>  '; ?>
</form>
</div>
<?php 
        }
       
    }
    else 
    {
        echo "No Record";
    }
    
    ?> 
 
 
 
 
 
 
