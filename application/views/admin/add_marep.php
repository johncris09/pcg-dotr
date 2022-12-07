
            
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
												$report_selection_id = $row['report_selection_id'] ;
										?>
											
												<div id="<?php echo $row['report_selection_id']; ?>"  class="toggle-show" style="display: none">	
													<h2><?php echo $row['report_selection']; ?></h2> 

										<?php 
											if( $report_selection_id   == 1){ //Coastal Clean Up
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
																		<?php 
																			foreach($activity_conduct as $row){
																		?> 
																			<div class="radio radio-info">
																				<input type="radio" name="activity_conduct" id="activity_conduct_<?php echo $report_selection_id . "_" . $row->id  ?>" value="<?php echo $row->id  ?>"  >
																				<label for="activity_conduct_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->activity_conduct ?></label>
																			</div> 
																		<?php
																			}
																		?> 
																	</div> 
																</div>
															</div>
														</div>  

														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">PARTICIPATING AGENCIES</label>
																<div class="col-sm-12">
																	<?php 
																		foreach($participating_agency as $row){
																	?>  
																		<div class="checkbox checkbox-custom">
																			<input  type="checkbox" name="participating_agency"  id="participating_agency_<?php echo $report_selection_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																			<label for="participating_agency_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->participating_agency ?></label>
																		</div> 
																	<?php
																		}
																	?>  
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
																	<?php 
																		foreach($garbage_type_collected as $row){
																	?>  
																		<div class="checkbox checkbox-custom">
																			<input  type="checkbox" name="garbage_type_collected"  id="garbage_type_collected_<?php echo $report_selection_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																			<label for="garbage_type_collected_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->garbage_type_collected ?></label>
																		</div> 
																	<?php
																		}
																	?>  
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
														

														<div class="row">
															<div class="form-group">  
																<label class="col-sm-12">CONDUCT OF ACTIVITY</label>
																<div class="col-sm-12"> 
																	<div class="radio-list"> 
																		<?php 
																			foreach($activity_conduct as $row){
																		?> 
																			<div class="radio radio-info">
																				<input type="radio" name="activity_conduct" id="activity_conduct_<?php echo $report_selection_id . "_" . $row->id  ?>" value="<?php echo $row->id  ?>"  >
																				<label for="activity_conduct_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->activity_conduct ?></label>
																			</div> 
																		<?php
																			}
																		?> 
																	</div> 
																</div>
															</div>
														</div>   

														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">PARTICIPATING AGENCIES</label>
																<div class="col-sm-12">
																	<?php 
																		foreach($participating_agency as $row){
																	?>  
																		<div class="checkbox checkbox-custom">
																			<input  type="checkbox" name="participating_agency"  id="participating_agency_<?php echo $report_selection_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																			<label for="participating_agency_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->participating_agency ?></label>
																		</div> 
																	<?php
																		}
																	?>  
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
																		<?php 
																			foreach($activity_conduct as $row){
																		?> 
																			<div class="radio radio-info">
																				<input type="radio" name="activity_conduct" id="activity_conduct_<?php echo $report_selection_id . "_" . $row->id  ?>" value="<?php echo $row->id  ?>"  >
																				<label for="activity_conduct_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->activity_conduct ?></label>
																			</div> 
																		<?php
																			}
																		?> 
																	</div> 
																</div>
															</div>
														</div> 

														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">PARTICIPATING AGENCIES</label>
																<div class="col-sm-12">
																	<?php 
																		foreach($participating_agency as $row){
																	?>  
																		<div class="checkbox checkbox-custom">
																			<input  type="checkbox" name="participating_agency"  id="participating_agency_<?php echo $report_selection_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																			<label for="participating_agency_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->participating_agency ?></label>
																		</div> 
																	<?php
																		}
																	?>  
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
																		<?php 
																			foreach($vessel_type as $row){
																		?> 
																			<div class="radio radio-info">
																				<input type="radio" name="vessel_type" id="vessel_type_<?php echo $report_selection_id . "_" . $row->id  ?>" value="<?php echo $row->id  ?>"  >
																				<label for="vessel_type_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->vessel_type ?></label>
																			</div> 
																		<?php
																			}
																		?> 
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
																		<?php 
																			foreach($inspection_type as $row){
																		?> 
																			<div class="radio radio-info">
																				<input type="radio" name="inspection_type" id="inspection_type_<?php echo $report_selection_id . "_" . $row->id  ?>" value="<?php echo $row->id  ?>"  >
																				<label for="inspection_type_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->inspection_type ?></label>
																			</div> 
																		<?php
																			}
																		?>  
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
																		<?php 
																			foreach($facility_type as $row){
																		?> 
																			<div class="radio radio-info">
																				<input type="radio" name="facility_type" id="facility_type_<?php echo $report_selection_id . "_" . $row->id  ?>" value="<?php echo $row->id  ?>"  >
																				<label for="facility_type_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->facility_type ?></label>
																			</div> 
																		<?php
																			}
																		?>  
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
																		<?php 
																			foreach($inspection_type as $row){
																		?> 
																			<div class="radio radio-info">
																				<input type="radio" name="inspection_type" id="inspection_type_<?php echo $report_selection_id . "_" . $row->id  ?>" value="<?php echo $row->id  ?>"  >
																				<label for="inspection_type_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->inspection_type ?></label>
																			</div> 
																		<?php
																			}
																		?>   
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
																	<?php 
																		foreach($training_type as $row){
																	?>  
																		<div class="checkbox checkbox-custom">
																			<input  type="checkbox" name="training_type"  id="training_type_<?php echo $report_selection_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																			<label for="training_type_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->training_type ?></label>
																		</div> 
																	<?php
																		}
																	?>   
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
																		<?php 
																			foreach($incident_cause as $row){
																		?> 
																			<div class="radio radio-info">
																				<input type="radio" name="incident_cause" id="incident_cause_<?php echo $report_selection_id . "_" . $row->id  ?>" value="<?php echo $row->id  ?>"  >
																				<label for="incident_cause_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->incident_cause ?></label>
																			</div> 
																		<?php
																			}
																		?>  
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
																		<?php 
																			foreach($vessel_type as $row){
																		?> 
																			<div class="radio radio-info">
																				<input type="radio" name="vessel_type" id="vessel_type_<?php echo $report_selection_id . "_" . $row->id  ?>" value="<?php echo $row->id  ?>"  >
																				<label for="vessel_type_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->vessel_type ?></label>
																			</div> 
																		<?php
																			}
																		?> 
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
																		<?php 
																			foreach($spiller as $row){
																		?> 
																			<div class="radio radio-info">
																				<input type="radio" name="spiller" id="spiller_<?php echo $report_selection_id . "_" . $row->id  ?>" value="<?php echo $row->id  ?>"  >
																				<label for="spiller_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->spiller ?></label>
																			</div> 
																		<?php
																			}
																		?> 
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
																			<?php 
																				foreach($tier_level as $row){
																			?> 
																				<div class="radio radio-info">
																					<input type="radio" name="tier_level" id="tier_level_<?php echo $report_selection_id . "_" . $row->id  ?>" value="<?php echo $row->id  ?>"  >
																					<label for="tier_level_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->tier_level ?></label>
																				</div> 
																			<?php
																				}
																			?>  
																		</div> 
																	</div>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="form-group"> 
																	<label>TYPES OF OIL</label>
																	<div class="col-sm-12">
																		<div class="radio-list"> 
																			<?php 
																				foreach($oil_type as $row){
																			?> 
																				<div class="radio radio-info">
																					<input type="radio" name="oil_type" id="oil_type_<?php echo $report_selection_id . "_" . $row->id  ?>" value="<?php echo $row->id  ?>"  >
																					<label for="oil_type_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->oil_type ?></label>
																				</div> 
																			<?php
																				}
																			?>    
																		</div> 
																	</div>
																</div>
															</div>
															<div class="col-sm-4"> 
																<div class="form-group"> 
																	<label class="col-sm-12">RESPONDING UNITS</label>
																	<div class="col-sm-12"> 
																		<?php 
																			foreach($responding_unit as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="responding_unit"  id="responding_unit_<?php echo $report_selection_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="responding_unit_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->responding_unit ?></label>
																			</div> 
																		<?php
																			}
																		?> 
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
																		<?php 
																			foreach($affected_area as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="affected_area"  id="affected_area_<?php echo $report_selection_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="affected_area_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->affected_area ?></label>
																			</div> 
																		<?php
																			}
																		?> 
																	</div>
																</div>
															</div>
															<div class="col-sm-6">
																<div class="form-group"> 
																	<label class=" ">AFFECTED BIODIVERSITY</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($affected_biodiversity as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="affected_biodiversity"  id="affected_biodiversity_<?php echo $report_selection_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="affected_biodiversity_<?php echo $report_selection_id . "_" . $row->id  ?>"><?php echo $row->affected_biodiversity ?></label>
																			</div> 
																		<?php
																			}
																		?>  
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