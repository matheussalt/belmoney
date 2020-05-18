<div class="carrossel-equipe">
  <div class="carrossel-wrapper">
    <?php $isFirst = true; ?>
    <?php query_posts( array( 'post_type' => 'equipe', 'posts_per_page' => -1 ) );  ?>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

    <div class="funcionario <?php if ($isFirst) { echo 'active'; } ?>">
      <div class="funcionario-img">
        <?php if (get_field('picture')) { ?>
        <img class="with-picture" src="<?=the_field('picture')?>" alt="<?=the_title()?>" />
        <?php } else { ?>
        <img class="without-picture" src="<?=get_template_directory_URI()?>/img/src/logo.svg" alt="Logotipo Belmoney" />
        <?php } ?>
      </div>

      <div class="funcionario-txt">
        <h4><?=the_title()?></h4>
        <p><?=the_field('funcoes')?></p>

        <?php if (get_field('linkedin')) { ?>
        <a href="<?=the_field('linkedin')?>" target="_blank">
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#linkedin"></use>
          </svg>
        </a>
        <?php } ?>
      </div>
    </div>

    <?php if ($isFirst) { $isFirst = false; } ?>
    <?php endwhile; ?>
    <?php endif; wp_reset_query(); ?>
  </div>
</div>