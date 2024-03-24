<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/adminto/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2024 19:23:25 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Administration Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/admin2/images/favicon.ico">

        <!-- App css -->

        <link href="<?php echo base_url() ?>/assets/admin2/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- icons -->
        <link href="<?php echo base_url() ?>/assets/admin2/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

        <!-- Begin page -->
        <div id="wrapper">


            <!-- Topbar Start -->
            <?php include(APPPATH . 'Views/partials/admin/topbar.php') ?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include(APPPATH . 'Views/partials/admin/sidebar.php') ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
         
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <?php $this->renderSection('content') ?>                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include(APPPATH . 'Views/partials/admin/footer.php') ?>
                <!-- end Footer -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <?php include(APPPATH . 'Views/partials/admin/customizer.php') ?>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor -->
        <script src="<?php echo base_url() ?>/assets/admin2/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/admin2/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/admin2/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/admin2/libs/node-waves/waves.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/admin2/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/admin2/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/admin2/libs/feather-icons/feather.min.js"></script>

        <!-- knob plugin -->
        <script src="<?php echo base_url() ?>/assets/admin2/libs/jquery-knob/jquery.knob.min.js"></script>

        <!--Morris Chart-->
        <script src="<?php echo base_url() ?>/assets/admin2/libs/morris.js06/morris.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/admin2/libs/raphael/raphael.min.js"></script>
  
        <!-- Dashboar init js-->
        <script src="<?php echo base_url() ?>/assets/admin2/js/pages/dashboard.init.js"></script>

        <!-- App js-->
        <script src="<?php echo base_url() ?>/assets/admin2/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/adminto/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2024 19:24:29 GMT -->
</html>