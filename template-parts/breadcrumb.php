<?php
/**
 * The template used for displaying page breadcrumb
 *
 * @package Fetch
 */

$breadcrumb = get_theme_mod( 'breadcrumb',true ); 
$header_style = get_theme_mod('header_style',true); 
$header_type = ($header_style == 'style_two') ? 'header-style-2' : ''; 
if( !is_front_page() ): ?>
	<div class="breadcrumb <?php echo $header_type?>"> 
		<div class="container"><?php
		    if( !is_search() && !is_archive() && !is_404() ) : ?>
				<div class="sixteen columns">
					<?php the_title('<h1>','</h1>');?>	
					<?php if( $breadcrumb ) : ?>	
						<div class="breadcrumb-text">
							<?php fetch_breadcrumbs(); ?>
						</div>
					<?php endif; ?>
				</div><?php
			endif; ?>
		</div>
	</div><?php  
endif;