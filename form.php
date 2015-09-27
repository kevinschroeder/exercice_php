<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#">
  <head>
    <?php
      include 'form.inc.php';
    ?>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <meta charset="utf-8">
    <title>Formulaire ESIAJ</title>
  </head>
  <body>
    <div class="container">
      <h1>Rejoins les bleu!</h1>
      <p class="infos">
        Le Cercle des étudiants de l’ESIAJ recrute. Ils souhaitent publier une page résumant les bonnes raisons de devenir membre, avec un formulaire d’inscription.
Ce formulaire sera, une fois validé par le client, transmis notamment par les réseaux sociaux mais également utilisé par les recruteurs du cercle lors de leurs démarches à l’école via leur smartphone.

      </p>
      <?php

        if ($_POST) {


          if($_POST["user_email"] != ""){
            die("Vas t'en vieux spammeur");
          }

          $nom = trim(strip_tags($_POST["nom"]));
          $prenom = trim(strip_tags($_POST["prenom"]));
          $naissance = $_POST["naissance"];
          $email = trim(strip_tags($_POST["email"]));
          $adresse = trim(strip_tags($_POST["adresse"]));
          $ville = trim(strip_tags($_POST["ville"]));
          $commune = trim(strip_tags($_POST["commune"]));
          $esperance = $_POST["esperance"];
          $erreur = false;
          $message = "Message de " . $nom .' '. $prenom . " envoyé depuis l'adresse " . $email . "\r\n" . "Adresse : " . $adresse . ", " . $ville . ", " . $commune . "\r\n" . "Si je rejoins les bleus, c'est pour " . $esperance;

          function sujet($nom, $prenom, $email){
            return "Message de " . $nom .' '. $prenom . " envoyé depuis l'adresse " . $email;
          }

          $sujet = sujet($nom, $prenom, $email);


          if ($nom == ''){
            echo "<p class='wrong'>Désolé, mais il semblerait que vous n'ayez pas entrer votre nom dans la case indiquée!</p>";
            $erreur = true;
          }

          if ($prenom == ''){
            echo "<p class='wrong'>Désolé, mais il semblerait que vous n'ayez pas entrer votre prénom dans la case indiquée!</p>";
            $erreur = true;
          }

          if (empty($naissance)){
            echo "<p class='wrong'>Pardon, mais il semblerait que la date de naissance n'a pas été entré !</p>";
            $erreur = true;
          }

          if ($email == '' ){
            echo "<p class='wrong'>Oups, il semblerait qu'aucun mail n'a été entré à l'endroit indiqué !</p>";
            $erreur = true;
          }

          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p class='wrong'>Mince, l'email n'est pas valide. Merci d'entrer un mail valide contenant '@'.</p>";
            $erreur = true;
          }

          if (empty($esperance)) {
            echo "<p class='wrong'>Oups, juste un petit détail à fournir! Quelles sont tes espérances en tant que bleu ? Tu pourras sélectionner ta réponse en cochant une des cases indiquées.</p>";
            $erreur = true;
          }

          if ($erreur == false){
            $result = mail ('noxoor@gmail.com', $sujet, $message);

            if ($result){
              die ("<p class='good'>Parfait, ton formulaire est envoyé, merci d'avoir pris le temps de le remplir !</p>");
            } else {
              die ("<p class='wrong'> Erreur de l'envoi du mail </p>");
            }
          }
        }


      ?>


      <form method="post" class="pure-form pure-g pure-u-1" >

        <fieldset class="pure-form-stacked">

          <label for="nom">Nom</label>
          <input type="text" name="nom" id="nom" value= "<?php if (isset($_POST['nom'])){echo $_POST['nom'];} ?>">

          <label for="prenom">Prénom</label>
          <input type="text" name="prenom" id="prenom" value="<?php if (isset($_POST['prenom'])){echo $_POST['prenom'];} ?>">

          <label for="naissance">Date de naissance</label>
          <input type="date" name="naissance" value="<?php if(!empty($naissance)){ echo $_POST['naissance'];} ?>">

          <label for="email">Email</label>
          <input type="email" name="email" id="email" value="<?php if (isset($_POST['email'])){echo $_POST['email'];} ?>">

        </fieldset>


        <fieldset class="pure-form-stacked">

          <label for="adresse">Adresse</label>
          <textarea name="adresse" id="adresse"><?php if (isset($_POST['adresse'])){echo $_POST['adresse'];} ?></textarea>

          <label for="ville">Ville</label>
          <input type="text" name="ville" id="ville" value="<?php if (isset($_POST['ville'])){echo $_POST['ville'];} ?>">

          <label for="commune">Commune</label>
          <input type="text" name="commune" id="commune" value="<?php if (isset($_POST['commune'])){echo $_POST['commune'];} ?>">

        </fieldset>


        <fieldset class="pure-g pure-u-1">

          <p>« Pourquoi souhaites-tu devenir « bleu », qu’espères-tu? »</p>

          <label for="alcoolique" class="pure-radio">
            <input type="radio" name="esperance" id="alcoolique" value="boire" <?php echo ($esperance=='boire')?'checked':'' ?>>
            Essayer de devenir alcoolique
          </label>


          <label for="good_moment" class="pure-radio">
            <input type="radio" name="esperance" id="good_moment" value="apprécier" <?php echo ($esperance=='apprécier')?'checked':'' ?>>
            Passer un bon moment en communauté
          </label>


          <label for="bar" class="pure-radio">
            <input type="radio" name="esperance" id="bar" value="profiter" <?php echo ($esperance=='profiter')?'checked':'' ?>>
            Avoir des verres gratuits au bar
          </label>

          <label for="maitre" class="pure-radio">
            <input type="radio" name="esperance" id="maitre" value="dominer" <?php echo ($esperance=='dominer')?'checked':'' ?>>
            Devenir le maître des baptisés
          </label>

        </fieldset>


        <fieldset>
          <label class="user_email" for="user_email">
            <input type="text" name="user_email" id="user_email" value="">
          </label>
        </fieldset>


        <fieldset>
          <input type="submit" name="submit" class="pure-button pure-button-primary">
        </fieldset>
      </form>
    </div>



  </body>
</html>
