<?php
	$visuel = get_field( 'visuel' );
	$image  = $visuel['upload'];
	$size   = 'small-actuality-list';
	$theme  = get_field( 'thematique' );
	$contenu=get_field('contenu');
	 while ( have_rows( 'contenu' ) ) {
       the_row();
         if ( get_row_layout() == 'texte' ) {
            $texte=get_sub_field('texte');
            //d($texte);
        }
      }


?>
<div class="col-sm-4">
	<article id="" class="post-article">
		<div class="post-thumb">
			<div class="img">
				<img src="<?php echo $image['url']; ?>"
				     class="post-image" alt=""></div>
			<div class="shadow-img"></div>
			<div class="overlay">
				<div class="overlay-content">
					<img src="/wp-content/uploads/2020/05/bg-hover.png"
					     class="" alt="">

				</div>
			</div>
			<?php if ( $theme ) {
				?>
				<div class="tag-post bg-<?php echo getColor( $theme->parent ); ?>">
					<?php echo $theme->name; ?>
				</div>
			<?php } ?>
		</div>

		<div class="post-details">
			<div class="post-meta ">
				<div class="date "><?php echo get_the_date(); ?></div>
				<div class="post-title">
					<h2><a href="<?php echo get_permalink()?>"
					       title="Permalink to Praesent iaculis tortor viverra">
							<?php echo the_title(); ?></a>
					</h2>
				</div>
				<div class="post-body"><p><?php echo $texte ?></p></div>
			</div>

	</article>
</div>
