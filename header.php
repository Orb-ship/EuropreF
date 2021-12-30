<nav class="navbar">
      <div class="nav-center">
        <div class="nav-header">
          <a href="index.php" class="nav-logo">
            <!-- <img src=""/> --> <!-- Logo -->
          </a>
          <button class="nav-btn btn">
            <i class="fas fa-align-justify"></i>
          </button>
        </div>
        <div class="nav-links">
          <a href="index.php" class="nav-link <?php if ($nav == 'index'): ?> active<?php endif; ?>">Accueil</a>
          <a href="about.php" class="nav-link <?php if ($nav == 'a propos'): ?> active<?php endif; ?>">A propos</a>
          <a href="tags.php" class="nav-link <?php if ($nav == 'tags'): ?> active<?php endif; ?>">Tags</a>
          <a href="pays.php" class="nav-link <?php if ($nav == 'pays'): ?> active<?php endif; ?>">Pays</a>

          <div class="nav-link contact-link">
            <a href="contact.php" class="btn"> contactez nous </a>
          </div>
        </div>
      </div>
    </nav>