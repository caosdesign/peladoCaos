<?php get_header(); ?>

		<?php if(have_posts()) : ?>
	
		<?php /* É uma categoria? */ if (is_category()) { ?>
		<h4 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h4>
		<?php /* É um arquivamento por tag? */ } elseif( is_tag() ) { ?>
		<h4 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h4>
		<?php /* É um arquivamento por dia? */ } elseif (is_day()) { ?>
		<h4 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h4>
		<?php /* É um arquivamento por mês? */ } elseif (is_month()) { ?>
		<h4 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h4>
		<?php /* É um arquivamento por ano? */ } elseif (is_year()) { ?>
		<h4 class="pagetitle">Archive for <?php the_time('Y'); ?></h4>
		<?php /* É um arquivamento por autor? */ } elseif (is_author()) { ?>
		<h4 class="pagetitle">Author Archive</h4>
		<?php /* É um arquivamento paginado? */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h4 class="pagetitle">Blog Archives</h4>
		<?php } ?>
			
		<?php while(have_posts()) : the_post(); ?>

		<div class="post" id="<?php the_ID(); ?>">
		
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<div class="entry">
				<?php the_content(); ?>
			</div>
		
		</div>

		<?php endwhile; else : ?>

		<div class="post">
		
			<h2>P&aacute;gina n&atilde;o encontrada</h2>
			
			<p>Parece que o que voc&ecirc; estava procurando n&atilde;o est&aacute; mais aqui. Tente realizar uma pesquisa abaixo.</p>
            
            <?php get_search_form(); ?>
		
		</div>

		<?php endif; ?>
	
    	<!-- Navegacao entre as paginas -->
        <div class="navigation clear">
			<div class="alignleft"><?php next_posts_link('&laquo; Anteriores') ?></div>
			<div class="alignright"><?php previous_posts_link('Pr&oacute;ximos &raquo;') ?></div>
		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>