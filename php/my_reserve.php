<?php

    $details = $_SESSION['user'];
    $user_id = $details['id'];
    $sql = "SELECT * FROM users_reservations WHERE user_id = '$user_id' AND status=1";
    $res = mysqli_query($conn, $sql);
    #echo mysqli_num_rows($res);
    if (mysqli_num_rows($res) == 0) {
        echo "no reservations made yet";
    } else {
        echo "<table id='res-table' >";
        echo "<tr>",
        "<th>Table #</th>",
        "<th>Date</th>",
        "<th>Time</th>",
        "<th>Edit</th>",
        "<th>Cancel</th>",
        "</tr>";
        while($row = mysqli_fetch_array($res)) {
            $table_id = $row['table_id'];
            $reserve_date = $row['reserve_date'];
            $reserve_time = $row['reserve_time'];
            $res_det = $user_id.",".$table_id.",".$reserve_date;
            echo "<tr>";
            echo "<td>".$table_id . "</td>"; 
            echo "<td>".$reserve_date . "</td>";
            echo "<td>".$reserve_time . "</td>";
            echo "<form method='post' action='php/modify_reserve.php'>";
            echo "<input type='text' style='display:none;' value='$res_det' name='reserve_det'>";
            echo "<td><input type='submit' name='edit' value='edit' id='edit'></td>";
            echo "<td><input type='submit' name='cancel' value='cancel' id='cancel'></td>";
            echo "</form>";
        }
        echo "</table>";
    }
?>