<?php
include 'config.php';
//if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $sql = "SELECT * FROM service";
   $result = mysqli_query($conn, $sql);
//while($row = mysqli_fetch_assoc($result)) {

//if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Name</th>";
                echo "<th>Room Number</th>";
                echo "<th>Service Type</th>";
                echo "<th>Service Description</th>";
                echo "<th>Priority</th>";
                echo "<th>Requested Date</th>";
                echo "<th>Preferred Time</th>";
                
                //echo "<th>Action</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['rid'] . "</td>";
                echo "<td>" . $row['gname'] . "</td>";
                echo "<td>" . $row['rno'] . "</td>";
                echo "<td>" . $row['stype'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['priority'] . "</td>";
                echo "<td>" . $row['rdate'] . "</td>";
                echo "<td>" . $row['stime'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
      
        // Free result set
        mysqli_free_result($result);
    } 
//}
    $conn->close();
?>
<?php
echo '<button type="button" onclick="history.go(-1);">Go Back</button>';
?>
