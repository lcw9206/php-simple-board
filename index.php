<?php 
	require_once ('_header.php'); 
	require_once ('_db_conn.php');

	$sql = "SELECT * FROM posts WHERE is_secret != 'Y' ORDER BY created DESC";
	$result = mysqli_query($link, $sql);
	mysqli_close($result);
?>

<div class="bs-example" data-example-id="simple-table">
   	<table class="table">
      	<thead>
        	<tr>
	            <th>번호</th>
	            <th>제목</th>
	            <th>내용</th>
	            <th>생성일</th>
	        </tr>
      	</thead>
      	<tbody>
      		<?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : ?>
	        <tr>
	            <td><?=$row['no']?></td>
	            <td><a href="/board/view.php?no=<?=$row['no']?>"><?=$row['title']?></a></td>
	            <td><?=$row['content']?></td>
	            <td><?=$row['created']?></td>
	        </tr>
	     	<?php endwhile; ?>
    	</tbody>
   	</table>
	<div>
		<a href="/board/write.php" class='btn btn-primary'>글쓰기</a>
	</div>
</div>

<?php require_once ('_footer.php'); ?>