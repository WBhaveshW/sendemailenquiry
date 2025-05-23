<?php 
require_once(dirname(dirname(__FILE__)).'/config/config.php');
$objSendEmails = new SendEmails();
session_start();
$_SESSION['mail_response'] = $objSendEmails->sendMortgageMail($_POST);
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "/mortgageenquiry/index.php");
?>