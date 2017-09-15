<?php
    try
    {
        $bdd = new PDO ("mysql:host=localhost; dbname=parking", "root", "");
    }
    catch(Exception $e)
    {
        die  ("Erreur Connexion");
    }


    $req = $bdd->query("SELECT * FROM place WHERE etat = 0");
?>
<select>
   <?php
    while ($res = $req->fetch())
    {
        echo "<option value=".$res['id_p'].">".$res['num_p']."</option>";
    }
?>
</select>


<?php
    if (isset($_POST['submit']))
    {

    }
?>

<h3>Faites votre demande pour votre place de parking</h3>


<form method="post">
    <label>Nom : </label>
    <input type="text" name="nom"/>

    <button name="submit">Submit</button>
</form>
