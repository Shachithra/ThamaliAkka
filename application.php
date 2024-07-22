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
                            <h2 class="text-center">Elder Application Details</h2>
                            <form>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="age">Age</label>
                                        <input type="number" class="form-control" id="age" placeholder="Enter your age">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="gender">Gender</label>
                                        <select id="gender" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="contactNumber">Contact Number</label>
                                        <input type="text" class="form-control" id="contactNumber" placeholder="Enter your contact number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Enter your address">
                                </div>
                                <div class="form-group">
                                    <label for="medicalHistory">Medical History</label>
                                    <textarea class="form-control" id="medicalHistory" rows="3" placeholder="Enter your medical history"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="carePreference">Care Preference</label>
                                    <select id="carePreference" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Home Care</option>
                                        <option>Hospital Care</option>
                                        <option>Clinic Visits</option>
                                        <option>Telehealth</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="guardianName">Guardian Name</label>
                                        <input type="text" class="form-control" id="guardianName" placeholder="Enter guardian's name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="guardianContact">Guardian Contact</label>
                                        <input type="text" class="form-control" id="guardianContact" placeholder="Enter guardian's contact number">
                                    </div>
                                </div>
                                <br />
                                <button type="submit" class="btn btn-primary">Submit</button>
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