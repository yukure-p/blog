<span class="category-tag">
<?php
  $post_label = esc_html(get_post_type_object(get_post_type())->label); 
  if($post_label=='カーリース'){
     $my_post_class = 'car';
     $my_post_url = 'car_lease';
    } else if ($post_label=='ショップカートASP'){
      $my_post_class = 'asp';
      $my_post_url = 'asp_cart';
    }
?>
  
    <a href="<?php echo esc_url (home_url()); ?>/<?php echo ( $my_post_url ); ?>/" 
      <?php echo ( $my_post_class )  ? ' class="link01 ' . $my_post_class . '"' : ''; ?>>
      <?php echo esc_html(get_post_type_object(get_post_type())->label); ?></a>

</span>