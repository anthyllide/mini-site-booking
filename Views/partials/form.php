<div class="content">

    <h1>Formulaire</h1>
    <form method="post" action="">

        <p><label>Votre nom :</label></label><input type="text" placeholder="Votre nom" name="customer-name"></p>
        <p><label>Votre email :</label><input placeholder="votre email" name="email"></p>

        <p><label>Date d'arrivée : </label><input type="date" value="<?php echo date('d/m/Y');?>" name="check-in-date"></p>
        <p><label>Date d'arrivée : </label><input type="date" value="<?php echo date('d/m/Y');?>" name="check-out-date"></p>
       <p><label>Sélectionnez votre hôtel : </label>
           <SELECT name="hotel" size="1">
               <?php if (isset($listResult)){

                   foreach ($listResult as $key => $value){?>

                       <option><?php echo $key; ?></option> <?php
                   }

               } ?>

        </SELECT></p>
        <p><input type="submit" value="Continuez" name="form-submit"/></p>
    </form>
</div>