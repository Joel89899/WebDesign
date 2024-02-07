<?php include "header_in.php"; ?>


<?php
    include("dp.php");
    $select = "SELECT * from user";
    $row = mysqli_query($link, $select);

    while ($arr = mysqli_fetch_array($row)) {
        $username = $arr["Username"];
        $password = $arr["Password"];
        $email = $arr["Email"];
        $phone = $arr["Phone"];
        $image = $arr["image"];
        $user_id = $arr["ID"];
        $intro = $arr['intro'];
        $work = $arr['work'];
        ?>

    <div class="container">
        <div class="about-me">
            <div class="about-me-text">
                <p>Username: <?php echo $username ?> </p>
                <p>Email: <?php echo $email ?></p>
                <p>Phone Number: <?php echo $phone ?></p>
                <p>Current work status: <?php echo $work ?></p>
                <p>About me: <?php echo $intro ?></p>
                <br>
            </div>
            <div class="myimg">
                <?php echo "<img src='uploaded_file/$image' alt='User Image'>"?>
            </div>
        </div>
    </div><?php
    }
?>

<?php include "footer.php"; ?>