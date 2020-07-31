<?php
/**
 * Template Name: seguranca
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

<section class="seguranca-banner">
  <div class="container">
    <div class="banner-seguranca-txt">
      <h1 class="fadeRight" data-animar><?=$titulo?></h1>
      <p class="fadeRight" data-animar><?=$texto?></p>
    </div>

    <div class="banner-seguranca-img fadeUp" data-animar>
      <?php include 'img/svg/seguranca/banner_vector.php'; ?>
    </div>
  </div>

  <img class="banner-wave" src="<?=get_template_directory_URI()?>/img/src/wave_grey.svg" alt="Vetor decorativo" />
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('nossas_tecnologias') ): ?>
<?php while( have_rows('nossas_tecnologias') ): the_row(); 

$titulo = get_sub_field('titulo');
$explicacao_1 = get_sub_field('explicacao_1');
$explicacao_2 = get_sub_field('explicacao_2');
$explicacao_3 = get_sub_field('explicacao_3');
?>

<section class="seguranca-tecnologias">
  <div class="box-animation lightBlue"></div>

  <div class="container">
    <h2><?=$titulo?></h2>

    <div class="seguranca-tecnologias-wrapper">
      <div class="seguranca-tecnologia-item">
        <img src="<?=get_template_directory_URI()?>/img/src/tecnologia_1.svg" alt="<?=$explicacao_1['subtitulo']?>" />
        <h4><?=$explicacao_1['subtitulo']?></h4>
        <p><?=$explicacao_1['texto']?></p>
      </div>

      <div class="seguranca-tecnologia-item">
        <img src="<?=get_template_directory_URI()?>/img/src/tecnologia_2.svg" alt="<?=$explicacao_2['subtitulo']?>" />
        <h4><?=$explicacao_2['subtitulo']?></h4>
        <p><?=$explicacao_2['texto']?></p>
      </div>

      <div class="seguranca-tecnologia-item">
        <img src="<?=get_template_directory_URI()?>/img/src/tecnologia_3.svg" alt="<?=$explicacao_3['subtitulo']?>" />
        <h4><?=$explicacao_3['subtitulo']?></h4>
        <p><?=$explicacao_3['texto']?></p>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('conformidade') ): ?>
<?php while( have_rows('conformidade') ): the_row(); 

$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$texto = get_sub_field('texto');
?>

<section class="conformidade">
  <div class="container">
    <h2><?=$titulo?></h2>
    <h3><?=$subtitulo?></h3>
    <?=$texto?>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('politicas') ): ?>
<?php while( have_rows('politicas') ): the_row(); 

$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$modificacao = get_sub_field('modificacao');
$botao = get_sub_field('botao');
?>

<section class="politicas">
  <div class="container">
    <h2><?=$titulo?></h2>

    <div class="politicas-wrapper">
      <div class="politicas-left">
        <h3><?=$subtitulo?></h3>
        <p><?=$modificacao?></p>
      </div>

      <div class="politicas-right">
        <a href="#" class="btn-cta lighter"><?=$botao?></a>
      </div>
    </div>

    <div class="termos">
      <?php query_posts( array( 'post_type' => 'termos','posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <div class="termo">
        <div class="termo-title">
          <img src="<?=get_template_directory_URI()?>/img/src/arrow_blue.svg" />
          <h4><?=the_title()?></h4>
        </div>

        <div class="termo-content">
          <?=the_content()?>
        </div>
      </div>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();