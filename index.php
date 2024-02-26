<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>mon thème</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css'; ?>" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- Font awesome pour les icônes du footer -->
  <script src="https://kit.fontawesome.com/f4dd89e5b2.js" crossorigin="anonymous"></script>
  <!-- Intégration de la police Google Material icônes -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
</head>

<body>
  <div id="entete" class="global">
    <header class="entete__header">
      <h1>Mon thème par: Alejandro</h1>
      <h2>4W4 - Conception d'interface <span>et développement web</span></h2>
      <h3>TIM - Collège de maisonneuve</h3>
      <a href="#evenement"><button class="entete__button">Événements</button></a>
    </header>
    <div class="vague">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-secondaire)"></path>
      </svg>
    </div>
  </div>
  <div id="accueil" class="global">
    <section class="accueil__section">
      <h2>Accueil</h2>
      <div class="section__cours">

        <!-- /*
        if (have_posts()) {
        while (have_posts()) {
        the_post();
        the_title('<p>', '</p>');
        $contenu = get_the_content();
        $contenu = wp_trim_words($contenu, 10);
        echo $contenu;
        };
        }*/ -->

        <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <div class="carte">
              <h5><?php the_title(); ?></h5>
              <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>


      </div>
    </section>
  </div>

  <div id="galerie" class="global diagonal">
    <section class="accueil__galerie">
      <h2>Galerie</h2>
      <blockquote>
        Comment utiliser un blockquote? La question du million
      </blockquote>
    </section>
  </div>

  <div id="evenement" class="global">
    <section class="accueil__evenement">
      <h2>Événement</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lorem
        odio, mollis eu enim nec, varius porta urna. Ut congue ipsum non leo
        iaculis elementum. Phasellus elementum lacinia urna, id accumsan nibh
        iaculis vel. Nullam eleifend at felis quis cursus. Orci varius natoque
        penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        Nunc ac tortor est.
      </p>
    </section>
    <div class="vague">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-principale)"></path>
      </svg>
    </div>
  </div>
  <div id="footer" class="global">
    <footer class="accueil__footer">
      <div class="recherche">
        <input type="text" placeholder="Search..." />
        <div class="rechercher"></div>
      </div>

      <div class="sociaux">
        <a href="https://www.behance.net/alex_ydr3dc3">
          <i class="fa-brands fa-square-behance"></i></a>
        <a href="https://www.instagram.com/la_legendro/">
          <i class="fa-brands fa-square-instagram"></i></a>
        <a href="https://www.facebook.com/AYDRgrahicdesign"><i class="fa-brands fa-square-facebook"></i></a>
      </div>
    </footer>
  </div>
</body>

</html>