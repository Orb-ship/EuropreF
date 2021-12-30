<?php 
$title = 'Tags';
$nav = 'tags';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title ?></title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />
    <!-- normalize -->
    <link rel="stylesheet" href="./css/normalize.css" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <!-- nav  -->
    <?php require 'header.php' ?>
    <!-- end of nav -->
    <main class="page">
         <section class="tags-wrapper">
          <!-- single tag -->
              <a href="./tags/viande.php" class="tag">
                <h5>Viande</h5>
                <p>x Plats</p>
              </a>
            <!-- end of single tag -->
          <!-- single tag -->
              <a href="./tags/pain.php" class="tag">
                <h5>Pain / Pates / Galettes</h5>
                <p>x Plats</p>
              </a>
            <!-- end of single tag -->
          <!-- single tag -->
              <a href="../Europe Food/tags/poissons.html" class="tag">
                <h5>Poissons</h5>
                <p>x Plats</p>
              </a>
            <!-- end of single tag -->
          <!-- single tag -->
              <a href="../Europe Food/tags/sauces.html" class="tag">
                <h5>Sauces</h5>
                <p>x Plats</p>
              </a>
            <!-- end of single tag -->
          <!-- single tag -->
              <a href="../Europe Food/tags/dessert.html" class="tag">
                <h5>Dessert</h5>
                <p>x Plats</p>
              </a>
            <!-- end of single tag -->
            <!-- single tag -->
            <a href="../Europe Food/tags/assortiment.html" class="tag">
              <h5>Assortiment</h5>
              <p>x Plats</p>
            </a>
          <!-- end of single tag -->
          <!-- single tag -->
          <a href="# " class="tag">
            <h5>Autre</h5>
            <p>x Plats</p>
          </a>
        <!-- end of single tag -->
        </section>
    </main>
    <script src="./js/app.js"></script>
  </body>
</html>