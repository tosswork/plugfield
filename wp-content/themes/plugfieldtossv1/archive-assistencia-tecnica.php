<?php
// Template Name: Assistência Técnica ARCHIVE
?>


<?php get_header(); ?>


<!-- Titulo da Pagina -->
<div class="section titulo-paginas no-image">
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


        <div class="col s12 m12 l8">

          <p>Tenha em mãos o Termo de Garantia da Estação Meteorológica Plugfield:</p>

          <ul class="collapsible drop">
            <li class="active">
              <div class="collapsible-header"><i class="material-icons">expand_more</i>CONDIÇÕES GERAIS</div>
              <div class="collapsible-body">
                <span>
                  A Plugfield garante o produto contra qualquer defeito de material ou processo de fabricação, desde que seja constatado que os defeitos ocorreram em condições normais de uso.
                  A reposição de peças defeituosas e execução de serviços decorrentes desta Garantia somente serão procedidas na Assistência Técnica Autorizada da Plugfield ou de terceiro por ela expressamente indicado, onde deverá ser entregue o produto para reparo.
                  Esta Garantia somente será válida se o produto estiver acompanhado de Nota Fiscal.
                </span>
              </div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">expand_more</i>PRAZO DE GARANTIA</div>
              <div class="collapsible-body">
                <span>
                  A garantia contratual deste produto será de 01 (um) ano, sendo que os 03 (três) primeiros meses correspondem à garantia legal, enquanto os outros 9 (nove) meses estão vinculados a garantia do produto. Esta por sua vez, conforme determinações legais, começa a valer a partir do dia da emissão da Nota Fiscal do Produto ao primeiro Cliente.
                  A transferência do produto para terceiros, dentro do período mencionado, não exclui a validade desta Garantia.<br><br>
                  A Assistência Técnica Autorizada da Plugfield irá proceder com o atendimento do cliente sendo responsável pela Inspeção/Laudo do produto quando do mau funcionamento, podendo, a seu critério e quando houver necessidade, realizar a troca do produto por modelo igual ou similar, novo ou em estado de novo, em perfeitas condições de uso e de manutenção.<br><br>
                  Em caso de troca do produto, o prazo original de validade da Garantia permanecerá inalterado, contando-se a partir da data de emissão da Nota Fiscal.
                </span>
              </div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">expand_more</i>PERDA DE GARANTIA</div>
              <div class="collapsible-body">
                <span>
                  ● Utilização de software/hardware não compatíveis com as especificações do Manual.<br>
                  ● Ligação do produto à rede elétrica fora dos padrões estabelecidos no manual do produto e instalações que apresentam variação excessiva de tensão.<br>
                  ● Infiltração de líquidos provenientes da abertura/fechamento do produto.<br>
                  ● Utilização do produto em ambientes sujeitos a gases e/ou ambientes corrosivos.<br>
                  ● Mostrar sinais de adulteração de lacres de segurança.<br>
                  ● Apresentar sinais de abertura e modificação feita pelo Cliente em locais do produto não autorizados pela Plugfield.<br>
                  ● Danos causados por acidentes/quedas/vandalismo.<br>
                  ● Exibir número de série adulterado e/ou removido. Danos decorrentes do transporte e embalagem do produto pelo Cliente em condições incompatíveis com ele.<br>
                  ● Mau uso e em desacordo com o Manual de Instruções.
                </span>
            </div>
            </li>

          </ul>

          <div class="divider"></div>

          <!-- Revendas resultados -->
          <div class="revendas-lista-boxes">

            <p><i class="material-icons">aspect_ratio</i> Clique nas revendas abaixo para visualizar:<p>

              <?php
               $args = array( 'post_type' => 'assistencia', 'posts_per_page' => 9, 'orderby' => 'rand' );
               $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
              <?php endwhile; ?>

          </div>
          <!-- Revendas resultados fecha -->




        </div>

      </div>
    </div>
  </div>



</div>
<!-- HOME ATUAÇÃO -->


<?php get_footer(); ?>
