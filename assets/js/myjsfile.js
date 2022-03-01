 // reload function
      function pagereload(timeinternval){
        setTimeout(function () { location.reload(1); }, timeinternval);
      }

      function progressBar(){
        $.preloader.start({
                    modal: true,
                    src : 'assets/img/sprites1.png'
          });
      }

      function progressBarStop(){
         setTimeout(function(){
                    $.preloader.stop();
                }, 30);
      }
      
                 // newRolecreate
            $(function(){      
                $('#newRolecreate').click(function(){
                  if($('#rolename').val()==="" )
                  {
                  toastr.warning('<?php echo $this->session->flashdata('message'); ?>', 'Role Name Cant be Empty', {
                    timeOut: 5000
                });
                  }else{
                  progressBar();
                  var bedUtilization,userMan,hospData;

                  var checkBoxuserMan = document.getElementById("userMan");
                  if (checkBoxuserMan.checked == true){
                   userMan ="on";
                  } else {
                     userMan = 0;
                  }
                    var checkBoxhospData = document.getElementById("hospData");
                  if (checkBoxhospData.checked == true){
                    hospData ="on";
                  } else {
                       hospData =0;
                  }

                    var checkBoxbedUtilization = document.getElementById("bedUtilization");
                  if (checkBoxbedUtilization.checked == true){
                    bedUtilization ="on";
                  } else {
                    bedUtilization = 0;
                  }
                $.ajax({
                    type: 'POST',
                    data: {
                        rolename:$('#rolename').val(),
                        userMan:userMan,
                        hospData:hospData,
                        bedUtilization:bedUtilization,
                    },
                    url: '<?php echo site_url('roleController/create'); ?>',
                    success: function(result) {
                        // alert(result);
                     
                     progressBarStop();
                     
                      var output=JSON.parse(result);
                      if(output===true){
                         toastr.success('<?php echo $this->session->flashdata('message'); ?>', ' Role Created Successfully', {
                    timeOut: 3000
                });
                 // page reloading after sometime
                    pagereload(500);
                
                       }else if(output==="exist"){
                        toastr.info('<?php echo $this->session->flashdata('message'); ?>', '  Role Name Exist', {
                    timeOut: 3000
                });
                       }else{

                         toastr.error('<?php echo $this->session->flashdata('message'); ?>', '  Role Creation Failed', {
                    timeOut: 3000
                });

                       }
                    }
                });

                  }
            });


              $('#updateRole').click(function(){
                  if($('#rolenameeit').val()==="" )
                  {
                  toastr.warning('<?php echo $this->session->flashdata('message'); ?>', 'Role Name Cant be Empty', {
                    timeOut: 5000
                });
                  }else{
                  progressBar();
                  var bedUtilization,userMan,hospData;

                  var checkBoxuserMan = document.getElementById("userManedit");
                  if (checkBoxuserMan.checked == true){
                   userMan ="on";
                  } else {
                     userMan = 0;
                  }
                    var checkBoxhospData = document.getElementById("hospDataedit");
                  if (checkBoxhospData.checked == true){
                    hospData ="on";
                  } else {
                       hospData =0;
                  }

                    var checkBoxbedUtilization = document.getElementById("bedUtilizationedit");
                  if (checkBoxbedUtilization.checked == true){
                    bedUtilization ="on";
                  } else {
                    bedUtilization = 0;
                  }
                $.ajax({
                    type: 'POST',
                    data: {
                      roleid:$('#roleid').val(),
                        rolenameold:$('#rolenameold').val(),
                        rolename:$('#rolenameeit').val(),
                        userMan:userMan,
                        hospData:hospData,
                        bedUtilization:bedUtilization,
                    },
                    url: '<?php echo site_url('roleController/edit'); ?>',
                    success: function(result) {

                     progressBarStop();
                     
                      var output=JSON.parse(result);
                      if(output===true){
                         toastr.success('<?php echo $this->session->flashdata('message'); ?>', ' Role Update Successfully', {
                    timeOut: 3000
                });
                 // page reloading after sometime
                    pagereload(500);
                
                       }else if(output==="exist"){
                        toastr.info('<?php echo $this->session->flashdata('message'); ?>', '  Role Name Exist', {
                    timeOut: 3000
                });
                       }else{

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

                if($(this).data('userman')==="on"){
                  $("#userManedit").prop('checked', true);
                }else{
                  $("#userManedit").prop('checked', false);
                }

                if($(this).data('hospdata')==='on'){
                  $("#hospDataedit").prop('checked', true);
                }else{
                  $("#hospDataedit").prop('checked', false);
                }

                if($(this).data('bedutilization')==='on'){
                  $("#bedUtilizationedit").prop('checked', true);
                }else{
                  $("#bedUtilizationedit").prop('checked', false);
                }
                
            });
