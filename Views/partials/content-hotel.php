<div class="content">
<h1>Découvrez nos hôtels</h1>
<ul>
    <?php if (isset($listResult)){

        foreach ($listResult as $key => $value){?>

            <li><span class="bold"> Hôtel :</span> <?php echo $key.' situé à '.$value ;?></li><?php
        }

    } else {

        echo $msg_error;

    } ?>
</ul>
</div>