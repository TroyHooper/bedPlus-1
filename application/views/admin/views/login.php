<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>NoBedSyndrome | GHS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
        <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->


  </head>
  <body class="fixed-header" >

    <!-- START PAGE-CONTAINER -->
    <div class="login-wrapper " >
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic"  style="background-color: darkgoldenrod">
        <!-- START Background Pic-->
        <img id="img" src="assets/img/imagee1.jpg" data-src="assets/img/imagee1.jpg" data-src-retina="assets/img/imagee1.jpg" >
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20" style = "color: darkgoldenrod">
          <h4 class="semi-bold text-white" style="color: forestgreen">
					A Hospital Bed Utilization Analytics Platform</h4>
          <p class="small text-white">
             © 2021 Ghana Health Service.
          </p>
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->

      <div class="login-container bg-white"  style="border-left:5px solid forestgreen;">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40"  >
          <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo.png">
          <p class="p-t-35">Sign In With Your Management System Account</p>
          <!-- START Login Form -->
          <!-- <form id="form-login" class="p-t-15" role="form" action="index.html"> -->
             <?php echo validation_errors(); ?>
             <form action="VerifyLogin/index" method="POST" class="md-float-material form-material">
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Email</label>
              <div class="controls">
                <input type="text" name="username" maxlength="50" id="username" placeholder="ama.mantebea@nbs.com" class="form-control" required>
              </div>
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Password</label>
              <div class="controls">
                <input type="password" id="password" maxlength="50" class="form-control" name="password" placeholder="Password" required>
              </div>
            </div>
            <!-- START Form Control-->
            <div class="row">
              <div class="col-md-6 no-padding">

              </div>
              <div class="col-md-6 text-right">
                <a href="#" class="text-info small">Forgotten Password?</a>
              </div>

            </div>
            <!-- END Form Control-->
              <!-- <a href="<?php echo base_url("Users"); ?>">login</a> -->
            <button class="btn btn-primary btn-cons m-t-10 example2" type="submit" style="background-color: forestgreen; border-color: forestgreen">Sign in</button>
          </form>
          
        <!-- <button class="btn btn-info example2">Test loading with modal</button> -->

    
          <!--END Login Form-->
          <div class="pull-bottom sm-pull-bottom">
            <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">

              <div class="col-sm-12 no-padding m-t-10">
                <p><small>
                    <a href="#" class="text-info "> About Our Company </a> | <a href="#" class="text-info "> Privacy Policy</a> | <a href="#" class="text-info ">Terms &amp Conditions</a> | <a href="#" class="text-info ">Cookie Policy</a> </small>



                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Login Right Container-->
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- BEGIN VENDOR JS -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-select2/select2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
    <script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <script>
    $(function()
    {
      $('#form-login').validate()
    })
    </script>

              <!-- jquery required -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <!-- the jquery.preloaders plugin -->
    <script src="assets/js/jquery.preloaders.js"></script>

    <script>
        $(function(){



            // Advanced example  assets/img
            $('.example2').click(function(){
              var username=$('#username').val();
              var password=$('#password').val();

              if((username!="") && (password!="")){
            $.preloader.start({
                    modal: true,
                    src : 'assets/img/sprites1.png'
                });

              setTimeout(function(){
                    $.preloader.stop();
                }, 30000);
}

              
            });

           

        });
    </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script>
        var type = "<?php echo $this->session->flashdata('alert-type'); ?>";
        switch (type) {
            case 'success':
                toastr.success('<?php echo $this->session->flashdata('message'); ?>', 'success', {
                    timeOut: 3000
                });
                break
            case 'info':
                toastr.info('<?php echo $this->session->flashdata('message'); ?>', 'info', {
                    timeOut: 5000
                });
                break;
            case 'info':
                toastr.warning('<?php echo $this->session->flashdata('message'); ?>', 'warning', {
                    timeOut: 5000
                });
                break;
            case 'error':
                toastr.error('<?php echo $this->session->flashdata('message'); ?>', 'error', {
                    timeOut: 5000
                });
                break;
        }
    </script>
  </body>
</html>