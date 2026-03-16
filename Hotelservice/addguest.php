<?php
session_start();

require_once 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $gname = $_POST['gname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $phoneno = $_POST['phoneno'];
    $emailid = $_POST['emailid'];
    $idproof = $_POST['idproof'];
    $idno = $_POST['idno'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $rno = $_POST['rno'];
    $rtype = $_POST['rtype'];
    $noguest = $_POST['noguest'];
    $pmethod1 = $_POST['pmethod1'];
    $srequest = $_POST['srequest'];
    //$password = password_hash($password, PASSWORD_DEFAULT);
    
    //$doc = $_POST['doc'];
   // $ss= $_SESSION['username'];

    $sql = "INSERT INTO guest (gname, address, gender, phoneno, emailid, idproof, idno, checkin, checkout, rno, rtype, noguest, pmethod1, srequest) VALUES ('$gname', '$address', '$gender', '$phoneno','$emailid', '$idproof', '$idno', '$checkin', '$checkout', '$rno', '$rtype', '$noguest', '$pmethod1', '$srequest')";

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
          <a href="#">
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
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Guest Details</h2><br>
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
                      <label for="cname">Address</label>
                    </div>
                    <div class="col-75">
                    <textarea id="address" name="address" style="height:100px" style="width:200px"></textarea>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-25">
                      <label for="description">Gender</label>
                    </div>
                    <div class="col-75">
                   <input type="radio" id="male" name="gender" value="male">
                   <label for="male">Male</label><br>
                   <input type="radio" id="female" name="gender" value="female">
                   <label for="female">Female</label><br>
                   </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="vacancy">Phone Number</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="phoneno" name="phoneno" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">Email id</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="emailid" name="emailid" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">ID Proof Type</label>
                    </div>
                    <div class="col-75">
                    <select name="idproof" id="idproof">
                    <option value="select">--Select--</option>
                    <option value="Aadhaar">Aadhaar</option>
                    <option value="Passport">Passport</option>
                    <option value="Driving License">Driving License</option>
                    <option value="Voter ID">Voter ID</option>
                    </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">ID Proof NO</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="idno" name="idno" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">Check-in Date</label>
                    </div>
                    <div class="col-75">
                    <input type="date" id="checkin" name="checkin" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">Check-out Date</label>
                    </div>
                    <div class="col-75">
                    <input type="date" id="checkout" name="checkout" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">Room NO</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="rno" name="rno" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">Room Type</label>
                    </div>
                    <div class="col-75">
                    <select name="rtype" id="rtype">
                    <option value="select">--Select--</option>
                    <option value="Single">Single</option>
                    <option value="Double">Double</option>
                    <option value="Deluxe">Deluxe</option>
                    </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">No of Guest</label>
                    </div>
                    <div class="col-75">
                    <input type="text" id="noguest" name="noguest" size="50px">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label for="description">Payment Method</label>
                    </div>
                    <div class="col-75">
                    <input type="checkbox" id="pmethod1" name="pmethod1" value="cash">
                    <label for="pmethod1"> Cash</label><br>
                    <input type="checkbox" id="pmethod2" name="pmethod1" value="Card">
                    <label for="pmethod2"> Card</label><br>
                    <input type="checkbox" id="pmethod3" name="pmethod1" value="UPI">
                    <label for="pmethod3"> UPI</label><br><br>
  
                    </div>
                  </div>
 
                  <div class="row">
                    <div class="col-25">
                      <label for="cname">Special Request</label>
                    </div>
                    <div class="col-75">
                    <textarea id="srequest" name="srequest" style="height:100px" style="width:200px"></textarea>
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