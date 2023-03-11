<?php
/**
 * The template for displaying actuality archive pages
 *
 * @package Hub_de_la_Réussite
 */

get_header();
?>
    <main id="primary" class="site-main">
        <section class="cover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12  aligncenter">
                        <h1>LES ACTUALITÉS DU HUB DE LA RÉUSSITE</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mg-top--100">
            <div class="row">
                <div class="col-sm-8">
					<?php
					$cat_ids = getAllcat();
					if ( ! empty( $cat_ids ) ) {
						if ( array_key_exists( 'reveal', $cat_ids ) ) {
							$args        = array(
								'post_type'      => 'actuality',
								'post_status'    => 'publish',
								'meta_key'       => 'date_publication',
								'orderby'        => 'meta_value_num',
								'order'          => 'DESC',
								'posts_per_page' => 1,
								'meta_query'     => array(
									array(
										'key'     => 'thematique',
										'value'   => $cat_ids['reveal'],
										'compare' => 'IN'
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
									$theme  = get_field( 'thematique' );
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
                                            <div class="bloc-title-top-selection">
												<?php if ( $theme ) { ?>
                                                    <div class="tag-post bg-orange">
														<?php echo $theme->name; ?>
                                                    </div>
												<?php } ?>
                                                <div class="post-title top-selection-title">
                                                    <h2>
                                                        <a href="<?php echo get_permalink() ?>"
                                                           title="Permalink to Praesent iaculis tortor viverra">
															<?php echo the_title(); ?></a>
                                                    </h2>
                                                </div>

                                            </div>
                                        </div>
                                    </article>
								<?php } ?>
								<?php wp_reset_postdata();
							}
						}
					} ?>
                </div>
                <div class="col-sm-4">
					<?php if ( ! empty( $cat_ids ) ) {
						if ( array_key_exists( 'form', $cat_ids ) ) {
							$args        = array(
								'post_type'      => 'actuality',
								'post_status'    => 'publish',
								'meta_key'       => 'date_publication',
								'orderby'        => 'meta_value_num',
								'order'          => 'DESC',
								'posts_per_page' => 1,
								'meta_query'     => array(
									array(
										'key'     => 'thematique',
										'value'   => $cat_ids['form'],
										'compare' => 'IN'
									)
								),

							);
							$actualities = new WP_Query( $args );
							if ( $actualities->have_posts() ) {
								while ( $actualities->have_posts() ) {
									$actualities->the_post();
									$visuel = get_field( 'visuel' );
									$image  = $visuel['upload'];
									$size   = 'small-actuality-list';
									$theme  = get_field( 'thematique' );
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
                                            <div class="bloc-title-top-selection">
												<?php if ( $theme ) { ?>
                                                    <div class="tag-post bg-red">
														<?php echo $theme->name; ?>
                                                    </div>
												<?php } ?>
                                                <div class="post-title top-selection-title left-item">
                                                    <h2>
                                                        <a href="<?php echo get_permalink() ?>"
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
						}
						if ( array_key_exists( 'accelerate', $cat_ids ) ) {
							$args        = array(
								'post_type'      => 'actuality',
								'post_status'    => 'publish',
								'meta_key'       => 'date_publication',
								'orderby'        => 'meta_value_num',
								'order'          => 'DESC',
								'posts_per_page' => 1,
								'meta_query'     => array(
									array(
										'key'     => 'thematique',
										'value'   => $cat_ids['accelerate'],
										'compare' => 'IN'
									)
								),

							);
							$actualities = new WP_Query( $args );
							if ( $actualities->have_posts() ) {
								while ( $actualities->have_posts() ) {
									$actualities->the_post();
									$visuel = get_field( 'visuel' );
									$image  = $visuel['upload'];
									$size   = 'small-actuality-list';
									$theme  = get_field( 'thematique' );
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
                                            <div class="bloc-title-top-selection">
												<?php if ( $theme ) { ?>
                                                    <div class="tag-post bg-blue">
														<?php echo $theme->name; ?>
                                                    </div>
												<?php } ?>
                                                <div class="post-title top-selection-title left-item">
                                                    <h2>
                                                        <a href="<?php echo get_permalink() ?>"
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
						}
					} ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4  aligncenter">
					<?php
					$all_cat = getAllcat( false );
					if ( ! empty( $all_cat ) ) {
						$args    = array(
							'post_type'      => 'actuality',
							'posts_per_page' => - 1,
							'meta_query'     => array(
								array(
									'key'     => 'thematique',
									'value'   => $all_cat['tags'],
									'compare' => 'IN'
								)
							),
						);

						$filters = [];
						$query   = new WP_Query( $args );
						while ( $query->have_posts() ): $query->the_post();
							$thematique                      = get_field( 'thematique' );
							$filters[ $thematique->term_id ] = $thematique->name;
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
					} ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
				<?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile; ?>
                    <div class="container">
                        <div class="row">
							<?php wpbeginner_numeric_posts_nav(); ?>
                        </div>
                    </div>
					<?php
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
            </div>
        </div>
    </main>

<?php
get_footer();
