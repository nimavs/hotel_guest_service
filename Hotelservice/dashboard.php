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
          <a href="viewrequest.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">View Request</span>
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
        <img src="welcome3.jpg" width="1100" height="600" alt="myPic" />
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