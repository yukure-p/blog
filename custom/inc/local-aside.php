
      
        <?php if( get_field('idname') == 'moraeru'):?>
        <?php get_template_part('article/table/moraeru'); ?>
        <?php elseif(get_field('idname') == 'zanka'):?>
        <?php get_template_part('article/table/zanka'); ?>
        <?php elseif(get_field('idname') == 'kinto'):?>
        <?php get_template_part('article/table/kinto'); ?>
        <?php elseif(get_field('idname') == 'mota'):?>
        <?php get_template_part('article/table/mota'); ?>
        <?php elseif(get_field('idname') == 'cosmo'):?>
        <?php get_template_part('article/table/cosmo'); ?>
        <?php elseif(get_field('idname') == 'sompo'):?>
        <?php get_template_part('article/table/sompo'); ?>
        <?php elseif(get_field('idname') == 'noridoki'):?>
        <?php get_template_part('article/table/noridoki'); ?>
        <?php elseif(get_field('idname') == 'kuruka'):?>
        <?php get_template_part('article/table/kuruka'); ?>
        <?php elseif(get_field('idname') == 'nikonori'):?>
        <?php get_template_part('article/table/nikonori'); ?>
        <?php endif; ?>







