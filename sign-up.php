<!doctype html>
<html lang="en">
<?php
include('./application/config/configuration.php');
include('./application/common/include.php');
?>
<header>
    <?php
    include('./application/common/header.php');
    ?>
</header>

<body>
    <section class="main-section">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <img src="/assets/customize/img/sign-up.jpg" class="all-image" />
                </div>
                <div class="col-md-6 all-vertical-center">
                    <div class="card" style="width : 100%">
                        <div class="card-body">
                            <h2 class="text-center">Sign Up</h2>
                            <form action="process_signup.php" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Age</label>
                                    <input type="text" class="form-control" id="name" name="age" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Contact Number</label>
                                    <input type="text" class="form-control" id="name" name="age" required>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="name" name="age" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                </div>
                                <button type="submit" class="btn btn-info w-100">Sign Up</button>
                            </form>
                            <div class="text-center mt-3">
                                <p>Already have an account? <a href="sign-in.php">Sign In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<footer>
    <?php
    include('./application/common/footer.php');
    ?>
</footer>

</html>