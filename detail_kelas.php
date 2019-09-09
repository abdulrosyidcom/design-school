<?php
session_start();
require_once './config/config.php';
//require_once 'includes/auth_validate.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();
// get data load
$kelas_id=  filter_input(INPUT_GET, 'kelas_id');

$db->where('master_kelas.id', $kelas_id);
$master_kelas = $db->getOne("master_kelas");

// get data child
$result = $db->query("SELECT a.name, a.id as item_id, a.order FROM class_item a 
                    WHERE a.kelas_id = '".$kelas_id."' ORDER BY a.order ASC");


foreach ($result as $key => $value) {
    // get data child
    $data = $db->query("SELECT * FROM class_content WHERE item_id =".$value['item_id']);
    $result[$key]['class_content'] = $data;
}


// load header template
include_once('includes_frontend/header.php');
?>

<style>
	.jumbotron {
		 background: linear-gradient(#00C4FF, #36515F);
		 color: white;
		 margin-top: 40px;
	}

	.track p {
		font-size: 14px;
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
</style>

<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<h2>MULAI BELAJAR MENGGUNAKAN <?=strtoupper($master_kelas['name'])?></h2>
				<p style="font-size: 14px;"><?=$master_kelas['description']?></p>
			
			</div>
			<div class="col-sm-4">
				<img style="border-radius: 25px;" src="uploads/<?=$master_kelas['icon']?>" width="400" alt="">
			</div>
		</div>
	</div>
</div>
<?php if (isset($_SESSION['user_logged_in'])) {?>
	<div class="container">
		<?php foreach ($result as $row) : ?>
		<div class="row justify-content-center artikel2">
			<div class="col-sm-10 artikel">
				<h2><i class="fa fa-book"></i> <?= strtoupper($row['name'])?></h2>
			</div>	
		</div>
		<!-- collpas -->
			<?php foreach ($row['class_content'] as $val) : ?>
				<div class="row justify-content-center artikel2" onclick="location.href = 'detail_materi.php?content_id=<?php echo $val['id']?>';">
					<div class="col-sm-10 artikel ">
						 <p><i class="fa fa-arrow-right"></i> <?=$val['title']?></p>
					</div>	
				</div>
			<?php  endforeach; ?> 
		<!-- akhir collpas -->
		<?php endforeach;?> 
	</div>
<?php } else {?>
	<div align="center">
		<h1><i class="fa fa-times"></i> Anda Belum Login </h1><br>
		<p>Silakah login terlebih dahulu jika ingin melihat kelas !! atau daftar <a href="index.php">disini</a> untuk bergabung</p><br>

		<a name="daftar" class="btn btn-success" href="index.php">DAFTAR SEKARANG</a>
	</div>
<?php } ?>
	


<!-- /#page-wrapper -->
<?php include_once('includes_frontend/footer.php'); ?>
