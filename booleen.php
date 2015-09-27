<html>
   <head>
       <meta charset="UTF-8">
        <style>
            fieldset {
                border: none;
                padding: 0;
                margin: 0;
            }
            body {
                font-family: Helvetica Neue;
                font-weight: 200;
            }
            
            a {
                text-decoration: none;
                font-weight: 500;
                color: #333;
                font-size: 20px;
            }
            
            a:hover {
                text-decoration: underline;
                font-weight: 500;
            }
            
            p {
                color: red;
                font-weight: 500;
                padding-bottom: 20px;
            }

            .container {
                width: 100px;
            }
            .good {
                color: #00B900;
            }
            .wrong span {
                font-size: 26px;
            }

            form {
                width: 340px;
                padding: 40px;
                display: block;
                border: 1px #BBB solid;
                border-radius: 4px;
                margin: 0 auto;
            }

            label {
                margin-top: 10px;
                display: block;
                padding: 5px;
                font-weight: 500;
            }
            
            .yes_no {
                display: inline-block;
                font-weight: 200;
            }

            span {
                font-weight: 800;
                margin-right: 5px;
            }

            input {
                padding: 4px;
                margin-top: 7px;
                display: inline-block;
                border: #DDD 1px solid;
                border-radius: 2px;
            }

            form input:last-child {
                border: none;
                background: linear-gradient(#0096ff,#005dff);
                color: #EEE;
                height: 40px;
                width: 120px;
                font-size: 16px;
                margin-top: 20px;
                border-radius: 4px;
                box-shadow: 2px 0px 8px 0px rgba(0, 0, 0, .2);
                -webkit-transition: .4s all;
                outline: none;
                cursor: pointer;
            }

            form input:last-child:hover {
                box-shadow: 2px 0px 8px 2px rgba(0, 0, 0, .3);
            }
    </style>
   </head>
    <body>
        <form method="get">
           <fieldset>


<?php 

error_reporting(E_WARNING | E_ERROR);

$courses = $_GET["courses"];
$voirAmi = $_GET["ami"];
$passerAuMcDo = $_GET["macdo"];
$chercherDrogue = $_GET["drogue"];
$allerTravailler = $_GET["travail"];
$chercherEssence = $_GET["essence"];


    if(isset($_GET['SubmitButton'])){
        
            if(($_GET['courses'] == 'false') && ($_GET['ami'] == 'false') && ($_GET['macdo'] == 'true') && ($_GET['drogue'] == 'true') && ($_GET['travail'] == 'true') && ($_GET['essence'] == 'true')){
            echo "<p>Donc tu veux bouffer comme un porc, te camer et aller travailler ? Dégage d'ici.</p>";
    }
            else if(($_GET['courses'] == 'true') && ($_GET['ami'] == 'true') && ($_GET['macdo'] == 'true') && ($_GET['drogue'] == 'true') && ($_GET['travail'] == 'true') && ($_GET['essence'] == 'true')){
            echo "<p>Ton objectif c'est de faire le tour du monde avec ma bagnole ?</p>";
    }

            else if(($_GET['courses'] == 'false') && ($_GET['ami'] == 'true') && ($_GET['macdo'] == 'false') && ($_GET['drogue'] == 'true') && ($_GET['travail'] == 'true') && ($_GET['essence'] == 'true')){
            echo "<p>À part fûmer des pétards tu feras que dalle, te fous pas de moi.</p>";
    }

            else if(($_GET['courses'] == 'false') && ($_GET['ami'] == 'true') && ($_GET['macdo'] == 'true') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'true') && ($_GET['essence'] == 'true')){
            echo "<p>Hors de question, tu vas être en retard au boulot si tu vas voir ton pote.</p>";
    }

            else if(($_GET['courses'] == 'false') && ($_GET['ami'] == 'true') && ($_GET['macdo'] == 'true') && ($_GET['drogue'] == 'true') && ($_GET['travail'] == 'false') && ($_GET['essence'] == 'true')){
            echo "<p>J'espère que tu rigoles. Vas chercher de l'essence ça suffira.</p>";
    }

            else if(($_GET['courses'] == 'false') && ($_GET['ami'] == 'true') && ($_GET['macdo'] == 'true') && ($_GET['drogue'] == 'true') && ($_GET['travail'] == 'true') && ($_GET['essence'] == 'false')){
            echo "<p>Très bonne blague, hors de ma vue, petit con.</p>";
    }

            else if(($_GET['courses'] == 'true') && ($_GET['ami'] == 'false') && ($_GET['macdo'] == 'false') && ($_GET['drogue'] == 'true') && ($_GET['travail'] == 'true') && ($_GET['essence'] == 'true')){
            echo "<p>Si tu me fais la promesse de ne pas aller chercher de la drogue, je peux encore accepter.</p>";
    }

            else if(($_GET['courses'] == 'true') && ($_GET['ami'] == 'false') && ($_GET['macdo'] == 'true') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'false') && ($_GET['essence'] == 'true')){
            echo "<p>Tu ne manges pas très équilibré en ce moment, mais après une dure journée de travail et contre un plein d'essence je veux encore bien accepter, c'est bon !</p>";
    }

            else if(($_GET['courses'] == 'true') && ($_GET['ami'] == 'false') && ($_GET['macdo'] == 'true') && ($_GET['drogue'] == 'true') && ($_GET['travail'] == 'true') && ($_GET['essence'] == 'false')){
            echo "<p>Ton but c'est d'arriver défoncer au boulot, gros sac ?</p>";
    }

            else if(($_GET['courses'] == 'true') && ($_GET['ami'] == 'true') && ($_GET['macdo'] == 'false') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'true') && ($_GET['essence'] == 'true')){
            echo "<p>Si tu me prends de l'essence, je veux bien. Par contre ne reste pas trop longtemps chez ton ami. Je ne veux pas que tu arrives en retard au boulot.</p>";
    }

            else if(($_GET['courses'] == 'true') && ($_GET['ami'] == 'true') && ($_GET['macdo'] == 'false') && ($_GET['drogue'] == 'true') && ($_GET['travail'] == 'false') && ($_GET['essence'] == 'true')){
            echo "<p>T'as cru que c'était la belle vie ou quoi fils ?</p>";
    }

            else if(($_GET['courses'] == 'false') && ($_GET['ami'] == 'true') && ($_GET['macdo'] == 'true') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'true') && ($_GET['essence'] == 'true')){
            echo "<p>Désolé fils, après peut-être que si tu fais les courses en plus...</p>";
    }

            else if(($_GET['courses'] == 'true') && ($_GET['ami'] == 'false') && ($_GET['macdo'] == 'true') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'true') && ($_GET['essence'] == 'true')){
            echo "<p class='good'>Bah écoute pour ces deux services rendu, je ne pourrais refuser, la voiture est à toi !</p>";
            echo '<img src="http://www.carexpo.info/wp-content/uploads/2013/04/BMW-328d-with-rear-wheel-drive-and-BWM-xDrive-all-wheel-drive.jpg" width="340px">';
    }

            else if(($_GET['courses'] == 'true') && ($_GET['ami'] == 'true') && ($_GET['macdo'] == 'false') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'true') && ($_GET['essence'] == 'true')){
            echo "<p class='good'>T'es très serviable aujourd'hui ! Prends là elle est à toi !</p>";
            echo '<img src="http://www.carexpo.info/wp-content/uploads/2013/04/BMW-328d-with-rear-wheel-drive-and-BWM-xDrive-all-wheel-drive.jpg" width="340px">';
    }

            else if(($_GET['courses'] == 'true') && ($_GET['ami'] == 'true') && ($_GET['macdo'] == 'true') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'false') && ($_GET['essence'] == 'true')){
            echo "<p class='good'>T'es très serviable aujourd'hui ! Prends là elle est à toi !</p>";
            echo '<img src="http://www.carexpo.info/wp-content/uploads/2013/04/BMW-328d-with-rear-wheel-drive-and-BWM-xDrive-all-wheel-drive.jpg" width="340px">';
    }
            else if(($_GET['courses'] == 'true') && ($_GET['ami'] == 'true') && ($_GET['macdo'] == 'true') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'true') && ($_GET['essence'] == 'false')){
            echo "<p>Désolé, je préfère encore que tu ailles au travail directement.</p>";
    }
            else if(($_GET['courses'] == 'true') && ($_GET['ami'] == 'true') && ($_GET['macdo'] == 'true') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'false') && ($_GET['essence'] == 'true')){
            echo "<p>Peut-être que si tu ne mangeais pas gras j'accepterais...</p>";
    }   
            else if(($_GET['courses'] == 'true') && ($_GET['ami'] == 'true') && ($_GET['macdo'] == 'true') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'false') && ($_GET['essence'] == 'true')){
            echo "<p>Peut-être que si tu ne mangeais pas gras j'accepterais...</p>";
    }
             else if(($_GET['courses'] == 'true') && ($_GET['ami'] == 'false') && ($_GET['macdo'] == 'false') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'false') && ($_GET['essence'] == 'false')){
            echo "<p class='good'>C'est ok, merci pour ce service fiston !</p>";
            echo '<img src="http://www.carexpo.info/wp-content/uploads/2013/04/BMW-328d-with-rear-wheel-drive-and-BWM-xDrive-all-wheel-drive.jpg" width="340px">';
    }   
            else if(($_GET['courses'] == 'false') && ($_GET['ami'] == 'false') && ($_GET['macdo'] == 'false') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'false') && ($_GET['essence'] == 'true')){
            echo "<p class='good'>C'est ok, merci pour ce service fiston !</p>";
            echo '<img src="http://www.carexpo.info/wp-content/uploads/2013/04/BMW-328d-with-rear-wheel-drive-and-BWM-xDrive-all-wheel-drive.jpg" width="340px">';
    }
            else if(($_GET['courses'] == 'true') && ($_GET['ami'] == 'false') && ($_GET['macdo'] == 'false') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'false') && ($_GET['essence'] == 'true')){
            echo "<p class='good'>C'est ok, merci pour ces services fiston !</p>";
            echo '<img src="http://www.carexpo.info/wp-content/uploads/2013/04/BMW-328d-with-rear-wheel-drive-and-BWM-xDrive-all-wheel-drive.jpg" width="340px">';
    }

            else if(($_GET['courses'] == 'false') && ($_GET['ami'] == 'true') && ($_GET['macdo'] == 'false') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'false') && ($_GET['essence'] == 'false')){
            echo "<p>Non, tu es déjà trop sorti ces temps-ci!</p>";
    }
            else if(($_GET['courses'] == 'false') && ($_GET['ami'] == 'false') && ($_GET['macdo'] == 'true') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'false') && ($_GET['essence'] == 'false')){
            echo "<p>Mange équilibré pour une fois!</p>";
    }
            else if(($_GET['courses'] == 'false') && ($_GET['ami'] == 'false') && ($_GET['macdo'] == 'false') && ($_GET['drogue'] == 'true') && ($_GET['travail'] == 'false') && ($_GET['essence'] == 'false')){
            echo "<p>Tu te fous de ma gueule j'espère ?</p>";
    }
            else if(($_GET['courses'] == 'false') && ($_GET['ami'] == 'false') && ($_GET['macdo'] == 'false') && ($_GET['drogue'] == 'false') && ($_GET['travail'] == 'true') && ($_GET['essence'] == 'false')){
            echo "<p class='good'>Pas de problème fils, ramène la voiture dès que tu rentres !</p>";
            echo '<img src="http://www.carexpo.info/wp-content/uploads/2013/04/BMW-328d-with-rear-wheel-drive-and-BWM-xDrive-all-wheel-drive.jpg" width="340px">';
            }
            else {
            echo "<p>Nooooon non non hors de question !</p>";
        }

}

?>
               <label name="courses">Faire les courses :</label>
                <input type="radio" value="true" name="courses" id="oui__courses"  <?php echo ($courses=='true')?'checked':'' ?>><label class="yes_no" for="oui__courses">Oui</label>  

                <input type="radio" value="false" name="courses" id="non__courses"  <?php echo ($courses=='false')?'checked':'' ?>><label class="yes_no" for="non__courses" >Non</label>
                <br>

                <label name="ami">Voir un(e) ami(e) :</label>
                <input type="radio" value="true" name="ami" id="oui__ami"  <?php echo ($voirAmi=='true')?'checked':'' ?>><label class="yes_no" for="oui__ami" >Oui</label>
                <input type="radio" value="false" name="ami" id="non__ami"  <?php echo ($voirAmi=='false')?'checked':'' ?>><label class="yes_no" for="non__ami">Non</label>
                <br>

                <label name="macdo">Passer au MacDo :</label>
                <input type="radio" value="true" name="macdo" id="oui__macdo"  <?php echo ($passerAuMcDo=='true')?'checked':'' ?>><label class="yes_no" for="oui__macdo">Oui</label>
                <input type="radio" value="false" name="macdo" id="non__macdo"  <?php echo ($passerAuMcDo=='false')?'checked':'' ?>><label class="yes_no" for="non__macdo">Non</label>
                <br>

                <label name="drogue">Chercher de la drogue :</label>
                <input type="radio" value="true" name="drogue" id="oui__drogue" <?php echo ($chercherDrogue=='true')?'checked':'' ?> ><label class="yes_no" for="oui__drogue">Oui</label>
                <input type="radio" value="false" name="drogue" id="non__drogue" <?php echo ($chercherDrogue=='false')?'checked':'' ?>><label class="yes_no" for="non__drogue">Non</label>
                <br>

                <label name="travail">Aller travailler :</label>
                <input type="radio" value="true" name="travail" id="oui__travail" <?php echo ($allerTravailler=='true')?'checked':'' ?>><label class="yes_no" for="oui__travail">Oui</label>
                <input type="radio" value="false" name="travail" id="non__travail" <?php echo ($allerTravailler=='false')?'checked':'' ?>><label class="yes_no" for="non__travail">Non</label>
                <br>

                <label name="essence">Chercher de l'essence :</label>
                <input type="radio" value="true" name="essence" id="oui__essence" <?php echo ($chercherEssence=='true')?'checked':'' ?>><label class="yes_no" for="oui__essence">Oui</label>
                <input type="radio" value="false" name="essence" id="non__essence" <?php echo ($chercherEssence=='false')?'checked':'' ?>><label class="yes_no" for="non__essence">Non</label>
                <br>

                <input name="SubmitButton" type="submit">
            </fieldset>
        </form>
    </body>
    <a href='https://github.com/noxoor/exercice_php/blob/master/exercice.php' target="_blank">Lien GitHub</a>
</html>
