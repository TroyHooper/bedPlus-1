    <script type="text/javascript">
      // reload function
      function pagereload(timeinternval) {
        setTimeout(function() {
          location.reload(1);
        }, timeinternval);
      }

      function progressBar() {
        $.preloader.start({
          modal: true,
          src: 'assets/img/sprites1.png'
        });
      }

      function progressBarStop() {
        setTimeout(function() {
          $.preloader.stop();
        }, 30);
      }

      // newRolecreate
      $(function() {

        // =========================================================USERS=====================================================================================================
        //new user create
        $('#newuser').click(function() {
          if ($('#fullname').val() === "" || $('#gender').val() === "select" || $('#email').val() === "" || $('#contact').val() === "" || $('.fromrole').val() === "select") {
            toastr.warning('<?php echo $this->session->flashdata('message'); ?>', 'Fields Cant Be Empty', {
              timeOut: 5000
            });
          } else {



            progressBar();

            $.ajax({
              type: 'POST',
              data: {
                fullname: $('#fullname').val(),
                gender: $('#gender').val(),
                email: $('#email').val(),
                contact: $('#contact').val(),
                fromrole: $('.fromrole').val(),
              },
              url: '<?php echo site_url('UsersController/create'); ?>',
              success: function(result) {
                //  alert(result);
                progressBarStop();

                var output = JSON.parse(result);
                if (output === true) {
                  toastr.success('<?php echo $this->session->flashdata('message'); ?>', ' New User Created Successfully', {
                    timeOut: 3000
                  });
                  // page reloading after sometime
                  pagereload(500);

                } else if (output === "exist") {
                  toastr.info('<?php echo $this->session->flashdata('message'); ?>', '  User With That Email Exist Already', {
                    timeOut: 3000
                  });
                } else {

                  toastr.error('<?php echo $this->session->flashdata('message'); ?>', '  New User Creation Failed', {
                    timeOut: 3000
                  });

                }
              }
            });

          }
        });

        ///////////roles edit, enable disable and delete////////////////////////// txtuserid
        $(document).on('click', '.btnedituser,.btndisableuser,.btnenableuser,.btndeleteuser,.btnresetuser', function() {


          $('.txtuserid').val($(this).data('id'));
          $('.spanuserfullname').html($(this).data('userfullname'));
          $('.txtuserFullName').val($(this).data('userfullname'));

          $('.txtuseremail').val($(this).data('email'));
          $('.txtusercontact').val($(this).data('contact'));
          $('.txtuserrole').val($(this).data('role'));
          $('.txtusersex').val($(this).data('sex'));




        });


        //=======================================================ROLES================================================================================================= 
        $('#newRolecreate').click(function() {
          if ($('#rolename').val() === "") {
            toastr.warning('<?php echo $this->session->flashdata('message'); ?>', 'Role Name Cant be Empty', {
              timeOut: 5000
            });
          } else {
            progressBar();
            var bedUtilization, userMan, hospData;

            var checkBoxuserMan = document.getElementById("userMan");
            if (checkBoxuserMan.checked == true) {
              userMan = "on";
            } else {
              userMan = 0;
            }
            var checkBoxhospData = document.getElementById("hospData");
            if (checkBoxhospData.checked == true) {
              hospData = "on";
            } else {
              hospData = 0;
            }

            var checkBoxbedUtilization = document.getElementById("bedUtilization");
            if (checkBoxbedUtilization.checked == true) {
              bedUtilization = "on";
            } else {
              bedUtilization = 0;
            }
            $.ajax({
              type: 'POST',
              data: {
                rolename: $('#rolename').val(),
                userMan: userMan,
                hospData: hospData,
                bedUtilization: bedUtilization,
              },
              url: '<?php echo site_url('roleController/create'); ?>',
              success: function(result) {
                // alert(result);

                progressBarStop();

                var output = JSON.parse(result);
                if (output === true) {
                  toastr.success('<?php echo $this->session->flashdata('message'); ?>', ' Role Created Successfully', {
                    timeOut: 3000
                  });
                  // page reloading after sometime
                  pagereload(500);

                } else if (output === "exist") {
                  toastr.info('<?php echo $this->session->flashdata('message'); ?>', '  Role Name Exist', {
                    timeOut: 3000
                  });
                } else {

                  toastr.error('<?php echo $this->session->flashdata('message'); ?>', '  Role Creation Failed', {
                    timeOut: 3000
                  });

                }
              }
            });

          }
        });


        $('#updateRole').click(function() {
          if ($('#rolenameeit').val() === "") {
            toastr.warning('<?php echo $this->session->flashdata('message'); ?>', 'Role Name Cant be Empty', {
              timeOut: 5000
            });
          } else {
            progressBar();
            var bedUtilization, userMan, hospData;

            var checkBoxuserMan = document.getElementById("userManedit");
            if (checkBoxuserMan.checked == true) {
              userMan = "on";
            } else {
              userMan = 0;
            }
            var checkBoxhospData = document.getElementById("hospDataedit");
            if (checkBoxhospData.checked == true) {
              hospData = "on";
            } else {
              hospData = 0;
            }

            var checkBoxbedUtilization = document.getElementById("bedUtilizationedit");
            if (checkBoxbedUtilization.checked == true) {
              bedUtilization = "on";
            } else {
              bedUtilization = 0;
            }
            $.ajax({
              type: 'POST',
              data: {
                roleid: $('#roleid').val(),
                rolenameold: $('#rolenameold').val(),
                rolename: $('#rolenameeit').val(),
                userMan: userMan,
                hospData: hospData,
                bedUtilization: bedUtilization,
              },
              url: '<?php echo site_url('roleController/edit'); ?>',
              success: function(result) {

                progressBarStop();

                var output = JSON.parse(result);
                if (output === true) {
                  toastr.success('<?php echo $this->session->flashdata('message'); ?>', ' Role Update Successfully', {
                    timeOut: 3000
                  });
                  // page reloading after sometime
                  pagereload(500);

                } else if (output === "exist") {
                  toastr.info('<?php echo $this->session->flashdata('message'); ?>', '  Role Name Exist', {
                    timeOut: 3000
                  });
                } else {

                  toastr.error('<?php echo $this->session->flashdata('message'); ?>', '  Role Update Failed', {
                    timeOut: 3000
                  });

                }
              }
            });

          }
        });

      });



      ///////////roles edit, enable disable and delete//////////////////////////
      $(document).on('click', '.btneditrole,.btndisablerole,.btnenablerole,.btndeleterole', function() {


        $('.txtid').val($(this).data('id'));
        $('.txtrolename').val($(this).data('rolename'));
        $('.spanrolename').html($(this).data('rolename'));

        if ($(this).data('userman') === "on") {
          $("#userManedit").prop('checked', true);
        } else {
          $("#userManedit").prop('checked', false);
        }

        if ($(this).data('hospdata') === 'on') {
          $("#hospDataedit").prop('checked', true);
        } else {
          $("#hospDataedit").prop('checked', false);
        }

        if ($(this).data('bedutilization') === 'on') {
          $("#bedUtilizationedit").prop('checked', true);
        } else {
          $("#bedUtilizationedit").prop('checked', false);
        }

      });


      // ============================================services============================================================================================
      // newservicecreate


      $('#newservicecreate').click(function() {
        if ($('#serviceName').val() === "") {
          toastr.warning('<?php echo $this->session->flashdata('message'); ?>', 'Field Cant Be Empty', {
            timeOut: 5000
          });
        } else {
          progressBar();

          $.ajax({
            type: 'POST',
            data: {
              serviceName: $('#serviceName').val(),
            },
            url: '<?php echo site_url('ServicesController/create'); ?>',
            success: function(result) {
              // alert(result);
              progressBarStop();

              var output = JSON.parse(result);
              if (output === true) {
                toastr.success('<?php echo $this->session->flashdata('message'); ?>', ' New Service Created Successfully', {
                  timeOut: 3000
                });
                // page reloading after sometime
                pagereload(500);

              } else if (output === "exist") {
                toastr.info('<?php echo $this->session->flashdata('message'); ?>', '  Service Name Exist Already', {
                  timeOut: 3000
                });
              } else {

                toastr.error('<?php echo $this->session->flashdata('message'); ?>', '  New Service Creation Failed', {
                  timeOut: 3000
                });

              }
            }
          });

        }
      });


      $('#editingservice').click(function() {
        if ($('#servicenameedit').val() === "") {
          toastr.warning('<?php echo $this->session->flashdata('message'); ?>', 'Field Cant Be Empty', {
            timeOut: 5000
          });
        } else {
          progressBar();

          $.ajax({
            type: 'POST',
            data: {
              serviceName: $('#servicenameedit').val(),
              servicenameold: $('#servicenameold').val(),
              serviceid: $('#serviceid').val()
            },
            url: '<?php echo site_url('ServicesController/edit'); ?>',
            success: function(result) {
              // alert(result); 
              progressBarStop();

              var output = JSON.parse(result);
              if (output === true) {
                toastr.success('<?php echo $this->session->flashdata('message'); ?>', ' Service Update Successfully', {
                  timeOut: 3000
                });
                // page reloading after sometime
                pagereload(500);

              } else if (output === "exist") {
                toastr.info('<?php echo $this->session->flashdata('message'); ?>', '  Service Name Exist Already', {
                  timeOut: 3000
                });
              } else {

                toastr.error('<?php echo $this->session->flashdata('message'); ?>', '  Service Update Failed', {
                  timeOut: 3000
                });

              }
            }
          });

        }
      });

      ///////////roles edit, enable disable and delete////////////////////////// txtuserid
      $(document).on('click', '.btneditservice,.btndisableservice,.btnenableservice,.btndeleteservice', function() {
        // serviceid

        $('.serviceid').val($(this).data('id'));
        $('.spanservicename').html($(this).data('servicename'));
        $('.txtservicename').val($(this).data('servicename'));





      });
      // ======================================================================================================================================================

      //      $('#newuser').click(function(){
      //       if($('#fullname').val()==="" || $('#gender').val()==="select" || $('#email').val()==="" || $('#contact').val()==="" || $('.fromrole').val()==="select" )
      //       {
      //       toastr.warning('<?php echo $this->session->flashdata('message'); ?>', 'Fields Cant Be Empty', {
      //         timeOut: 5000
      //     });
      //       }else{



      //       progressBar();

      //     $.ajax({
      //         type: 'POST',
      //         data: {
      //              fullname:$('#fullname').val(),
      //              gender:$('#gender').val(),
      //              email:$('#email').val(),
      //              contact:$('#contact').val(),
      //               fromrole:$('.fromrole').val(),
      //         },
      //         url: '<?php echo site_url('UsersController/create'); ?>',
      //         success: function(result) {
      //              // alert(result);
      //          progressBarStop();

      //           var output=JSON.parse(result);
      //           if(output===true){
      //              toastr.success('<?php echo $this->session->flashdata('message'); ?>', ' New User Created Successfully', {
      //         timeOut: 3000
      //     });
      //      // page reloading after sometime
      //         pagereload(500);

      //            }else if(output==="exist"){
      //             toastr.info('<?php echo $this->session->flashdata('message'); ?>', '  User With That Email Exist Already', {
      //         timeOut: 3000
      //     });
      //            }else{

      //              toastr.error('<?php echo $this->session->flashdata('message'); ?>', '  New User Creation Failed', {
      //         timeOut: 3000
      //     });

      //            }
      //         }
      //     });

      //       }
      // });
      // ========================ONBOARDING FACILITY======================================================================================



      $('#registeringfacility').click(function() {

        if ($('#fullname').val() === "" || $('#adminemail').val() === ""

          ||
          $('#admincontact').val() === "" ||
          $('#region').val() === "select" ||
          $('#district').val() === "select" ||
          $('#hostitalcategory').val() === 'select' ||
          $('#hospitaltype').val() === 'select' ||
          $('#hospitalname').val() === "" ||
          $('#digitaladdress').val() === ""
        ) {
          toastr.warning('<?php echo $this->session->flashdata('message'); ?>', 'Field(s) Cant Be Empty', {
            timeOut: 5000
          });
        } else {

          alert($('#onbaordingform').serialize());



          progressBar();

          $.ajax({
            type: 'POST',
            data: {
              fullname: $('#fullname').val(),
              gender: $('#gender').val(),
              email: $('#email').val(),
              contact: $('#contact').val(),
              fromrole: $('.fromrole').val(),
            },
            url: '<?php echo site_url('/'); ?>',
            success: function(result) {
              // alert(result);
              progressBarStop();

              var output = JSON.parse(result);
              if (output === true) {
                toastr.success('<?php echo $this->session->flashdata('message'); ?>', ' New User Created Successfully', {
                  timeOut: 3000
                });
                // page reloading after sometime
                pagereload(500);

              } else if (output === "exist") {
                toastr.info('<?php echo $this->session->flashdata('message'); ?>', '  User With That Email Exist Already', {
                  timeOut: 3000
                });
              } else {

                toastr.error('<?php echo $this->session->flashdata('message'); ?>', '  New User Creation Failed', {
                  timeOut: 3000
                });

              }
            }
          });

        }
      });


      // ========================================FACILITY
      ///////////roles edit, enable disable and delete////////////////////////// txtuserid

      var mylatitude, mylongitude = 0;
      $(document).on('click', '.btneditFacilities,.btndisableFacilities,.btnenableFacilities,.btndeleteFacilities', function() {


        // alert($(this).data('digiaddress'));

        $('.txtfacilityid').val($(this).data('id'));
        $('.spanhospname').html($(this).data('hospname'));
        $('#txthospname').val($(this).data('hospname'));
        $('#txtdigitaladdress').val($(this).data('digiaddress'));
        $('.txtlatitude').val($(this).data('latitude'));
        $('.txtlongitude').val($(this).data('longitude'));
        $('#txthosptype').val($(this).data('hosptype'));

        $('#txtregion').val($(this).data('region'));
        $('#txtdistrict').val($(this).data('district'));

        var mylatitude = $(this).data('latitude');

        var mylongitude = $(this).data('longitude');







        const map = new google.maps.Map(document.getElementById("mapupdate"), {
          center: {
            lat: mylatitude,
            lng: mylongitude
          },
          zoom: 15,
        });

        const marker = new google.maps.Marker({
          // The below line is equivalent to writing:
          // position: new google.maps.LatLng(-34.397, 150.644)
          position: {
            lat: mylatitude,
            lng: mylongitude
          },
          map: map,

        });



        const request = {

          fields: ["name", "formatted_address", "geometry"],
        };
        const infowindow = new google.maps.InfoWindow();
        const service = new google.maps.places.PlacesService(map);
        service.getDetails(request, (place, status) => {
          if (
            status === google.maps.places.PlacesServiceStatus.OK &&
            place &&
            place.geometry &&
            place.geometry.location
          ) {
            google.maps.event.addListener(marker, "click", function() {
              infowindow.setContent(
                "<div><strong>" +
                place.name +
                "</strong><br>" +
                "Place ID: " +
                place.place_id +
                "<br>" +
                place.formatted_address +
                "</div>"
              );
              infowindow.open(map, this);
            });

          }
        });



      });



      

      $('#getghanapost').click(function() {
        document.getElementById("submitingform").disabled = true;
        if ($('#txtdigitaladdress').val() != "") {
          $("#mytoogling").hide();
          progressBar();

          $.ajax({
            type: 'POST',
            data: {
              ghpost: $('#txtdigitaladdress').val(),

            },
            url: '<?php echo site_url('OnboardingController/locationlocate'); ?>',
            success: function(result) {
              // alert(result);

              progressBarStop();
              var mylatitude, mylongitude = 0;
              var output = JSON.parse(result);
              var output1 = output.Table[0]['Region'];
              var District = output.Table[0]['District'];
              mylatitude = output.Table[0]['CenterLatitude'];
              mylongitude = output.Table[0]['CenterLongitude'];

              if (output.Table[0]['District'].length > 0) {
                document.getElementById("submitingform").disabled = false;
              } else {
                document.getElementById("submitingform").disabled = true;
              }

              $("#mytoogling").show();

              $(".txtdistrict").val(output.Table[0]['District']);
              $(".txtregion").val(output.Table[0]['Region']);


              $(".txtCenterLatitude").val(output.Table[0]['CenterLatitude']);
              $(".txtCenterLongitude").val(output.Table[0]['CenterLongitude']);



              const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                  lat: mylatitude,
                  lng: mylongitude
                },
                zoom: 15,
              });

              const marker = new google.maps.Marker({
                // The below line is equivalent to writing:
                // position: new google.maps.LatLng(-34.397, 150.644)
                position: {
                  lat: mylatitude,
                  lng: mylongitude
                },
                map: map,

              });



              const request = {

                fields: ["name", "formatted_address", "geometry"],
              };
              const infowindow = new google.maps.InfoWindow();
              const service = new google.maps.places.PlacesService(map);
              service.getDetails(request, (place, status) => {
                if (
                  status === google.maps.places.PlacesServiceStatus.OK &&
                  place &&
                  place.geometry &&
                  place.geometry.location
                ) {
                  google.maps.event.addListener(marker, "click", function() {
                    infowindow.setContent(
                      "<div><strong>" +
                      place.name +
                      "</strong><br>" +
                      "Place ID: " +
                      place.place_id +
                      "<br>" +
                      place.formatted_address +
                      "</div>"
                    );
                    infowindow.open(map, this);
                  });

                }
              });


            }
          });
        } else {

          toastr.error('<?php echo $this->session->flashdata('message'); ?>', '  Please Enter Digital Address', {
            timeOut: 3000
          });

        }



      });


      // updating location of hospital
      $('#getghanapostupdate').click(function() {
        document.getElementById("updatebutton").disabled = true;


        if ($('#txtdigitaladdress').val() != "") {
          $("#mytoogling").hide();
          progressBar();

          $.ajax({
            type: 'POST',
            data: {
              ghpost: $('#txtdigitaladdress').val(),

            },
            url: '<?php echo site_url('OnboardingController/locationlocate'); ?>',
            success: function(result) {
              // alert(result);

              progressBarStop();
              var mylatitude, mylongitude = 0;
              var output = JSON.parse(result);
              var output1 = output.Table[0]['Region'];
              var District = output.Table[0]['District'];
              mylatitude = output.Table[0]['CenterLatitude'];
              mylongitude = output.Table[0]['CenterLongitude'];

              if (output.Table[0]['District'].length > 0) {
                document.getElementById("updatebutton").disabled = false;
              } else {
                document.getElementById("updatebutton").disabled = true;
              }

              $("#mytoogling").show();

              $(".txtdistrict").val(output.Table[0]['District']);
              $(".txtregion").val(output.Table[0]['Region']);


              $(".txtlatitude").val(output.Table[0]['CenterLatitude']);
              $(".txtlongitude").val(output.Table[0]['CenterLongitude']);



              const map = new google.maps.Map(document.getElementById("mapupdate"), {
                center: {
                  lat: mylatitude,
                  lng: mylongitude
                },
                zoom: 15,
              });

              const marker = new google.maps.Marker({
                // The below line is equivalent to writing:
                // position: new google.maps.LatLng(-34.397, 150.644)
                position: {
                  lat: mylatitude,
                  lng: mylongitude
                },
                map: map,

              });



              const request = {

                fields: ["name", "formatted_address", "geometry"],
              };
              const infowindow = new google.maps.InfoWindow();
              const service = new google.maps.places.PlacesService(map);
              service.getDetails(request, (place, status) => {
                if (
                  status === google.maps.places.PlacesServiceStatus.OK &&
                  place &&
                  place.geometry &&
                  place.geometry.location
                ) {
                  google.maps.event.addListener(marker, "click", function() {
                    infowindow.setContent(
                      "<div><strong>" +
                      place.name +
                      "</strong><br>" +
                      "Place ID: " +
                      place.place_id +
                      "<br>" +
                      place.formatted_address +
                      "</div>"
                    );
                    infowindow.open(map, this);
                  });

                }
              });


            }
          });
        } else {

          toastr.error('<?php echo $this->session->flashdata('message'); ?>', '  Please Enter Digital Address', {
            timeOut: 3000
          });

        }



      });
    </script>