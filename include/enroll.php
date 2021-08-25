<?php if (isset($_SESSION['user_id'])){ ?>
    <section class="bg-light py-5">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person-plus-fill"></i></div>
                <h2 id="item-2" class="fw-bolder">Enroll a New Student</h2>
                <p class="lead mb-0">We'd love to hear from you</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post" action="" enctype="multipart/form-data" >
                        <div class="form-floating mb-3">
                            <input class="form-control" id="first_name" name="first_name" type="text" placeholder="Enter your First Name..." data-sb-validations="required" value="<?php if (isset($first_name)){echo $first_name; } ?>" />
                            <label for="First Name">First name</label>
                            <div class="invalid-feedback" data-sb-feedback="first_name:required">First Name is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="last_name" name="last_name" type="text" placeholder="Enter your Last Name..." data-sb-validations="required" value="<?php if (isset($last_name)){echo $last_name; } ?>" />
                            <label for="Last Name">Last name</label>
                            <div class="invalid-feedback" data-sb-feedback="last_name:required">Last Name is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="school_name" name="school_name" type="text" placeholder="Enter your School Name..." data-sb-validations="required" value="<?php if (isset($school_name)){echo $school_name; } ?>" />
                            <label for="School Name">School name</label>
                            <div class="invalid-feedback" data-sb-feedback="school_name:required">School Name is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="roll_no" name="roll_no" type="number" placeholder="Enter your Roll No..." data-sb-validations="required" value="<?php if (isset($roll_no)){echo $roll_no; } ?>" />
                            <label for="Roll No">Roll No</label>
                            <div class="invalid-feedback" data-sb-feedback="roll_no:required">Roll No is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control form-select" id="class_id" name="class_id"  >
                                <option>Select Class</option>
                                <?php
                                    $classes[6]= "Class Six";
                                    $classes[7]= "Class Seven";
                                    $classes[8]= "Class Eight";
                                    $classes[9]= "Class Nine";
                                    $classes[10]= "Class Ten";
                                    $classes[11]= "Admission";
                                    for ($x = 6; $x <= 11; $x++){?>
                                <option value="<?php echo $x; ?>"><?php echo $classes[$x] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="tution_fee" name="tution_fee" type="number" placeholder="Enter your Paid Amount..." data-sb-validations="required" value="<?php if (isset($paid)){echo $paid; } ?>" />
                            <label for="tution_fee">Tution Fee</label>
                            <div class="invalid-feedback" data-sb-feedback="tution_fee:required">tution_fee is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="paid" name="paid" type="number" placeholder="Enter your Paid Amount..." data-sb-validations="required" value="<?php if (isset($paid)){echo $paid; } ?>" />
                            <label for="paid">Paid Amaunt</label>
                            <div class="invalid-feedback" data-sb-feedback="paid:required">Paid is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" value="<?php if (isset($phone)){echo $phone; } ?>" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="picture" name="picture" type="file"  data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="picture:required">Picture is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="address" name="address" type="text" placeholder="Enter your Address here..." style="height: 10rem" data-sb-validations="required"><?php if (isset($address)){echo $address; } ?></textarea>
                            <label for="address">Address</label>
                            <div class="invalid-feedback" data-sb-feedback="address:required">Address is required.</div>
                        </div>
                        <div class="d-grid">
                            <input value="Enroll Now" name="enroll" class="btn btn-primary btn-lg " id="Enroll" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php } ?>