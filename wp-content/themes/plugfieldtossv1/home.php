<?php get_header(); ?>


<!-- Titulo da Pagina -->
<div class="section titulo-paginas" style="background-image: url('https://plugfield.com.br/wp-content/uploads/2021/08/topo-001.jpg'); ">
  <div class="row">
    <div class="container">
      <h1>PlugNews</h1>
      <div class="line"></div>
      <h3>Fique ligado nas notícias do setor, assine nossa newsletter!</h3>
      <a href="https://plugfield.com.br/newsletter/" class="btn">Cadastre-se</a>
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

      <div class="col s12 m12 l3">

        <div class="siderbar">
          <?php get_sidebar(); ?>
        </div>
      </div>

      <div class="col s12 m12 l1">
      </div>

      <div class="col s12 m12 l8">

        <div class="article">
          <?php $query = new WP_Query('posts_per_page=10'); ?>
           <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
             <div class="col s12 m12 l6">
               <article>
               <div class="thumb" style=" background: #101010 url('<?php the_field('imagem-box'); ?>') center; background-size: cover; "></div>
               <div class="texto">
                 <span class="categoria"><?php the_category(' '); ?></span>
                 <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
               </div>
               </article>
            </div>
          <?php endwhile; ?>
         <div class="paginacao">
           <?php wp_pagination();?>
         </div>
          <?php else: endif; ?>
        </div>

      </div>



    </div>
  </div>
</div>


<?php get_footer(); ?>
