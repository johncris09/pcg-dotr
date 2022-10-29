
<!DOCTYPE html>
<html lang="en">

<head>
	<?php  
		$this->view('template/meta');;
		$this->view('template/css');  
	?>  
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-smartwizard/dist/css/smart_wizard_all.css"> 
	 
</head>

<body class="mini-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
		<?php  
			$this->view('template/navbar');;
			$this->view('template/sidebar');  
		?> 
       
        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="white-box">  <h3 class="box-title">ENTER DATA FOR MARINE ENVIRONMENTAL PROTECTION REPORT</h3>   
							<div id="smartwizard"  class="sw sw-justified sw-theme-dots">
								<ul class="nav nav-progress">
									<li class="nav-item">
									<a class="nav-link default active error" href="#step-1">
										<div class="num">1</div>
									</a>
									</li>
									<li class="nav-item">
										<a class="nav-link default" href="#step-2">
											<span class="num">2</span> 
										</a>
									</li>
									<!-- <li class="nav-item">
										<a class="nav-link default" href="#step-3">
											<span class="num">3</span>
											Shipping Details
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link default" href="#step-4">
											<span class="num">4</span>
											Confirm Order
										</a>
									</li> -->
								</ul>

								<div class="tab-content" style="height: 215.511px;">
								<div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1" style="display: block;">
									<div class="row">
										<div class="col-md-12">
											<h4>MARINE ENVIRONMENTAL PROTECTION CGDNM</h4>	
											<p>
												This is a prototype data gathering system to monitor and evaluate CGDNM performance in relation to its MAREP activities.  Please fill out all necessary information in the checkboxes below.
											</p><br>
											<h5>CGDNM STATIONS</h5>
										</div>
									</div><br><br>
									<form id="form-1" class="needs-validation was-validated" novalidate="">
										<div class="form-body">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>CGDNM STATIONS <strong class="text-danger">*</strong> </label>
														<select id="station" class="form-control" required="">
															<option value="">Select</option>
															<?php 
																foreach($station as $row){
															?>
																<option value="<?php echo $row['station_id']; ?>"><?php echo $row['station']; ?></option>
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
														<select class="form-control" required>
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
											
										</div> 
									</form>

									<form> 
								</div>
								<div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2" style="display: none;">
									<form id="form-2" class="row row-cols-1 ms-5 me-5 needs-validation" novalidate="">
										<div class="form-body">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>CGDNM STATIONS <strong class="text-danger">*</strong> </label>
														<select id="station" class="form-control" required="">
															<option value="">Select</option>
															<?php 
																foreach($station as $row){
															?>
																<option value="<?php echo $row['station_id']; ?>"><?php echo $row['station']; ?></option>
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
											
										</div> 
									</form>
								</div> 
								<div class="sw-toolbar-elm toolbar toolbar-bottom" role="toolbar">
									<button class="btn sw-btn-prev sw-btn" type="button">Previous</button>
									<button class="btn sw-btn-next sw-btn" type="button">Next</button>
									<button class="btn btn-success-sm  " id="btnFinish" disabled=""  onclick="onConfirm()" >Submit</button>
									<button class="btn btn-danger-sm " id="btnCancel" onclick="onCancel()">Cancel</button>
								</div> 
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>

							</div>
						</div> 
                    </div>
                    <div class="col-md-6">
                        <div class="white-box"> <h3 class="box-title">LIST OF DATA ENTERED</h3> </div> 
                    </div>
                </div> 
            </div>
            <!-- /.container-fluid -->
           
			<?php  $this->view('template/footer')  ?> 
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
	<?php  $this->view('template/js')  ?>   
	<script src="<?php echo base_url(); ?>assets/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script> 
	
    <script type="text/javascript">
		
		$('#btnFinish').on('click', function(e){
			e.preventDefault();
			console.log('finish')
		})

		$('select#station').on('change', function(e){
			e.preventDefault();
			var text = $(this).find(':selected').text() 
			var station_id = $(this).val() 

			var text = text.replace('CGS ', ""); 

			$('#station-text').text(text)

			if(station_id != ""){
			
				$.ajax({
					url: BASE_URL + 'substation/get_substation_by_station/' + station_id,
					type: 'POST',  
					dataType: 'JSON',
					success: function(data){  
						$('#toggle-hidden').removeClass('hidden')
						$("#sub-station").empty();
						$("#sub-station").append(new Option("Select", "" ))
						$.each(data , function(index, val) { 
							$("#sub-station").append(new Option(val.sub_station, val.sub_station_id ));
						});
					},
					error: function(xhr, textStatus, error){
						console.info(xhr.responseText);
					}
			
				});

			}else{
				$('#toggle-hidden').addClass('hidden')
				$("#sub-station").empty();

			}


		})

<<<<<<< Updated upstream
=======
		$('#report-selection').on('change', function(e){
			e.preventDefault(); 
			if($('#report-selection').val() == ""){
				$('#report-selection').closest('div').addClass('has-error')
			}else{ 
				$('#report-selection').closest('div').removeClass('has-error')
			}
		})

>>>>>>> Stashed changes
        function onCancel() { 
          // Reset wizard
          $('#smartwizard').smartWizard("reset");

          // Reset form
          document.getElementById("form-1").reset();
          document.getElementById("form-2").reset();
        }

        function onConfirm() {
          let form = document.getElementById('form-2');
		  console.info(form)
        //   if (form) {
        //     if (!form.checkValidity()) {
        //       form.classList.add('was-validated');
        //       $('#smartwizard').smartWizard("setState", [1], 'error');
        //       $("#smartwizard").smartWizard('fixHeight');
        //       return false;
        //     }
            
        //     $('#smartwizard').smartWizard("unsetState", [1], 'error'); 
        //   }
        }
 

        function showConfirm() { 
          const name = $('#first-name').val() + ' ' + $('#last-name').val();
          const products = $('#sel-products').val();
          const shipping = $('#address').val() + ' ' + $('#state').val() + ' ' + $('#zip').val();
          let html = `
                  <div class="row">
                    <div class="col">
                      <h4 class="mb-3-">Customer Details</h4>
                      <hr class="my-2">
                      <div class="row g-3 align-items-center">
                        <div class="col-auto">
                          <label class="col-form-label">Name</label>
                        </div>
                        <div class="col-auto">
                          <span class="form-text-">${name}</span>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <h4 class="mt-3-">Shipping</h4>
                      <hr class="my-2">
                      <div class="row g-3 align-items-center">
                        <div class="col-auto">
                          <span class="form-text-">${shipping}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  
        
                  <h4 class="mt-3">Products</h4>
                  <hr class="my-2">
                  <div class="row g-3 align-items-center">
                    <div class="col-auto">
                      <span class="form-text-">${products}</span>
                    </div>
                  </div>

                  `; 
          $("#order-details").html(html);
          $('#smartwizard').smartWizard("fixHeight");  
        }

        $(function() {
            // Leave step event is used for validating the forms
            $("#smartwizard").on("leaveStep", function(e, anchorObject, currentStepIdx, nextStepIdx, stepDirection) {
                // Validate only on forward movement  
                if (stepDirection == 'forward') {
                  let form = document.getElementById('form-' + (currentStepIdx + 1));
                  if (form) { 
                    if (!form.checkValidity()) {
                      form.classList.add('was-validated');
                      $('#smartwizard').smartWizard("setState", [currentStepIdx], 'error');
                      $("#smartwizard").smartWizard('fixHeight');
                      return false;
                    }
                    $('#smartwizard').smartWizard("unsetState", [currentStepIdx], 'error');
                  }
                }
            });

            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
                $("#prev-btn").removeClass('disabled').prop('disabled', false);
                $("#next-btn").removeClass('disabled').prop('disabled', false);
                if(stepPosition === 'first') {
                    $("#prev-btn").addClass('disabled').prop('disabled', true);
                } else if(stepPosition === 'last') {
                    $("#next-btn").addClass('disabled').prop('disabled', true);
                } else {
                    $("#prev-btn").removeClass('disabled').prop('disabled', false);
                    $("#next-btn").removeClass('disabled').prop('disabled', false);
                }

                // Get step info from Smart Wizard
                let stepInfo = $('#smartwizard').smartWizard("getStepInfo");
                $("#sw-current-step").text(stepInfo.currentStep + 1);
                $("#sw-total-step").text(stepInfo.totalSteps);

                if (stepPosition == 'last') {
                //   showConfirm();
                  $("#btnFinish").prop('disabled', false);
                } else {
                  $("#btnFinish").prop('disabled', true);
                }

                // Focus first name
                if (stepIndex == 1) {
                  setTimeout(() => {
                    $('#first-name').focus();
                  }, 0);
                }
            });

            // Smart Wizard
            $('#smartwizard').smartWizard({
                selected: 0,
                // autoAdjustHeight: false,
                theme: 'dots', // basic, arrows, square, round, dots
                transition: {
                  animation:'none'
                },
                toolbar: {
                  showNextButton: true, // show/hide a Next button
                  showPreviousButton: true, // show/hide a Previous button
                  position: 'bottom', // none/ top/ both bottom
                  extraHtml: `<button class="btn btn-success" id="btnFinish" disabled onclick="onConfirm()">Submit</button>
                              <button class="btn btn-danger" id="btnCancel" onclick="onCancel()">Cancel</button>`
                },
                anchor: {
                    enableNavigation: true, // Enable/Disable anchor navigation 
                    enableNavigationAlways: false, // Activates all anchors clickable always
                    enableDoneState: true, // Add done state on visited steps
                    markPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                    unDoneOnBackNavigation: true, // While navigate back, done state will be cleared
                    enableDoneStateNavigation: true // Enable/Disable the done state navigation
                },
            });

            $("#state_selector").on("change", function() {
                $('#smartwizard').smartWizard("setState", [$('#step_to_style').val()], $(this).val(), !$('#is_reset').prop("checked"));
                return true;
            });

            $("#style_selector").on("change", function() {
                $('#smartwizard').smartWizard("setStyle", [$('#step_to_style').val()], $(this).val(), !$('#is_reset').prop("checked"));
                return true;
            });

        });
    </script>
</body>

</html>
