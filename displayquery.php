<?php
    include "db.php";?>
<H3>some popular query are:</H3>
   <table border='1'>
        <thead>
            <th>QUERY ARE:</th>
            <th>NUMBER ARE:</th>
            <th>NAME ARE:</th>
        </thead>
        <?php
        $sql="SELECT * FROM `Querytab`";
        $result=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $query=$row['QUERY ROW'];
            $number=$row['Phone number'];
            $name=$row['Name OF User'];
            echo "<tr>";
            echo "<td>{$query}</td>";
            echo "<td>{$number}</td>";
            echo "<td>{$name}</td>";
            echo "</tr>";
        }
        ?>
   </table>