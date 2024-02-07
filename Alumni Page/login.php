<?php include "header.php"; ?>

<br>
<form action="login_process.php" method="post">
<div>
    <h2 style="text-align: center;"> Login </h2>
</div>

    <div class="mainContainer">
    <div>User Name&nbsp;<input type="text" name="uname" placeholder="Enter User name"></div><br>
    <div>Password&nbsp;<input type="password" name="pass" maxlength="10" placeholder="Enter password"></div><br>

        <!-- sub container for the checkbox and forgot password link -->
        <div class="subcontainer">
            <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
        </div>

        <div class="error">
            <?php
            if(@$_GET['blank']==TRUE)
            {
                echo "Plese enter your student ID and password";
            }
            ?>
            <?php
                if(@$_GET['invalid']==TRUE)
                {
                    echo "Plese enter valid student ID and password";
                }
            ?>
        </div>

        <!-- Submit button -->
        <button type="submit" name="login_btn">Login</button>

        <!-- Sign up link -->
        <p class="register">Not a member?  <a href="signup.php">Register here!</a></p>

    </div>

</form>

<?php include "footer.php"; ?>