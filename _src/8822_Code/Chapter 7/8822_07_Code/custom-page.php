<?php
/*
Template Name: My Custom Page Template
*/
?>

<?php

/**

 * @package WordPress

 * @subpackage Default_Theme

 */



get_header(); ?>



	<div id="content" class="customcolumn" role="main">

<br /><div class="breadcrumb">

<?php

if(function_exists('bcn_display'))

{

	bcn_display();

}

?>

</div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

		<h2><?php the_title(); ?></h2>

			<div class="entry">

				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>



				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>



			</div>

		</div>

		<?php endwhile; endif; ?>

	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	<?php comments_template(); ?> 



	<!--

		@page { margin: 0.79in }

		P { margin-bottom: 0.08in }

		A:link { so-language: zxx }

	-->



</div>

<?php get_sidebar('custom'); ?>

<?php get_footer(); ?>