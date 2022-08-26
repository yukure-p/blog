<ul class="contents-list l-gid">
<?php
$args = array(
  'post_type'      => 'asp_cart', // 絞り込み検索をする投稿タイプ.
  'posts_per_page' => -1, // 1ページに表示する記事数.
  'post__not_in' => [53],
  'tax_query'      => array( // 検索条件.
    'relation' => 'AND',

  ),
);

// 検索条件を追加.
if ( ! empty( $asp_cat ) ) {
  $args['tax_query'][] = array(
    'taxonomy' => 'asp_cat',
    'field'    => 'slug',
    'terms'    => $asp_cat,
    'operator' => 'IN',
  );
}
$the_query = new WP_Query( $args );
?>




<?php while ( $the_query->have_posts() ) :
    $the_query->the_post();?>


          


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
                     </div>
                     <div class="box-txt">
                        <h1 class="box-tit">
                        <a href="<?php echo get_permalink($post->ID); ?>" class="link03"><?php echo get_the_title($post->ID); ?></a>
                        </h1>
                       
                     </div>
                     </div>
                  </div>
               </li>
              

            <?php
              endwhile;

            ?>
          </ul>





    

<?php

wp_reset_postdata();
?>
  <div class="number"><?php echo $the_query->found_posts; ?></div>

