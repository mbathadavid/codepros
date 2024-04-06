<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from siqtheme.siquang.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2024 13:46:25 GMT -->
<head>
    

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Fee Bootstrap Admin Theme with Webpack and Laravel-Mix" />
    <meta name="keywords" content="bootstrap, admin theme, admin dashboard, jquery, webpack, laravel-mix, template, responsive" />
    <meta name="author" content="Codepros" />

    <title><?php echo isset($title) ? $title : '' ?></title>

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/writer/css/siqtheme.css">

    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>assets/writer/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url() ?>assets/writer/img/favicon.png">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/writer/css/pages/dashboard1.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/writer/select2/select2.min.css">
    <script src="<?php echo base_url() ?>/assets/admin2/libs/jquery/jquery.min.js"></script>
</head>

<body class="theme-dark">
    <div class="grid-wrapper sidebar-bg bg1">

        <!-- Theme switcher -->
        <div id="theme-tab">
            <div class="theme-tab-item switch-theme bg-white" data-theme="theme-default" data-toggle="tooltip" title="Light"></div>
            <div class="theme-tab-item switch-theme bg-dark" data-theme="theme-dark" data-toggle="tooltip" title="Dark"></div>
        </div>

        <!-- BOF HEADER -->
        <?php include(APPPATH . 'Views/partials/writer/topbar.php') ?>
        <!-- EOF HEADER -->

        <!-- BOF ASIDE-LEFT -->
        <?php include(APPPATH . 'Views/partials/writer/sidebar.php') ?>
        <!-- EOF ASIDE-LEFT -->

        <!-- BOF MAIN -->
        <div class="main">

            <!-- BOF Breadcrumb -->
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="ti-home"></i> <?php echo isset($pageheading) ? $pageheading : '' ?></a></li>
                    </ol>
                </div>
            </div>
            <!-- EOF Breadcrumb -->

            <!-- BOF MAIN-BODY -->
                <?php $this->renderSection('content') ?>
            <!-- EOF MAIN-BODY -->

        </div>
        <!-- EOF MAIN -->

        <!-- BOF FOOTER -->
        <?php include(APPPATH . 'Views/partials/writer/footer.php') ?>

        <!-- EOF FOOTER -->

        <!-- BOF ASIDE-RIGHT -->
        <?php include(APPPATH . 'Views/partials/writer/sidebar-right.php') ?>
        <!-- EOF ASIDE-RIGHT -->

        <div id="overlay"></div>

    </div> <!-- END WRAPPER -->

    <script src="<?php echo base_url() ?>assets/writer/scripts/siqtheme.js"></script>
    <script src="<?php echo base_url() ?>assets/writer/scripts/pages/dashboard1.js"></script>
    <script src="<?php echo base_url() ?>assets/writer/select2/select2.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.select2').select2();
        });
    </script>
</body>


<!-- Mirrored from siqtheme.siquang.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2024 13:46:41 GMT -->
</html>