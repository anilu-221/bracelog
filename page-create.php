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
		<div class="col-lg-5">
			<div class="card shadow bg-body-tertiary py-5">
				<div class="card-body d-flex flex-column justify-content-center align-items-center">
					<p>Image icon here</p>
					<a href="#" class="btn btn-primary btn-lg">
						<?php echo esc_html__( 'Add images', 'bracelog' ); ?>
					</a>
					<p class="mt-4 text-muted"><?php echo esc_html__( 'Upload images or take an image with your camera.', 'bracelog' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
