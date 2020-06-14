<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<?php if( have_rows('banner') ): ?>
<?php while( have_rows('banner') ): the_row(); 

$titulo_1 = get_sub_field('titulo_1');
$titulo_2 = get_sub_field('titulo_2');
$botao = get_sub_field('botao');
$frase_1 = get_sub_field('frase_1');
$frase_2 = get_sub_field('frase_2');
?>

<section class="banner">
  <div class="container">
    <div class="banner-wrapper">
      <div class="banner-txt" data-animar>
        <h1><?=$titulo_1?> <strong><?=$titulo_2?></strong></h1>
        <a href="#" class="btn-cta">
          <span><?=$botao?></span>
        </a>
      </div>

      <div class="banner-frases" data-animar>
        <div>
          <img class="banner-wave-light" src="<?=get_template_directory_URI()?>/img/src/100.svg" />

          <span><?=$frase_1?></span>
        </div>

        <div>
          <img class="banner-wave-light" src="<?=get_template_directory_URI()?>/img/src/confianca.svg" />

          <span><?=$frase_2?></span>
        </div>
      </div>

      <?php include 'img/svg/home/mouse_vector.php'; ?>
    </div>

    <div class="banner-img" data-animar>
      <?php include 'img/svg/home/banner_vector.php'; ?>
    </div>
  </div>

  <img class="banner-wave-light" src="<?=get_template_directory_URI()?>/img/src/banner_wave_light.svg"
    alt="Vetor decorativo" />
  <img class="banner-wave-dark" src="<?=get_template_directory_URI()?>/img/src/banner_wave_dark.svg"
    alt="Vetor decorativo" />
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('como') ): ?>
<?php while( have_rows('como') ): the_row(); 

$titulo = get_sub_field('titulo');
$texto = get_sub_field('texto');
?>

<section class="como">
  <div class="container">
    <div class="como-img">
      <?php include 'img/svg/home/notebook_guys_vector.php'; ?>
    </div>

    <div class="como-txt">
      <h2><?=$titulo?></h2>

      <p><?=$texto?></p>
    </div>
  </div>

  <img class="como-wave-dark" src="<?=get_template_directory_URI()?>/img/src/como_wave_dark.svg"
    alt="Vetor decorativo" />
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('necessidade') ): ?>
<?php while( have_rows('necessidade') ): the_row(); 

$titulo = get_sub_field('titulo');
$texto = get_sub_field('texto');
$botao = get_sub_field('botao');
?>

<section class="necessidade">
  <div class="box-animation blue"></div>

  <div class="container">
    <h2><?=$titulo?></h2>

    <div class="necessidade-wrapper">
      <div class="necessidade-txt">
        <?=$texto?>
      </div>

      <a class="btn-cta lighter" href="<?=site_url()?>/">
        <span><?=$botao?></span>
      </a>
    </div>

    <ul class="necessidade-items">
      <?php include 'necessidade_items.php'; ?>
    </ul>
  </div>

  <img class="banner-wave" src="<?=get_template_directory_URI()?>/img/src/wave_grey.svg" alt="Vetor decorativo" />
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('compromisso') ): ?>
<?php while( have_rows('compromisso') ): the_row(); 

$texto_1 = get_sub_field('texto_1');
$texto_2 = get_sub_field('texto_2');
$regulamentado = get_sub_field('regulamentado');
$autorizado = get_sub_field('autorizado');
$membro = get_sub_field('membro');
?>

<section class="compromisso">
  <div class="container">
    <div class="compromisso-txt">
      <?=$texto_1?>
    </div>

    <div class="compromisso-img">
      <?php include 'img/svg/home/protection_guys.php'; ?>
    </div>

    <div class="compromisso-img">
      <?php include 'img/svg/home/world_guys.php'; ?>
    </div>

    <div class="compromisso-txt">
      <?=$texto_2?>
    </div>
  </div>

  <div class="container">
    <div class="regulamentado">
      <p><?=$regulamentado?></p>

      <div>
        <img src="<?=get_template_directory_URI()?>/img/src/regulamentado.png" alt="Regulamentado" />
      </div>
    </div>

    <div class="autorizado">
      <p><?=$autorizado?></p>

      <div>
        <img src="<?=get_template_directory_URI()?>/img/src/autorizado_1.png" alt="Autorizado" />
        <img src="<?=get_template_directory_URI()?>/img/src/autorizado_2.png" alt="Autorizado" />
      </div>
    </div>

    <div class="regulamentado">
      <p><?=$membro?></p>

      <div>
        <img src="<?=get_template_directory_URI()?>/img/src/fintech.png" alt="Fintech" />
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('economia') ): ?>
<?php while( have_rows('economia') ): the_row(); 

$texto = get_sub_field('texto');
?>

<section class="economia">
  <div class="box-animation blue"></div>

  <div class="container">
    <div class="economia-txt">
      <?=$texto?>
    </div>

    <div class="economia-img">

      <?php include 'img/svg/home/economia_guys.php'; ?>
    </div>
  </div>

  <img class="banner-wave" src="<?=get_template_directory_URI()?>/img/src/wave_grey.svg" alt="Vetor decorativo" />
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();