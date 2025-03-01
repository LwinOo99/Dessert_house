<?php




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <!--css link start-->
    <link rel="stylesheet" href="../View/resources/css/user_login.css">
    <link rel="stylesheet" href="../View/resources/css/root.css">
    <!--css link end-->
    <!--font link start-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@1&family=Public+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <!--font link end-->
    <!--bootstrap link start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--bootstrap link end-->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
        <!--user login start-->
<div class="login_frame">
    <img src="../View/resources/img/login .jpg" alt="login" class="login_pic">
 <div class="login_text">
    <div class="login_header">
        <img src="../View/resources/img/logo.png" alt="logo" class="login_logo"/>
        <p class="login_title">Dessert House</p>
    </div>
    <h1 class="log_in_name">Log in</h1>
    <input type="text" class="login_input" placeholder="User Name">
    <br>
    <input type="text" class="login_input" placeholder="Password">
    <br>
    <button class="login_btn">Log in</button>
        <!-- text between two lines -->
        <div class="two_lines">
                    <div class="row">
                        <div class="col-3"><div class="line_left line"></div></div>
                        <div class="col-6"><span>login with other</span></div>
                        <div class="col-3"><div class="line_right line"></div></div>
                    </div>
        </div>
        <!-- Three icons -->
        <div class="login_icons">
        <iconify-icon icon="logos:facebook" class="login_icon"></iconify-icon>
        <iconify-icon icon="skill-icons:twitter" class="login_icon"></iconify-icon>
        <iconify-icon icon="logos:google-icon" class="login_icon"></iconify-icon>
        </div>
</div>
</div>
<!--user login end-->
</body>
</html>