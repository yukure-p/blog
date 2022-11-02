<?php get_header(); ?>
<main>
  <div class="l-frame">

    <div class="l-entry">
      <?php breadcrumb(); ?>
      <section>
        <div class="entry-box">
          <h1 class="tit-01"><span><?php echo esc_html(get_post_type_object(get_post_type())->label); ?>記事一覧</span></h1>
        </div>
      </section>
    </div>
    <!-- /.l-entry -->

    <div class="l-container">
      <section>
        <div class="l-contents">

          <ul class="contents-list l-grid">

<?php
$args = array (
'post_type' => 'car_lease',
'posts_per_page' => -1,
'tax_query' => array(
array(
'taxonomy' => 'car_cat', //タクソノミーを指定
'field' => 'slug', //ターム名をスラッグで指定する
'terms' => 'com', //表示したいタームをスラッグで指定
'operator' => 'IN'
),
)
);
$car_lease = new WP_Query( $args );
if ( $car_lease -> have_posts()):
?>
<?php
while ($car_lease -> have_posts()): $car_lease -> the_post();
?>

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

<?php endwhile;
endif;
wp_reset_postdata();
?>
               
          </ul>
        </div>
      </section>

      <aside>
        <div class="l-aside-outer">
          <?php get_template_part('inc/aside'); ?>
        </div>
      </aside>

      
    </div>

  </div>
  <!-- /.l-frame -->
</main>
<?php get_footer(); ?>