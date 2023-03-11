<?php
/* Template Name: Liste Espace presse  */

get_header();
?>

    <main id="primary" class="site-main">
        <section class="cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12  aligncenter">
                        <h1 class="text-uppercase">ESPACE PRESSE</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mg-top--100 top-presse">
            <div class="row">
                <div class="col-sm-8">
					<?php
					$args        = array(
						'post_type'      => 'actuality',
						'post_status'    => 'publish',
						'posts_per_page' => 1,
						'meta_query'     => array(
							array(
								'key'     => 'thematique',
								'value'   => 'reveal',
								'compare' => 'IN'
							),
							array(
								'key'     => 'page_type',
								'value'   => 'presse',
								'compare' => '='
							),
						),
					);
					$actualities = new WP_Query( $args );
					if ( $actualities->have_posts() ) {
						while ( $actualities->have_posts() ) {
							$actualities->the_post();
							$visuel = get_field( 'visuel' );
							$image  = $visuel['upload'];
							$size   = 'small-actuality-list';
							$tag    = get_field( 'tag' );

							?>
                            <article id=""
                                     class="post-article top-selection">
                                <div class="post-thumb">
                                    <div class="img">
                                        <img src="<?php echo $image['url']; ?>"
                                             class="post-image" alt="">
                                    </div>
                                    <div class="shadow-img"></div>
                                    <div class="overlay-top">
                                        <div class="overlay-content">
                                        </div>
                                    </div>
                                    <div class="bloc-title-top-selection"><?php if ( $tag ) { ?>
                                            <div class="tag-post bg-orange"><?php echo getName( $tag['value'] ); ?>
                                            </div><?php } ?>
                                        <div class="post-title top-selection-title">
                                            <h2>
                                                <a href="<?php echo get_permalink(); ?>"
                                                   title="Permalink to Praesent iaculis tortor viverra">
													<?php echo the_title(); ?>
                                                </a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </article>
						<?php } ?>
						<?php wp_reset_postdata();
					}

					?>
                </div>

                <div class="col-sm-4">
					<?php $args = array(
						'post_type'      => 'actuality',
						'post_status'    => 'publish',
						'posts_per_page' => 1,
						'meta_query'     => array(
							array(
								'key'     => 'thematique',
								'value'   => 'form',
								'compare' => 'IN'
							),
							array(
								'key'     => 'page_type',
								'value'   => 'presse',
								'compare' => '='
							),
						),

					);

					$actualities = new WP_Query( $args );
					if ( $actualities->have_posts() ) {
						while ( $actualities->have_posts() ) {
							$actualities->the_post();
							$tag    = get_field( 'tag', $post->ID );
							$visuel = get_field( 'visuel' );
							$image  = $visuel['upload'];
							$size   = 'small-actuality-list';

							?>
                            <article id=""
                                     class="post-article top-selection">
                                <div class="post-thumb">
                                    <div class="img">

                                        <img src="<?php echo $image['url']; ?>"
                                             class="post-image" alt="">
                                    </div>
                                    <div class="shadow-img"></div>
                                    <div class="overlay-top">
                                        <div class="overlay-content">

                                        </div>
                                    </div>
                                    <div class="bloc-title-top-selection"><?php if ( $tag ) { ?>
                                            <div class="tag-post bg-red"><?php echo getName( $tag['value'] ); ?>
                                            </div><?php } ?>
                                        <div class="post-title top-selection-title left-item">
                                            <h2>
                                                <a href="<?php echo get_permalink(); ?>"
                                                   title="Permalink to Praesent iaculis tortor viverra">
													<?php echo the_title(); ?>
                                                </a></h2>
                                        </div>
                                    </div>
                                </div>
                            </article>
							<?php wp_reset_postdata();
						}
					}
					$args        = array(
						'post_type'      => 'actuality',
						'post_status'    => 'publish',
						'posts_per_page' => 1,
						'meta_query'     => array(
							array(
								'key'     => 'thematique',
								'value'   => 'accelerate',
								'compare' => 'IN'
							),
							array(
								'key'     => 'page_type',
								'value'   => 'presse',
								'compare' => '='
							),
						),

					);
					$actualities = new WP_Query( $args );
					if ( $actualities->have_posts() ) {
						while ( $actualities->have_posts() ) {
							$actualities->the_post();
							$visuel = get_field( 'visuel' );
							$image  = $visuel['upload'];
							$size   = 'small-actuality-list';
							$tag    = get_field( 'tag' );
							?>
                            <article id=""
                                     class="post-article top-selection">
                                <div class="post-thumb">
                                    <div class="img">
                                        <img src="<?php echo $image['url']; ?>"
                                             class="post-image" alt="">
                                    </div>
                                    <div class="shadow-img"></div>
                                    <div class="overlay-top">
                                        <div class="overlay-content">
                                        </div>
                                    </div>
                                    <div class="bloc-title-top-selection"><?php if ( $tag ) { ?>
                                            <div class="tag-post bg-blue"><?php echo getName( $tag['value'] ); ?>
                                            </div><?php } ?>
                                        <div class="post-title top-selection-title left-item">
                                            <h2>
                                                <a href="<?php echo get_permalink(); ?>"
                                                   title="Permalink to Praesent iaculis tortor viverra"><?php echo the_title(); ?>
                                                </a></h2>
                                        </div>
                                    </div>
                                </div>
                            </article>
							<?php wp_reset_postdata();
						}
					}

					?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4  aligncenter">
					<?php
					$all_cat     = getAllcat( true, false );
					$all_cat_ids = array_keys( $all_cat['tags'] );
					$args        = array(
						'post_type'   => 'actuality',
						'post_status' => 'publish',
						'meta_query'  => array(
							array(
								'key'     => 'tag',
								'value'   => $all_cat_ids,
								'compare' => 'IN',
							),
							array(
								'key'     => 'page_type',
								'value'   => 'presse',
								'compare' => '='
							),
						),
					);

					$filters = [];
					$query   = new WP_Query( $args );

					while ( $query->have_posts() ): $query->the_post();
						$thematique                      = get_field( 'tag' );
						$filters[ $thematique['value'] ] = getName( $thematique['value'] );
					endwhile;
					wp_reset_query();
					if ( ! empty( $filters ) ) { ?>
                        <form>
                            <div class="form-group row">
                                <label for="staticEmail"
                                       class="col-sm-2 col-form-label filter-label">Filtrer </label>
                                <div class="col-sm-10">
                                    <label class="dropdown">
                                        <select class="myselect"
                                                id="archive-filters">
                                            <option value="all">Choisissez
                                                votre thématique
                                            </option>
											<?php foreach ( $filters as $id => $name ): ?>
                                                <option value="<?php echo $id ?>"><?php echo ucfirst( $name ) ?></option>
											<?php endforeach; ?>
                                        </select>
                                    </label>
                                </div>
                            </div>
                        </form>
					<?php }
					?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

				<?php
				$filters = isset( $_GET['tag_id'] ) ? [ $_GET['tag_id'] ] : $all_cat_ids;
				$args    = array(
					'post_type'      => 'actuality',
					'post_status'    => 'publish',
					'posts_per_page' => 9,
					'meta_query'     => array(
						array(
							'key'     => 'tag',
							'value'   => $filters,
							'compare' => 'IN',
						),
						array(
							'key'     => 'page_type',
							'value'   => 'presse',
							'compare' => '='
						),
					),
				);

				$actualities = new WP_Query( $args );
				if ( $actualities->have_posts() ) {
					while ( $actualities->have_posts() ) {
						$actualities->the_post();
						$visuel  = get_field( 'visuel' );
						$image   = $visuel['upload'];
						$size    = 'small-actuality-list';
						$tag     = get_field( 'tag' );
						$color   = get_field( 'thematique' )['value'];
						$contenu = get_field( 'contenu' );
						while ( have_rows( 'contenu' ) ) {
							the_row();
							if ( get_row_layout() == 'texte' ) {
								$texte = get_sub_field( 'texte' );
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
									<?php if ( $tag ) {
										?>
                                        <div class="tag-post bg-<?php echo getColor( $color ); ?>">
											<?php echo getName( $tag['value'] ); ?>
                                        </div>
									<?php } ?>
                                </div>

                                <div class="post-details">
                                    <div class="post-meta ">
                                        <div class="date "><?php echo get_the_date(); ?></div>
                                        <div class="post-title">
                                            <h2>
                                                <a href="<?php echo get_permalink() ?>"
                                                   title="Permalink to Praesent iaculis tortor viverra">
													<?php echo the_title(); ?></a>
                                            </h2>
                                        </div>
                                        <div class="post-body">
                                            <p><?php echo $texte ?></p></div>
                                    </div>

                            </article>
                        </div>

					<?php }
				}
				wp_reset_query(); ?>

            </div>
        </div>
        <div class="container">
            <div class="row">
				<?php wpbeginner_numeric_posts_nav( $actualities ); ?>
            </div>
        </div>
    </main>

<?php
get_footer();
