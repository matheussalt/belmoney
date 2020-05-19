<?php if( have_rows('itens') ): ?>
<?php while( have_rows('itens') ): the_row(); 

$necessidade_1 = get_sub_field('necessidade_1');
$necessidade_2 = get_sub_field('necessidade_2');
$necessidade_3 = get_sub_field('necessidade_3');
$necessidade_4 = get_sub_field('necessidade_4');
?>

<li class="necessidade-item fadeUp" data-animar>
  <div class="necessidade-img">
    <?php include 'img/svg/home/necessidade_envio.php'; ?>
  </div>

  <div class="necessidade-txt">
    <span><?=$necessidade_1?></span>
  </div>
</li>

<li class="necessidade-item fadeUp" data-animar>
  <div class="necessidade-img">
    <?php include 'img/svg/home/necessidade_compre.php'; ?>
  </div>

  <div class="necessidade-txt">
    <span><?=$necessidade_2?></span>
  </div>
</li>

<li class="necessidade-item fadeUp" data-animar>
  <div class="necessidade-img">
    <?php include 'img/svg/home/necessidade_utilize.php'; ?>
  </div>

  <div class="necessidade-txt">
    <span><?=$necessidade_3?></span>
  </div>
</li>

<li class="necessidade-item fadeUp" data-animar>
  <div class="necessidade-img">
    <?php include 'img/svg/home/necessidade_pague.php'; ?>
  </div>

  <div class="necessidade-txt">
    <span><?=$necessidade_4?></span>
  </div>
</li>

<?php endwhile; ?>
<?php endif; ?>