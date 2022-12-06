
            
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
									<div class="stepwizard-step col-xs-3"> 
										<a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
										<p><small>Step 7</small></p>
									</div>    
									<div class="stepwizard-step col-xs-3"> 
										<a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
										<p><small>Step 8</small></p>
									</div>    
									<div class="stepwizard-step col-xs-3"> 
										<a href="#step-9" type="button" class="btn btn-default btn-circle" disabled="disabled">9</a>
										<p><small>Step 9</small></p>
									</div>    
									<div class="stepwizard-step col-xs-3"> 
										<a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled">10</a>
										<p><small>Step 10</small></p>
									</div>    
									<div class="stepwizard-step col-xs-3"> 
										<a href="#step-11" type="button" class="btn btn-default btn-circle" disabled="disabled">11</a>
										<p><small>Step 11</small></p>
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
											<p><strong style="font-size: 1.3em;color: #000;">ENTER DATA FOR MARITIME SEARCH AND RESCUE REPORT</strong></p> 
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
											<div class="col-md-12 ">
												<div class="form-group">
													<label>TYPES OF MARITIME INCIDENT <strong class="text-danger">*</strong> </label>
													<select id="maritime-incident" class="form-control" required>
														<option value="">Select</option>
														<option value="AGROUNDING">AGROUNDINGf</option>
														<option value="ALLISION">ALLISIONf</option>
														<option value="CAPSIZING">CAPSIZING</option>
														<option value="COLLISION">COLLISION</option>
														<option value="ENGINE TROUBLE">ENGINE TROUBLE</option>
														<option value="FIRE">FIRE</option>
														<option value="MAN OVERBOARD">MAN OVERBOARD</option>
														<option value="STEERING CASUALTY">STEERING CASUALTY</option> 
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
										<div  class="toggle-show"  data-value="AGROUNDING" style="display:none">  
											<div class="row">
												<div class="col-md-12"> 
													<p><strong style="font-size: 1.3em;color: #000;">AGROUNDING</strong></p>
												</div>
											</div>
											<div class="row">
												<div class="form-group"> 
													<label class="col-sm-12">CAUSE OF INCIDENT</label>
													<div class="col-sm-12">
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Machinery Failure</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Navigational Equipment failure</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Human Error</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Environmental Factor (Geographic Location)</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Weather and Sea Condition</label>
														</div>  
													</div>
												</div>
											</div>
										</div>
										<div  class="toggle-show"  data-value="ALLISION" style="display:none">  
											<div class="row">
												<div class="col-md-12"> 
													<p><strong style="font-size: 1.3em;color: #000;">ALLISION</strong></p>
												</div>
											</div>
											<div class="row">
												<div class="form-group"> 
													<label class="col-sm-12">CAUSE OF INCIDENT</label>
													<div class="col-sm-12">
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Machinery Failure</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Navigational Equipment failure</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Human Error</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Environmental Factor (Geographic Location)</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Weather and Sea Condition</label>
														</div>  
													</div>
												</div>
											</div> 
										</div>
										<div  class="toggle-show"  data-value="CAPSIZING" style="display:none">  
											<div class="row">
												<div class="col-md-12"> 
													<p><strong style="font-size: 1.3em;color: #000;">CAPSIZING</strong></p>
												</div>
											</div>
											<div class="row">
												<div class="form-group"> 
													<label class="col-sm-12">CAUSE OF INCIDENT</label>
													<div class="col-sm-12">
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Machinery Failure</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Navigational Equipment failure</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Human Error</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Environmental Factor (Geographic Location)</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Weather and Sea Condition</label>
														</div>  
													</div>
												</div>
											</div> 
										</div>
										<div  class="toggle-show"  data-value="COLLISION" style="display:none">  
											<div class="row">
												<div class="col-md-12"> 
													<p><strong style="font-size: 1.3em;color: #000;">COLLISION</strong></p>
												</div>
											</div>
											<div class="row">
												<div class="form-group"> 
													<label class="col-sm-12">CAUSE OF INCIDENT</label>
													<div class="col-sm-12">
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Machinery Failure</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Navigational Equipment failure</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Human Error</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Environmental Factor (Geographic Location)</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Weather and Sea Condition</label>
														</div>  
													</div>
												</div>
											</div> 
										</div>
										<div  class="toggle-show"  data-value="ENGINE TROUBLE" style="display:none">  
											<div class="row">
												<div class="col-md-12"> 
													<p><strong style="font-size: 1.3em;color: #000;">ENGINE TROUBLE</strong></p>
												</div>
											</div>
											<div class="row">
												<div class="form-group"> 
													<label class="col-sm-12">CAUSE OF INCIDENT</label>
													<div class="col-sm-12">
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Machinery Failure</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Navigational Equipment failure</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Human Error</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Environmental Factor (Geographic Location)</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Weather and Sea Condition</label>
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Electrical Failure</label>
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Failure in Ships Steering System</label>
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Broken Propeller and Rudder (Wooden Hulled Vessels)</label>
														</div>  
													</div>
												</div>
											</div> 
										</div>
										<div  class="toggle-show"  data-value="FIRE" style="display:none">  
											<div class="row">
												<div class="col-md-12"> 
													<p><strong style="font-size: 1.3em;color: #000;">FIRE</strong></p>
												</div>
											</div>
											<div class="row">
												<div class="form-group"> 
													<label class="col-sm-12">CAUSES OF FIRE</label>
													<div class="col-sm-12">
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Unattended Cooking Equipment</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Petroleum and Oil</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Electrical Failure</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Engine Room Explosion</label>
														</div>  
													</div>
												</div>
											</div> 
										</div>
										<div  class="toggle-show"  data-value="MAN OVERBOARD" style="display:none">  
											<div class="row">
												<div class="col-md-12"> 
													<p><strong style="font-size: 1.3em;color: #000;">MAN OVERBOARD</strong></p>
												</div>
											</div>
											<div class="row">
												<div class="form-group"> 
													<label class="col-sm-12">CAUSE OF INCIDENT</label>
													<div class="col-sm-12">
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Failure to wear PPE</label>
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Personal Accident</label>
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Missing for Unknown Reason</label>
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Murder</label>
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Suicide</label>
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Weather and Sea Condition</label>
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Working Over The Sides</label>
														</div>   
													</div>
												</div>
											</div> 
										</div> 
										<div  class="toggle-show"  data-value="STEERING CASUALTY" style="display:none">  
											<div class="row">
												<div class="col-md-12"> 
													<p><strong style="font-size: 1.3em;color: #000;">STEERING CASUALTY</strong></p>
												</div>
											</div>
											<div class="row">
												<div class="form-group"> 
													<label class="col-sm-12">CAUSE OF INCIDENT</label>
													<div class="col-sm-12">
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Machinery Failure</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Navigational Equipment failure</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Human Error</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Environmental Factor (Geographic Location)</label>
														</div> 
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">Weather and Sea Condition</label>
														</div>  
													</div>
												</div>
											</div>  
											<div class="row">
												<div class="form-group"> 
													<label class="col-sm-12">TYPES OF VESSEL INVOLVED </label>
													<div class="col-sm-12">
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">PASSENGER/ CARGO VESSEL</label>
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">GENERAL CARGO VESSEL</label>
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">RORO VESSEL</label>
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">FISHING VESSEL</label>
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">WOODEN HULLED VESSEL 15 GT ABOVE</label>
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">WOODEN HULLED VESSEL 3GT BELOW</label>
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">SAILING VESSEL</label>
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">PLEASURE CRAFTS</label>
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">TANKER VESSELS</label>
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">LNG CARRIERS</label>
														</div>   
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">GOVERNMENT VESSEL</label>
														</div>    
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">WARSHIP</label>
														</div>   
													</div>
												</div>
											</div>  
											<div class="row">
												<div class="col-md-12 ">
													<div class="form-group">
														<label>AGE OF VESSEL (1)AGE OF VESSEL (1)</label>
														<select id="maritime-incident" class="form-control" required="">
															<option value="">Select</option>
															<option value="5 - 10 YEARS">5 - 10 YEARSf</option> 
															<option value="10 - 15 YEARS">10 - 15 YEARSf</option> 
															<option value="15 - 20 YEARS">15 - 20 YEARSf</option> 
															<option value="MORE THAN 20 YEARS">MORE THAN 20 YEARSf</option>  
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12 ">
													<div class="form-group">
														<label>SIZE OF VESSEL (1)</label>
														<select id="maritime-incident" class="form-control" required="">
															<option value="">Select</option>
															<option value="LESS THAN 500GT">LESS THAN 500GT</option>
															<option value="500 GT TO 1000 GT">500 GT TO 1000 GT</option>
															<option value="1000 GT TO 2000 GT">1000 GT TO 2000 GT</option>
															<option value="MORE THAN 2000 GT">MORE THAN 2000 GT</option> 
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group">
													<label class="col-sm-12">PORT OF REGISTRY  (VESSEL 1)</label>
													<div class="col-sm-12">
														<input type="text" class="form-control"  >  
													</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group">
													<label class="col-sm-12">PORT OF DEPARTURE </label>
													<div class="col-sm-12">
														<input type="text" class="form-control"  >  
													</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group">
													<label class="col-sm-12">NEXT PORT OF CALL</label>
													<div class="col-sm-12">
														<input type="text" class="form-control"  >  
													</div>
												</div>
											</div>
											
											<div class="row">
												<div class="form-group">
													<label class="col-sm-12">AGE OF VESSEL (2)</label>
													<div class="col-sm-12"> 
														<select id="maritime-incident" class="form-control" required="">
															<option value="">Select</option>
															<option value="5 - 10 YEARS">5 - 10 YEARSf</option> 
															<option value="10 - 15 YEARS">10 - 15 YEARSf</option> 
															<option value="15 - 20 YEARS">15 - 20 YEARSf</option> 
															<option value="MORE THAN 20 YEARS">MORE THAN 20 YEARSf</option>  
														</select> 
														<span class="help-block"><small>Maritime Incidents involving two vessels fill out two information of vessels. </small></span> 
													</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group"> 
													<label class="col-sm-12">SIZE OF VESSEL (2)</label>
													<div class="col-sm-12">
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">LESS THAN 500GT</label>
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">500 GT TO 1000 GT</label>
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">1000 GT TO 2000 GT</label>
														</div>  
														<div class="checkbox checkbox-custom">
															<input id="agency1" type="checkbox">
															<label for="agency1">MORE THAN 2000 GT</label>
														</div>    
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													<label class="col-sm-12">PORT OF REGISTRY (2)</label> 
														<input type="text" class="form-control"> 
													</div> 
												</div>   
											</div> 
											<div class="row">
												<div class="form-group">
													<label class="col-sm-12">PORT OF DEPARTURE ( VESSEL 2)</label>
													<div class="col-sm-12">
														<input type="text" class="form-control"  >  
													</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group">
													<label class="col-sm-12">NEXT PORT OF CALL ( VESSEL 2)</label>
													<div class="col-sm-12">
														<input type="text" class="form-control"  >  
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
											<div class="col-md-12"> 
												<p><strong style="font-size: 1.3em;color: #000;">DATE TIME GROUP</strong></p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">DATE OF DEPARTURE FROM PORT OF ORIGIN</label>
													<input type="date" class="form-control">  
												</div> 
											</div> 
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label">TIME OF DEPARTURE FROM PORT OF ORIGIN</label> 
													<div class="col-md-4"> 
														<select name="" id="" class="form-control">
															<option value=""> </option> 
															<option value="12">12</option> 
															<?php 
																foreach(range(1,11) as $row){
															?>
																	<option value="<?php echo $row; ?>"><?php echo $row; ?></option> 
															<?php
																}
															?>
														</select>
													</div>
													<div class="col-md-4">
														<select name="" id="" class="form-control " style="float:left !important">
															<option value=""> </option>
															<option value="00">00</option>
															<option value="30">30</option> 
														</select>
													</div>
													<div class="col-md-4">
														<select name="" id="" class="form-control " style="float:left !important"> 
															<option value="AM">AM</option>
															<option value="PM">PM</option> 
														</select>
													</div> 
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
												<p><strong style="font-size: 1.3em;color: #000;">LOCATION OF INCIDENT</strong></p>
												<p>When indicating the location always indicate the grid coordinates of the incident area, point of reference base on its True Bearing and distance from the point of reference.</p>
											</div>
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
												<label class="col-sm-12">Google Map Locator</label>
												<div class="col-sm-12">
													<input type="file" class="form-control"  >  
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
												<p><strong style="font-size: 1.3em;color: #000;">CASUALTY REPORT</strong></p>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">NUMBER OF SURVIVORS</label>
												<div class="col-sm-12">
													<input type="text" class="form-control"  >  
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">NUMBER OF CASUALTIES </label>
												<div class="col-sm-12">
													<input type="text" class="form-control"  >  
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">NUMBER OF MISSING</label>
												<div class="col-sm-12">
													<input type="text" class="form-control"  >  
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
												<p><strong style="font-size: 1.3em;color: #000;">MATERIAL REPORT</strong></p>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">MATERIAL REPORT</label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">VESSEL SUNK</label>
													</div>  
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">FULLY DAMAGE BUT AFLOAT</label>
													</div>  
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">PARTIALLY DAMAGE BUT CAN BE PROPELLED ON HER OWN</label>
													</div>  
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">HALF SUBMERGE</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">VESSEL OPERATIONAL</label>
													</div>  
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
												<p><strong style="font-size: 1.3em;color: #000;">Extent of Damage of Vessel</strong></p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="col-sm-12">Provide Brief Description on the extent of damage of Vessel.</label> 
													<textarea name="" class="form-control"  id="" cols="30" rows="10"></textarea> 
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
												<p><strong style="font-size: 1.3em;color: #000;">ACTION TAKEN</strong></p>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">ASSET DEPLOYMENT </label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">ALUMINUM BOAT</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">DF CRAFT</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">24 METER</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">35 METER</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">44 METER</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">56 METER</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">83 METER</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">97 METER</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">PCGA FLOATING ASSET</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">LGU WATER ASSET</label> 
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="garbagetype1" type="checkbox"  >
														<label for="garbagetype1">METAL SHARK BOATS</label> 
													</div>    
												</div> 
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
								<div class="panel panel-primary setup-content" id="step-10">
									<div class="panel-heading">
										<h3 class="panel-title text-white">Step 10</h3>
									</div>
									<div class="panel-body"> 
										<div class="row">
											<div class="col-md-12"> 
												<p><strong style="font-size: 1.3em;color: #000;">RESPONSE TIME</strong></p>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 ">
												<div class="form-group">
													<label>TIME OF DEPLOYMENT OF ASSET</label>
													<select id="report-type" class="form-control" required=""> 
														<option value="15 MINUTES">15 MINUTES</option> 
														<option value="30 MINUTES">30 MINUTES</option> 
														<option value="1 HOUR">1 HOUR</option> 
														<option value="2 HOURS">2 HOURS</option> 
														<option value="MORE THAN 3 HOURS">MORE THAN 3 HOURS</option>  
													</select>
												</div>
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
											<div class="col-md-12"> 
												<p><strong style="font-size: 1.3em;color: #000;">FORMAL PCG REPORT</strong></p>
												<p>Attached PCG Spot Report in this Section</p>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">RADIO MESSAGE SPOT REPORT</label>
												<div class="col-sm-12">
													<input type="file" class="form-control"  >  
												</div>
											</div>
										</div> 
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">PHOTOGRAPHS</label>
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