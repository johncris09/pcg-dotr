
<!DOCTYPE html>
<html lang="en">

<head>
	<?php  
		$this->view('template/meta');;
		$this->view('template/css');  
	?> 
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
                        <div class="white-box">  <h3 class="box-title">ENTER DATA FOR MARINE ENVIRONMENTAL PROTECTION REPORT</h3> </div> 
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
</body>

</html>
