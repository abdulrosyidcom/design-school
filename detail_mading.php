<?php
session_start();
require_once './config/config.php';
//require_once 'includes/auth_validate.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();
// get data article
$mading_id=  filter_input(INPUT_GET, 'mading_id');
$db->where('mading.id', $mading_id);
$db->join('users', 'mading.author = users.id', 'left');
$mading = $db->getOne("mading");
// load header template
include_once('includes_frontend/header.php');?>
	<style type="text/css">
			.jumbotron {
			 background: linear-gradient(#00C4FF, #36515F);
			 color: white;
			 margin-top: 40px;
		}

	</style>
	
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<h1>MADING KITA BERSAMA</h1>
					<p>Hey! selamat datang dan selamat belajar lagi! tanam ilmu sekarang, panen di masa depan</p>
				</div>
				<div class="col-sm-4">
					<img style="border-radius: 25px;" src="includes_frontend/img/header/login2.png" width="400" alt="">
				</div>
			</div>
		</div>
	</div>



	<!-- mading -->
	<section>
		<div class="container">
				<h1><?=$mading['title']?></h1>
				<em><?=$mading['created_at']?></em> - oleh <b><em><?=$mading['name']?></em></b>
				<p><?=$mading['content']?></p>
		</div>
	</section>

	<br>

<!-- /#page-wrapper -->
<?php include_once('includes_frontend/footer.php'); ?>
