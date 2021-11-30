<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header text-center"><h3>LOGIN</h3></div>
            <div class="card-body">
                <img class="profile-img mb-3 mx-auto d-block" src="<?php echo base_url() ?>assets/images/icon.png" height="150">
                <form class="form-signin" method="POST" action="<?php echo base_url() ?>login/aksi_login">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Username" required="required" autofocus autocomplete="off">
                            <?php echo form_error('username'); ?>
                            <label for="inputUsername">Username</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="required" autocomplete="off">
                            <?php echo form_error('password'); ?>
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me">Remember Me
                            </label>
                        </div>
                    </div> -->
                    
                    <button class="btn btn-lg btn-primary btn-block" name="btn-login" id="btn-login" type="submit">Login</button>
                </form>
            </div>
            <?php if(isset($error)) { echo $error; }; ?>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

</body>
</html>
