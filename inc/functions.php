<?php

// $pages = array(
// 	'witam' => 'Witamy',
// 	'formularz' => 'Formularz',
// 	'klasa' => 'Klasy'
// );

<<<<<<< HEAD
// github.com/lo1cgsan/phpapp
// tablica asocjcyjna, która będzie zawierała wyniki zapytań
=======
>>>>>>> 723a2a0a0249ac91a74014ae59be357af86d6933
$ret = array();

function get_menu($id) {
	global $db, $ret;
	db_query('SELECT * FROM menu', $ret);
<<<<<<< HEAD
	//print_r($ret);
 	foreach ($ret as $k => $t) {
		echo '
<li class="nav-item">
    <a class="nav-link" href="?id='.$t['plik'].'">'.$t['tytul'].'</a>
</li>
=======
	// print_r($ret);
	foreach ($ret as $k => $t) {
		echo '
			<li class="nav-item">
                <a class="nav-link" href="?id='.$t['plik'].'">'.$t['tytul'].'</a>
            </li>
>>>>>>> 723a2a0a0249ac91a74014ae59be357af86d6933
		';
	}
}

function get_page_title($id) {
	global $ret;
	foreach ($ret as $k => $t) {
<<<<<<< HEAD
		//echo $t['id']." ";
		if ($t['plik'] == $id) {
=======
		if ($t['plik'] == $id){

>>>>>>> 723a2a0a0249ac91a74014ae59be357af86d6933
			echo $t['tytul'];
			return;
		}
	}
<<<<<<< HEAD
	// tytuł domyślny
=======
>>>>>>> 723a2a0a0249ac91a74014ae59be357af86d6933
	echo 'Aplikacja PHP';
}

function get_page_content($id) {
<<<<<<< HEAD
	if (file_exists($id.'.html'))
		include($id.'.html');
	else
		include('404.html');
}

=======
	if (file_exists($id.'html'))
		include($id.'html');
	else
		include('404.html');
}
>>>>>>> 723a2a0a0249ac91a74014ae59be357af86d6933
?>