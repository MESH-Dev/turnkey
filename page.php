<?php get_header(); ?>

<div class="columns-7">

		<?php
		$classes = '';
	  if (have_rows('page_columns')):
		  $rows = get_field('page_columns');
			$row_count = count($rows);
			if($row_count == 1){
				 $classes= 'class="content columns-12"';
			} elseif($row_count == 2){
			  $classes='class="content columns-6"';
		  }
				 while(have_rows('page_columns')):the_row();
			//         // display a sub field value
					//   $content = the_sub_field('column_content');
					  ?>
					  <main class="main-content" id="content">
							  <?php
							  $callout = get_field('page_callout');
							  if ($callout) {
								  ?>
								  <h4 class="page-callout"><?php the_field('page_callout'); ?></h1>
									  <hr>
								  <?php
							  }
							  ?>
						  <div <?php echo $classes ?>>
							<?php the_sub_field('column_content'); ?>
						  </div>
					  </main>
					  <?php
				 endwhile;
			else :
				 // no rows found
			endif;
			?>
</div>

<!-- <main id="content">

	<div class="container">
		<div class="row">
			<div class="columns-9">
				<//?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<h1><//?php the_title(); ?></h1>

					<//?php the_content(); ?>

				<//?php endwhile; ?>
			</div>

			<div class="columns-3">

				 Change this to repeater of custom fields -->

				<!-- <//?php get_sidebar(); ?>
			</div>

		</div>
	</div>

</main> End of Content -->

<?php get_footer(); ?>
