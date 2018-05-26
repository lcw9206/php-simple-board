<?php 
	require_once ('_db_conn.php');

	$no = $_GET['no'];

	$sql = "SELECT * FROM posts WHERE no = " . $no;

	$result = mysqli_query($link, $sql);

	$post = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<?php require_once ('_header.php'); ?>
	<h2><?=$post['title']?></h2>
	<p>
		<h3><?=nl2br($post['content'])?></h3>
	</p>
	<p>
		<small><?=$post['created']?></small>
	</p>

	<div>
		<a href="/board" class='btn btn-primary'>목록으로</a>
	</div>

<?php require_once ('_footer.php'); ?>



