<?php
$query = new WP_Query(
  array(
    'post_status' => 'publish',
    'post_type' => 'car_lease', // 任意のカスタム投稿タイプを設定。
    'posts_per_page' => 5, // 任意の記事数を設定。
    'meta_query' => array(
      array(
        'key' => 'check', 
        'value' => true,
      ),
    ),
  )
);

?>
<?php if( $query->have_posts() ): ?>






 <div class="l-aside pop">
  <h2 class="pop-tit">POPULAR POST</h2>
 <ul class="side-grid">
<?php while( $query->have_posts() ): $query->the_post(); ?>
   <li>
    <a href="<?php echo get_permalink($post->ID); ?>" class="link04 link03">
    <div class="box-img">
      <figure class="box-img">
       
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
       </figure>
    </div>
    <div class="box-tit">
      <?php echo get_the_title($post->ID); ?>
    </div>
    </a>
  </li>
<?php endwhile;
endif;
wp_reset_postdata();
?>
 </ul>
</div> 

