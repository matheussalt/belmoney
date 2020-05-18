<?php
/**
 * Template Name: sobre
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<?php if( have_rows('banner') ): ?>
<?php while( have_rows('banner') ): the_row(); 

$titulo = get_sub_field('titulo');
$texto = get_sub_field('texto');
?>

<section class="sobre-banner">
  <div class="container">
    <div class="banner-sobre-txt">
      <h1><?=$titulo?></h1>
    </div>

    <div class="banner-sobre-wrapper">
      <p><?=$texto?></p>

      <div class="banner-sobre-img">
        <?php include 'img/svg/sobre/sobre_vector.php'; ?>
      </div>
    </div>
  </div>

  <div class="circle1"></div>
  <div class="circle2"></div>
  <div class="circle3"></div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('historia') ): ?>
<?php while( have_rows('historia') ): the_row(); 

$titulo = get_sub_field('titulo');
$texto = get_sub_field('texto');
?>

<section class="historia" id="historia">
  <div class="container">
    <h2><?=$titulo?></h2>
    <?=$texto?>

    <div class="square2"></div>
  </div>

  <div class="square1"></div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<section class="equipe" id="equipe">
  <div class="container">
    <h2><?=the_field('nossa_equipe')?></h2>

    <?php include 'carrossel_equipe.php'; ?>
  </div>
</section>

<?php if( have_rows('auditoria') ): ?>
<?php while( have_rows('auditoria') ): the_row(); ?>

<section class="auditoria">
  <div class="container">
    <div class="auditoria-content">
      <img src="<?=get_template_directory_URI()?>/img/src/lupa.svg" alt="Auditoria externa" />

      <?php if( have_rows('auditoria_externa') ): ?>
      <?php while( have_rows('auditoria_externa') ): the_row(); 

      $titulo = get_sub_field('titulo');
      $texto = get_sub_field('texto');
      ?>

      <h2><?=$titulo?></h2>
      <?=$texto?>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="auditoria-content">
      <img src="<?=get_template_directory_URI()?>/img/src/lupa2.svg" alt="Auditoria interna" />

      <?php if( have_rows('auditoria_interna') ): ?>
      <?php while( have_rows('auditoria_interna') ): the_row(); 

      $titulo = get_sub_field('titulo');
      $texto = get_sub_field('texto');
      ?>

      <h2><?=$titulo?></h2>
      <?=$texto?>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <img class="auditoria-wave-left" src="<?=get_template_directory_URI()?>/img/src/sobre_wave.svg"
    alt="Vetor Decorativo" />
  <img class="auditoria-wave-right" src="<?=get_template_directory_URI()?>/img/src/sobre_wave.svg"
    alt="Vetor Decorativo" />
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('junte_se') ): ?>
<?php while( have_rows('junte_se') ): the_row(); 

$titulo = get_sub_field('titulo');
$texto = get_sub_field('texto');
?>

<section class="junte-se">
  <div class="container">
    <h2><?=$titulo?></h2>
    <?=$texto?>

    <div class="descricao-funcionario">
      <div class="descricao-txt">
        <?php 
        $position = 0;
        $isFirst = true; 
        ?>
        <?php query_posts( array( 'post_type' => 'equipe', 'posts_per_page' => -1 ) );  ?>
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <div class="descricao-item nome<?=$position?> <?php if ($isFirst) { echo 'active'; } ?>">
          <h3><?=the_title()?></h3>
          <?=the_content()?>
        </div>

        <?php if ($isFirst) { $isFirst = false; } ?>
        <?php endwhile; ?>
        <?php endif; wp_reset_query(); ?>

        <div class="buttons">
          <button class="descricao-left">
            <img src="<?=get_template_directory_URI()?>/img/src/arrow.svg" alt="Seta" />
          </button>

          <button class="descricao-right">
            <img src="<?=get_template_directory_URI()?>/img/src/arrow.svg" alt="Seta" />
          </button>
        </div>
      </div>

      <div class="descricao-img">
        <?php include 'img/svg/sobre/equipe_guys.php'; ?>
      </div>
    </div>

    <div class="nomes">
      <?php 
      $position = 0;
      $isFirst = true; 
      ?>
      <?php query_posts( array( 'post_type' => 'equipe', 'posts_per_page' => -1 ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <button class="nome<?=$position?> <?php if ($isFirst) { echo 'active'; } ?> "><?=the_title()?></button>

      <?php if ($isFirst) { $isFirst = false; } ?>
      <?php endwhile; ?>
      <?php endif; wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<section class="sobre-demais">
  <div class="container">
    <div class="sobre-demais-item">
      <?php if( have_rows('unidade') ): ?>
      <?php while( have_rows('unidade') ): the_row(); 

      $titulo = get_sub_field('titulo');
      $texto = get_sub_field('texto');
      ?>

      <h2><?=$titulo?></h2>
      <?=$texto?>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="sobre-demais-item">
      <?php if( have_rows('oportunidades') ): ?>
      <?php while( have_rows('oportunidades') ): the_row(); 

      $titulo = get_sub_field('titulo');
      $texto = get_sub_field('texto');
      ?>

      <h2><?=$titulo?></h2>
      <?=$texto?>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="sobre-demais-item">
      <?php if( have_rows('nossa_cultura') ): ?>
      <?php while( have_rows('nossa_cultura') ): the_row(); 

      $titulo = get_sub_field('titulo');
      $texto = get_sub_field('texto');
      ?>

      <h2><?=$titulo?></h2>
      <?=$texto?>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="sobre-demais-item">
      <?php if( have_rows('nossas_vagas') ): ?>
      <?php while( have_rows('nossas_vagas') ): the_row(); 

      $titulo = get_sub_field('titulo');
      $texto = get_sub_field('texto');
      $botao = get_sub_field('botao');
      ?>

      <h2><?=$titulo?></h2>
      <?=$texto?>
      <a class="btn-cta lighter" href="<?=site_url()?>/contato"><?=$botao?></a>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="circle1"></div>
  <div class="circle2"></div>
  <div class="circle3"></div>
</section>

<?php get_footer();