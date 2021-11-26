<?php get_header(); ?>

<style>
  nav { display: inline-block!important; background: rgb(0,0,0); background: linear-gradient(0deg, rgba(0,0,0,0.09567577030812324) 10%, rgba(0,0,0,0.26934523809523814) 90%);}
</style>

<!-- Titulo da Pagina -->
<div class="section titulo-paginas produtos">
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
      <h1><?php the_field('h1'); ?></h1>
      <h4><?php the_field('h4'); ?></h4>
    </div>
  </div>
</div>
<!-- Fecha Titulo da Pagina -->



<div class="section main">

  <div class="row produtos-interna-secao-1">
    <div class="container">

      <div class="col s12 m6">
        <ul class="tabs tabs-fixed-width tab-demo">
          <li class="tab col s3"><a class="active" href="#test1">Descrição</a></li>
          <li class="tab col s3"><a href="#test2"><?php the_field('produtos-aba_1'); ?></a></li>
          <li class="tab col s3"><a href="#test3"><?php the_field('produtos-aba_2'); ?></a></li>
        </ul>
        <div id="test1" class="col s12">
            <?php the_field('produtos-single-descricao'); ?>
          <ul class="collapsible">
            <li class="active">
            <div class="collapsible-header"><i class="material-icons">expand_more</i>Características</div>
            <div class="collapsible-body">
              <span><?php the_field('produtos-single-caracteristicas'); ?></span>
            </div>
            </li>
            <li>
            <div class="collapsible-header"><i class="material-icons">expand_more</i>Benefícios</div>
            <div class="collapsible-body">
              <span><?php the_field('produtos-single-beneficios'); ?></span>
            </div>
            </li>
          </ul>
        </div>
        <div id="test2" class="col s12 manuais">
          <p class="mensagem"><i class="material-icons">file_download</i> Clique no link para baixar</p>
          <?php the_field('produtos-single-manuais'); ?>
        </div>
        <div id="test3" class="col s12 downloads">
          <p class="mensagem"><i class="material-icons">file_download</i> Clique no link para baixar</p>
          <?php the_field('produtos-single-downloads'); ?>
        </div>
      </div>
      <div class="col s12 m1"></div>
      <div class="col s12 m5 single-galeria">
        <?php the_field('produtos-single-galeria'); ?>
        <div class="video-container">
          <?php the_field('produtos-single-video'); ?>
        </div>
      </div>

    </div>
  </div>


  <div class="row produtos-interna-secao-2">
    <div class="container">

      <div class="col s12">
        <h4>Produtos</h4>
        <h2>Outros Relacionados</h2>
      </div>

      <div class="col s12">
        <?php
         $args = array( 'post_type' => 'produtos', 'posts_per_page' => 6, 'orderby' => 'rand', 'order'   => 'ASC', );
         $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>

         <a href="<?php the_permalink(); ?>">
           <div class="col s6 m2">
             <div class="box">
               <?php if ( has_post_thumbnail() ) {
                 $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(), '');
                 echo '<img class="responsive-img" src="' . $image_src[0] . '">';
               }
               ?>
               <h4><?php the_title(); ?></h4>
             </div>
           </div>
         </a>

        <?php endwhile; ?>
      </div>

      <div class="col s12">
        <div class="consultor">
          <div class="AAA">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icone-consultor.svg" />
            <h3><span>Falar com um</span>consultor</h3>
          </div>
          <div class="BBB">
            <p>Saiba como uma de nossas soluções pode ser aplicada em seu projeto:</p>
          </div>
          <div class="CCC">
            <a href="#consultor" class="btn modal-trigger">SOLICITAR CONTATO</a>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>


<?php get_footer(); ?>
