	<main id="create">
		<h1 id="h1v">Voeg je verjaardag toe</h1>
		<div id="div">
	<form action="<?= URL ?>Kalender/createSave" method="POST">
	
	<input class="input3" type="text" name="person" placeholder="Naam">
	<br>
		<select name="day">
	<?php 
		for ($i= 1; $i< 32; $i++) { 

	?>
	<option class="option" value="<?= $i ?>"><?= $i ?></option>
	
	<?php
	}
	?>
	</select>
	
	
	<select name="month">
		<option class="option" value="1">Januari</option>
		<option class="option" value="2">Februari</option>
		<option class="option" value="3">Maart</option>
		<option class="option" value="4">April</option>
		<option class="option" value="5">Mei</option>
		<option class="option" value="6">Juni</option>
		<option class="option" value="7">Juli</option>
		<option class="option" value="8">Augustus</option>
		<option class="option" value="9">September</option>
		<option class="option" value="10">Oktober</option>
		<option class="option" value="11">November</option>
		<option class="option" value="12">December</option>
	</select>
	<select name="year">
	<?php
		$j = date('Y');
		for ($y=0; $y < 101; $y++) { 

	?>
	<option class="option" value="<?=$j-$y ?>"><?= $j-$y ?></option>
	<?php 
		}
	?>
</select>
	<br>

	<button id="button" name="toevoegen" type="submit">Voeg toe</button>
</form>
	<form action="create.php/createSave" method="POST">
	<button id="button2" name="terug" type="submit">Terug naar kalender</button>
</form>

</main>