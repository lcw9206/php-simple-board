<?php 
	require_once ('_header.php'); 
	require_once ('_db_conn.php');
?>

		
		<div class="bs-example" data-example-id="simple-table">
		   <table class="table">
		      	<caption>Optional table caption.</caption>
		      	<thead>
		        	<tr>
			            <th class="text-center">#</th>
			            <th>First Name</th>
			            <th>Last Name</th>
			            <th>Username</th>
			         </tr>
		      	</thead>
		      	<tbody>
			         <tr>
			            <th scope="row">1</th>
			            <td>Mark</td>
			            <td>Otto</td>
			            <td>@mdo</td>
			         </tr>
			         <tr>
			            <th scope="row">2</th>
			            <td>Jacob</td>
			            <td>Thornton</td>
			            <td>@fat</td>
			         </tr>
			         <tr>
			            <th scope="row">3</th>
			            <td>Larry</td>
			            <td>the Bird</td>
			            <td>@twitter</td>
			         </tr>
		    	</tbody>
		   </table>
	   	<div>
	   		<a href="/board/write.php" class='btn btn-primary'>글쓰기</a>
	   	</div>
	</div>
<?php require_once ('_footer.php'); ?>