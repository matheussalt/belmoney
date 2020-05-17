<?php
/**
 * Template Name: cobertura
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

<section class="cobertura-banner">
  <div class="container">
    <div class="banner-cobertura-txt">
      <h1><?=$titulo?></h1>
      <p><?=$texto?></p>
    </div>

    <div class="banner-cobertura-img">
      <?php include 'img/svg/cobertura/banner_vector.php'; ?>
    </div>
  </div>

  <img class="banner-wave" src="<?=get_template_directory_URI()?>/img/src/wave_grey.svg" alt="Vetor decorativo" />
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('lista') ): ?>
<?php while( have_rows('lista') ): the_row(); 

$titulo = get_sub_field('titulo');
$africa = get_sub_field('africa');
$america = get_sub_field('america');
$asia = get_sub_field('asia');
$europa = get_sub_field('europa');
$oceania = get_sub_field('oceania');
?>

<section class="cobertura">
  <div class="container">
    <h2><?=$titulo?></h2>

    <div class="cobertura-wrapper">
      <div class="continente">
        <button class="continente-name">
          <img src="<?=get_template_directory_URI()?>/img/src/arrow_blue.svg" />
          <h3><?=$africa?></h3>
        </button>

        <div class="pais-wrapper">
          <? query_posts( array( 'post_type' => 'paises', 'category_name' => 'africa', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) );  ?>
          <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>

          <div class="pais">
            <img src="<?=the_field('bandeira')?>" alt="<?=the_title()?>" />
            <h4><?=the_title()?></h4>
          </div>

          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="continente">
        <button class="continente-name">
          <img src="<?=get_template_directory_URI()?>/img/src/arrow_blue.svg" />
          <h3><?=$america?></h3>
        </button>

        <div class="pais-wrapper">
          <? query_posts( array( 'post_type' => 'paises', 'category_name' => 'america', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) );  ?>
          <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>

          <div class="pais">
            <img src="<?=the_field('bandeira')?>" alt="<?=the_title()?>" />
            <h4><?=the_title()?></h4>
          </div>

          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="continente">
        <button class="continente-name">
          <img src="<?=get_template_directory_URI()?>/img/src/arrow_blue.svg" />
          <h3><?=$asia?></h3>
        </button>

        <div class="pais-wrapper">
          <? query_posts( array( 'post_type' => 'paises', 'category_name' => 'asia', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) );  ?>
          <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>

          <div class="pais">
            <img src="<?=the_field('bandeira')?>" alt="<?=the_title()?>" />
            <h4><?=the_title()?></h4>
          </div>

          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="continente">
        <button class="continente-name">
          <img src="<?=get_template_directory_URI()?>/img/src/arrow_blue.svg" />
          <h3><?=$europa?></h3>
        </button>

        <div class="pais-wrapper">
          <? query_posts( array( 'post_type' => 'paises', 'category_name' => 'europa', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) );  ?>
          <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>

          <div class="pais">
            <img src="<?=the_field('bandeira')?>" alt="<?=the_title()?>" />
            <h4><?=the_title()?></h4>
          </div>

          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="continente">
        <button class="continente-name">
          <img src="<?=get_template_directory_URI()?>/img/src/arrow_blue.svg" />
          <h3><?=$oceania?></h3>
        </button>

        <div class="pais-wrapper">
          <? query_posts( array( 'post_type' => 'paises', 'category_name' => 'oceania', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) );  ?>
          <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>

          <div class="pais">
            <img src="<?=the_field('bandeira')?>" alt="<?=the_title()?>" />
            <h4><?=the_title()?></h4>
          </div>

          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();