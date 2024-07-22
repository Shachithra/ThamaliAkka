<!doctype html>
<html lang="en">
<?php
include('./application/config/configuration.php');
include('./application/common/include.php');
include('./data.php');
?>
<header>
    <?php
    include('./application/common/header.php');
    ?>
</header>

<body>
    <section class="main-section">
        <div class="container">
            <section>
                <div class="row mb-3 ps-3 pe-3">
                    <?php foreach ($services as $service) : ?>
                        <div class="col-3 mb-3">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 all-vertical-center">
                                            <h5 class="card-title"><?= $service['name'] ?></h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 all-vertical-center">
                                            <img src="<?= $service['img'] ?>" class="card-img-top" alt="<?= $service['name'] ?>">
                                        </div>
                                        <div class="col-8 all-vertical-center text-center">
                                            <p><?= $service['description'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="row">
                    <div class="col-12 all-vertical-center">
                        <a href="./all-services.php"> <button type="button" class="btn btn-info">Go to all services</button></a>
                    </div>
                </div>
            </section>
            <section>
                <div class="row mb-3 ps-3 pe-3">
                    <div class="row mt-3">
                        <div class="col-4 all-vertical-center">
                            <img src="/assets/customize/img/vision.jpg" class="all-image" />
                        </div>
                        <div class="col-8 all-vertical-center text-center">
                            <h3 class="display-5 mb-4">Our Vision</h3>
                            <p class="vision-mission-text-size"> To be the leading platform where customers and service providers connect seamlessly, fostering trust, quality, and efficiency in every interaction.</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-8 all-vertical-center text-center">
                            <h3 class="display-5 mb-4">Our Mission</h3>
                            <p class="vision-mission-text-size">Our mission is to empower customers to find reliable and skilled service providers effortlessly while enabling service providers to grow their businesses by reaching a broader audience. We strive to create a user-friendly and secure environment that promotes excellence, transparency, and mutual satisfaction for all our users.</p>
                        </div>
                        <div class="col-4 all-vertical-center">
                            <img src="/assets/customize/img/mission.jpg" class="all-image" />
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</body>

<footer>
    <?php
    include('./application/common/footer.php');
    ?>
</footer>

</html>