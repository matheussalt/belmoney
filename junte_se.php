<?php
/**
 * Template Name: junte-se a nos
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

<section class="juntese-banner">
  <div class="container">
    <div class="banner-juntese-txt">
      <h1><?=$titulo?></h1>
      <p><?=$texto?></p>
    </div>

    <div class="banner-juntese-img">
      <?php include 'img/svg/juntese/banner_vector.php'; ?>
    </div>
  </div>

  <img class="banner-wave" src="<?=get_template_directory_URI()?>/img/src/wave_grey.svg" alt="Vetor decorativo" />
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('explicacoes') ): ?>
<?php while( have_rows('explicacoes') ): the_row(); 

$explicacao_1 = get_sub_field('explicacao_1');
$explicacao_2 = get_sub_field('explicacao_2');
$explicacao_3 = get_sub_field('explicacao_3');
?>

<section class="juntese-explicacoes">
  <div class="container">
    <div class="juntese-explicacao-img">
      <?php include 'img/svg/juntese/conecte_vector.php'; ?>
    </div>

    <div class="juntese-explicacao-txt">
      <h2><?=$explicacao_1['titulo']?></h2>
      <p><?=$explicacao_1['texto']?></p>
    </div>

    <div class="juntese-explicacao-txt">
      <h2><?=$explicacao_2['titulo']?></h2>
      <p><?=$explicacao_2['texto']?></p>
    </div>

    <div class="juntese-explicacao-img">
      <?php include 'img/svg/juntese/nosso_vector.php'; ?>
    </div>

    <div class="juntese-explicacao-img">
      <?php include 'img/svg/juntese/temos_vector.php'; ?>
    </div>

    <div class="juntese-explicacao-txt">
      <h2><?=$explicacao_3['titulo']?></h2>
      <p><?=$explicacao_3['texto']?></p>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('as_empresas') ): ?>
<?php while( have_rows('as_empresas') ): the_row(); 

$titulo = get_sub_field('titulo');
$texto = get_sub_field('texto');
$botao = get_sub_field('botao');
?>

<section class="empresas-parceiras">
  <div class="container">
    <h2><?=$titulo?></h2>

    <div class="empresas-parceiras-txt">
      <p><?=$texto?></p>
      <a href="#" class="btn-cta lighter"><?=$botao?></a>
    </div>
  </div>

  <img src="<?=get_template_directory_URI()?>/img/src/sobre_wave.svg" alt="SVG decorativo" class="wave" />
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('conheca') ): ?>
<?php while( have_rows('conheca') ): the_row(); 

$titulo = get_sub_field('titulo');
$texto = get_sub_field('texto');
$explicacao_1 = get_sub_field('explicacao_1');
$explicacao_2 = get_sub_field('explicacao_2');
$explicacao_3 = get_sub_field('explicacao_3');
?>

<section class="juntese-conheca">
  <div class="container">
    <div class="juntese-conheca-txt">
      <h2><?=$titulo?></h2>
      <p><?=$texto?></p>
    </div>

    <div class="item-with-svg-wrapper">
      <div class="item-with-svg">
        <img src="<?=get_template_directory_URI()?>/img/src/vantagens_1.svg" />
        <p><?=$explicacao_1?></p>
      </div>

      <div class="item-with-svg">
        <img src="<?=get_template_directory_URI()?>/img/src/vantagens_2.svg" />
        <p><?=$explicacao_2?></p>
      </div>

      <div class="item-with-svg">
        <img src="<?=get_template_directory_URI()?>/img/src/vantagens_3.svg" />
        <p><?=$explicacao_3?></p>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();