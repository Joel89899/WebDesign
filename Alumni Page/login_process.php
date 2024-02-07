<?php
session_start();
require_once('dp.php');

$name = $_POST['uname'];
$pass = $_POST['pass'];
$depass = md5($pass); 


if ($name == "4444" && $pass == "4444"){
    header("location:admin.php");
}
else
{
    if (isset($_POST['login_btn'])) {
        if (empty($name) || empty($pass)) {
            header("location:login_page.php?blank=empt");
        } else {
            $query = "SELECT * FROM user WHERE Username ='$name' and Password='$depass'";
            $result = mysqli_query($link, $query);
    
            if ($row = mysqli_fetch_assoc($result)) {
                $user_id = $row['ID'];
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['ID'] = $user_id;
                header("location:index_in.php");
            } else {
                header("location:login.php?invalid=notmatch");
            }
        }
    } else {
        echo "Not working"; 
    }
}

?>
