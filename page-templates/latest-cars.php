<div class="container-fluid" id="lastestwrapper">
    <div class="row">
        <div class="col">
            <div class="container mt-5">
                <div class="row">
                    <div class="col">
                        <h2 class="fw-bold">Latest Offers</h2>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 4, // Number of recent posts thumbnails to display
                        'post_status' => 'publish' // Show only the published posts
                    ));
                    foreach ($recent_posts as $key => $post_item) :

                      
                        do_shortcode('[carcard theCar="' . $post_item['post_title'] . '"]');
                    ?>

                    <?php
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>