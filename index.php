<?php require 'components/header.php'; ?>
<?php require 'components/screenImac.php'; ?>


<main>
  <section id="productions-container">
    <div class="h2">
      <h2>Réalisations de sites web</h2>
    </div>
    <div id="cards">
      <div id="card-1">
        <a href="https://nolibois.github.io/Pyrenees/" target="_blank">
          <div class="thumbnail"></div>
          <div class="description">
            <h3>"Les Pyrénées"</h3>
            <p>Intégration Responsive</p>
            <div>
              <i class="fab fa-html5"></i>
              <i class="fab fa-css3-alt"></i>
            </div>
          </div>
        </a>
      </div>
      <div id="card-2">
        <a href="https://nolibois.github.io/Gaming_Campus/" target="_blank">
          <div class="thumbnail"></div>
          <div class="description">
            <h3>"Gaming Campus"</h3>
            <p>Intégration Responsive</p>
            <div>
              <i class="fab fa-html5"></i>
              <i class="fab fa-css3-alt"></i>
            </div>
          </div>
        </a>
      </div>
      <div id="card-3">
        <a href="https://nolibois.github.io/Print_3D_mobile_first/" target="_blank">
          <div class="thumbnail"></div>
          <div class="description">
            <h3>"Print 3D"</h3>
            <p>Mobile First</p>
            <div>
              <i class="fab fa-html5"></i>
              <i class="fab fa-sass"></i>
            </div>
          </div>
        </a>
      </div>
      <div id="card-4">
        <a href="#" target="_blank">
          <div class="thumbnail"></div>
          <div class="description">
            <h3>Prochain projet</h3>
            <p>Bientôt en ligne</p>
            <div>
              <i class=""></i>
              <i class=""></i>
            </div>
          </div>
        </a>
      </div>

      <?php demoScreen(
        "https://nolibois.github.io/Pyrenees/",
        "assets\img\pyrenees_small.png",
        "Lien vers Les Pyrénées - Réalisation - Intégration Web"
      ); ?>
    </div>
  </section>

  <section id="about-container">
    <div id="picture">
      <img src="./assets/img/BEA0799_medium.png" alt="Photo Olivier Nolibois">
    </div>
    <div id="about">
      <div class="h2">
        <h2>A propos</h2>
      </div>
      <div class="shadow"></div>
      <div>
        <h3>Développeur Web Full-stack</h3>
        <p>« Autodidacte et passionné depuis toujours pour le design character, la 3D, l'animation avec un grand intérêt pour les nouvelles technologies, ce fut alors une révélation lorsque j'ai commencé à m'intéresser au monde du web.
        </p>
        <p>Un métier capable de rassembler tout ce qui me motive: Ecouter, partager, échanger avec les clients, et l'équipe. Pouvoir répondre à des demandes pesonnalisées. Des projets différents avec des besoins différents. Travailler ? Qui parle de travailler quand on aime ce que l'on fait. »
        </p>
      </div>
    </div>
    <div id="tools">
      <h4>Mes outils de travail</h4>
      <div class="langages-icons">
        <img src="./assets/img/HTML5_128.png" alt="Logo HTML5" />
        <img src="./assets/img/css3.png" alt="Logo CSS3" />
        <img src="./assets/img/Sass-Logo-(Color).png" alt="Logo Sass" />
        <img src="/assets/img/javascript.png" alt="Logo Javascript" />
        <img src="./assets/img/php.png" alt="Logo PHP" />
        <img src="/assets/img/mysql.png" alt="Logo mySql" />
        <img src="/assets/img/bootstrap.png" alt="Logo Bootstrap" />
        <img src="/assets/img/WordPress.png" alt="Logo WordPress" />
        <img src="/assets/img/GitHub-Mark-120px-plus.png" alt="Logo Github" />
      </div>
    </div>
  </section>

  <section id="contact-container">
    <div id="contact">
      <div class="h2">
        <h2>Contact</h2>
      </div>
      <div class="shadow"></div>

      <form action="./phpmailer/send_mail.php" method="post">
        <!-- <label for="name-user">Nom</label> -->
        <input type="text" name="name" id="user-name" placeholder="Nom" required />
        <!-- <label for="first-name">Prénom</label> -->
        <input type="text" name="firstName" id="first-name" placeholder="Prénom" required />
        <!-- <label for="email">Email</label> -->
        <input type="text" name="email" id="email" placeholder="email" required />
        <!-- <label for="phone">Téléphone</label> -->
        <input type="text" name="phone" id="phone" placeholder="Téléphone" />
        <!-- <label for="subject">Objet du message</label> -->
        <input type="text" name="subject" id="subject" placeholder="Ici, c'est le sujet de votre messasge" required />
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Laissez-moi vos impressions" required></textarea>
        <button type="submit">Envoyer</button>
      </form>
    </div>
    <div id="map"></div>
  </section>
</main>

<?php require 'components/footer.php'; ?>