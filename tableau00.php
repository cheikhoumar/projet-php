<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Mon tableau</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <div>
    <fieldset >
    <legend>Votre tableau</legend>
        <table>
        <form method="post" action="tableau00.php">

                <tr>
                <td>Entrer un numéro :</td>
            <td> <select name="choix">
                <option value="">Nombre</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select> </td>
            <td><input type="submit" name="valider" value="Générer"></td>

</tr>
        </form>
        </table>
        </fieldset>
        <?php
        if(isset($_POST['valider']) && isset($_POST['choix']))
        extract($_POST);
        {
            if($choix=="Nombre")
            {
                echo"Veuillez choisir un nombre svp. <br>";
            }
            else
            {
            echo"<br/><br/><br/><br/><table  border='' width='500' height='500'>";
            $cR=0; $cB= $choix-1;
            for($i=0;$i < $choix;$i++)
            {
                echo"<tr>";
                for($j=0;$j<$choix;$j++)
                {
                    if ($j==$cR && $j==$cB)
                    {
                        echo"<td style='background-color: green;'></td>";
                    }
                    elseif ($j==$cB)
                    {
                        echo"<td style='background-color: blue;'></td>";
                    }
                    elseif ($j==$cR)
                    {
                        echo"<td style='background-color: gray;'></td>";
                    }
                    else
                    {
                        echo"<td style='background-color: white;'></td>";
                    }
                }
                $cR++; $cB--;
                echo"</tr>";
            }
            echo"</table>";
            }
        }
        ?>
    </div>
    </body>
</html>
