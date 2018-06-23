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
    $row = $db->get('users');


    if ($db->count >= 1) {
        $_SESSION['user_logged_in'] = TRUE;
        $_SESSION['role'] = $row[0]['role'];
        $_SESSION['user_id'] = $row[0]['id'];
       	if($remember)
       	{
       		setcookie('email',$email , time() + (86400 * 90), "/");
       		setcookie('password',$passwd , time() + (86400 * 90), "/");
       	}
        header('Location:backend/dashboard/index.php');
        exit;
    } else {
        $db->where ("username", $email);
        $db->where ("password", $passwd);
        $row = $db->get('users');
     
        if ($db->count >= 1) {
          $_SESSION['user_logged_in'] = TRUE;
          $_SESSION['role'] = $row[0]['role'];
          $_SESSION['user_id'] = $row[0]['id'];
          if($remember)
          {
            setcookie('email',$email , time() + (86400 * 90), "/");
            setcookie('password',$passwd , time() + (86400 * 90), "/");
          }
          header('Location:backend/dashboard/index.php');
          exit;
        }

        $_SESSION['login_failure'] = "Invalid user name or password";
        header('Location:login.php');
        exit;
    }
  
}