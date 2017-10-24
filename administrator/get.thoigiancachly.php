<?php
require_once('header_none.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
if($id){
	$thuoc = new Thuoc();
	$thuoc->id = $id; $t = $thuoc->get_one();
	echo $t['thoigiancachly'];
} else {
	echo 0;
}
?>