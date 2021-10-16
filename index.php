<?php
include_once("conn.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.6/css/bootstrap.min.css">
    <title>Index</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url(pics/bg3.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }
    </style>
</head>

<body>

    <div class="main">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                </ul>
            </div>
            <div class="links">
                <a href="signup.php" class="btn btn-success mr-3">Sign Up</a>
                <a href="show.php" class="btn btn-info mr-5">Show Data</a>

            </div>
        </nav>
    </div>



    <script src="bootstrap-4.6/js/jquery.js"></script>
    <script src="bootstrap-4.6/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.6/js/popper.js"></script>
</body>

</html>