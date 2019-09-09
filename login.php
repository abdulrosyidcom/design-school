<?php
session_start();
require_once './config/config.php';
//If User has already logged in, redirect to dashboard page.
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === TRUE &&  $_SESSION['role'] === 'user') {
    header('Location:index.php');
}

if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === TRUE &&  $_SESSION['role'] === 'admin'){
	header('Location:backend/dashboard/index.php');
}

//If user has previously selected "remember me option", his credentials are stored in cookies.
if(isset($_COOKIE['email']) && isset($_COOKIE['password']))
{
	//Get DB instance. function is defined in config.php
	$db = getDbInstance();
	//Get user credentials from cookies.
	$email = filter_var($_COOKIE['email']);
	$passwd = filter_var($_COOKIE['password']);
	$db->where ("email", $email);
	$db->where ("password", $passwd);
    $row = $db->get('users');

    if ($db->count >= 1) 
    {
    	//Allow user to login.
        $_SESSION['user_logged_in'] = TRUE;
        $_SESSION['role'] = $row[0]['role'];
         $_SESSION['email'] = $row[0]['email'];
        $_SESSION['photo'] = $row[0]['photo'];
         $_SESSION['user_id'] = $row[0]['id'];
        header('Location:index.php');
        exit;
    }
    else //Username Or password might be changed. Unset cookie
    {
    unset($_COOKIE['email']);
    unset($_COOKIE['password']);
    setcookie('email', null, -1, '/');
    setcookie('password', null, -1, '/');
    header('Location:login.php');
    exit;
    }
}



include_once 'includes_frontend/header.php';
?>
<style type="text/css">
	.jumbotron {
		 background: linear-gradient(#00C4FF, #36515F);
		 color: white;
		 margin-top: 40px;
		 padding-top: 30px;
		 padding-bottom: 40px;
	}

	.logo{
		text-align: center;;
	}
</style>


<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<h1>LOGIN</h1>
				<p>Hey! selamat datang dan selamat belajar lagi! tanam ilmu sekarang, panen di masa depan</p>
				<a href="index.php">
					<button type="button" name="daftar" class="btn btn-outline-light">Saya belum daftar</button>
				</a>
			</div>
			<div class="col-sm-4">
				<img style="border-radius: 25px;" src="includes_frontend/img/header/login2.png" width="400" alt="">
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">

		<div class="col-sm-5">
			<div class="logo">
				<img width="60" src="includes_frontend/img/favicon/icon.png" alt=""> 
				<br>
				<p style="font-size: 20px;">SEKOLAH DESIGN</p>
			</div>
			<?php include('includes/flash_messages.php') ?>
			<form method="POST" action="authenticate.php">
			  	<div class="form-group">
					<label class="control-label">Email Or Username</label>
					<input type="text" name="email" class="form-control" required="required">
				</div>
				<div class="form-group">
					<label class="control-label">Password</label>
					<input type="password" name="passwd" class="form-control" required="required">
				</div>
			  	<div class="checkbox">
					<label>
						<input name="remember" type="checkbox" value="1"> Remember Me
					</label>
				</div>
				<?php
				if(isset($_SESSION['login_failure'])){ ?>
					<div class="alert alert-danger" role="alert">
					  <?php echo $_SESSION['login_failure']; unset($_SESSION['login_failure']);?>
					</div>
				<?php } ?>
				
			  <button type="submit" class="btn btn-success form-control">LOGIN</button>
			</form>
		</div>
	</div>
</div>
<?php include_once 'includes_frontend/footer.php'; ?>