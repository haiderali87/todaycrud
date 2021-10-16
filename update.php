<?php
include_once("conn.php");
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "UPDATE users SET name='$name',email='$email',password='$password' WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header("location:show.php");
    }
}


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
            background-color: lightblue;
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
            <!-- <div class="links">
                <a href="signup.php" class="btn btn-success mr-3">Sign Up</a>
                <a href="show.php" class="btn btn-info mr-5">Show Data</a>

            </div> -->
        </nav>

        <div class="formm container">

            <form style="color: black;" action="" method="POST">
                <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM users where $id=id";
                $res = mysqli_query($conn, $sql);
                foreach ($res as $data) {


                ?>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" name="name" value="<?php echo $data['name'] ?>" class="form-control w-50" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" value="<?php echo $data['email'] ?>" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" value="<?php echo $data['password'] ?>" class="form-control w-50" id="exampleInputPassword1">
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" class="form-control w-50" id="exampleInputPassword1">
                    </div>

                    <button type="submit" name="submit" class="btn btn-success">Update</button>
                <?php } ?>
            </form>

        </div>
    </div>



    <script src="bootstrap-4.6/js/jquery.js"></script>
    <script src="bootstrap-4.6/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.6/js/popper.js"></script>
</body>

</html>