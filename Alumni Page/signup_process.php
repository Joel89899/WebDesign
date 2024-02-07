<?php
include("dp.php");

$username = $_POST['uname'];
$email = $_POST['email'];
$password = md5($_POST['pass']);
$repass = md5($_POST['repass']);
$intro = $_POST['intro'];
$work = $_POST['occup'];
$phone = $_POST['phone'];
$image = $_FILES['image']['name'];
$image_folder = 'uploaded_file/' . $image;
$image_size = $_FILES['image']['size'];
$image_tmp_name = $_FILES['image']['tmp_name'];

if (isset($_POST['signup_btn'])) {
    if (empty($username) || empty($email) || empty($password)) {
        header("location: signup.php?empt=empty");
    } else {
        $select = "SELECT * FROM user WHERE Username = '$username' OR Email ='$email' ";
        $query = mysqli_query($link, $select);

        if (mysqli_num_rows($query) > 0) {
            header("location: signup.php?exist=registered");
        } elseif ($password != $repass) {
            header("location: signup.php?pmatch=notmatched");
        } elseif ($image_size > 2000000) {
            header("location: signup.php?img=size");
        } else {
            $insert = "INSERT INTO user ( Username, Email, Password, Phone, image, work, intro) 
                       VALUES ('$username', '$email', '$password','$phone', '$image','$work','$intro')";
            $result = mysqli_query($link, $insert);

            if ($result) {
                move_uploaded_file($image_tmp_name, $image_folder);
                header("location: index.php");
                exit();
            } else {
                header("location: signup.php?err=regerror");
            }
        }
    }
} else {
    echo "Connection Error";
}
?>
