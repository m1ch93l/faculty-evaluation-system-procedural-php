<?php
    include'koneksyon.php';

    $qryview = "SELECT * FROM criteria_list ";
    $result = mysqli_query($koneksyon, $qryview);

    echo "<h1>Criteria List</h1>";
    if(mysqli_num_rows($result) > 0) {
        echo "<table border='1' width='50%'>";
        echo "<tr align='center'>";
        echo "<td>Criteria List</td>";
        echo "<td>Action</td>";
        echo "<td>Action</td>";
        echo "<tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['criteria']."</td>";
            echo "<td align='center'><a href='viewedit_criterialist.php?criteria-list=".$row ["id"]."' >Edit</a></td>";
            echo "<td align='center'>";
            echo "<a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete_criterialist.php?criteria-list=".$row['id']."' >Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else {
      echo "No records found!";
    }
?>

