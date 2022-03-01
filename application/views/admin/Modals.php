<!--logout   -->
<div id="logout" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: forestgreen">
                <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                    <span aria-hidden="true" style="color: #fff">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <div class="text-center">
                    <span class="icon icon-lock icon-5x m-y-lg"></span>
                    <h4 class="modal-title" style="font-size: 14px">System Logout</h4>

                </div>
            </div>
            <div class="modal-tabs">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Are You Sure You Want To Logout?</a></li>
                </ul>
            </div>

            <form action="LoginController/logout" method="POST" class="md-float-material form-material">
                <div class="modal-footer">
                    <center><button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>
                </div>
            </form>
        </div>
    </div>
</div>

<!--change password-->
<div id="pwdChange" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <form id="basic-form" method="POST" action="ChangePassword">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: forestgreen">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-edit icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 12px">Change Password</h4>

                    </div>
                </div>
                <div class="modal-tabs">
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="display">


                            <div class="row">
                                <div class="col-md-10">


                                    <div class="form-group">
                                        <label class="form-label" style="font-size: 12px">Old Password</label>

                                        <input type="hidden" id="pagenamepagename" name="pagenamepagename" class="form-control" value="<?php echo $this->uri->segment(1) ?>">
                                        <input id="oldpass" name="oldpass" minlength="6" class="form-control" type="password" style="font-size: 11px" required>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="form-label" style="font-size: 12px">status</label>
                                        <input id="checkstatusll" class="form-control" readonly="" style="font-size: 11px">
                                        <!-- <span  class="form-control" id="checkstatus" ></span> -->
                                    </div>

                                </div>
                            </div>




                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label class="form-label" style="font-size: 12px">New Password</label>

                                        <input id="newpass" name="newpass" minlength="6" class="form-control" type="password" style="font-size: 11px" required>


                                        <!-- <input id="newpass" name="newpass" minlength="6" class="form-control" type="password" style="font-size: 11px" required> -->

                                    </div>


                                    <div class="col-md-6">
                                        <input type="hidden" value="000" id="passwordcompared" class="passwordcompared" name="passwordcompared">
                                        <label class="form-label" style="font-size: 12px">Confirm Password</label>
                                        <input id="confpass" name="confpass" minlength="6" class="form-control" type="password" style="font-size: 11px" required>
                                    </div>

                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-save"></i> Save</button>
                </div>

            </div>
        </form>


    </div>
</div>
<!--create user-->
<div id="createUser" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- <form id="usercreateform"> -->
        <div class="modal-content">
            <div class="modal-header bg-primary" style="background-color: forestgreen">
                <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                    <span aria-hidden="true" style="color: #fff">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <div class="text-center">
                    <span class="icon icon-user-plus icon-5x m-y-lg"></span>
                    <h4 class="modal-title" style="font-size: 12px">Create A New User </h4>

                </div>
            </div>
            <div class="modal-tabs">

                <div class="tab-content">
                    <div class="tab-pane fade active in" id="display2">
                        <form action="/">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="form-label" style="font-size: 12px">User's Full Name</label>
                                        <input id="fullname" class="form-control myuppercaseinput" type="text" style="font-size: 11px">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label" style="font-size: 12px">Sex</label>

                                        <select id="gender" class="form-control" style="font-size: 11px">
                                            <option value="select" selected="">-Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>


                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="form-label" style="font-size: 12px">User Email</label>
                                        <input id="email" class="form-control" type="email" style="font-size: 11px">
                                    </div>


                                    <div class="col-md-4">
                                        <label class="form-label" style="font-size: 12px">Phone Number</label>
                                        <input id="contact" class="form-control" maxlength="10" minlength="10" type="text" style="font-size: 11px" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                    </div>

                                </div>
                            </div>
                            <hr style="border-color: forestgreen">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="form-label" style="font-size: 12px">User Role</label>

                                        <select id="fromrole" class="select form-control floating fromrole" style="font-size: 11px">
                                            <option selected="" value="select">-Assign Role-</option>

                                            <?php foreach ($activeroles  as $each) {
                                            ?>
                                                <option value="<?= $each['roleID'] ?>"><?= $each['roleName'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>



                                    </div>



                                </div>
                            </div>




                    </div>

                </div>
            </div>
            <div class="modal-footer">

                <button type="button" id="newuser" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-save"></i> Save</button>
            </div>
            </form>
        </div>
    </div>
</div>



<?php if ($this->uri->segment(1) === 'Users') {; ?>
    <!--------------------------------------------------------USERS-->

    <!--disable user-->
    <div id="disUser" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="usercrude">
                    <div class="modal-header bg-primary" style="background-color: forestgreen">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-lock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Disable User Account</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <input type="hidden" class="txtuserid" name="userid">
                        <input type="hidden" name="crudtype" value="disable">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Disable <span class="spanuserfullname"></span> Account?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- reset password -->
    <div id="resetUser" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="usercrude">
                    <div class="modal-header bg-primary" style="background-color: forestgreen">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-refresh icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Reset User Account</h4>
                        </div>
                    </div>
                    <div class="modal-tabs">
                        <input type="hidden" class="txtuserid" name="userid">
                        <input type="hidden" name="crudtype" value="reset">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Reset <span class="spanuserfullname"></span> Password? </a></li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  -->
    <div id="enableuser" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="usercrude">
                    <div class="modal-header bg-primary" style="background-color: forestgreen">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-lock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Enable User Account </h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <input type="hidden" class="txtuserid" name="userid">
                        <input type="hidden" name="crudtype" value="enable">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Activate <span class="spanuserfullname"></span> Account?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--edit user-->
    <div id="editUser" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: forestgreen">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-edit icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 12px">Edit User's Details</h4>

                    </div>
                </div>
                <form method="POST" action="usercrude">
                    <div class="modal-tabs">

                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="display4">

                                <div class="form-group">
                                    <div class="row">
                                        <input type="hidden" class="txtuserid" name="userid">
                                        <input type="hidden" name="crudtype" value="update">
                                        <div class="col-md-12">
                                            <label class="form-label" style="font-size: 12px">User's Full Name</label>
                                            <input id="" class="form-control txtuserFullName myuppercaseinput" name="fullname" type="text" style="font-size: 11px">
                                        </div>



                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" style="font-size: 12px">Sex</label>

                                            <select id="demo-select2-10" class="form-control txtusersex" name="gender" style="font-size: 11px">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <!-- <option value="contributor">Other</option> -->

                                            </select>
                                        </div>


                                        <div class="col-md-6">
                                            <label class="form-label" style="font-size: 12px">Phone Number</label>
                                            <input id="form-control-11" class="form-control txtusercontact" type="Number" name="contact" style="font-size: 11px">
                                        </div>

                                    </div>
                                </div>
                                <hr style="border-color: forestgreen">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label" style="font-size: 12px">User Role</label>
                                            <select id="demo-select2-9" class="form-control txtuserrole" name="fromrole" style="font-size: 11px">
                                                <?php foreach ($activeroles  as $each) {
                                                ?>
                                                    <option value="<?= $each['roleID'] ?>"><?= $each['roleName'] ?></option>
                                                <?php
                                                }
                                                ?>

                                            </select>
                                        </div>



                                    </div>
                                </div>




                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!--delete user-->
    <div id="delUser" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="usercrude">
                    <div class="modal-header bg-primary" style="background-color: forestgreen">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-trash icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">User Account Delete</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <input type="hidden" class="txtuserid" name="userid">
                            <input type="hidden" name="crudtype" value="delete">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Delete <span class="spanuserfullname"></span> From System?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </form>
            </div>
        </div>
    </div>


<?php    } else if ($this->uri->segment(1) === 'Roles') { ?>



    <div id="newRole" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: forestgreen">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-group icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 12px">New Role</h4>

                    </div>
                </div>
                <div class="modal-tabs">

                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="display9">
                            <form id="rolecreateform">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label" style="font-size: 12px">Role Name</label>
                                            <input id="rolename" name="rolename" class="form-control myuppercaseinput" type="text" style="font-size: 11px" required>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="hospData" name="hospData"> Hospital Data Management
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="userMan" name="userMan"> Config &amp User Management
                                                </label>
                                            </div>



                                        </div>


                                        <div class="col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="bedUtilization" name="bedUtilization"> Analytics Engine
                                                </label>
                                            </div>


                                        </div>

                                    </div>
                                </div>


                            </form>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" id="newRolecreate" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-save"></i> Create Role</button>
                </div>
            </div>
        </div>
    </div>


    <div id="editRole" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- <form action="edit_delete_enable_disable" method="POST"> -->
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: forestgreen">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-group icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 12px">Edit Role</h4>

                    </div>
                </div>
                <div class="modal-tabs">

                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="display9">
                            <form id="rolecreateform">
                                <div class="form-group">
                                    <div class="row">
                                        <input type="hidden" class="txtid" id="roleid" name="roleid">
                                        <input type="hidden" name="crudtype" value="edit">
                                        <div class="col-md-12">
                                            <label class="form-label" style="font-size: 12px">Role Name</label>
                                            <input name="rolenameold" id="rolenameold" class="form-control txtrolename myuppercaseinput" type="hidden" style="font-size: 11px" required>
                                            <input name="rolename" id="rolenameeit" class="form-control txtrolename" type="text" style="font-size: 11px" required>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="hospDataedit" name="hospData"> Hospital Data Management
                                                </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="userManedit" name="userMan"> Config &amp User Management
                                                </label>
                                            </div>



                                        </div>


                                        <div class="col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="bedUtilizationedit" name="bedUtilization"> Analytics Engine
                                                </label>
                                            </div>


                                        </div>

                                    </div>
                                </div>


                            </form>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">


                    <center><button type="button" class="btn btn-primary" id="updateRole" style="background-color: forestgreen"><i class="icon icon-save"></i> Update Role</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>


                </div>
                <!-- </form> -->
            </div>
        </div>
    </div>



    <!--delete role-->
    <div id="delrole" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="edit_delete_enable_disable" method="POST">
                    <div class="modal-header bg-primary" style="background-color: forestgreen">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-trash icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Role Delete</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <input type="hidden" class="txtid" name="roleid">
                        <input type="hidden" name="crudtype" value="delete">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Delete <span class="spanrolename"></span> Role from the System?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="disrole" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="edit_delete_enable_disable" method="POST">
                    <div class="modal-header bg-primary" style="background-color: forestgreen">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-lock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Disable Role</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <input type="hidden" class="txtid" name="roleid">
                        <input type="hidden" name="crudtype" value="disable">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Disable <span class="spanrolename"></span> Role in The System?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="enarole" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="edit_delete_enable_disable" method="POST">
                    <div class="modal-header bg-primary" style="background-color: forestgreen">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-unlock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Enable Role </h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <input type="hidden" class="txtid" name="roleid">
                        <input type="hidden" name="crudtype" value="enable">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Enable <span class="spanrolename"></span> Role in the System?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </form>
            </div>
        </div>
    </div>
<?php    } else if ($this->uri->segment(1) === 'Services') { ?>
    <!-- new service -->

    <div id="newService" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: forestgreen">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-group icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 12px">New Service</h4>

                    </div>
                </div>
                <div class="modal-tabs">

                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="display9">
                            <form action="/">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label" style="font-size: 12px">Service Name</label>
                                            <input id="serviceName" class="form-control" type="text" style="font-size: 11px">
                                        </div>

                                        <hr>

                                    </div>
                                </div>



                            </form>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" id="newservicecreate" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-save"></i> Register Service</button>
                </div>
            </div>
        </div>
    </div>



    <!-- edit service -->

    <div id="editService" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary" style="background-color: forestgreen">
                    <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                        <span aria-hidden="true" style="color: #fff">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <div class="text-center">
                        <span class="icon icon-group icon-5x m-y-lg"></span>
                        <h4 class="modal-title" style="font-size: 12px">Edit Service</h4>

                    </div>
                </div>
                <div class="modal-tabs">

                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="display9">
                            <form action="/">
                                <div class="form-group">
                                    <div class="row">
                                        <input type="hidden" id="serviceid" class="serviceid" name="serviceid">
                                        <input type="hidden" name="crudtype" value="update">
                                        <div class="col-md-12">
                                            <label class="form-label" style="font-size: 12px">Service Name</label>
                                            <input id="servicenameedit" name="servicename" class="form-control txtservicename" type="text" style="font-size: 11px">
                                            <input id="servicenameold" name="servicename" class="form-control txtservicename" type="hidden" style="font-size: 11px">

                                        </div>

                                        <hr>

                                    </div>
                                </div>



                            </form>

                        </div>

                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" id="editingservice" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-save"></i> Update Service</button>
                </div>
            </div>
        </div>
    </div>


    <!--delete role-->
    <div id="deleteService" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="ServicesCrude" method="POST">
                    <div class="modal-header bg-primary" style="background-color: forestgreen">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-trash icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Service Delete</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <input type="hidden" class="serviceid" name="serviceid">
                            <input type="hidden" name="crudtype" value="delete">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Delete This <span class="spanservicename"></span> As A Service from the System?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="disableService" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="ServicesCrude" method="POST">
                    <div class="modal-header bg-primary" style="background-color: forestgreen">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-lock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Disable Service</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <input type="hidden" class="serviceid" name="serviceid">
                        <input type="hidden" name="crudtype" value="disable">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Disable <span class="spanservicename"></span> As a Service From The System?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="enableService" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="ServicesCrude" method="POST">
                    <div class="modal-header bg-primary" style="background-color: forestgreen">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-unlock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Enable Sercive </h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <input type="hidden" class="serviceid" name="serviceid">
                        <input type="hidden" name="crudtype" value="enable">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Enable <span class="spanservicename"></span> Service in the System?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </form>
            </div>
        </div>
    </div>





<?php    } else if ($this->uri->segment(1) === 'Facilities') { ?>



    <div id="editFacilities" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <form class="basic-form" method="POST" action="crudefacilities">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="background-color: forestgreen">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-group icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 12px">Edit Facility</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">

                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="display9">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <input type="hidden" id="txtfacilityid" class="txtfacilityid " name="facilityid">
                                            <input type="hidden" name="crudtype" value="update">


                                            <label class="form-label" style="font-size: 12px">Hospital Name</label>

                                            <input id="txthospname" name="txthospname" class="form-control myuppercaseinput" type="text" style="font-size: 11px" required="">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="form-label" style="font-size: 12px">Type Of Hospital</label>

                                            <select id="txthosptype" name="txthosptype" class="form-control" style="font-size: 11px" required="">

                                                <option value="CHPS">CHPS</option>
                                                <option value="Clinic">Clinic</option>
                                                <option value="District Hospital">District Hospital</option>
                                                <option value="Health Center">Health Center</option>
                                                <option value="Hospital">Hospital</option>
                                                <option value="Midwife/Maternity">Midwife/Maternity</option>
                                                <option value="Mines">Mines</option>
                                                <option value="Polyclinic">Polyclinic</option>
                                                <option value="Psychiatric Hospital">Psychiatric Hospital</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" style="font-size: 12px">Digital Address</label>

                                            <input id="txtdigitaladdress" name="txtdigiaddress" class="form-control" type="text" style="font-size: 11px" required="">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" style="font-size: 12px">Digital Address</label><br>
                                            <button type="button" id="getghanapostupdate" class="btn btn-primary text-capitalize pull-left" style="background-color: maroon; border-color: maroon"><i class="icon icon-map-marker"></i>&nbsp &nbsp Load Address Data &nbsp &nbsp</button>

                                        </div>

                                    </div>

                                    <hr>
                                    <div class="row">


                                        <div class="col-md-12">

                                            <input type="hidden" class="txtlatitude" name="txtlatitude">
                                            <input type="hidden" class="txtlongitude" name="txtlongitude">
                                            <div id="mapupdate" style="height: 250px; width:95%">

                                            </div>
                                        </div>



                                        <!--  <div class="col-md-12">
                                                  <iframe
                                                          width="100%"
                                                          height="250"
                                                          style="border:0"
                                                          loading="lazy"
                                                          allowfullscreen
                                                          src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ--nUkMCc3w8RSo7Ofnn9uZE&key=AIzaSyDLUxiuRrYJDaf3TG9x0oSrRW6cZ-j0K4s">
                                                  </iframe>
                                              </div> -->


                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" style="font-size: 12px">Region</label>
                                            <input id="txtregion" name="txtregion" class="form-control txtregion" type="text" style="font-size: 11px" readonly>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" style="font-size: 12px">District</label>

                                            <input id="txtdistrict" name="txtdistrict" class="form-control txtdistrict" type="text" style="font-size: 11px" readonly>
                                        </div>



                                    </div>


                                </div>





                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" id="updatebutton" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-save"></i> Update Service</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!--delete role-->
    <div id="deleteFacilities" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="crudefacilities" method="POST">
                    <div class="modal-header bg-primary" style="background-color: forestgreen">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-trash icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Facility Delete</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <center>
                                <input type="hidden" id="txtfacilityid" class="txtfacilityid" name="facilityid">
                                <input type="hidden" name="crudtype" value="delete">

                            </center>

                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Delete This <span class="spanhospname"></span> from the System?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="disableFacilities" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="crudefacilities" method="POST">
                    <div class="modal-header bg-primary" style="background-color: forestgreen">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-lock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Disable Facility</h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <input type="hidden" id="txtfacilityid" class="txtfacilityid" name="facilityid">
                        <input type="hidden" name="crudtype" value="disable">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Disable <span class="spanhospname"></span> From The System?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="enableFacilities" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="crudefacilities" method="POST">
                    <div class="modal-header bg-primary" style="background-color: forestgreen">
                        <button type="button" class="close" data-dismiss="modal" style="color: #fff">
                            <span aria-hidden="true" style="color: #fff">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <div class="text-center">
                            <span class="icon icon-unlock icon-5x m-y-lg"></span>
                            <h4 class="modal-title" style="font-size: 14px">Enable Facility </h4>

                        </div>
                    </div>
                    <div class="modal-tabs">
                        <input type="hidden" id="txtfacilityid" class="txtfacilityid" name="facilityid">
                        <input type="hidden" name="crudtype" value="enable">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#display" data-toggle="tab" style="font-size: 12px">Do You Want To Enable <span class="spanhospname"></span> ?</a></li>

                        </ul>

                    </div>
                    <div class="modal-footer">
                        <center><button type="submit" class="btn btn-primary" style="background-color: forestgreen"><i class="icon icon-check"></i>&nbsp &nbsp Yes &nbsp &nbsp</button> <button type="button" class="btn btn-danger" style="background-color: maroon"><i class="icon icon-close"></i> Cancel</button></center>

                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>