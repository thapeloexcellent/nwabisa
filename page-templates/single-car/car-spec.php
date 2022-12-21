<div class="mt-4">
    <h5 class="fw-bold">Specifications:</h5>
</div>
<div class="nav nav-tabs mt-2" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
        role="tab" aria-controls="nav-home" aria-selected="true">Specifications</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
        role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
</div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
        <?php do_shortcode('[showSpec cid="' . esc_sql($_GET['cid']) . '"]'); ?>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
</div>
</div>