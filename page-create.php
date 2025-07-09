<?php
/**
 * Create Page.
 *
 * @package bracelog
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="container py-5">
	<div class="row justify-content-center">
		<div class="col-lg-12">
			<div class="card shadow bg-body-tertiary py-5">
				<div class="card-body d-flex flex-column justify-content-center align-items-center">
					<!--Upload-->
					<div class="mb-3">
						<label for="image-upload" class="form-label"><?php echo esc_html__( 'Upload or take a photo', 'bracelog' ); ?></label>
						<input type="file" id="image-upload" class="form-control" accept="image/*" multiple>
						<small class="text-muted">Up to 10 images, each under 2MB.</small>
					</div>
					<!-- Camera -->
					<div id="camera-wrapper border shadow" class="mb-3">
						<video id="camera-stream" autoplay playsinline class="w-100 mb-2" style="max-height: 300px;"></video>
						<img id="overlay-image" style="position: absolute; top: 0; left: 0; opacity: 0.5; max-height: 300px; display: none;" />
						<button class="btn btn-sm btn-outline-primary" id="take-photo"><?php echo esc_html__( 'Take Photo', 'bracelog' ); ?></button>
					</div>

					<!-- Thumbnails -->
					<div id="image-preview" class="row row-cols-2 row-cols-md-4 g-3 sortable-preview"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
