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
                <h4 class="card-title"> Python - Chapter 3 </h4>
              </div>
                <div class="card-body">
                  <p>You could write a Unix shell script or Windows batch files for some of these
                  tasks, but shell scripts are best at moving around files and changing text data,
                  not well-suited for GUI applications or games. You could write a C/C++/Java
                  program, but it can take a lot of development time to get even a first-draft
                  program.  Python is simpler to use, available on Windows, Mac OS X, and Unix
                  operating systems, and will help you get the job done more quickly.</p>
                  <p>Python is simple to use, but it is a real programming language, offering much
                  more structure and support for large programs than shell scripts or batch files
                  can offer.  On the other hand, Python also offers much more error checking than
                  C, and, being a <em>very-high-level language</em>, it has high-level data types built
                  in, such as flexible arrays and dictionaries.  Because of its more general data
                  types Python is applicable to a much larger problem domain than Awk or even
                  Perl, yet many things are at least as easy in Python as in those languages.</p>
                  <p>Python allows you to split your program into modules that can be reused in other
                  Python programs.  It comes with a large collection of standard modules that you
                  can use as the basis of your programs — or as examples to start learning to
                  program in Python.  Some of these modules provide things like file I/O, system
                  calls, sockets, and even interfaces to graphical user interface toolkits like
                  Tk.</p>
                  <p>Python is an interpreted language, which can save you considerable time during
                  program development because no compilation and linking is necessary.  The
                  interpreter can be used interactively, which makes it easy to experiment with
                  features of the language, to write throw-away programs, or to test functions
                  during bottom-up program development. It is also a handy desk calculator.</p>
                  <p>Python enables programs to be written compactly and readably.  Programs written
                  in Python are typically much shorter than equivalent C,  C++, or Java programs,
                  for several reasons:</p>
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
