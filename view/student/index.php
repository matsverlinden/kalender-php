<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>Naam</th>
		</tr>
		
		<?php
			foreach ($students as $student) {
		?>

		<tr>
			<td><?php echo $student['student_id']; ?></td>
			<td><?php echo $student['student_name']; ?></td>
		</tr>
		
		
		<?php
			}
		?>

	</table>
</div>