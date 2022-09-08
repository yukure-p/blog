<?php get_header(); ?>
<div class="l-frame">
<section>
    <div class="l-entry">
      <ul class="breadcrumb">
        <li><a href="<?php echo esc_url (home_url()); ?>">HOME</a></li>
        <li>CONTACT</li>
    </ul>  
      
    </div>
</section>

<section>
    <div class="l-container">
        <div class="l-section">

            <main>
                <div class="contents-box">
                    <div class="entry">
                        <h1 class="tit-01"><span>CONTACT</span></h1>
                        <?php

                        if(have_posts()): while(have_posts()): the_post();?>

                        <?php the_content(); ?>

                        <?php endwhile; endif; ?>

                    </div>
                </div>
            </main>

             <aside>
              <div class="l-aside-outer">
                <?php get_template_part('inc/aside'); ?>

              </div>
             </aside>

          </div>
    </div>

</section>
</div>







        














<?php get_footer(); ?>