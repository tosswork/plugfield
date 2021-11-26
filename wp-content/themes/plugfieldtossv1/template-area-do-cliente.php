<?php
// Template Name: Área do Cliente
?>


<?php get_header(); ?>


<!-- Titulo da Pagina -->
<div class="section titulo-paginas" style="background-image: url('<?php the_field('topo-background'); ?>'); ">
  <div class="row">
    <div class="container">
      <h1><?php the_field('h1'); ?></h1>
      <div class="line"></div>
      <h3><?php the_field('h3'); ?></h3>
    </div>
  </div>
</div>
<!-- Fecha Titulo da Pagina -->


<div class="section main">
  <div class="row">
    <div class="container">

      <!-- breadcrumb -->
      <div class="col s12 breadcrumb">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
      </div>
      <!-- breadcrumb -->


      <div class="col s12 m3">
        <h4 style=" color: #10444F; ">Navegue:</h4>
        <ul>
          <li><a href="https://plugfield.com.br/login/auth" target="_blank">Acesso a Plataforama</a></li>
          <li><a href="/TOSSPlugfield/suporte-tecnico">Suporte Técnico</a></li>
          <li><a href="/TOSSPlugfield/assistencia-tecnica">Assistência Técnica</a></li>
        </ul>
      </div>
      <div class="col s12 m1"></div>
      <div class="col s12 m8 area-box-links">

        <p>A <b>Plugfield</b> está comprometida a fornecer a melhor experiência com a usabilidade da sua Estação Meteorológica, por isso dedicamos especialistas e engenheiros no desenvolvimento de nossos:</p>

        <div class="col s4">
          <a href="https://plugfield.com.br/login/auth" target="_blank">
            <i class="material-icons">airplay</i>
            <h4>Acesso a Plataforama</h4>
          </a>
        </div>
        <div class="col s4">
          <a href="/TOSSPlugfield/suporte-tecnico">
            <i class="material-icons">person_pin</i>
            <h4>Suporte Técnico</h4>
          </a>
        </div>
        <div class="col s4">
          <a href="/TOSSPlugfield/assistencia-tecnica">
            <i class="material-icons">public</i>
            <h4>Assistência Técnica</h4>
          </a>
        </div>

        <div class="clear"></div>

        <div class="row" style=" text-align: center; padding: 25px 0; ">
          <div class="lojas">
            <h4>Clique e baixe o aplicativo:<h4>
            <a href="https://play.google.com/store/apps/details?id=com.Plugfield" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/bt-Google-Play.png" class="google-play" /></a> <a href="https://apps.apple.com/br/app/plugfield/id1438103349" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/bt-Apple-Store.png" class="apple-store" /></a>
          </div>
        </div>



      </div>

    </div>
  </div>
</div>




<?php get_footer(); ?>
