
	<main id="create">
		<h1 id="h1d">Verander je verjaardag</h1>
		<div id="div">
	<form action="<?= URL ?> kalender/editSave/<?=$mand['id']?>" method="POST">
	
		<p>Naam:</p><input type="text" name="person" value="<?=$mand['person']?>"><br>

		<p>Dag:</p><input type="text" name="day" value="<?= $mand['day']?>"><br>
		<p>Maand:</p><input type="text" name="month" value="<?=$mand['month']?>"><br>
		<p>Jaar:</p><input type="text" name="year" value="<?=$mand['year']?>"><br>

	<button id="button" name="toevoegen" type="submit">Edit</button>
</form>
