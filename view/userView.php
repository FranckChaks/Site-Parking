<div class="container-full">
<div class="corps">
    <div class="row">
        <h2 class='text-middle'>
            <b>Bonjour <?= $info['prenom'];?> !</b>
        </h2>
        <h4><p class="text-middle col-xs-12 col-md-12">Bienvenue sur votre espace personnel, d'ici vous pourrez réserver vos places de parking, consulter l'état de votre demande de réservation, votre historique de places et changer vos informations personnelles.</p></h4>
    </div>
<!-------------------RESERVATION DE PLACES---------------->

    
    <div class="row text-middle">
        <div class="col-xs-12 col-md-5 text-middle">
           <div class="user-block">
            <section>
                <h3><u>Réserver votre place</u></h3>
            </section>
        <h4>
        <form action="#" method="post">
            Choisissez la date de début:<br>
            <input type="date" name="deb" class="text-middle"><br><br>
            Choisissez la date de fin:<br>
            <input type="date" name="fin" class="text-middle"><br><br>
            <input type="submit" name="submit">
        </form>
        </h4>
        </div>
        </div>

<!--------------------DEMANDE DE PLACES------------------->

        <div class="col-xs-12 col-md-5 text-middle margin-right">
           <div class="user-block">
            <h3><u>Demande de places</u></h3>
            <table class="text-middle">
                <th class="text-middle col-xs-4 col-md-4">Numéro de place</th>
                <th class="text-middle col-xs-4 col-md-4">Date</th>
                <th class="text-middle col-xs-4 col-md-4">Etat</th>
                
                <?php
                
                    if($reponse['lvl'] == 0)
                    {
                ?>
                <tr>
                    <td class="col-xs-4 col-md-4"><?= $reponse['nom_p'];?></td>
                    <td class="col-xs-4 col-md-4"><?= $reponse['date_deb'];?></td>
                    <td class="col-xs-4 col-md-4"><b>En attente...</b></td>
                </tr>
                <?php
                    }
                ?>
                
                
            </table>
            <section><h4><b>Place dans la file d'attente:</b> ...</h4></section>
        </div>
        </div>
    </div>
<!------------------HISTORIQUE DES PLACES------------->
    <div class="row text-middle">
        <div class="col-xs-12 col-md-5 text-middle">
           <div class="user-block">
            <h3><u>Historique de vos places</u></h3>
               <table class="text-middle">
                <th class="text-middle col-xs-4 col-md-4">Numéro de place</th>
                <th class="text-middle col-xs-4 col-md-4">Date</th>
                <th class="text-middle col-xs-4 col-md-4">Etat</th>
                
<!--
                <tr>
                    <td class="col-xs-4 col-md-4">Place number 1</td>
                    <td class="col-xs-4 col-md-4">23/10/2017</td>
                    <td class="validee col-xs-4 col-md-4">Validée !</td>
                </tr>
-->
                <?php

                    if($reponse['lvl'] == 1)
                    {
                        var_dump($reponse);
                ?>
                <tr>
                    <td class="col-xs-4 col-md-4"><?= $reponse['nom_p'];?></td>
                    <td class="col-xs-4 col-md-4"><?= $reponse['date_deb'];?></td>
                    <td class="col-xs-4 col-md-4 validee"><b>Validée</b></td>
                </tr>
                <?php
                    }
                ?>
                
                <?php

                    if($reponse['lvl'] == 2)
                    {
                ?>
                <tr>
                    <td class="col-xs-4 col-md-4"><?= $reponse['nom_p'];?></td>
                    <td class="col-xs-4 col-md-4"><?= $reponse['date_deb'];?></td>
                    <td class="col-xs-4 col-md-4 refusee"><b>Refusée</b></td>
                </tr>
                <?php
                    }
                ?>
                
<!--
                <tr>
                    <td class="col-xs-4 col-md-4">Place number 2</td>
                    <td class="col-xs-4 col-md-4">24/10/2017</td>
                    <td class="refusee col-xs-4 col-md-4">Refusée !</td>
                </tr>
-->
            </table>
        </div>
       </div>
<!-------------------Informations du compte--------------->

           <div class="col-xs-12 col-md-5 text-middle">
               <div class="user-block">
            <h3><u>Vos informations</u></h3>
            <b>Votre email :</b> <?=$info['email'];?><br>
            <b>Votre nom/prénom :</b> <?=$info['nom']." ".$info['prenom'];?><br>
            <u><b>Changer de mot de passe</b></u>
            <br><br>
        </div>
    </div>
    </div>
</div>
</div>