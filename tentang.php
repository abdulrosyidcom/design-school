<?php
session_start();
require_once './config/config.php';
//require_once 'includes/auth_validate.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();
// get data article



//Get Dashboard information
// $numCustomers = $db->getValue ("customers", "count(*)");

include_once('includes_frontend/header.php');?>
	
	<style type="text/css">
		.jumbotron {
			 background: linear-gradient(#00C4FF, #36515F);
			 color: white;
			 margin-top: 40px;
			 padding-top: 30px;
			 padding-bottom: 40px;
		}
	</style>
	
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<h1>Tetang</h1>
					<p>Siapakah Sekolah Desain Sesungguhnya </p>
				</div>
				<div class="col-sm-4">
					<img style="border-radius: 25px;" src="includes_frontend/img/header/login2.png" width="400" alt="">
				</div>
			</div>
		</div>
	</div>

	<!-- artikel -->
	<section id="artikel" class="artikel">
		<div class="container">
				<h1>Tentang Kami</h1>
				<p><?=$settings['about']?></p>
		</div>
	</section>

	<br>

<!-- /#page-wrapper -->
<?php include_once('includes_frontend/footer.php'); ?>
