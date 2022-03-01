<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NoBedSyndrome | GHS</title>
  <meta name="viewport" content="">
  <meta name="description" content="">
  <meta property="og:url" content="">
  <meta property="og:type" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="">
  <meta name="twitter:card" content="">
  <meta name="twitter:site" content="">
  <meta name="twitter:creator" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">
  <link rel="apple-touch-icon" sizes="180x180" href="">
  <link rel="icon" type="image/png" href="assets/img/favicon.ico" sizes="32x32">
  <link rel="icon" type="image/png" href="assets/img/favicon.ico" sizes="16x16">
  <link rel="manifest" href="manifest.json">
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#27ae60">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
  <link rel="stylesheet" href="assets/css/vendor.min.css">
  <link rel="stylesheet" href="assets/css/elephant.min.css">
  <link rel="stylesheet" href="assets/css/application.min.css">
  <link rel="stylesheet" href="assets/css/demo.min.css">

  <style type="text/css">
    label.error {
      color: red;
      font-size: 1rem;
      display: block;
      margin-top: 5px;
    }

    input.error {
      border: 1px dashed red;
      font-weight: 300;
      color: red;
    }

    #map {
      height: 100%;
    }
  </style>

  <!-- <script type="text/javascript">
  
// In this example, we center the map, and add a marker, using a LatLng object
// literal instead of a google.maps.LatLng object. LatLng object literals are
// a convenient way to add a LatLng coordinate and, in most cases, can be used
// in place of a google.maps.LatLng object.
let map;

function initMap() {
  const mapOptions = {
    zoom: 8,
    center: { lat: -34.397, lng: 150.644 },
  };
  map = new google.maps.Map(document.getElementById("map"), mapOptions);
  const marker = new google.maps.Marker({
    // The below line is equivalent to writing:
    // position: new google.maps.LatLng(-34.397, 150.644)
    position: { lat: -34.397, lng: 150.644 },
    map: map,

  });
   map.setZoom(15);
map.panTo(curmarker.position);
  // You can use a LatLng literal in place of a google.maps.LatLng object when
  // creating the Marker object. Once the Marker object is instantiated, its
  // position will be available as a google.maps.LatLng object. In this case,
  // we retrieve the marker's position using the
  // google.maps.LatLng.getPosition() method.
  const infowindow = new google.maps.InfoWindow({
    content: "<p>Marker Location:" + marker.getPosition() + "</p>",
  });
  google.maps.event.addListener(marker, "click", () => {
    infowindow.open(map, marker);
  });
}
</script> -->






</head>

<body class="layout layout-header-fixed">
  <div class="layout-header">
    <div class="navbar " style="background-color: #fff; border-bottom: 4px solid forestgreen">
      <div class="navbar-header">
        <a class="navbar-brand navbar-brand-center" href="<?php base_url($this->uri->segment(1)) ?>">
          <!-- <a class="navbar-brand navbar-brand-center" href=""> -->
          <img class="navbar-brand-logo" src="assets/img/logo.png" alt="" style=" margin-top: -10px">
        </a>
        <button class="navbar-toggler visible-xs-block " type="button" data-target="#sidenav">
          <span class="sr-only">Toggle navigation</span>
          <span class="bars">
            <span class="bar-line bar-line-1 out"></span>
            <span class="bar-line bar-line-2 out"></span>
            <span class="bar-line bar-line-3 out"></span>
          </span>
          <span class="bars bars-x">
            <span class="bar-line bar-line-4"></span>
            <span class="bar-line bar-line-5"></span>
          </span>
        </button>


        <button class="navbar-toggler visible-xs-block " type="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="arrow-up"></span>
          <span class="ellipsis ellipsis-vertical">
            <img class="ellipsis-object" width="32" height="32" src="img/no.png" alt="Teddy Wilson"><span style="font-family: Candara; font-size: 11px">Ama Mantebea </span>

          </span>
        </button>
      </div>
      <div class="navbar-toggleable">
        <nav id="navbar" class="navbar-collapse collapse">
          <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
              <span class="bar-line bar-line-4 in"></span>
              <span class="bar-line bar-line-5 in"></span>
              <span class="bar-line bar-line-6 in"></span></span>

          </button>
          <ul class="nav navbar-nav navbar-right">
            <li class="visible-xs-block">

            </li>


            <li class="dropdown hidden-xs">
              <button class="navbar-account-btn" aria-haspopup="true" style="color: forestgreen">
                <img class="rounded" width="30" height="30" src="assets/img/no.png" alt="" style="color: black;"> <span style="font-family: Verdana, sans-serif; font-size: 11px; color: #000000"><?php echo ucfirst($this->session->userdata('logged_in')['userFullName']) ?> &nbsp &nbsp </span> <button class="btn  btn-success" style="text-transform: capitalize; margin-top: 5px; background-color: forestgreen; border-color: forestgreen" type="button" data-toggle="modal" data-target="#logout"> <i class="icon icon-lock"></i> &nbsp Logout</button> &nbsp &nbsp <button class="btn  btn-success" style="text-transform: capitalize; margin-top: 5px; background-color: #dbdbdb; color: forestgreen; border-color: #dbdbdb" type="button" data-toggle="modal" data-target="#pwdChange"> <i class="icon icon-edit"></i> &nbsp Change Password</button>

              </button>


            </li>


            <li class="visible-xs-block">
              <a href="login-1.html">
                <span class="icon icon-power-off icon-lg icon-fw"></span>
                Sign out
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="layout-main">
    <div class="layout-sidebar">
      <div class="layout-sidebar-backdrop"></div>
      <div class="layout-sidebar-body">
        <div class="custom-scrollbar">
          <nav id="sidenav" class="sidenav-collapse collapse">
            <ul class="sidenav">

              <?php if ($this->session->userdata('logged_in')['userMan'] === "on") { ?>
                <li class="sidenav-heading" style="color: #000"><b><u>User Management</u></b></li>



                <?php if ($this->uri->segment(1) === 'Users') {; ?>
                  <li class="sidenav-item" style="background-color: forestgreen;">
                    <a href="<?php echo base_url("Users"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-edit" style="color: #fff"></span>
                      <span class="sidenav-label" style="font-size: 11px; color: #fff">Accounts Utilities</span>
                    </a>
                  </li>
                <?php    } else { ?>
                  <li class="sidenav-item ">
                    <a href="<?php echo base_url("Users"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-edit"></span>
                      <span class="sidenav-label" style="font-size: 11px">Accounts Utilities</span>
                    </a>
                  </li>
                <?php } ?>

                <?php if ($this->uri->segment(1) === 'Roles') {; ?>
                  <li class="sidenav-item" style="background-color: forestgreen;">
                    <a href="<?php echo base_url("Roles"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-edit" style="color: #fff"></span>
                      <span class="sidenav-label" style="font-size: 11px; color: #fff">Role Management</span>
                    </a>
                  </li>
                <?php    } else { ?>
                  <li class="sidenav-item ">
                    <a href="<?php echo base_url("Roles"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-briefcase"></span>
                      <span class="sidenav-label" style="font-size: 11px">Role Management</span>
                    </a>
                  </li>
                <?php } ?>


                <li class="sidenav-item ">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-users"></span>
                    <span class="sidenav-label" style="font-size: 11px" data-toggle="modal" data-target="#createUser">Create A New User</span>
                  </a>

                </li>
              <?php } ?>

              <?php if ($this->session->userdata('logged_in')['hospData'] === "on") { ?>
                <li class="sidenav-heading" style="color: #000"><b><u>Hospital Data Management</u></b></li>

                <?php if ($this->uri->segment(1) === 'Services') {; ?>
                  <li class="sidenav-item" style="background-color: forestgreen;">
                    <a href="<?php echo base_url("Roles"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-list" style="color: #fff"></span>
                      <span class="sidenav-label" style="font-size: 11px; color: #fff">Services Catalog</span>
                    </a>
                  </li>
                <?php    } else { ?>
                  <li class="sidenav-item ">
                    <a href="<?php echo base_url("Services"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-list"></span>
                      <span class="sidenav-label" style="font-size: 11px">Services Catalog</span>
                    </a>
                  </li>
                <?php } ?>

                <?php if ($this->uri->segment(1) === 'Onboard') {; ?>
                  <li class="sidenav-item" style="background-color: forestgreen;">
                    <a href="<?php echo base_url("Onboard"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon  icon-bank" style="color: #fff"></span>
                      <span class="sidenav-label" style="font-size: 11px; color: #fff">Onboard A New Hospital</span>
                    </a>
                  </li>
                <?php    } else { ?>
                  <li class="sidenav-item ">
                    <a href="<?php echo base_url("Onboard"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon  icon-bank"></span>
                      <span class="sidenav-label" style="font-size: 11px">Onboard A New Hospital</span>
                    </a>
                  </li>
                <?php } ?>

                <?php if ($this->uri->segment(1) === 'Facilities') {; ?>
                  <li class="sidenav-item" style="background-color: forestgreen;">
                    <a href="<?php echo base_url("Facilities"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon  icon-edit" style="color: #fff"></span>
                      <span class="sidenav-label" style="font-size: 11px; color: #fff">Hospital Data Utilities</span>
                    </a>
                  </li>
                <?php    } else { ?>
                  <li class="sidenav-item ">
                    <a href="<?php echo base_url("Facilities"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon  icon-edit"></span>
                      <span class="sidenav-label" style="font-size: 11px">Hospital Data Utilities</span>
                    </a>
                  </li>
                <?php } ?>

              <?php } ?>

              <?php if ($this->session->userdata('logged_in')['bedUtilization'] === "on") { ?>




                <li class="sidenav-heading" style="color: #000"><b><u>Bed Utilization Analytics</u></b></li>

                <?php if ($this->uri->segment(1) === 'NationalAnalytics') {; ?>
                  <li class="sidenav-item" style="background-color: forestgreen;">
                    <a href="<?php echo base_url("NationalAnalytics"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon  icon-line-chart" style="color: #fff"></span>
                      <span class="sidenav-label" style="font-size: 11px; color: #fff">National Overview</span>
                    </a>
                  </li>
                <?php    } else { ?>
                  <li class="sidenav-item ">
                    <a href="<?php echo base_url("NationalAnalytics"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon  icon-line-chart"></span>
                      <span class="sidenav-label" style="font-size: 11px">National Overview</span>
                    </a>
                  </li>
                <?php } ?>


                <?php if ($this->uri->segment(1) === 'RegionalAnalytics') {; ?>
                  <li class="sidenav-item" style="background-color: forestgreen;">
                    <a href="<?php echo base_url("RegionalAnalytics"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon  icon-line-chart" style="color: #fff"></span>
                      <span class="sidenav-label" style="font-size: 11px; color: #fff">Regional Overview</span>
                    </a>
                  </li>
                <?php    } else { ?>
                  <li class="sidenav-item ">
                    <a href="<?php echo base_url("RegionalAnalytics"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon  icon-line-chart"></span>
                      <span class="sidenav-label" style="font-size: 11px">Regional Overview</span>
                    </a>
                  </li>
                <?php } ?>


                <?php if ($this->uri->segment(1) === 'DistrictAnalytics') {; ?>
                  <li class="sidenav-item" style="background-color: forestgreen;">
                    <a href="<?php echo base_url("DistrictAnalytics"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon  icon-line-chart" style="color: #fff"></span>
                      <span class="sidenav-label" style="font-size: 11px; color: #fff">District Overview</span>
                    </a>
                  </li>
                <?php    } else { ?>
                  <li class="sidenav-item ">
                    <a href="<?php echo base_url("DistrictAnalytics"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-area-chart"></span>
                      <span class="sidenav-label" style="font-size: 11px">District Overview</span>
                    </a>
                  </li>
                <?php } ?>


                <?php if ($this->uri->segment(1) === 'HospitalAnalytics') {; ?>
                  <li class="sidenav-item" style="background-color: forestgreen;">
                    <a href="<?php echo base_url("HospitalAnalytics"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon  icon-line-chart" style="color: #fff"></span>
                      <span class="sidenav-label" style="font-size: 11px; color: #fff">Hospsital (Specific)</span>
                    </a>
                  </li>
                <?php    } else { ?>
                  <li class="sidenav-item ">
                    <a href="<?php echo base_url("HospitalAnalytics"); ?>" aria-haspopup="true">
                      <span class="sidenav-icon icon icon-bar-chart"></span>
                      <span class="sidenav-label" style="font-size: 11px">Hospsital (Specific)</span>
                    </a>
                  </li>
                <?php } ?>

              <?php } ?>







            </ul>
          </nav>
        </div>
      </div>
    </div>


    <!-- ==================================body=================================== -->
    <?php include(APPPATH . 'views/admin/views/' . $page . '.php'); ?>
    <!-- ====================================end================================== -->


    <?php include(APPPATH . 'views/admin/Modals.php'); ?>


    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/elephant.min.js"></script>
    <script src="assets/js/application.min.js"></script>
    <script src="assets/js/demo.min.js"></script>
    <script>
      (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>



    <!-- jquery required -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <!-- the jquery.preloaders plugin -->
    <script src="assets/js/jquery.preloaders.js"></script>
    <script>
      $(function() {
        // Advanced example
        $('.example2').click(function() {

          $.preloader.start({
            modal: true,
            src: 'assets/img/sprites1.png'
          });

          setTimeout(function() {
            $.preloader.stop();
          }, 3000);

        });



      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> -->

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





    <!-- ==================================body=================================== -->
    <?php include(APPPATH . 'views/admin/js.php'); ?>
    <!-- ====================================end================================== -->



    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js'></script> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js'></script>

    <script>
      $(document).ready(function() {

        // document.body.style.zoom = "80%";

        $("#mytoogling").toggle();
        document.getElementById("submitingform").disabled = true;

        $(".basic-form").validate({});

        // buttonbutton

        $("#basic-form").validate({

          // rules: {
          //   oldpass : {
          //     required: true,
          //     minlength: 6
          //   },
          //   newpass: {
          //     required: true,
          //     minlength: 6
          //   },
          //   confpass: {
          //     required: true,
          //     minlength: 6
          //   },

          // },

          rules: {

            oldpass: {
              required: "please enter old password ",
              equalTo: "#passwordcompared"
            },
            confpass: {
              equalTo: "#newpass"
            }
          },
          messages: {
            oldpass: {
              required: "Please enter your Old Password",

            },
            newpass: {
              required: "Please enter your New Password",
            },
            confpass: {
              required: "Please Confirm New Password"
            }
          }
        });
      });


      document.getElementById("oldpass").onchange = function() {
        comparingpassword()
      };

      function comparingpassword() {


        var oldpass = $('#oldpass').val();



        $.ajax({
          type: 'POST',
          data: {
            oldpass: $('#oldpass').val(),

          },
          url: '<?php echo site_url('LoginController/shasha512'); ?>',
          success: function(result) {
            // alert(result)
            var output = JSON.parse(result);
            if (output === true) {

              $('.passwordcompared').val($('#oldpass').val());

              $('#checkstatusll').val("Correct");

            } else {

              $('.passwordcompared').val("97466666");
              $('#checkstatusll').val("Wrong");
            }

          }

        });

      }

      (function() {
        var minutes = true; // change to false if you'd rather use seconds
        var interval = minutes ? 60000 : 1000;
        var IDLE_TIMEOUT = 10; // 3 minutes in this example
        var idleCounter = 0;

        document.onmousemove = document.onkeypress = function() {
          idleCounter = 0;
        };

        window.setInterval(function() {
          if (++idleCounter >= IDLE_TIMEOUT) {
            document.location.href = "<?php echo base_url("logout"); ?>";
            // window.location.reload(); // or whatever you want to do
          }
        }, interval);
      }());
    </script>
    <!-- <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script> -->
    <script>
      $.getJSON("https://api.ipify.org?format=json",
        function(data) {

          // Setting text of element P with id gfg
          // alert(data.ip);
          $("#myipaddress").val(data.ip);


        })
    </script>
    <!-- comverting some basic inputs into uppercase -->
      <script>
        $(function() {
            $('.myuppercaseinput').keyup(function() {
                this.value = this.value.toLocaleUpperCase();
            });
        });
</script> 
	
	
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLUxiuRrYJDaf3TG9x0oSrRW6cZ-j0K4s&callback=initMap&libraries=places&v=weekly" async></script>




    <!--  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLUxiuRrYJDaf3TG9x0oSrRW6cZ-j0K4s&callback=initMap&libraries=&v=weekly"
      async
    ></script> -->

</body>

</html>