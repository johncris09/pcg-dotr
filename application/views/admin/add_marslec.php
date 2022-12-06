
            
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
								</div>
							</div>
							
							<form method="POST" action="<?= site_url() ?>insert_marep" role="form" enctype="multipart/form-data">
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
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 86. UNAUTHORIZED FISHING</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 87. ENGAGING IN UNAUTHORIZED FISHERIES ACTIVITIES</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 88. FAILURE TO SECURE FISHING PERMIT PRIOR TO ENGAGING IN DISTANT WATER FISHING</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 89. UNREPORTED FISHING</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 90. UNREGULATED FISHING</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 91. POACHING IN PHILIPPINE WATERS</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 92. FISHING THROUGH EXPLOSIVES, NOXIOUS OR POISONOUS SUBSTANCE, OR ELECTRICITY</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 93. USE OF FINE MESH NET</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 94. FISHING IN OVEREXPLOITED FISHERY MANAGEMENT AREAS</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 95. USE OF ACTIVE GEAR IN MUNICIPAL WATERS, BAYS AND OTHER FISHERY MANAGEMENT AREAS</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 96. BAN ON CORAL EXPLOITATION AND EXPORTATION</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 97. BAN ON MURO-AMI, OTHER METHODS AND GEAR DESTRUCTIVE TO CORAL REEFS AND OTHER MARINE HABITAT</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 98. ILLEGAL USE OF SUPERLIGHTS OR FISHING LIGHT ATTRACTOR</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 99. CONVERSION OF MANGROVES</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 100. FISHING DURING CLOSED SEASON</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 101. FISHING IN MARINE PROTECTED AREAS, FISHERY RESERVES, REFUGE AND SANCTUARIES</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">Section 102. Fishing or Taking of Rare, Threatened or Endangered Species</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">Section 103. Capture of Sabalo and Other Breeders/</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 104. EXPORTATION OF BREEDERS, SPAWNERS, EGGS OR FRY</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 105. IMPORTATION OR EXPORTATION OF FISH OR FISHERY SPECIES</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 106. VIOLATION OF HARVEST CONTROL RULES</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 107. AQUATIC POLLUTION</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 108. FAILURE TO COMPLY WITH MINIMUM SAFETY STANDARDS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 109. FAILURE TO SUBMIT A YEARLY REPORT ON ALL FISHPONDS, FISH PENS AND FISH CAGES</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 110. GATHERING AND MARKETING OF SHELL FISHES OR OTHER AQUATIC SPECIES</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 111. OBSTRUCTION TO NAVIGATION OR FLOW OR EBB OF TIDE IN ANY STREAM, RIVER, LAKE OR BAY</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 112. NONCOMPLIANCE WITH GOOD AQUACULTURE PRACTICES</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 113. COMMERCIAL FISHING VESSEL OPERATORS EMPLOYING UNLICENSED FISHERFOLK, FISHWORKER OR CREW</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 114. OBSTRUCTION OF DEFINED MIGRATION PATHS</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 115. OBSTRUCTION TO FISHERY LAW ENFORCEMENT OFFICER</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 116. NONCOMPLIANCE WITH FISHERIES OBSERVER COVERAGE</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 117. NONCOMPLIANCE WITH PORT STATE MEASURES</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 118. FAILURE TO COMPLY WITH RULES AND REGULATIONS ON CONSERVATION AND MANAGEMENT MEASURES</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 119. NONCOMPLIANCE WITH VESSEL MONITORING MEASURES.</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 120. CONSTRUCTING, IMPORTING OR CONVERTING FISHING VESSELS OR GEARS WITHOUT PERMIT FROM THE DEPARTMENT</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 121. USE OF UNLICENSED GEAR</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 122. FALSIFYING, CONCEALING OR TAMPERING WITH VESSEL MARKINGS, IDENTITY OR REGISTRATION</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 123. CONCEALING, TAMPERING OR DISPOSING OF EVIDENCE RELATING TO AN INVESTIGATION OF A VIOLATION</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 124. NONCOMPLIANCE WITH THE REQUIREMENTS FOR THE INTRODUCTION OF FOREIGN OR EXOTIC AQUATIC SPECIES</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 125. FAILURE TO COMPLY WITH STANDARDS AND TRADE-RELATED MEASURES</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 126. POSSESSING, DEALING IN OR DISPOSING ILLEGALLY CAUGHT OR TAKEN FISH.</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 127. UNAUTHORIZED DISCLOSURE OF SENSITIVE TECHNICAL INFORMATION.</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 128. OTHER VIOLATIONS</label>
														<input type="text">
													</div>     
												</div>
											</div>
										</div> 
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 9165 (COMPREHENSIVE DANGEROUS DRUGS ACT OF 2022) </label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 4. IMPORTATION OF DANGEROUS DRUGS AND/OR CONTROLLED PRECURSORS AND ESSENTIAL CHEMICALS</label>
													</div>     
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 5. SALE, TRADING, ADMINISTRATION, DISPENSATION, DELIVERY, DISTRIBUTION AND TRANSPORTATION OF DANGEROUS DRUGS AND/OR CONTROLLED PRECURSORS AND ESSENTIAL CHEMICALS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 6. MAINTENANCE OF A DEN, DIVE OR RESORT</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 7. EMPLOYEES AND VISITORS OF A DEN, DIVE OR RESORT</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 8. MANUFACTURE OF DANGEROUS DRUGS AND/OR CONTROLLED PRECURSORS AND ESSENTIAL CHEMICALS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 9. ILLEGAL CHEMICAL DIVERSION OF CONTROLLED PRECURSORS AND ESSENTIAL CHEMICALS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 10. MANUFACTURE OR DELIVERY OF EQUIPMENT, INSTRUMENT, APPARATUS, AND OTHER PARAPHERNALIA FOR DANGEROUS DRUGS AND/OR CONTROLLED PRECURSORS AND ESSENTIAL CHEMICALS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 11. POSSESSION OF DANGEROUS DRUGS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 12. POSSESSION OF EQUIPMENT, INSTRUMENT, APPARATUS AND OTHER PARAPHERNALIA FOR DANGEROUS DRUGS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 13. POSSESSION OF DANGEROUS DRUGS DURING PARTIES, SOCIAL GATHERINGS OR MEETINGS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 14. POSSESSION OF EQUIPMENT, INSTRUMENT, APPARATUS AND OTHER PARAPHERNALIA FOR DANGEROUS DRUGS DURING PARTIES, SOCIAL GATHERINGS OR MEETINGS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 15. USE OF DANGEROUS DRUGS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 16. CULTIVATION OR CULTURE OF PLANTS CLASSIFIED AS DANGEROUS DRUGS OR ARE SOURCES THEREOF</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 17. MAINTENANCE AND KEEPING OF ORIGINAL RECORDS OF TRANSACTIONS ON DANGEROUS DRUGS AND/OR CONTROLLED PRECURSORS AND ESSENTIAL CHEMICALS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 18. UNNECESSARY PRESCRIPTION OF DANGEROUS DRUGS.</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 19. UNLAWFUL PRESCRIPTION OF DANGEROUS DRUGS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 20. CONFISCATION AND FORFEITURE OF THE PROCEEDS OR INSTRUMENTS OF THE UNLAWFUL ACT, INCLUDING THE PROPERTIES OR PROCEEDS DERIVED FROM THE ILLEGAL TRAFFICKING OF DANGEROUS DRUGS AND/OR PRECURSORS AND ESSENTIAL CHEMICALS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 21. CUSTODY AND DISPOSITION OF CONFISCATED, SEIZED, AND/OR SURRENDERED DANGEROUS DRUGS, PLANT SOURCES OF DANGEROUS DRUGS, CONTROLLED PRECURSORS AND ESSENTIAL CHEMICALS, INSTRUMENTS/PARAPHERNALIA AND/OR LABORATORY EQUIPMENT.</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 22. GRANT OF COMPENSATION, REWARD AND AWARD</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 23. PLEA-BARGAINING PROVISION</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 24. NON-APPLICABILITY OF THE PROBATION LAW FOR DRUG TRAFFICKERS AND PUSHERS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 25. QUALIFYING AGGRAVATING CIRCUMSTANCES IN THE COMMISSION OF A CRIME BY AN OFFENDER UNDER THE INFLUENCE OF DANGEROUS DRUGS</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 26. ATTEMPT OR CONSPIRACY</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 27. CRIMINAL LIABILITY OF A PUBLIC OFFICER OR EMPLOYEE FOR MISAPPROPRIATION, MISAPPLICATION OR FAILURE TO ACCOUNT FOR THE CONFISCATED, SEIZED AND/OR SURRENDERED DANGEROUS DRUGS, PLANT SOURCES OF DANGEROUS DRUGS, CONTROLLED PRECURSORS AND ESSENTIAL CHEMICALS, INSTRUMENTS/PARAPHERNALIA AND/OR LABORATORY EQUIPMENT INCLUDING THE PROCEEDS OR PROPERTIES OBTAINED FROM THE UNLAWFUL ACT COMMITTED</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 28. CRIMINAL LIABILITY OF GOVERNMENT OFFICIALS AND EMPLOYEES</label>
													</div>     
												</div>
											</div>
										</div> 
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 10591 (COMPREHENSIVE LAW ON FIREARMS AND AMMUNITION REGULATION ACT</label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 38. LIABILITY FOR PLANTING EVIDENCE</label>
													</div>    
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 29. USE OF LOOSE FIREARM IN THE COMMISSION OF A CRIME</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 30. LIABILITY OF JURIDICAL PERSON</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 31. ABSENCE OF PERMIT TO CARRY OUTSIDE OF RESIDENCE</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 32. UNLAWFUL MANUFACTURE, IMPORTATION, SALE OR DISPOSITION OF FIREARMS OR AMMUNITION OR PARTS THEREOF, MACHINERY, TOOL OR INSTRUMENT USED OR INTENDED TO BE USED IN THE MANUFACTURE OF FIREARMS, AMMUNITION OR PARTS THEREOF</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 33. ARMS SMUGGLING</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 34. TAMPERING, OBLITERATION OR ALTERATION OF FIREARMS IDENTIFICATION</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 35. USE OF AN IMITATION FIREARM</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 40. FAILURE TO NOTIFY LOST OR STOLEN FIREARM OR LIGHT WEAPON</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 41. ILLEGAL TRANSFER/REGISTRATION OF FIREARMS</label>
													</div>       
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 9208 (ANTI TRAFFICKING IN PERSON ACT OF 2003)</label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 4. ACTS OF TRAFFICKING IN PERSONS</label>
													</div>    
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 5. ACTS THAT PROMOTE TRAFFICKING IN PERSONS</label>
													</div>    
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 6. QUALIFIED TRAFFICKING IN PERSONS</label>
													</div>    
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 11. USE OF TRAFFICKED PERSONS</label>
													</div>        
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 9147 (WILDLIFE RESOURCES CONSERVATION AND PROTECTION ACT)</label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 27. (PARAGRAPH A) KILLING AND DESTROYING WILDLIFE SPECIES</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 27. (PARAGRAPH B) INFLICTING INJURY WHICH CRIPPLES AND/OR IMPAIRS THE REPRODUCTIVE SYSTEM OF WILDLIFE SPECIES</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 27. (PARAGRAPH C) EFFECTING ANY OF THE FOLLOWING ACTS IN CRITICAL HABITAT(S)</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 27. (PARAGRAPH D) INTRODUCTION, REINTRODUCTION OR RESTOCKING OF WILDLIFE RESOURCES</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 27. (PARAGRAPH E) TRADING OF WILDLIFE</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 27. (PARAGRAPH F) COLLECTING, HUNTING OR POSSESSING WILDLIFE, THEIR BY-PRODUCTS AND DERIVATIVES</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 27. (PARAGRAPH  G) GATHERING OR DESTROYING OF ACTIVE NESTS, NEST TREES, HOST PLANTS AND THE LIKE</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 27. (PARAGRAPH H) MALTREATING AND/OR INFLICTING OTHER INJURIES NOT COVERED BY THE PRECEDING PARAGRAPH; AND</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 27. (PARAGRAPH I) TRANSPORTING OF WILDLIFE.</label>
													</div>         
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 1937 (TARIFF AND CUSTOMS CODE ON ILLEGAL ACTS)</label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3601. UNLAWFUL IMPORTATION</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3602. VARIOUS FRAUDULENT PRACTICES AGAINST CUSTOMS REVENUE</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3603. FAILURE TO REPORT FRAUD</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3604. STATUTORY OFFENSE OF OFFICIALS AND EMPLOYEES</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3605. CONCEALMENT OF DESTRUCTION OF EVIDENCE OF FRAUD</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3606. BREAKING OF SEAL ON CAR OR CONVEYANCE BY LAND, SEA OR AIR</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3607. ALTERATION OF MARKS ON ANY PACKAGE OF WAREHOUSED ARTICLES</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3608. FRAUDULENT OPENING OR ENTERING OF WAREHOUSE</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3609. FRAUDULENT REMOVAL OF CONCEALMENT OF WAREHOUSED ARTICLES</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3610. VIOLATION OF TARIFF AND CUSTOMS LAWS AND REGULATIONS IN GENERAL</label>
													</div>         
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">PD  No. 532 (ANTI-PIRACY AND ANTI-HIGHWAY ROBBERY LAW OF 1974)</label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3 (PARAGRAPH A) PIRACY</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3 (PARAGRAPH B) HIGHWAY ROBBERY/BRIGANDAGE</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 4. AIDING PIRATES OR HIGHWAY ROBBERS/BRIGANDS OR ABETTING PIRACY OR HIGHWAY ROBBERY/BRIGANDAGE</label>
													</div>        
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 10066 (NATIONAL HERITAGE AT OF 2009)</label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 48. (PARAGRAPH A) DESTROYS, DEMOLISHES, MUTILATES OR DAMAGES ANY WORLD HERITAGE SITE, NATIONAL CULTURAL TREASURES, IMPORTANT CULTURAL PROPERTY AND ARCHAEOLOGICAL AND ANTHROPOLOGICAL SITES;</label>
													</div>    
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 48. (PARAGRAPH B) MODIFIES, ALTERS, OR DESTROYS THE ORIGINAL FEATURES OF OR UNDERTAKES CONSTRUCTION OR REAL ESTATE DEVELOPMENT IN ANY NATIONAL SHRINE, MONUMENT, LANDMARK AND OTHER HISTORIC EDIFICES AND STRUCTURES, DECLARED, CLASSIFIED, AND MARKED BY THE NATIONAL HISTORICAL INSTITUTE AS SUCH, WITHOUT THE PRIOR WRITTEN PERMISSION FROM THE COMMISSION. THIS INCLUDES THE DESIGNATED SECURITY OR BUFFER ZONE, EXTENDING FIVE (5) METERS FROM THE VISIBLE PERIMETER OF THE MONUMENT OR SITE;</label>
													</div>      
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 48. (PARAGRAPH C) EXPLORES, EXCAVATES OR UNDERTAKES DIGGINGS FOR THE PURPOSE OF OBTAINING MATERIALS OF CULTURAL HISTORICAL VALUE WITHOUT PRIOR WRITTEN AUTHORITY FROM THE NATIONAL MUSEUM. NO EXCAVATION OR DIGGINGS SHALL BE PERMITTED WITHOUT THE SUPERVISION OF A CERTIFIED ARCHAEOLOGIST;</label>
													</div>    
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 48. (PARAGRAPH D) APPROPRIATES EXCAVATION FINDS CONTRARY TO THE PROVISIONS OF THE NEW CIVIL CODE AND OTHER PERTINENT LAWS;</label>
													</div>    
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 48. (PARAGRAPH E) IMPORTS, SELLS, DISTRIBUTES, PROCURES, ACQUIRES, OR EXPORTS CULTURAL PROPERTY STOLEN, OR OTHERWISE LOST AGAINST THE WILL OF THE LAWFUL OWNER;</label>
													</div>    
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 48. (PARAGRAPH F) ILLICITLY EXPORTS CULTURAL PROPERTY LISTED IN THE PHILIPPINE REGISTRY OF CULTURAL PROPERTY OR THOSE THAT MAY BE CATEGORIZED AS SUCH UPON VISITATION OR INCORRECTLY DECLARES THE SAME DURING TRANSIT; AND</label>
													</div>    
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 48. (PARAGRAPH E) DEALS IN CULTURAL PROPERTY WITHOUT PROPER REGISTRATION AND LICENSE ISSUED BY THE CULTURAL AGENCY CONCERNED.</label>
													</div>  
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 6539 (ANTI CARNAPPING ACT 1972)</label>
												<div class="col-sm-12">  
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 12. DEFACING OR TAMPERING WITH SERIAL NUMBERS OF MOTOR VEHICLE ENGINES, ENGINE BLOCKS AND CHASSIS.</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 13. PENAL PROVISIONS</label>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">RA 10845 (ANTI AGRICULTURAL SMUGGLING ACT OF 2016)</label>
												<div class="col-sm-12">  
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3. (PARAGRAPH A) IMPORTING OR BRINGING INTO THE PHILIPPINES WITHOUT THE REQUIRED IMPORT PERMIT FROM THE REGULATORY AGENCIES;</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3. (PARAGRAPH B) USING IMPORT PERMITS OF PERSONS, NATURAL OR JURIDICAL, OTHER THAN THOSE SPECIFICALLY NAMED IN THE PERMIT;</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3. (PARAGRAPH C) USING FAKE, FICTITIOUS OR FRAUDULENT IMPORT PERMITS OR SHIPPING DOCUMENTS;</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3. (PARAGRAPH D) SELLING, LENDING, LEASING, ASSIGNING, CONSENTING OR ALLOWING THE USE OF IMPORT PERMITS OF CORPORATIONS, NONGOVERNMENT ORGANIZATIONS, ASSOCIATIONS, COOPERATIVES, OR SINGLE PROPRIETORSHIPS BY OTHER PERSONS;</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3. (PARAGRAPH E) MISCLASSIFICATION, UNDERVALUATION OR MISDECLARATION UPON THE FILING OF IMPORT ENTRY AND REVENUE DECLARATION WITH THE BOC IN ORDER TO EVADE THE PAYMENT OF RIGHTFUL TAXES AND DUTIES DUE TO THE GOVERNMENT;</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3. (PARAGRAPH F) ORGANIZING OR USING DUMMY CORPORATIONS, NONGOVERNMENT ORGANIZATIONS, ASSOCIATIONS, COOPERATIVES, OR SINGLE PROPRIETORSHIPS FOR THE PURPOSE OF ACQUIRING IMPORT PERMITS;</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3. (PARAGRAPH G)  TRANSPORTING OR STORING THE AGRICULTURAL PRODUCT SUBJECT TO ECONOMIC SABOTAGE REGARDLESS OF QUANTITY; OR</label>
													</div>
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECTION 3. (PARAGRAPH H) ACTING AS BROKER OF THE VIOLATING IMPORTER.</label>
													</div> 
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12">MARPOL VIOLATIONS</label>
												<div class="col-sm-12">  
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">DISPOSAL OF GARBAGE (HPCG MC 07-14 DATED 19 DEC 14)</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">DISCHARGE OF SEWAGE FROM SHIPS (HPCG MC 10-2014)</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">DISPOSAL OF USED OIL (HPCG MC 01-2005)</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">DISPOSAL OF NOXIOUS SUBSTANCES (HPCG MC 11-2014)</label>
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
												<p><strong style="font-size: 1.3em;color: #000;">MARITIME SECURITY OPERATIONS - SEABORNE PATROL</strong></p>
											</div>
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
												<label class="col-sm-12">CONDUCT OF ACTIVITY</label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">INITIATED</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">JOINT (LGU AND OTHER LAW ENFORCEMENT AGENCY)</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">PARTICIPATED</label>
													</div>  
												</div>
											</div>
										</div> 
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">NUMBER OF SEABORN PATROL CONDUCTED</label>
												<div class="col-sm-12">
													<input type="text" class="form-control"  > 
												</div>
											</div>
										</div> 
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">MARITIME AREA COVERED (NAUTICAL MILE/s)</label>
												<div class="col-sm-12">
													<input type="text" class="form-control"  > 
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">NUMBER OF HOURS CONDUCTED</label>
												<div class="col-sm-12">
													<input type="text" class="form-control"  > 
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
													<input type="date" class="form-control">  
												</div>
											</div>
										</div> 
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">TIME STARTED </label>
												<div class="col-sm-2">
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
												<div class="col-sm-2">
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
												<label class="col-sm-12">TIME ENDED</label>
												<div class="col-sm-2">
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
												<div class="col-sm-2">
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
												<label class="col-sm-12">NUMBER OF SHORE PATROLS CONDUCTED</label>
												<div class="col-sm-12">
													<input type="text" class="form-control">  
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">LENGTH OF COASTLINE COVERED (KMS)</label>
												<div class="col-sm-12">
													<input type="text" class="form-control">  
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
													<input type="date" class="form-control">  
												</div>
											</div>
										</div> 
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">TIME STARTED </label>
												<div class="col-sm-2">
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
												<div class="col-sm-2">
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
												<label class="col-sm-12">TIME ENDED</label>
												<div class="col-sm-2">
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
												<div class="col-sm-2">
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
													<input type="date" class="form-control">  
												</div>
											</div>
										</div> 
										<div class="row">
											<div class="form-group">
												<label class="col-sm-12">TIME</label>
												<div class="col-sm-2">
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
												<div class="col-sm-2">
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
												<label class="col-sm-12">FACILITIES</label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">PORTS</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">AIRPORTS</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">MALLS</label>
													</div>  
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">AFP/PNP/PCG CHECKPOINTS</label>
													</div>  
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">EVENTS PLACE</label>
													</div>   
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">Other</label>
														<input type="text"> 
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
												<p><strong style="font-size: 1.3em;color: #000;">TYPES OF K9 DEPLOYED</strong></p>
											</div>
										</div> 
										<div class="row">
											<div class="form-group"> 
												<label class="col-sm-12"> </label>
												<div class="col-sm-12">
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">EXPLOSIVE</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">NARCOTICS</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SEARCH AND RESCUE</label>
													</div>   
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
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">BOMB THREAT</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">SECURITY PANELING</label>
													</div> 
													<div class="checkbox checkbox-custom">
														<input id="agency1" type="checkbox">
														<label for="agency1">CODE ONE MSN</label>
													</div>   
												</div>
											</div>
										</div> 
										<button class="btn btn-primary nextBtn pull-right" type="button">Next</button> 
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