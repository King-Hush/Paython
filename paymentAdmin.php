<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>PAYTHON</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="addstyles.css">
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="sidebar">
    <div class="logo">
      <img src="assets/images/logo.png" alt="logo">
      <span class="logo_name">PayThon</span>
    </div>
    <ul class="sidebar_list">
      <li>
        <a href="admin.php" >
          <i class="bx bx-grid-alt"></i>
          <span class="list_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="studentlist.php">
            <i class='bx bx-face'></i>
          <span class="list_name">Student</span>
        </a>
      </li>
      <li>
        <a href="organization.html">
            <i class='bx bx-group'></i>
          <span class="list_name">Organization</span>
        </a>
      </li>
      <li>
        <a href="#"class="active">
          <i class='bx bxl-paypal'></i>
          <span class="list_name">Payment</span>
        </a>
      </li>
      <li class="log_out">
        <a href="login.php">
          <i class="bx bx-log-out"></i>
          <span class="list_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>

  <section class="navbar">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class="bx bx-search"></i>
      </div>
      
      <div class="profile-details">
        <img src="pictures\python.jpg" alt="">
        <span class="admin_name">NAME</span>
        <i class="bx bx-chevron-down"></i>
      </div>
    </nav>
    <!-- Student Table Section -->
    <section class="main">
      <div class="main-box">
        <h2>List of Student Payments</h2>

        <div class="search-filter">
            <input type="text" id="searchBar" placeholder="Search..." class="search-bar">
            
            <select id="categoryDropdown" class="category-dropdown">
              <option value="all">All</option>
              <option value="NO">NO</option>
              <option value="StudentID">StudentID</option>
              <option value="Name">Name</option>
              <option value="Last Name">Last Name</option>

            </select>
          </div>

        <table id="studentTable">
          <thead>
            <tr>
              <th>NO.</th>
              <th>StudentID</th>
              <th>Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Course</th>
              <th>Year</th>
              <th>Section</th>
            </tr>
          </thead>
          <tbody id="table-body">
            <tr>
              <td>1</td>
              <td>2024</td>
              <td>Josh</td>
              <td>Que</td>
              <td>hz2023@gmail.com</td>
              <td>BSCS</td>
              <td>2nd</td>
              <td>2A</td>
            </tr>
            <tr>
            <td>2</td>
              <td>2024</td>
              <td>JM</td>
              <td>Esperat</td>
              <td>hz2023@gmail.com</td>
              <td>BSCS</td>
              <td>2nd</td>
              <td>2A</td>
            </tr>
            <tr>
            <td>3</td>
              <td>2024</td>
              <td>Justine</td>
              <td>Morgia</td>
              <td>hz2024@gmail.com</td>
              <td>BSIT</td>
              <td>4th</td>
              <td>4A</td>
            </tr>
            <tr>
            <td>4</td>
              <td>2024</td>
              <td>Trisha</td>
              <td>AtAt</td>
              <td>hz2025@gmail.com</td>
              <td>BSIT</td>
              <td>3rd</td>
              <td>3A</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  <script src="script.js"></script>
    </html>
  