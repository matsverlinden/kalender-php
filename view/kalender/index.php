         <?php
        $month = [null,'Januari','Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

       $tmpDay = null;
       
       $tmpMonth = null;
           foreach ($birthdays as $mand) {

            if ($tmpMonth !== $mand['month']) {
                ($tmpMonth = $mand['month'])
                ?>

            <h1><?= $month [$mand['month']]?></h1>
               <?php
         } 
            if ($tmpDay !== $mand['day']) {
                ($tmpDay = $mand['day'])
                ?>

            <h2><?= $mand['day']?></h2>
            <?php } ?>

            <p><a href="<?= URL ?>kalender/edit/<?= $mand['id']?>"><?=$mand['person']?> (<?=$mand['year']?>)</a> 
            <a href="<?= URL ?>kalender/deleteSave/<?= $mand['id']?>">x</a></p>

            <?php
        }
            ?>
<p><a  href= "<?= URL ?>kalender/create">+ Toevoegen</a></p>