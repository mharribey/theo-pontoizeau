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
        ?>
          <script type="text/javascript">
              notice.style.display = "block";
              notice.innerHTML = "Your message has been sent ! Well done :)"
              setTimeout(function(){
                notice.style.display = "none";
              },1000)
          </script>
        <?php
      }
      else // Non envoyé
      {
        ?>
          <script type="text/javascript">
            notice.style.display = "block";
            notice.innerHTML = "Your message could not be sent... try again?"
            setTimeout(function(){
              notice.style.display = "none";
            },1000)
          </script>
        <?php
      }
    }


    header("Location: contact.php");

    exit();
