<!doctype html>
<html lang="en">
<?php
include('../application/config/configuration.php');
include('../application/common/include.php');
?>

<body>
    <div class="admin-body">
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <nav class="col-md-3 col-lg-2 d-md-block bg-dark admin-sidebar">
                    <div class="position-sticky">
                        <h4 class="text-white text-center">Admin Dashboard</h4>
                        <ul class="nav flex-column mt-4">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Services
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Workers
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Main Content -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 admin-main-content">
                    <div class="admin-common-card">
                        <h1>Welcome to the Admin Dashboard</h1>
                        <p>Manage your services and workers from this central hub. Use the sidebar to navigate through different sections.</p>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>