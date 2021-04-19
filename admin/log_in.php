<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../rs_IPM/style.css">
    <title>RS IPM</title>
</head>

<body>
<!-- #navbar -->
<nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
		
			<a class="navbar-brand" href="#">
				<h4 class="text-white "></h4>
			</a>
			
			<div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
				<div class="navbar-collapse-header">
					<div class="row">

						<div class="col-6 collapse-brand">
							<h4></h4>
						</div>
						<div class="col-6 collapse-close">
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
				</div>
				<ul class="navbar-nav mr-auto">
					
						<a href="./../index.php">
							<button class="btn btn-secondary btn-lg btn-block" type="button">
								<span class="btn-inner--icon"><i class="fa fa-lock fa-lg"></i></span>
								<span class="btn-inner--text">Student Login</span>
							</button>
						</a>
					
				</ul>
			</div>
		</div>
	</nav>

    <!-- main admin login -->  
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="../admin/backend/login.php" method="post" autocomplete="off">
                <h1>Welcome</h1>
                <span>sign in with your account</span>
                <input type="text" placeholder="Email" name="email" autofocus required />
                <input type="password" placeholder="Password" name="password" required />
                <!-- <a href="#">Forgot your password?</a> -->
                <input type="submit" class="btn" value="Sign In">
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                </div>
            </div>
        </div>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
<script src="notification.js"></script>

<?php include "error.php";?>