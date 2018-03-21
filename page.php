<?php
get_header();

get_sidebar();

if ( have_posts() ) :
	while ( have_posts() ) : the_post();
?>

  <div>
        <p><?php the_content();?></p>
  </div>

<?php
  endwhile;
else :
  echo wpautop( 'Sorry, no posts were found' );
endif;

get_footer();
?>