<div class="layout-content">
    <div class="layout-content-body">
        <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">Role Management</span>

            </h1>
            <p class="title-bar-description">
                <small style="color:forestgreen">Utilities</small>

            </p>
        </div>
        <div class="row">


            <div class="col-xs-4">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="col-md-6">
                            <div class="card" style="background-color: forestgreen; color: #fff">
                                <div class="card-values">
                                    <div class="p-x">
                                        <small>Total Roles <i class="icon icon-group" style="color: #fff"></i></small><br><br>
                                        <h3 class="card-title fw-l"><?php echo count($allroles) ?></h3>
                                    </div>
                                </div>
                                <div class="card-chart">
                                    <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [25250, 23370, 25568, 28961, 26762, 30072, 25135]}]' data-scales='{"yAxes": [{ "ticks": {"max": 32327}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="col-md-6">
                            <div class="card" style="background-color: forestgreen; color: #fff">
                                <div class="card-values">
                                    <div class="p-x">
                                        <small>Roles With User Accounts <i class="icon icon-users" style="color: #fff"></i>
                                            <span> (<?php echo number_format((($getusedroles / count($allroles)) * 100), 2) . "%" ?>)</span></small><br><br>
                                        <h3 class="card-title fw-l"><?php echo $getusedroles ?> </h3>
                                    </div>
                                </div>
                                <div class="card-chart">
                                    <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [116196, 145160, 124419, 147004, 134740, 120846, 137225]}]' data-scales='{"yAxes": [{ "ticks": {"max": 158029}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="background-color: forestgreen; color: #fff">
                                <div class="card-values">
                                    <div class="p-x">
                                        <small>Roles Without User Accounts <i class="" style="color: #fff"></i><span>

                                                ( (<?php echo number_format(100 - (($getusedroles / count($allroles)) * 100), 2) . "%" ?>))</span></small><br><br>
                                        <h3 class="card-title fw-l"><?php echo count($allroles) - $getusedroles ?></h3>
                                    </div>
                                </div>
                                <div class="card-chart">
                                    <canvas data-chart="line" data-animation="false" data-labels='["Jun 21", "Jun 20", "Jun 19", "Jun 18", "Jun 17", "Jun 16", "Jun 15"]' data-values='[{"backgroundColor": "rgba(39, 174, 96, 0.03)", "borderColor": "#fff", "data": [13590442, 12362934, 13639564, 13055677, 12915203, 11009940, 11542408]}]' data-scales='{"yAxes": [{ "ticks": {"max": 14662531}}]}' data-hide='["legend", "points", "scalesX", "scalesY", "tooltips"]' height="35"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <br>
        <hr>
        <div class="pull-left">
            <button class=" btn  btn-success" style="text-transform: capitalize; background-color: forestgreen; border-color: forestgreen" data-toggle="modal" data-target="#newRole" type="button"> <i class="icon icon-group"></i> &nbsp New Role</button>


        </div>
        <br><br>
        <div class="row">
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
                                    <th>No</th>
                                    <th>Role Name</th>
                                    <th>User Management</th>
                                    <th>Hospital Data Management</th>
                                    <th>Bed Utilization Analytics</th>

                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($allroles as $record) : ?>
                                    <tr>

                                        <td> <?php echo $no++; ?></td>
                                        <td> <?php echo ucfirst($record->roleName); ?></td>
                                        <td>
                                            <?php if ($record->userMan === "on") { ?>
                                                <i class="icon icon-check" style="color: forestgreen"></i>

                                            <?php } else { ?>
                                                <i class="icon icon-close" style="color: maroon"></i>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($record->hospData === "on") { ?>
                                                <i class="icon icon-check" style="color: forestgreen"></i>

                                            <?php } else { ?>
                                                <i class="icon icon-close" style="color: maroon"></i>
                                            <?php } ?>
                                        </td>

                                        <td>
                                            <?php if ($record->bedUtilization === "on") { ?>
                                                <i class="icon icon-check" style="color: forestgreen"></i>

                                            <?php } else { ?>
                                                <i class="icon icon-close" style="color: maroon"></i>
                                            <?php } ?>
                                        </td>

                                        <td>
                                            <!-- <button class="btn  btn-warning" style = "text-transform: capitalize;  background-color: maroon; ; border-color: maroon"  type="button" data-toggle="modal" data-target="#delrole"> <i class = "icon icon-trash"></i></button> -->

                                            <Center> <button class="btneditrole btn  btn-warning" style="text-transform: capitalize; background-color: goldenrod; ; border-color: goldenrod" type="button" data-toggle="modal" data-target="#editRole" data-id="<?php echo $record->roleID; ?>" data-rolename="<?php echo $record->roleName; ?>" data-userman="<?php echo $record->userMan; ?>" data-hospdata="<?php echo $record->hospData; ?>" data-bedutilization="<?php echo $record->bedUtilization; ?>"> <i class="icon icon-edit"></i></button>
                                                <?php if ($record->roleStatus === "A") { ?> |
                                                    <button class="btndisablerole btn  btn-warning" style="text-transform: capitalize; background-color: black; ; border-color: black" type="button" data-toggle="modal" data-target="#disrole" data-id="<?php echo $record->roleID; ?>" data-rolename="<?php echo $record->roleName; ?>"> <i class="icon icon-lock"></i></button><?php } else { ?> | <button class="btnenablerole btn  btn-warning" style="text-transform: capitalize; background-color: black; ; border-color: black" type="button" data-toggle="modal" data-target="#enarole" data-id="<?php echo $record->roleID; ?>" data-rolename="<?php echo $record->roleName; ?>"> <i class="icon icon-unlock"></i></button> <?php } ?> | <button class="btndeleterole btn  btn-warning" style="text-transform: capitalize;  background-color: maroon; border-color: maroon" type="button" data-toggle="modal" data-target="#delrole" data-id="<?php echo $record->roleID; ?>" data-rolename="<?php echo $record->roleName; ?>"> <i class="icon icon-trash"></i></button>
                                            </Center>

                                        </td>

                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>