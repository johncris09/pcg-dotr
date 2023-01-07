<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="white-box">
                <h3 class="box-title m-b-0">ENTER DATA FOR MARITIME SAFETY REPORT</h3>
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step col-xs-1">
                            <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                            <p><small>Step 1</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                            <p><small>Step 2</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1">
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                            <p><small>Step 3</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1">
                            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                            <p><small>Step 4</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1">
                            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                            <p><small>Step 5</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1">
                            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                            <p><small>Step 6</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1">
                            <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
                            <p><small>Step 7</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1">
                            <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
                            <p><small>Step 8</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1">
                            <a href="#step-9" type="button" class="btn btn-default btn-circle" disabled="disabled">9</a>
                            <p><small>Step 9</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1">
                            <a href="#step-10" type="button" class="btn btn-default btn-circle"
                                disabled="disabled">10</a>
                            <p><small>Step 10</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1">
                            <a href="#step-11" type="button" class="btn btn-default btn-circle"
                                disabled="disabled">11</a>
                            <p><small>Step 11</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1">
                            <a href="#step-12" type="button" class="btn btn-default btn-circle"
                                disabled="disabled">12</a>
                            <p><small>Step 12</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1">
                            <a href="#step-13" type="button" class="btn btn-default btn-circle"
                                disabled="disabled">13</a>
                            <p><small>Step 13</small></p>
                        </div>
                        <div class="stepwizard-step col-xs-1">
                            <a href="#step-14" type="button" class="btn btn-default btn-circle"
                                disabled="disabled">14</a>
                            <p><small>Step 14</small></p>
                        </div>
                    </div>
                </div>

                <form target="_blank" method="POST" action="<?= site_url() ?>insert_urban_marsar" role="form"
                    enctype="multipart/form-data">
                    <div class="panel panel-primary setup-content" id="step-1">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Step 1</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <p><strong style="font-size: 1.3em;color: #000;">URBAN SAROPS CGDNM</strong></p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>CG STATION REPORTING UNIT <strong class="text-danger">*</strong> </label>
                                        <select id="station" name="station" class="form-control" required="">
                                            <option value="">Select</option>
                                            <?php 
															foreach($station as $row){
														?>
                                            <option value="<?php echo $row->station_id ?>"><?php echo $row->station ?>
                                            </option>
                                            <?php
															}
														?>
                                        </select>
                                    </div>
                                </div>
                                <div id="toggle-hidden" class="col-md-6 hidden">
                                    <div class="form-group">
                                        <label> <span id="station-text"></span> SUB-STATIONS</label>
                                        <select id="sub-station" name="sub_station" class="form-control">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-12">TYPE OF URBAN RESCUE </label>
                                    <div class="col-sm-12">
                                        <?php 
														foreach($urban_rescue_type as $row){
													?>
                                        <div class="checkbox checkbox-custom">
                                            <input type="checkbox" name="urban_rescue_type[]"
                                                id="urban_rescue_type_<?php echo $row->id  ?>"
                                                value="<?php echo $row->id  ?>">
                                            <label
                                                for="urban_rescue_type_<?php echo $row->id  ?>"><?php echo $row->urban_rescue_type ?></label>
                                        </div>
                                        <?php
														}
													?>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>

                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-2">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Step 2</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <p><strong style="font-size: 1.3em;color: #000;">DATE TIME GROUP</strong></p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">DTG</label>
                                        <input type="date" name="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Time</label>
                                        <div class="input-group ">
                                            <span class="input-group-btn">
                                                <select name="hour" class="form-control">
                                                    <option value=""> </option>
                                                    <?php 
																			foreach(range(intval('00:00:00'),intval('23:00:00')) as $time) {
																		?>
                                                    <option value="<?php echo date("H", mktime($time)) ?>">
                                                        <?php echo date("H", mktime($time)) ?></option>
                                                    <?php  
																			}
																		?>
                                                </select>
                                            </span>
                                            <span class="input-group-btn">
                                                <select name="minute" class="form-control">
                                                    <option value=""> </option>
                                                    <?php 
																			foreach(range(intval('00'),intval('59')) as $minute) { 
																				$minute = ($minute < 10)?  "0" .$minute :  $minute  ; 
																		?>
                                                    <option value="<?php echo $minute ?>"><?php echo $minute ?></option>
                                                    <?php  
																			}
																		?>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>

                    </div>
                    <div class="panel panel-primary setup-content" id="step-3">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Step 3</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <p><strong style="font-size: 1.3em;color: #000;">LOCATION OF INCIDENT</strong></p>
                                <p>When indicating the location always indicate the grid coordinates of the incident
                                    area, point of reference base on its True Bearing and distance from the point of
                                    reference.</p>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-12">Details on the location of incident. (latitude, longitude,
                                        distance from point of reference, compass bearing on the point of
                                        reference)</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="incident_details" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-12">NAME OF BARANGAY</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="incident_barangay_name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-12">Google Map Locator</label>
                                    <div class="col-sm-12">
                                        <input type="file" name="incident_map_location" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-4">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Step 4</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><strong style="font-size: 1.3em;color: #000;">HOW WAS THE INCIDENT
                                            REPORTED</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-12">INFORMATION ACQUIRED THRU</label>
                                    <div class="col-sm-12">
                                        <?php 
														foreach($information_acquired_thru as $row){
													?>
                                        <div class="checkbox checkbox-custom">
                                            <input type="checkbox" name="information_acquired_thru[]"
                                                id="information_acquired_thru_<?php echo $row->id  ?>"
                                                value="<?php echo $row->id  ?>">
                                            <label
                                                for="information_acquired_thru_<?php echo $row->id  ?>"><?php echo $row->information_acquired_thru ?></label>
                                        </div>
                                        <?php
														}
													?>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-5">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Step 5</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><strong style="font-size: 1.3em;color: #000;">RESPONSE TIME</strong></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-12">TIME OF DEPLOYMENT OF ASSET</label>
                                    <div class="col-sm-12">
                                        <?php 
														foreach($time_assets_deployment as $row){
													?>
                                        <div class="checkbox checkbox-custom">
                                            <input type="checkbox" name="time_assets_deployment[]"
                                                id="time_assets_deployment_<?php echo $row->id  ?>"
                                                value="<?php echo $row->id  ?>">
                                            <label
                                                for="time_assets_deployment_<?php echo $row->id  ?>"><?php echo $row->time_assets_deployment ?></label>
                                        </div>
                                        <?php
														}
													?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-12">TYPE OF ASSET/MOBILITY DEPLOYED</label>
                                    <div class="col-sm-12">
                                        <?php 
														foreach($asset_mobility_deployed_type as $row){
													?>
                                        <div class="checkbox checkbox-custom">
                                            <input type="checkbox" name="asset_mobility_deployed_type[]"
                                                id="asset_mobility_deployed_type_<?php echo $row->id  ?>"
                                                value="<?php echo $row->id  ?>">
                                            <label
                                                for="asset_mobility_deployed_type_<?php echo $row->id  ?>"><?php echo $row->asset_mobility_deployed_type ?></label>
                                        </div>
                                        <?php
														}
													?>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-6">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Step 6</h3>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-12">NAME OF BARANGAY</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="response_barangay_name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-12">NUMBER OF PERSONS RESCUED</label>
                                    <div class="col-sm-12">
                                        <input type="number" name="number_rescued_person" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-12">NUMBER OF INJURED PERSONS</label>
                                    <div class="col-sm-12">
                                        <input type="number" name="number_injured_person" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-12">NUMBER OF CASUALTIES</label>
                                    <div class="col-sm-12">
                                        <input type="number" name="number_casualties" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-12">NUMBER OF MISSING OF PERSONS</label>
                                    <div class="col-sm-12">
                                        <input type="number" name="number_missing_person" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-12">NUMBER OF RESCUERS DEPLOYED</label>
                                    <div class="col-sm-12">
                                        <input type="number" name="number_rescuers_deployed" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-7">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Step 7</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <p><strong style="font-size: 1.3em;color: #000;">DROWNING</strong></p>
                                <p>The process of experiencing respiratory impairment from submersion/immersion in
                                    liquid; outcomes are classified as death, morbidity and no morbidity</p>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NAME OF VICTIM/s</label>
                                    <textarea name="drowning_victim_name" cols="30" rows="10"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">GENDER/s</label>
                                    <select name="drowning_victim_gender" class="form-control">
                                        <option value="MALE">MALE</option>
                                        <option value="FEMALE">FEMALE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">FIRST RESPONDER/s</label>
                                    <input type="text" name="first_responder" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">AGE OF VICTIM</label>
                                    <?php 
													foreach($victim_age as $row){
												?>
                                    <div class="checkbox checkbox-custom">
                                        <input type="checkbox" name="drowning_victim_age[]"
                                            id="drowning_victim_age_<?php echo $row->id  ?>"
                                            value="<?php echo $row->id  ?>">
                                        <label
                                            for="drowning_victim_age_<?php echo $row->id  ?>"><?php echo $row->victim_age ?></label>
                                    </div>
                                    <?php
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NUMBER OF VICTIM/s</label>
                                    <div class="radio-list">
                                        <?php 
														$arr = [ '1', '2', '3', '4', 'MORE THAN 5', 'Other', ];
														foreach($arr  as $row){
													?>
                                        <div class="radio radio-info">
                                            <input type="radio" name="drowning_victim_number"
                                                id="drowning_victim_number_<?php echo $row; ?>"
                                                value="<?php echo $row; ?>">
                                            <label
                                                for="drowning_victim_number_<?php echo $row; ?>"><?php echo $row; ?></label>
                                        </div>
                                        <?php 
														}
													?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">CAUSES OF DROWNING</label>
                                    <?php 
													foreach($drowning_cause as $row){
												?>
                                    <div class="checkbox checkbox-custom">
                                        <input type="checkbox" name="drowning_cause[]"
                                            id="drowning_cause_<?php echo $row->id  ?>" value="<?php echo $row->id  ?>">
                                        <label
                                            for="drowning_cause_<?php echo $row->id  ?>"><?php echo $row->drowning_cause ?></label>
                                    </div>
                                    <?php
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">LOCATION OF DROWNING INCIDENT</label>
                                    <?php 
													foreach($drowning_incident_location as $row){
												?>
                                    <div class="checkbox checkbox-custom">
                                        <input type="checkbox" name="drowning_incident_location[]"
                                            id="drowning_incident_location_<?php echo $row->id  ?>"
                                            value="<?php echo $row->id  ?>">
                                        <label
                                            for="drowning_incident_location_<?php echo $row->id  ?>"><?php echo $row->drowning_incident_location ?></label>
                                    </div>
                                    <?php
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">ACTION TAKEN</label>
                                    <input type="text" name="drowning_action_taken" class="form-control">
                                </div>
                            </div>

                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-8">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Step 8</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <p><strong style="font-size: 1.3em;color: #000;">RETRIEVAL OF MISSING PERSON/S</strong>
                                </p>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NAME OF VICTIM/s (If Identified)</label>
                                    <textarea name="retrieval_victim_name" cols="30" rows="10"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">GENDER</label>
                                    <?php 
													$gender = ['MALE', 'FEMALE'];
													foreach($gender as $row){
												?>
                                    <div class="checkbox checkbox-custom">
                                        <input type="checkbox" name="retrieval_victim_gender[]"
                                            id="retrieval_victim_gender_<?php echo $row  ?>"
                                            value="<?php echo $row  ?>">
                                        <label
                                            for="retrieval_victim_gender_<?php echo $row  ?>"><?php echo $row ?></label>
                                    </div>
                                    <?php
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label>BODY BUILT</label>
                                    <select name="body_built" class="form-control" required="">
                                        <?php 
														foreach($body_built as $row){
													?>
                                        <option value="<?php echo $row->id ?>"><?php echo $row->body_built ?></option>
                                        <?php
														}
													?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="">ADISTINCT FEATURE</label>
                                    <input type="text" name="adistinct_feature" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label>LOCATION OF CADAVER</label>
                                    <select name="cadaver_location" class="form-control" required="">
                                        <?php 
														foreach($cadaver_location as $row){
													?>
                                        <option value="<?php echo $row->id ?>"><?php echo $row->cadaver_location ?>
                                        </option>
                                        <?php
														}
													?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">APPROXIMATE AGE OF CADAVER</label>
                                    <?php 
													foreach($cadaver_approximate_age as $row){
												?>
                                    <div class="checkbox checkbox-custom">
                                        <input type="checkbox" name="cadaver_approximate_age[]"
                                            id="cadaver_approximate_age_<?php echo $row->id  ?>"
                                            value="<?php echo $row->id  ?>">
                                        <label
                                            for="cadaver_approximate_age_<?php echo $row->id  ?>"><?php echo $row->cadaver_approximate_age ?></label>
                                    </div>
                                    <?php
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">IF LAND, EXACT LOCATION WHERE THE CADAVER WAS DISCOVERED</label>
                                    <input type="text" name="exact_cadaver_location" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NAME OF BARANGAY</label>
                                    <input type="text" name="retrieval_barangay_name" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NUMBER OF CADAVER/S DISCOVERED</label>
                                    <div class="radio-list">
                                        <?php 
														$arr = [ '1', '2', '3', '4', 'MORE THAN 5', 'Other', ];
														foreach($arr  as $row){
													?>
                                        <div class="radio radio-info">
                                            <input type="radio" name="cadaver_discovered_number"
                                                id="cadaver_discovered_number_<?php echo $row; ?>"
                                                value="<?php echo $row; ?>">
                                            <label
                                                for="cadaver_discovered_number_<?php echo $row; ?>"><?php echo $row; ?></label>
                                        </div>
                                        <?php 
														}
													?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">LENGTH OF RETRIEVAL OPERATIONS </label>
                                    <div class="radio-list">
                                        <?php 
														$arr = [ '3 DAYS', '4 DAYS', '5 DAYS', 'MORE THAN ONE WEEK', 'Other',   ];
														foreach($arr  as $row){
													?>
                                        <div class="radio radio-info">
                                            <input type="radio" name="retrieval_operation_length"
                                                id="retrieval_operation_length_<?php echo $row; ?>"
                                                value="<?php echo $row; ?>">
                                            <label
                                                for="retrieval_operation_length_<?php echo $row; ?>"><?php echo $row; ?></label>
                                        </div>
                                        <?php 
														}
													?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">LENGTH OF TIME THE PERSON WAS REPORTED MISSING</label>
                                    <div class="radio-list">
                                        <?php 
														$arr = [ '12 HOURS', '24 HOURS', '36 HOURS', '72 HOURS', 'MORE THAN 72 HOURS', 'Other'  ];
														foreach($arr  as $row){
													?>
                                        <div class="radio radio-info">
                                            <input type="radio" name="time_person_reported_missing"
                                                id="time_person_reported_missing_<?php echo $row; ?>"
                                                value="<?php echo $row; ?>">
                                            <label
                                                for="time_person_reported_missing_<?php echo $row; ?>"><?php echo $row; ?></label>
                                        </div>
                                        <?php 
														}
													?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">LAST KNOWN LOCATION</label>
                                    <input type="text" name="retrieval_last_location" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">ACTION TAKEN</label>
                                    <textarea class="form-control" name="retrieval_action_taken" cols="30"
                                        rows="10"></textarea>
                                </div>
                            </div>

                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-9">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Step 9</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <p><strong style="font-size: 1.3em;color: #000;">STORM SURGE</strong></p>
                                <p>A coastal flood or tsunami-like phenomenon of rising water commonly associated with
                                    low-pressure weather systems, such as cyclones.</p>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NAME OF VICTIM/s (If Identified)</label>
                                    <input type="text" name="storm_surge_victim_name" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">WEATHER FORECAST</label>
                                    <div class="radio-list">
                                        <?php  
														foreach($weather_forecast  as $row){
													?>
                                        <div class="radio radio-info">
                                            <input type="radio" name="weather_forecast"
                                                id="weather_forecast_<?php echo $row->weather_forecast; ?>"
                                                value="<?php echo $row->id; ?>">
                                            <label
                                                for="weather_forecast_<?php echo $row->id; ?>"><?php echo $row->weather_forecast; ?></label>
                                        </div>
                                        <?php 
														}
													?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NUMBER OF INJURED PERSONS </label>
                                    <?php 
													$arr = [ '1', '2', '3', '4', 'MORE THAN 5', 'Other', ];
													foreach($arr  as $row){
												?>
                                    <div class="radio radio-info">
                                        <input type="radio" name="storm_surge_injured_person_number"
                                            id="storm_surge_injured_person_number_<?php echo $row; ?>"
                                            value="<?php echo $row; ?>">
                                        <label
                                            for="storm_surge_injured_person_number_<?php echo $row; ?>"><?php echo $row; ?></label>
                                    </div>
                                    <?php 
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NUMBER OF CASUALTIES </label>
                                    <?php 
													$arr = [ '1', '2', '3', '4', 'MORE THAN 5', 'Other', ];
													foreach($arr  as $row){
												?>
                                    <div class="radio radio-info">
                                        <input type="radio" name="storm_surge_casualty_number"
                                            id="storm_surge_casualty_number_<?php echo $row; ?>"
                                            value="<?php echo $row; ?>">
                                        <label
                                            for="storm_surge_casualty_number_<?php echo $row; ?>"><?php echo $row; ?></label>
                                    </div>
                                    <?php 
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NUMBER OF RESCUED</label>
                                    <?php 
													$arr = [ '1', '2', '3', '4', 'MORE THAN 5', 'Other', ];
													foreach($arr  as $row){
												?>
                                    <div class="radio radio-info">
                                        <input type="radio" name="storm_surge_rescue_number"
                                            id="storm_surge_rescue_number_<?php echo $row; ?>"
                                            value="<?php echo $row; ?>">
                                        <label
                                            for="storm_surge_rescue_number_<?php echo $row; ?>"><?php echo $row; ?></label>
                                    </div>
                                    <?php 
													}
												?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="">ACTION TAKEN</label>
                                    <input type="text" name="storm_surge_action_taken" class="form-control">
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-10">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Step 10</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <p><strong style="font-size: 1.3em;color: #000;">EARTHQUAKE</strong></p>
                                <p>The shaking of the surface of the Earth resulting from a sudden release of energy in
                                    the Earth's lithosphere that creates seismic waves.</p>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NAME OF BARANGAY</label>
                                    <input type="text" name="earthquake_barangay_name" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">LOCATION</label>
                                    <div class="radio-list">
                                        <?php  
														foreach($earthquake_location  as $row){ 
													?>
                                        <div class="radio radio-info">
                                            <input type="radio" name="earthquake_location"
                                                id="earthquake_location_<?php echo $row->earthquake_location; ?>"
                                                value="<?php echo $row->id; ?>">
                                            <label
                                                for="earthquake_location_<?php echo $row->id; ?>"><?php echo $row->earthquake_location; ?></label>
                                        </div>
                                        <?php 
														}
													?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">CAUSE OF EARTHQUAKES</label>
                                    <div class="radio-list">
                                        <select name="earthquake_cause" class="form-control" required="">
                                            <?php 
														foreach($earthquake_cause as $row){
													?>
                                            <option value="<?php echo $row->id ?>"><?php echo $row->earthquake_cause ?>
                                            </option>
                                            <?php
														}
													?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">EARTHQUAKE MAGNITUDE LEVEL</label>
                                    <?php 
													foreach($earthquake_magnitude_level as $row){
												?>
                                    <div class="checkbox checkbox-custom">
                                        <input type="checkbox" name="earthquake_magnitude_level[]"
                                            id="earthquake_magnitude_level_<?php echo $row->id  ?>"
                                            value="<?php echo $row->id  ?>">
                                        <label
                                            for="earthquake_magnitude_level_<?php echo $row->id  ?>"><?php echo $row->earthquake_magnitude_level ?></label>
                                    </div>
                                    <?php
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">ACTION TAKEN</label>
                                    <input type="text" name="earthquake_action_taken" class="form-control">
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-11">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Step 11</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <p><strong style="font-size: 1.3em;color: #000;">LANDSLIDE</strong></p>
                                <p>Are several forms of mass wasting that may include a wide range of ground movements,
                                    such as rockfalls, deep-seated slope failures, mudflows, and debris flows.</p>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NUMBER OF CASUALTIES</label>
                                    <?php 
													$arr = [ '1-10', '10-20',  'MORE THAN 20', 'Other', ];
													foreach($arr  as $row){
												?>
                                    <div class="radio radio-info">
                                        <input type="radio" name="lanslide_casualty_number"
                                            id="lanslide_casualty_number_<?php echo $row; ?>"
                                            value="<?php echo $row; ?>">
                                        <label
                                            for="lanslide_casualty_number_<?php echo $row; ?>"><?php echo $row; ?></label>
                                    </div>
                                    <?php 
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">AFFECTED AREAS</label>
                                    <input type="text" name="lanslide_affected_area" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NUMBER OF RESCUED ADULT MALES</label>
                                    <?php 
													$arr = [ '1-10', '10-20',  'MORE THAN 20', 'Other', ];
													foreach($arr  as $row){
												?>
                                    <div class="radio radio-info">
                                        <input type="radio" name="landslide_rescued_adult_male_number "
                                            id="landslide_rescued_adult_male_number _<?php echo $row; ?>"
                                            value="<?php echo $row; ?>">
                                        <label
                                            for="landslide_rescued_adult_male_number _<?php echo $row; ?>"><?php echo $row; ?></label>
                                    </div>
                                    <?php 
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NUMBER OF RESCUED CHILDREN</label>
                                    <?php 
													$arr = [ '1-10', '10-20',  'MORE THAN 20', 'Other', ];
													foreach($arr  as $row){
												?>
                                    <div class="radio radio-info">
                                        <input type="radio" name="landslide_rescued_children_number "
                                            id="landslide_rescued_children_number _<?php echo $row; ?>"
                                            value="<?php echo $row; ?>">
                                        <label
                                            for="landslide_rescued_children_number _<?php echo $row; ?>"><?php echo $row; ?></label>
                                    </div>
                                    <?php 
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NUMBER OF RESCUED FEMALE (ADULT)</label>
                                    <?php 
													$arr = [ '1-10', '10-20',  'MORE THAN 20', 'Other', ];
													foreach($arr  as $row){
												?>
                                    <div class="radio radio-info">
                                        <input type="radio" name="landslide_rescued_adult_female_number "
                                            id="landslide_rescued_adult_female_number _<?php echo $row; ?>"
                                            value="<?php echo $row; ?>">
                                        <label
                                            for="landslide_rescued_adult_female_number _<?php echo $row; ?>"><?php echo $row; ?></label>
                                    </div>
                                    <?php 
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">NUMBER OF RESCUED FEMALES (CHILDREN 0 - 18 YO)</label>
                                    <?php 
													$arr = [ '1-10', '10-20',  'MORE THAN 20', 'Other', ];
													foreach($arr  as $row){
												?>
                                    <div class="radio radio-info">
                                        <input type="radio" name="landslide_rescued_18y_below_female_number "
                                            id="landslide_rescued_18y_below_female_number _<?php echo $row; ?>"
                                            value="<?php echo $row; ?>">
                                        <label
                                            for="landslide_rescued_18y_below_female_number _<?php echo $row; ?>"><?php echo $row; ?></label>
                                    </div>
                                    <?php 
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">LOCATION</label>
                                    <input type="text" name="lanslide_location" class="form-control">
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-12">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Step 12</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <p><strong style="font-size: 1.3em;color: #000;">FIRE INCIDENT</strong></p>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">LOCATION OF INCIDENT (BARANGAY)</label>
                                    <input type="text" name="fire_incident_barangay_name" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">LOCATION OF BARANGAY</label>
                                    <?php 
													foreach($fire_incident_location as $row){
												?>
                                    <div class="checkbox checkbox-custom">
                                        <input type="checkbox" name="fire_incident_location[]"
                                            id="fire_incident_location_<?php echo $row->id  ?>"
                                            value="<?php echo $row->id  ?>">
                                        <label
                                            for="fire_incident_location_<?php echo $row->id  ?>"><?php echo $row->fire_incident_location ?></label>
                                    </div>
                                    <?php
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">POSSIBLE CAUSE</label>
                                    <input type="text" name="fire_incident_cause" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class=""> ESTIMATED COST OF DAMAGE</label>
                                    <?php 
													$arr = [ '1-10', '10-20',  'MORE THAN 20', 'Other', ];
													foreach($damage_estimated_cost  as $row){
												?>
                                    <div class="radio radio-info">
                                        <input type="radio" name="fire_incident_cost"
                                            id="fire_incident_cost_<?php echo $row->id; ?>"
                                            value="<?php echo $row->damage_estimated_cost; ?>">
                                        <label
                                            for="fire_incident_cost_<?php echo $row->id; ?>"><?php echo $row->damage_estimated_cost; ?></label>
                                    </div>
                                    <?php 
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">ACTION TAKEN</label>
                                    <input type="text" name="fire_incident_acton_taken" class="form-control">
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-13">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Step 13</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <p><strong style="font-size: 1.3em;color: #000;">PRE-EMPTIVE EVACUATION</strong></p>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class=" ">PRE-EMPTIVE EVACUATION ACTIVITY</label>
                                    <?php 
													foreach($pre_emptive_evacuation_activity as $row){
												?>
                                    <div class="checkbox checkbox-custom">
                                        <input type="checkbox" name="pre_emptive_evacuation_activity[]"
                                            id="pre_emptive_evacuation_activity_<?php echo $row->id  ?>"
                                            value="<?php echo $row->id  ?>">
                                        <label
                                            for="pre_emptive_evacuation_activity_<?php echo $row->id  ?>"><?php echo $row->pre_emptive_evacuation_activity ?></label>
                                    </div>
                                    <?php
													}
												?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">DATE OF PRE-EMPTIVE EVACUATION</label>
                                    <input type="date" name="pre_emptive_evacuation_date" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="control-label">TIME OF PRE-EMPTIVE EVACUATION</label>
                                    <div class="input-group ">
                                        <span class="input-group-btn">
                                            <select name="pre_emptive_evacuation_hour" class="form-control">
                                                <option value=""> </option>
                                                <?php 
																foreach(range(intval('00:00:00'),intval('23:00:00')) as $time) {
															?>
                                                <option value="<?php echo date("H", mktime($time)) ?>">
                                                    <?php echo date("H", mktime($time)) ?></option>
                                                <?php  
																}
															?>
                                            </select>
                                        </span>
                                        <span class="input-group-btn">
                                            <select name="pre_emptive_evacuation_minute" class="form-control">
                                                <option value=""> </option>
                                                <?php 
																foreach(range(intval('00'),intval('59')) as $minute) { 
																	$minute = ($minute < 10)?  "0" .$minute :  $minute  ; 
															?>
                                                <option value="<?php echo $minute ?>"><?php echo $minute ?></option>
                                                <?php  
																}
															?>
                                            </select>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">LOCATION OF EVACUATION CENTER</label>
                                    <input type="text" name="evacuation_center_location " class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class=" ">COORDINATION WITH</label>
                                    <?php 
													foreach($pre_emptive_evacuation_coordination_with as $row){
												?>
                                    <div class="checkbox checkbox-custom">
                                        <input type="checkbox" name="pre_emptive_evacuation_coordination_with[]"
                                            id="pre_emptive_evacuation_coordination_with_<?php echo $row->id  ?>"
                                            value="<?php echo $row->id  ?>">
                                        <label
                                            for="pre_emptive_evacuation_coordination_with_<?php echo $row->id  ?>"><?php echo $row->pre_emptive_evacuation_coordination_with ?></label>
                                    </div>
                                    <?php
													}
												?>
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-14">
                        <div class="panel-heading">
                            <h3 class="panel-title text-white">Step 14</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <p><strong style="font-size: 1.3em;color: #000;">FORMAL PCG REPORT</strong></p>
                                <p>Attached PCG Spot Report in this Section</p>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">RADIO MESSAGE SPOT REPORT</label>
                                    <input type="file" name="spot_report" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="">PHOTOGRAPHS </label>
                                    <input type="file" name="photographs" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger pull-right">Finish!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-6">

            <div class="white-box">
                <h3 class="box-title m-b-0">LIST OF DATA ENTERED</h3>
                <table class="table  table-responsive table-bordered">
                    <thead class="thead-inverse">
                        <tr>
                            <th>REPORT SELECTION</th>
                            <th>CREATED DATE</th>
                            <th>View</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">COASTAL CLEAN-UP</td>
                            <td>August 2, 2022 at 11:00 am</td>
                            <td><a href="">View</a></td>
                            <td><a href="">Edit/Details</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>