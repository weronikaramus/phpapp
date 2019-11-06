<?php
<<<<<<< HEAD
=======

>>>>>>> 723a2a0a0249ac91a74014ae59be357af86d6933
setlocale(LC_ALL, 'pl_PL.UTF-8');
date_default_timezone_set('Europe/Warsaw');
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', 'errorlog.txt');

define('DINC', 'inc/');
define('DBASE', 'db/');
$dbfile = DBASE.'baza.db';
<<<<<<< HEAD
$db=null;
=======
$db = null;
>>>>>>> 723a2a0a0249ac91a74014ae59be357af86d6933
$kom = array();
require_once(DINC.'functions.php');
require_once(DINC.'db.php');
require_once(DINC.'users.php');

init_baza();
init_tables();

if (isset($_GET['id']))
	$id=$_GET['id'];
else
	$id='witam';

include_once(DINC.'template.php');

<<<<<<< HEAD
?>
=======
?>
>>>>>>> 723a2a0a0249ac91a74014ae59be357af86d6933
