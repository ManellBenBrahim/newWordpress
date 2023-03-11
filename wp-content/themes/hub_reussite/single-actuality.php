<?php
/**
 * The template for displaying  single actuality
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Hub_de_la_Réussite
 */

get_header();
?>

    <main id="primary" class="site-main">
        <section class="pos-relative pd-t-20">
            <div class="container">
				<?php
				$date = get_the_date( $d = 'j F Y' );
				$date_debut = strtotime( get_field( 'date_debut' ) );
				$date_fin   = strtotime( get_field( 'date_final' ) );
				$parent = get_field( 'thematique' )['value'];
				$visuel = get_field( 'visuel' );
				?>
                <div class="row actualite-detail">
                    <div class="col-sm-6 pd-0 pd-l-15">
						<?php if ( $date_debut or $date_fin  ) { ?>
                            <div class="date-actuality">
								<?php if ( $date_debut ) { ?>
                                    <div class="entry-date"><?php echo date( 'd', $date_debut ) ?>
                                        <span> <?php echo date( 'M', $date_debut ) ?> </span>
                                    </div>
								<?php } ?>

								<?php if ( $date_fin ) { ?>
                                    <div class="date-separator"><i
                                                class="fas fa-chevron-right"></i>
                                    </div>
                                    <div class="entry-date text-right"><?php echo date( 'd', $date_fin ) ?>
                                        <span><?php echo date( 'M', $date_fin ) ?></span>
                                    </div>

								<?php } ?>
                            </div>
						<?php } ?>
                        <div class="title-single-actualite text-uppercase"><?php echo the_title(); ?></div>


                        <div class="date-pub">Publié le
                            <span><?php echo $date ?></span></div>
                        <div class="tags-post">
                            <div class="tag-post bg-<?php echo getColor( $parent ); ?>">
                                <?php echo getName(get_field( 'tag' )['value']) ; ?> </div>
                        </div>
                    </div>


                    <div class="col-sm-6 mg-l--5 pd-0">
						<?php if ( $visuel['upload']) {
							?>
                            <div class="post-thumb">
                                <div class="img">
                                    <img src="<?php echo $visuel['upload']['url'] ?>"
                                         alt="<?php echo $visuel['alt'] ?>"
                                         class="post-image"></div>
                                <div class="shadow-img shadow-top"></div>
                                <div class="overlay-top">
                                    <div class="overlay-content">

                                    </div>
                                </div>

                            </div>
						<?php } ?>
                    </div>
                </div>
            </div>
            <div class="bg-grey bg-actualite"></div>
        </section>


		<?php
		if ( have_rows( 'contenu' ) ) {
			?>
            <section class="content-actualite">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 pd-0 pd-l-35 pd-l-15 content ">
							<?php
							while ( have_rows( 'contenu' ) ) {
								the_row();

								if ( get_row_layout() == 'texte' ) {
									$texte = get_sub_field( 'texte' );
									echo $texte;
								} elseif ( get_row_layout() == 'galerie' ) { ?>
                                    <div class="row text-center text-lg-left pd-0 pd-r-15 pd-l-15 galerie-single">
                                        <h2 class="titre-h2"><?php echo get_sub_field( 'galerie_title' ); ?></h2>
										<?php
										$photos = get_sub_field( 'photos' );
										foreach ( $photos as $photo ) {
											$img  = $photo['photo']['id'];
											$size = 'galerie-size';
                                            $url=$photo['url'];
											?>
                                            <div class="col-lg-4 col-md-4 col-6 pd-0 galerie-item">
                                                <?php if($url){ ?>
                                                <a href="<?php echo $url ?>"
                                                   class="d-block mb-4 h-100">
                                                    <img class="img-fluid img-thumbnail"
                                                         src="<?php echo wp_get_attachment_image_src( $img, $size )[0]; ?>"
                                                         alt="<?php echo get_post_meta( $img, '_wp_attachment_image_alt', true ) ?>"
                                                         width="100%"
                                                         height="100%">
                                                </a>
                                            <?php } else{ ?>
                                                <img class="img-fluid img-thumbnail"
                                                         src="<?php echo wp_get_attachment_image_src( $img, $size )[0]; ?>"
                                                         alt="<?php echo get_post_meta( $img, '_wp_attachment_image_alt', true ) ?>"
                                                         width="100%"
                                                         height="100%">

                                            <?php }?>
                                            </div>
										<?php } ?>
                                    </div>
								<?php } elseif ( get_row_layout() == 'documents_attached' ) { ?>
                                    <div class="row text-center text-lg-left pd-0 pd-r-15 pd-l-15">
                                        <h2 class="titre-h2">Documents
                                            attachés</h2>
										<?php
										$files = get_sub_field( 'files' );
										if ( $files ) {
											foreach ( $files as $file ) {
												$title = $file['file_title'];
												$url   = $file['file']['url'];
												$size  = $file['file']['filesize'];
												?>
                                                <div class="col-lg-6 col-md-6 col-12 pd-0">
                                                    <div class="card attachment">
                                                        <div class="card-body">
															<?php
															if ( $title ) { ?>
                                                                <p class="card-text"><?php echo $title; ?></p>
															<?php } ?>
															<?php if ( $url ) { ?>
                                                                <a href="<?php echo $url; ?>"
                                                                   class="card-link flt-right">
                                                                    <img class=""
                                                                         src="/wp-content/uploads/2020/05/download.svg"
                                                                         alt="">
                                                                </a>
															<?php } ?>

                                                        </div>
														<?php if ( $size ) { ?>
                                                            <div class="card-footer">
																<?php echo size_format( $size, 2 ); ?>
                                                                ko
                                                            </div>
														<?php } ?>
                                                    </div>
                                                </div>
											<?php } ?>
										<?php } ?>
                                    </div>
								<?php } elseif ( get_row_layout() == 'video' ) {

									$content = get_sub_field( 'video' );
									//d($content);
									// Use preg_match to find iframe src.
									preg_match( '/(http(s|):|)\/\/(www\.|)yout(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $content, $matches );
									$video_id = $matches[6];
									//d($video_id);
									if ( $video_id ) { ?>
                                        <div width="100%" height="440"
                                             videoID='<?php echo $video_id; ?>'
                                             autoplay="1"
                                             controls="0"
                                             class="embed-video">
											<?php echo $content; ?>
                                        </div>
									<?php } ?>
								<?php } ?>
							<?php } ?>

                        </div>
						<?php if ( get_field( 'contact_actuality' ) ) {
							$contacts = get_field( 'contact_actuality' );
							setup_postdata( $contacts );
							foreach ( $contacts as $contact ) {
								if ( ( $contact->post_type == 'contact' ) && ( $contact->post_status == 'publish' ) ) {
									$name  = $contact->post_title;
									$email = get_field( 'email', $contact->ID );
									$photo = get_field( 'photo', $contact->ID );
									$poste = get_field( 'poste', $contact->ID );
									$tel   = get_field( 'telephone', $contact->ID ); ?>
                                    <div class="col-sm-4 col-member pd-0 pd-l-45">
                                        <div class="card membre">
                                            <div class="image"><img
                                                        src="<?php echo $photo['url'] ?>"
                                                        class="card-img-top"
                                                        alt=" " width="50"
                                                        heigth="50">
                                            </div>
                                            <div class="card-body">
                                                <h2 class="card-title titre-h2"><?php echo $name; ?></h2>
                                                <?php if ($poste) { ?>
                                                <div class="card-text">
                                                    <p><?php echo $poste; ?></p>
                                                    <div class="separation bg-<?php echo getColor( $parent ); ?>"></div>
                                                </div>
                                                <?php } ?>
									            <?php if($tel){ ?>
                                                <a href="tel:01 48 94 98 51"
                                                   class="link"> <i
                                                            class="fas fa-mouse-pointer"></i><?php echo $tel; ?>
                                                </a>
                                                <?php } ?>
                                                <?php if($email){ ?>
                                                <a href="mailto:<?php echo $email; ?>"
                                                   class="link"> <i
                                                            class="fas fa-envelope"></i><?php echo $email; ?>
                                                </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>

								<?php }
							}
						} ?>
                    </div>
                </div>
            </section>
		<?php } ?>


        <section class="content-actualite">
            <div class="container">
                <div class="row"><h2 class="titre-h2 last-actu-title">Dernières
                        actualités</h2>
                </div>
                <div class="row">
					<?php
					$parent      = get_field( 'thematique' )['value'];
                    $type=get_field('page_type');
					$args  = array(
						'post_type'      => 'actuality',
						'post_status'    => 'publish',
						'posts_per_page' => 3,
						'meta_query'     => array(
							array(
								'key'     => 'thematique',
								'value'   => $parent,
								'compare' => 'IN'
							),
                            array(
                              'key'     => 'page_type',
                              'value'   => $type,
                              'compare' => '='
                            ),
						),
					);
					$lasts = new WP_Query( $args );
					if ( $lasts->have_posts() ) {
						while ( $lasts->have_posts() ) {
							$lasts->the_post();
							foreach ( $lasts as $post ) {
								if ( $post->ID > 0 ) {
									$visuel   = get_field( 'visuel', $post->ID );
									$tag      = get_field( 'tag', $post->ID );
									$date_pub = $date = get_the_date( $d = 'j F Y', $post->ID );
									$image    = $visuel['upload'];
									$texte    = get_field( 'contenu', $post->ID );
									$parent = get_field( 'thematique', $post->ID )['value'];
									if ( $texte ) {
										while ( have_rows( 'contenu' ) ) {
											the_row();
											if ( get_row_layout() == 'texte' ) {
												$extrait = get_sub_field( 'texte' );
											}
										}
									}
									?>
                                    <div class="col-sm-4">
                                        <article id="" class="post-article">
                                            <div class="post-thumb">
                                                <div class="img">
                                                    <img src="<?php echo $image['url'] ?>"
                                                         class="post-image"
                                                         alt=""></div>
                                                <div class="shadow-img"></div>
                                                <div class="overlay">
                                                    <div class="overlay-content">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             width="99"
                                                             height="96">
                                                            <path fill="#2D2C2B"
                                                                  fill-rule="evenodd"
                                                                  d="M90.772 66.05c-15.405 8.599-30.817 17.207-46.663 24.978-9.177 4.502-23.642 8.578-30.565-1.873-2.372-3.581-3.425-7.853-4.328-12.049-3.049-14.157-4.874-28.535-6.215-42.933C2.334 27.008-4.326.931 7.93.723c7.786-.131 8.301 17.179 8.938 22.178 1.497 11.743 2.948 24.721 10.133 34.64 1.22 1.685 2.75 3.203 4.525 4.257.9.535 1.863.95 2.881 1.209 10.307 2.612 21.249-8.211 29.978-12.051 6.977-3.071 15.993-9.354 23.876-7.484 3.526.837 6.546 3.296 8.576 6.325 4.801 7.168.344 12.676-6.065 16.253zm-48.08-13.847c-5.06 1.331-10.268-1.715-11.633-6.805-1.365-5.088 1.63-10.293 6.689-11.624 5.06-1.331 10.268 1.715 11.633 6.804 1.365 5.089-1.63 10.294-6.689 11.625z"
                                                                  opacity=".149"
                                                                  style="&#10;    fill: white;&#10;opacity: 1"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="tag-post bg-<?php echo getColor( $parent ); ?>">
	                                                <?php echo getName($tag['value']) ; ?>
                                                </div>
                                            </div>
                                            <div class="post-details">
                                                <div class="post-meta ">
                                                    <div class="date "><?php if($date_pub){echo $date_pub;} ?></div>
                                                    <div class="post-title">
                                                        <h2>
                                                            <a href="<?php echo $post->guid; ?>"
                                                               title="Permalink to Praesent iaculis tortor viverra"><?php echo the_title(); ?></a>
                                                        </h2>
                                                    </div>
                                                    <?php if($extrait){ ?>
                                                        <div class="post-body">
                                                            <p><?php echo $extrait ?> </p>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                        </article>
                                    </div>

								<?php }
							}
						}
						wp_reset_postdata();
					} ?>
                </div>
            </div>
        </section>
    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
