<?php if (!isset($_SESSION['user_id'])){ ?>
    <section class="bg-light py-5">
        <div class="container px-5 my-5 px-5">
            <div data-bs-spy="scroll" data-bs-target="#moveto-login" data-bs-offset="0" tabindex="0">
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 id="item-1">Log in to Enroll new Student</h3>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="user_email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="user_password" id="password" type="password" placeholder="password" />
                                        <label for="email">Password</label>
                                    </div>
                                    <input type="submit" name="submit" value="Log In" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>