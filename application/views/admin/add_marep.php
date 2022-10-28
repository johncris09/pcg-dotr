
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
										Customer Details
									</a>
									</li>
									<li class="nav-item">
									<a class="nav-link default" href="#step-2">
										<span class="num">2</span>
										Products Details
									</a>
									</li>
									<li class="nav-item">
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
									</li>
								</ul>

								<div class="tab-content" style="height: 215.511px;">
								<div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1" style="display: block;">
									<form id="form-1" class="    needs-validation was-validated" novalidate="">
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
												<div class="col-md-6">
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
												</div>s
											</div>  
											
										</div> 
									</form>

									<form>
											<!-- <div class="form-group has-success">
												<label class="control-label" for="inputSuccess1">Input with success</label>
												<input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2">
												<span id="helpBlock2" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
											</div>
											<div class="form-group has-warning">
												<label class="control-label" for="inputWarning1">Input with warning</label>
												<input type="text" class="form-control" id="inputWarning1">
											</div>
											<div class="form-group has-error">
												<label class="control-label" for="inputError1">Input with error</label>
												<input type="text" class="form-control" id="inputError1">
											</div>
											<div class="has-success">
												<div class="checkbox">
												<label>
													<input type="checkbox" id="checkboxSuccess" value="option1">
													Checkbox with success
												</label>
												</div>
											</div>
											<div class="has-warning">
												<div class="checkbox">
												<label>
													<input type="checkbox" id="checkboxWarning" value="option1">
													Checkbox with warning
												</label>
												</div>
											</div>
											<div class="has-error">
												<div class="checkbox">
												<label>
													<input type="checkbox" id="checkboxError" value="option1">
													Checkbox with error
												</label>
												</div>
											</div>
											</form> -->


									<!-- <form id="form-1" class="row row-cols-1 ms-5 me-5 needs-validation was-validated" novalidate="">
										<div class="col">
											<label for="first-name" class="form-label">First name</label>
											<input type="text" class="form-control" id="first-name" value="" required="">
											<div class="valid-feedback">
												Looks good!
											</div>
											<div class="invalid-feedback">
												Please provide first name.
											</div>
										</div>
										<div class="col">
											<label for="validationCustom02" class="form-label">Last name</label>
											<input type="text" class="form-control" id="last-name" value="" required="">
											<div class="valid-feedback">
												Looks good!
											</div>
											<div class="invalid-feedback">
												Please provide last name.
											</div>
										</div>
									</form> -->
								</div>
								<div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2" style="display: none;">
									<form id="form-2" class="row row-cols-1 ms-5 me-5 needs-validation" novalidate="">
									<div class="col-md-6">
										<label for="validationCustom04" class="form-label">Product</label>
										<select class="form-select" id="sel-products" multiple="" required="">
										<option value="Apple iPhone 13">Apple iPhone 13</option>
										<option value="Apple iPhone 12">Apple iPhone 12</option>
										<option value="Samsung Galaxy S10">Samsung Galaxy S10</option>
										<option value="Motorola G5">Motorola G5</option>
										</select>
										<div class="valid-feedback">
										Looks good!
										</div>
										<div class="invalid-feedback">
										Please select product.
										</div>
									</div>
									</form>
								</div>
									<div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3" style="display: none;">
									<form id="form-3" class="row row-cols-1 ms-5 me-5 needs-validation" novalidate="">
										<div class="col">
										<label for="address" class="form-label">Address</label>
										<input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
										<div class="invalid-feedback">
											Please enter your shipping address.
										</div>
										</div>
										<div class="col">
										<label for="validationCustom04" class="form-label">State</label>
										<select class="form-select" id="state" required="">
											<option selected="" disabled="" value="">Choose...</option>
											<option>State 1</option>
											<option>State 2</option>
											<option>State 3</option>
										</select>
										<div class="valid-feedback">
											Looks good!
										</div>
										<div class="invalid-feedback">
											Please select a valid state.
										</div>
										</div>
										<div class="col">
										<label for="validationCustom05" class="form-label">Zip</label>
										<input type="text" class="form-control" id="zip" required="">
										<div class="invalid-feedback">
											Please provide a valid zip.
										</div>
										</div>
									</form>  
									</div>
									<div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4" style="display: none;">

									<form id="form-4" class="row row-cols-1 ms-5 me-5 needs-validation" novalidate="">
									<div class="col">
										<div class="mb-3 text-muted">Please confirm your order details</div>

										<div id="order-details"></div>
								
										<h4 class="mt-3">Payment</h4>
										<hr class="my-2">
								
										<div class="row gy-3">
											<div class="col-md-3">
											<label for="cc-name" class="form-label">Name on card</label>
											<input type="text" class="form-control" id="cc-name" value="My Name" placeholder="" required="">
											<small class="text-muted">Full name as displayed on card</small>
											<div class="invalid-feedback">
												Name on card is required
											</div>
											</div>
								
											<div class="col-md-3">
											<label for="cc-number" class="form-label">Credit card number</label>
											<input type="text" class="form-control" id="cc-number" value="54545454545454" placeholder="" required="">
											<div class="invalid-feedback">
												Credit card number is required
											</div>
											</div>
								
											<div class="col-md-3">
											<label for="cc-expiration" class="form-label">Expiration</label>
											<input type="text" class="form-control" id="cc-expiration" value="1/28" placeholder="" required="">
											<div class="invalid-feedback">
												Expiration date required
											</div>
											</div>
								
											<div class="col-md-3">
											<label for="cc-cvv" class="form-label">CVV</label>
											<input type="text" class="form-control" id="cc-cvv" value="123" placeholder="" required="">
											<div class="invalid-feedback">
												Security code required
											</div>
											</div>

											<div class="col">
											<input type="checkbox" class="form-check-input" id="save-info" required="">
											<label class="form-check-label" for="save-info">I agree to the terms and conditions</label>
											</div>

											<small class="text-muted">This is an example page, do not enter any real data, even tho we don't submit this information!</small>

										</div>
										</div>
									</form>



									</div>
								</div>
								<div class="sw-toolbar-elm toolbar toolbar-bottom" role="toolbar">
									<button class="btn sw-btn-prev sw-btn" type="button">Previous</button>
									<button class="btn sw-btn-next sw-btn" type="button">Next</button>
									<button class="btn btn-success-sm  " id="btnFinish" disabled="" onclick="onConfirm()">Complete Order</button>
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
		
		$('select#station').on('change', function(e){
			e.preventDefault();
			var text = $(this).find(':selected').text() 
			var station_id = $(this).val() 

			var text= text.replace('CGS ', ""); 

			$('#station-text').text(text)
			
			$.ajax({
				url: BASE_URL + 'substation/get_substation_by_station/' + station_id,
				type: 'POST',  
				dataType: 'JSON',
				success: function(data){  
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


		})

        function onCancel() { 
          // Reset wizard
          $('#smartwizard').smartWizard("reset");

          // Reset form
          document.getElementById("form-1").reset();
          document.getElementById("form-2").reset();
          document.getElementById("form-3").reset();
          document.getElementById("form-4").reset();
        }

        function onConfirm() {
          let form = document.getElementById('form-4');
          if (form) {
            if (!form.checkValidity()) {
              form.classList.add('was-validated');
              $('#smartwizard').smartWizard("setState", [3], 'error');
              $("#smartwizard").smartWizard('fixHeight');
              return false;
            }
            
            $('#smartwizard').smartWizard("unsetState", [3], 'error'); 
          }
        }

        function closeModal() {
          // Reset wizard
          $('#smartwizard').smartWizard("reset");

          // Reset form
          document.getElementById("form-1").reset();
          document.getElementById("form-2").reset();
          document.getElementById("form-3").reset();
          document.getElementById("form-4").reset();
 
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
				  console.info(form)
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
                  showConfirm();
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
                  animation:'slideSwing'
                },
                toolbar: {
                  showNextButton: true, // show/hide a Next button
                  showPreviousButton: true, // show/hide a Previous button
                  position: 'bottom', // none/ top/ both bottom
                  extraHtml: `<button class="btn btn-success" id="btnFinish" disabled onclick="onConfirm()">Complete Order</button>
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
