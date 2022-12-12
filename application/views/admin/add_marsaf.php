
            
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
								</div>
							</div>
							
							<form method="POST" action="<?= site_url() ?>insert_marep" role="form" enctype="multipart/form-data">
								<div class="panel panel-primary setup-content" id="step-1">
									<div class="panel-heading">
										<h3 class="panel-title text-white">Step 1</h3>
									</div>
									<div class="panel-body"> 
										<div class="row">
											<p><strong style="font-size: 1.3em;color: #000;">PROJECT 1 : MARSAF CGDNM</strong></p>
											<p>This is a prototype data gathering system to monitor and evaluate CGDNM performance concerning its Maritime Safety Function (MARSAF) which 
												helps prevent or minimize unnecessary loss of lives and properties at sea. These are the following; Pre-Departure Inspection (PDI), Vessel Safety 
												Enforcement Inspection (VSEI), Emergency Readiness Evaluation (ERE), Port State Control (PSC) Inspection, Coastal & Beach Resort Safety and Security 
												Inspection, Recreational Safety Enforcement Inspection (RSEI), Aids to Navigation (ATON), Maritime Casualty and Incident Investigation, Salvage Operation
												 and Marine Parades, Regattas and Maritime related activity.</p>
										</div>
										<div class="row" style="margin-top: 50px;">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">DTG</label>
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
											<div class="form-group"> 
												<label class="col-sm-12">PSC CENTER</label>
												<div class="col-sm-12">
													<div class="radio-list"> 
														<?php 
															foreach($psc_center as $row){
														?> 
															<div class="radio radio-info">
																<input type="radio" name="psc_center" id="psc_center_<?php echo $row->id  ?>" value="<?php echo $row->id  ?>"  >
																<label for="psc_center_<?php echo $row->id  ?>"><?php echo $row->psc_center ?></label>
															</div> 
														<?php
															}
														?> 
													</div> 
												</div>
											</div>
										</div> 
										<div class="row">
											<div class="col-md-12 ">
												<div class="form-group">
													<label>REPORT TYPE<strong class="text-danger">*</strong> </label>
													<select id="report-type" class="form-control" required>
														<option value="">Select</option>
														<?php 
															foreach($report_type as $row){
														?>
															<option value="<?php echo $row->id; ?>"><?php echo $row->report_type; ?></option>
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
											foreach($report_type as $row){
												$report_type_id = $row->id ;
										?>

											<div  class="toggle-show"  data-id="<?php echo $report_type_id; ?>" style="display:none"> 
												<?php 
													if($report_type_id == 1){ // PRE-DEPARTURE INSPECTION (PDI) 
												?> 
														<fieldset > 
															<legend class="scheduler-border">PRE-DEPARTURE INSPECTION DATA</legend>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">NAME OF VESSEL</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">PLACE OF PORT</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div> 
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">TYPE OF VESSEL</label>
																	<div class="col-sm-12">
																	<?php 
																		foreach($vessel_type as $row){
																	?>  
																		<div class="checkbox checkbox-custom">
																			<input  type="checkbox" name="vessel_type"  id="vessel_type_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																			<label for="vessel_type_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->vessel_type ?></label>
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
																	<label class="col-sm-12">OWNER/COMPANY</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">CAPTAINS NAME</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div>  
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">GROSS TONNAGE (GT)</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">KILOWATS (KW)</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div> 
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">RESULT OF PDI</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($pdi_result as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="pdi_result"  id="pdi_result_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="pdi_result_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->pdi_result ?></label>
																			</div> 
																		<?php
																			}
																		?>  
																	</div> 
																</div>
															</div>  
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">ACTION CODES (IF ANY)</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($action_code as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="action_code"  id="action_code_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="action_code_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->action_code ?></label>
																			</div> 
																		<?php
																			}
																		?> 
																	</div>
																</div>
															</div>  
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">NOTED DEFICIENCY/IES (IF ANY)</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($noted_deficiency as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="noted_deficiency"  id="noted_deficiency_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="noted_deficiency_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->noted_deficiency ?></label>
																			</div> 
																		<?php
																			}
																		?> 
																	</div> 
																</div>
															</div>  
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group">
																		<label class="col-sm-12">NAME OF VESSEL</label> 
																		<textarea name="" class="form-control"  id="" cols="30" rows="10"></textarea> 
																	</div> 
																</div>  
															</div>

															<div class="row">  
																<div class="col-md-12">
																	<button class="btn btn-primary btn-sm" type="button"> <i class="fa fa-plus"></i> Add</button> 
																	<button class="btn btn-danger btn-sm" type="button"> <i class="fa fa-times"></i> Remove</button>
																</div>  
															</div>  
														</fieldset> 
														<div class="row">
															<div class="col-md-12">
																<div class="form-group">
																	<label class="control-label">BULK CARRIER</label>
																	<div class="radio-list">
																		<label class="radio-inline p-0">
																			<div class="radio radio-info">
																				<input type="radio" name="radio" id="radio1" value="option1">
																				<label for="radio1">1</label>
																			</div>
																		</label>
																		<label class="radio-inline">
																			<div class="radio radio-info">
																				<input type="radio" name="radio" id="radio2" value="option2">
																				<label for="radio2">2</label>
																			</div>
																		</label>
																		<label class="radio-inline">
																			<div class="radio radio-info">
																				<input type="radio" name="radio" id="radio2" value="option2">
																				<label for="radio2">3</label>
																			</div>
																		</label>
																		<label class="radio-inline">
																			<div class="radio radio-info">
																				<input type="radio" name="radio" id="radio2" value="option2">
																				<label for="radio2">4</label>
																			</div>
																		</label>
																		<label class="radio-inline">
																			<div class="radio radio-info">
																				<input type="radio" name="radio" id="radio2" value="option2">
																				<label for="radio2">5</label>
																			</div>
																		</label>
																		<label class="radio-inline">
																			<div class="radio radio-info">
																				<input type="radio" name="radio" id="radio2" value="option2">
																				<label for="radio2">6-10</label>
																			</div>
																		</label>
																	</div>
																</div>
															</div>
														</div>
														<fieldset > 
															<legend class="scheduler-border">TOTAL NR OF PDI CONDUCTED PER TYPE OF VESSEL</legend> 
															<?php 
																foreach($vessel_type as $row){
															?>    
																<div class="row">
																	<div class="col-md-12">
																		<div class="form-group">
																			<label class="control-label"><?php echo $row->vessel_type ?></label>
																			<div class="radio-list"> 
																				<?php 
																					foreach(range(1,5) as $i){
																				?>
																					<label class="radio-inline p-0">
																						<div class="radio radio-info">
																							<input type="radio" name="<?php echo $row->vessel_type ?>" id="<?php echo $row->vessel_type . "_" .  $report_type_id . "_" . $row->id . "_" . $i  ?>" value="<?php echo $i; ?>">
																							<label for="<?php echo $row->vessel_type . "_" .  $report_type_id . "_" . $row->id . "_" . $i  ?>"><?php echo $i; ?></label>
																						</div>
																					</label>
																				<?php

																					}
																				?>
																				<label class="radio-inline">
																					<div class="radio radio-info">
																						<input type="radio" name="<?php echo $row->vessel_type ?>" id="<?php echo $row->vessel_type . "_" .  $report_type_id . "_" . $row->id . "_6-10"   ?>"  value="6-10">
																						<label for="radio2">6-10</label>
																					</div>
																				</label> 
																			</div>
																		</div>
																	</div>
																</div>
																
															<?php
																}
															?>  
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">CHECK BOXES OF ALL NOTED DEFICIENCY/IES (IF ANY)</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($noted_deficiency as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="noted_deficiency2s"  id="noted_deficiency_<?php echo $report_type_id . "_" . $row->id  ?>_2"  value="<?php echo $row->id  ?>" >
																				<label for="noted_deficiency_<?php echo $report_type_id . "_" . $row->id  ?>_2"><?php echo $row->noted_deficiency ?></label>
																			</div> 
																		<?php
																			}
																		?>
																	</div> 
																</div>
															</div>  
														</fieldset> 
														<fieldset > 
															<legend class="scheduler-border">TOTAL NUMBER OF VESSEL THAT HAVE BEEN CLEARED TO DEPART AND NOT CLEARED TO DEPART</legend>  
															<?php  
																foreach($pdi_result as $row){
															?>
																	<div class="row">
																		<div class="col-md-12">
																			<div class="form-group">
																				<label class="control-label"><?php echo $row->pdi_result; ?></label>
																				<div class="checkbox-list">
																					<?php 
																						foreach(range(1,5) as $i){
																					?>
																						<label class="checkbox-inline p-0">
																							<div class="checkbox checkbox-info">
																								<input type="checkbox" name="depart" id="<?php echo $row->pdi_result . "_" .  $report_type_id . "_" . $row->id   ?>" value="<?php echo $i; ?>">
																								<label for="<?php echo $row->pdi_result . "_" .  $report_type_id . "_" . $row->id   ?>"><?php echo $i; ?></label>
																							</div>
																						</label> 
																					<?php

																						}
																					?> 
																					<label class="checkbox-inline p-0">
																						<div class="checkbox checkbox-info">
																							<input type="checkbox" name="depart" id="depart1" value="<?php echo $i; ?>">
																							<label for="depart1">6-10</label>
																						</div>
																					</label>   
																				</div>
																			</div>
																		</div>
																	</div>  
															<?php
																}
															?> 
														</fieldset> 
												<?php
													}else if($report_type_id == 2){ // VESSEL SAFETY ENFORCEMENT INSPECTION (VSEI)
												?> 
														<fieldset > 
															<legend class="scheduler-border">VESSEL SAFETY ENFORCEMENT INSPECTION DATA</legend>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">NAME OF VESSEL</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">PLACE OF PORT</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div>  
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">TYPE OF VESSEL</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($vessel_type as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="vessel_type"  id="vessel_type_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="vessel_type_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->vessel_type ?></label>
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
																	<label class="col-sm-12">OWNER/COMPANY</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">CAPTAINS NAME</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div>  
															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">AGE OF VESSEL</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">GROSS TONNAGE (GT)</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">KILOWATS (KW)</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div>  
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="col-sm-12">TYPE OF INSPECTION</label>  
																		<div class="col-sm-12">
																			<?php 
																				foreach($inspection_type as $row){
																			?>  
																				<div class="checkbox checkbox-custom">
																					<input  type="checkbox" name="inspection_type"  id="inspection_type_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																					<label for="inspection_type_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->inspection_type ?></label>
																				</div> 
																			<?php
																				}
																			?>  
																		</div>
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="col-sm-12">RESULT OF VSEI</label>  
																		<?php 
																			foreach($vsei_result as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="vsei_result"  id="vsei_result_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="vsei_result_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->vsei_result ?></label>
																			</div> 
																		<?php
																			}
																		?>  
																	</div> 
																</div>  
															</div>
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">ACTION CODES (IF ANY)</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($action_code as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="action_code"  id="action_code_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="action_code_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->action_code ?></label>
																			</div> 
																		<?php
																			}
																		?>  
																		<div class="checkbox checkbox-custom">
																			<input id="garbagetype5" type="checkbox"  >
																			<label for="garbagetype5">Other</label>  
																			<input type="text"> 
																		</div> 
																	</div> 
																</div>
															</div>  

															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">VSEI DEFICIENCY CODE (IF ANY)</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($vsei_deficiency_code as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="vsei_deficiency_code"  id="vsei_deficiency_code_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="vsei_deficiency_code_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->vsei_deficiency_code ?></label>
																			</div> 
																		<?php
																			}
																		?>          
																	</div> 
																</div>
															</div>   
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group">
																		<label class="col-sm-12">NAME OF VESSEL</label> 
																		<textarea name="" class="form-control"  id="" cols="30" rows="10"></textarea> 
																	</div> 
																</div>  
															</div>
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group">
																		<label class="col-sm-12">NEXT SCHEDULE OF VSEI</label> 
																		<input type="text" class="form-control"   name="" id=""> 
																	</div> 
																</div>  
															</div>
				
															<div class="row">  
																<div class="col-md-12">
																	<button class="btn btn-primary btn-sm" type="button"> <i class="fa fa-plus"></i> Add</button> 
																	<button class="btn btn-danger btn-sm" type="button"> <i class="fa fa-times"></i> Remove</button>
																</div>  
															</div>  
														</fieldset> 
														<fieldset > 
															<legend class="scheduler-border">TOTAL NR OF PDI CONDUCTED PER TYPE OF VESSEL</legend>  
															<?php 
																foreach($vessel_type as $row){
															?>    
																<div class="row">
																	<div class="col-md-12">
																		<div class="form-group">
																			<label class="control-label"><?php echo $row->vessel_type ?></label>
																			<div class="checkbox-list">
																				<?php 
																					foreach(range(1,3) as $i){
																				?>
																					<label class="checkbox-inline p-0">
																						<div class="checkbox checkbox-info">
																						<input  type="checkbox" name="<?php echo $row->vessel_type ?>" id="<?php echo $row->vessel_type . "_" .  $report_type_id . "_" . $row->id . "_" . $i  ?>" value="<?php echo $i; ?>">
																							<label for="<?php echo $row->vessel_type . "_" .  $report_type_id . "_" . $row->id . "_" . $i  ?>"><?php echo $i; ?></label>
																						</div>
																					</label>   
																				<?php

																					}
																				?> 
																			</div>
																		</div>
																	</div>
																</div>
																
															<?php
																}
															?>     
														</fieldset> 
														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">VSEI DEFICIENCY CODE (IF ANY)</label>
																<div class="col-sm-12">
																	<?php 
																		foreach($vsei_deficiency_code as $row){
																	?>  
																		<div class="checkbox checkbox-custom">
																			<input  type="checkbox" name="vsei_deficiency_code"  id="vsei_deficiency_code_<?php echo $report_type_id . "_" . $row->id  ?>_2"  value="<?php echo $row->id  ?>" >
																			<label for="vsei_deficiency_code_<?php echo $report_type_id . "_" . $row->id  ?>_2"><?php echo $row->vsei_deficiency_code ?></label>
																		</div> 
																	<?php
																		}
																	?>      
																</div> 
															</div>
														</div> 
														<fieldset > 
															<legend class="scheduler-border">TOTAL NUMBER OF VESSEL DETAINED AND DETAINED</legend> 
															<?php 
																$status = ['DETAINED', 'NOT DETAINEDs']; 
																foreach($status as $stat){
															?>
															
																<div class="row">
																	<div class="col-md-12">
																		<div class="form-group">
																			<label class="control-label"><?php echo $stat; ?></label>
																			<div class="checkbox-list">
																				<?php 
																					foreach(range(1,3) as $i){
																				?>

																						<label class="checkbox-inline p-0">
																							<div class="checkbox checkbox-info">
																								<input type="checkbox" name="<?php echo $stat; ?>" id="<?php echo $stat . "_" . $report_type_id . "_" . $i ?>" value="<?php echo $stat; ?>">
																								<label for="<?php echo $stat . "_" . $report_type_id . "_" . $i ?>"><?php echo $i; ?></label>
																							</div>
																						</label>
																				<?php 
																					}
																				?> 
																			</div>
																		</div>
																	</div>
																</div>
															<?php
																}
															?>   
														</fieldset>   


												<?php
													}else if($report_type_id == 3){ // EMERGENCY READINESS EVALUATION (ERE) 
												?> 
														<div class="row">
															<div class="col-md-12"> 
																<p><strong style="font-size: 1.3em;color: #000;">EMERGENCY READINESS EVALUATION (ERE)</strong></p>
																<p>Fill this section if you are conducting ERE</p> 
															</div>
														</div>
														<fieldset > 
															<legend class="scheduler-border">EMERGENCY READINESS EVALUATION DATA</legend>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">NAME OF VESSEL</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">PLACE OF PORT</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div>  
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">TYPE OF VESSEL</label>
																	<div class="col-sm-12"> 
																		<?php 
																			foreach($vessel_type as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="vessel_type"  id="vessel_type_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="vessel_type_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->vessel_type ?></label>
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
																	<label class="col-sm-12">OWNER/COMPANY</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">CAPTAINS NAME</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div>  
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">AGE OF VESSEL</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">GROSS TONNAGE (GT)</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div>   
															</div>  
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">KILOWATS (KW)</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">DATE OF PREVIOUS ERE</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div>   
															</div>  
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="col-sm-12">TYPE OF INSPECTION</label>  
																		<div class="col-sm-12">
																			<?php 
																				foreach($inspection_type as $row){
																			?>  
																				<div class="checkbox checkbox-custom">
																					<input  type="checkbox" name="inspection_type"  id="inspection_type_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																					<label for="inspection_type_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->inspection_type ?></label>
																				</div> 
																			<?php
																				}
																			?>   
																		</div>
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="col-sm-12">DRILLS CONDUCTED</label>  
																		<div class="col-sm-12">
																			<?php 
																				foreach($drill_conducted as $row){
																			?>  
																				<div class="checkbox checkbox-custom">
																					<input  type="checkbox" name="drill_conducted"  id="drill_conducted_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																					<label for="drill_conducted_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->drill_conducted ?></label>
																				</div> 
																			<?php
																				}
																			?>
																		</div>
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="col-sm-12">RESULT OF VSEI</label>   
																		<?php 
																			foreach($vsei_result as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="vsei_result"  id="vsei_result_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="vsei_result_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->vsei_result ?></label>
																			</div> 
																		<?php
																			}
																		?>    
																	</div> 
																</div>  
															</div> 
															
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group">
																		<label class="col-sm-12">NEXT SCHEDULE OF ERE</label> 
																		<input type="text" class="form-control"   name="" id=""> 
																	</div> 
																</div>  
															</div> 
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group">
																		<label class="col-sm-12">COMMENTS AND RECOMMENDATIONS</label> 
																		<textarea name="" class="form-control"  id="" cols="30" rows="10"></textarea> 
																	</div> 
																</div>  
															</div> 
				
															<div class="row">  
																<div class="col-md-12">
																	<button class="btn btn-primary btn-sm" type="button"> <i class="fa fa-plus"></i> Add</button> 
																	<button class="btn btn-danger btn-sm" type="button"> <i class="fa fa-times"></i> Remove</button>
																</div>  
															</div>  
														</fieldset> 
														<fieldset > 
															<legend class="scheduler-border">TOTAL NR OF PDI CONDUCTED PER TYPE OF VESSEL</legend>
															<?php 
																foreach($vessel_type as $row){
															?>    
																<div class="row">
																	<div class="col-md-12">
																		<div class="form-group">
																			<label class="control-label"><?php echo $row->vessel_type ?></label>
																			<div class="radio-list"> 
																				<?php 
																					foreach(range(1,5) as $i){
																				?>
																					<label class="radio-inline p-0">
																						<div class="radio radio-info">
																							<input type="radio" name="<?php echo $row->vessel_type ?>" id="<?php echo $row->vessel_type . "_" .  $report_type_id . "_" . $row->id . "_" . $i  ?>" value="<?php echo $i; ?>">
																							<label for="<?php echo $row->vessel_type . "_" .  $report_type_id . "_" . $row->id . "_" . $i  ?>"><?php echo $i; ?></label>
																						</div>
																					</label>
																				<?php

																					}
																				?>
																				<label class="radio-inline">
																					<div class="radio radio-info">
																						<input type="radio" name="<?php echo $row->vessel_type ?>" id="<?php echo $row->vessel_type . "_" .  $report_type_id . "_" . $row->id . "_6-10"   ?>"  value="6-10">
																						<label for="radio2">6-10</label>
																					</div>
																				</label> 
																			</div>
																		</div>
																	</div>
																</div>
																
															<?php
																}
															?>    
														</fieldset> 
														<fieldset > 
															<legend class="scheduler-border">TOTAL NUMBER OF VESSEL THAT HAVE PASSED AND FAILED</legend>  
															<?php 
																$status = ['PASSED', 'FAILED']; 
																foreach($status as $stat){
															?>
															
																<div class="row">
																	<div class="col-md-12">
																		<div class="form-group">
																			<label class="control-label"><?php echo $stat; ?></label>
																			<div class="checkbox-list">
																				<?php 
																					foreach(range(1,3) as $i){
																				?>

																						<label class="checkbox-inline p-0">
																							<div class="checkbox checkbox-info">
																								<input type="checkbox" name="<?php echo $stat; ?>" id="<?php echo $stat . "_" . $report_type_id . "_" . $i ?>" value="<?php echo $stat; ?>">
																								<label for="<?php echo $stat . "_" . $report_type_id . "_" . $i ?>"><?php echo $i; ?></label>
																							</div>
																						</label>
																				<?php 
																					}
																				?> 
																			</div>
																		</div>
																	</div>
																</div>
															<?php
																}
															?>  
														</fieldset>  
												
												<?php
													}else if($report_type_id == 4){ // PORT STATE CONTROL (PSC) 
												?>
 
														<div class="row">
															<div class="col-md-12"> 
																<p><strong style="font-size: 1.3em;color: #000;">PORT STATE CONTROL (PSC)</strong></p>
																<p>This section is for Port State Control Officers performing PSC function.</p>
															</div>
														</div>
														
														<fieldset > 
															<legend class="scheduler-border">PORT STATE CONTROL (PSC) DATA</legend>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">NAME OF VESSEL</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">PLACE OF PORT</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div>  
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">TYPE OF VESSEL</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($vessel_type as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="vessel_type"  id="vessel_type_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="vessel_type_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->vessel_type ?></label>
																			</div> 
																		<?php
																			}
																		?>   
																	</div> 
																</div>
															</div>  
															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">FLAG OF REGISTRY</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">IMO NR</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">GT/NT</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div>    
															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">AGE OF VESSEL</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">NAME OF OWNER/COMPANY</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div>    
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">CAPTAINS NAME</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div>   
															</div>   
				
															<div class="row"> 
																<div class="form-group">
																	<label class="col-sm-12">TYPE OF INSPECTION</label>  
																	<div class="col-sm-12">
																		<?php 
																			foreach($inspection_type as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="inspection_type"  id="inspection_type_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="inspection_type_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->inspection_type ?></label>
																			</div> 
																		<?php
																			}
																		?>   
																	</div> 
																</div>  
															</div> 
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">ACTION CODES (IF VESSEL HAS NOTED DEFICIENCY)</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($psc_action_code as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="psc_action_code"  id="psc_action_code_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="psc_action_code_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->psc_action_code ?></label>
																			</div> 
																		<?php
																			}
																		?>  
																	</div> 
																</div>
															</div>  
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">RELATED INTERNATIONAL CONVENTIONS NOTED DEFICIENCY/IES</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($related_international_conventions_noted_deficiency as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="related_international_conventions_noted_deficiency"  id="related_international_conventions_noted_deficiency_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="related_international_conventions_noted_deficiency_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->related_international_conventions_noted_deficiency ?></label>
																			</div> 
																		<?php
																			}
																		?>     
																	</div> 
																</div>
															</div>   
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group">
																		<label class="col-sm-12">SPECIFY NOTED DEFICIENCY/IES (IF ANY)</label> 
																		<textarea name="" class="form-control"  id="" cols="30" rows="10"></textarea> 
																	</div> 
																</div>  
															</div> 
															<div class="row">  
																<div class="col-md-12">
																	<button class="btn btn-primary btn-sm" type="button"> <i class="fa fa-plus"></i> Add</button> 
																	<button class="btn btn-danger btn-sm" type="button"> <i class="fa fa-times"></i> Remove</button>
																</div>  
															</div>  
														</fieldset> 
														<fieldset > 
															<legend class="scheduler-border">TOTAL NR OF PSC CONDUCTED PER TYPE OF VESSEL</legend>  
															<?php 
																foreach($vessel_type as $row){
															?>    
																<div class="row">
																	<div class="col-md-12">
																		<div class="form-group">
																			<label class="control-label"><?php echo $row->vessel_type ?></label>
																			<div class="checkbox-list">
																				<?php 
																					foreach(range(1,3) as $i){
																				?>
																					<label class="checkbox-inline p-0">
																						<div class="checkbox checkbox-info">
																						<input  type="checkbox" name="<?php echo $row->vessel_type ?>" id="<?php echo $row->vessel_type . "_" .  $report_type_id . "_" . $row->id . "_" . $i  ?>" value="<?php echo $i; ?>">
																							<label for="<?php echo $row->vessel_type . "_" .  $report_type_id . "_" . $row->id . "_" . $i  ?>"><?php echo $i; ?></label>
																						</div>
																					</label>   
																				<?php

																					}
																				?> 
																			</div>
																		</div>
																	</div>
																</div>
																
															<?php
																}
															?>  														
															 
														</fieldset> 
														<fieldset > 
															<legend class="scheduler-border">TOTAL NUMBER OF VESSEL NOT-DETAINED AND DETAINED</legend>   
															<?php 
																$status = ['DETAINED', 'NOT DETAINEDs']; 
																foreach($status as $stat){
															?>
															
																<div class="row">
																	<div class="col-md-12">
																		<div class="form-group">
																			<label class="control-label"><?php echo $stat; ?></label>
																			<div class="checkbox-list">
																				<?php 
																					foreach(range(1,3) as $i){
																				?>

																						<label class="checkbox-inline p-0">
																							<div class="checkbox checkbox-info">
																								<input type="checkbox" name="<?php echo $stat; ?>" id="<?php echo $stat . "_" . $report_type_id . "_" . $i ?>" value="<?php echo $stat; ?>">
																								<label for="<?php echo $stat . "_" . $report_type_id . "_" . $i ?>"><?php echo $i; ?></label>
																							</div>
																						</label>
																				<?php 
																					}
																				?> 
																			</div>
																		</div>
																	</div>
																</div>
															<?php
																}
															?>   
														</fieldset>  
												
												<?php
													}else if($report_type_id == 5){ // COASTAL AND BEACH RESORT SAFETY AND SECURITY INSPECTION
														 
												?>
 
														<div class="row">
															<div class="col-md-12"> 
																<p><strong style="font-size: 1.3em;color: #000;">COASTAL AND BEACH RESORT SAFETY AND SECURITY INSPECTION</strong></p>
															</div>
														</div>
														
														<fieldset > 
															<legend class="scheduler-border">COASTAL AND BEACH RESORT SAFETY AND SECURITY INSPECTION DATA</legend>
															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">NAME OF COASTAL/RESORT</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">PLACE OF COASTAL/BEACH RESORT</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">NAME OF OWNER</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div> 
															</div>  
															
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">LENGTH  OF BEACH COAST LINE</label>
																	<div class="col-sm-12"> 
																		<?php 
																			foreach($beach_coast_line_length as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="beach_coast_line_length"  id="beach_coast_line_length_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="beach_coast_line_length_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->beach_coast_line_length ?></label>
																			</div> 
																		<?php
																			}
																		?>  
																	</div> 
																</div>
															</div>   
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">VIOLATIONS (IF ANY)</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($coastal_and_beach_violation as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="coastal_and_beach_violation"  id="coastal_and_beach_violation_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="coastal_and_beach_violation_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->coastal_and_beach_violation ?></label>
																			</div> 
																		<?php
																			}
																		?>    
																	</div> 
																</div>
															</div>   
															<div class="row">  
																<div class="col-md-12">
																	<button class="btn btn-primary btn-sm" type="button"> <i class="fa fa-plus"></i> Add</button> 
																	<button class="btn btn-danger btn-sm" type="button"> <i class="fa fa-times"></i> Remove</button>
																</div>  
															</div>  
														</fieldset>   
												
												<?php
													}else if($report_type_id == 6){ //   RECREATIONAL SAFETY ENFORCEMENT INSPECTION (RSEI)
												?>
												
														<div class="row">
															<div class="col-md-12"> 
																<p><strong style="font-size: 1.3em;color: #000;">RECREATIONAL SAFETY ENFORCEMENT INSPECTION (RSEI)</strong></p>
															</div>
														</div>
														
														<fieldset > 
															<legend class="scheduler-border">RECREATIONAL SAFETY ENFORCEMENT INSPECTION DATA</legend>
															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">NAME OF RESORT</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">PLACE OF INSPECTION</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">NAME OF OWNER</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div> 
															</div>  
															
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">RECRATION WATERCRAFTS</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($recration_watercraft as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="recration_watercraft"  id="recration_watercraft_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="recration_watercraft_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->recration_watercraft ?></label>
																			</div> 
																		<?php
																			}
																		?>        
																	</div> 
																</div>
															</div>  

															
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">VIOLATIONS (IF ANY)</label>
																	<div class="col-sm-12"> 
																		<?php 
																			foreach($recreational_violation as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="recreational_violation"  id="recreational_violation_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="recreational_violation_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->recreational_violation ?></label>
																			</div> 
																		<?php
																			}
																		?>   
																	</div> 
																</div>
															</div>   
															<div class="row">  
																<div class="col-md-12">
																	<button class="btn btn-primary btn-sm" type="button"> <i class="fa fa-plus"></i> Add</button> 
																	<button class="btn btn-danger btn-sm" type="button"> <i class="fa fa-times"></i> Remove</button>
																</div>  
															</div>  
														</fieldset>   
												<?php
													}else if($report_type_id == 7){ //   AIDS TO NAVIGATION (ATON) INSPECTION 
												?>
 
														<div class="row">
															<div class="col-md-12"> 
																<p><strong style="font-size: 1.3em;color: #000;">AIDS TO NAVIGATION (ATON) INSPECTION</strong></p>
															</div>
														</div> 
														<fieldset > 
															<legend class="scheduler-border">Part 1. LIGHTHOUSE (LH)</legend>
															<div class="row">
																<div class="form-group">
																	<label class="col-sm-12">NAME OF LH</label>
																	<div class="col-sm-12">
																		<input type="text" class="form-control"  >
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="col-sm-12">TYPE OF LH</label>  
																		<div class="col-sm-12">
																			<?php 
																				foreach($lighthouse_type as $row){
																			?>  
																				<div class="checkbox checkbox-custom">
																					<input  type="checkbox" name="lighthouse_type"  id="lighthouse_type_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																					<label for="lighthouse_type_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->lighthouse_type ?></label>
																				</div> 
																			<?php
																				}
																			?>   
																		</div>
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="col-sm-12">PURPOSE OF INSPECTION</label>   
																		<?php 
																			foreach($lighthouse_inspection_purpose as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="lighthouse_inspection_purpose"  id="lighthouse_inspection_purpose_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="lighthouse_inspection_purpose_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->lighthouse_inspection_purpose ?></label>
																			</div> 
																		<?php
																			}
																		?>  
																	</div> 
																</div>  
															</div> 
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group">
																		<label class="col-sm-12">NAME OF VESSEL</label> 
																		<textarea name="" class="form-control"  id="" cols="30" rows="10"></textarea> 
																	</div> 
																</div>  
															</div>
															
															<div class="row">
																<div class="form-group">
																	<label class="col-sm-12">DATE OF LAST OPERATION</label>
																	<div class="col-sm-12">
																		<input type="text" class="form-control"  >
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">STATUS</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($lighthouse_status as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="lighthouse_status"  id="lighthouse_status_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="lighthouse_status_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->lighthouse_status ?></label>
																			</div> 
																		<?php
																			}
																		?>  
																	</div> 
																</div>
															</div>
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">IF NOT OPERATING, WHAT IS THE CAUSED?</label>
																	<div class="col-sm-12"> 
																		<?php 
																			foreach($lighthouse_cause_if_not_operating as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="lighthouse_cause_if_not_operating"  id="lighthouse_cause_if_not_operating_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="lighthouse_cause_if_not_operating_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->lighthouse_cause_if_not_operating ?></label>
																			</div> 
																		<?php
																			}
																		?>   
																	</div> 
																</div>
															</div>  
														</fieldset>  
														<fieldset > 
															<legend class="scheduler-border">TOTAL NUMBER OF LH NOT OPERATING AND OPERATING</legend> 
															
															<?php 
																foreach($lighthouse_status as $row){
															?>  
																
																<div class="row">
																	<div class="col-md-12">
																		<div class="form-group">
																			<label class="control-label"><?php echo $row->lighthouse_status; ?></label>
																			<div class="radio-list">
																				<?php
																					foreach(range(1,5) as $i){
																				?>
																						<label class="radio-inline p-0">
																							<div class="radio radio-info">
																								<input type="radio" name="<?php echo $row->lighthouse_status; ?>" id="<?php echo $row->lighthouse_status . "_" .  $report_type_id . "_" . $row->id . "_" . $i  ?>" value="<?php echo $i; ?>">
																								<label for="<?php echo $row->lighthouse_status . "_" .  $report_type_id . "_" . $row->id . "_" . $i  ?>"><?php echo $i; ?></label>
																							</div>
																						</label>
																				<?php

																					}
																				?> 
																			</div>
																		</div>
																	</div>
																</div>
															<?php
																}
															?>    
														</fieldset> 
														<fieldset > 
															<legend class="scheduler-border">Part 2. LIGHTED BUOYS</legend> 
															<div class="row">
																<div class="form-group">
																	<label class="col-sm-12">NAME OF BOUY</label>
																	<div class="col-sm-12">
																		<input type="text" class="form-control"  >
																	</div>
																</div>
															</div> 

															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">TYPE OF BOUY</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($bouy_type as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="bouy_type"  id="bouy_type_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="bouy_type_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->bouy_type ?></label>
																			</div> 
																		<?php
																			}
																		?>       
																	</div> 
																</div>
															</div>
															
																		
															<div class="row">
																<div class="form-group">
																	<label class="col-sm-12">EXACT LOCATION (COORDINATES)</label>
																	<div class="col-sm-12">
																		<input type="text" class="form-control" >  
																	</div>
																</div>
															</div>

															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">PURPOSE OF INSPECTION</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($light_bouy_inspection_purpose as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="light_bouy_inspection_purpose"  id="light_bouy_inspection_purpose_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="light_bouy_inspection_purpose_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->light_bouy_inspection_purpose ?></label>
																			</div> 
																		<?php
																			}
																		?>         
																	</div> 
																</div>
															</div> 
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group">
																		<label class="col-sm-12">IF REPAIR, WHAT REPAIR WAS DONE?</label> 
																		<textarea name="" class="form-control"  id="" cols="30" rows="10"></textarea> 
																	</div> 
																</div>  
															</div>
															<div class="row">
																<div class="form-group">
																	<label class="col-sm-12">DATE OF LAST OPERATION</label>
																	<div class="col-sm-12">
																		<input type="text" class="form-control"  > 
																	</div>
																</div>
															</div>
															
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">STATUS</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($light_buoy_status as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="light_buoy_status"  id="light_buoy_status_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="light_buoy_status_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->light_buoy_status ?></label>
																			</div> 
																		<?php
																			}
																		?>         
																	</div> 
																</div>
															</div>  
															
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">IF NOT OPERATING, WHAT IS THE CAUSED?</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($light_buoy__cause_if_not_operating as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="light_buoy__cause_if_not_operating"  id="light_buoy__cause_if_not_operating_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="light_buoy__cause_if_not_operating_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->light_buoy__cause_if_not_operating ?></label>
																			</div> 
																		<?php
																			}
																		?>   
																	</div> 
																</div>
															</div> 
															
														</fieldset> 
														<fieldset > 
															<legend class="scheduler-border">TOTAL NUMBER OF BOUY NOT-OPERATING AND OPERATING</legend>  
															
															<?php 
																foreach($light_buoy_status as $row){
															?>  
																
																<div class="row">
																	<div class="col-md-12">
																		<div class="form-group">
																			<label class="control-label"><?php echo $row->light_buoy_status; ?></label>
																			<div class="radio-list">
																				<?php
																					foreach(range(1,5) as $i){
																				?>
																						<label class="radio-inline p-0">
																							<div class="radio radio-info">
																								<input type="radio" name="<?php echo $row->light_buoy_status; ?>" id="<?php echo $row->light_buoy_status . "_" .  $report_type_id . "_" . $row->id . "_" . $i  ?>" value="<?php echo $i; ?>">
																								<label for="<?php echo $row->light_buoy_status . "_" .  $report_type_id . "_" . $row->id . "_" . $i  ?>"><?php echo $i; ?></label>
																							</div>
																						</label>
																				<?php

																					}
																				?> 
																			</div>
																		</div>
																	</div>
																</div>
															<?php
																}
															?>  
														</fieldset>   
												
												<?php
													}else if($report_type_id == 8){ // MARITIME CASUALTY INVESTIGATION (MCI) 
												?> 
														<div class="row">
															<div class="col-md-12"> 
																<p><strong style="font-size: 1.3em;color: #000;">MARITIME CASUALTY INVESTIGATION (MCI)</strong></p>
																<p>Fill this section if you are conducting MCI</p>
															</div>
														</div> 

														<fieldset >   
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">EXACT LOCATION (COORDINATES)</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">NAME OF VESSEL</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div> 
															<div class="row">
																<div class="col-md-3">
																	<div class="form-group">
																	<label class="col-sm-12">FLAG OF REGISTRY</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-3">
																	<div class="form-group">
																	<label class="col-sm-12">IMO NUMBER (FOREIGN)</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
																<div class="col-md-3">
																	<div class="form-group">
																	<label class="col-sm-12">OFFICIAL NUMBER (DOMESTIC)</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>   
																<div class="col-md-3">
																	<div class="form-group">
																	<label class="col-sm-12">GT/NT</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div> 
															</div> 
															
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">NAME OF OWNER/COMPANY</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">OWNER/COMPANY ADDRESS</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div> 
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">CAPTAINS NAME</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">NUMBER OF CREW AND ITS NATIONALITY</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div> 
															
															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">NUMBER OF PASSENGER (IF ANY)</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">CARGOES ONBOARD (IF ANY)</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">PORT OF ORIGIN</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div> 
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">DATE OF DEPARTURE FROM PORT OF ORIGIN</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">TIME OF DEPARTURED FROM PORT OF ORIGIN</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div> 
															<div class="row">
																<div class="form-group">
																	<label class="col-sm-12">DATE AND TIME OF INCIDENT</label>
																	<div class="col-sm-12">
																		<input type="text" class="form-control"  >   
																	</div>
																</div>
															</div> 
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">NATURE OF MARITIME CASUALTY</label>
																	<div class="col-sm-12"> 
																		<?php 
																			foreach($maritime_casualty_nature as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="maritime_casualty_nature"  id="maritime_casualty_nature_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="maritime_casualty_nature_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->maritime_casualty_nature ?></label>
																			</div> 
																		<?php
																			}
																		?>    
																	</div>
																</div>
															</div> 
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">CAUSE OF INCIDENT</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($incident_cause as $row){ 
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="incident_cause"  id="incident_cause_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="incident_cause_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->incident_cause ?></label>
																			</div> 
																		<?php
																			}
																		?>      
																	</div>
																</div>
															</div> 
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">CONSEQUENCES OF INCIDENT</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($incident_consequences as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="incident_consequences"  id="incident_consequences_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="incident_consequences_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->incident_consequences ?></label>
																			</div> 
																		<?php
																			}
																		?>            
																	</div>
																</div>
															</div>
															
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">SEVERITY OF MARITIME CASUALTY/INCIDENT</label>
																	<div class="col-sm-12">
																		<?php 
																			foreach($incident_consequences as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="incident_consequences"  id="incident_consequences_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="incident_consequences_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->incident_consequences ?></label>
																			</div> 
																		<?php
																			}
																		?>     
																	</div>
																</div>
															</div> 
															<div class="row">
																<div class="form-group"> 
																	<label class="col-sm-12">IF VERY SERIOUS MC, WHAT IS THE CATEGORY?</label>
																	<div class="col-sm-12"> 
																		<?php 
																			foreach($very_serious_mc_category as $row){
																		?>  
																			<div class="checkbox checkbox-custom">
																				<input  type="checkbox" name="very_serious_mc_category"  id="very_serious_mc_category_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																				<label for="very_serious_mc_category_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->very_serious_mc_category ?></label>
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
																	<label class="col-sm-12">NAME OF SHIPS INVOLVED (IF ANY)</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">FLAG OF REGISTRY</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>   
															</div> 
															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">IMO NUMBER (FOREIGN)</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">OFFICIAL NUMBER (DOMESTIC)</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>   
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">TYPE OF VESSEL</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div> 
															<div class="row">
																<div class="form-group">
																	<label class="col-sm-12">GT/NT</label>
																	<div class="col-sm-12">
																		<input type="text" class="form-control"  >  
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">NAME OF OWNER/COMPANY</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">OWNER/COMPANY ADDRESS</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>   
															</div> 
															
															<div class="row">
																<div class="form-group">
																	<label class="col-sm-12">CAPTAINS NAME</label>
																	<div class="col-sm-12">
																		<input type="text" class="form-control"  >  
																	</div>
																</div>
															</div>
															
															<div class="row">
																<div class="form-group">
																	<label class="col-sm-12">NUMBER OF CREW AND ITS NATIONALITY</label>
																	<div class="col-sm-12">
																		<input type="text" class="form-control"  >  
																	</div>
																</div>
															</div>
															
															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">NUMBER OF PASSENGER (IF ANY)</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">CARGOES ONBOARD (IF ANY)</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>   
																<div class="col-md-4">
																	<div class="form-group">
																	<label class="col-sm-12">PORT OF ORIGIN</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>  
															</div> 
															<div class="row"  >
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="control-label">DATE OF DEPARTURE FROM PORT OF ORIGIN</label>
																		<input type="date"  class="form-control"  >  
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group ">
																		<label class="control-label">TIME OF DEPARTURE FROM PORT OF ORIGIN</label> 
																		<div class="col-md-4"> 
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
																		<div class="col-md-4">
																			<select name="" id="" class="form-control " style="float:left !important"  >
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
															</div>
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">TOTAL NUMBER OF INJURED PERSON/S</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">TOTAL NUMBER OF DEATH/S</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>   
															</div> 
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">TOTAL NUMBER OF MISSING PERSON/S</label> 
																		<input type="text"  class="form-control"  >    
																	</div> 
																</div> 
																<div class="col-md-6">
																	<div class="form-group">
																	<label class="col-sm-12">TOTAL NUMBER OF SURVIVOR/S</label>  
																		<input type="text"  class="form-control"  >   
																	</div> 
																</div>   
															</div> 
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group">
																		<label class="col-sm-12">SAFETY RECOMMENDATIONS</label> 
																		<textarea name="" class="form-control"  id="" cols="30" rows="10"></textarea> 
																	</div> 
																</div>  
															</div>
														</fieldset>  
											 
												
												<?php
													}else if($report_type_id == 9){ // SALVAGE OPERATION 
												?>
 
														<div class="row">
															<div class="col-md-12"> 
																<p><strong style="font-size: 1.3em;color: #000;">SALVAGE OPERATION </strong></p> 
															</div>
														</div> 
														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">NAME OF SALVOR</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  > 
																</div>
															</div>
														</div>
														
														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">TYPE OF APPLICATION</label>
																<div class="col-sm-12">
																	<?php 
																		foreach($application_type as $row){
																	?>  
																		<div class="checkbox checkbox-custom">
																			<input  type="checkbox" name="application_type"  id="application_type_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																			<label for="application_type_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->application_type ?></label>
																		</div> 
																	<?php
																		}
																	?>  
																</div> 
															</div>
														</div>  
														
														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">EXACT LOCATION (COORDINATES)</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control"  > 
																</div>
															</div>
														</div>
														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">PURPOSE OF SALVAGE OPERATION</label>
																<div class="col-sm-12">
																	<?php 
																		foreach($salvage_operation_purpose as $row){
																	?>  
																		<div class="checkbox checkbox-custom">
																			<input  type="checkbox" name="salvage_operation_purpose"  id="salvage_operation_purpose_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																			<label for="salvage_operation_purpose_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->salvage_operation_purpose ?></label>
																		</div> 
																	<?php
																		}
																	?>   
																</div> 
															</div>
														</div>
														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">VIOLATION (IF ANY)</label>
																<div class="col-sm-12">
																	<div class="checkbox checkbox-custom">
																		<input id="garbagetype1" type="checkbox"  >
																		<label for="garbagetype1">OPERATING WITHOUT SECURING SALVAGE PERMIT</label> 
																	</div>    
																</div> 
															</div>
														</div> 
												<?php
													}else if($report_type_id == 10){ // MARINE PARADES, REGATTAS AND MARITIME RELATED ACTIVITY
												?>
 
														<div class="row">
															<div class="col-md-12"> 
																<p><strong style="font-size: 1.3em;color: #000;">MARINE PARADES, REGATTAS AND MARITIME RELATED ACTIVITY</strong></p> 
															</div>
														</div> 
														<div class="row">
															<div class="col-md-4">
																<div class="form-group">
																<label class="col-sm-12">LOCATION</label> 
																	<input type="text" class="form-control">    
																</div> 
															</div> 
															<div class="col-md-4">
																<div class="form-group">
																<label class="col-sm-12">DATE OF APPLICATION</label> 
																	<input type="text" class="form-control">    
																</div> 
															</div>   
															<div class="col-md-4">
																<div class="form-group">
																<label class="col-sm-12">EVENT  ORGANIZER</label> 
																	<input type="text" class="form-control">    
																</div> 
															</div>   
														</div>
														
														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">MARITIME ACITIVITY/ IES</label>
																<div class="col-sm-12">
																	<?php 
																		foreach($maritime_acitivity as $row){
																	?>  
																		<div class="checkbox checkbox-custom">
																			<input  type="checkbox" name="maritime_acitivity"  id="maritime_acitivity_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																			<label for="maritime_acitivity_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->maritime_acitivity ?></label>
																		</div> 
																	<?php
																		}
																	?>   
																</div> 
															</div>
														</div>
														
														<div class="row"  >
															<div class="col-md-6">
																<div class="form-group">
																	<label class="control-label">DATE OF DEPARTURE FROM PORT OF ORIGIN</label>
																	<input type="date"  class="form-control"  >  
																</div> 
															</div> 
															<div class="col-md-6">
																<div class="form-group ">
																	<label class="control-label">TIME OF DEPARTURE FROM PORT OF ORIGIN</label> 
																	<div class="col-md-4"> 
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
																	<div class="col-md-4">
																		<select name="" id="" class="form-control " style="float:left !important"  >
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
														</div>
														
																		
														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">POINT OF ORIGIN (COORDINATES)</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control" >  
																</div>
															</div>
														</div>		
														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">POINT OF DESTINATION (COORDINATES)</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control" >  
																</div>
															</div>
														</div>		
														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">IS THERE ANY VESSEL INVOLVED?</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control" >  
																</div>
															</div>
														</div>	
														<div class="row">
															<div class="form-group">
																<label class="col-sm-12">HOW MANY VESSEL INVOLVED?</label>
																<div class="col-sm-12">
																	<input type="text" class="form-control" >  
																</div>
															</div>
														</div>
														<div class="row">
															<div class="form-group"> 
																<label class="col-sm-12">VIOLATIONS (IF ANY)</label>
																<div class="col-sm-12">
																	<?php 
																		foreach($maritime_related_violation as $row){
																	?>  
																		<div class="checkbox checkbox-custom">
																			<input  type="checkbox" name="maritime_related_violation"  id="maritime_related_violation_<?php echo $report_type_id . "_" . $row->id  ?>"  value="<?php echo $row->id  ?>" >
																			<label for="maritime_related_violation_<?php echo $report_type_id . "_" . $row->id  ?>"><?php echo $row->maritime_related_violation ?></label>
																		</div> 
																	<?php
																		}
																	?>   
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
										
									</div> 
									<button class="btn btn-danger pull-right" type="button">Finish!</button>
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