<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>RS IPM</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="admin/backend/login.php" method="post" autocomplete="off">
                <h1>Welcome</h1>
                <span>sign in with your account</span>
                <input type="email" placeholder="Email" name="email" required />
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