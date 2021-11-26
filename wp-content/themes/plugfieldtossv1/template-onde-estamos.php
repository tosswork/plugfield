<?php
// Template Name: Onde Estamos
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


<div class="section main-maps">
  <?php echo do_shortcode('[google_map_easy id="1"]')?>
</div>


<?php get_footer(); ?>
