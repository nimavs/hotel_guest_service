<?php
include 'config.php';
//if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $sql = "SELECT * FROM guest";
   $result = mysqli_query($conn, $sql);
//while($row = mysqli_fetch_assoc($result)) {

//if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Name</th>";
                echo "<th>Address</th>";
                echo "<th>Gender</th>";
                echo "<th>Phone</th>";
                echo "<th>Email</th>";
                echo "<th>ID Proof</th>";
                echo "<th>ID No</th>";
                echo "<th>Check-in</th>";
                echo "<th>Check-out</th>";
                echo "<th>Room No</th>";
                echo "<th>Room Type</th>";
                echo "<th>No guest</th>";
                echo "<th>Payment</th>";
                echo "<th>Request</th>";
                echo "<th>Action</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['gid'] . "</td>";
                echo "<td>" . $row['gname'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['phoneno'] . "</td>";
                echo "<td>" . $row['emailid'] . "</td>";
                echo "<td>" . $row['idproof'] . "</td>";
                echo "<td>" . $row['idno'] . "</td>";
                echo "<td>" . $row['checkin'] . "</td>";
                echo "<td>" . $row['checkout'] . "</td>";
                echo "<td>" . $row['rno'] . "</td>";
                echo "<td>" . $row['rtype'] . "</td>";
                echo "<td>" . $row['noguest'] . "</td>";
                echo "<td>" . $row['pmethod1'] . "</td>";
                echo "<td>" . $row['srequest'] . "</td>";
               echo "<td>";
    // This link passes the 'gid' to 'updateguest.php'
    echo "<a href='deleteguest.php?gid=" . $row['gid'] . "'>Delete</a>";
    echo "</td>";
               
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
include 'config.php';

// Check if the 'id' parameter is set in the URL
if (isset($_GET['gid'])) {
    // Get the ID from the URL and cast it to an integer for safety
    $gid = (int)$_GET['gid'];

    // SQL to delete a record using a prepared statement
    $sql = "DELETE FROM guest WHERE gid = ?";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);
    
    // Bind the parameter ( 'i' for integer)
    $stmt->bind_param("i", $gid);
    
    // Execute the query
    if ($stmt->execute()) {
        echo "Record deleted successfully. Redirecting...";
        // Redirect back to the main page after deletion
        header("Location: deleteguest.php");
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
} else {
  
}

// Close connection
$conn->close();
?>
<?php
echo '<button type="button" onclick="history.go(-1);">Go Back</button>';
?>