<?php
session_start();
if (isset($_SESSION['admin'])) {
    header('location:home.php');
}
?>
<?php include 'includes/header.php'; ?>


<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>Login</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>



                <form action="login.php" method="post">

                    <div class="input-group mb-3">

                        <!-- deleted na yung label-->


                        <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">

                        <!-- deleted na yung label -->
                        <input type="password" class="form-control" name="password" placeholder="Password" required>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Show Password
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>

                </form>








                <p class="mb-0 mt-3 float-right">Not Registered Yet |
                    <a href="register.php">Register Here</a>
                </p>


            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->




    <?php
    if (isset($_SESSION['error'])) {
        echo "
  				<div class='text-center mt-2'>
			  		<p>" . $_SESSION['error'] . "</p> 
			  	</div>
  			";
        unset($_SESSION['error']);
    }
    ?>







    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>