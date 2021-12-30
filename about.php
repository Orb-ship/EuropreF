<?php 
$title = 'A propos'; 
$nav = 'a propos';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title ?></title>
    <!-- normalize -->
    <link rel="stylesheet" href="./css/normalize.css" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <!-- main css -->
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <!-- nav  -->
    <?php require 'header.php' ?>
    <!-- end of nav -->
    <main class="page">
      <section class="about-page">
        <article>
          <h2>Qu'est ce qu'Europe Food?</h2>
          <p>
              Europe food, c'est un site web ou l'on présente les différents plats typiques de chaque pays de l'union européenne.<br>
              Sur ce site, nous ferons une description accompagné d'une image de chaque plat ainsi que leur histoire.<br>
              En consultant ce site, vous pourrez aussi découvrir et préparer ces différents plats chez vous<br>
              La partie codage a été produite par Tristan, et la partie graphique et littéraire a été produite par Alex, Mattéo et Nasser.
          </p>
          <p>
            
          </p>
        </article>
        <!-- needs fixes -->
        <img src="./assets/recipes/Brioche.jpg"alt="Person Pouring Salt in Bowl"class="img about-img"/>
      </section>
      
    </main>
    <script src="./js/app.js"></script>
  </body>
</html>