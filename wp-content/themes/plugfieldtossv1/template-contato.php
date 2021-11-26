<?php
// Template Name: Contato
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
  <div class="row contato">
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

      <div class="col s12 m5 lf">

        <h3>Fale Conosco</h3>
        <div class="line"></div>

        <?php echo do_shortcode('[contact-form-7 id="714" title="Contato"]'); ?>

        <script>
          document.addEventListener( 'wpcf7mailsent', function( event ) {
            location = 'https://plugfield.com.br/obrigado/';
          }, false );
        </script>

      </div>

      <div class="col s12 m1"></div>

      <div class="col s12 m6">

        <h3>Seja uma Revenda Plugfield</h3>
        <div class="line"></div>
        <p>Alavanque vendas e capitalize o seu negócio adicionado a <b>Estação Meteorológica Plugfield</b> em seu portfolio de vendas.</p>
        <a href="https://plugfield.com.br/quero-revender/" class="btn">Quero revender</a>

        <div class="divider"></div>

        <h3>Endereço</h3>
        <div class="line"></div>
        <p>Rua Bartolomeu Lourenço de Gusmão, 1970 - CEP: 81650-050 | Boqueirão - Curitiba/PR</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3601.5254260792162!2d-49.24155368498457!3d-25.487517583761946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcfad744278935%3A0xcc783aa3ba23d948!2sR.%20Bartolomeu%20Louren%C3%A7o%20de%20Gusm%C3%A3o%2C%201970%20-%20Hauer%2C%20Curitiba%20-%20PR%2C%2081650-050!5e0!3m2!1spt-BR!2sbr!4v1617581741373!5m2!1spt-BR!2sbr" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

    </div>
  </div>
</div>


<?php get_footer(); ?>
