<?php
function init_baza() {
	global $db, $dbfile, $kom;
	if (!file_exists($dbfile)) $kom[] = 'Brak pliku bazy. Tworzę nowy.';

	$db = new PDO("sqlite:$dbfile");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
<<<<<<< HEAD
=======

>>>>>>> 723a2a0a0249ac91a74014ae59be357af86d6933
}


function init_tables() {
	global $db;
	if (file_exists(DBASE.'baza.sql')) {
		$sql = file_get_contents(DBASE.'baza.sql', 'r');
		$q = "SELECT name FROM sqlite_master WHERE type='table' AND name='menu'";
		$ret = $db->query($q);
<<<<<<< HEAD
		//$db->exec($sql);
		// $kom[] = "Utworzono tabele!";
	}
}


function db_query($q, &$ret) {
	global $db;
	try {
		$r = $db->query($q, PDO::FETCH_ASSOC);
	} catch(PDOException $e) {
		echo ($e->getMessage());
	}
	if ($r) {
=======
		if (empty($ret)) {
			$db->exec($sql);
			$kom[] = "Utworzono tabele!";
		}
	}
}

function db_query($q, &$ret){
	global $db;
	try {
		$r = $db->query($q, PDO::FETCH_ASSOC);
	} catch(PDOException $e){
		echo ($e->getMessage());
	}
	if($r){
>>>>>>> 723a2a0a0249ac91a74014ae59be357af86d6933
		$ret = $r->fetchAll();
		return true;
	}
	return false;
}

?>