<?php get_header(); ?>
<div class="main">
	<h1 class="title">404</h1>
	<hr class="flex flex--full separator">
	<p class="paragraph">
		<?php _e("The requested resource was not found"); ?>.
	</p>
	<style type="text/css">
		.stream {
			animation: stream--not-found 3.2s infinite;
			transform: rotate(180deg);
		}

		@keyframes stream--not-found {
			0% {
				opacity: 1;
			}
			85% {
				opacity: 1;
			}
			90% {
				opacity: 0;
			}
			91% {
				opacity: 1;
			}
			95% {
				opacity: 0;
			}
			99% {
				opacity: 1;
			}
		}
	</style>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>