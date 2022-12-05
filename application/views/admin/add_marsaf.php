
            
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
														<div class="radio radio-info">
															<input type="radio" name="radio" id="psc_center1"  >
															<label for="psc_center1">CAGAYAN DE ORO</label>
														</div> 
														<div class="radio radio-info">
															<input type="radio" name="radio" id="psc_center2"  >
															<label for="psc_center2">ILIGAN</label>
														</div> 
														<div class="radio radio-info">
															<input type="radio" name="radio" id="psc_center3"  >
															<label for="psc_center3">OZAMIS</label>
														</div>
													</div> 
												</div>
											</div>
										</div> 
										<div class="row">
											<div class="col-md-12 ">
												<div class="form-group">
													<label>REPORT Type <strong class="text-danger">*</strong> </label>
													<select id="report-type" class="form-control" required>
														<option value="">Select</option>
														<option value="PRE-DEPARTURE INSPECTION (PDI)">PRE-DEPARTURE INSPECTION (PDI)</option>
														<option value="VESSEL SAFETY ENFORCEMENT INSPECTION (VSEI)">VESSEL SAFETY ENFORCEMENT INSPECTION (VSEI)</option>
														<option value="EMERGENCY READINESS EVALUATION (ERE)">EMERGENCY READINESS EVALUATION (ERE)</option>
														<option value="PORT STATE CONTROL (PSC)">PORT STATE CONTROL (PSC)</option>
														<option value="COASTAL AND BEACH RESORT SAFETY AND SECURITY INSPECTION">COASTAL AND BEACH RESORT SAFETY AND SECURITY INSPECTION</option>
														<option value="RECREATIONAL SAFETY ENFORCEMENT INSPECTION (RSEI)">RECREATIONAL SAFETY ENFORCEMENT INSPECTION (RSEI)</option>
														<option value="AIDS TO NAVIGATION (ATON) INSPECTION">AIDS TO NAVIGATION (ATON) INSPECTION</option>
														<option value="MARITIME CASUALTY INVESTIGATION (MCI)">MARITIME CASUALTY INVESTIGATION (MCI)</option>
														<option value="SALVAGE OPERATION">SALVAGE OPERATION</option>
														<option value="MARINE PARADES, REGATTAS AND MARITIME RELATED ACTIVITY">MARINE PARADES, REGATTAS AND MARITIME RELATED ACTIVITY</option> 
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
										<div  class="toggle-show"  data-value="PRE-DEPARTURE INSPECTION (PDI)" style="display:none">
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
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">BULK CARRIER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">CARGO</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype3" type="checkbox"  >
																<label for="garbagetype3">CHEMICAL TANKER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">CONTAINER</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">FISHING VESSEL</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">PASSENGER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">TANKER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">TUGBOAT</label> 
															</div>  
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">Other</label>  
																<input type="text"> 
															</div> 
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
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">CLEARED TO DEPART</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">NOT CLEARED TO DEPART</label> 
															</div>   
														</div> 
													</div>
												</div>  
												<div class="row">
													<div class="form-group"> 
														<label class="col-sm-12">ACTION CODES (IF ANY)</label>
														<div class="col-sm-12">
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">VS83 RECTIFY AT NEXT PORT</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">VS85 RECTIFY WITHIN 14 DAYS</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype3" type="checkbox"  >
																<label for="garbagetype3">VS87 RECTIFY BEFORE DEPARTURE</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">VS88 RECTIFY WITHIN 3 MONTHS</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS90 DETAINABLE DEFICIENCIES</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS95 OTHERS (SPECIFY)</label> 
															</div>    
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
														<label class="col-sm-12">NOTED DEFICIENCY/IES (IF ANY)</label>
														<div class="col-sm-12">
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 161/ MC 2006-06 CERTIFIED OF PUBLIC CONVENIENCE (CPC)</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">MARINA MC 203 (SHIP SAFETY CERTIFICATES)</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype3" type="checkbox"  >
																<label for="garbagetype3">MARINA MC 177 (CERTIFICATE OF VESSEL SAFETY) AND (CERTIFICATE OF OWNERSHIP)</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">MARINA MC 110 (COSTWISE/BAY AND RIVER LICENSE)</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">MARINA MC 89,148,179 (MINIMUM SAFE MANNING CERTIFICATE)</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">MARINA MC 2007-03 (LOADLINE CERTIFICATE)</label> 
															</div>      
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">MARINA MC 2007-04 (TONNAGE MEASUREMENT CERTIFICATE)</label> 
															</div>         
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">MARINA MC 124 (CLASSIFICATION SOCIETY CERTIFICATE)</label> 
															</div>           
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">MARINA MC 143, 159 (DOCUMENT OF COMPLIANCE)</label> 
															</div>          
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">MARINA MC 148, 179 (SAFETY MANAGEMENT CERTIFICATE)</label> 
															</div>          
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">MARINA MC 105, 105-A (SPECIAL PERMIT)</label> 
															</div>          
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">MARINA MC 2007-05 (CERTIFICATE OF STABILITY)</label> 
															</div>             
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">MARINA MC 123 (ADEQUACY OF LIFEJACKETS/LIFECRAFTS AND OTHER LIFE SAVING APPLIANCES)</label> 
															</div>             
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">MARINA MC 151,170 (SHIPS OFFICES PASSSES LICENSES)</label> 
															</div>             
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">MARINA MC 180, 2009-13, 2009-18 (CARGO MANIFEST)</label> 
															</div>            
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">MARINA MC 191 (INFLUENCE OF ALCOHOL OR PROHIBITED DRUGS)</label> 
															</div>          
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">MARINA MC 114 (WEARING OF PROPER UNIFORM)</label> 
															</div>            
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">PMMRR 1997 CHAPTER X (SHIP STATION LICENSE)</label> 
															</div>             
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">PMMRR 1997 CHAPTER X AND XI (NAVIGATIONAL EQUIPMENT REQUIREMENT FOR SHIP STATION LICENSE)</label> 
															</div>               
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">PMMRR 1997 CHAPTER XI (RUNNING LIGHTS)</label> 
															</div>                 
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">PMMRR 1997 CHAPTER V, HPCG MC 04-98 (MASTER AND CHIEF ENGINEER ATTESTED ALL MAIN AND AUXILLIARY AGENCIES ARE OPERATING  )</label> 
															</div>                    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">HPCG MC 08-12 (MASTER DECLARANT SAFE DEPARTURE)</label> 
															</div>                      
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">HPCG MC 00-2011 (VESSEL SAFETY INSPECTION BOOKLET)</label> 
															</div>      
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">HPCG MC 04-98 (VESSEL STABILITY)</label> 
															</div>      
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">HPCG MC 01-09 MC 03-01 (GUIDELINES OF MOVEMENT IN HEAVY WEATHER)</label> 
															</div>  
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
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">CARGO</label>
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
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">CHEMICAL TANKER</label>
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
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">CONTAINER</label>
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
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">FISHING VESSEL</label>
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
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">PASSENGER</label>
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
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">ROLL-ON/ROLL-OFF</label>
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
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">TANKER</label>
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
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">TUGBOAT</label>
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
												<div class="row">
													<div class="form-group"> 
														<label class="col-sm-12">CHECK BOXES OF ALL NOTED DEFICIENCY/IES (IF ANY)</label>
														<div class="col-sm-12">
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 161/ MC 2006-06 CERTIFIED OF PUBLIC CONVENIENCE (CPC)</label> 
															</div>
															
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 203 (SHIP SAFETY CERTIFICATES)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 177 (CERTIFICATE OF VESSEL SAFETY) AND (CERTIFICATE OF OWNERSHIP)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 110 (COSTWISE/BAY AND RIVER LICENSE)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 89,148,179 (MINIMUM SAFE MANNING CERTIFICATE)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 2007-03 (LOADLINE CERTIFICATE)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 2007-04 (TONNAGE MEASUREMENT CERTIFICATE)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 124 (CLASSIFICATION SOCIETY CERTIFICATE)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 143, 159 (DOCUMENT OF COMPLIANCE)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 148, 179 (SAFETY MANAGEMENT CERTIFICATE)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 105, 105-A (SPECIAL PERMIT)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 2007-05 (CERTIFICATE OF STABILITY)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 123 (ADEQUACY OF LIFEJACKETS/LIFECRAFTS AND OTHER LIFE SAVING APPLIANCES)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 151,170 (SHIPS OFFICES PASSSES LICENSES)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 180, 2009-13, 2009-18 (CARGO MANIFEST)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 191 (INFLUENCE OF ALCOHOL OR PROHIBITED DRUGS)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MARINA MC 114 (WEARING OF PROPER UNIFORM)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">PMMRR 1997 CHAPTER X (SHIP STATION LICENSE)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">PMMRR 1997 CHAPTER X AND XI (NAVIGATIONAL EQUIPMENT REQUIREMENT FOR SHIP STATION LICENSE)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">PMMRR 1997 CHAPTER XI (RUNNING LIGHTS)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">PMMRR 1997 CHAPTER V, HPCG MC 04-98 (MASTER AND CHIEF ENGINEER ATTESTED ALL MAIN AND AUXILLIARY AGENCIES ARE OPERATING  )</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">HPCG MC 08-12 (MASTER DECLARANT SAFE DEPARTURE)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">HPCG MC 00-2011 (VESSEL SAFETY INSPECTION BOOKLET)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">HPCG MC 04-98 (VESSEL STABILITY)</label> 
															</div>
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">HPCG MC 01-09 MC 03-01 (GUIDELINES OF MOVEMENT IN HEAVY WEATHER)</label> 
															</div> 
														</div> 
													</div>
												</div>  
											</fieldset> 
											<fieldset > 
												<legend class="scheduler-border">TOTAL NUMBER OF VESSEL THAT HAVE BEEN CLEARED TO DEPART AND NOT CLEARED TO DEPART</legend> 
												
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">CLEARED TO DEPART</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">4</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">5</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">6-10</label>
																	</div>
																</label>
															</div>
														</div>
													</div>
												</div>  
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">NOT CLEARED TO DEPART</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">4</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">5</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">6-10</label>
																	</div>
																</label>
															</div>
														</div>
													</div>
												</div>  
											</fieldset> 
											

										</div>
										<div  class="toggle-show"  data-value="VESSEL SAFETY ENFORCEMENT INSPECTION (VSEI)" style="display:none"> 
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
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">BULK CARRIER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">CARGO</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype3" type="checkbox"  >
																<label for="garbagetype3">CHEMICAL TANKER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">CONTAINER</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">FISHING VESSEL</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">PASSENGER</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">PASSENGER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">TANKER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">TUGBOAT</label> 
															</div>   
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
																<div class="checkbox checkbox-custom">
																	<input id="garbagetype1" type="checkbox"  >
																	<label for="garbagetype1">OVERRIDING INSPECTION</label> 
																</div>   
																<div class="checkbox checkbox-custom">
																	<input id="garbagetype2" type="checkbox"  >
																	<label for="garbagetype2">REQUEST OF OWNER/COMPANY</label> 
																</div>   
																<div class="checkbox checkbox-custom">
																	<input id="garbagetype2" type="checkbox"  >
																	<label for="garbagetype2">REGULAR INSPECTIONS ONCE EVERY 3 MONTHS</label> 
																</div>  
															</div>
														</div> 
													</div> 
													<div class="col-md-6">
														<div class="form-group">
															<label class="col-sm-12">RESULT OF VSEI</label>  
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">UNDETAINED</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">DETAINED</label> 
															</div>  
														</div> 
													</div>  
												</div>
												<div class="row">
													<div class="form-group"> 
														<label class="col-sm-12">ACTION CODES (IF ANY)</label>
														<div class="col-sm-12">
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">VS83 RECTIFY AT NEXT PORT</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">VS85 RECTIFY WITHIN 14 DAYS</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype3" type="checkbox"  >
																<label for="garbagetype3">VS87 RECTIFY BEFORE DEPARTURE</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">VS88 RECTIFY WITHIN 3 MONTHS</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS90 DETAINABLE DEFICIENCIES</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS95 OTHERS (SPECIFY)</label> 
															</div>    
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
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">VS8100 ABSENCE OF SHIPS CERTIFICATE AND DOCUMENT</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">VS8200 ABSENCE OF CERTIFICATE AND WATCH KEEPING FOR SEAFARER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype3" type="checkbox"  >
																<label for="garbagetype3">VS8300 WHEELHOUSE/ DOCUMENTATION INSTRUMENTAL EQUIPMENT</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">VS8400 CREW AND ACCOMODATION</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS8500 FIRE FIGHTING APPLIANCES/FIRE SAFETY MEASURES</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS8600 BOAT DECK/OPEN DECK/ACCOMODATION LIFE-SAVING APPLIANCES</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS8700 NAVIGATIONAL SAFETY</label> 
															</div>      
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS8800 WORKING SPACES</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS81000 ALARM SIGNAL</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS81100 CARRIAGE OF CARGO AND DANGEROUS GOODS</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS81300 RADIO COMMUNICATION</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS81400 CONSTRUCTIONS SAFETY</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS81500 EGIE ROOM/FIREFIGHTIG APPLIANCES</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS81600 OIL CHEMICAL TANNKERS AND GA CARRIER</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS81700 MARPOL</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS81800 SOLAS RELATE OPERATIONAL DEFICIENCY</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS81900 EGINE ROOM SHYLIGTH AD ADJACENT STRUCTURE</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS82000 H.O REQUIREMENTS</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS82100 FOODS AND CATERS</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS82200 MOORING ARRANGEMENTS</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS82300 PROPOLSION AN AUXILIARY MACHINERY</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS82400 ISM RELATED DEFICENCIES</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS82500 BULK CARRIER- ADDITIONAL SAFETY MEASURES</label> 
															</div>      
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">VS82600 ADDITIONAL MEASURES TO ENHANCE MARITIME SECURITY</label> 
															</div>        
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
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">BULK CARRIER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>  
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">CARGO</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>   
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">CHEMICAL TANKER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>   
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">CONTAINER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>   
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">FISHING VESSEL</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>     
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">PASSENGER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>     
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">ROLL-ON/ROLL-OFF</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>      
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">TANKER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>      
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">TUGBOAT</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>  
											</fieldset> 
											<div class="row">
												<div class="form-group"> 
													<label class="col-sm-12">VSEI DEFICIENCY CODE (IF ANY)</label>
													<div class="col-sm-12">
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">VS8100 ABSENCE OF SHIPS CERTIFICATE AND DOCUMENT</label> 
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="garbagetype2" type="checkbox"  >
															<label for="garbagetype2">VS8200 ABSENCE OF CERTIFICATE AND WATCH KEEPING FOR SEAFARER</label> 
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="garbagetype3" type="checkbox"  >
															<label for="garbagetype3">VS8300 WHEELHOUSE/ DOCUMENTATION INSTRUMENTAL EQUIPMENT</label> 
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="garbagetype4" type="checkbox"  >
															<label for="garbagetype4">VS8400 CREW AND ACCOMODATION</label> 
														</div>    
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS8500 FIRE FIGHTING APPLIANCES/FIRE SAFETY MEASURES</label> 
														</div>    
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS8600 BOAT DECK/OPEN DECK/ACCOMODATION LIFE-SAVING APPLIANCES</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS8700 NAVIGATIONAL SAFETY</label> 
														</div>      
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS8800 WORKING SPACES</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS81000 ALARM SIGNAL</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS81100 CARRIAGE OF CARGO AND DANGEROUS GOODS</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS81300 RADIO COMMUNICATION</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS81400 CONSTRUCTIONS SAFETY</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS81500 EGIE ROOM/FIREFIGHTIG APPLIANCES</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS81600 OIL CHEMICAL TANNKERS AND GA CARRIER</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS81700 MARPOL</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS81800 SOLAS RELATE OPERATIONAL DEFICIENCY</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS81900 EGINE ROOM SHYLIGTH AD ADJACENT STRUCTURE</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS82000 H.O REQUIREMENTS</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS82100 FOODS AND CATERS</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS82200 MOORING ARRANGEMENTS</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS82300 PROPOLSION AN AUXILIARY MACHINERY</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS82400 ISM RELATED DEFICENCIES</label> 
														</div>     
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS82500 BULK CARRIER- ADDITIONAL SAFETY MEASURES</label> 
														</div>      
														<div class="checkbox checkbox-custom">
															<input id="garbagetype5" type="checkbox"  >
															<label for="garbagetype5">VS82600 ADDITIONAL MEASURES TO ENHANCE MARITIME SECURITY</label> 
														</div>        
													</div> 
												</div>
											</div> 
											<fieldset > 
												<legend class="scheduler-border">TOTAL NUMBER OF VESSEL DETAINED AND DETAINED</legend> 
												
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">DETAINED</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label>  
															</div>
														</div>
													</div>
												</div>  
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">NOT DETAINED</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>  
											</fieldset>   
										</div>
										<div  class="toggle-show"  data-value="EMERGENCY READINESS EVALUATION (ERE)" style="display:none">
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
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">BULK CARRIER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">CARGO</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype3" type="checkbox"  >
																<label for="garbagetype3">CHEMICAL TANKER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">CONTAINER</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">FISHING VESSEL</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">PASSENGER</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">PASSENGER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">TANKER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">TUGBOAT</label> 
															</div>   
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
																<div class="checkbox checkbox-custom">
																	<input id="garbagetype1" type="checkbox"  >
																	<label for="garbagetype1">OVERRIDING INSPECTION</label> 
																</div>   
																<div class="checkbox checkbox-custom">
																	<input id="garbagetype2" type="checkbox"  >
																	<label for="garbagetype2">REQUEST OF OWNER/COMPANY</label> 
																</div>   
																<div class="checkbox checkbox-custom">
																	<input id="garbagetype2" type="checkbox"  >
																	<label for="garbagetype2">REGULAR INSPECTIONS ONCE EVERY 3 MONTHS</label> 
																</div>  
															</div>
														</div> 
													</div> 
													<div class="col-md-6">
														<div class="form-group">
															<label class="col-sm-12">DRILLS CONDUCTED</label>  
															<div class="col-sm-12">
																<div class="checkbox checkbox-custom">
																	<input id="garbagetype1" type="checkbox"  >
																	<label for="garbagetype1">ABANDONSHIP</label> 
																</div>   
																<div class="checkbox checkbox-custom">
																	<input id="garbagetype2" type="checkbox"  >
																	<label for="garbagetype2">FIRE IN PORT AND/OR AT SEA</label> 
																</div>   
																<div class="checkbox checkbox-custom">
																	<input id="garbagetype2" type="checkbox"  >
																	<label for="garbagetype2">COLLISION AT PORT AND/OR AT SEA</label> 
																</div>     
																<div class="checkbox checkbox-custom">
																	<input id="garbagetype2" type="checkbox"  >
																	<label for="garbagetype2">EMERGENCY STEERING CASUALTY</label> 
																</div>     
																<div class="checkbox checkbox-custom">
																	<input id="garbagetype2" type="checkbox"  >
																	<label for="garbagetype2">MAN- OVERBOARD</label> 
																</div> 
															</div>
														</div> 
													</div> 
													<div class="col-md-6">
														<div class="form-group">
															<label class="col-sm-12">RESULT OF VSEI</label>  
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">UNDETAINED</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">DETAINED</label> 
															</div>  
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
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">BULK CARRIER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>  
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">CARGO</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>   
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">CHEMICAL TANKER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>   
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">CONTAINER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>   
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">FISHING VESSEL</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>     
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">PASSENGER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>     
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">ROLL-ON/ROLL-OFF</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>      
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">TANKER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>      
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">TUGBOAT</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>  
											</fieldset> 
											<fieldset > 
												<legend class="scheduler-border">TOTAL NUMBER OF VESSEL THAT HAVE PASSED AND FAILED</legend>  
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">PASSED</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label>  
															</div>
														</div>
													</div>
												</div>  
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">FAILED</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>  
											</fieldset> 
										</div>
										<div  class="toggle-show"  data-value="PORT STATE CONTROL (PSC)" style="display:none">
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
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">BULK CARRIER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">CARGO</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype3" type="checkbox"  >
																<label for="garbagetype3">CHEMICAL TANKER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">CONTAINER</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">FISHING VESSEL</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">PASSENGER</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">PASSENGER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">TANKER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">TUGBOAT</label> 
															</div>   
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
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">OVERRIDING INSPECTION</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">INITIAL INSPECTION</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">FOLLOW-UP INSPECTION</label> 
															</div>  
														</div> 
													</div>  
												</div> 
												<div class="row">
													<div class="form-group"> 
														<label class="col-sm-12">ACTION CODES (IF VESSEL HAS NOTED DEFICIENCY)</label>
														<div class="col-sm-12">
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">15-RECTIFY AT NEXT PORT</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">16-RECTIFY WITHIN 14 DAYS</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype3" type="checkbox"  >
																<label for="garbagetype3">17-RECTIFY BEFORE DEPARTURE</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">18-RECTIFY WITHIN 3 MONTHS</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">30-DETAINABLE DEFICIENCIES</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">46-RECTIFY DETAINABLE DEF AT AGREED REPAIR PORT</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">48-AS IN THE AGREED  FLAG STATION CONDITION</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">49-AS IN THE AGREED RECTIFICATION ACTION PLAN</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">99-OTHER (SPECIFY)</label> 
															</div>  
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
														<label class="col-sm-12">RELATED INTERNATIONAL CONVENTIONS NOTED DEFICIENCY/IES</label>
														<div class="col-sm-12">
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">SOLAS</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">MARPOL</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype3" type="checkbox"  >
																<label for="garbagetype3">STCW</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">LOADLINE</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">TONNAGE</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">MLC</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">BALLAST WATER MANAGEMENT CONVENTION</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">ANTI FOULING SYSTEM</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">COLREG</label> 
															</div>       
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">ISM CODE</label> 
															</div>       
															<div class="checkbox checkbox-custom">
																<input id="garbagetype5" type="checkbox"  >
																<label for="garbagetype5">ISPS CODE</label> 
															</div>    
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
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">BULK CARRIER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">CARGO</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>   
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">CHEMICAL TANKER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>   
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">CONTAINER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>   
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">FISHING VESSEL</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>     
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">PASSENGER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>     
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">ROLL-ON/ROLL-OFF</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>      
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">TANKER</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>      
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">TUGBOAT</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div> 
											</fieldset> 
											<fieldset > 
												<legend class="scheduler-border">TOTAL NUMBER OF VESSEL NOT-DETAINED AND DETAINED</legend>   
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">NOT DETAINED</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label> 
															</div>
														</div>
													</div>
												</div>  
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">DETAINED</label>
															<div class="checkbox-list">
																<label class="checkbox-inline p-0">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart1" value="option1">
																		<label for="depart1">1</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">2</label>
																	</div>
																</label>
																<label class="checkbox-inline">
																	<div class="checkbox checkbox-info">
																		<input type="checkbox" name="depart" id="depart2" value="option2">
																		<label for="depart2">3</label>
																	</div>
																</label>  
															</div>
														</div>
													</div>
												</div>  
											</fieldset> 
										</div> 
										<div  class="toggle-show"  data-value="COASTAL AND BEACH RESORT SAFETY AND SECURITY INSPECTION" style="display:none">
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
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">20 METER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">40 METER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype3" type="checkbox"  >
																<label for="garbagetype3">60 METER</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">80 METER</label> 
															</div>   
														</div> 
													</div>
												</div>  

												
												<div class="row">
													<div class="form-group"> 
														<label class="col-sm-12">VIOLATIONS (IF ANY)</label>
														<div class="col-sm-12">
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">INSUFFICIENT NUMBER OF LIFEGUARD CERTIFIED BY THE PCG</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">NO PHYSICIAN</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">NON- ACCESSIBILITY TO HOSPITAL OR MEDICAL CENTERS</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">FIRST-AIDERS NOT CERTIFIED BY PRC</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">NO FIRST-AIDE MEDICINE</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">NO LIFE SAVING EQUIPMENTS</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">INSUFFICIENTS NUMBER OF BUOYS</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">NO VISIBLE WARNING SIGN OF DANGER AREAS</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">NO RADIO/COMMUNICATION ROOM</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">NO VHF RADIO WITH BASE</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">NO HOUSE RULES AND REGULATORY BEATED</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">NO BEACH WARNING SIGNAGE AND FLAG SIGNAL</label> 
															</div>      
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
										</div>  
										<div  class="toggle-show"  data-value="RECREATIONAL SAFETY ENFORCEMENT INSPECTION (RSEI)" style="display:none">
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
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">PERSONAL WATERCRAFT(PWC)</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">BANANA BOAT</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype3" type="checkbox"  >
																<label for="garbagetype3">DRAGON BOAT</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">KAYAK BOAT</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">MOTOR BOAT</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">HELMS-POWERED</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">PARASAIL</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype4" type="checkbox"  >
																<label for="garbagetype4">SAILBOAT</label> 
															</div>      
														</div> 
													</div>
												</div>  

												
												<div class="row">
													<div class="form-group"> 
														<label class="col-sm-12">VIOLATIONS (IF ANY)</label>
														<div class="col-sm-12">
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">BOATING OUTSIDE THE DESIGNATED SAILING AREAS</label> 
															</div>  
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">BOATING WITHOUT WEARING OF PERSONAL FLOATATION DEVICES OR LIFEJACKETS</label> 
															</div>  
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">OPERATING WITH LACK OF SAFETY EQUIPMENT</label> 
															</div> 
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">BOATING UNDER THE INFLUENCE OF LIQUOR</label> 
															</div>  
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
										</div>  
										<div  class="toggle-show"  data-value="AIDS TO NAVIGATION (ATON) INSPECTION" style="display:none">
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
																<div class="checkbox checkbox-custom">
																	<input id="garbagetype1" type="checkbox"  >
																	<label for="garbagetype1">PRIMARY</label> 
																</div>   
																<div class="checkbox checkbox-custom">
																	<input id="garbagetype2" type="checkbox"  >
																	<label for="garbagetype2">SECONDARY</label> 
																</div>   
																<div class="checkbox checkbox-custom">
																	<input id="garbagetype2" type="checkbox"  >
																	<label for="garbagetype2">TERTIARY</label> 
																</div>  
															</div>
														</div> 
													</div> 
													<div class="col-md-6">
														<div class="form-group">
															<label class="col-sm-12">PURPOSE OF INSPECTION</label>  
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">MAINTENANCE</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">REPAIR</label> 
															</div>  
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
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">OPERATING</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype2" type="checkbox"  >
																<label for="garbagetype2">NOT OPERATING</label> 
															</div>   
														</div> 
													</div>
												</div>
												<div class="row">
													<div class="form-group"> 
														<label class="col-sm-12">IF NOT OPERATING, WHAT IS THE CAUSED?</label>
														<div class="col-sm-12">
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">DEFECTIVE LATERN</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">DEFECTIVE BATTERY</label> 
															</div>  
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">SOLAR PANEL DAMAGE</label> 
															</div>  
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">DEFECTIVE CHARGING CONTROLLER</label> 
															</div>  
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">DEFECTIVE LAMP CHANGER</label> 
															</div>  
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">VANDALIZED</label> 
															</div>  
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox"  >
																<label for="garbagetype1">STOLEN PARTS</label> 
															</div>    
														</div> 
													</div>
												</div>  
											</fieldset>  
											<fieldset > 
												<legend class="scheduler-border">TOTAL NUMBER OF LH NOT OPERATING AND OPERATING</legend> 
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">NOT OPERATING</label>
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
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">OPERATING</label>
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
															</div>
														</div>
													</div>
												</div>   
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
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">LATERAL PORT HAND MARK</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">LATERAL STARBOARD HAND MARK</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">NORTH CARDINAL MARK</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">SOUTH CARDINAL MARK</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">WEST CARDINAL MARK</label> 
															</div>    
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">EAST CARDINAL MARK</label> 
															</div>       
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
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">MAINTENANCE</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">REPAIR</label> 
															</div>        
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
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">OPERATING</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">NOT OPERATING</label> 
															</div>        
														</div> 
													</div>
												</div>  
												
												<div class="row">
													<div class="form-group"> 
														<label class="col-sm-12">IF NOT OPERATING, WHAT IS THE CAUSED?</label>
														<div class="col-sm-12">
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">DRIFTED</label> 
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">DETACHED SINKER</label> 
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">DEFECTIVE 3 AD 1 LANTERN</label> 
															</div>        
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">DAMAGE BUOY ASSEMBLY</label> 
															</div>          
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">DEFECTIVE BATTERY</label> 
															</div>           
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">VANDALIZED</label> 
															</div>             
															<div class="checkbox checkbox-custom">
																<input id="garbagetype1" type="checkbox">
																<label for="garbagetype1">STOLEN PARTS</label> 
															</div>   
														</div> 
													</div>
												</div> 
												
											</fieldset> 
											<fieldset > 
												<legend class="scheduler-border">TOTAL NUMBER OF BOUY NOT-OPERATING AND OPERATING</legend>  
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">NOT-OPERATING</label>
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
															</div>
														</div>
													</div>
												</div> 

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">OPERATING</label>
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
															</div>
														</div>
													</div>
												</div> 
											</fieldset>  
										</div>  
										<div  class="toggle-show"  data-value="MARITIME CASUALTY INVESTIGATION (MCI)" style="display:none">
											<div class="row">
												<div class="col-md-12"> 
													<p><strong style="font-size: 1.3em;color: #000;">MARITIME CASUALTY INVESTIGATION (MCI)</strong></p>
													<p>Fill this section if you are conducting MCI</p>
												</div>
											</div> 

											<fieldset > 
												<legend class="scheduler-border">TOTAL NUMBER OF BOUY NOT-OPERATING AND OPERATING</legend>  
												
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
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">AGROUNDING</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">ALLISION</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">CAPSIZING</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">COLLISION</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">EXPLOSION</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">MECHANICAL FAILURE</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">FIRE</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">HALF-SUBMERGED</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">SINKING</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">OCCUPATIONAL ACCIDENT</label>
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">HULL FAILURE</label>
															</div>   
														</div>
													</div>
												</div> 
												<div class="row">
													<div class="form-group"> 
														<label class="col-sm-12">CAUSE OF INCIDENT</label>
														<div class="col-sm-12">
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">HUMAN FACTOR</label>
															</div>  
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">OPERATIONAL FACTOR</label>
															</div>  
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">MANAGEMENT/ORGANIZATIONAL FACTOR</label>
															</div>      
														</div>
													</div>
												</div> 
												<div class="row">
													<div class="form-group"> 
														<label class="col-sm-12">CONSEQUENCES OF INCIDENT</label>
														<div class="col-sm-12">
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">INJURY</label>
															</div>
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">DEATH</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">MISSING PERSON</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">POLLUTION</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">DAMAGE TO MARINE ENVIRONMENT</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">LOSS OF SHIPS</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">DAMAGE OF CARGOES</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">MATERIAL DAMAGE</label>
															</div>            
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="form-group"> 
														<label class="col-sm-12">SEVERITY OF MARITIME CASUALTY/INCIDENT</label>
														<div class="col-sm-12">
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">VERY SERIOUS MC - INVOLVING TOTAL LOSS OF VESSEL, DEATH OR SEVERE DAMAGE TO THE ENVIRONMENT</label>
															</div>     
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">SERIOUS MC - A) FIRE, EXPLOSION, GROUNDING, CONTACT, HEAVY WEATHER, HULL CRACKING OR SUSPECTED HULL DEFECT. B) STRUCTURAL DAMAGE RENDERING THE VESSEL UNSEAWORTHY, SUCH AS PENETRATION OF THE HULL UNDERWATER, IMMOBILIZATION OF MAIN ENGINES, EXTENSIVE ACCOMMODATION DAMAGE. C) POLLUTION. AND D) BREAKDOWN NECESSITATING TOWAGE OR SHORE ASSISTANCE.</label>
															</div>   
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">MI - EVENTS OTHER THAN MARINE CASUALTY, WHICH HAS OCCURED DIRECTLY IN CONNECTION WITH THE OPERATION OF A SHIP THAT ENDANGERED, OR IF NOT CORRECTED WOULD ENDANGER THE SAFETY OF SHIP, ITS OCCUPANTS OR ANY OTHER PERSON OR ENVIRONMENT</label>
															</div>      
														</div>
													</div>
												</div> 
												<div class="row">
													<div class="form-group"> 
														<label class="col-sm-12">IF VERY SERIOUS MC, WHAT IS THE CATEGORY?</label>
														<div class="col-sm-12">
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">CATEGORY 1 - INVOLVING CONVENTIONAL VESSEL OF 300 GT ABOVE WITH MULTIPLE DEATHS</label>
															</div>  
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">CATEGORY 2 - INVOLVING NON-CONVENTIONAL VESSEL OF LESS THAN 300 GT WITH 1 OR MORE DEATHS</label>
															</div>  
															<div class="checkbox checkbox-custom">
																<input id="agency1" type="checkbox"  >
																<label for="agency1">CATEGORY 3 - INVOLVING CONVENTIONAL VESSEL OF 300 GT WITH 1 DEATH</label>
															</div>        
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
															<dov class="col-md-4"> 
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
															</dov>
															<dov class="col-md-4">
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
															</dov>
															
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
											
										</div>
										<div  class="toggle-show"  data-value="SALVAGE OPERATION" style="display:none"> 
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
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">APPLICATION FOR SALVOR CERTIFICATE OF REGISTRATION</label> 
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">SALVOR CERTIFICATE OF REGISTRATION</label> 
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">RENEWAL OF SALVOR CERTIFICATE OF REGISTRATION</label> 
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">INSPECTION PERMIT AND SALVAGE PERMIT</label> 
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">SALVAGE CERTIFICATE OF INSPECTION</label> 
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">SALVAGE PERMIT FOR CARGO</label> 
														</div>    
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
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">HAZARDS TO MARITIME NAVIGATION, ESPECIALY THOSE WHICH OBSTRUCT THE SEALANES</label> 
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">HAMPER THE DEVELOPMENT OF PORTS AND HARBOR</label> 
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">EMERGENCY CONDITIONS FOR THE SAFETY AND PROPERTY AT SEA</label> 
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">FOR THE VALUE OF CARGO</label> 
														</div>   
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
										</div>
										<div  class="toggle-show"  data-value="MARINE PARADES, REGATTAS AND MARITIME RELATED ACTIVITY" style="display:none"> 
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
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">FLUVIAL PARADE</label> 
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">MARINE PARADE</label> 
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">EMERTRIATHLON</label> 
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">REGATTA</label> 
														</div>    
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox"  >
															<label for="garbagetype1">DRAGON BOAT</label> 
														</div>  
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
														<dov class="col-md-4"> 
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
														</dov>
														<dov class="col-md-4">
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
														</dov>
														
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
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox">
															<label for="garbagetype1">FAILURE TO SECURE PERMIT</label> 
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox">
															<label for="garbagetype1">OWNER/OPERATOR/BOAT CAPTAIN OF WATERCRAFT JOINING MARINE EVENT WITHOUT PERMISSION OF THE PCG</label> 
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox">
															<label for="garbagetype1">PASSENGER AND CREWS FAILED TO WEAR LIFE JACKETS IN OPEN DECK BOATS</label> 
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="garbagetype1" type="checkbox">
															<label for="garbagetype1">PASSENGER/CREWS UNDER THE INFLUENCE OF LIQUOR AND ILLEGAL DRUGS</label> 
														</div>   
													</div> 
												</div>
											</div>
										</div>
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