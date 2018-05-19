<?php 
	echo "<pre>";
	print_r($_POST['title']);
	echo "</pre>";

	if($_POST['title']=='') {
		echo "제목을 입력해주세요.";
		exit;
	}

?>

