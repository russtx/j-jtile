<?php get_header(); ?>





	<section id="aboutContent">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
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



          </div>
      </div><!-- row -->
  </div><!-- container -->
</section><!-- aboutContent -->
<section id="aboutIconArea">
  <div class="aboutIcons">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h2>
              WE WILL DO OUR BEST TO<BR />
              ACCOMMODATE YOUR EVERY TILE NEED
            </h2>
        </div>
      </div><!-- row -->
    </div><!-- container -->

        <div class="clearfix"></div>
        <div class="iconBackground">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">

                <div class="col-xs-6 col-sm-3 icons">
                  <div class="spriteBox">
                    <a href="<?php echo home_url(); ?>"
                      <span class="sprite-2"></span>
                      <span class="spriteText">TILES</span>
                    </a>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-3 icons">
                  <div class="spriteBox">
                    <a href="<?php echo home_url(); ?>"
                      <span class="sprite-3"></span>
                      <span class="spriteText">GROUT</span>
                    </a>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-3 icons">
                  <div class="spriteBox">
                    <a href="<?php echo home_url(); ?>"
                      <span class="sprite-4"></span>
                      <span class="spriteText">OUR WORK</span>
                    </a>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-3 icons">
                  <div class="spriteBox">
                    <a href="<?php echo home_url(); ?>/contact/"
                      <span class="sprite-5"></span>
                      <span class="spriteText">CONTACT US</span>
                    </a>
                  </div>
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
      </div><!-- iconBackground -->
  </div><!-- aboutIcons -->
  <a href="#video" id="scrollDown-2" class="scrollDown">
    <span class="glyphicon glyphicon-menu-down"></span>
  </a>
</section>
<section id="video">
  <div class="video-container videoLeft">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/CJkX_JOqXGk" frameborder="0" allowfullscreen></iframe>
  </div><!-- videoLeft -->
  <div class="videoRight">
    <h2>0%</h2>
    <h3>FINANCING</h3>
    <h4>FOR QUALIFIED BUYERS</h4>
  </div><!-- videoRight -->
</section><!-- video -->


<?php get_footer(); ?>
