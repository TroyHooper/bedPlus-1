      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
              <span class="d-ib">Facility Onboarding</span>
            </h1>
            <p class="title-bar-description">
              <small  style ="color:forestgreen">

              </small>

            </p>
          </div>


          <div class="divider">
              <div class="divider-content " style = "color: forestgreen"><b><i class="icon icon-files-o"></i> Admin Account Opening &amp Facility Registration</b></div>
          </div>

          <div class="row gutter-xs">
              <div class="col-md-1"></div>
              <div class="col-xs-10">
                  <div class="card">
                      <div class="card-header">
                          <div class="card-actions">



                          </div>

                      </div>
                      <div class="card-body">
                          <form class="basic-form" action="OnboardingController/create" method="POST">
                              <div class="form-group">
                                  <div class="row" style="border-left:5px solid #000">
                                      <div class="col-md-5">
                                          <div class="panel-heading">
                                              <div class="panel-title" style="font-family: Verdana;"><i class ="icon icon-user" style="color: forestgreen;" ></i> <b>Adminstrator's User Account Credentials</b>

                                              </div>
                                              <h4 style="font-family: Verdana">An Individual Who Is In Charge Of The Portal
                                                  &amp; Manages All Aspects Of It</h4>
                                          </div>
                                         </div>

                                      <div class="col-md-7">
                                          <div class="row">
                                              <div class="col-md-6">
                                          <label  class="form-label" style="font-size: 12px">First Name</label>

                                                  <input id="txtfullname" maxlength="20"  name="txtLFName" class="form-control myuppercaseinput" type="text" style="font-size: 11px" required="">
                                                </div>

                                                  <div class="col-md-6">
                                          <label  class="form-label" style="font-size: 12px">Last Name</label>

                                                  <input id="txtfullname" maxlength="20"  name="txtLName" class="form-control myuppercaseinput" type="text" style="font-size: 11px" required="">
                                                </div>
                                      </div>
<br>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label  class="form-label" style="font-size: 12px">Admin Email</label>

                                                  <input id="txtemail" name="email" class="form-control" type="text" style="font-size: 11px" required="">
                                                </div>

                                              <div class="col-md-6">
                                                  <label  class="form-label" style="font-size: 12px">Admin Contact Number</label>

                                                  <input id="txtcontact" maxlength="10"  name="txtcontact" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  class="form-control" type="text" style="font-size: 11px" required=""></div>

                                          </div><br>


                                           <div class="row">
                                              <div class="col-md-12">
                                                  <label  class="form-label" style="font-size: 12px">Gender</label>

                                                   <select id="txtgender" name="txtgender" class="form-control" style="font-size: 11px">
                                                 <option  value="" selected="" >-Select</option>
                                                  <option value="Male" >Male</option>
                                                  <option value="Female">Female</option>
                                                 

                                              </select>
                                              </div>



                                          </div>



                                          <br><br>
                                  </div></div>
                                  <hr>
                                  <div class="row" style="border-left:5px solid #000">
                                      <div class="col-md-5">
                                          <div>
                                              <div  ><i class ="icon icon-building" style="color: forestgreen; " ></i> <b class="title-bar-description" style="font-family: font-family: Calibri">Facility's Information</b>

                                              </div>
                                              <h4 style="font-family: Verdana">Fundamental Details Of The Hospital</h4>
                                          </div>
                                      </div>

                                      <div class="col-md-7">

                                          <div class="row">
                                              <div class="col-md-12">
                                                  <label  class="form-label" style="font-size: 12px">Hospital Name</label>

                                                  <input id="txthospitalname" name="txthospitalname" class="form-control myuppercaseinput" type="text" style="font-size: 11px" required=""></div>
                                          </div>

                                          <br>



                                          <div class="row">
                                              <div class="col-md-12">
                                                  <label  class="form-label" style="font-size: 12px">Type Of Hospital</label>

                                                  <select id="txthospitaltype" name="txthospitaltype" class="form-control" style="font-size: 11px" required="">
                                                    <option selected="" value="" >-Select Hospital Type-</option>
                                                      <option value="CHPS" >CHPS</option>
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

                                          <br>
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <label  class="form-label" style="font-size: 12px">Digital Address</label>

                                                  <input id="txtdigitaladdress" name="txtdigitaladdress" class="form-control" type="text" style="font-size: 11px" required="">
                                              </div>

                                              <div class="col-md-6">
                                                  <label  class="form-label" style="font-size: 12px">Digital Address</label><br>
                                                <button type="button" id="getghanapost" class="btn btn-primary text-capitalize pull-left" style="background-color: maroon; border-color: maroon"><i class="icon icon-map-marker"></i>&nbsp &nbsp Load Address Data &nbsp &nbsp</button>

                                              </div>

                                          </div>
                                          <hr>
                                      <div id="mytoogling">
                                          <div class="row">

                                          <div class="col-md-12">

                                            <input type="hidden" class="txtlatitude" value="0" name="">
                                            <input type="hidden" class="txtlongitude" name="" >
                                            <div id="map" style="height: 250px; width:95%">
                                              
                                            </div>
                                          </div>


                                         </div>
                                          </div>
                                          <br>
                                          <div class="row">
                                            <input id="txtregion1" name="txtregion" class="form-control txtregion" type="hidden" style="font-size: 11px" required="">
                                              <div class="col-md-6">
                                                  <label  class="form-label" style="font-size: 12px">Region</label>
                                                  <input  class="form-control txtregion" type="text" style="font-size: 11px" readonly>
                                                  <input  name="txtregion" class="form-control txtregion" type="hidden" style="font-size: 11px">
                                                   
                                              </div>
                                               <div class="col-md-6">
                                                  <label  class="form-label" style="font-size: 12px">District</label>

                                                  <input  class="form-control txtdistrict" type="text" style="font-size: 11px" readonly>
                                                  <input  name="txtdistrict" class="form-control txtdistrict" type="hidden" style="font-size: 11px">




                                                  <input  name="txtCenterLatitude" class="form-control txtCenterLatitude" type="hidden" style="font-size: 11px">
                                                  <input  name="txtCenterLongitude" class="form-control txtCenterLongitude" type="hidden" style="font-size: 11px">
                                              </div>
                                              </div>

                                             



                                          </div>
                                        </div>
                                      </div>
                                    </div>
                            <hr>
                              <center><button type="submit" id="submitingform" class="btn btn-primary text-capitalize" style="background-color: forestgreen; border-color: forestgreen"><i class="icon icon-bank"></i>&nbsp &nbsp Register Facility &nbsp &nbsp</button> </center>

                              <br><br>

                          </form>
                      </div>
                  </div>
              </div>
          </div>


</div>