<?php
require 'header.php';
require 'footer.php';
?>





<!--Reg form-->
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <div id="form-section">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button class="btn btn-success btn-block" name="btn_login">LOG IN</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <div id="to-signup">
                <h3>Create Your Account With Us</h3>
                <hr>
                <p>Creating your customer account in just a few clicks! Register using your e-mail address by clicking the button below.</p>
                <br>
                <a href="signup.php"><button class="btn btn-success btn-block" name="btn_login">SIGN UP</button></a>

            </div>
        </div>
    </div>
</div>

