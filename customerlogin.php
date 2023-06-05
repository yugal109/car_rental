<?php
include('login_customer.php');

if(isset($_SESSION['login_customer'])) {
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Customer Login | Car Rental </title>
</head>
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
<link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
<link rel="stylesheet" href="assets/w3css/w3.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet"
    type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

<body background="assets/img/blank.png">

    <nav class="navbar bg-primary navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">
                    Enzy Rentals </a>
            </div>


            <?php
                if(isset($_SESSION['login_client'])) {
                    ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome
                            <?php echo $_SESSION['login_client']; ?></a>
                    </li>
                    <li>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><span
                                        class="glyphicon glyphicon-user"></span> Control Panel <span
                                        class="caret"></span> </a>
                                <ul class="dropdown-menu">
                                    <li> <a href="entercar.php">Add Car</a></li>
                                    <li> <a href="enterdriver.php"> Add Driver</a></li>
                                    <li> <a href="clientview.php">View</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <?php
                } elseif (isset($_SESSION['login_customer'])) {
                    ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome
                            <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <li>
                        <a href="#">History</a>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <?php
                } else {
                    ?>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="clientlogin.php">Admin</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">Customer</a>
                    </li>

                </ul>
            </div>
            <?php   }
?>

        </div>

    </nav>

    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center">Enzy Rentals - Customer Panel </span>
            </h1>
            <br>
            <p class="text-center">Please LOGIN to continue.</p>
        </div>
    </div>

    <div class="container" style="margin-top: 1%; margin-bottom: 2%;">
        <div class="col-md-5 col-md-offset-4">
            <label style="margin-left: 5px;color: red;"><span>
                    <?php echo $error;  ?> </span></label>
            <div class="panel panel-primary">
                <div class="panel-heading"> Login </div>
                <div class="panel-body">

                    <form action="" method="POST">

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="customer_username"><span class="text-danger"
                                        style="margin-right: 5px;">*</span> Username: </label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_username" type="text"
                                        name="customer_username" placeholder="Username" required="" autofocus="">
                                    <span class="input-group-btn">
                                        <label class="btn btn-dark"><span class="glyphicon glyphicon-user"
                                                aria-hidden="true"></label>
                                    </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="customer_password"><span class="text-danger"
                                        style="margin-right: 5px;">*</span> Password: </label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_password" type="password"
                                        name="customer_password" placeholder="Password" required="">
                                    <span class="input-group-btn">
                                        <label class="btn btn-dark"><span class="glyphicon glyphicon-lock"
                                                aria-hidden="true"></span></label>
                                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-4">
                                <button class="btn btn-dark" name="submit" type="submit" value=" Login ">Submit</button>

                            </div>

                        </div>
                        <label style="margin-left: 5px;">OR</label> <br>
                        <label style="margin-left: 5px;"><a href="customersignup.php">Create a
                                new
                                account.</a></label>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


</html>