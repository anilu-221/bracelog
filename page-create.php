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
		<!--Image-->
		<div class="col-lg-6">
			<div class="card shadow bg-body-tertiary py-5">
				<div class="card-body d-flex flex-column justify-content-center align-items-center">
					<!-- Camera -->
					<div id="camera-wrapper">
						<video id="camera-stream" autoplay playsinline></video>
						<img id="overlay-image" style="position:absolute; top:0; left:0; opacity:0.5; display:none;">
						<button id="take-photo" class="btn btn-primary mt-2">Take Photo</button>
					</div>
				</div>
			</div>
		</div>

		<!--Uploader and Thumbnails-->
		<div class="col-lg-6">
			<div class="card shadow bg-body-tertiary">
				<div class="card-body d-flex flex-column justify-content-center align-items-center p-0 overflow-hidden">
					<!--Upload-->
					<div class="mb-3">
						<label for="image-upload" class="form-label"><?php echo esc_html__( 'Upload or take a photo', 'bracelog' ); ?></label>
						<input type="file" id="image-upload" class="form-control" accept="image/*" multiple>
						<small class="text-muted">Up to 10 images, each under 2MB.</small>
					</div>

					<!-- Thumbnails -->
					<div id="image-preview" class="row row-cols-2 row-cols-md-6 g-3 sortable-preview"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
