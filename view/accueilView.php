<div class="row">
    <div class="col-xs-12 col-md-12">
        <img width="100% 100%" src="css/item1.jpg">
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12 text-center">
            <h3>Les meilleures places de parking au meilleur prix</h3>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12 col-md-8 text-intro">
            <p> Pourquoi vous devriez choisir Parking.yeah ? Parce que nous sommes les meilleurs ! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam quos esse, sunt veritatis eos, tempora delectus omnis amet exercitationem incidunt aliquam similique aut ducimus consequuntur temporibus culpa magni natus deleniti.Pourquoi vous devriez choisir Parking.yeah ? Parce que nous sommes les meilleurs ! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam quos esse, sunt veritatis eos, tempora delectus omnis amet exercitationem incidunt aliquam similique aut ducimus consequuntur temporibus culpa magni natus deleniti.<br> 
            <b>Pour accéder aux réservations de places, veuillez vous connecter.</b></p>
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="bloc_accueil text-center">
               <?php
                    if(isset($_SESSION['connecte'])){
                ?>
                <a href="<?=BASE_URL;}?>/userController"><img src="css/reserver.png"></a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-lg-12 text-center2">
        
            <h1>Ce site est fait pour vous</h1>
        <br><p> Acceptez l'offre premium pour seulement 1000€/jour !</p><img class="img_responsive2" width="70%" height="80%" src="css/item2.jpg"> 
        <h1><a href="<?=BASE_URL;?>/userController">Réservez votre place sans plus attendre !</a></h1>
    </div>
</div>