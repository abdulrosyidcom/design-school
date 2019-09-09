<?php
session_start();
require_once './config/config.php';
//require_once 'includes/auth_validate.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();
// get data load
$content_id=  filter_input(INPUT_GET, 'content_id');

$db->where('class_content.id', $content_id);
$db->join('users', 'class_content.author = users.id', 'left');
$content = $db->getOne("class_content", 'class_content.*, users.name as author');

// load header template
include_once('includes_frontend/header.php');
?>

<style>
	.jumbotron {
		 background: linear-gradient(#00C4FF, #36515F);
		 color: white;
		 margin-top: 40px;
	}

	
	.track-img {
		width: 200px;
		margin :auto;
	}

	.track {
		margin-top: 130px;
	}

	.track .card {
		margin-bottom: 30px;
	}

	.footer {
		background-color: #0D243C;
		color: white;
		margin-top: 100px
	}
	.artikel {
		background-color: white;
		padding-top: 20px;
	}

	.artikel:hover {
		box-shadow: 1px 1px 10px black;
	}

	.artikel2 {
		margin-bottom: 18px;
		height: 60px;
	}

	.content_p p {
		font-size: 12px;
		 font-weight: normal;
		 font-style: italic;
	}
</style>

<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<?php
					echo preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<iframe width=\"100%\" height=\"400\" src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",$content['video_url']);
				
				?>
			</div>
			<div class="col-sm-4 content_p">
				<h4> <?=strtoupper($content['title'])?></h4>
				<p style="font-size: 9px; background-color: orange; width: auto; border-radius: 5px; padding-left: 5px;"><?=$content['created_at']?> - Oleh <b><?= $content['author']?></b></p>
				<?=$content['content']?>
			</div>
		</div>
	</div>
</div>


	


<!-- /#page-wrapper -->
<?php include_once('includes_frontend/footer.php'); ?>
