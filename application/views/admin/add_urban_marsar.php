
            
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="white-box">
							<h3 class="box-title m-b-0">ENTER DATA FOR MARITIME SAFETY REPORT</h3> 
							<div class="stepwizard">
								<div class="stepwizard-row setup-panel">
									<div class="stepwizard-step col-xs-3"> 
										<a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
										<p><small>Step 1</small></p>
									</div>
									<div class="stepwizard-step col-xs-3"> 
										<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
										<p><small>Step 2</small></p>
									</div>  
									<div class="stepwizard-step col-xs-3"> 
										<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
										<p><small>Step 3</small></p>
									</div>    
									<div class="stepwizard-step col-xs-3"> 
										<a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
										<p><small>Step 4</small></p>
									</div>     
									<div class="stepwizard-step col-xs-3"> 
										<a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
										<p><small>Step 5</small></p>
									</div>     
									<div class="stepwizard-step col-xs-3"> 
										<a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
										<p><small>Step 6</small></p>
									</div>   
								</div>
							</div>
							
							<form method="POST" action="<?= site_url() ?>insert_marep" role="form" enctype="multipart/form-data">
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
													<select id="station" class="form-control" required="">
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
													<select id="sub-station" class="form-control">
														<option value="">Select</option>
													</select>
												</div>
											</div>
										</div> 
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">TYPE OF URBAN RESCUE </label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">FLASHFLOODS</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">DROWNING</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">RETRIEVAL OF CADAVER</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">STORM SURGE</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">EARTHQUAKE</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">LANDSLIDE</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">FIRE</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">PRE-EMPTIVE EVACUATION</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">Other</label>
														<input type="text" name="" id="">
													</div> 
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
										<div class="row" >
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">Date</label>
													<input type="date"  class="form-control"  >  
												</div> 
											</div> 
											<div class="col-md-2">
												<div class="form-group ">
													<label class="control-label">Time</label> 
													<select name="" id="" class="form-control" >
														<option value=""> </option>
														<?php 
															foreach(range(intval('00:00:00'),intval('23:00:00')) as $time) {
														?>
																<option value="<?php echo date("H", mktime($time)) ?>"><?php echo date("H", mktime($time)) ?></option>
														<?php  
															}
														?>
													</select>
												</div>
											</div>

											
											<div class="col-md-2">
												<div class="form-group ">
													<label class="control-label">&nbsp;</label>
													<select name="" id="" class="form-control" >
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
											<p>When indicating the location always indicate the grid coordinates of the incident area, point of reference base on its True Bearing and distance from the point of reference.</p>
										</div>  
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">Details on the location of incident. (latitude, longitude, distance from point of reference, compass bearing on the point of reference)</label>
												<div class="col-sm-12">
													<input type="text" class="form-control"  >  
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">NAME OF BARANGAY</label>
												<div class="col-sm-12">
													<input type="text" class="form-control"  >  
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">Google Map Locator</label>
												<div class="col-sm-12">
													<input type="file" class="form-control"  >  
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
												<p><strong style="font-size: 1.3em;color: #000;">HOW WAS THE INCIDENT REPORTED</strong></p>
											</div> 
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">INFORMATION ACQUIRED THRU</label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">VHF CALL FROM DISTRESS VESSEL</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">CELLULAR PHONE CALL</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">PCG COMCEN</label> 
													</div>  
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">GMDSS</label> 
													</div>  
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">PCG UNIT</label> 
													</div>  
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">LGU</label> 
													</div>  
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">GOVERNMENT AGENCY</label> 
													</div>  
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">CONCERNED CITIZEN</label> 
													</div>  
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
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">15 MINUTES</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">30 MINUTES</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">1 HOUR</label> 
													</div>  
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">2 HOURS</label> 
													</div>  
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">MORE THAN 3 HOURS</label> 
													</div>  
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">Other</label> 
														<input type="text" name="" id="">
													</div>   
												</div> 
											</div>
										</div> 
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">TYPE OF ASSET/MOBILITY DEPLOYED</label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">ALUMINUM BOAT</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">RUBBER BOAT</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">LAND MOBILITY</label> 
													</div>  
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">Other</label> 
														<input type="text" name="" id="">
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
												<p><strong style="font-size: 1.3em;color: #000;">FORMAL PCG REPORT</strong></p><p>Attached PCG Spot Report in this Section</p>
											</div>
										</div> 
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">Google Map Locator</label>
												<div class="col-sm-12">
													<input type="file" class="form-control"  >  
												</div>
											</div>
										</div>   
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">PHOTOGRAPHS </label>
												<div class="col-sm-12">
													<input type="file" class="form-control"  >  
												</div>
											</div>
										</div>  
										<button class="btn btn-danger pull-right" type="button">Finish!</button>
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
									<tr>
										<td scope="row">COASTAL CLEAN-UP</td>
										<td>August 2, 2022 at 11:00 am</td>
										<td><a href="">View</a></td>
										<td><a href="">Edit/Details</a></td>
									</tr> 
									<tr>
										<td scope="row">COASTAL CLEAN-UP</td>
										<td>August 2, 2022 at 11:00 am</td>
										<td><a href="">View</a></td>
										<td><a href="">Edit/Details</a></td>
									</tr> 
									<tr>
										<td scope="row">COASTAL CLEAN-UP</td>
										<td>August 2, 2022 at 11:00 am</td>
										<td><a href="">View</a></td>
										<td><a href="">Edit/Details</a></td>
									</tr> 
									<tr>
										<td scope="row">COASTAL CLEAN-UP</td>
										<td>August 2, 2022 at 11:00 am</td>
										<td><a href="">View</a></td>
										<td><a href="">Edit/Details</a></td>
									</tr> 
									<tr>
										<td scope="row">COASTAL CLEAN-UP</td>
										<td>August 2, 2022 at 11:00 am</td>
										<td><a href="">View</a></td>
										<td><a href="">Edit/Details</a></td>
									</tr> 
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