

<?php get_header(); ?>

<!--  -->

<div class='jumbotron'>
The Content Lead: Call to Action 

</div>
<!-- <button class='btn btn-success'> Test </button> -->

<!-- All POST defined in our will be listed here -->    
<!-- <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?> --> <!-- why don't see the whole post, when clicking the tag -->
<!-- </div>
<?php endwhile; ?>
<?php endif; ?> -->


<div class=row>
<?php wp_list_pages(  ); ?> 
</div>
 <hr style='float: clear'>
<?php
// TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
        <br>
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
endwhile; //resetting the page loop
wp_reset_query(); //resetting the page query
?>

</div> <!-- div.container : defined in header.php ->     
 <?php get_footer(); ?>


