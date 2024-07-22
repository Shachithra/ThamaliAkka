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
                    <?php foreach ($allServices as $service) : ?>
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