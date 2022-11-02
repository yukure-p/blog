
      
        <?php if( get_field('idname') == 'autoflat'):?>
        <?php get_template_part('article-com/table/autoflat'); ?>
        <?php elseif(get_field('idname') == 'karumo'):?>
        <?php get_template_part('article-com/table/karumo'); ?>
        <?php elseif(get_field('idname') == 'kinto'):?>
        <?php get_template_part('article-com/table/kinto'); ?>
        <?php elseif(get_field('idname') == 'mota'):?>
        <?php get_template_part('article-com/table/mota'); ?>
        <?php elseif(get_field('idname') == 'cosmo'):?>
        <?php get_template_part('article-com/table/cosmo'); ?>
        <?php elseif(get_field('idname') == 'sompo'):?>
        <?php get_template_part('article-com/table/sompo'); ?>
        <?php elseif(get_field('idname') == 'noridoki'):?>
        <?php get_template_part('article-com/table/noridoki'); ?>
        <?php elseif(get_field('idname') == 'kuruka'):?>
        <?php get_template_part('article-com/table/kuruka'); ?>
        <?php elseif(get_field('idname') == 'nikonori'):?>
        <?php get_template_part('article-com/table/nikonori'); ?>
        <?php endif; ?>







