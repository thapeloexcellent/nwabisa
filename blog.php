<?php /*Template Name: Blog */ ?>
<?php get_header(); ?>
<div id="site-header" class="d-flex align-items-center justify-content-center">
    <h2><?php echo ucwords(str_replace('-', ' ', $pagename)); ?></h2>
</div>
<div class="p-0 m-0">
    <div class="row">
        <div class="col">sadadasd
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            } else {
                _e('Sorry, no posts matched your criteria.', 'textdomain');
            } ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>