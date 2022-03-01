      <div class="layout-content">
          <div class="layout-content-body">
              <div class="title-bar">

                  <h1 class="title-bar-title">
                      <span class="d-ib">Health Facilities</span>
                  </h1>
                  <p class="title-bar-description">
                      <small style="color:forestgreen">Insights &amp Analytics</small>

                  </p>
              </div>

              <div class="row">


                  <div class="col-md-2">
                      <div class="card" style="background-color: forestgreen; color: #fff">
                          <div class="card-values">
                              <div class="p-x">
                                  <small>Total Health Facilities <i class="icon icon-institution" style="color: #fff"></i></small><br><br>
                                  <h3 class="card-title fw-l"><?php echo (count($allfacilities)); ?></h3>
                              </div>
                          </div>
                          <div class="card-chart">
                              <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [25250, 23370, 25568, 28961, 26762, 30072, 25135]}]' data-scales='{"yAxes": [{ "ticks": {"max": 32327}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                          </div>
                      </div>

                  </div>



                  <div class="col-md-2">
                      <div class="card" style="background-color: forestgreen; color: #fff">
                          <div class="card-values">
                              <div class="p-x">
                                  <small> Bed Count <i class="icon icon-check" style="color: #fff"></i> <span></span></small><br><br>
                                  <h3 class="card-title fw-l"><?php echo $analytics[1]; ?></h3>
                              </div>
                          </div>
                          <div class="card-chart">
                              <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [116196, 145160, 124419, 147004, 134740, 120846, 137225]}]' data-scales='{"yAxes": [{ "ticks": {"max": 158029}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-1">

                  </div>



                  <div class="col-md-2">
                      <div class="card" style="background-color: maroon; color: #fff">
                          <div class="card-values">
                              <div class="p-x">
                                  <small> Occupied Beds <i class="icon icon-check" style="color: #fff"></i> <span> (
                                    <?php
                                     if($analytics[1]<1){
                                                            echo 0;

                                  }else{
                                   echo number_format((($analytics[2]/$analytics[1])*100),2);
                                  } ?>
                                %)</span></small><br><br>
                                  <h3 class="card-title fw-l"><?php echo $analytics[2]; ?></h3>
                              </div>
                          </div>
                          <div class="card-chart">
                              <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [116196, 145160, 124419, 147004, 134740, 120846, 137225]}]' data-scales='{"yAxes": [{ "ticks": {"max": 158029}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                          </div>
                      </div>
                  </div>



              </div>




              <br>
              <div class="row">

                  <div class="col-md-8">
                      <div class="card">
                          <div class="card-body">
                              <h6 class="card-title">Regional - Facility &amp Bed Statistical Distribution</h6>
                          </div>
                          <div class="card-body">
                              <div class="card-chart">
                                  <canvas data-chart="bar" data-animation="false" data-labels='["GAR", "CR", "WR", "WNR", "OR","VR", "ER", "AR","BR", "BER", "AHR", "NR","NER", "SR", "UER", "UWR"]' data-values='[
                                  {"label": "Facility Count", "backgroundColor": "forestgreen", "borderColor": "forestgreen", "data": 
                                  [<?php echo $analytics[3]; ?>, <?php echo $analytics[6]; ?>, <?php echo $analytics[9]; ?>, <?php echo $analytics[12]; ?>,<?php echo $analytics[15]; ?>, <?php echo $analytics[18]; ?>, <?php echo $analytics[21]; ?>, <?php echo $analytics[24]; ?>,<?php echo $analytics[27]; ?>, <?php echo $analytics[30]; ?>, <?php echo $analytics[33]; ?>, <?php echo $analytics[36]; ?>,<?php echo $analytics[39]; ?>, <?php echo $analytics[42]; ?>, <?php echo $analytics[45]; ?>, <?php echo $analytics[48]; ?>]}
                                   


                                   , {"label": "Bed Count", "backgroundColor": "gainsboro", "borderColor": "gainsboro", "data": 
                                   [<?php echo $analytics[4]; ?>, <?php echo $analytics[7]; ?>, <?php echo $analytics[10]; ?>, <?php echo $analytics[13]; ?>,<?php echo $analytics[16]; ?>, <?php echo $analytics[19]; ?>, <?php echo $analytics[22]; ?>, <?php echo $analytics[25]; ?>,<?php echo $analytics[28]; ?>, <?php echo $analytics[31]; ?>, <?php echo $analytics[34]; ?>, <?php echo $analytics[37]; ?>,<?php echo $analytics[40]; ?>, <?php echo $analytics[43]; ?>, <?php echo $analytics[46]; ?>, <?php echo $analytics[49]; ?>]}
                                   

                                   , {"label": "Occupied Beds", "backgroundColor": "black", "borderColor": "gainsboro", "data": 
                                   [<?php echo $analytics[5]; ?>, <?php echo $analytics[8]; ?>, <?php echo $analytics[11]; ?>, <?php echo $analytics[14]; ?>,<?php echo $analytics[17]; ?>, <?php echo $analytics[20]; ?>, <?php echo $analytics[23]; ?>, <?php echo $analytics[26]; ?>,<?php echo $analytics[29]; ?>, <?php echo $analytics[32]; ?>, <?php echo $analytics[35]; ?>, <?php echo $analytics[38]; ?>,<?php echo $analytics[41]; ?>, <?php echo $analytics[44]; ?>, <?php echo $analytics[47]; ?>, <?php echo $analytics[50]; ?>]}
                                   ]' data-tooltips='{"mode": "label"}' height="85"></canvas>


                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                      <div class="panel panel-body" data-toggle="match-height">
                          <h6 class="text-left m-t-0">Facility Segmentation</h6>
                          <div class="row">

                              <div class="col-xs-3">
                                  <br><br>
                                  <ul class="list-unstyled">
                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: forestgreen"></span>
                                              CHPS
                                          </small>
                                      </li>
                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: gainsboro"></span>
                                              Clinic
                                          </small>
                                      </li>

                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: #4d4d4d"></span>
                                              District Hospital
                                          </small>
                                      </li>

                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: #3d6521"></span>
                                              Health Center
                                          </small>
                                      </li>
                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: black"></span>
                                              Midwifery/Maternity
                                          </small>
                                      </li>

                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: #2a2a2a"></span>
                                              Mines
                                          </small>
                                      </li>

                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: #07bc87"></span>
                                              Polyclinic
                                          </small>
                                      </li>
                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: #214e1d"></span>
                                              Psychiatric Hospital
                                          </small>
                                      </li>

                                      <li class="m-b">
                                          <small class="nowrap">
                                              <span class="icon icon-square icon-fw" style="color: #c2c2c2"></span>
                                              Hospital
                                          </small>
                                      </li>


                                  </ul>
                              </div>
                              <div class="col-xs-6">
                                  <canvas data-chart="doughnut" data-labels='["CHPS", "Clinic", "District Hospital","Health Center", "Midwifery/Maternity", "Mines","Polyclinic", "Psychiatric Hospital", "Hospital"]' data-values='[{"backgroundColor": ["forestgreen", "gainsboro", "#4d4d4d","#3d6521", "black", "#2a2a2a","#07bc87", "#214e1d", "#c2c2c2"], "data": 
                                  [<?php echo $analytics[51]; ?>, <?php echo $analytics[52]; ?>, <?php echo $analytics[53]; ?>,<?php echo $analytics[54]; ?>, <?php echo $analytics[55]; ?>, <?php echo $analytics[56]; ?>,
                                  <?php echo $analytics[57]; ?>, <?php echo $analytics[58]; ?>, <?php echo $analytics[59]; ?>]}]' data-hide='["scalesX", "scalesY", "legend"]' height="395" width="300"></canvas>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>



              <br>
              <div class="row gutter-xs">
                  <div class="col-xs-12">
                      <div class="card">
                          <div class="card-header">

                              <h6 class="text-left m-t-0">Facility Details</h6>
                          </div>
                          <div class="card-body">
                              <table id="demo-datatables-responsive-1" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%" style="font-size: 12px">
                                  <thead>
                                      <tr>
                                          <th>Region</th>
                                          <th>District</th>
                                          <th>Hospital Name</th>
                                          <th>Admin Name</th>
                                          <th>Admin Contact</th>
                                          <th>Status</th>
                                          <th>
                                              <Center> Actions</Center>
                                          </th>


                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php foreach ($allfacilities as $records) : ?>
                                          <tr>
                                              <td><?php echo ucfirst($records->region) ?></td>
                                              <td><?php echo ucfirst($records->district) ?></td>
                                              <td><?php echo ucfirst($records->hospName) ?></td>
                                              
                                              <td><?php echo ucfirst($records->FName . "  " . $records->LName) ?></td>
                                              <td><?php echo ucfirst($records->contactNumber) ?></td>

                                              <td>
                                                  <center>
                                                      <?php if ($records->hospStatus === "A") { ?>
                                                          <span class="bg-success label label-lg label-light-primary label-inline">Active</span>

                                                      <?php } else { ?>
                                                          <span class="bg-danger label label-lg label-light-danger label-inline">Disabled</span>
                                                      <?php } ?>

                                                  </center>
                                              </td>









                                              <td>
                                                  <Center>

                                                      <button class="btneditFacilities btn  btn-warning" style="text-transform: capitalize; background-color: forestgreen; ; border-color: forestgreen" type="button" data-toggle="modal" data-target="#editFacilities" data-id="<?php echo $records->id; ?>" data-hospname="<?php echo $records->hospName; ?>" data-digiaddress="<?php echo $records->digiAddress; ?>" data-latitude="<?php echo $records->latitude; ?>" data-longitude="<?php echo $records->longitude; ?>" data-hosptype="<?php echo $records->hospType; ?>" data-region="<?php echo $records->region; ?>" data-district="<?php echo $records->district; ?>"> <i class="icon icon-edit"></i></button>

                                                      <?php if ($records->hospStatus === "A") { ?> |

                                                          <button class=" btndisableFacilities btn  btn-warning" style="text-transform: capitalize; background-color: black; ; border-color: black" type="button" data-toggle="modal" data-target="#disableFacilities" data-id="<?php echo $records->id; ?>" data-hospname="<?php echo $records->hospName; ?>" data-digiaddress="<?php echo $records->digiAddress; ?>" data-latitude="<?php echo $records->latitude; ?>" data-longitude="<?php echo $records->longitude; ?>" data-hosptype="<?php echo $records->hospType; ?>"> <i class="icon icon-lock"></i></button>
                                                      <?php } else { ?> |

                                                          | <button class=" btnenableFacilities btn  btn-warning" style="text-transform: capitalize; background-color: black; ; border-color: black" type="button" data-toggle="modal" data-target="#enableFacilities" data-id="<?php echo $records->id; ?>" data-hospname="<?php echo $records->hospName; ?>" data-digiaddress="<?php echo $records->digiAddress; ?>" data-latitude="<?php echo $records->latitude; ?>" data-longitude="<?php echo $records->longitude; ?>" data-hosptype="<?php echo $records->hospType; ?>"> <i class="icon icon-unlock"></i></button>
                                                      <?php } ?>

                                                      | <button class=" btndeleteFacilities btn  btn-warning" style="text-transform: capitalize;  background-color: maroon; border-color: maroon" type="button" data-toggle="modal" data-target="#deleteFacilities" data-id="<?php echo $records->id; ?>" data-hospname="<?php echo $records->hospName; ?>" data-digiaddress="<?php echo $records->digiAddress; ?>" data-latitude="<?php echo $records->latitude; ?>" data-longitude="<?php echo $records->longitude; ?>" data-hosptype="<?php echo $records->hospType; ?>"> <i class="icon icon-trash"></i></button>



                                                  </Center>
                                              </td>




                                          </tr>
                                      <?php endforeach ?>




                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>


          </div>
      </div>