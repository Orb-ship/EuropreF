<?php 
$title = 'Contact';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <!-- main css -->
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <!-- nav  -->
    <?php require 'header.php' ?>
    <!-- end of nav -->
    <main class="page">
     <section class="contact-container">
          <article class="contact-info">
            <h3>Contactez nous!</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
              Et, omnis accusantium corrupti maxime nulla perspiciatis? 
              Iure dolore quam, molestiae tempora rem itaque a deleniti, 
              nostrum cumque corporis repellat quisquam quod.
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
              Expedita aut doloremque, dolore eaque laudantium cum eligendi doloribus veniam ab placeat provident eveniet quibusdam saepe aspernatur.
            </p>
          </article>
          <article>
            <form class="form contact-form">
              <div class="form-row">
                <label html="name" class="form-label">Votre nom</label>
                <input type="text" name="name" id="name" class="form-input" />
              </div>
              <div class="form-row">
                <label html="email" class="form-label">Votre email</label>
                <input type="text" name="email" id="email" class="form-input" />
              </div>
              <div class="form-row">
                <label html="message" class="form-label">Message</label>
                <textarea name="message" id="message" class="form-textarea"></textarea>
              </div>
              <button type="submit" class="btn btn-block">
                Envoyer
              </button>
            </form>
          </article>
        </section>
    
    <script src="./js/app.js"></script>
  </body>
</html>