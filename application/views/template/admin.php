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


            <?= $content ?>


            <?php  $this->view('template/footer')  ?>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php  $this->view('template/js')  ?>
</body>

</html>