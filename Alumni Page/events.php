<?php include "header.php"; ?>

<div>
    <h2 style="text-align: center;"> Coming Events</h2>
</div>

<div class="">
    
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
        echo "<div class='container_a'>";
        echo "<div class='user-card-content'>";
        echo strtoupper($name)."<br>";
        echo "$date"."<br>";
        echo "$description"."<br>";
        echo "</div>";
        echo "</div>";
        echo "</tr>";
    }
    ?>


</div>

<?php include "footer.php"; ?>