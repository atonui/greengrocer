<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom styles-->
    <link rel="stylesheet" href="styles.css">
    <!--Font awesome Link-->
    <script src="https://kit.fontawesome.com/1b3f5a09b7.js" crossorigin="anonymous"></script>

    <title>GREENGROCER</title>
</head>
<body>
<div id="top">  <!--top menu begin-->
    <div class="container"><!--container begin-->
        <div class="row"><!--row start-->
            <div class="col-md-6 offer"><!-- col-md-6 offer start-->
                <a href="login.php" class="btn btn-info btn-sm">Welcome</a>
                <a href="cart.php">SHOPPING CART: KSH600.00 | 2 ITEMS</a>
            </div><!-- col-md-6 offer end-->
            <div class="col-md-6"> <!--col-md 6 begin-->
                <ul class="menu"> <!--menu begin-->
                    <li>
                        <a href="signup.php">Register</a>
                    </li>
                    <li>
                        <a href="cart.php">Cart</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                </ul><!--menu end-->
            </div> <!--col-md 6 end-->
        </div><!--row end-->

    </div><!--container end-->
</div><!--top menu end-->
<!--    navbar start-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="images/weblogo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
        </ul>
        <a href="cart.php" class="btn navbar-btn btn-primary right">
            <i class="fa fa-shopping-cart"></i>
            <span>2 ITEMS IN CART</span>
        </a>
    </div>
</nav>
<!--    navbar end-->