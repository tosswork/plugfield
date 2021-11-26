<?php
// Template Name: Soluções
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



  <div class="section main solucoes-ws18">
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

        <div class="col s12 m12 l6">
          <h2><?php the_field('solucoes-ws18-h2'); ?></h2>
          <?php the_field('solucoes-ws18'); ?>
        </div>
        <div class="col s12 m12 l1"></div>
        <div class="col s12 m12 l5">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/plugfield-009.png" />
        </div>

      </div>
    </div>
  </div>


  <div class="section solucoes-tabs">
    <div class="row">
      <div class="container">

        <h3>Especificações</h3>

        <ul class="tabs tabs-fixed-width tab-demo">
          <li class="tab col s3"><a class="active" href="#test1"><?php the_field('solucoes-configuracoes-h2'); ?></a></li>
          <li class="tab col s3"><a href="#test2"><?php the_field('solucoes-downloads-h2'); ?></a></li>
          <li class="tab col s3"><a href="#test3"><?php the_field('solucoes-especificacoes-h2'); ?></a></li>
        </ul>

        <div id="test1" class="col s12">
          <?php the_field('solucoes-configuracoes'); ?>
        </div>

        <div id="test2" class="col s12">
          <?php the_field('solucoes-downloads'); ?>
        </div>

        <div id="test3" class="col s12">
          <?php the_field('solucoes-especificacoes'); ?>
        </div>

      </div>
    </div>
  </div>


  <!-- HOME BENEFICIOS -->
  <div class="section home-beneficios">
    <div class="row">
      <div class="container">

        <div class="col s12 m6 l3">
          <h2 class="home">Principais Benefícios</h2>
        </div>

        <div class="col s12 m6 l3">
          <div class="box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/icon_dados_tempo_real-min.png" />
          <h5>Economize Água e Energia</h5>
          <p>Irrigação baseada em balanço hídrico.</p>
          </div>
        </div>

        <div class="col s12 m6 l3">
          <div class="box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/icon_acompanhamento_inteligente-min.png" />
          <h5>Pulverize em dias ideais</h5>
          <p>Otimize a utilização de recursos para o manejo.</p>
          </div>
        </div>

        <div class="col s12 m6 l3">
          <div class="box">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/icon_palma_mao-min.png" />
          <h5>Evite despesas desnecessárias</h5>
          <p>Desloque maquinários somente em condições favoráveis.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- HOME BENEFICIOS -->


  <!-- HOME DIFERENCIAIS -->
  <div class="section home-diferenciais">
    <div class="row">
      <div class="container">
        <div class="col s12 m12 l6"></div>
        <div class="col s12 m12 l6">
          <h2 class="home">Diferenciais</h3>
          <h4>Lorem ipsum dolor sit amet consectetur adipiscing:</h4>

          <ul>
            <li>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/icon_tecnologia_nacional-min.png" />
              <h5>Fabricação e Suporte Nacional</h5>
            </li>
            <li>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/icon_conectada-min.png" />
              <h5>Conexão WIFI e GPRS</h5>
            </li>
            <li>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/icon_dados_tempo_real-min.png" />
              <h5>Previsão e Histórico</h5>
            </li>
            <li>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/icon_acompanhamento_inteligente-min.png" />
              <h5>Modo Offline</h5>
            </li>
            <li>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/icon_precisa_segura-min.png" />
              <h5>Alimentação via Painel Solar</h5>
            </li>
            <li>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/icon_palma_mao-min.png" />
              <h5>Integração via API</h5>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>
  <!-- HOME DIFERENCIAIS -->



<?php get_footer(); ?>
