<?php
  session_start();
  if(!isset($_SESSION['name']))
  {
    header("Location: login.html");
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="https://www.typingdna.com/favicon.ico">
  <link rel="icon" type="image/png" href="https://www.typingdna.com/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    TypingDNA E-Learning Demo
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="https://www.typingdna.com/favicon.ico">
          </div>
        </a>
        <a class="simple-text logo-normal">
          E-Learning
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li  class="active">
            <a href="./course.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Course</p>
            </a>
          </li>
          <li>
            <a href="./logout.php">
              <i class="nc-icon nc-simple-delete"></i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">TypingDNA E-learning Demo - Welcome <?php echo $_SESSION['name']?></a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Courses available</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Course
                      </th>
                      <th>
                        Chapter
                      </th>
                      <th>
                        Difficulty
                      </th>
                      <th >
                        Action
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Python
                        </td>
                        <td>
                          1
                        </td>
                        <td>
                          Begginers
                        </td>
                        <td >
                          <a href="./verification.php?course=Python 1&courseid=python1">
                            <button class="btn btn-primary btn-round">Start</button>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Python
                        </td>
                        <td>
                          2
                        </td>
                        <td>
                          Intermediate
                        </td>
                        <td >
                          <a href="./verification.php?course=Python 2&courseid=python2">
                            <button class="btn btn-primary btn-round">Start</button>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Python
                        </td>
                        <td>
                          3
                        </td>
                        <td>
                          Advanced
                        </td>
                        <td >
                          <a href="./verification.php?course=Python 3&courseid=python3">
                            <button class="btn btn-primary btn-round">Start</button>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          PHP
                        </td>
                        <td>
                          1
                        </td>
                        <td>
                          Begginers
                        </td>
                        <td >
                          <a href="./verification.php?course=PHP 1&courseid=php1">
                            <button class="btn btn-primary btn-round">Start</button>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          PHP
                        </td>
                        <td>
                          2
                        </td>
                        <td>
                          Intermediate
                        </td>
                        <td >
                          <a href="./verification.php?course=PHP 2&courseid=php2">
                            <button class="btn btn-primary btn-round">Start</button>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          PHP
                        </td>
                        <td>
                          3
                        </td>
                        <td>
                          Advanced
                        </td>
                        <td >
                          <a href="./verification.php?course=PHP 3&courseid=php3">
                            <button class="btn btn-primary btn-round">Start</button>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <span class="copyright">
                © 2021, TypingDNA E-Learning Demo
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>
</html>
