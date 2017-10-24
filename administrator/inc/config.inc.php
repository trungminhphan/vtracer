<?php
	//DEFINE QUYEN CHO TUNG NGUOI
	define("ADMIN", 1); //is manage all system.
	define("MANAGER", 2); //is manage some function.
	define("CHECKER", 4); //is manage quality product
	define("UPDATER", 8); //is Famer or Producer
	//normal is CUSTOMER

	//define("VIEWER", 8);
	//$g_config['db_server'] = 'mysql.agu.edu.vn';
	/*$g_config['db_server'] = 'localhost';
	$g_config['db_username'] = 'root';
	$g_config['db_password'] = 'root';
	$g_config['db_database_name'] = 'ptth';
	$g_config['image_folder'] = 'images/';*/

	//$mongo_server = 'localhost';
	//$mongo_username = 'admin';
	//$mongo_password = 'admin';
	//$mongo_database_name = 'ptth';

	//$g_config['admin_user'] = 'admin';
	//$g_config['admin_password'] = MD5('pmtrung');
	//$g_config['admin_password'] = '6701a36f285636bfbf4afc07bed8fc0c';
	
	//$hash_password["crypt"] = 'MD5';
	//$hash_password["password"] = 'PASSWORD';
	//$hash_password[""] = 'PLAIN_TEXT';
	
	//smtp config for send mail

	$target_files = 'uploads/files/';
	$target_images = 'uploads/images/';

	$files_extension = array('pdf', 'zip', 'rar', 'doc', 'docx', 'xls', 'png', 'gif', 'jpg', 'jpeg', 'bmp', 'rtf');
	$images_extension = array('png', 'gif', 'jpg', 'jpeg', 'bmp');
	$valid_formats = array("jpg", "png", "gif", "zip", "bmp", "doc", "docx", "pdf", "xls", "xlsx", "ppt", "pptx", 'zip', 'rar');
	$max_file_size = 50*1024*1024*1024; //50MB
	
?>