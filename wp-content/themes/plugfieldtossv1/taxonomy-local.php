<?php get_header(); ?>


<!-- Titulo da Pagina -->
<div class="section titulo-paginas no-image">
  <div class="row">
    <div class="container">
      <?php
      $al_cat_slug = get_queried_object()->slug;
      $al_cat_name = get_queried_object()->name;
      ?>
      <h1><?php echo $al_cat_name; ?></h1>
      <div class="line"></div>
      <h3>Assistência Técnica Plugfield</h3>
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

      <div class="col s12 m12 l3 revendas-lista">
        <h4 style=" color: #10444F; ">Navegue:</h4>
        <ul>
          <li><a href="https://plugfield.com.br/login/auth" target="_blank">Acesso a Plataforama</a></li>
          <li><a href="/TOSSPlugfield/suporte-tecnico">Suporte Técnico</a></li>
          <li><a href="/TOSSPlugfield/assistencia-tecnica">Assistência Técnica</a></li>
        </ul>
        <h4 style=" color: #10444F; ">Assistências:</h4>
        <div class="revendas-lista-menu">
          <!-- SIDEBAR -->
          <div>
            <div style=" background: #eaeaea; width: 20px; height: 20px; position: absolute; "></div>
            <?php if ( is_active_sidebar('sidebar-assistencias') ) {
                dynamic_sidebar('sidebar-assistencias');
            } ?>
          </div>
        </div>
      </div>

      <div class="col s12 m12 l1"></div>

      <!-- Revendas resultados -->
      <div class="col s12 m12 l8 revendas-lista-boxes">

        <p><i class="material-icons">aspect_ratio</i> Clique nas revendas abaixo para visualizar:  <p>

        <?php
        $al_tax_post_args = array(
          'post_type' => 'assistencia', // Your Post type Name that You Registered
          'posts_per_page' => 24,
          'order' => 'ASC',
          'tax_query' => array(
            array(
              'taxonomy' => 'local',
              'field' => 'slug',
              'terms' => $al_cat_slug
            )
          )
        );
        $al_tax_post_qry = new WP_Query($al_tax_post_args);
        if($al_tax_post_qry->have_posts()) :
          while($al_tax_post_qry->have_posts()) :
            $al_tax_post_qry->the_post();
            ?>

            <div class="col s12 m6 l4 revendas">
              <a href="<?php the_permalink(); ?>">
                <?php if ( has_post_thumbnail() ) {
                  $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(), '');
                  echo '<img class="responsive-img" src="' . $image_src[0] . '">';
                }
                ?>
              </a>
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            </div>

          <?php endwhile; endif; ?>

      </div>
      <!-- Revendas resultados fecha -->

    </div>
  </div>
</div>


<?php get_footer(); ?>
