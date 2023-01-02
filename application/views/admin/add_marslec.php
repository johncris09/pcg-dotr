
            
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="white-box">
							<h3 class="box-title m-b-0">ENTER DATA FOR MARINE ENVIRONMENTAL PROTECTION REPORT</h3> 
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
								</div>
							</div>
							
							<form method="POST" action="<?= site_url() ?>insert_marslec" role="form" enctype="multipart/form-data">
								<div class="panel panel-primary setup-content" id="step-1">
									<div class="panel-heading">
										<h3 class="panel-title text-white">Step 1</h3>
									</div>
									<div class="panel-body"> 
										<div class="row">
											<p><strong style="font-size: 1.3em;color: #000;">PROJECT 1: MARSLEC CGDNM</strong></p>
											<p>This is a prototype data gathering system to monitor and evaluate CGDNM performance in relation to its MARSLEC activities.</p>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>CGDNM STATIONS <strong class="text-danger">*</strong> </label>
													<select id="station" name="station" class="form-control" required="">
														<option value="">Select</option>
														<?php 
															foreach($station as $row){
														?>
															<option value="<?php echo $row->station_id ?>"><?php echo $row->station ?></option>
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
										<button class="btn btn-primary nextBtn pull-right" type="button">Next</button> 
										
									</div>  
								</div>
								
								<div class="panel panel-primary setup-content" id="step-2">
									<div class="panel-heading">
										<h3 class="panel-title text-white">Step 2</h3>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12"> 
												<p><strong style="font-size: 1.3em;color: #000;">TYPES OF MARITIME VIOLATIONS</strong></p>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 10654 (FISHERY CODE OF THE PHILIPPINES)</label>
												<div class="col-sm-12">
													<?php 
														foreach($ra_10654 as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="ra_10654[]"  id="ra_10654_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="ra_10654_<?php echo $row->id  ?>"><?php echo $row->section ?></label>
														</div> 
													<?php
														}
													?>     
												</div>
											</div>
										</div> 
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 9165 (COMPREHENSIVE DANGEROUS DRUGS ACT OF 2022) </label>
												<div class="col-sm-12">
													<?php 
														foreach($ra_9165 as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="ra_9165[]"  id="ra_9165_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="ra_9165_<?php echo $row->id  ?>"><?php echo $row->section ?></label>
														</div> 
													<?php
														}
													?>     
												</div>
											</div>
										</div> 
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 10591 (COMPREHENSIVE LAW ON FIREARMS AND AMMUNITION REGULATION ACT</label>
												<div class="col-sm-12">
													<?php 
														foreach($ra_10591 as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="ra_10591[]"  id="ra_10591_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="ra_10591_<?php echo $row->id  ?>"><?php echo $row->section ?></label>
														</div> 
													<?php
														}
													?>     
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 9208 (ANTI TRAFFICKING IN PERSON ACT OF 2003)</label>
												<div class="col-sm-12">
													<?php 
														foreach($ra_9208 as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="ra_9208[]"  id="ra_9208_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="ra_9208_<?php echo $row->id  ?>"><?php echo $row->section ?></label>
														</div> 
													<?php
														}
													?>     
												</div>  
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 9147 (WILDLIFE RESOURCES CONSERVATION AND PROTECTION ACT)</label>
												<div class="col-sm-12">
													<?php 
														foreach($ra_9147 as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="ra_9147[]"  id="ra_9147_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="ra_9147_<?php echo $row->id  ?>"><?php echo $row->section ?></label>
														</div> 
													<?php
														}
													?>     
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">PD NO. 705 (REVISED FORESTRY CODE OF THE PHILIPPINES)</label>
												<div class="col-sm-12">
													<?php 
														foreach($pd_no_705 as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="pd_no_705[]"  id="pd_no_705_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="pd_no_705_<?php echo $row->id  ?>"><?php echo $row->section ?></label>
														</div> 
													<?php
														}
													?>     
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 1937 (TARIFF AND CUSTOMS CODE ON ILLEGAL ACTS)</label>
												<div class="col-sm-12">
													<?php 
														foreach($ra_1937 as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="ra_1937[]"  id="ra_1937_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="ra_1937_<?php echo $row->id  ?>"><?php echo $row->section ?></label>
														</div> 
													<?php
														}
													?>     
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">PD No. 532 (ANTI-PIRACY AND ANTI-HIGHWAY ROBBERY LAW OF 1974)</label>
												<div class="col-sm-12">
													<?php 
														foreach($pd_no_532 as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="pd_no_532[]"  id="pd_no_532_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="pd_no_532_<?php echo $row->id  ?>"><?php echo $row->section ?></label>
														</div> 
													<?php
														}
													?>     
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 10066 (NATIONAL HERITAGE AT OF 2009)</label>
												<div class="col-sm-12">
													<?php 
														foreach($ra_10066 as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="ra_10066[]"  id="ra_10066_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="ra_10066_<?php echo $row->id  ?>"><?php echo $row->section ?></label>
														</div> 
													<?php
														}
													?>   
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 6539 (ANTI CARNAPPING ACT 1972)</label>
												<div class="col-sm-12">
													<?php 
														foreach($ra_6539 as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="ra_6539[]"  id="ra_6539_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="ra_6539_<?php echo $row->id  ?>"><?php echo $row->section ?></label>
														</div> 
													<?php
														}
													?>   
												</div> 
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 10845 (ANTI AGRICULTURAL SMUGGLING ACT OF 2016)</label>
												<div class="col-sm-12">
													<?php 
														foreach($ra_10845 as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="ra_10845[]"  id="ra_10845_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="ra_10845_<?php echo $row->id  ?>"><?php echo $row->section ?></label>
														</div> 
													<?php
														}
													?>   
												</div>  
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">MARPOL VIOLATIONS</label>
												<div class="col-sm-12">
													<?php 
														foreach($marpol_violation as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="marpol_violation[]"  id="marpol_violation_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="marpol_violation_<?php echo $row->id  ?>"><?php echo $row->marpol_violation ?></label>
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
								<div class="panel panel-primary setup-content" id="step-3">
									<div class="panel-heading">
										<h3 class="panel-title text-white">Step 3</h3>
									</div> 
									<div class="panel-body"> 
										<div class="row">
											<div class="col-md-12"> 
												<p><strong style="font-size: 1.3em;color: #000;">MARITIME SECURITY OPERATIONS - SEABORNE PATROL</strong></p>
											</div>
										</div> 
										<div class="row" >
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">DATE</label>
													<input type="date" name="seaborne_patrol_date" class="form-control"> 
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">Time</label>
													<div class="input-group "> 
														<span class="input-group-btn">
															<select name="seaborne_patrol_hour"   class="form-control" >
																<option value=""> </option>
																<?php 
																	foreach(range(intval('00:00:00'),intval('23:00:00')) as $time) {
																?>
																		<option value="<?php echo date("H", mktime($time)) ?>"><?php echo date("H", mktime($time)) ?></option>
																<?php  
																	}
																?>
															</select>
														</span> 
														<span class="input-group-btn">
															<select name="seaborne_patrol_minute" class="form-control" >
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
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">LOCATION</label>
												<div class="col-sm-12">
													<input type="text" name="seaborne_patrol_location" class="form-control"  > 
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">CONDUCT OF ACTIVITY</label>
												<div class="col-sm-12">
													<?php 
														foreach($seaborne_patrol_activity_conduct as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="seaborne_patrol_activity_conduct[]"  id="seaborne_patrol_activity_conduct_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="seaborne_patrol_activity_conduct_<?php echo $row->id  ?>"><?php echo $row->seaborne_patrol_activity_conduct ?></label>
														</div> 
													<?php
														}
													?>   
												</div> 
											</div>
										</div> 
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">NUMBER OF SEABORN PATROL CONDUCTED</label>
												<div class="col-sm-12">
													<input type="number" name="seaborne_patrol_number_conduncted" class="form-control"  > 
												</div>
											</div>
										</div> 
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">MARITIME AREA COVERED (NAUTICAL MILE/s)</label>
												<div class="col-sm-12">
													<input type="text" name="seaborne_patrol_area_covered"  class="form-control"  > 
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">NUMBER OF HOURS CONDUCTED</label>
												<div class="col-sm-12">
													<input type="number" name="seaborne_patrol_number_hour_conducted" class="form-control"  > 
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
												<p><strong style="font-size: 1.3em;color: #000;">MARITIME SECURITY OPERATIONS - SHORE PATROL</strong></p>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">DTG</label>
												<div class="col-sm-12">
													<input type="date" name="shore_patrol_date" class="form-control">  
												</div>
											</div>
										</div>  
										<div class="row" > 
											<div class="col-md-12">
												<div class="form-group">
													<label class="control-label">TIME STARTED</label>
													<div class="input-group "> 
														<span class="input-group-btn">
															<select name="shore_patrol_hour_started"   class="form-control" >
																<option value=""> </option>
																<?php 
																	foreach(range(intval('00:00:00'),intval('23:00:00')) as $time) {
																?>
																		<option value="<?php echo date("H", mktime($time)) ?>"><?php echo date("H", mktime($time)) ?></option>
																<?php  
																	}
																?>
															</select>
														</span> 
														<span class="input-group-btn">
															<select name="shore_patrol_minute_started" class="form-control" >
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
										<div class="row" > 
											<div class="col-md-12">
												<div class="form-group">
													<label class="control-label">TIME ENDED</label>
													<div class="input-group "> 
														<span class="input-group-btn">
															<select name="shore_patrol_hour_ended"   class="form-control" >
																<option value=""> </option>
																<?php 
																	foreach(range(intval('00:00:00'),intval('23:00:00')) as $time) {
																?>
																		<option value="<?php echo date("H", mktime($time)) ?>"><?php echo date("H", mktime($time)) ?></option>
																<?php  
																	}
																?>
															</select>
														</span> 
														<span class="input-group-btn">
															<select name="shore_patrol_minute_ended" class="form-control" >
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
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">NUMBER OF SHORE PATROLS CONDUCTED</label>
												<div class="col-sm-12">
													<input type="number" name="shore_patrol_number_conducted" class="form-control">  
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">LENGTH OF COASTLINE COVERED (KMS)</label>
												<div class="col-sm-12">
													<input type="number" name="shore_patrol_coastline_covered_length" class="form-control">  
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
												<p><strong style="font-size: 1.3em;color: #000;">SEA MARSHALL</strong></p>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">DTG</label>
												<div class="col-sm-12">
													<input type="date" name="sea_marshall_date" class="form-control">  
												</div>
											</div>
										</div>  
										<div class="row" > 
											<div class="col-md-12">
												<div class="form-group">
													<label class="control-label">TIME STARTED</label>
													<div class="input-group "> 
														<span class="input-group-btn">
															<select name="sea_marshall_hour_started"   class="form-control" >
																<option value=""> </option>
																<?php 
																	foreach(range(intval('00:00:00'),intval('23:00:00')) as $time) {
																?>
																		<option value="<?php echo date("H", mktime($time)) ?>"><?php echo date("H", mktime($time)) ?></option>
																<?php  
																	}
																?>
															</select>
														</span> 
														<span class="input-group-btn">
															<select name="sea_marshall_minute_started" class="form-control" >
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
										<div class="row" > 
											<div class="col-md-12">
												<div class="form-group">
													<label class="control-label">TIME ENDED</label>
													<div class="input-group "> 
														<span class="input-group-btn">
															<select name="sea_marshall_hour_ended"   class="form-control" >
																<option value=""> </option>
																<?php 
																	foreach(range(intval('00:00:00'),intval('23:00:00')) as $time) {
																?>
																		<option value="<?php echo date("H", mktime($time)) ?>"><?php echo date("H", mktime($time)) ?></option>
																<?php  
																	}
																?>
															</select>
														</span> 
														<span class="input-group-btn">
															<select name="sea_marshall_minute_ended" class="form-control" >
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
								<div class="panel panel-primary setup-content" id="step-6">
									<div class="panel-heading">
										<h3 class="panel-title text-white">Step 6</h3>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12"> 
												<p><strong style="font-size: 1.3em;color: #000;">NUMBER OF K9 PANELLING CONDUCTED</strong></p>
											</div>
										</div> 
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">DTG</label>
												<div class="col-sm-12">
													<input type="date" name="panelling_conducted_date" class="form-control">  
												</div>
											</div>
										</div>  
										<div class="row" > 
											<div class="col-md-12">
												<div class="form-group">
													<label class="control-label">TIME STARTED</label>
													<div class="input-group "> 
														<span class="input-group-btn">
															<select name="panelling_conducted_hour_started" class="form-control" >
																<option value=""> </option>
																<?php 
																	foreach(range(intval('00:00:00'),intval('23:00:00')) as $time) {
																?>
																		<option value="<?php echo date("H", mktime($time)) ?>"><?php echo date("H", mktime($time)) ?></option>
																<?php  
																	}
																?>
															</select>
														</span> 
														<span class="input-group-btn">
															<select name="panelling_conducted_minute_started" class="form-control" >
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
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">FACILITIES</label>
												<div class="col-sm-12">
													<?php 
														foreach($panelling_conducted_facilities as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="panelling_conducted_facilities[]"  id="panelling_conducted_facilities_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="panelling_conducted_facilities_<?php echo $row->id  ?>"><?php echo $row->panelling_conducted_facilities ?></label>
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
								<div class="panel panel-primary setup-content" id="step-7">
									<div class="panel-heading">
										<h3 class="panel-title text-white">Step 7</h3>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12"> 
												<p><strong style="font-size: 1.3em;color: #000;">TYPES OF K9 DEPLOYED</strong></p>
											</div>
										</div> 
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12"> </label>
												<div class="col-sm-12">
													<?php 
														foreach($k9_deployed_type as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="k9_deployed_type[]"  id="k9_deployed_type_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="k9_deployed_type_<?php echo $row->id  ?>"><?php echo $row->k9_deployed_type ?></label>
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
								<div class="panel panel-primary setup-content" id="step-8">
									<div class="panel-heading">
										<h3 class="panel-title text-white">Step 8</h3>
									</div>
									<div class="panel-body">
										<div class="row">
											<div class="col-md-12"> 
												<p><strong style="font-size: 1.3em;color: #000;">DEPLOYMENT OF EOD</strong></p>
											</div>
										</div> 
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12"> </label>
												<div class="col-sm-12">
													<?php 
														foreach($eod_deployment as $row){
													?>  
														<div class="checkbox checkbox-custom">
															<input  type="checkbox" name="eod_deployment[]"  id="eod_deployment_<?php echo $row->id  ?>"  value="<?php echo $row->id  ?>" >
															<label for="eod_deployment_<?php echo $row->id  ?>"><?php echo $row->eod_deployment ?></label>
														</div> 
													<?php
														}
													?>  
												</div>
											</div>
										</div> 
										<button type="submit" class="btn btn-danger pull-right" >Finish!</button>  
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
									<?php 
										foreach($marslec as $row){
									?>
										<tr>
											<td scope="row"></td>
											<td><?php echo date('F d, Y \a\t\ H:i', strtotime($row->date_created )) ?></td>
											<td><a href="">View</a></td>
											<td><a href="">Edit/Details</a></td>
										</tr>  
									<?php

										}
									?> 
								</tbody>
							</table>
						</div>
						
					</div>
				</div>
			</div>