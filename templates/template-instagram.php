<?php /*
* Template Name: Instagram Feed Page
*/ get_header(); ?>
<!-- <script>
// Old Instafeed JS. Was directly in instagram page php
var userFeed = new Instafeed({
    get: 'user',
   //  clientId: 'd346c1de6d274f4994f9345b72b3a633',
    userId: 1167443738,
    accessToken: '1167443738.d346c1d.1213de64f26e485e8ffe33eab03e1905',
    template: '<div class="half"><div class="instagram-image"><a href="{{link}}"><img src="{{image}}" /></a></div><div class="instagram-caption"><p>{{caption}}</p></div></div>',
   //  resolution: 'standard_resolution'
});
userFeed.run();
</script> -->
<div class="columns-7">
	<main class="main-content" id="content">
		<?php
		$callout = get_field('page_callout');
		if ($callout) {
			?>
			<h4 class="page-callout"><?php the_field('page_callout'); ?></h1>
				<hr class="callout-hr">
			<?php
		} ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
      <div id="instafeed"></div>
	</main>
</div>
<?php get_footer(); ?>
