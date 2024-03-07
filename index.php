<?php /*modèle de base index.php */
?>

<?php get_header(); ?>

<div id="entete" class="global">
  <section class="entete__header">
    <h1>Mon thème par: Alejandro</h1>
    <h2>4W4 - Conception d'interface <span>et développement web</span></h2>
    <h3>TIM - Collège de maisonneuve</h3>
    <a href="#evenement"><button class="entete__button">Événements</button></a>
  </section>
  <?php get_template_part("gabarit/vague1"); ?>
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
      <!-- un post c un enregistrement -->
      <?php if (have_posts()) :
        while (have_posts()) : the_post();
          $titreComplet = get_the_title();

          // on met le code de cours dans une variable
          $sigles = substr($titreComplet, 0, 7);

          // je trouve l'espace devant la parenthese
          $debutDuree = strpos($titreComplet, ' (');

          // j'enleve en untilisant la function trim
          $titre = trim(substr($titreComplet, 8, $debutDuree - 8));

          // extra: j'enleve les parenthèses et je les remplace
          $duree = trim(substr($titreComplet, $debutDuree));
          $duree = str_replace(['(', ')'], '', $duree);

      ?>
          <div class="carte">
            <h6><?php echo $sigles; ?></h6>
            <h5><?php echo $titre; ?></h5>
            <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
            <h6><?php echo "Durée: " . $duree; ?></h6>
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
  <?php get_template_part("gabarit/vague"); ?>
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