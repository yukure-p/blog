   <li class="box-content">
      <a href="<?php echo get_permalink($post->ID); ?>" class="link04 link03">
      <div class="box-item">
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
         <div class="box-info">
            <div class="row-2col">
               <time datetime="" class="date"><?php the_time('Y.m.d') ?></time>
            </div>
            <div class="box-txt">
               <h1 class="box-tit">
               <?php echo get_the_title($post->ID); ?>
               </h1>
              
            </div>
         </div>
      </div>
      </a>
   </li>