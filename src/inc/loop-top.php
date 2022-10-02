<?php
  $args = array(
    'posts_per_page' => -1, // 表示する投稿数
    'post_type' => array('car_lease', 'asp_cart'), // 取得する投稿タイプのスラッグ
    'orderby' => 'date', //日付で並び替え
    'order' => 'DESC' // 降順 or 昇順
  );
  $my_posts = get_posts($args);
  ?>
  <?php foreach ($my_posts as $post) : setup_postdata($post); ?>

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
               <time datetime="" class="date"><?php the_time('Y.m.d') ?></time>
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
  
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>