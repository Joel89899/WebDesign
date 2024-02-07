<?php include"header_admin.php" ?>

<br><br><br><br>
<table class="styled_table">
            <tr>
                <th>User Name</th>
                <th>Email </th>
                <th>Phone</th>
                <th>Delete</th>
                
            </tr>

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
        echo "<tr>";
                echo "<td>$username</td>";
                echo "<td>$email</td>";
                echo "<td>$phone</td>";
                echo "<td><a href=\"delete_process.php?uid=$user_id\">delete</a></td>";
                echo "</tr>";
            }
            ?>

</table>