<?php
/**
 * Template Name: solucoes
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<?php if( have_rows('banner') ): ?>
<?php while( have_rows('banner') ): the_row(); 

$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$frase_1 = get_sub_field('frase_1');
$frase_2 = get_sub_field('frase_2');
?>

<section class="banner-solucoes">
  <div class="container">
    <div class="banner-solucoes-txt">
      <h1 class="fadeRight" data-animar><?=$titulo?></h1>
      <h2 class="fadeRight" data-animar><?=$subtitulo?></h2>
      <p class="fadeUp" data-animar><?=$frase_1?></p>
      <p class="fadeUp" data-animar><?=$frase_2?></p>
    </div>

    <div class="banner-solucoes-img fadeLeft" data-animar>
      <?php include 'img/svg/solucoes/city_guys.php'; ?>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('fazer_pagamentos') ): ?>
<?php while( have_rows('fazer_pagamentos') ): the_row(); 

$titulo = get_sub_field('titulo');
$explicacao_1 = get_sub_field('explicacao_1');
$explicacao_2 = get_sub_field('explicacao_2');
$explicacao_3 = get_sub_field('explicacao_3');
?>

<section class="fazer-pagamentos">
  <div class="container">
    <h2 class="fadeUp" data-animar><?=$titulo?></h2>

    <div class="item-with-svg-wrapper">
      <div class="item-with-svg fadeUp" data-animar>
        <?php include 'img/svg/solucoes/pagamento_1.php'; ?>
        <p><?=$explicacao_1?></p>
      </div>

      <div class="item-with-svg fadeUp" data-animar>
        <?php include 'img/svg/solucoes/pagamento_2.php'; ?>
        <p><?=$explicacao_2?></p>
      </div>

      <div class="item-with-svg fadeUp" data-animar>
        <?php include 'img/svg/solucoes/pagamento_3.php'; ?>
        <p><?=$explicacao_3?></p>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('como_funcionam') ): ?>
<?php while( have_rows('como_funcionam') ): the_row(); 

$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$explicacao_1 = get_sub_field('explicacao_1');
$explicacao_2 = get_sub_field('explicacao_2');
$explicacao_3 = get_sub_field('explicacao_3');
?>

<section class="como-funcionam">
  <div class="container">
    <h2 class="fadeUp" data-animar><?=$titulo?></h2>
    <p class="fadeUp" data-animar><?=$subtitulo?></p>

    <div class="item-with-svg-wrapper">
      <div class="item-with-svg fadeUp" data-animar>
        <?php include 'img/svg/solucoes/suporte.php'; ?>
        <p><?=$explicacao_1?></p>
      </div>

      <div class="item-with-svg fadeUp" data-animar>
        <?php include 'img/svg/solucoes/conjunto.php'; ?>
        <p><?=$explicacao_2?></p>
      </div>

      <div class="item-with-svg fadeUp" data-animar>
        <?php include 'img/svg/solucoes/monitoramento.php'; ?>
        <p><?=$explicacao_3?></p>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('padroes') ): ?>
<?php while( have_rows('padroes') ): the_row(); 

$titulo = get_sub_field('titulo');
$explicacao_1 = get_sub_field('explicacao_1');
$explicacao_2 = get_sub_field('explicacao_2');
$explicacao_3 = get_sub_field('explicacao_3');
?>

<section class="padroes-monitoramento">
  <div class="container">
    <h2 class="fadeUp" data-animar><?=$titulo?></h2>

    <div class="item-with-svg-wrapper">
      <div class="item-with-svg fadeUp" data-animar>
        <?php include 'img/svg/solucoes/capacitado.php'; ?>
        <p><?=$explicacao_1?></p>
      </div>

      <div class="item-with-svg fadeUp" data-animar>
        <?php include 'img/svg/solucoes/gerenciamento.php'; ?>
        <p><?=$explicacao_2?></p>
      </div>

      <div class="item-with-svg fadeUp" data-animar>
        <?php include 'img/svg/solucoes/verificacao.php'; ?>
        <p><?=$explicacao_3?></p>
      </div>
    </div>

    <?php if( have_rows('apoio') ): ?>
    <?php while( have_rows('apoio') ): the_row(); 

    $titulo = get_sub_field('titulo');
    $texto = get_sub_field('texto');
    $botao = get_sub_field('botao');
    ?>

    <div class="apoio">
      <div class="apoio-txt fadeUp" data-animar>
        <h3><?=$titulo?></h3>
        <p><?=$texto?></p>
        <a href="<?=site_url()?>/" class="btn-cta lighter"><?=$botao?></a>
      </div>

      <div class="apoio-img fadeLeft" data-animar>
        <?php include 'img/svg/solucoes/engine_guys.php'; ?>
      </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('happ') ): ?>
<?php while( have_rows('happ') ): the_row(); 

$texto = get_sub_field('texto');
$botao = get_sub_field('botao');
?>

<section class="happ" style="background-image: url('<?=get_template_directory_URI()?>/img/src/happ_background.svg');">
  <div class="container">
    <div class="happ-txt fadeRight" data-animar>
      <img src="<?=get_template_directory_URI()?>/img/src/logo_happ.svg" alt="Logotipo Happ" />
      <?=$texto?>

      <a class="btn-cta lighter" href="#" target="_blank"><?=$botao?></a>
    </div>

    <div class="happ-img fadeLeft" data-animar>
      <img class="phone-back" src="<?=get_template_directory_URI()?>/img/src/phone_back.png" alt="App Happ" />
      <img class="phone-front" src="<?=get_template_directory_URI()?>/img/src/phone_front.png" alt="App Happ" />
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>


<section class="transferencia">
  <div class="container">
    <?php if( have_rows('transferencia_intercional') ): ?>
    <?php while( have_rows('transferencia_intercional') ): the_row(); 

    $titulo = get_sub_field('titulo');
    $texto = get_sub_field('texto');
    $botao = get_sub_field('botao');
    ?>

    <div class="transferencia-txt fadeUp" data-animar>
      <h2><?=$titulo?></h2>
      <?=$texto?>
      <a class="btn-cta lighter" href="#"><?=$botao?></a>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>

    <div class="transferencia-img fadeUp" data-animar>
      <?php include 'img/svg/solucoes/palacio_woman.php'; ?>
    </div>

    <div class="transferencia-img fadeUp" data-animar>
      <?php include 'img/svg/solucoes/phone_woman.php'; ?>
    </div>

    <?php if( have_rows('como_realizar') ): ?>
    <?php while( have_rows('como_realizar') ): the_row(); 

    $titulo = get_sub_field('titulo');
    $texto = get_sub_field('texto');
    $botao = get_sub_field('botao');
    ?>

    <div class="transferencia-txt fadeUp" data-animar>
      <h2><?=$titulo?></h2>
      <?=$texto?>
      <a class="btn-cta lighter" href="#"><?=$botao?></a>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<?php if( have_rows('como_receber') ): ?>
<?php while( have_rows('como_receber') ): the_row(); 

$titulo = get_sub_field('titulo');
$explicacao_1 = get_sub_field('explicacao_1');
$explicacao_2 = get_sub_field('explicacao_2');
$explicacao_3 = get_sub_field('explicacao_3');
?>

<section class="como-receber">
  <div class="container">
    <h2 class="fadeUp" data-animar><?=$titulo?></h2>

    <div class="item-with-svg-wrapper">
      <div class="item-with-svg fadeUp" data-animar>
        <div>
          <h4><?=$explicacao_1['subtitulo']?></h4>
          <p><?=$explicacao_1['texto']?></p>
        </div>
        <a class="btn-cta lighter" href="<?=site_url()?>/"><?=$explicacao_1['botao']?></a>
      </div>

      <div class="item-with-svg fadeUp" data-animar>
        <div>
          <h4><?=$explicacao_2['subtitulo']?></h4>
          <p><?=$explicacao_2['texto']?></p>
        </div>
        <a class="btn-cta lighter" href="<?=site_url()?>/"><?=$explicacao_2['botao']?></a>
      </div>

      <div class="item-with-svg fadeUp" data-animar>
        <div>
          <h4><?=$explicacao_3['subtitulo']?></h4>
          <p><?=$explicacao_3['texto']?></p>
        </div>
        <a class="btn-cta lighter" href="<?=site_url()?>/"><?=$explicacao_3['botao']?></a>
      </div>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('para_provedores') ): ?>
<?php while( have_rows('para_provedores') ): the_row(); 

$titulo = get_sub_field('titulo');
$texto = get_sub_field('texto');
$explicacao_1 = get_sub_field('explicacao_1');
$explicacao_2 = get_sub_field('explicacao_2');
$explicacao_3 = get_sub_field('explicacao_3');
$explicacao_4 = get_sub_field('explicacao_4');
?>

<section class="para-provedores">
  <div class="container">
    <h2><?=$titulo?></h2>
    <?=$texto?>

    <div class="item-with-svg-wrapper">
      <div class="item-with-svg fadeUp" data-animar>
        <img src="<?=get_template_directory_URI()?>/img/src/provedores_1.svg" />
        <p><?=$explicacao_1?></p>
      </div>

      <div class="item-with-svg fadeUp" data-animar>
        <img src="<?=get_template_directory_URI()?>/img/src/provedores_2.svg" />
        <p><?=$explicacao_2?></p>
      </div>

      <div class="item-with-svg fadeUp" data-animar>
        <img src="<?=get_template_directory_URI()?>/img/src/provedores_3.svg" />
        <p><?=$explicacao_3?></p>
      </div>

      <div class="item-with-svg fadeUp" data-animar>
        <img src="<?=get_template_directory_URI()?>/img/src/provedores_4.svg" />
        <p><?=$explicacao_4?></p>
      </div>
    </div>
  </div>

  <img class="wave" src="<?=get_template_directory_URI()?>/img/src/sobre_wave.svg" alt="Vetor decorativo" />
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('para_comerciantes') ): ?>
<?php while( have_rows('para_comerciantes') ): the_row(); 

$titulo = get_sub_field('titulo');
$texto = get_sub_field('texto');
?>

<section class="para-comerciantes">
  <div class="container">
    <div class="para-comerciantes-txt">
      <h2><?=$titulo?></h2>
      <?=$texto?>
    </div>

    <div class="para-comerciantes-img">
      <?php include 'img/svg/solucoes/maleta_guys.php'; ?>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();