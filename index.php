<?php

$dados = require_once('admin/conexao/banco.php');

$sql = "select * from tb_aluno";
$sql = mysqli_query($con, $sql) or die ("Erro na sql");
$dados = mysqli_fetch_array($sql);

$sql2 = "select * from tb_skill";
$sql2 = mysqli_query($con, $sql2) or die ("Erro na sqlSkill");

$sql3 = "select * from tb_servicos";
$sql3 = mysqli_query($con, $sql3) or die ("Erro na sqlServicos");
$dados3 = mysqli_fetch_array($sql);

$sql4 = "select * from tb_projetos";
$sql4 = mysqli_query($con, $sql4) or die ("Erro na sqlProjetos");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portifólio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v4.7.1
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Portifólio</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="#services">Experiencias</a></li>
          <li><a class="nav-link scrollto " href="#work">Projetos</a></li>
          <li><a class="nav-link scrollto " href="#blog">Cursos</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">I am Eduardo M. Santarosa</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Programador, Desenvolvedor, Estudante"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/user_photo.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Nome: </span> <span> <?php echo $dados["alu_nome"]; ?> </span></p>
                        <p><span class="title-s">Perfil Técnico: </span> <span>Programador Junior</span></p>
                        <p><span class="title-s">Email: </span> <span> <?php echo $dados["alu_email"]; ?> </span></p>
                        <p><span class="title-s">WhatsApp: </span> <span> <?php echo $dados["alu_celular"]; ?> </span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Habilidades</p>
                    

                  <?php  while ($dados2 = mysqli_fetch_array($sql2)) { ?>

                    <span> <?php echo $dados2['ski_descricao']; ?> </span> <span class="pull-right"> <?php echo $dados2['ski_porcentagem']; ?>%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: <?php echo $dados2['ski_porcentagem']; ?>%" aria-valuenow="<?php echo $dados2['ski_porcentagem']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                  <?php } ?>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Sobre Mim
                      </h5>
                    </div>
                    <p class="lead">
                      Cursando TI no Colégio Politec em Americana, 2º Ano do Ensino Médio
                    </p>
                    <p class="lead">
                      Atualmente estou cursando o ensino médio no Colégio Politec para me especializar na área de T.I em geral, mas o meu principal objetivo é ser programador.
                    </p>
                    <p class="lead">
                      Futuramente pretendo estar trabalhando em alguma empresa para adquirir experiencia como desenvolvedor.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Experiencias
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>

        <div class="row">

        <?php while ($dados3 = mysqli_fetch_array($sql3)) { ?>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="<?php echo $dados3['ser_icone']; ?>"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"> <?php echo $dados3['ser_titulo']; ?> </h2>
                <p class="s-description text-center">
                  <?php echo $dados3['ser_descricao']; ?>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portifólio
              </h3>
              <p class="subtitle-a">
                Projetos que estou desenvolvendo ou ja finalizei.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>

        <div class="row">

        <?php while ($dados4 = mysqli_fetch_array($sql4)) { ?>

          <div class="col-md-4">
            <div class="work-box">
              <a href="admin/projetos/<?php echo $dados4['pro_foto']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="admin/projetos/<?php echo $dados4['pro_foto']; ?>" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"> <?php echo $dados4['pro_descricao']; ?> </h2>
                    <div class="w-more">
                      <span class="w-ctegory"> <?php echo $dados4['pro_data_cadastro']; ?> </span> / <span class="w-date">2022</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <?php } ?>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="assets/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">Bill Gates</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        “Nunca se compare com ninguém neste mundo. Caso o faça, entenda que você estará insultando a si mesmo.”
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-box">
                    <div class="author-test">
                      <img src="assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                      <span class="author">Elon Musk</span>
                    </div>
                    <div class="content-test">
                      <p class="description lead">
                        "Se algo é importante o suficiente, você deve tentar. Mesmo se o resultado provável for o fracasso."
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
              </div>
              <div class="swiper-pagination"></div>
            </div>

            <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Cursos que estou realizando
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Back-End</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">Curso de Python - Curso em Video</a></h3>
                <p class="card-description">
                  Aulas instruidas pelo Professor Gustavo Guanabara.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/user_photo.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Eduardo Santarosa</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 40 horas
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="assets/img/post-2.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">Curso de HTML e CSS - Curso em Video</a></h3>
                <p class="card-description">
                  Aulas instruidas pelo Professor Gustavo Guanabara.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/user_photo.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Eduardo Santarosa</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 40 horas
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="assets/img/post-3.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Back-End</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="blog-single.html">Curso de PHP - Curso em Video</a></h3>
                <p class="card-description">
                  Aulas instruidas pelo Professor Gustavo Guanabara.
                  <br>
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/user_photo.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Eduardo Santarosa</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 40 horas
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Mande uma mensagem!
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-12 text-center my-3">
                            <div class="loading">Carregando</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Sua mensagem foi enviada, muito obrigado!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Enviar Mensagem</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Redes Sociais
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Para mais informações entre em contato por minhas redes sociais abaixo
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span>Americana - SP</li>
                        <li><span class="bi bi-phone"></span>(19) 98274-1464</li>
                        <li><span class="bi bi-envelope"></span> thegranfino@gmail.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="https://github.com/edumes/" target="_blank"><span class="ico-circle"><i class="bi bi-github"></i></span></a></li>
                        <li><a href="https://www.instagram.com/edumesz/" target="_blank"><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                        <li><a href="https://www.linkedin.com/in/edumesz/" target="_blank"><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>