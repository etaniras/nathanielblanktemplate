<?php get_header(); ?>
    <section class="row">
		<div class="two columns">
			&nspb;
		</div>
     <div class="eight columns">
            <?php 
			if (have_posts()) {        
				while (have_posts() ) {
					the_post();?> 
                    <h3><?php the_title(); ?></h3>
                    <?php the_content();
				} // end while;
            } // endif; 
			?>
        </div>
	

        <div class="two columns">
            &nspb;
        </div>

    </section>
<?php get_footer(); ?>
