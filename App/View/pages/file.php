
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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../App/View/template/admin/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../App/View/template/admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../App/View/template/admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../App/View/template/admin/assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- CSS Files -->

</head>

<body class="g-sidenav-show   bg-gray-100"> <i class="fas fa-star-of-life    "></i> <i class="fa fa-star" aria-hidden="true"></i>


<input type="" name="" id="input" value="" required="required" title="">

<div class="form-group">
  <label for="input" class="col-sm-2 control-label">:</label>
  <div class="col-sm-10">
    <input type="number" name="" id="input" class="form-control" value="" required="required" title="">
  </div>
</div>


<?= sha1('oneNotice');?>
  <!--   Core JS Files   -->
  <script src="../App/View/template/admin/assets/js/core/popper.min.js"></script>
  <script src="../App/View/template/admin/assets/js/core/bootstrap.min.js"></script>
  <script src="../App/View/template/admin/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../App/View/template/admin/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../App/View/template/admin/assets/js/plugins/chartjs.min.js"></script>

  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: [" ","annonce", "news", "model", "article"," "],
        datasets: [{
          label: "pourcentage",
          tension: 0.00,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data:[" ",<?=$pourcentage_notice;?>,<?=$pourcentage_news;?>,<?=$pourcentage_model;?>,<?=$pourcentage_article;?>," ",100],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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