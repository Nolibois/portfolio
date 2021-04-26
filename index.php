<?php
require './phpmailer/send_mail.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <title>Portfolio</title>

  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>
  <header>
    <nav>
      <h1>Olivier Nolibois</h1>
      <div class="hr-container">
        <img src="./assets/img/Logo_ON_2.png" alt="Logo Portfolio">
        <hr>
      </div>
      <div id="nav-container">
        <ul>
          <li><a href="#productions-container">Réalisations</a></li>
          <li><a href="#about-container">A propos</a></li>
          <li><a href="#contact-container">Contact</a></li>
          <li><a href="./pages/cv.html">CV</a></li>
          <li><a href="./pages/hobbies.html">Intérêts</a></li>
        </ul>
        <div class="social-icons">
          <div class="github-icon">
            <a href="https://github.com/Nolibois" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" class="svg-inline--fa fa-github fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
              </svg>
            </a>
          </div>
          <div class="linkedin-icon">
            <a href="https://www.linkedin.com/in/olivier-nolibois-306064165" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
              </svg>
            </a>
          </div>
          <div class="tumblr-icon">
            <a href="https://nolivsansnoyau.tumblr.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90.21 159.34">
                <g id="Calque_2" data-name="Calque 2">
                  <g id="Layer_1" data-name="Layer 1">
                    <path fill="currentColor" d="M63.6,159.34c-24,0-41.82-12.33-41.82-41.82V70.28H0V44.7C24,38.48,34,17.86,35.14,0H60V40.56h29V70.28H60v41.13C60,123.74,66.25,128,76.16,128h14v31.34Z" />
                  </g>
                </g>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>



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
          <p>Un "vrai" métier capable de rassembler tout ce qui me motive: Ecouter, partager, échanger avec des clients, une équipe. Pouvoir répondre à des demandes pesonnalisées. Des projets différents avec des besoins différents. Travailler ? Oui, mais avec le sourire. »
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

        <form action="#" method="">
          <!-- <label for="name-user">Nom</label> -->
          <input type="text" name="" id="user-name" placeholder="Nom" />
          <!-- <label for="first-name">Prénom</label> -->
          <input type="text" name="" id="first-name" placeholder="Prénom" />
          <!-- <label for="email">Email</label> -->
          <input type="text" name="" id="email" placeholder="email" />
          <!-- <label for="phone">Téléphone</label> -->
          <input type="text" name="" id="phone" placeholder="Téléphone" />
          <!-- <label for="subject">Objet du message</label> -->
          <input type="text" name="" id="subject" placeholder="Ici, c'est le sujet de votre messasge" />
          <textarea name="" id="message" cols="30" rows="10" placeholder="Laissez-moi vos impressions"></textarea>
          <button type="submit">Envoyer</button>
        </form>
      </div>
      <div id="map"></div>
    </section>
  </main>

  <footer>
    <div id="footer-nav">
      <div id="footer-top">
        <img src="./assets/img/Logo_ON_2.png" alt="Logo Portfolio">
        <ul>
          <li><a href="#productions-container">Réalisations</a></li>
          <li><a href="#about-container">A propos</a></li>
          <li><a href="#contact-container">Contact</a></li>
          <li><a href="">CV</a></li>
          <li><a href="">Intérêts</a></li>
        </ul>

        <div class="social-icons">
          <div class="github-icon">
            <a href="https://github.com/Nolibois" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" class="svg-inline--fa fa-github fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
              </svg>
            </a>
          </div>
          <div class="linkedin-icon">
            <a href="https://www.linkedin.com/in/olivier-nolibois-306064165" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
              </svg>
            </a>
          </div>
          <div class="tumblr-icon">
            <a href="https://nolivsansnoyau.tumblr.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90.21 159.34">
                <g id="Calque_2" data-name="Calque 2">
                  <g id="Layer_1" data-name="Layer 1">
                    <path fill="currentColor" d="M63.6,159.34c-24,0-41.82-12.33-41.82-41.82V70.28H0V44.7C24,38.48,34,17.86,35.14,0H60V40.56h29V70.28H60v41.13C60,123.74,66.25,128,76.16,128h14v31.34Z" />
                  </g>
                </g>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <hr>
      <div id="author">
        <p>Site réalisé par <a href="#">Olivier Nolibois</a></p>
      </div>
  </footer>

  <script src="./assets/js/script.js"></script>
</body>

</html>