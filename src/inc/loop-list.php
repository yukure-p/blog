<?php if(have_posts()):?>
<?php while (have_posts()): the_post(); ?>

<li class="box-content">
  <div class="box-item">
     <figure class="box-img">
        <a href="<?php echo get_permalink($post->ID); ?>" class="linkBl01">
       <?php
        // アイキャッチ画像を取得
        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
        if (get_post_thumbnail_id($post->ID)) {
          echo '<figure><img src="' . $thumb_url[0] . '" alt=""></figure>';
        } else {
          // アイキャッチ画像が登録されていなかったときの画像
          echo '<figure><img src="' . get_template_directory_uri() . '/img/img-default.png" alt=""></figure>';
        }
        ?>
        </a>
     </figure>
     <div class="box-info">
     <div class="row-2col">
        <time datetime=""><?php the_time('Y.m.d') ?></time>
        <?php get_template_part('inc/cat-tag'); ?>
     </div>
     <div class="box-txt">
        <h1 class="box-tit">
        <a href="<?php echo get_permalink($post->ID); ?>" class="link03"><?php echo get_the_title($post->ID); ?></a>
        </h1>
     </div>

     </div>
  </div>
</li>

<?php endwhile;
endif;
wp_reset_postdata();
?>