<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Hub_de_la_Réussite
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
        /*
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'hub_reussite' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'hub_reussite' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		*/?>
        <section class="pos-relative pd-t-20" >
        <div class="container">
            <div class="row actualite-detail">
                <div class="col-sm-6 pd-0 pd-l-15">
                    <div class="date-actuality">
                        <div class="entry-date">18<span> Jun </span></div>
                        <div class="date-separator"><i class="fas fa-chevron-right"></i></div>
                        <div class="entry-date text-right">18<span>Jun </span></div>
                       </div>

                    <div class="title-single-actualite">PROCHAINE RENTRÉE À
                        SAINT-QUENTIN-EN-YVELINES</div>
               <div class="date-pub">Publié le 18 octobre 2019</div>
                  <div class="tags-post">
                    <div class="tag-post bg-orange">E2C77 </div>
                    <div class="tag-post bg-orange">ECOLE DE LA DEUXIEME CHANCE </div>
                    <div class="tag-post bg-orange">rentrée </div>
                  </div>
                </div>
            <div class="col-sm-6 mg-l--5 pd-0">

                        <div class="post-thumb">
                            <div class="img">

                                <img src="/wp-content/uploads/2020/05/actu-detail.png"  class="post-image" alt=""></div>
                            <div class="shadow-img shadow-top"></div>
                            <div class="overlay-top">
                                <div class="overlay-content">

                                </div>
                            </div>

                        </div>
                 </div>
            </div>
        </div>
            <div class="bg-grey bg-actualite"></div>
        </section>


            <section class="content-actualite">
            <div class="container">
                <div class="row">


                    <div class="col-sm-8 pd-0 pd-l-35 pd-l-15 ">
                        <ul class="check-list">
                            <li class="check-list-item">Prochaine rentrée le 12 novembre 2019</li>
                            <li class="check-list-item">Un "coup de fil" pour un rendez-vous</li>
                            <li class="check-list-item">Un entretien</li>
                            <li class="check-list-item">Une réponse dans la semaine </li>
                            <li class="check-list-item">Une intégration dans le mois</li>
                         </ul>
                        <p class="p-content">

                            Le "coup de fil" est un premier contact important. Cette occasion, quelques questions vous sont posées : âge, adresse, année de sortie du système scolaire, etc. Elles nous permettent de vérifier que vous correspondez aux critères d'intégration de l'e2c78. Une fois l'école brièvement présentée, vous pouvez accepter ou non un rendez-vous pour un entretien avec deux formateurs Vous correspondez aux critères d'intégration de l'e2c78. Une fois l'école brièvement présentée, vous pouvez accepter ou non un rendez-vous pour un entretien avec deux formateurs.
                        </p>

                        <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" >
                            <div class="amazingslider" id="amazingslider-1">
                                <ul class="amazingslider-slides">
                                    <li><img src="/wp-content/uploads/2020/05/img-video.png" class="video-prev" />

                                        <video preload="none" src="https://www.youtube.com/embed/YE7VzlLtp-4" ></video>
                                    </li>
                                </ul>
                                <ul class="amazingslider-thumbnails" style="display:none;">
                                    <li><img src="/wp-content/uploads/2020/05/img-video.png" /></li>
                                </ul>

                            </div>

                        </div>


                            <div class="row text-center text-lg-left pd-0 pd-r-15 pd-l-15 galerie-single">
<h2 class="titre-h2">Galerie Photo</h2>
                            <div class="col-lg-4 col-md-4 col-6 pd-0 galerie-item">
                                <a href="#" class="d-block mb-4 h-100">
                                    <img class="img-fluid img-thumbnail" src="/wp-content/uploads/2020/05/s-scover.png" alt="">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 pd-0 galerie-item">
                                <a href="#" class="d-block mb-4 h-100">
                                    <img class="img-fluid img-thumbnail" src="/wp-content/uploads/2020/05/s-scover.png" alt="">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 pd-0 galerie-item">
                                <a href="#" class="d-block mb-4 h-100">
                                    <img class="img-fluid img-thumbnail" src="/wp-content/uploads/2020/05/s-scover.png" alt="">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 pd-0 galerie-item">
                                <a href="#" class="d-block mb-4 h-100">
                                    <img class="img-fluid img-thumbnail" src="/wp-content/uploads/2020/05/s-scover.png" alt="">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 pd-0 galerie-item">
                                <a href="#" class="d-block mb-4 h-100">
                                    <img class="img-fluid img-thumbnail" src="/wp-content/uploads/2020/05/s-scover.png" alt="">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 pd-0">
                                <a href="#" class="d-block mb-4 h-100">
                                    <img class="img-fluid img-thumbnail" src="/wp-content/uploads/2020/05/s-scover.png" alt="">
                                </a>
                            </div>

                        </div>
                        <div class="row text-center text-lg-left pd-0 pd-r-15 pd-l-15">
                            <h2 class="titre-h2">Documents attachés</h2>

                            <div class="col-lg-6 col-md-6 col-12 pd-0">

                                <div class="card attachment" >
                                    <div class="card-body">

                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <a href="#" class="card-link flt-right">
                                            <img class="" src="/wp-content/uploads/2020/05/download.svg" alt="">
                                        </a>

                                    </div>
                                    <div class="card-footer">
                                        430 ko
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 pd-0">
                                <div class="card attachment" >
                                    <div class="card-body">

                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <a href="#" class="card-link flt-right">
                                            <img class="" src="/wp-content/uploads/2020/05/download.svg" alt="">
                                        </a>
                                    </div>
                                    <div class="card-footer ">
                                        430 ko
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-member pd-0 pd-l-45">
                        <div class="card membre" >
                           <div class="image"> <img src="/wp-content/uploads/2020/05/image-membre.png" class="card-img-top" alt=" ">
                           </div>
                            <div class="card-body">
                                <h2 class="card-title titre-h2">Hélène Genet</h2>
                                <div class="card-text"><p>Chargée de relations presse</p>
                                    <div class="separation  bg-orange"> </div>
                                </div>

                                <a href="tel:01 48 94 98 51" class="link"> <i class="fas fa-mouse-pointer"></i>01 48 94 98 51</a>
                                <a href="mailto:rp@hubdelareussite.com" class="link"> <i class="fas fa-envelope"></i>rp@hubdelareussite.com</a>
                            </div>
                        </div>
                    </div>


        </section>

        <section class="content-actualite">
            <div class="container">
                <div class="row">

                         <h2 class="titre-h2 last-actu-title">Dernières actualités</h2>
                </div>

                <div class="row">
                        <div class="col-sm-4">
                            <article id="" class="post-article">

                                <div class="post-thumb">
                                    <div class="img">

                                        <img src="/wp-content/uploads/2020/05/s-scover.png"  class="post-image" alt=""></div>
                                    <div class="shadow-img"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 width="99" height="96">
                                                <path fill="#2D2C2B" fill-rule="evenodd"
                                                      d="M90.772 66.05c-15.405 8.599-30.817 17.207-46.663 24.978-9.177 4.502-23.642 8.578-30.565-1.873-2.372-3.581-3.425-7.853-4.328-12.049-3.049-14.157-4.874-28.535-6.215-42.933C2.334 27.008-4.326.931 7.93.723c7.786-.131 8.301 17.179 8.938 22.178 1.497 11.743 2.948 24.721 10.133 34.64 1.22 1.685 2.75 3.203 4.525 4.257.9.535 1.863.95 2.881 1.209 10.307 2.612 21.249-8.211 29.978-12.051 6.977-3.071 15.993-9.354 23.876-7.484 3.526.837 6.546 3.296 8.576 6.325 4.801 7.168.344 12.676-6.065 16.253zm-48.08-13.847c-5.06 1.331-10.268-1.715-11.633-6.805-1.365-5.088 1.63-10.293 6.689-11.624 5.06-1.331 10.268 1.715 11.633 6.804 1.365 5.089-1.63 10.294-6.689 11.625z"
                                                      opacity=".149"
                                                      style="&#10;    fill: white;&#10;opacity: 1"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="tag-post bg-orange">

                                        E2C77
                                    </div>
                                </div>


                                <div class="post-details">

                                    <div class="post-meta ">

                                        <div class="date ">18 octobre 2019</div>


                                        <div class="post-title">
                                            <h2><a href="#"
                                                   title="Permalink to Praesent iaculis tortor viverra">Journée
                                                    de sensibilisation citoyenne au Camp
                                                    des Milles</a></h2>
                                        </div>

                                        <div class="post-body"><p> Ne rien faire c’est
                                                laisser faire ! C’est cette conviction
                                                qui a réuni 514 personnes, dont 291
                                                stagiaires E2C </p></div>


                                    </div>

                            </article>

                        </div>

                        <div class="col-sm-4">
                            <article id="" class="post-article">

                                <div class="post-thumb">
                                    <div class="img">

                                        <img src="/wp-content/uploads/2020/05/s-scover.png"  class="post-image" alt=""></div>
                                    <div class="shadow-img"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                             <img src="/wp-content/uploads/2020/05/bg-hover.png"  class="" alt="">
                                        </div>
                                    </div>
                                    <div class="tag-post bg-blue">

                                        E2C77
                                    </div>
                                </div>


                                <div class="post-details">

                                    <div class="post-meta ">

                                        <div class="date ">18 octobre 2019</div>


                                        <div class="post-title">
                                            <h2><a href="#"
                                                   title="Permalink to Praesent iaculis tortor viverra">Journée
                                                    de sensibilisation citoyenne au Camp
                                                    des Milles</a></h2>
                                        </div>

                                        <div class="post-body"><p> Ne rien faire c’est
                                                laisser faire ! C’est cette conviction
                                                qui a réuni 514 personnes, dont 291
                                                stagiaires E2C </p></div>


                                    </div>

                            </article>

                        </div>

                        <div class="col-sm-4">
                            <article id="" class="post-article">

                                <div class="post-thumb">
                                    <div class="img">

                                        <img src="/wp-content/uploads/2020/05/s-scover.png"  class="post-image" alt=""></div>
                                    <div class="shadow-img"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 width="99" height="96">
                                                <path fill="#2D2C2B" fill-rule="evenodd"
                                                      d="M90.772 66.05c-15.405 8.599-30.817 17.207-46.663 24.978-9.177 4.502-23.642 8.578-30.565-1.873-2.372-3.581-3.425-7.853-4.328-12.049-3.049-14.157-4.874-28.535-6.215-42.933C2.334 27.008-4.326.931 7.93.723c7.786-.131 8.301 17.179 8.938 22.178 1.497 11.743 2.948 24.721 10.133 34.64 1.22 1.685 2.75 3.203 4.525 4.257.9.535 1.863.95 2.881 1.209 10.307 2.612 21.249-8.211 29.978-12.051 6.977-3.071 15.993-9.354 23.876-7.484 3.526.837 6.546 3.296 8.576 6.325 4.801 7.168.344 12.676-6.065 16.253zm-48.08-13.847c-5.06 1.331-10.268-1.715-11.633-6.805-1.365-5.088 1.63-10.293 6.689-11.624 5.06-1.331 10.268 1.715 11.633 6.804 1.365 5.089-1.63 10.294-6.689 11.625z"
                                                      opacity=".149"
                                                      style="&#10;    fill: white;&#10;opacity: 1"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="tag-post bg-red">

                                        E2C77
                                    </div>
                                </div>


                                <div class="post-details">

                                    <div class="post-meta ">

                                        <div class="date ">18 octobre 2019</div>


                                        <div class="post-title">
                                            <h2><a href="#"
                                                   title="Permalink to Praesent iaculis tortor viverra">Journée
                                                    de sensibilisation citoyenne au Camp
                                                    des Milles</a></h2>
                                        </div>

                                        <div class="post-body"><p> Ne rien faire c’est
                                                laisser faire ! C’est cette conviction
                                                qui a réuni 514 personnes, dont 291
                                                stagiaires E2C </p></div>


                                    </div>

                            </article>

                        </div>



                        </div>



                </div>
        </section>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
