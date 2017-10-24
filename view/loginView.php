<button type="button" class="bouton" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-off"></span> Connexion</button>
       
<?php
    if(isset($_POST['submit_login']))
    {
        if($i>0)
        {
            echo "<div class='error'>".$message."</div>";
        }
    }
?>
<!-- Pop-up Connexion-->
        <div class="modal fade color-black" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header titre_co">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title titre_co">Connexion à Parking.yeah !</h4> </div>
                    <div class="modal-body">
                        <!--------------FORMULAIRE----------------->
                        <form method="post" action="#">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Adresse E-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email"> </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mot de passe</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" name="mdp"> </div>
                            <button type="submit" class="btn btn-success" name="submit_login">Se connecter</button>
                        </form>
                        <a href="index.php?p=forgotmdp">Mot de Passe oublier</a>
                        <!----------------------------------------->
                    </div>
                    <div class="modal-footer titre_co">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------------->