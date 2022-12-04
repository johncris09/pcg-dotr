
            
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="white-box">
							<h3 class="box-title m-b-0">ENTER DATA FOR MARINE ENVIRONMENTAL PROTECTION REPORT</h3> 
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
								</div>
							</div>
							
							<form method="POST" action="<?= site_url() ?>insert_marep" role="form" enctype="multipart/form-data">
								<div class="panel panel-primary setup-content" id="step-1">
									<div class="panel-heading">
										<h3 class="panel-title text-white">Step 1</h3>
									</div>
									<div class="panel-body"> 
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>CGDNM STATIONS <strong class="text-danger">*</strong> </label>
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
											<div class="col-md-12 ">
												<div class="form-group">
													<label>REPORT SELECTION <strong class="text-danger">*</strong> </label>
													<select id="report-selection" class="form-control" required>
														<option value="">Select</option>
														<?php 
															foreach($report as $row){
														?>
															<option value="<?php echo $row['report_selection_id']; ?>"><?php echo $row['report_selection']; ?></option>
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
								
								<div class="panel panel-primary setup-content" id="step-2">
									<div class="panel-heading">
										<h3 class="panel-title text-white">Step 2</h3>
									</div>
									<div class="panel-body">  
										<?php 
											foreach($report as $row){
										?>
											
												<div id="<?php echo $row['report_selection_id']; ?>"  class="toggle-show" style="display: none">	
													<h2><?php echo $row['report_selection']; ?></h2> 

										<?php 
											if(  $row['report_selection_id'] == 1){ //Coastal Clean Up
										?> 
													<div id="report1"> 
														<div class="row" style="margin-top: 50px;">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">DTG</label>
																	<input type="date"  class="form-control"  >  
																</div> 
															</div> 
															<div class="col-md-2">
																<div class="form-group has-error">
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
																<div class="form-group has-error">
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
														
														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">LOCATION</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  > 
																	<span class="help-block"><small>(Note: Please specify the exact location of the activity, i.e, Name of Purok, Barangay, Municipality)</small></span> 
																</div>
															</div>
														</div>

														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">CONDUCT OF ACTIVITY</label>
																<div class="col-sm-12">
																	<div class="radio-list"> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="radio1"  >
																			<label for="radio1">PCG INITIATED</label>
																		</div> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="radio2"  >
																			<label for="radio2">JOINT</label>
																		</div> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="radio3"  >
																			<label for="radio3">PARTICIPATED FROM OTHER AGENCY</label>
																		</div>
																	</div> 
																</div>
															</div>
														</div> 

														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">PARTICIPATING AGENCIES</label>
																<div class="col-sm-12">
																	<div class="checkbox checkbox-custom">
																		<input id="agency1" type="checkbox"  >
																		<label for="agency1"> LGU </label>
																	</div>  
																	<div class="checkbox checkbox-custom">
																		<input id="agency2" type="checkbox"  >
																		<label for="agency2"> NATIONAL LINE AGENCIES </label>
																	</div>  
																	<div class="checkbox checkbox-custom">
																		<input id="agency3" type="checkbox"  >
																		<label for="agency3"> ACADEME </label>
																	</div>    
																	<div class="checkbox checkbox-custom">
																		<input id="agency4" type="checkbox"  >
																		<label for="agency4"> PRIVATE CORPORATIONS </label>
																	</div>  
																	<div class="checkbox checkbox-custom">
																		<input id="agency5" type="checkbox"  >
																		<label for="agency5"> SHIPPING COMPANIES</label>
																	</div> 
																	<div class="checkbox checkbox-custom">
																		<input id="agency6" type="checkbox"  >
																		<label for="agency6"> PCG UNITS</label>
																	</div>
																	<div class="checkbox checkbox-custom">
																		<input id="agency7" type="checkbox"  >
																		<label for="agency7"> PCG AUXILIARY</label>
																	</div>
																	<div class="checkbox checkbox-custom">
																		<input id="agency8" type="checkbox"  >
																		<label for="agency8"> RESIDENTS OF COASTAL COMMUNITY</label>
																	</div>
																</div>
															</div>
														</div> 

														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																<label class="col-sm-12">NUMBER OF PARTICIPANTS</label> 
																	<input type="text"  class="form-control"  >   
																	<span class="help-block"><small>(Please provide exact number of participants)</small></span> 
																</div> 
															</div> 
															<div class="col-md-6">
																<div class="form-group">
																<label class="col-sm-12">AREA COVERAGE</label>  
																	<input type="text"  class="form-control"  >  
																	<span class="help-block"><small>(Please provide estimated area of coverage)</small></span> 
																</div> 
															</div>  
														</div>

														
														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">TYPES OF GARBAGE COLLECTED</label>
																<div class="col-sm-12">
																	<div class="checkbox checkbox-custom">
																		<input id="garbagetype1" type="checkbox"  >
																		<label for="garbagetype1">HOUSEHOLD PLASTIC ITEMS </label> 
																	</div>   
																	<div class="checkbox checkbox-custom">
																		<input id="garbagetype2" type="checkbox"  >
																		<label for="garbagetype2">DISCARDED FISHING GEARS (NETS, LINES, FLOATERS, ROPES)</label> 
																	</div>   
																	<div class="checkbox checkbox-custom">
																		<input id="garbagetype3" type="checkbox"  >
																		<label for="garbagetype3">DISCARDED SANITARY PRODUCTS</label> 
																	</div>   
																	<div class="checkbox checkbox-custom">
																		<input id="garbagetype4" type="checkbox"  >
																		<label for="garbagetype4">METALS</label> 
																	</div>    
																	<div class="checkbox checkbox-custom">
																		<input id="garbagetype5" type="checkbox"  >
																		<label for="garbagetype5">BIODEGARDABLE (WOODS, PAPERS, FOOD WASTE)</label> 
																	</div>  
																</div> 
															</div>
														</div>  
														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">VOLUME OF GARBAGE COLLECTED</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  > 
																	<span class="help-block"><small>(NUMBER OF SACK/s)</small></span> 
																</div>
															</div>
														</div> 
													</div>  
														
										<?php 
											}else if(  $row['report_selection_id'] == 2){ //Mangroup Plating
										?>		
										
													<div id="report2"> 
														<p>Mangroves provide a range ecosystem services. Planting mangroves helps in regulating erosion, floods and salt water intrusion. Likewise, it protect coastal communities against coastal flooding, high winds and waves, and tsunamis.</p>
														<div class="row"  style="margin-top: 50px;">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">Date</label>
																	<input type="date"  class="form-control"  >  
																</div> 
															</div> 
															<div class="col-md-2">
																<div class="form-group has-error">
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
																<div class="form-group has-error">
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
														

														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">CONDUCT OF ACTIVITY</label>
																<div class="col-sm-12">
																	<div class="radio-list"> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="radio1"  >
																			<label for="radio1">PCG INITIATED</label>
																		</div> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="radio2"  >
																			<label for="radio2">JOINT</label>
																		</div> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="radio3"  >
																			<label for="radio3">PARTICIPATED FROM OTHER AGENCY</label>
																		</div>
																	</div> 
																</div>
															</div>
														</div> 

														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">PARTICIPATING AGENCIES</label>
																<div class="col-sm-12">
																	<div class="checkbox checkbox-custom">
																		<input id="agency1" type="checkbox"  >
																		<label for="agency1"> LGU </label>
																	</div>  
																	<div class="checkbox checkbox-custom">
																		<input id="agency2" type="checkbox"  >
																		<label for="agency2"> NATIONAL LINE AGENCIES </label>
																	</div>  
																	<div class="checkbox checkbox-custom">
																		<input id="agency3" type="checkbox"  >
																		<label for="agency3"> ACADEME </label>
																	</div>    
																	<div class="checkbox checkbox-custom">
																		<input id="agency4" type="checkbox"  >
																		<label for="agency4"> PRIVATE CORPORATIONS </label>
																	</div>  
																	<div class="checkbox checkbox-custom">
																		<input id="agency5" type="checkbox"  >
																		<label for="agency5"> SHIPPING COMPANIES</label>
																	</div> 
																	<div class="checkbox checkbox-custom">
																		<input id="agency6" type="checkbox"  >
																		<label for="agency6"> PCG UNITS</label>
																	</div>
																	<div class="checkbox checkbox-custom">
																		<input id="agency7" type="checkbox"  >
																		<label for="agency7"> PCG AUXILIARY</label>
																	</div>
																	<div class="checkbox checkbox-custom">
																		<input id="agency8" type="checkbox"  >
																		<label for="agency8"> RESIDENTS OF COASTAL COMMUNITY</label>
																	</div>
																</div>
															</div>
														</div> 

														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																<label class="col-sm-12">NUMBER OF PARTICIPANTS</label> 
																	<input type="text"  class="form-control"  > 
																</div> 
															</div> 
															<div class="col-md-6">
																<div class="form-group">
																<label class="col-sm-12">AREA COVERAGE</label>  
																	<input type="text"  class="form-control"  >  
																</div> 
															</div>  
														</div> 
														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">NUMBER OF PROPAGULES/SEEDLINGS PLANTED</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  >  
																</div>
															</div>
														</div> 
													</div>
									
													
										<?php 
											}else if(  $row['report_selection_id'] == 3){ //Tree Planting
										?>		
										
													<div id="report3"> 
														<div class="row" style="margin-top: 50px;">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">DTG</label>
																	<input type="date"  class="form-control"  >  
																</div> 
															</div> 
															<div class="col-md-2">
																<div class="form-group has-error">
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
																<div class="form-group has-error">
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
														

														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">CONDUCT OF ACTIVITY</label>
																<div class="col-sm-12">
																	<div class="radio-list"> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="radio1"  >
																			<label for="radio1">PCG INITIATED</label>
																		</div> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="radio2"  >
																			<label for="radio2">JOINT</label>
																		</div> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="radio3"  >
																			<label for="radio3">PARTICIPATED FROM OTHER AGENCY</label>
																		</div>
																	</div> 
																</div>
															</div>
														</div> 

														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">PARTICIPATING AGENCIES</label>
																<div class="col-sm-12">
																	<div class="checkbox checkbox-custom">
																		<input id="agency1" type="checkbox"  >
																		<label for="agency1"> LGU </label>
																	</div>  
																	<div class="checkbox checkbox-custom">
																		<input id="agency2" type="checkbox"  >
																		<label for="agency2"> NATIONAL LINE AGENCIES </label>
																	</div>  
																	<div class="checkbox checkbox-custom">
																		<input id="agency3" type="checkbox"  >
																		<label for="agency3"> ACADEME </label>
																	</div>    
																	<div class="checkbox checkbox-custom">
																		<input id="agency4" type="checkbox"  >
																		<label for="agency4"> PRIVATE CORPORATIONS </label>
																	</div>  
																	<div class="checkbox checkbox-custom">
																		<input id="agency5" type="checkbox"  >
																		<label for="agency5"> SHIPPING COMPANIES</label>
																	</div> 
																	<div class="checkbox checkbox-custom">
																		<input id="agency6" type="checkbox"  >
																		<label for="agency6"> PCG UNITS</label>
																	</div>
																	<div class="checkbox checkbox-custom">
																		<input id="agency7" type="checkbox"  >
																		<label for="agency7"> PCG AUXILIARY</label>
																	</div>
																	<div class="checkbox checkbox-custom">
																		<input id="agency8" type="checkbox"  >
																		<label for="agency8"> RESIDENTS OF COASTAL COMMUNITY</label>
																	</div>
																</div>
															</div>
														</div> 

														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																<label class="col-sm-12">NUMBER OF PARTICIPANTS</label> 
																	<input type="text"  class="form-control"  > 
																</div> 
															</div> 
															<div class="col-md-6">
																<div class="form-group">
																<label class="col-sm-12">NUMBER OF SEEDLINGS PLANTED</label>  
																	<input type="text"  class="form-control"  >  
																</div> 
															</div>  
														</div>
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																<label class="col-sm-12">AREA COVERAGE</label> 
																	<input type="text"  class="form-control"  > 
																</div> 
															</div> 
															<div class="col-md-6">
																<div class="form-group">
																<label class="col-sm-12">KIND OF TREES PLANTED</label>  
																	<input type="text"  class="form-control"  >  
																</div> 
															</div>  
														</div> 
													</div>
									
													
										<?php 
											}else if(  $row['report_selection_id'] == 4){ //VESSEL INSPECTION
										?>		
										
													<div id="report4"> 
														<div class="row" style="margin-top: 50px;">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">DTG</label>
																	<input type="date"  class="form-control"  >  
																</div> 
															</div> 
															<div class="col-md-2">
																<div class="form-group has-error">
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
																<div class="form-group has-error">
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
															

														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">LOCATION</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  >  
																</div>
															</div>
														</div>
														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">TYPE OF VESSEL</label>
																<div class="col-sm-12">
																	<div class="radio-list"> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="vessel1"  >
																			<label for="vessel1">PASSENGER VESSEL</label>
																		</div> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="vessel2"  >
																			<label for="vessel2">PASSENGER-CARGO VESSEL</label>
																		</div> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="vessel3"  >
																			<label for="vessel3">CARGO VESSEL</label>
																		</div>
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="vessel4"  >
																			<label for="vessel4">TANKER</label>
																		</div>
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="vessel5"  >
																			<label for="vessel5">LANDING CRAFT TANK (LCT) VESSEL</label>
																		</div>
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="vessel6"  >
																			<label for="vessel6">TUGBOAT/BARGE</label>
																		</div>
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="vessel7"  >
																			<label for="vessel7">TANKER (LPG)</label>
																		</div>
																	</div> 
																</div>
															</div>
														</div> 

														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">NAME OF VESSEL</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  >
																</div>
															</div>
														</div>

														
														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">TYPE OF INSPECTION</label>
																<div class="col-sm-12">
																	<div class="radio-list"> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="inpection_type1"  >
																			<label for="inpection_type1"> MONITORING INSPECTION</label>
																		</div>  
																	</div> 
																	<div class="radio-list"> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="inpection_type2"  >
																			<label for="inpection_type2"> COMPLIANCE INSPECTION</label>
																		</div>  
																	</div> 
																</div>
															</div>
														</div>  
														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">MARPOL VIOLATION</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  >
																</div>
															</div>
														</div>
	
													</div>
									
													
										<?php 
											}else if(  $row['report_selection_id'] == 5){ //VESSEL INSPECTION
										?>		
										
													<div id="report5"> 
														<div class="row" style="margin-top: 50px;">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">DTG</label>
																	<input type="date"  class="form-control"  >  
																</div> 
															</div> 
															<div class="col-md-2">
																<div class="form-group has-error">
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
																<div class="form-group has-error">
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
															

														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">LOCATION</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  >  
																</div>
															</div>
														</div>
														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">TYPE OF FACILITY</label>
																<div class="col-sm-12">
																	<div class="radio-list"> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="facility_type1"  >
																			<label for="facility_type1">DEPOT/TERMINAL</label>
																		</div>  
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="facility_type2" >
																			<label for="facility_type2">POWER PLANT</label>
																		</div>  
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="facility_type3" >
																			<label for="facility_type3">SHIPYARD</label>
																		</div>  
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="facility_type4" >
																			<label for="facility_type4">OIL MILL</label>
																		</div>  
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="facility_type5" >
																			<label for="facility_type5">MANUFACTURING PLANT</label>
																		</div>  
																	</div> 
																</div>
															</div>
														</div> 

														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">NAME OF VESSEL</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  >
																</div>
															</div>
														</div>

														
														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">TYPE OF INSPECTION</label>
																<div class="col-sm-12">
																	<div class="radio-list"> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="inpection_type1"  >
																			<label for="inpection_type1"> MONITORING INSPECTION</label>
																		</div>  
																	</div> 
																	<div class="radio-list"> 
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="inpection_type2"  >
																			<label for="inpection_type2"> COMPLIANCE INSPECTION</label>
																		</div>  
																	</div> 
																</div>
															</div>
														</div>  
														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">MARPOL VIOLATION</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  >
																</div>
															</div>
														</div>

													</div>
									
													
										<?php 
											}else if(  $row['report_selection_id'] == 6){ //VESSEL INSPECTION
										?>		
										
													<div id="report6"> 
														<div class="row" style="margin-top: 50px;">
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">DTG</label>
																	<input type="date"  class="form-control"  >  
																</div> 
															</div> 
															<div class="col-md-2">
																<div class="form-group has-error">
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
																<div class="form-group has-error">
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
															

														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">LOCATION</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  >  
																</div>
															</div>
														</div>
														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">TYPE OF TRAINING</label>
																<div class="col-sm-12">
																	<div class="checkbox checkbox-custom">
																		<input id="training_type1" type="checkbox"  >
																		<label for="training_type1">OIL SPILL RESPONSE AWARENESS AND EMERGENCY TRAINING </label>
																	</div>   
																	<div class="checkbox checkbox-custom">
																		<input id="training_type2" type="checkbox"  >
																		<label for="training_type2">BASIC MAREP</label>
																	</div>    
																	<div class="checkbox checkbox-custom">
																		<input id="training_type3" type="checkbox"  >
																		<label for="training_type3">GUEST INSTRUCTOR</label>
																	</div>  
																</div>
															</div>
														</div> 
														<div class="row">
															<div class="col-md-6">
																<div class="form-group">
																<label class="col-sm-12">NAME OF FACILITY/TRAINING CENTER</label> 
																	<input type="text"  class="form-control"  > 
																</div> 
															</div> 
															<div class="col-md-6">
																<div class="form-group">
																<label class="col-sm-12">NR OF PARTICIPANTS/STUDENTS</label>  
																	<input type="text"  class="form-control"  >  
																</div> 
															</div>  
														</div>
													</div>
									
														
										<?php 
											}else if(  $row['report_selection_id'] == 7){ //VESSEL INSPECTION
										?>		
										
													<div id="report7"> 
														<h4>AGROUNDING</h4>
														<div class="row" style="margin-top: 50px;">
															<div class="form-group"> 
																<label class="col-sm-12">CAUSE OF INCIDENT</label>
																<div class="col-sm-12">
																	<div class="radio-list"> 
																		<div class="radio radio-info">
																			<input type="radio" name="incident_cause" id="incident1"  >
																			<label for="incident1">MACHINERY FAILURE</label>
																		</div> 
																		<div class="radio radio-info">
																			<input type="radio" name="incident_cause" id="incident2"  >
																			<label for="incident2">NAVIGATIONAL EQUIPMENT FAILURE</label>
																		</div> 
																		<div class="radio radio-info">
																			<input type="radio" name="incident_cause" id="incident3"  >
																			<label for="incident3">HUMAN ERROR</label>
																		</div>
																		<div class="radio radio-info">
																			<input type="radio" name="incident_cause" id="incident4"  >
																			<label for="incident4">SEA AND WEATHER CONDITION</label>
																		</div>
																		<div class="radio radio-info">
																			<input type="radio" name="incident_cause" id="incident5"  >
																			<label for="incident5">GEOGRAPHIC FACTOR</label>
																		</div>
																	</div> 
																</div>
															</div>
														</div> 
														<div class="row" >
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">DATE OF INCIDENT</label>
																	<input type="date"  class="form-control"  >  
																</div> 
															</div> 
															<div class="col-md-2">
																<div class="form-group has-error">
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
																<div class="form-group has-error">
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
															

														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">LOCATION</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  >  
																</div>
															</div>
														</div>
														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">TYPE OF VESSEL</label>
																<div class="col-sm-12">
																	<div class="radio-list"> 
																		<div class="radio radio-info">
																			<input type="radio" name="vessel_type" id="vessel1"  >
																			<label for="vessel1">PASSENGER VESSEL</label>
																		</div> 
																		<div class="radio radio-info">
																			<input type="radio" name="vessel_type" id="vessel2"  >
																			<label for="vessel2">PASSENGER-CARGO VESSEL</label>
																		</div> 
																		<div class="radio radio-info">
																			<input type="radio" name="vessel_type" id="vessel3"  >
																			<label for="vessel3">CARGO VESSEL</label>
																		</div>
																		<div class="radio radio-info">
																			<input type="radio" name="vessel_type" id="vessel4"  >
																			<label for="vessel4">TANKER</label>
																		</div> 
																	</div> 
																</div>
															</div>
														</div> 

														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">NAME OF VESSEL</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  >
																</div>
															</div>
														</div>
														
														<h4>OIL SPILL</h4>

														<div class="row" >
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">DATE OF INCIDENT</label>
																	<input type="date"  class="form-control"  >  
																</div> 
															</div> 
															<div class="col-md-2">
																<div class="form-group has-error">
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
																<div class="form-group has-error">
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
															

														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">LOCATION</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  >  
																</div>
															</div>
														</div>
														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">LOCATION MAP</label>
																<div class="col-sm-12">
																	<input type="file" class="form-control"  >  
																</div>
															</div>
														</div>

														
														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">SPILLER</label>
																<div class="col-sm-12">
																	<div class="radio-list"> 
																		<div class="radio radio-info">
																			<input type="radio" name="spiller" id="spiller1"  >
																			<label for="spiller1">VESSEL</label>
																		</div>  
																	</div> 
																	<div class="radio-list"> 
																		<div class="radio radio-info">
																			<input type="radio" name="spiller" id="spiller2"  >
																			<label for="spiller2">LANDBASED FACILITY</label>
																		</div>  
																	</div> 
																</div>
															</div>
														</div> 
														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">NAME OF VESSEL/FACILITY</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  >  
																</div>
															</div>
														</div>
														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">NAME OF COMPANY</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  >  
																</div>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-4">
																<div class="form-group"> 
																	<label>TIER LEVEL</label>
																	<div class="col-sm-12">
																		<div class="radio-list"> 
																			<div class="radio radio-info">
																				<input type="radio" name="tier_level" id="tier"  >
																				<label for="tier">TIER 1</label>
																			</div> 
																			<div class="radio radio-info">
																				<input type="radio" name="tier_level" id="tier2"  >
																				<label for="tier2">TIER 2</label>
																			</div> 
																			<div class="radio radio-info">
																				<input type="radio" name="tier_level" id="tier3"  >
																				<label for="tier3">TIER 3</label>
																			</div>
																		</div> 
																	</div>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group"> 
																	<label>TYPES OF OIL</label>
																	<div class="col-sm-12">
																		<div class="radio-list"> 
																			<div class="radio radio-info">
																				<input type="radio" name="oil_type" id="oil_type1"  >
																				<label for="oil_type1">HEAVY OIL</label>
																			</div> 
																			<div class="radio radio-info">
																				<input type="radio" name="oil_type" id="oil_type2"  >
																				<label for="oil_type2">CRUDE OIL</label>
																			</div> 
																			<div class="radio radio-info">
																				<input type="radio" name="oil_type" id="oil_type3"  >
																				<label for="oil_type3">BUNKER FUEL 3</label>
																			</div>
																			<div class="radio radio-info">
																				<input type="radio" name="oil_type" id="oil_type4"  >
																				<label for="oil_type4">DIESEL</label>
																			</div>
																			<div class="radio radio-info">
																				<input type="radio" name="oil_type" id="oil_type5"  >
																				<label for="oil_type5">GASOLINE</label>
																			</div>
																			<div class="radio radio-info">
																				<input type="radio" name="oil_type" id="oil_type6"  >
																				<label for="oil_type6">HNS</label>
																			</div>
																		</div> 
																	</div>
																</div>
															</div>
															<div class="col-sm-4"> 
																<div class="form-group"> 
																	<label class="col-sm-12">RESPONDING UNITS</label>
																	<div class="col-sm-12">
																		<div class="checkbox checkbox-custom">
																			<input id="responding_unit1" type="checkbox"  >
																			<label for="responding_unit1">SPILLER</label> 
																		</div>   
																		<div class="checkbox checkbox-custom">
																			<input id="responding_unit2" type="checkbox"  >
																			<label for="responding_unit2">MEP FORCE</label> 
																		</div>   
																		<div class="checkbox checkbox-custom">
																			<input id="responding_unit4" type="checkbox"  >
																			<label for="responding_unit4">PCG UNITS</label> 
																		</div>    
																		<div class="checkbox checkbox-custom">
																			<input id="responding_unit5" type="checkbox"  >
																			<label for="responding_unit5">CREDITED SALVORS</label> 
																		</div>  
																	</div> 
																</div> 
															</div>
															
														</div> 

														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">VOLUME OF OIL RETRIEVED</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  >  
																</div>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																<div class="form-group"> 
																	<label class=" ">AFFECTED AREAS </label>
																	<div class="col-sm-12">
																		<div class="checkbox checkbox-custom">
																			<input id="affected_area1" type="checkbox"  >
																			<label for="affected_area1">MANGROVES</label>
																		</div>  
																		<div class="checkbox checkbox-custom">
																			<input id="affected_area2" type="checkbox"  >
																			<label for="affected_area2">SEA GRASS</label>
																		</div>  
																		<div class="checkbox checkbox-custom">
																			<input id="affected_area3" type="checkbox"  >
																			<label for="affected_area3">MPA</label>
																		</div>    
																		<div class="checkbox checkbox-custom">
																			<input id="affected_area4" type="checkbox"  >
																			<label for="affected_area4">PSSA</label>
																		</div>  
																		<div class="checkbox checkbox-custom">
																			<input id="affected_area5" type="checkbox"  >
																			<label for="affected_area5">TOURISM AREA</label>
																		</div> 
																		<div class="checkbox checkbox-custom">
																			<input id="affected_area6" type="checkbox"  >
																			<label for="affected_area6">RESIDENTIAL</label>
																		</div>
																		<div class="checkbox checkbox-custom">
																			<input id="affected_area7" type="checkbox"  >
																			<label for="affected_area7">DIVE SITES</label>
																		</div>
																		<div class="checkbox checkbox-custom">
																			<input id="affected_area8" type="checkbox"  >
																			<label for="affected_area8">INDUSTRIAL AREA</label>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group"> 
																	<label class=" ">AFFECTED BIODIVERSITY</label>
																	<div class="col-sm-12">
																		<div class="checkbox checkbox-custom">
																			<input id="affected_biodoversoty1" type="checkbox"  >
																			<label for="affected_biodoversoty1">BIRDS</label>
																		</div>  
																		<div class="checkbox checkbox-custom">
																			<input id="affected_biodoversoty2" type="checkbox"  > 
																			<label for="affected_biodoversoty2">CRUSTACEANS</label>
																		</div>  
																		<div class="checkbox checkbox-custom">
																			<input id="affected_biodoversoty3" type="checkbox"  >
																			<label for="affected_biodoversoty3">RESIDENTIAL AREAS</label>
																		</div>    
																		<div class="checkbox checkbox-custom">
																			<input id="affected_biodoversoty4" type="checkbox"  >
																			<label for="affected_biodoversoty4">MARINE MAMMALS</label>
																		</div>  
																		<div class="checkbox checkbox-custom">
																			<input id="affected_biodoversoty5" type="checkbox"  >
																			<label for="affected_biodoversoty5">MARICULTURE AREAS</label>
																		</div>  
																	</div>
																</div>
															</div>
															
														</div> 



													</div>
										<?php
											}
										?>
												</div>
										<?php
											}
										?> 
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