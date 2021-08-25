<!-- Header-->
<?php
    session_start();
    include_once "include/header.php";
    if (isset($_POST['submit'])){
        $messege = $obj_function->userLogin($_POST);
    }
    if (isset($_POST['enroll'])){
        $messege = $obj_function->enrollStudent($_POST);
    }
?>
<!-- Responsive navbar-->
<?php include_once "include/navbar.php"?>
<?php if (isset($messege)){
    echo "<script>alert('$messege');</script>";
} ?>
<!-- Header Top-->
<header class="py-5">
    <div class="container px-lg-5">
        <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
            <div class="m-4 m-lg-5">
                <h1 class="display-5 fw-bold">Byaticrom Private Center</h1>
                <p class="fs-4">We provide Best tutoring and test prep for students in Six-Ten. Through our holistic approach, we collaborate with parents and teachers to help students identify their strengths, build confidence and reach their highest potential</p>
                <a class="btn btn-primary btn-lg" href="#item-0">View Information</a>
            </div>
        </div>
    </div>
</header>
<!-- Page Content-->
<section class="pt-4" id="item-0">
    <div class="container px-lg-5" >
        <!-- Page Features-->
        <div class="row gx-lg-5">
            <?php
            $classes[6]= "Class Six";
            $classes[7]= "Class Seven";
            $classes[8]= "Class Eight";
            $classes[9]= "Class Nine";
            $classes[10]= "Class Ten";
            $classes[11]= "Admission";
            for ($x = 6; $x <= 11; $x++){
            ?>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><a class="text-white text-decoration-none" href="std_list.php?class=<?php echo $x; ?>"><?php echo $x; ?></a></div>
                            <h2 class="fs-4 fw-bold"><a class="text-secondary text-decoration-none" href="std_list.php?class=<?php echo $x; ?>"><?php echo $classes[$x] ?></a></h2>
                            <p class="mb-0">Total Enrolled <span  class="text-success fw-bold" >
                                    <?php
                                        $enroll = $obj_function->stdList($x);
                                        echo mysqli_num_rows($enroll);
                                    ?>
                                </span></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Log in  -->
<?php include_once "include/login.php"; ?>
<!-- Enroll a Student -->
<?php include_once "include/enroll.php"; ?>
<!-- Footer-->
<?php include_once "include/footer.php"?>
