<?php 
	echo "<pre>";
	print_r($_POST['title']);
	echo "</pre>";

	if($_POST['title']=='') {
		echo "제목을 입력해주세요.";
		exit;
	}

	$conn = mysqli_connect('127.0.0.1', 'devs', 'devs', 'test_db');
	
	print_r($conn)
?>

