<?php include "header.php"; ?>
    


<section class="row">
    <div class="col-sm-12">
        <div class="leader">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p> 

        <?php endwhile; else : ?>

			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

		<?php endif; ?>

        </div>
    </div>
</section>

<?php include "footer.php"; ?>