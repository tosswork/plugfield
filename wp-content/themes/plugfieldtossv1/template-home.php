<?php
// Template Name: Home
?>

<?php get_header(); ?>


<!-- HOME SLIDER -->
<div class="section home-slider">
  <div class="slider">
    <ul class="slides">
      <?php
       $args = array( 'post_type' => 'sliderhome', 'orderby' => 'rand' );
       $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
         <li>
           <!-- imagens -->
           <?php if ( has_post_thumbnail() ) {
               $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(), '');
               echo '<img class="responsive-img" src="' . $image_src[0] . '">';
             }
           ?>
           <!-- imagens fecha -->
           <div class="caption">
             <h1><?php the_field('chamada'); ?></h1>
             <h4><?php the_field('descricao'); ?></h4>
           </div>
         </li>
      <?php endwhile; ?>
    </ul>
    <div class="lojas">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/plugfield-logo-anatel-2.jpg" title="ANATEL" alt="ANATEL" /><img src="<?php echo get_stylesheet_directory_uri(); ?>/image/plugfield-logo-inmet-2.jpg" title="INMET" alt="INMET" />
    </div>
  </div>
</div>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- HOME PLATAFORMAS -->
<div class="section home-plataformas">
  <div class="row">
    <div class="container">
      <div class="col s12 m12 l6">
        <h3><?php the_field('home-solucao3x1'); ?></h3>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/dashboard-3.png" class="C" />
      </div>
      <div class="col s12 m12 l1"></div>
      <div class="col s12 m12 l4">

      <?php the_field('home-listaetexto'); ?>

      <ul class="icones">
        <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/temperatura.svg" />
          <span>Temperatura do Ar</span>
        </li>
        <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/velocidade-e-direcao-do-vento.png" />
          <span>Umidade</span>
        </li>
        <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/quantidade-de-chuva.svg" />
          <span>Quantidade de Chuva</span>
        </li>
        <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/velocidade-e-rajadas-vento.svg" />
          <span>Velocidade e Rajadas Vento</span>
        </li>
        <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/indice-uv.svg" />
          <span>Índice UV</span>
        </li>
        <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/pressao-atmosferica.png" />
          <span>Pressão Atmosférica</span>
        </li>
        <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/ponto-de-ovalho.png" />
          <span>Ponto de Orvalho</span>
        </li>
        <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/delta-t.png" />
          <span>Delta T</span>
        </li>
        <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/luminosidade.png" />
          <span>Luminosidade</span>
        </li>
        <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/sensacao-termica.png" />
          <span>Sensação Térmica</span>
        </li>
        <li>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/umidade-e-evapotranspiracao.svg" />
          <span>Evapo transpiração</span>
        </li>
      </ul>
      </div>
    </div>
  </div>
</div>
<!-- HOME PLATAFORMAS -->

<?php endwhile; else : endif; ?>


<!-- HOME ATUAÇÃO -->
<div class="section home-atuacao">
  <div class="row">
    <div class="container">
      <div class="col s12 m4">
        <h2 class="home">Aplicações</h2>
      </div>
      <div class="col s12 m1"></div>
      <div class="col s12 m7">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_field('home-h3etexto'); ?>

        <?php endwhile; else : endif; ?>

      </div>
    </div>
  </div>

  <!-- CARROSSEL -->
  <div class="atuacao carousel-slider">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php
         $args = array( 'post_type' => 'atuacao', 'posts_per_page' => 10 );
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


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- HOME APLICAÇÃO -->
<div class="section home-aplicacao">
  <div class="row">
    <div class="container">
      <div class="col s12 m12 l5">

        <?php the_field('home-h2etexto'); ?>

        <a href="https://plugfield.com.br/solucoes/" class="btn">Visualizar agora</a>

      </div>
      <div class="col s12 m12 l1"></div>
      <div class="col s12 m12 l6">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/plugfield-aplicacao-01.jpg" />
      </div>
      <div class="col s12 m12 l1"></div>
    </div>
  </div>
</div>
<!-- HOME APLICAÇÃO -->


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
        <p>Irrigação baseada em balanço hídrico, produção com base na captação de chuvas.</p>
        </div>
      </div>

      <div class="col s12 m6 l3">
        <div class="box">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/icon_acompanhamento_inteligente-min.png" />
        <h5>PULVERIZE, VOE OU CONSTRUA EM DIAS IDEAIS</h5>
        <p>Otimize a utilização de insumos e recursos para o manejo, operação ou simplesmente a execução de um projeto.</p>
        </div>
      </div>

      <div class="col s12 m6 l3">
        <div class="box">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/icon_palma_mao-min.png" />
        <h5>EVITE DESPESAS DESNECESSÁRIAS</h5>
        <p>Desloque maquinários ou realize ações somente em dias com condições favoráveis.</p>
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

        <?php the_field('home-diferenciais'); ?>

      </div>
    </div>
  </div>
</div>
<!-- HOME DIFERENCIAIS -->


<!-- HOME PRINCIPAIS CLIENTES -->
<div class="section home-principais-clientes">
  <div class="row">
    <div class="container">
      <div class="col s12">
        <h2 class="home">Alguns de nossos clientes</h3>
      </div>
      <div class="col s12">
        <?php echo do_shortcode('[print_responsive_thumbnail_slider]'); ?>
      </div>
    </div>
  </div>
</div>
<!-- HOME PRINCIPAIS CLIENTES -->


<!-- HOME ONDE ESTAMOS -->
<div class="section home-onde-estamos">
  <div class="row">

    <div class="container">

      <div class="col s12 m12 l4">
        <h2 class="home">Onde Comprar</h2>
        <?php the_field('home-ondecomprar-h4'); ?>
      </div>

      <div class="col s12 m12 l1"></div>

      <div class="col s12 m12 l7">
        <ul class="pin">
          <a href="https://plugfield.com.br/area/brasil/">
          <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/revenda-brasil.svg" title="BRASIL" alt="BRASIL" />
            <p>BRASIL</p>
          </li>
          </a>
          <a href="https://plugfield.com.br/area/paraguai/">
          <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/revenda-paraguai.svg" title="PARAGUAI" alt="PARAGUAI" />
            <p>PARAGUAI</p>
          </li>
          </a>
          <a href="https://plugfield.com.br/area/bolivia/">
          <li>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/revenda-bolivia.svg" title="BOLÍVIA" alt="BOLÍVIA" />
            <p>BOLÍVIA</p>
          </li>
          </a>
        </ul>
      </div>

    </div>

  </div>
</div>
<!-- HOME ONDE ESTAMOS -->


<!-- HOME REVENDER -->
<div class="section home-revender">
  <div class="col L">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/icones/icone-sol.png" />
    <h2 class="home">Quero revender</h2>
    <p>Alavanque vendas e capilarize o seu negócio adicionando a <b>Estação Meteorológica Plugfield</b> em seu portfolio de vendas. Seja um revendedor Plugfield:</p>
  </div>
  <div class="col R">
    <p>Preencha o formulário abaixo, um de nossos consultores entrará em contato</p>
    <?php echo do_shortcode('[contact-form-7 id="871" title="Revendedores"]'); ?>
  </div>
</div>
<!-- HOME REVENDER -->

<?php endwhile; else : endif; ?>


<!-- HOME PLUGNEWS -->
<div class="section home-fiqueplugfield">
  <div class="row">
    <div class="container">

      <div class="col s12 m1"></div>
      <div class="col s12 m9">
        <h2 class="home">PlugNews</h2>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_field('home-plugnews-h4'); ?>

        <?php endwhile; else : endif; ?>

      </div>
      <div class="col s12 m2">
          <a href="https://plugfield.com.br/plug-news/" class="btn">Todos</a>
      </div>

      <div class="col s12">
        <div class="article">
          <?php $query = new WP_Query('posts_per_page=3'); ?>
           <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="col s12 m6 l4">
            <article>
            <div class="thumb" style=" background: #101010 url('<?php the_field('imagem-box'); ?>') center; background-size: cover; "></div>
            <div class="texto">
              <span class="categoria"><?php the_category(' '); ?></span>
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            </div>
            </article>
            </div>

          <?php endwhile; else: endif; ?>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- HOME PLUGNEWS -->



<?php get_footer(); ?>
