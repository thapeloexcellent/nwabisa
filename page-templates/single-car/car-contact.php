<form class="h-100" id="contForm">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="ch1 d-flex align-items-center justify-content-center">
                    <h4>Contact Seller</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-floating my-3">
                    <input type="name" class="form-control" id="name" placeholder="name@example.com">
                    <label for="name" class="form-label fw-bold">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email" class="form-label fw-bold">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="car" placeholder="name@example.com"
                        value="<?php echo do_shortcode('[carName cid="' . esc_sql($_GET['cid']) . '"]'); ?>">
                    <label for="car" class="form-label fw-bold">Car</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="message" id="message" placeholder="Leave a comment here"
                        rows="4"
                        style="height:97%;">I would like to check the availability <?php echo do_shortcode('[carName cid="' . esc_sql($_GET['cid']) . '"]'); ?></textarea>
                    <label for="message" class="form-label fw-bold">Message</label>

                </div>
                <button type="submit" class="btn w-100" style="height: 37px;">Submit</button>
            </div>
        </div>
    </div>
</form>