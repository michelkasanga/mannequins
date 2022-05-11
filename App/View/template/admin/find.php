
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="../App/View/template/set/images/logo2.png" type="image/gif" />
  <title>
  <?= $title = $title ?? ' '; ?>
  </title>
  <!--     Fonts and icons     -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../App/View/template/admin/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../App/View/template/admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../App/View/template/admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../App/View/template/admin/assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
  <link id="pagestyle" href="../App/View/template/admin/assets/css/find.css" rel="stylesheet" />

	<link rel="stylesheet" type="text/css" href="../App/View/template/set/galerie/css/lightbox.css">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../App/View/template/set/galerie/js/lightbox-plus-jquery.min.js"></script>

<link rel="stylesheet" href="../App/View/template/set/post/css/cards.css">
<link rel="stylesheet" href="../App/View/template/set/post/css/icomoon.css">

<link rel="stylesheet" href="../App/View/template/set/css/one.css">
  <link rel="stylesheet" href="../App/View/template/set/css/demo.css">


  <!-- CSS Files -->
  
      
      

</head>

<body class="">
 
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <span class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " >
              <?= $title = $title ?? 'roxanne'; ?>
            </span>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="?src=roxanne">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                    Dashboard
                  </a>
                </li>
              </ul>
            
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <div class="vide">    
        </div>
        <main class="main-content position-static border-radius-lg " >
        

  <?=$content?>

        </main>
        <div class="vide">    
        </div>
  <!--   Core JS Files   -->
  <script src="../App/View/template/admin/assets/js/core/popper.min.js"></script>
  <script src="../App/View/template/admin/assets/js/core/bootstrap.min.js"></script>
  <script src="../App/View/template/admin/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../App/View/template/admin/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../App/View/template/admin/assets/js/plugins/chartjs.min.js"></script>


  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../App/View/template/admin/assets/js/argon-dashboard.min.js?v=2.0.2"></script>
</body>

</html>