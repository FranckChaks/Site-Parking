<!--- JONATHAN ---->
<table>
    <tr>
        <th>Nom / Prenom </th>
        <th>Action</th>
    </tr>
    
    <?php
    foreach($r as $k => $v)
        {
            echo "
                <tr>
                    <td>".$v['nom']."  ".$v['prenom']."</td>
                    <td><a href='index.php?p=adminController&id=".$v['id_u']."'>Supprimer</a> / 
                    <a href='index.php?p=adminController&id_p=".$v['id_u']."'>Définir Place </a> 
                    </td>
                </tr>";
        }
    ?>
</table>

<!--- FIN JONATHAN --->
=======
<div class="container">
  <h1 class="text-middle"><u>Listes des utilisateurs</u></h1>
   <div class="row col-xs-12 col-md-12">
    <table class="text-middle">
        <th class="text-middle">Nom / Prenom </th>
        <th class="text-middle">Email </th>
        <th class="text-middle">  Action </th>
        <?php
        foreach($r as $k => $v)
            {
        ?>
                    <tr>
                        <td class='col-xs-4 col-md-4'>
                            <?= $v['nom']."  ".$v['prenom'];?>
                        </td>
                        <td class='col-xs-4 col-md-4'>
                            <?= $v['email'];?>
                        </td>
                        <td class='col-xs-4 col-md-4'>
                            <a href="<?=BASE_URL;?>/adminController/<?=$v['id_u'];?>">Supprimer</a>
                        </td>
                    </tr>
        <?php
            }
        ?>
    </table>
    </div>
</div>
