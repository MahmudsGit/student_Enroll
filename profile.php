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
if (isset($_GET['id'])){
    $id= $_GET['id'];
    $stdDatas = $obj_function->stdLDetail($id);
    $studentInfo = mysqli_fetch_assoc($stdDatas);
}else{
    header("location: std_list.php");
}
if (isset($_POST['save_paid'])){
    $newPaid =$_POST['edit_paid'];
    $messege = $obj_function->savePaid($newPaid,$id);
}
if (isset($messege)) {
    echo "<script>alert('$messege');</script>";
}
?>
        <!-- Header-->
        <header class="bg-black py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <img class="img-fluid rounded-circle mb-4"  src="uploads/students/<?php echo $studentInfo['picture'] ;?>" height="350px" width="250px" alt="..." />
                    <h1 class="display-4 fw-bolder"><?php echo $studentInfo['first_name']." ".$studentInfo['last_name'] ;?></h1>
                </div>
            </div>
        </header>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Details of <?php echo $studentInfo['first_name']." ".$studentInfo['last_name'] ;?></h2>
                        <form action="" method="post">
                            <table class="table">
                                <!-- On rows -->

                                <tr><td class="text-center">First Name:</td><td><?php echo $studentInfo['first_name'] ;?> </td></tr>
                                <tr><td class="text-center">Last Name:</td><td><?php echo $studentInfo['last_name'] ;?> </td></tr>
                                <tr><td class="text-center">Schooll Name:</td><td><?php echo $studentInfo['school_name'] ;?></td></tr>
                                <tr><td class="text-center">Roll No:</td><td><?php echo $studentInfo['roll_no'] ;?></td></tr>
                                <tr><td class="text-center">Class:</td><td><?php echo $studentInfo['class_id'] ;?></td></tr>
                                <tr><td class="text-center">Tution Fee:</td><td><?php echo $studentInfo['tution_fee'] ;?></td></tr>
                                <tr>
                                    <td class="text-center">Paid Amount:</td>
                                    <td><?php echo $studentInfo['paid'] ;?> <sub><input type="submit" name="edit_paid" value="edit" class="btn btn-sm text-primary"></sub></td>
                                    <?php if (isset($_POST['edit_paid'])){ ?>
                                        <td><input type="text" name="edit_paid" class="form-control" value="<?php echo $studentInfo['paid'] ;?>"></td>
                                        <td><sub><input type="submit" name="save_paid" class="btn btn-sm text-success" value="save"></sub></td>
                                    <?php } ?>
                                </tr>
                                <tr><td class="text-center">Phone:</td><td><?php echo $studentInfo['phone'] ;?></td></tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
<?php include_once "include/footer.php"?>
