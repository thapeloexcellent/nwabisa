<?php /*Template Name: Single page */
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
} else {
    _e('Sorry, no posts matched your criteria.', 'textdomain');
}
do_shortcode('[kitBread carBrand=""]');

get_footer(); ?>