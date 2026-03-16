<?php
include 'config.php';
//if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $sql = "SELECT * FROM guest";
   $result = mysqli_query($conn, $sql);
//while($row = mysqli_fetch_assoc($result)) {

//if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=2>";
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
$sql = "UPDATE guest SET gname = ?, address = ?, gender =?, phoneno =?, emailid =?, idproof =?, idno =?, checkin =?, checkout =?, rno =?, rtype =?, noguest =?, pmethod1 =?, srequest =? WHERE gid = ?";
$stmt = $conn->prepare($sql);


// Execute and check for errors
if ($stmt->execute()) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>




<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsiive Admin Dashboard | AL IMTEDAD </title>
    <link rel="stylesheet" href="style1.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Custom</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="addguest.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Guest Details</span>
          </a>
        </li>
        <li>
          <a href="service.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Service Request</span>
          </a>
        </li>
        <li>
          <a href="viewguest.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">view Guest</span>
          </a>
        </li>
        <li>
          <a href="index.php">
          <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
       
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
     <!-- <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>-->
      
    </nav>

    
      </div>

      
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>




<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style3.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="divB">
<div class="divD">
<?php
include 'config.php';
//$conn = mysql_connect("localhost", "root", "");
//$db = mysql_select_db("hotel", $conn);
if (isset($_GET['submit'])) {
$gid = $_GET['gid'];
$gname = $_GET['gname'];
$address = $_GET['address'];
$gender = $_GET['gender'];
$phoneno = $_GET['phoneno'];
$emailid = $_GET['emailid'];
$idproof = $_GET['idproof'];
$idno = $_GET['idno'];
$checkin = $_GET['checkin'];
$checkout = $_GET['checkout'];
$rno = $_GET['rno'];
$rtype = $_GET['rtype'];
$noguest = $_GET['noguest'];
$pmethod1 = $_GET['pmethod1'];
$srequest = $_GET['srequest'];
$query = mysql_query("update guest set
gname='$gname', address='$address', gender='$gender',
phoneno='$phoneno', emailid='$emailid', idproof='$idproof', idno='$idno', checkin='$checkin', checkout='$checkout', rno='$rno', rtype='$rtype', noguest='$noguest', pmethod1='$pmethod1', srequest='$srequest' where gid='$gid'", $conn);
}
$query = mysql_query("select * from guest", $conn);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='updateguest.php?update={$row['gid']}'>{$row['gname']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from guest where gid=$update", $conn);
while ($row1 = mysql_fetch_array($query1)) {
    
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='gid' value='{$row1['gid']}' />";
echo "<br />";
echo "<label>" . "Guest Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='gname' value='{$row1['gname']}' />";
echo "<br />";
echo "<label>" . "Address:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='address' value='{$row1['address']}' />";
echo "<br />";
echo "<label>" . "Gender:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='gender' value='{$row1['gender']}' />";
echo "<br />";
echo "<label>" . "Phone No:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='phoneno'>{$row1['phoneno']}";
echo "</textarea>";
echo "<br />";
echo "<label>" . "Email Id:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='emailid' value='{$row1['emailid']}' />";
echo "<br />";
echo "<label>" . "ID Proof:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='idproof' value='{$row1['idproof']}' />";
echo "<br />";
echo "<label>" . "ID No:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='idno' value='{$row1['idno']}' />";
echo "<br />";
echo "<label>" . "Check-in:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='checkin' value='{$row1['checkin']}' />";
echo "<br />";
echo "<label>" . "Check-out:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='checkout' value='{$row1['checkout']}' />";
echo "<br />";
echo "<label>" . "Room No:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='rno' value='{$row1['rno']}' />";
echo "<br />";
echo "<label>" . "Roon Type:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='rtype' value='{$row1['rtype']}' />";
echo "<br />";
echo "<label>" . "No Of Guest:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='noguest' value='{$row1['noguest']}' />";
echo "<br />";
echo "<label>" . "payment:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='pmethod1' value='{$row1['pmethod1']}' />";
echo "<br />";
echo "<label>" . "Service Request :" . "</label>" . "<br />";
echo"<input class='input' type='text' name='srequest' value='{$row1['srequest']}' />";
echo "<br />";

echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysql_close($conn);
?>
</body>
</html>