<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    DRAYA|MODEL
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="../App/View/template/set/css/one.css">
  <link rel="stylesheet" href="../App/View/template/set/css/demo.css">
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

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- CSS Files -->
  
  <link rel="stylesheet" href="../App/View/template/set/css/bootstrap.min.css">
        
      

</head>

<body class="">
 

        <!-- Navbar -->
    
  <div class="vide">    
        </div>
        <main class="main-content position-relative border-radius-lg " >
        
            
<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Connection Admin</h4>
                  <p class="mb-0"></p>
                </div>
                <div class="card-body">

                 <form method="post" action="../public/roxanne.php" enctype="multipart/form-data">

                     <div class="mb-3">
                    
                        <div class="input-group input-group-lg input-group-xs">
                          <span class="input-group-addon"> <i class="icon icon-user" style="color: red;"></i> </span>
                          <input type="text" class="form-control" placeholder="Nom Admin" name="name"  style="border:none;background:black; color:blanchedalmond;" >
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="input-group input-group-lg input-group-xs">
                          <span class="input-group-addon"> <i class="icon icon-spades"  style="color: red;"></i> </span>
                          <input type="password" class="form-control" placeholder="mot de pass" name="password"  style="border:none;background:black; color:blanchedalmond;" >
                        </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Connection</button>
                    </div>
                </form>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

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