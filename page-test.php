<?php get_header(); ?>

<section id="hero"  >
	<div class="heroImage" style="background-image: url(<?php the_field('hero_image'); ?>);">
		<h1><?php echo get_field('hero_title'); ?></h1>
	</div>


</section><!-- heroTrails -->

<a class="hvr-bounce-to-bottom" href="#">Bounce To Bottom</a>
	<!-- section -->
	<section>
		<section id="ourWork">
		  <div class="container">
		    <div class="row">
		      <div class="col-xs-12 col-sm-10 col-sm-offset-1">
		        <div class="col-xs-12 col-sm-3 workSelections ">
		          <div class="att-nav">
		            <ul class="nav nav-stacked">
		              <?php $i = 1; ?>
		              <?php if(have_rows('gallery')) : while(have_rows('gallery')) : the_row(); ?>
		                <li role="presentation" <?php if($i == 1){ echo 'class="active"'; } ?> style="background:  url(<?php  the_sub_field('gallery_image'); ?>);">
		                  <a class="hvr-bounce-to-bottom" href="#gallery<?php echo $i; ?>" aria-controls="gallery<?php echo $i; ?>" role="tab" data-toggle="tab"><?php the_sub_field('gallery_name'); ?> </a>
		                </li>
		                <?php $i++; ?>
		              <?php endwhile; endif; ?>
		            </ul>
		          </div>
		        </div><!-- workSelections -->
		        <div class="col-xs-12 col-sm-9">
		          <div class="att-disp">
		          <div class="tab-content">
		            <?php $c = 1; ?>
		            <?php if(have_rows('gallery')) : while(have_rows('gallery')) : the_row(); ?>
		              <div role="tabpanel" class="tab-pane fade <?php if($c == 1){ echo 'in active'; } ?>" id="gallery<?php echo $c; ?>" >
		                <section id="carousel" class="carousel slide" data-ride="carousel">
		                  <div class="carousel-inner" role="listbox">
		                  <?php
		                  $images = get_sub_field('carousel');
		                  $item_counter = 1;
		                  foreach($images as $image): ?>
		                      <div class="item <?php if ($item_counter == 1) echo 'active'; ?> ">
		                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>" />
		                      </div><!-- item -->
		                  <?php $item_counter++; endforeach; ?>
		                </div><!-- carousel-inner -->
		          <!-- Controls -->

		        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
		          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		          <span class="sr-only">Previous</span>
		        </a>
		        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
		          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		          <span class="sr-only">Next</span>
		        </a>
		    </section><!-- carousel -->
		  </div><!-- tabpanel -->
		              <?php $c++; ?>
		            <?php endwhile; endif; ?>
		          </div><!-- tab-content -->
		        </div><!-- att-disp -->
		        </div><!-- col-xs-12 col-sm-9 -->
		      </div><!-- row -->
		    </div><!-- container -->
		  </section><!-- ourwork -->


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('mainContent'); ?>>

			<?php the_content(); ?>

			<?php comments_template( '', true ); // Remove if you don't want comments ?>

			<br class="clear">

			<?php edit_post_link(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, nothing to display.' ); ?></h2>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->




<?php get_footer(); ?>
