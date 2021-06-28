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
                <h4 class="card-title"> Python - Chapter 1 </h4>
              </div>
                <div class="card-body">
                  <p>Python is an easy to learn, powerful programming language. It has efficient
                  high-level data structures and a simple but effective approach to
                  object-oriented programming. Python’s elegant syntax and dynamic typing,
                  together with its interpreted nature, make it an ideal language for scripting
                  and rapid application development in many areas on most platforms.</p>
                  <p>The Python interpreter and the extensive standard library are freely available
                  in source or binary form for all major platforms from the Python Web site,
                  <a class="reference external" href="https://www.python.org/">https://www.python.org/</a>, and may be freely distributed. The same site also
                  contains distributions of and pointers to many free third party Python modules,
                  programs and tools, and additional documentation.</p>
                  <p>The Python interpreter is easily extended with new functions and data types
                  implemented in C or C++ (or other languages callable from C). Python is also
                  suitable as an extension language for customizable applications.</p>
                  <p>This tutorial introduces the reader informally to the basic concepts and
                  features of the Python language and system. It helps to have a Python
                  interpreter handy for hands-on experience, but all examples are self-contained,
                  so the tutorial can be read off-line as well.</p>
                </div>
                <div class="row">
                  <div class="update ml-auto mr-auto">
                    <a href="./course.php">
                      <button class="btn btn-primary btn-round">Back to Course</button>
                    </a>
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
