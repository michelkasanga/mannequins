<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    <?= $title = $title ?? 'Roxanne'; ?>
  </title>
    <!-- CSS Files -->
    <link href="../App/View/template/admin/assets/css/find.css" rel="stylesheet" />
  <link id="pagestyle" href="../App/View/template/admin/assets/css/argon-dashboard.css?v=2.0.1" type="text/css"  rel="stylesheet" />

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../App/View/template/admin/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../App/View/template/admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../App/View/template/admin/assets/css/nucleo-svg.css" rel="stylesheet" />


	<link rel="stylesheet" type="text/css" href="../App/View/template/set/galerie/css/lightbox.css">
	<!-- Cards -->
  <link rel="stylesheet" href="../App/View/template/set/css/font-awesome/font-awesome.css">
  <script type="text/javascript" src="../App/View/template/set/slider/js/jquery-3.6.0.js"></script>
    <script src="../App/View/template/set/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../App/View/template/set/galerie/js/lightbox-plus-jquery.min.js"></script>

	<link rel="stylesheet" href="../App/View/template/set/post/css/cards.css">
  <link rel="stylesheet" href="../App/View/template/set/post/css/icomoon.css">
  


      
        <link rel="stylesheet" href="../App/View/template/set/css/one.css">
        <link rel="stylesheet" href="../App/View/template/set/css/demo.css">
      
      
    </head>
    <body class="g-sidenav-show   bg-gray-100">    
      <div class="container position-sticky z-index-sticky top-0">
          <div class="row">
            <div class="col-12">
              <!-- Navbar -->
              <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                <div class="container-fluid">
                  <span class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " >
                  <a href="./" ><span class="icon icon-circle-left" ></span></a>
        
                    <?= $title = $title ?? 'roxanne'; ?>
                  </span>
                
                </div>
              </nav>
              <!-- End Navbar -->
            </div>
          </div>
        </div>
    
    
        <div class="vide">    
        </div>
        <main class="main-content position-static border-radius-lg " >
        

        <?=$content;?> 
       </main>
        <div class="vide">    
        </div>

    <script src="../App/View/template/admin/assets/js/core/popper.min.js"></script>
  <script src="../App/View/template/admin/assets/js/core/bootstrap.min.js"></script>
  <script src="../App/View/template/admin/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../App/View/template/admin/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../App/View/template/admin/assets/js/plugins/chartjs.min.js"></script>
  

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../App/View/template/admin/assets/js/argon-dashboard.min.js?v=2.0.2"></script>
    </body>
</html>