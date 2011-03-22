<?php get_header(); ?>
    
<div id="content">
    
    <!-- Loop pegando o post -->
	<?php while(have_posts()) : the_post(); ?>

		<div class="post" id="<?php the_ID(); ?>">
		
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<div class="entry">
            	<!-- Conteudo do post -->
				<?php the_content(); ?>
			</div>
            
		</div>
        
        <div id="comment-area">
        	<!-- Comentarios do post -->
			<?php comments_template(); ?>
		</div>

	<?php endwhile; ?>
	
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>