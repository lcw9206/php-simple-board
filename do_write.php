<?php 
	require_once ('_db_conn.php');
	
	echo "<pre>";
	print_r($_POST['title']);
	echo "</pre>";

	if($_POST['title']=='') {
		echo "제목을 입력해주세요.";
		exit;
	}
	
	$sql = "INSERT INTO posts VALUES(null, '".$_POST['title']."', '".$_POST['content']."', '".$_POST['is_secret']."', NOW())";

	mysqli_query($link, $sql);
	mysqli_close($link);
?>

<script type="text/javascript">
	document.location.href = '/board';
</script>

