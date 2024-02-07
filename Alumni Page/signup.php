<?php include "header.php"; ?>

<br>
<form action="signup_process.php" method="post" enctype="multipart/form-data">
<div>
    <h2 style="text-align: center;"> Register</h2>
</div>

    <div class="mainContainer">
        <div>User Name&nbsp;<input type="text" name="uname" placeholder="Enter User name"></div><br>
        <div>Email&nbsp;<input type="email" name="email" placeholder="Enter email"></div><br>
        <div>Work &nbsp;<input type="text" name="occup"></div><br>
        <div>Introduce youself shortly&nbsp;<input type="text" name="intro" placeholder="About you"></div><br>
        <div>Set Password&nbsp;<input type="password" name="pass" maxlength="10" placeholder="Set strong password"></div><br>
        <div>Repeat Password&nbsp;<input type="password" name="repass" maxlength="10" placeholder="Repeat password"></div><br>
        <div>Phone number&nbsp;<input type="number" name="phone" maxlength="11"></div><br>
        <div>Upload Photo <input type="file" name="image"></div>

        <div class="error">
            <?php
            if (@$_GET['empt'] == true) {
            ?>
                <?php echo "Please fill all the required fields"; ?>
            <?php
            }
            ?>
            <?php
            if (@$_GET['exist'] == true) {
            ?>
                <?php echo "Alreay Registered "; ?>
            <?php
            }
            ?>
            <?php
            if (@$_GET['pmatch'] == true) {
            ?>
                <?php echo "Password not matched"; ?>
            <?php
            }
            ?>
            <?php
            if (@$_GET['img'] == true) {
            ?>
                <?php echo "Image size is too large"; ?>
            <?php
            }
            ?>
            <?php
            if (@$_GET['reg'] == true) {
            ?>
                <?php echo "Registration Successful"; ?>
            <?php
            }
            ?>
            <?php
            if (@$_GET['err'] == true) {
            ?>
                <?php echo "Registration Fail"; ?>
            <?php
            }
            ?>
        </div>


        <!-- Submit button -->
        <button type="submit" name="signup_btn">Register</button>

        
    </div>

</form>

<?php include "footer.php"; ?>