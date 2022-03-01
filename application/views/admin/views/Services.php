
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
              <span class="d-ib">Hospital Service Listings</span>
            </h1>
            <p class="title-bar-description">
              <small  style ="color:forestgreen">Utilities</small>

            </p>
          </div>

            <div class = "row">
                <div class = "col-lg-12">

                    <div class="col-md-2">
                        <div class="card" style="background-color: forestgreen; color: #fff">
                            <div class="card-values">
                                <div class="p-x">
                                    <small>Total Services Listed <i class = "icon icon-building" style = "color: #fff"></i></small><br><br>
                                    <h3 class="card-title fw-l"><?php echo count($allservice); ?></h3>
                                </div>
                            </div>
                            <div class="card-chart">
                                <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [25250, 23370, 25568, 28961, 26762, 30072, 25135]}]' data-scales='{"yAxes": [{ "ticks": {"max": 32327}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                            </div>
                        </div>

                    </div></div></div>
          <div class="divider">
              <div class="divider-content " style = "color: forestgreen"><b><i class="icon icon-files-o"></i> Catalog</b></div>
          </div>

          <div class="pull-left">
              <button class=" btn  btn-success" style = "text-transform: capitalize; background-color: forestgreen; border-color: forestgreen" data-toggle="modal" data-target="#newService" type="button"> <i class = "icon icon-group"></i> &nbsp New Service</button>


          </div> <br> <br> <br>

          <div class="row gutter-xs">
              <div class="col-xs-12">
                  <div class="card">
                      <div class="card-header">


                      </div>
                      <div class="card-body">
                          <table id="demo-datatables-responsive-1" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%" style="font-size: 12px">
                              <thead>
                              <tr>
                                  <th>Service Code</th>
                                  <th>Service Name</th>

                                  <th><Center>Status</Center></th>
                                  <th><Center> Actions</Center></th>


                              </tr>
                              </thead>
                              <tbody>
                                <?php $no=1; ?>
                                <?php foreach ($allservice as $record) :?>
                                   <tr>
                                   <td> <?php echo $record->serviceCode?></td> 
                            
                                  <td><?php echo $record->serviceName ?></td>
                                  <td> <center>
                                  <?php if($record->serviceStatus==="A"){?>
                          <span class="bg-success label label-lg label-light-primary label-inline">Active</span>

                          <?php }else{?>
                           <span class="bg-danger label label-lg label-light-danger label-inline">Disabled</span>
                            <?php } ?>

                           </center></td>

                                
                                  <td><Center> <button class="btneditservice btn  btn-warning" style = "text-transform: capitalize; background-color: goldenrod; ; border-color: goldenrod"  type="button" data-toggle="modal" data-target="#editService" 
                                    data-id="<?php echo $record->id;?>"
  data-servicename="<?php echo $record->serviceName;?>"> <i class = "icon icon-edit"></i></button> 
   <?php if($record->serviceStatus==="A"){?>

                                    | <button class="btndisableservice btn  btn-warning" style = "text-transform: capitalize; background-color: black; ; border-color: black"  type="button" data-toggle="modal" data-target="#disableService"  data-id="<?php echo $record->id;?>"
  data-servicename="<?php echo $record->serviceName;?>"> <i class = "icon icon-lock"></i></button> 

  <?php }else{?>
                                     | <button class="btnenableservice btn  btn-warning" style = "text-transform: capitalize; background-color: black; ; border-color: black"  type="button" data-toggle="modal" data-target="#enableService" data-id="<?php echo $record->id;?>"
  data-servicename="<?php echo $record->serviceName;?>"> <i class = "icon icon-unlock"></i></button> 


 <?php } ?>

                                    |  <button class="btndeleteservice btn  btn-warning" style = "text-transform: capitalize;  background-color: maroon; border-color: maroon"  type="button" data-toggle="modal" data-target="#deleteService" data-id="<?php echo $record->id;?>"
  data-servicename="<?php echo $record->serviceName;?>"> <i class = "icon icon-trash"></i></button></Center></td>






                              </tr>
                               <?php endforeach ?>
                             


                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
</div></div></div>
