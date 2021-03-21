
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WMS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/shared/style.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php require_once("consumer_header.php");?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php require_once("consumer_sidebar.php");?>
        <!-- partial -->
        <div class="main-panel">
            <div class="container-fluid">
                <h2 class="mt-3">Consumption History</h2><br>
                <select name="" id="">
                    <option value="">Consumer: 9990018 - 10-20744-Mark O'Shelley</option>
                </select>

                <div class="row">
                        <div class="col-md-6">
                            <div class="card mt-3">
                                <div class="card-header"> <h4 class="mt-3">Consumption History</h4></div>
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <td>Time Interval </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">Custom</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Date Interval </td>
                                            <td>: From Date <input type="date"></td>
                                        </tr>
                                        <tr>
                                            <td>To Date </td>
                                            <td><input type="date"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="button" class="btn btn-success" value="Go"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center pb-4">
                                        <h4 class="card-title mb-0">Consumption</h4>
                                        <div id="bar-traffic-legend"></div>
                                    </div>
                                    <p class="mb-4">17% increase in sales than last week</p>
                                    <canvas id="barChart" style="height:250px"></canvas>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="p-4 border-bottom bg-light">
                                <h4 class="card-title mb-0">Line Chart</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center pb-4">
                                    <h4 class="card-title mb-0">Sales Performance</h4>
                                    <div id="line-traffic-legend"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h2 class="mb-0 font-weight-medium">$5,341</h2>
                                        <p class="mb-5 text-muted">Sales</p>
                                    </div>
                                    <div class="col-md-3">
                                        <h2 class="mb-0 font-weight-medium">$1,334</h2>
                                        <p class="mb-5 text-muted">Profits</p>
                                    </div>
                                </div>
                                <canvas id="lineChart" style="height:250px"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="../assets/js/shared/off-canvas.js"></script>
<script src="../assets/js/shared/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="../assets/js/demo_1/dashboard.js"></script>
<script src="../assets/js/shared/chart.js"></script>
<!-- End custom js for this page-->
<script src="../assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
</body>
</html>
