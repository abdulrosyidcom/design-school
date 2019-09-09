<?php 

// get data settings
$db = getDbInstance();
//Select where clause
$db->where('id', '1');
$settings = $db->getOne("settings");


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$settings['site_title']?></title>
	<meta name="description" content="<?=$settings['site_desc']?>">
	<meta name="keywords" content="<?=$settings['site_meta']?>">
	<link rel="stylesheet" href="includes_frontend/css/style.css">
	<link rel="stylesheet" href="includes_frontend/css/bootstrap.css">
	<link rel="shorcut icon" href="includes_frontend/img/favicon/icon.png">
	<script src="includes_frontend/js/jquery-3.3.1.min.js"></script>

	<link href="backend/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style>
	.header {
		background-image: url(includes_frontend/img/header/header2.jpg);
		background-size: cover;
	}
		.icon {
			margin-top: 130px;
		}
		.superhero {
			margin-top: 130px;
		}

		.member {
			margin-top: 130px;
		}

		.perusahaan {
			margin-top: 100px;
			background-color: white;
		}

		.usaha {
			margin-top: 130px;
		}

		.motivasi {
			margin-top: 130px;
			background-color: white;
		}

		
		.katamember {
			margin-bottom: 30px;
		}
		.katamember img {
			margin: auto;
		}

		.ugb {
			margin-top: 40px
		}

		.ugb img {
			margin: auto;
		}

		
		.footer {
			background-color: #0D243C;
			color: white;
			margin-top: 90px;
		}
		.faq {
			background-color: white;

		}

	</style>
</head>
<body class="bg-light">

	<!-- navbar -->
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
	  <img width="30" src="includes_frontend/img/favicon/icon.png" alt=""><a class="navbar-brand" href="index.php">SEKOLAH DESIGN</a>

	  <div class="container">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="kelas.php">KELAS</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="mading.php">MADING</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="artikel.php">ARTIKEL</a>
		      </li>
		    </ul>
		  </div>
	  </div>
	  		<?php
		  	if (isset($_SESSION['user_logged_in'])) {
		  		?>
		  		<img width="40" height="40" src="uploads/<?=$_SESSION['photo']?>" alt="" style="margin-right: 10px;" class="rounded-circle"> 
		  		
		  		<div class="nav navbar-nav navbar-right">
		  			
			  		<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['email'];?> <span class="caret"></span></a> 
			  		<ul class="dropdown-menu" style="left: 90%">
	                  <li><a href="update_profil.php" class="nav-link"><i class="fa fa-users"></i> Update Profil</a></li>
	                  <li><a href="mading_saya.php" class="nav-link"><i class="fa fa-list"></i> Mading Saya</a></li>
	                  <li><a href="logout.php" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></li>
	                 
	                </ul>
		  		</div>
		  		
		  	<?php
		  	}else{
		  		?><a href="login.php"><button type="button" name="login" class="btn btn-outline-success">LOGIN</button></a><?php
	  		}
	  		?>
	  
	</nav>

