
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

