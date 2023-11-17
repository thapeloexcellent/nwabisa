<?php /*Template Name: Home */
get_header();
require('carousel-temp1.php');
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
} else {
    _e('Sorry, no posts matched your criteria.', 'textdomain');
}

?>

<?php
get_footer();
?>
