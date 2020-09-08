<?php
/**
 * Template Name: contato
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="contato-banner">
  <div class="container">
    <div class="banner-contato-txt">
      <h1><?=the_field('titulo_banner')?></h1>
    </div>

    <div class="banner-contato-img">
      <?php include 'img/svg/contato/banner_vector.php'; ?>
    </div>
  </div>
</section>

<section class="contato">
  <div class="container">
    <?php echo do_shortcode('[contact-form-7 id="266" title="Contato"]'); ?>
  </div>
</section>

<section class="perguntas">
  <div class="container">
    <h2><?=the_field('perguntas_frequentes')?></h2>

    <div class="perguntas-wrapper">
      <?php query_posts( array( 'post_type' => 'perguntas_frequentes','posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' ) );  ?>
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
      <?php endif; wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php if( have_rows('dados') ): ?>
<?php while( have_rows('dados') ): the_row(); 

$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$contato = get_sub_field('contato');
$botao = get_sub_field('botao');
?>

<section class="dados">
  <div class="container">
    <div class="atendimento">
      <div class="atendimento-txt">
        <strong><?=$titulo?></strong>
        <p><?=$subtitulo?></p>
        <!-- <?=$contato?> -->
        <h3>+32 2 537 65 03</h3>
        <h4>E-mail</h4>
        <p>info@belmoney.be</p>
        <a href="#" class="btn-cta lighter"><?=$botao?></a>
      </div>

      <div class="atendimento-maps">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.5883840636766!2d4.333483815745514!3d50.83878777953083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c5df6f9d4bcd%3A0x7bf6d01c347e878d!2sBT%20Money%20Transfers%20%26%20Exchange%20-%20BARA%20(Belmoney%2C%20Western%20Union%2C%20RIA)!5e0!3m2!1spt-BR!2sbr!4v1599599435611!5m2!1spt-BR!2sbr"
          frameborder="0" allowfullscreen="" aria-hidden="false"></iframe>
      </div>
    </div>

    <div class="atendimento-img">
      <?php include 'img/svg/contato/dados_vector.php'; ?>
    </div>
  </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();