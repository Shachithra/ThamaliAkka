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
                    <h3 class="display-5">Contact Us</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Contact Information</h3>
                            <p><strong>Address:</strong> 123 Main Street, Anytown, USA</p>
                            <p><strong>Phone:</strong> (123) 456-7890</p>
                            <p><strong>Email:</strong> info@example.com</p>
                            <div class="map-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.3068219641557!2d-122.4206790846811!3d37.77902657975878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c3e1d8127%3A0x8cfd8718b637b7b5!2s1600%20California%20St%2C%20San%20Francisco%2C%20CA%2094130!5e0!3m2!1sen!2sus!4v1631200769171!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body mt-4 mb-4">
                            <h3>Send Us a Message</h3>
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-info">Send Message</button>
                            </form>
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