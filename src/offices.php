<!DOCTYPE html>
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->
  <head>
    <title>MicroService Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../dist/img/favicon.ico">
    <!-- iPad retina icon -->
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../dist/img/apple-touch-icon-precomposed-152.png">
    <!-- iPad retina icon (iOS < 7) -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../dist/img/apple-touch-icon-precomposed-144.png">
    <!-- iPad non-retina icon -->
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../dist/img/apple-touch-icon-precomposed-76.png">
    <!-- iPad non-retina icon (iOS < 7) -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../dist/img/apple-touch-icon-precomposed-72.png">
    <!-- iPhone 6 Plus icon -->
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../dist/img/apple-touch-icon-precomposed-180.png">
    <!-- iPhone retina icon (iOS < 7) -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../dist/img/apple-touch-icon-precomposed-114.png">
    <!-- iPhone non-retina icon (iOS < 7) -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../dist/img/apple-touch-icon-precomposed-57.png">
    <link href="../dist/css/patternfly.min.css" rel="stylesheet" media="screen, print">
    <link href="../dist/css/patternfly-additions.min.css" rel="stylesheet" media="screen, print">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <script src="../components/jquery/dist/jquery.min.js"></script>
    <script src="../components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../components/datatables/media/js/jquery.dataTables.js"></script>
    <script src="../dist/js/patternfly.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-pf" role="navigation">
      <div class="navbar-header">

      </div>
      <div class="collapse navbar-collapse navbar-collapse-1">
        <ul class="nav navbar-nav navbar-utility">
          <li>
            <a href="#">Status</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-primary">
          <li class="active">
            <a href="basic.html" class="active"> </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
          </ol>
          <h1>Welcome to an MicroService Application Demo!</h1>
          <p>The purpose of this application is to demonstrate microservices on the application stack. We hope you enjoy it!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h2>Landing Page Information</h2>
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>Env Var</th>
                <th>Value</th>
              <tr>
            </thead>
            <tbody>
              <tr>
                <td>Pod IP</td>
                <td><?php echo $_SERVER['SERVER_ADDR'] ?></td>
              </tr>
              <tr>
                <td>Pod Port</td>
                <td><?php echo $_SERVER['SERVER_PORT'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
        </div><!-- /col -->
      </div><!-- /row -->
    </div><!-- /container -->

        <div class="col-md-6 col-md-offset-3">
          <h2>Our Offices</h2>
          <p>
            <h3>US Office</h3>
            <img src="./img/office1.jpg">
          </p>

          <p>
            <h3>AU Office</h3>
            <img src="./img/office2.jpg">
          </p>
        </div>

    <script>
      // Initialize Datatables
      $(document).ready( function() {
        $('.datatable').dataTable();
      });
    </script>
  </body>
</html>
