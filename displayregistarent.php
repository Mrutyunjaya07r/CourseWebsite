<?php
    include "db.php";?>
<h1>Some of the registered Student are</h1>
<table border='1'>
        <thead>
            <th>S.NO</th>
            <th>NAME OF STUDENT</th>
            <th>COURSE CODE</th>
            <th>E-MAIL</th>
        </thead>
        <?php
        $sql="SELECT * FROM `REGI`";
        $result=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['S.NO'];
            $NAME=$row['NAME OF USER'];
            $COURSE=$row['COURSE CODE'];
            $EMAIL=$row['E-MAIL'];
            echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$NAME}</td>";
            echo "<td>{$COURSE}</td>";
            echo "<td>{$EMAIL}</td>";
            echo "</tr>";
        }
        ?>
   </table>