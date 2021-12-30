<?php 
$title = 'Accueil'; 
$nav = 'index';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title ?></title>
    <link rel="shortcut icon" href="" type="image/x-icon" /> <!-- Logo head -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link rel="stylesheet" href="./css/main.css" />

    <!-- Librairies -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </head>
  <body>
    <!-- nav  -->
    <?php require './header.php' ?>
    <!-- Fin de la nav -->
    <!-- main -->
    <main class="page">
      <!-- header -->
      <?php 
        require './index architecture/hero.php';
      ?>
      <!-- Fin du header -->
      <section class="recipes-container">
        <!-- Tags -->
        <?php
            require './index architecture/repas.php';
        ?>
        <!-- Fin Tags -->
        <!-- Liste des repas -->
        <div class="recipes-list">
          <!-- Repas 1 -->
          <?php 
            require './index architecture/baguette.php';
          ?>
          <!-- Fin du repas 1 -->
          <!-- Repas 2 -->
          <?php 
            require './index architecture/bigos.php';
          ?>
          <!-- Fin du repas 2 -->
          <!-- Repas 3 -->
          <?php 
            require './index architecture/biscuits_suedois.php';
          ?>
          <!-- Fin du repas 3 -->
          <!-- repas 4 -->
          <?php 
            require './index architecture/bitterballen.php'; 
          ?>
          <!-- Fin du repas 4 -->
          <!-- repas 5 -->
          <?php 
            require './index architecture/boeuf-bourguignon.php'
          ?>
          <!-- Fin du repas 5 -->
          <!-- Repas 6 -->
          <?php 
            require './index architecture/burek.php'; 
          ?>
          <!-- Fin du repas 6 -->
          <!-- Repas 7-->
          <?php 
            require './index architecture/cafe-liegeois.php'; 
          ?>
          <!-- Fin du repas 7 -->
          <!-- Repas 8 -->
          <?php
            require './index architecture/carbonade-flamande.php'; 
          ?>
          <!-- Fin du repas  -->
          <!-- Repas 9 -->
          <?php 
            require './index architecture/cassoulet.php'; 
          ?>
          <!-- Fin du repas 9 -->
          <!-- Repas 10 -->
          <?php 
            require './index architecture/cevapi.php'; 
          ?>
          <!-- Fin du repas 10 -->
          <!-- single recipe -->
          <?php 
            require './index architecture/choucroute.php';
          ?>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <?php 
            require 'index architecture/croissant.php';
          ?>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <?php 
            require 'index architecture/croquettes_de_morue.php';
          ?>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <?php 
            require 'index architecture/escargot-persillé.php';
          ?>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <?php 
            require 'index architecture/frites.php';
          ?>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <?php 
            require 'index architecture/fritule.php';
          ?>
          <!-- end of single recipe -->
          <?php 
            require 'index architecture/fromage-kainuu.php';
          ?>
          <!-- single recipe -->
          <?php 
            require 'index architecture/galette-bretonne.php';
          ?>
          <!-- end of single recipe -->
          <?php 
            require 'index architecture/galette-luxembourgeoise.php';
          ?>
          <!-- single recipe -->
          <?php 
            require 'index architecture/gaspacho.php';
          ?>
          <!-- single recipe -->
          <?php 
            require 'index architecture/gibanica.php';
          ?>
          <!-- single recipe -->
          <?php 
            require 'index architecture/gnocchis.php';
          ?>
          <!-- Repas 1 -->
          <?php 
            require 'index architecture/goulash.php'
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/gratin-auphinois.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/crumble-irlandais.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/ragout-irlandais.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/ragout-boeuf-scandinave.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/karjalanpiirakka.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/kasekrainer.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/kibinai-trakai.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/kissel.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/koupepia.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/lasagne.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/leberkassemmel.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/pates-carbonara.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/pastizzi.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/hermelin.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/paella.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/pain-cramique.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/pain-epice-lettonie.php';
          ?>
          <!--  -->
          <?php 
            require 'index architecture/pain-pita.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/pasteis-de-nata.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/peka.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/pizza.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/poivrons-farcies.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/potica.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/paprika.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/piri-piri.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/quiche-lorraine.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/ratatouille.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/reisfleisch.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/jarret-de-porc.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/rosol.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/rouleau-porc.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/sarmale.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/sachertorte.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/salade-grecque.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/salade-pdt.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/saltibarsciai.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/cevapcici.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/shopska.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/skruzdelynas.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/halusky.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/smorrebrod.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/soupe-haricots.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/steak-tartare.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/stjerneskud.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/stroopwafel.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/strudel-pommes.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/tarator.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/tortilla.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/varskeciai.php';
          ?>
          <!-- Fin du repas 1 -->
          <?php 
            require 'index architecture/wuzetka.php';
          ?>
          <!-- Fin du repas 1 -->
          
        </div>
        <!-- end of recipes list -->
      </section>
    </main>
    <!-- end of main -->
    <!-- footer -->
    <!-- <footer class="footer">
      <div class="container-footer">
          <div class="row">
              <div class="footer-col">
                  <h4>Europe Food</h4>
                  <ul>
                      <li><a href="#">A propos</a></li>
                      <li><a href="#">Nos services</a></li>
                      <li><a href="#">Partenaires</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>Aide</h4>
                  <ul>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">contact</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>Suivez nous</h4>
                  <div class="social-links">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-snapchat"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </footer> -->

    <script src="./js/app.js"></script>
    <script>
  AOS.init();
</script>
  <!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>