  <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
              <span class="d-ib">User Management</span>
            </h1>
            <p class="title-bar-description">
              <small  style ="color:forestgreen">Utilities</small>

            </p>
          </div>
          <div class="row gutter-xs">
              <div class="col-xs-12">
                  <div class="card">
                      <div class="card-header">
                          <div class="card-actions">

                              <button type="button" class="card-action card-reload" title="Reload"></button>

                          </div>

                      </div>
                      <div class="card-body">
                          <table id="demo-datatables-responsive-1" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%" style="font-size: 12px">
                              <thead>
                              <tr>
                                  <th>User Email</th>
                                  <th>Staff Name</th>
                                  <th>Created On</th>
                                  <th>Sex</th>
                                  <th>User Role</th>
                                  <th><center>Status</center></th>
                                  <th><Center> Actions</Center></th>


                              </tr>
                              </thead>
                              <tbody>
                                 <?php $no=1; ?>
                                <?php foreach ($allusers as $record) :?>
                                   <tr>
                                   <!-- <td> <?php echo $no++;?></td> -->
                        <td> <?php echo ucfirst($record->userEmail);?></td>
                          <td> <?php echo ucfirst($record->userFullName);?></td>
                            <td> <?php echo ucfirst($record->CreatedOn);?></td>
                              <td> <?php echo ucfirst($record->Sex);?></td>
                                <td> <?php echo ucfirst($record->roleName);?></td>

                                  <td>
                                    <center>
                                  <?php if($record->accountStatus==="A"){?>
                          <span class="bg-success label label-lg label-light-primary label-inline">Active</span>

                          <?php }else{?>
                           <span class="bg-danger label label-lg label-light-danger label-inline">Disabled</span>
                            <?php } ?>

                           </center>
                           </td>

                           
                           

                                   <td><Center> 
                                   <button class="btnedituser btn  btn-warning" style = "text-transform: capitalize; background-color: forestgreen; ; border-color: forestgreen"  type="button" data-toggle="modal" data-target="#editUser" 
                                    data-id="<?php echo $record->id;?>"
                           data-email="<?php echo $record->userEmail;?>"
                           data-userfullname="<?php echo $record->userFullName;?>"
                           data-sex="<?php echo $record->Sex;?>"
                           data-role="<?php echo $record->roleID;?>"
                           data-contact="<?php echo $record->contact;?>"> <i class = "icon icon-edit"></i></button>|

                                    <button class="btnresetuser btn  btn-warning" style = "text-transform: capitalize; background-color:; ; border-color: "  type="button" data-toggle="modal" data-target="#resetUser"
                                     data-id="<?php echo $record->id;?>"
                                      data-email="<?php echo $record->userEmail;?>"
                           data-userfullname="<?php echo $record->userFullName;?>"
                           data-sex="<?php echo $record->Sex;?>"
                           data-role="<?php echo $record->roleName;?>"
                           data-contact="<?php echo $record->contact;?>"> <i class = "icon icon-refresh"></i></button>
                           <?php if($record->accountStatus==="A"){?> | 

                                    <button class="btndisableuser btn  btn-warning" style = "text-transform: capitalize; background-color: black; ; border-color: black"  type="button" data-toggle="modal" data-target="#disUser"
                                     data-id="<?php echo $record->id;?>"
                                      data-email="<?php echo $record->userEmail;?>"
                           data-userfullname="<?php echo $record->userFullName;?>"
                           data-sex="<?php echo $record->Sex;?>"
                           data-role="<?php echo $record->roleName;?>"
                           data-contact="<?php echo $record->contact;?>"> <i class = "icon icon-lock"></i></button>
                           <?php } else{?> | 

                                    <button class="btnenableuser btn  btn-warning" style = "text-transform: capitalize; background-color: black; ; border-color: black"  type="button" data-toggle="modal" data-target="#enableuser"
                                     data-id="<?php echo $record->id;?>"
                                       data-email="<?php echo $record->userEmail;?>"
                           data-userfullname="<?php echo $record->userFullName;?>"
                           data-sex="<?php echo $record->Sex;?>"
                           data-role="<?php echo $record->roleName;?>"
                           data-contact="<?php echo $record->contact;?>"> <i class = "icon icon-unlock"></i></button>
                         <?php } ?>

                                     <button class="btndeleteuser btn  btn-warning" style = "text-transform: capitalize;  background-color: maroon; border-color: maroon"  type="button" data-toggle="modal" data-target="#delUser" 
                           data-id="<?php echo $record->id;?>"
                           data-email="<?php echo $record->userEmail;?>"
                           data-userfullname="<?php echo $record->userFullName;?>"
                           data-sex="<?php echo $record->Sex;?>"
                           data-role="<?php echo $record->roleName;?>"
                           data-contact="<?php echo $record->contact;?>"> <i class = "icon icon-trash"></i></button>

                                   </Center></td>



                                 </tr>
                               <?php endforeach ?>
                              
                             

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>

            <div class="divider">
                <div class="divider-content " style = "color: forestgreen"><b><i class="icon icon-line-chart"></i> Statistics</b></div>
            </div>
          <div class="row">


              <div class="col-md-6">
                  <div class="panel panel-body" data-toggle="match-height">
                      <h6 class="text-left m-t-0">Gender Distribution</h6>
                      <div class="row">

                          <div class="col-xs-3">
                              <br><br>
                              <ul class="list-unstyled">
                                  <li class="m-b">
                                      <small class="nowrap">
                                          <span class="icon icon-square icon-fw" style="color: forestgreen"></span>
                                          Male
                                      </small>
                                  </li>
                                  <li class="m-b">
                                      <small class="nowrap">
                                          <span class="icon icon-square icon-fw" style="color: gainsboro"></span>
                                          Female
                                      </small>
                                  </li>


                              </ul>
                          </div>
                          <div class="col-xs-6">
                              <canvas data-chart="pie" data-labels='["Male", "Female"]' data-values='[{"backgroundColor": ["forestgreen", "gainsboro"], "data": [<?php echo $pageinfo['0']['male']?>, <?php echo $pageinfo['0']['female']?>]}]' data-hide='["scalesX", "scalesY", "legend"]' ></canvas>
                          </div>
                      </div>
                  </div></div>


                  <div class="col-md-6">
                      <div class="panel panel-body" data-toggle="match-height">
                          <h6 class="text-left m-t-0">Account Status Distribution</h6>
                          <div class="row">

                              <div class="col-xs-3">
                                  <br><br>
                                  <ul class="list-unstyled">
                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: forestgreen"></span>
                                              Active
                                          </small>
                                      </li>
                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: gainsboro"></span>
                                              Disabled
                                          </small>
                                      </li>


                                  </ul>
                              </div>
                              <div class="col-xs-6">
                                  <canvas data-chart="pie" data-labels='["Active", "Disabled"]' data-values='[{"backgroundColor": ["forestgreen", "gainsboro"], "data": [<?php echo $pageinfo['0']['active']?>, <?php echo $pageinfo['0']['disactive']?>]}]' data-hide='["scalesX", "scalesY", "legend"]' ></canvas>
                              </div>
                          </div>
                      </div>
                  </div>





          </div></div>

</div>



