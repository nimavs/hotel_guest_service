<?php
session_start();

require_once 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $gname = $_POST['gname'];
    $rno = $_POST['rno'];
    $stype = $_POST['stype'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $rdate = $_POST['rdate'];
    $stime = $_POST['stime'];
   
    //$password = password_hash($password, PASSWORD_DEFAULT);
    
    //$doc = $_POST['doc'];
   // $ss= $_SESSION['username'];

    $sql = "INSERT INTO service (gname, rno, stype, description, priority, rdate, stime) VALUES ('$gname', '$rno', '$stype', '$description','$priority', '$rdate', '$stime')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsiive Admin Dashboard | Buzcatch </title>
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
          <a href="dashboard.php" class="active">
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
          <a href="updateguest.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Update Guest</span>
          </a>
        </li>
        <li>
          <a href="deleteguest.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Delete Guest</span>
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
  
<div class="home-content">
       
       <!--- <div class="overview-boxes">
          <div class="box">-->
   
              <div class="container12">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Service Request</h2><br>
                <form action="" method="POST">
                  
                   <div class="row">
                    <div class="col-25">
                      <label for="description">Guest Name</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="name" name="gname" size="50px">
                    </div>
                  </div>

                    <div class="row">
                    <div class="col-25">
                      <label for="cname">Room Number</label>
                    </div>
                    <div class="col-75">
                     <input type="text" id="name" name="rno" size="50px">
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-25">
                      <label for="description">Service Type</label>
                    </div>
                    <div class="col-75">
                    <select name="stype" id="stype">
                    <option value="select">--Select--</option>
                    <option value="Room Cleaning">Room Cleaning</option>
                    <option value="AC Fixing">AC Fixing</option>
                    <option value="Laundry">Laundry</option>
                    <option value="Food Service">Food Service</option>
                    <option value="Maintenance">Maintenance</option>
                    </select>
                   </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="vacancy">Service Description</label>
                    </div>
                    <div class="col-75">
                    <textarea id="description" name="description" style="height:100px" style="width:200px"></textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">Priority</label>
                    </div>
                    <div class="col-75">
                    <input type="radio" id="Low" name="priority" value="Low">
                    <label for="Low">Low</label><br>
                    <input type="radio" id="Medium" name="priority" value="Medium">
                    <label for="Medium">Medium</label><br>
                    <input type="radio" id="High" name="priority" value="High">
                    <label for="High">High</label><br>
                    </div>
                  </div>

                 <div class="row">
                    <div class="col-25">
                      <label for="description">Request Date</label>
                    </div>
                    <div class="col-75">
                    <input type="date" id="rdate" name="rdate" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">Preferred Service Time</label>
                    </div>
                    <div class="col-75">
                    <input type="time" id="stime" name="stime" size="50px">
                    </div>
                  </div>


 
                  
                  <div class="row">
                   <div class="col-75">
                     
                     <td><button type="submit" name="action" value="save"> Submit </button></td>
                     
                  </div>
                 
                 </div>
                </form>
              </div>


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