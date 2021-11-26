<?php
// Template Name: Produto
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


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

        <div class="col s12">
          <?php the_content(); ?>
        </div>

      </div>
    </div>
  </div>

<?php endwhile; else : endif; ?>


<!-- CARROSSEL -->
<div class="atuacao carousel-slider">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php
       $args = array( 'post_type' => 'atuacao', 'posts_per_page' => 5 );
       $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
       <div class="swiper-slide" style=" background-image: url('<?php the_field('foto_thumb'); ?>') ">
         <a href="<?php the_permalink(); ?>">
         <div class="gradiente">
           <div class="cont">
             <h4><?php the_title(); ?></h4>
           </div>
           <i class="material-icons">chevron_right</i>
         </div>
         </a>
       </div>
      <?php endwhile; ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>
<!-- CARROSSEL fecha -->

<!-- Swiper JS -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/_carousel/package/js/swiper.min.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    autoplay: {
      delay: 3000,
    },
    breakpoints: {
      600: {
        slidesPerView: 1,
        spaceBetween: 5,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      1280: {
        slidesPerView: 5,
        spaceBetween: 15,
      },
      1920: {
        slidesPerView: 5,
        spaceBetween: 25,
      },
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
<!-- Swiper JS fecha -->


</div>
<!-- HOME ATUAÇÃO -->



<?php get_footer(); ?>
