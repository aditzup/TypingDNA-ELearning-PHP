<?php
  session_start();
  if(!isset($_SESSION['name']))
  {
    header("Location: login.html");
  }
  include 'checkuser.php';
  $checkuser = new CheckUser($_SESSION['name']);
  if(strcmp($checkuser->get_enrollment(),"Yes")!=0)
  {
      header("Location: enrollment.php");
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="typingdna.js" type="text/javascript"></script>
  <script src="typing-visualizer.js" type="text/javascript"></script>
  <script src="autocomplete-disabler.js" type="text/javascript"></script>
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
  <script type="text/javascript">
    $(document).ready(function()
    {
      var autocompleteDisabler = new AutocompleteDisabler({ showTypingVisualizer: true, showTDNALogo: true });
      autocompleteDisabler.disableAutocomplete();
      autocompleteDisabler.disableCopyPaste();
      function showNotification() 
      {
        color = 'danger';

        $.notify({
          icon: "nc-icon nc-tap-01",
          message: 'Authentication failed! Please try again.'

        }, {
          type: color,
          timer: 8000,
          placement: {
            from: 'top',
            align: 'center'
          }
        });
      }

      let searchParams = new URLSearchParams(window.location.search);
      if(searchParams.has('message'))
      {
        showNotification();
      }
      

      var tdna  = new TypingDNA();
      try
      {
        document.getElementById("authenticate").addEventListener("click", myFunction);
        function myFunction() 
        {
          var dna_post = document.getElementById("phrase").value;
          var typingPattern = tdna.getTypingPattern({type:2, text:"make yourself necessary to somebody"});
          document.getElementById("tp").value = typingPattern;
        }
      }
      catch(err) 
      {
      }
    });
  </script>
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
          <li>
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
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Verification for course 
                <?php
                  echo $_GET['course'];
                ?>
              </h4>
            </div>
            <div class="card-body">
              <div class="form-group">
                <form action="verification_backend.php" method="post">
                  <label>Type this text</label>
                  <h5>Make yourself necessary to somebody</h5>
                  <input type="text" class="form-control disable-autocomplete" name="phrase" id="phrase" placeholder="" value="">
                  <input type="hidden" name="tp" id="tp">
                  <input type="hidden" name="courseid" id="courseid" value="<?php echo $_GET["courseid"];?>" >
                  <input type="hidden" name="course" id="course" value="<?php echo $_GET["course"];?>" >
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round" id="authenticate">Authenticate</button>
                    </div>
                  </div>
                </form>
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
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  
  <script src="./assets/demo/demo.js"></script>
</body>

</html>
