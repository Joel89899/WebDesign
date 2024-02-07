<?php include "header_in.php"; ?>

<div>
        <?php
        // Start the session
        session_start();

        include("dp.php");

        // Check if the user is logged in
        if (isset($_SESSION['Username'])) {
            $loggedInUser = $_SESSION['Username'];

            // Use a parameterized query to prevent SQL injection
            $select = "SELECT * FROM user WHERE Username = ?";
            $stmt = mysqli_prepare($link, $select);

            // Check if the statement is prepared successfully
            if ($stmt) {
                // Bind the parameter and execute the statement
                mysqli_stmt_bind_param($stmt, "s", $loggedInUser);
                mysqli_stmt_execute($stmt);

                // Get the result
                $result = mysqli_stmt_get_result($stmt);

                // Fetch and display user information
                while ($arr = mysqli_fetch_array($result)) {
                    $username = $arr["Username"];
                    $password = $arr["Password"];
                    $email = $arr["Email"];
                    $phone = $arr["Phone"];
                    $image = $arr["image"];
                    $user_id = $arr["ID"];
                    $intro = $arr['intro'];
                    $work = $arr['work'];

                }

                mysqli_stmt_close($stmt);
            } else {
                // Handle the error
                echo "Error: " . mysqli_error($link);
            }
        } else {
            echo "<tr><td colspan='2'>Please log in to view your information.</td></tr>";
        }
        ?>
</div>
<div class="about-me">
      <div class="about-me-text">
        <h2>MY PROFILE</h2>
        <p>Username: <?php echo $username ?> </p>
        <p>Email: <?php echo $email ?></p>
        <p>Phone Number: <?php echo $phone ?></p>
        <p>Current work status: <?php echo $work ?></p>
        <p>About me: <?php echo $intro ?></p>
        <br>
        <p><?php echo "<a href=\"edit_process.php?uid=$user_id\">Edit Information</a>" ?></p>
      </div>
      <div class="myimg">
        <?php echo "<img src='uploaded_file/$image' alt='User Image'>"?>
      </div>
</div>


<?php include "footer.php"; ?>