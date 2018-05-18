<?php
    session_start();

    $destinataire = 'matharribey@gmail.com';

    $expediteur = htmlspecialchars($_POST['mail']);
    $message = htmlspecialchars($_POST["message"]);
    $objet = 'Contact - Site';

    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
    $headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
    $headers .= 'From:'.$expediteur."\n"; // Expediteur
    $headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
    $message = '<div style="width: 100%;font-weight:lighter;"> Le message est : '.$message.'</div>';

    if($destinataire != null && $objet != null && $message != null){
      if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
      {
        $_SESSION["notice"] = "<p>Your message has been sent ! Well done :)</p>";
      }
      else // Non envoyé
      {
        $_SESSION["notice"] = "<p>Your message could not be sent... try again?</p>";
      }
    }


    header("Location: contact.php");

    exit();
