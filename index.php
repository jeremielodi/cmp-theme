<?php get_header(); ?>


<div id="ttr_main" class="post-content">

<div class="content-desc">

<div class="row" style="color:#001 !important">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post article">
<h1 class="post-title"><?php the_title(); ?></h1>
<h4 class="post-date"><i>Posted on <?php the_time('F jS, Y') ?></i></h4>
<p><?php the_content(__('(more...)')); ?></p>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>