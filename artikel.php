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
$db->join('users', 'article.author = users.id', 'left');
$result = $db->arraybuilder()->paginate("article", $page, 'article.*, users.name');
$total_pages = $db->totalPages;

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
	<section id="artikel" class="artikel">
		<div class="container">
			<div class="row">

				<?php foreach ($result as $row) :  ?>
				<div class="col-sm-4">
					<div class="card text-left">
					  <div class="card-body">
					  	<p style="font-size: 9px; background-color: orange; width: 200px; border-radius: 5px; padding-left: 10px;"><em><?=$row['date']?></em> - oleh <b><em><?=$row['name']?></em></b></p>
					    <h5 class="card-title"><?=$row['title']?></h5>
					    <p class="card-text"><?php echo substr($row['content'], 0, 100)?></p>
					    <a class="btn btn-sm btn-primary" href="detail_artikel.php?article_id=<?php echo $row['id']?>" style="color: #fff;">Readmore</a>
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
