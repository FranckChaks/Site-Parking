<table>
    <th>Nom / Prenom </th>
    <th>  Action </th>
    <?php
    foreach($r as $k => $v)
        {
            echo "
                <tr>
                    <td>".$v['nom']."  ".$v['prenom']."</td>
                    <td><a href='index.php?p=adminController&id=".$v['id_u']."'>Supprimer</a></td>
                </tr>";
        }
    ?>
</table>
