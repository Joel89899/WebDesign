<?php


if (isset($_POST['event_post'])) {
    $ename = $_POST['ename'];
    $edate = $_POST['edate'];
    $edes = $_POST['edes'];

    
    include("dp.php");

   
    $insertQuery = "INSERT INTO events (name, date , description) 
                    VALUES ('$ename', '$edate', '$edes')";
    
    $result = mysqli_query($link, $insertQuery);

   
    if ($result) {
        // Event added successfully
        header("Location: admin.php?success=true");
        exit();
    } else {
        // Error occurred
        header("Location: admin.php?error=true");
        #echo "Error: " . mysqli_error($link);
        exit();
    }
} else {
    // If someone tries to access this script directly without submitting the form
    header("Location: admin.php");
    exit();
}
?>
