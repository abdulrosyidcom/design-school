<?php
session_start();
require_once './config/config.php';
//require_once 'includes/auth_validate.php';

//Get DB instance. function is defined in config.php
$db = getDbInstance();
// get data article

$page = filter_input(INPUT_GET, 'page');
$pagelimit = 20;
if ($page == "") {
    $page = 1;
}



$db->pageLimit = $pagelimit;
$result = $db->arraybuilder()->paginate("master_kelas", $page, 'master_kelas.*');
$total_pages = $db->totalPages;

// load header template
include_once('includes_frontend/header.php');?>
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
		}
	</style>

	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<h1>PERJALANAN BELAJAR</h1>
					<p>Belajar bertahap dengan menu perjalanan di sekolah design, silahkan pilih materi yang ingin anda pelajari</p>
				</div>
				<div class="col-sm-4">
					<img style="border-radius: 25px;" src="includes_frontend/img/header/track.png" width="400" alt="">
				</div>
			</div>
		</div>
	</div>


	<!-- artikel -->
	<section id="track" class="track">
		<div class="container">
			<div class="row text-center">
				<?php foreach ($result as $row) :  ?>
					<div class="col-sm-4">
						<div class="card">
						  <a href="detail_kelas.php?kelas_id=<?php echo $row['id']?>"><img class="card-img-top track-img" src="uploads/<?=$row['icon']?>" alt="Card image cap" ></a>
						  <div class="card-body">
						  	<h6><?=$row['name']?></h6>
						    <p class="card-text"><?=$row['description']?></p>
						  </div>
						</div>
					</div>
				<?php endforeach;  ?>
			</div>
			<br>
			<div class="text-center">

		        <?php
			        if (!empty($_GET)) {
			            //we must unset $_GET[page] if built by http_build_query function
			            unset($_GET['page']);
			            $http_query = "?" . http_build_query($_GET);
			        } else {
			            $http_query = "?";
			        }
			        if ($total_pages > 1) {
			            echo '<ul class="pagination">';
			            for ($i = 1; $i <= $total_pages; $i++) {
			                ($page == $i) ? $li_class = ' class="active page-item"' : $li_class = "class='page-item'";
			                echo '<li ' . $li_class . '>
			                		<a href="artikel.php' . $http_query . '&page=' . $i . '" class="page-link">' . $i . '</a>
			                	</li>';
			            }
			            echo '</ul>';
			        }
		        ?>
		    </div>
		
		</div>
	</section>

	<br>
	
<!-- /#page-wrapper -->
<?php include_once('includes_frontend/footer.php'); ?>
