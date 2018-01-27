<?php
/*
 * Template Name: hmtif
 * Template Post Type: post, page, product
 */
  
 get_header();  ?>

<div class="jumbotron">
  	<div class="container">
    	<div class="row">
    		<div class="col-sm-8">
    		</div>		
    	</div>
  	</div>
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

         <h1 class="mt-4"><?php the_title(); ?></h1>

          <!-- Author -->
          <p class="lead">
           oleh <?php the_author(); ?>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Diposting pada <?php echo get_the_date(); ?>, pukul <?php echo get_the_time(); ?></p>

          <hr>

          <!-- Post Content -->
          <p><?php the_content(); ?></p>

<?php endwhile; ?>
<?php endif; ?>


         </div>
     </div>
 </div>
<br><br><br>
 