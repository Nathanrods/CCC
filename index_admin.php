<?php
session_start();

include("protect.php");
include("banco.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Comunidade Cristã do Campeche</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#resume">Agenda Semanal</a></li>
        <li><a class="nav-link scrollto" href="#services">Departamentos</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">Galeria</a></li>
        <li class="dropdown"><a href="#"><span>Mais</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a href="#">Células</a></li>
              <li><a href="#">Estudo</a></li>
              <li><a href="#">Podcast</a></li>
              <li><a href="#">Seja Membroooo</a></li>
            </li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
    <button onclick="editHero()">
      <i class="bi bi-pencil"></i> Editar Hero
    </button>
      <h1>Comunidade Cristã do Campeche</h1>
      <h2>Um lugar para chamar de casa!</h2>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= My Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <span>Agenda Semanal</span>
          <h2>Agenda Semanal</h2>
          <p>Com ela você fica por dentro de tudo da nossa programação semanal.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Domingo</h3>
            <div class="resume-item pb-0">
              <h4>Culto da Família</h4>
              <h5>19h</h5>
              <p><em>'</em></p>
              <p>
              </p>
            </div>

            <h3 class="resume-title">Terça-Feira</h3>
            <div class="resume-item">
              <h4>Culto de Oração</h4>
              <h5>20h</h5>
              <p>O Culto de Oração é um momento especial dedicado à comunhão com Deus por meio da oração, louvor e adoração, buscando fortalecer sua fé.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Sexta-Feira</h3>
            <div class="resume-item">
              <h4>Culto de Jovens</h4>
              <h5>20h</h5>
              <p>
              <ul>
                <li>O Culto de Jovens da Comunidade é um encontro imersivo criado para alcançar e inspirar jovens de todas as idades.
                    Seu objetivo é conectar essa geração com a poderosa mensagem de renovação de mente encontrada em Romanos 12.
                    Nesse culto os jovens são ensinados a se afastarem dos padrões do mundo e a buscar uma transformação interna através da renovação de suas mentes.</li>
                <li>Durante o Pós-Culto, os jovens têm a oportunidade de se conectar uns com os outros em um ambiente descontraído e divertido.
                  Jogos, momentos estendidos de louvor. Além disso, a comunhão é valorizada, permitindo que os jovens compartilhem testemunhos e se conheçam melhor.</li>
              </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End My Resume Section -->

    <!-- ======= My Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Departamentos</span>
          <h2>Departamentos</h2>
          <p>Todos os departamentos reunidos num só lugar</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Casados Para Sempre</a></h4>
              <p class="description">Clique aqui e saiba mais</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a>RM12 Jovens</a></h4>
              <p class="description" ><a href="RM12.html" >Clique aqui e saiba mais</a></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Louvor</a></h4>
              <p class="description">Clique aqui e saiba mais</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Infantil</a></h4>
              <p class="description">Clique aqui e saiba mais</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End My Services Section -->

    <!-- ======= Galeria ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Galeria</span>
          <h2>Galeria</h2>
          <p>Momentos de adoração e comunhão</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Igreja</li>
          <li data-filter=".filter-card">Retiro</li>
          <li data-filter=".filter-web">Outros</li>
        </ul>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/web1.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>photo</h4>
              <p>App</p>
              <a href="assets/img/portfolio/web1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/IMG_0975.JPG" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>photo</h4>
              <p>App</p>
              <a href="assets/img/portfolio/IMG_0975.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/IMG_0976.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>photo</h4>
              <p>App</p>
              <a href="assets/img/portfolio/IMG_0976.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/IMG_9503.JPG" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>photo</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/IMG_9503.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/web2.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>photo</h4>
              <p>App</p>
              <a href="assets/img/portfolio/web2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/IMG_9428.JPG" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>photo</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/IMG_9428.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/IMG_9102.JPG" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>photo</h4>
              <p>App</p>
              <a href="assets/img/portfolio/IMG_9102.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End My Portfolio Section -->

    <!-- ======= Contact Me Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contato</span>
          <h2>Contato</h2>
          <p>Entre em contato para receber mais informações</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-share-alt"></i>
                  <h3>Redes Sociais</h3>
                  <div class="social-links">
                    <a href="https://web.facebook.com/Igrejacomunidadecristadocampeche/?_rdc=1&_rdr" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/comunidadecristadocampeche/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.youtube.com/@comunidadecristadocampeche8864" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>E-mail</h3>
                  <a href="mailto:cccfloripa1@gmail.com?subject=&body=">cccfloripa1@gmail.com</a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-share-alt"></i>
                  <h3>Local</h3>
                  <a href="https://goo.gl/maps/doUMZQyM8EFnbWnu5">Clique aqui</a>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="6" placeholder="Messagem" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Carregando</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagen foi enviada, Obrigado.</div>
              </div>
              <div class="text-center"><button type="submit">Enviar!</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Me Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Comunidade Cristã do Campeche</h3>
      <div class="social-links">
        <a href="https://web.facebook.com/Igrejacomunidadecristadocampeche/?_rdc=1&_rdr" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/comunidadecristadocampeche/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.youtube.com/@comunidadecristadocampeche8864" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Comunidade Cristã do Campeche</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script>
  // Função para editar a seção Hero
  function editHero() {
    alert("Editar a seção Hero aqui.");
  }

  // Função para editar a seção Agenda Semanal
  function editAgenda() {
    alert("Editar a seção Agenda Semanal aqui.");
  }

  // Função para editar a seção Departamentos
  function editDepartamentos() {
    alert("Editar a seção Departamentos aqui.");
  }

  // Função para editar a seção Galeria
  function editGaleria() {
    alert("Editar a seção Galeria aqui.");
  }

  // Função para editar a seção Contato
  function editContato() {
    alert("Editar a seção Contato aqui.");
  }
</script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>