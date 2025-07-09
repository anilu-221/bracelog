<?php
/**
 * Template for footer
 *
 * @package bracelog
 */

?>
<div class="footer bg-body-tertiary">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php echo esc_html__( 'All rights reserved.', 'bracelog' ); ?></p>
			</div>
			<div class="col-md-6 text-end">
				<p><?php echo esc_html__( 'Powered by coffee', 'bracelog' ); ?></p>
			</div>
		</div>
	</div>
</div>
