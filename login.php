<?php
require 'config.php';
require 'header.php';

$username = $password = '';

$username_err = $password_err = '';

if (isset($_POST['btn-login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)){
        $username_err = 'Please fill in your username';
    }elseif(empty($password)){
        $password_err = 'Please enter your password';
    }else{
        $password = md5($password);
        $sql = "SELECT `id` FROM `users` WHERE username = '$username' AND password = '$password'";
        //results from db come as a table with rows
        $results = mysqli_query($conn,$sql);

        if (mysqli_num_rows($results) > 0){
            //extract data from the results from db query
            while ($rows = mysqli_fetch_assoc($results)){
                session_start();
                $_SESSION['id'] = $rows['id'];
                $_SESSION['logged_in'] = true;
            }
            header('location:index.php');
        }else{
            //register user
            echo "
                <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                 You are not a registered user. Please register <a href='signup.php'>Here</a>
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                  </button>
                </div>
            ";
        }
    }
}
?>

<body>
<?php
    if (isset($_GET['msg'])){
        echo "
            <div class=\"alert alert-primary\" role=\"alert\">
                You are already registered, please login here!
            </div>
        
        ";
    }
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-md-8 col-lg-8 col-xl-8"></div>
            <div class="col col-md-4 col-lg-4 col-xl-4">
                <div class="container">
                    <div class="form-group container" style="padding: 80px 0px;">
                        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                            <fieldset>
                                <div class="form-group" style="padding: 15px 0px;">
                                    <label for="">Username</label>
                                    <input type="text" name="username" required class="form-control" placeholder="Username">
                                </div>

                                <div class="form-group" style="padding: 15px 0px;">
                                    <label for="">Password</label>
                                    <input type="password" name="password" required class="form-control" placeholder="Password">
                                </div>
                                <button class="btn btn-block btn-info" name="btn-login">Log In</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
require 'footer.php';
?>