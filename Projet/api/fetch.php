<?php
	include('../conn.php');
	if(isset($_POST['fetch'])){
		?>
		<table class="table table-striped table-bordered table-hover">
			<thead>
			    <th>id</th>
				<th>model</th>
				<th>prix</th>
				
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				$query=$conn->query("select * from `car`");
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><span id="id<?php echo $row['id']; ?>"><?php echo $row['id']; ?></span></td>
						<td><span id="last<?php echo $row['id']; ?>"><?php echo $row['model']; ?></span></td>
						<td><span id="first<?php echo $row['id']; ?>"><?php echo $row['prix']; ?></span></td>
						<td>
							<a style="cursor:pointer;" class="btn btn-warning edit" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a style="cursor:pointer;" class="btn btn-danger delete" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</a>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
		<?php
	}
?>


