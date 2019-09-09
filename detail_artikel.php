<?php
session_start();
require_once './config/config.php';
//require_once 'includes/auth_validate.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();
// get data article
$article_id=  filter_input(INPUT_GET, 'article_id');
$db->where('article.id', $article_id);
$db->join('users', 'article.author = users.id', 'left');
$article = $db->getOne("article");
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
					<h1>ARTIKEL SEKOLAH DESIGN</h1>
					<p>Hey! selamat datang dan selamat belajar lagi! tanam ilmu sekarang, panen di masa depan</p>
				</div>
				<div class="col-sm-4">
					<img style="border-radius: 25px;" src="includes_frontend/img/header/login2.png" width="400" alt="">
				</div>
			</div>
		</div>
	</div>



	<!-- artikel -->
	<section >
		<div class="container">
				<h1><?=$article['title']?></h1>
				<em><?=$article['date']?></em> - oleh <b><em><?=$article['name']?></em></b>
				<p><?=$article['content']?></p>
		</div>
	</section>

	<br>

<!-- /#page-wrapper -->
<?php include_once('includes_frontend/footer.php'); ?>
