<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="view/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="view/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="view/assets/css/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="view/assets/css/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="view/assets/css/switches.css">
    <link rel="manifest" href="manifest.json">
    <!-- IOS -->
    <link rel="apple-touch-icon" href="view/assets/96x96.png">
    <meta name="apple-mobile-web-app-status-bar" content="#5cac1b">
    <meta name="theme-color" content="#5cac1b">
    <title>Confirmation Code Register - Vissers App</title>
</head>

<body>
    <main class="container">
        <div class="form-container outer">
            <div class="form-form">
                <div class="form-form-wrap">
                    <div class="form-container">
                        <div class="form-content">
                            <img src="view/assets/logo.png" alt="Logo van de app">
                            <h1 class="">Confirm</h1>
                            <p class="">Receive confirmation code</p>

                            <form class="text-left">
                                <div class="form">
                                    <div id="username-field" class="field-wrapper input">
                                        <label for="confirm-code">Confirm Code</label>
                                        <input  id="code" type="text" class="form-control" placeholder="1234WXXN">
                                    </div>
                                    <div class="d-sm-flex justify-content-between">
                                        <div class="field-wrapper">
                                            <button type="button" id="signup" class="btn btn-primary" value="">Confirm</button>
                                        </div>
                                    </div>

                                    <!-- <p class="signup-link">Didn't receive the code? <a href="#">Resend</a></p> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="app.js"></script>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<script>
    function error() {
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'incorrect Code',
            showConfirmButton: false,
            timer: 1500
        })
    }
    $(document).ready(function () {
      $("#signup").click(function () {
        const code = $("#code").val();
        $.ajax({
            type: "POST",
            url: "backend/activate.php",
            data: {
              code: code
            },
            dataType: "JSON",
            success: function (feedback) {
                if (feedback.status == "success") {
              window.location = "view/index.php?error=0";
            }else{
                console.log('error')
                error()
            }
            },
          });
      });
    });
  </script>