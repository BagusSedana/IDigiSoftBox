<!-- Include Header, Navbar, & Footer -->

<?php 

    include('helper/header.php');
    include('helper/navbar.php');

?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4><b>Login to Account Admin IDigiSoftBox.</b></h4>
                    </div>
                    <!-- Form Login -->
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Email ID</label>
                            <input type="email" placeholder="Enter email address here..." class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input type="password" placeholder="Enter password address here..." class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Login Now</button>
                        </div>
                    </div>
                    <!-- Form Login -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php 

    include('helper/footer.php');

?>

