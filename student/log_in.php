<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--modal bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 

    <!-- style.css -->
    <link rel="stylesheet" href="../style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
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
					
						<a href="../index.php">
							<button class="btn btn-secondary btn-lg btn-block" type="button">
								<span class="btn-inner--icon"><i class="fa fa-lock fa-lg"></i></span>
								<span class="btn-inner--text">admin Login</span>
							</button>
						</a>
					
				</ul>
			</div>
		</div>
	</nav>
    
 <!-- main student login -->  
    <div class="container" id="container">
        <div class="form-container sign-in-container">
        
           <div class="col-sm-12" style="text-align:center">
                <h1>Welcome</h1>
           </div>

           <br>

          <div id="signin1" class="col-sm-12" style="text-align:center">
                <h3>sign in met QRcode</h3>
          </div>
<br>
           <div id="buttonr"class="col-sm-12" style="text-align:center">      
              
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="camera()">
                   <span class="btn-inner--text">QRcode</span>
              </button>
    
           </div>
           
              <form action="../student/backend/loginpin.php" method="post" autocomplete="off">
                  <span>Sign in met PINCODE</span>
                  <input type="email" placeholder="Student email adres" name="email"/>
                  <input type="password" placeholder="PINCODE" name="password"/>
                  <!-- <a href="#">Forgot your password?</a> -->
                  <button id="login" class="btn btn-primary" type="submit" name="login">Sign in</button>
              </form>

         </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                </div>
            </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">QR CODE LOGIN</h5>
      </div>
      <div class="modal-body">

<!-- scan -->
  <div id="app" class="row box">
    <div class="col-md-4 col-md-offset-4 sidebar">
      <ul>
        <li v-if="cameras.length === 0" class="empty">No cameras found</li>
        <li v-for="camera in cameras">
          <span v-if="camera.id == activeCameraId" :title="formatName(camera.name)" class="active"><input type="radio" class="align-middle mr-1" checked> {{ formatName(camera.name) }}</span>
          <span v-if="camera.id != activeCameraId" :title="formatName(camera.name)">
            <a @click.stop="selectCamera(camera)"> <input type="radio" class="align-middle mr-1">@{{ formatName(camera.name) }}</a>
          </span>
        </li>
      </ul>
      <div class="clearfix"></div>     

<div class="col-md-12">
								<video id="preview" class="" style="width:250%;"></video>
							</div>

 <!-- form scan -->
      <form action="../student/backend/login.php" method="POST" id="myForm">
          <fieldset class="scheduler-border">
            <input type="text" name="qrcode" id="code" autofocus>
          </fieldset>
        </form>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
<script src="notification.js"></script>

<!-- cam script -->
    <script src="../student/qrcode/js/jquery-3.4.1.min.js"></script>
    <script src="../student/qrcode/scanner/vendor/modernizr/modernizr.js"></script>
    <script src="../student/qrcode/scanner/vendor/vue/vue.min.js"></script>
<!-- scanner -->
<script src="../student/qrcode/scanner/js/app.js"></script>
<script src="../student/qrcode/scanner/vendor/instascan/instascan.min.js"></script>
<script src="../student/qrcode/scanner/js/scanner.js"></script>
<script src="../student/qrcode/scanner/js/scanner.js"></script>

