<?php
require_once(__DIR__.'/config.php');

session_start();

if(!isset($_GET['token'])){
    die("No token");
}

if(!isset($_SESSION['mfa_pending'])){
    die("No MFA session");
}

$username = $_SESSION['mfa_user'];

$user = $DB->get_record('user',['username'=>$username]);

complete_user_login($user);

unset($_SESSION['mfa_pending']);
unset($_SESSION['mfa_user']);

redirect($CFG->wwwroot.'/my/');
