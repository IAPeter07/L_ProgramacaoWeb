<!DOCTYPE html>
<html>
    <body>
        <?php 
            //Radio Button
            echo("<b>Seus sistema operacional é: </b>" . $_POST["sistema"]. "<br><br>");

            //Checkbox
            if(isset($_POST["numeros"]))
            {
                echo("<b>Os números de sua preferencia são:</b><BR>");

                //Faz loop pelo array dos numeros
                foreach($_POST["numeros"] as $numero)
                {
                    echo("-" . $numero . "<BR><br>");
                }
            }
            else{
                echo("<b>Você não escolheu número preferido!</b><br><br>");
            }
            
            echo("<b>Seu processador é: </b>" . $_POST["processador"] . "<BR>");
        ?>
    </body>
</html>