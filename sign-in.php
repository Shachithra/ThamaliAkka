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
            <div class="row mt-5">
                <div class="col-md-6">
                    <img src="/assets/customize/img/sign-in.jpg" class="all-image" />
                </div>
                <div class="col-md-6 all-vertical-center">
                    <div class="card" style="width : 100%">
                        <div class="card-body">
                            <h2 class="text-center">Sign In</h2>
                            <form action="process_signin.php" method="post">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-info w-100">Sign In</button>
                            </form>
                            <div class="text-center mt-3">
                                <p>Don't have an Customer Account? <a href="sign-up.php">Sign Up</a></p>
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