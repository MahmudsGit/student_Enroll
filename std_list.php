<?php
    session_start();
    if (!isset($_SESSION['user_id'])){
        header("location: index.php");
}
?>
<!-- Header-->
<?php include_once "include/header.php"; ?>
<!-- Responsive navbar-->
<?php include_once "include/navbar.php" ?>
<?php
if (isset($_GET['class'])){
    $classId = $_GET['class'];
    $stdDatas = $obj_function->stdList($classId);
}else{
    header("location: index.php");
}
if (isset($_POST['clear_std'])){
    $data = mysqli_fetch_assoc($stdDatas);
    $clsId = $data['class_id'];
    $messege = $obj_function->clearStudent($clsId);
}
if (isset($messege)) {
    echo "<script>alert('$messege');</script>";
}
?>
        <!-- Header-->
        <header class="bg-black py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder"> Student List </h1>
                    <p class="lead fw-normal text-white-50 mb-0">Students who are Enrolled Already ! </p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php foreach ($stdDatas as $studentInfo){ ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="uploads/students/<?php echo $studentInfo['picture'] ;?>" alt="..." height="300px" width="200px"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"><?php echo $studentInfo['first_name']." ".$studentInfo['last_name'] ;?></h5>
                                    <span class="text-secondary">class <?php echo $studentInfo['class_id'] ;?></span><br>
                                    <span class="text-danger">
                                        <?php
                                            $due = $studentInfo['tution_fee']-$studentInfo['paid'];
                                            echo $due == 0 ?  "Cleared" : "Due $due Taka";
                                        ?>
                                    </span>
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="profile.php?id=<?php echo $studentInfo['id'] ;?>">View Profile</a></div>
                            </div>
                        </div>
                    </div>
                    <?php } if (empty(mysqli_num_rows($stdDatas))){
                        echo "<h3 class='text-danger'>Empty ! </h3>";}
                    ?>
                </div>
                <div>
                    <form method="post" action="">
                        <?php if (!empty(mysqli_num_rows($stdDatas))){  ?>
                        <input type="submit" name="clear_std"  value="Clear all students" class="btn btn-outline-secondary">
                        <?php } ?>
                    </form>
                </div>
            </div>
        </section>
        <!-- Footer-->
<?php include_once "include/footer.php"?>

