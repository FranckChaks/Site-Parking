<html>

<head>
    <title>Parking</title>
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!--
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/bootstrap.theme.css"/>
-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf8" /> </head>


    <header>
        <div class="row">
            <div class="col-xs-12 col-lg-12 entete">
                <!----------- ENTETE ---------------->
                <nav>
                    <ul>
                        <li class="col-xs-2 col-md-2 liste">
                            <button type="button" class="bouton" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-off"></span> Connexion</button>
                        </li>
                        <li class="col-xs-2 col-md-2 liste">
                            <button type="button" class="bouton" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-pencil"></span> Inscription</button>
                        </li>
                        <li class="col-xs-2 col-md-2 liste"><span class="glyphicon glyphicon-user"> </span> Mon compte</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Pop-up Connexion-->
        <div class="modal fade" id="myModal" role="dialog">
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
                            <button type="submit" class="btn btn-success" name="submit">Se connecter</button>
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
        <!-- Pop-up Inscription-->
        <div class="modal fade" id="myModal2" role="dialog">
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
    </header>
    <div class="row">
        <div class="col-xs-12 col-md-12 titre">
            <p class="titre_parking">Parking.yeah</p>
        </div>
    </div>
<body>