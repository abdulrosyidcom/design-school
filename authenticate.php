<?php 
require_once './config/config.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $email = filter_input(INPUT_POST, 'email');
    $passwd = filter_input(INPUT_POST, 'passwd');
    $remember = filter_input(INPUT_POST, 'remember');
    $passwd=  md5($passwd);
   	
    //Get DB instance. function is defined in config.php
    $db = getDbInstance();

    $db->where ("email", $email);
    $db->where ("password", $passwd);
    $db->where ("active", '1');
    $row = $db->get('users');


    if ($db->count >= 1) {
        if (empty($row[0]['photo'])) {
          $row[0]['photo'] = 'user.png';
        }
        $_SESSION['user_logged_in'] = TRUE;
        $_SESSION['role'] = $row[0]['role'];
        $_SESSION['user_id'] = $row[0]['id'];
        $_SESSION['email'] = $row[0]['email'];
        $_SESSION['photo'] = $row[0]['photo'];
       	if($remember)
       	{
       		setcookie('email',$email , time() + (86400 * 90), "/");
       		setcookie('password',$passwd , time() + (86400 * 90), "/");
       	}

        if ($row[0]['role'] == 'admin') {
          header('Location:backend/dashboard/index.php');
          exit;
        }else{
          header('Location:index.php');
          exit;
        }
        
    } else {
        $db->where ("username", $email);
        $db->where ("password", $passwd);
        $db->where ("active", '1');
        $row = $db->get('users');
        
        if (empty($row[0]['photo'])) {
          $row[0]['photo'] = 'user.png';
        }
        
        if ($db->count >= 1) {
          $_SESSION['user_logged_in'] = TRUE;
          $_SESSION['role'] = $row[0]['role'];
          $_SESSION['user_id'] = $row[0]['id'];
          $_SESSION['email'] = $row[0]['email'];
          $_SESSION['photo'] = $row[0]['photo'];
          if($remember)
          {
            setcookie('email',$email , time() + (86400 * 90), "/");
            setcookie('password',$passwd , time() + (86400 * 90), "/");
          }
          // redirect
          if ($row[0]['role'] == 'admin') {
            header('Location:backend/dashboard/index.php');
            exit;
          }else{
            header('Location:index.php');
            exit;
          }
        }

        $_SESSION['login_failure'] = "Invalid user name or password";
        header('Location:login.php');
        exit;
    }
  
}