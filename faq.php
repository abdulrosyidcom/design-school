<?php
session_start();
require_once './config/config.php';
//require_once 'includes/auth_validate.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();
// get data faq
$result = $db->query("SELECT * FROM faq_category");

foreach ($result as $key => $value) {
    // get data child
    $data = $db->query("SELECT a.*, a.id as faq_id FROM faq a 
                        WHERE a.category_id = '".$value['id']."'");
    $result[$key]['faq'] = $data;
}
// load header template
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
					<h1>FAQ</h1>
					<p>Frequent Ask Questions ??</p>
				</div>
				<div class="col-sm-4">
					<img style="border-radius: 25px;" src="includes_frontend/img/header/login2.png" width="400" alt="">
				</div>
			</div>
		</div>
	</div>

	<!-- pertanyaan -->
	<section id="pertanyaan" class="pertanyaan">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 bg-white">
					<?php foreach ($result as $row) : ?>
					<h2 class="text-left"><?= strtoupper($row['name'])?><h2>
					<!-- collpas -->
						<?php foreach ($row['faq'] as $val) : ?>
						<div class="panel-group" id="accordion">
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$val['faq_id']?>">
						        <?php echo $val['faq_question'] ?></a>
						      </h4>
						      <hr>
						    </div>
						    <div id="collapse<?=$val['faq_id']?>" class="panel-collapse collapse in">
						      <div class="panel-body" style="font-size: 12px;"><?php echo $val['faq_answer'] ?></div>
						      <br>
						    </div>
						  </div>
						  
						</div>
						<?php  endforeach; ?> 
					<!-- akhir collpas -->
					<?php endforeach;?>  
				</div>

				<div class="as"></div>

				<div class="col-sm-3 bg-white">
					<a href="faq.php" style="color: #000;">FAQ</a><br>
					<a href="tentang.php" style="color: #000;">Tetang</a>
				</div>

			</div>
		</div>

	</section>


	<br>

<!-- /#page-wrapper -->
<?php include_once('includes_frontend/footer.php'); ?>
