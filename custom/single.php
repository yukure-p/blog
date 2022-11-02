<?php get_header(); ?>
<div id="fix"></div>
<?php if(have_posts()):?>
<?php while (have_posts()): the_post(); ?>
<div class="l-frame">
    <div class="l-entry">
      <?php breadcrumb(); ?>
    </div>

<section>
  
    <div class="l-container">
      <div class="l-section">

        <main>
          <div class="contents-box">
            <div class="entry">
                <h1 class="l-entry-title" ><span><?php echo get_the_title($post->ID); ?></span></h1>
                <div class="l-entry-info row-2col">
                  
                  <time datetime="<?php echo get_the_date('Y.n.d'); ?>"><?php echo get_the_date('Y.n.d'); ?></time>
                  
                  
                </div>
                <div class="entry-img">
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
                
                </div>
            </div>
            <!-- <div class="table-of-content">
                <h1 class="aside-tit">この記事の目次</h1>
                <div class="l-aside-inner">
                    <ul class="l-aside-menu">
                      
                    </ul>
                </div>
              </div> -->
              <article>
                
              <?php if( get_field('idname') == 'moraeru'):?>
              <?php get_template_part('article/moraeru'); ?>
              <?php elseif( get_field('idname') == 'zanka'):?>
              <?php get_template_part('article/zanka'); ?>
              <?php endif; ?>
              
              </article>
          </div>

        </main>
<?php endwhile; ?>
<?php endif; ?>

        <aside>
            <div class="l-aside-outer">
                <?php get_template_part('inc/aside'); ?>
                <div class="l-aside local">
                    <h1 class="aside-tit">この記事の目次</h1>
                    <div class="l-aside-inner">
                        <ul class="l-aside-menu index" id="indexList">
                            <?php get_template_part('inc/local-aside'); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>

      </div>
    </div>
  
  
</section>


<?php
// おすすめの記事一覧を取得
$posts = get_field('related');
if( $posts ):
?>
   <section>
      <div class="l-container related">
         <h1 class="tit-01"><span>関連する記事</span></h1>
         <div class="l-contents related">
            <ul class="contents-list l-grid type01">

                <?php foreach( $posts as $post ): ?>
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
                     <!-- <div class="row-2col">
                        <time datetime=""><?php the_time('Y.m.d') ?></time>
                        <?php get_template_part('inc/cat-tag'); ?>
                     </div> -->
                     <div class="box-txt">
                        <h1 class="box-tit">
                        <a href="<?php echo get_permalink($post->ID); ?>" class="link03"><?php echo get_the_title($post->ID); ?></a>
                        </h1>
                     </div>

                     </div>
                  </div>
                </li>

                <?php endforeach; ?>

            </ul>
        


        </div>
      </div>
     </section>
     <?php endif; ?>
</div>



<div class="breadcrumb-sp">
 <?php breadcrumb(); ?>       
</div>
<?php get_footer(); ?>