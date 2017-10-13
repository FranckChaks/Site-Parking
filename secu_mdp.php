<?php

    if(isset($_POST['submit']))
    {
        extract($_POST);
        
        if (!preg_match("#^[a-z A-Z 0-9]{5-20}$#", $mdp))
            echo "<h2>Mot de passse non conforme<h2> <p> (une Maj , une min et un chiffre obligatoire) </p>";
        if (!preg_match("#^0[1-9]([ .-]?[0-9]{2}){4}$#", $tel))
            echo "<h2>Numéro de telephone invalide </h2>";
    }
    else
    {
        insert en BDD
    }
?>


<form action="" method="POST" role="form">

	<div class="form-group">
		<label for="nom">Nom:</label>
		<input type="text" class="form-control" id="" placeholder="Ex: Gerard" name="nom"><br/>
		<label>Prenom:</label>
		<input type="text" class="form-control" id="" placeholder="Ex: Dupont" name="prenom"><br/>
		<label>Mot de Passe:</label>
		<input type="password" class="form-control" id="" name="mdp"><br/>
		<label>Confirmation:</label>
		<input type="text" class="form-control" id="" name="confirm"><br/>
		<label>Email:</label>
		<input type="email" class="form-control" id="" placeholder="Ex: Gerard@email.com" name="email"><br/>
		<label>Téléphone</label>
		<input type="text" class="form-control" id="" placeholder="Ex: 0610320114" name="tel"><br/>
	</div>


	<button type="submit" class="btn btn-primary">Inscrire</button>
</form>
