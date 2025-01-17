<?php /**
 * Content template
 * 
 * @package vaniz
 */
?>
<h3><?php the_title();?></h3>
<div><?php the_excerpt();?></div>
<article id="post-<?php the_ID();?>" <?php post_class('mb-5');?>>
    <?php 
    get_template_part('template-parts/components/blog/entry-header');
    get_template_part('template-parts/components/blog/entry-meta');
    get_template_part('template-parts/components/blog/entry-content');
    get_template_part('template-parts/components/blog/entry-footer');
    ?>
</article>