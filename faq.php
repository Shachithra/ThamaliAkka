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
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h3 class="display-5">FAQs</h3>
                </div>
            </div>
            <div class="row">
                <?php foreach ($terms_conditions as $index => $term) : ?>
                    <div class="col-md-6 mb-4">
                        <h2 class="display-6"><?php echo $term['title']; ?></h2>
                        <p class="lead"><?php echo $term['description']; ?></p>
                    </div>
                    <?php if (($index + 1) % 2 == 0) : ?>
            </div>
            <div class="row">
            <?php endif; ?>
        <?php endforeach; ?>
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