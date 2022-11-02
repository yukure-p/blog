
      <div class="l-aside hikaku">
      <a href="<?php echo esc_url (home_url('/car_lease/32/')); ?>" class="link04">
        <figure>
          <img src="<?php echo get_template_directory_uri()?>/img/car_lease/hikaku.jpg" alt="カーリース比較">
        </figure>
      </a>
      </div>



<?php
if ( is_front_page() ) :?>
<?php get_template_part('inc/aside-popular'); ?>
<?php get_template_part('inc/aside-profile'); ?>
<?php endif; ?>
<?php
if ( is_search() ) :?>
<?php get_template_part('inc/aside-popular'); ?>
<?php get_template_part('inc/aside-profile'); ?>
<?php endif; ?>
<?php
if ( is_archive() ) :?>
<?php get_template_part('inc/aside-popular'); ?>
<?php get_template_part('inc/aside-profile'); ?>
<?php endif; ?>
<?php
if ( is_page() ) :?>
<?php get_template_part('inc/aside-popular'); ?>
<?php get_template_part('inc/aside-profile'); ?>
<?php endif; ?>