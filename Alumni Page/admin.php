<?php include"header_admin.php" ?>

<br><br><br><br>
<table class="styled_table">
    <tr>
        
        <th>Event name</th>
        <th>Date </th>
        <th>Description</th>
        <th>Delete</th>
    
    </tr>

    <?php
    include("dp.php");
    $select = "SELECT * from events";
    $row = mysqli_query($link, $select);

    while ($arr = mysqli_fetch_array($row)) {
        $description = $arr["description"];
        $date = $arr["date"];
        $name = $arr["name"];
        $event_id = $arr["ID"];

        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$date</td>";
        echo "<td>$description</td>";
        echo "<td><a href=\"eventdelete_process.php?eid=$event_id\">delete</a></td>";
        echo "</tr>";
    }
    ?>

</table>

    <br><br>
    <form action="event_enter.php" method="post">
        <h2>Post Event</h2>
        <div class="mainContainer">
            <div>Event Name&nbsp;<input type="text" name="ename" placeholder="Enter User name"></div><br>
            <div>Date&nbsp;<input type="text" name="edate" placeholder="Enter email"></div><br>
            <div>Description &nbsp;<input type="text" name="edes"></div><br>
            <!-- Submit button -->
            <button type="submit" name="event_post">Post</button>
            
        </div>

    </form>

    

    <?php include"footer.php" ?>


