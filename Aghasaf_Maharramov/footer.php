<?php
    $sql = "SELECT * FROM `urls`;";
    $run = mysqli_query($con, $sql);
    $bring = mysqli_fetch_assoc($run);
    $fb = $bring['Facebook'];
    $ln = $bring['Linkedin'];
    $ig = $bring['Instagram'];
    $d = $bring['domain'];
    $dn = $bring['domainName'];

    $sql = "SELECT * FROM `main`;";
    $run = mysqli_query($con, $sql);
    $bring = mysqli_fetch_assoc($run);
    $sn = $bring['surname'];
?>

<div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <!-- <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a> -->
                <a class="btn btn-light btn-social mr-2" href="<?php echo $fb ?>" target="blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="<?php echo $ln ?>" target="blank"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="<?php echo $ig ?>" target="blank"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- <div class="d-flex justify-content-center mb-3">
                <a class="text-white" href="#">Privacy</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Terms</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">FAQs</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Help</a>
            </div> -->
            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="<?php echo $d ?>"><?php echo $dn ?></a>. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="<?php echo $d ?>"><?php echo $sn ?></a>
            </p>
        </div>
    </div>