<?php
  session_start();
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8" prefix="og: http://ogp.me/ns#">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="#">

    <!-- aperçu de ton site avec le lien sur twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content=""> <!-- lien vers une image, celle qui apparaitra sur twitter -->
    <meta name="twitter:image:alt" content="">

    <!-- aperçu de ton site avec le lien sur fb -->
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content=""> <!-- lien vers une image, celle qui apparaitra sur facebook -->
    <meta property="og:description" content="">
    <meta property="og:email" content="">
    <meta charset="utf-8">
    <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="Description" content="">
    <meta name="Keywords" content="">
    <meta name="Subject" content="">
    <meta name="Copyright" content="">
    <meta name="Author" content="">
    <meta name="Identifier-Url" content="">
    <meta name="Revisit-After" content="15 days">
    <meta name="Robots" content="all">
    <meta name="Rating" content="general">
    <meta name="Distribution" content="global">
    <meta name="Geography" content="Bordeaux">
    <meta name="Category" content="internet">
    <meta name="theme-color" content="#ffffff">


    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/border.css">
    <link rel="stylesheet" href="../assets/contact.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Théo Pontoizeau - Work.</title>
  </head>

  <body>
    <div class="main-container">
      <div class="main-content border-all">
        <div class="top border-bottom">
          <div class="link-box home border-right">
            <p class="navbar-link" id="index">home</p>
          </div>
          <div class="link-box work border-right">
            <p class="navbar-link" id="work">work</p>
          </div>
          <div class="link-box about">
            <p class="navbar-link" id="about">about</p>
          </div>
        </div>
        <div class="content hidden" id="contact-content">
          <p> so you decided to contact me :) </p>
          <p class="annotation"><i>just fill in this form and <b>lets get in touch !</b></i></p>

          <div class="contact-form" id="form">
            <form action="traitement.php" method="post">
              <input type="email" name="mail" placeholder="Your mail : theo.ptz@gmail.com" required class="border-bottom">
              <textarea type="text" name="message" placeholder="Your message : Do you love me ?" required class="border-bottom"></textarea>
              <button type="submit" name="button" class="border-all">SEND</button>
            </form>
          </div>

          <?php
            if(isset($_SESSION["notice"])){
          ?>
          <div id="notice" class="border-all" style="text-align:center;margin:auto;animation:fade 1s ease-in;color:green">
            <?= $_SESSION["notice"] ?>
          </div>
          <?php
              unset($_SESSION["notice"]);
            }
          ?>
        </div>
        <div class="bottom border-top">
          <div class="link-box">
            <nav class="cl-effect-5">
              <p id="contact-link"><span data-hover="you have done the hardest part, just click"><b>contact me :</b> pontoizeau.theo@gmail.com</span></p>
    				</nav>
          </div>
        </div>
      </div>
      <div class="main-side border-top border-right border-bottom">
        <div class="link-box side-link linkedin border-top">
          <a href="https://www.linkedin.com/in/theo-pontoizeau/">linkedin</a>
        </div>
        <div class="link-box side-link behance border-top">
          <a href="https://www.behance.net/pontoizeaue513">behance</a>
        </div>
        <div class="link-box side-link instagram border-top">
          <a href="https://www.instagram.com/hello.bethdesign/">instagram</a>
        </div>
        <div class="link-box side-link dribbble border-top">
          <a href="https://dribbble.com/bethdesign">dribbble</a>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="../main.js"></script>
    <script type="text/javascript">
      const notice = document.getElementById("notice");
    </script>
  </body>
</html>
