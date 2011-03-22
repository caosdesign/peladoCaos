<?php get_header(); ?>

<div id="content">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Link para %s'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
			
			<div class="entry">
				<?php the_content('Leia o resto...'); ?>
			</div>

			<p class="postmetadata">
				Publicado por <?php the_author() ?> em <?php the_time('d/m/y') ?><br />
                <!-- Mais datas em: http://php.net/manual/en/function.date.php -->
				<?php printf(('Postado em %s'), get_the_category_list(', ')); ?> | 
                <?php edit_post_link(__('Editar'), '', ' | '); ?>  
                <?php comments_popup_link(('Sem coment&aacute;rios'), ('1 Coment&aacute;rio'), ('% Coment&aacute;rios'), '', ('Coment&aacute;rios fechados')); ?><br />
                <?php the_tags(('Tags:') . ' ', '| ', '<br />'); ?>
                <?php the_meta(); ?>
            </p>
		
		</div>

		<?php endwhile; ?>

            <div class="navigation">
                <div class="left"><?php next_posts_link('Mais antigos') ?></div>
                <div class="right"><?php previous_posts_link('Mais novos') ?></div>
            </div>
        
        <?php else : ?>
        
            <div class="post">
            
                <h2>P&aacute;gina n&atilde;o encontrada</h2>
                
                <p>Parece que o que voc&ecirc; estava procurando n&atilde;o est&aacute; mais aqui. Tente realizar uma pesquisa abaixo.</p>
                
                <?php get_search_form(); ?>
            
            </div>

		<?php endif; ?>
	
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>