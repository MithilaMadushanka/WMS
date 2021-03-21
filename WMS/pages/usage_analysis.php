
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
                <h2 class="mt-3">Usage Analysis</h2><br>
                <select name="" id="" class="form-control">
                    <option value="">Consumer: 9990018 - 10-20744-Mark O'Shelley</option>
                </select>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h4 class="mt-3">Your Account Information</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <td>Account Number </td>
                                        <td>: 10-20744</td>
                                    </tr>
                                    <tr>
                                        <td>Consumer Name </td>
                                        <td>: Mark O'Shelley</td>
                                    </tr>
                                    <tr>
                                        <td>Address </td>
                                        <td>: 4500 W. 18th St.</td>
                                    </tr>
                                    <tr>
                                        <td>VN ID </td>
                                        <td>: 9990018</td>
                                    </tr>
                                    <tr>
                                        <td>Water Budget </td>
                                        <td>: High</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-header">
                                <table class="table">
                                    <tr>
                                        <td>LCD Read </td>
                                        <td>0285965.0G @ 12/22/20</td>
                                    </tr>
                                    <tr>
                                        <td>Billing Read</td>
                                        <td>285965 Gx1</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>(icons)</td>
                                    </tr>
                                    <tr>
                                        <td>Meter</td>
                                        <td>ICMM Rain Bird 5/8 x 3/4"</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-header">
                                <table class="table">
                                    <tr>
                                        <td>Time Interval</td>
                                        <td>
                                            <select name="" id="">
                                                <option value="">Custom</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Domestic</td>
                                        <td>2,715.57</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>12345</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center pb-4">
                                    From Date<input type="date">
                                    To Date <input type="date">
                                    <h4 class="card-title mb-0">Usage</h4>
                                    <div id="bar-traffic-legend"></div>
                                </div>

                                <canvas id="barChart" style="height:250px"></canvas>
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
