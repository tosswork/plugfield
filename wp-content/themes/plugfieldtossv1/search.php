<?php get_header(); ?>

<style>
  nav { display: inline-block!important; background: rgb(0,0,0); background: linear-gradient(0deg, rgba(0,0,0,0.09567577030812324) 10%, rgba(0,0,0,0.26934523809523814) 90%);}
</style>

<!-- Titulo da Pagina -->
<div class="section titulo-paginas single">
  <div class="row">
    <div class="container">
      <h1><?php echo $wp_query->found_posts; ?><?php _e( ' resultados para', '' ); ?>: <?php the_search_query(); ?></h3>
    </div>
  </div>
</div>
<!-- Fecha Titulo da Pagina -->


<div class="section main">
  <div class="row">

    <div class="container">

      <div class="col s12 m9">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="busca-box">

            <div class="col s12 m2">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
              <?php if ( has_post_thumbnail() ) {
                $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(), '');
                echo '<img class="responsive-img" src="' . $image_src[0] . '">';
              }
              ?>
            </a>
            </div>

            <div class="col s12 m10">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            <div class="categoria">
              <?php the_category(); ?>
            </div>
            </div>

          </article>

        <?php endwhile; ?>

           <div class="paginacao">
             <?php wp_pagination();?>
           </div>

        <?php else: endif; ?>

      </div>

      <div class="col s12 m3"></div>

    </div>

  </div>
</div>


<?php get_footer(); ?>
