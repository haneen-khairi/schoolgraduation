<?php include('header.php') ?>

<div class="section section-padding">
    <div class="container">
        <div class="register-login-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="register-login-images">
                        <div class="shape-1">
                            <img src="assets/images/shape/shape-26.png" alt="Shape">
                        </div>
                        <div class="images">
                            <img src="assets/images/register-login.png" alt="Register Login">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <!-- Register & Login Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">Login <span>Now</span></h3>

                        <div class="form-wrapper">
                            <form method="post" action="check-login.php">
                            <?php if(isset($_GET['error'])){?>
                                <div class="alert alert-danger" role="alert">
                                   <?=$_GET['error'] ?>
                                </div>
                            <?php   }?>
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <label for="email">Username or Email</label>
                                    <input type="email" name="email" id="email">
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password">
                                </div>
                                <div class="single-form">
                                    <label for="">Select User Type</label>
                                    <select class="form-select mb-3" name="role" aria-label="Default select example">
                                        <option selected value="teacher">Teacher</option>
                                        <option value="parent">Parent</option>
                                        <option value="student">Student</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <div class="single-form">
                                    <button type="submit" name="login" class="btn btn-primary btn-hover-dark w-100">Login</button>

                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
  

    </div>
</div>

<?php include('footer.php') ?>