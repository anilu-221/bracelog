<?php
/**
 * Template for header
 *
 * @package bracelog
 */

?>
<nav class="navbar navbar-expand-md bg-dark" data-bs-theme="dark">
	<div class="container py-2">
		<!--Logo-->
		<?php
		if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
			the_custom_logo();
		} else {
			?>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>
			<?php
		}
		?>


		<!--Toggle-->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!--Menu-->
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="ms-auto navbar-nav">
				<li class="nav-item">
					<a class="nav-link mx-md-2" href="#"><?php echo esc_html__( 'FAQ', 'bracelog' ); ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link mx-md-2" href="#"><?php echo esc_html__( 'About', 'bracelog' ); ?></a>
				</li>
				<li class="nav-item ms-md-3">
					<a class="btn btn-nav btn-outline-light" href="/create"><?php echo esc_html__( 'Create Timeline', 'bracelog' ); ?></a>
				</li>
			</ul>
		</div>
	</div>
</nav>
