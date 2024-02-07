<?php
include("dp.php");
include("header_in.php");

$user_id = $_GET["uid"];

if (count($_POST) > 0) {
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    // Use md5 to hash the password
    $hashedPassword = md5($password);

    $update = "UPDATE user SET Username='$username', Password='$hashedPassword', Email='$_POST[email]', work='$_POST[work]', intro='$_POST[intro]', Phone='$_POST[phone]' WHERE ID=$user_id";
    
    mysqli_query($link, $update);
    header('location: myacc.php');
}

$select = "SELECT * FROM user WHERE ID=$user_id";
$update = mysqli_query($link, $select);

while ($arr = mysqli_fetch_array($update)) {
    $uid = $arr["ID"];
    $uname = $arr["Username"];
    $email = $arr["Email"];
    $phone = $arr["Phone"];
    $pass = $arr["Password"];
    $intro = $arr['intro'];
    $work = $arr['work'];
}
?>

<form action="" method="post">
    <div class="mainContainer">
        <div><input type="hidden" id="id" name="uid" value="<?php echo $uid; ?>"></div><br>
        <div>Edit Username<input type="text" id="uname" name="username" value="<?php echo $uname; ?>"></div><br>
        <div>Edit Password<input type="password" id="pass" name="password" value=""></div><br>
        <div>Edit Email<input type="text" id="email" name="email" value="<?php echo $email; ?>"></div><br>
        <div>Edit Phone<input type="text" id="phone" name="phone" value="<?php echo $phone; ?>"></div><br>
        <div>Edit intro<input type="text" id="intro" name="intro" value="<?php echo $intro; ?>"></div><br>
        <div>Edit work<input type="text" id="work" name="work" value="<?php echo $work; ?>"></div><br>
        <button type="submit" name="edit_btn" value="update">Update</button>
    </div>
</form>

<?php include "footer.php"; ?>
