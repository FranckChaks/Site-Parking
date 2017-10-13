 <button type="button" class="bouton" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-pencil"></span> Inscription</button>
                        <?php
                        if(isset($_POST['submit']))
	                       {
                               if($i>0){
                                   echo "<div class='error'><section class='error-title'><b>Vous avez ".$i." erreur(s):</b></section><br>";
                                   echo "<p class='justify'>".$message."</p></div>";
                               }
                           }
                        ?>
        <!-- Pop-up Inscription-->
        <div class="modal fade color-black" id="myModal2" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header titre_co">
                        <button type="button" class="close white" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title titre_co">Inscription à Parking.yeah !</h4> </div>
                    <div class="modal-body">
                        <!--------------FORMULAIRE INSCRIPTION----------------->
                        <form method="post" action="#">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nom</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nom" name="nom"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Prénom</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Prénom" name="prenom"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Adresse E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email"> </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mot de passe</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" name="mdp"> </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirmer mot de passe</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmer mot de passe" name="confirm"> </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="remember"> Se souvenir de moi </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" name="submit">S'inscrire</button>
                        </form>
                        <!----------------------------------------->
                    </div>
                    <div class="modal-footer titre_co">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------------->