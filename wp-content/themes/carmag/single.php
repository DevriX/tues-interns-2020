<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CarMag
 */

get_header(); ?>

	<section class="section-fullwidth section-main">
		<div class="row">
			<div class="columns small-12 medium-12 large-8">
				<div id="primary" class="content-area">
					<div class="carousel">
                        <img
                        class ="carousel-image"
                            src="https://www.sticky.digital/wp-content/uploads/2013/11/img-6.jpg"
                            alt=""
                        />
                        <img
                        class ="carousel-image"
                            src="https://r-cf.bstatic.com/images/hotel/max1024x768/468/46842174.jpg"
                            alt=""
                        />
                        <img
                        class ="carousel-image"
                            src="https://imgcomfort.com/Userfiles/Upload/images/illustration-geiranger.jpg"
                            alt=""
                        />
                        <img
                        class ="carousel-image"
                            src="https://www.tandemconstruction.com/sites/default/files/styles/project_slider_main/public/images/project-images/IMG-Fieldhouse-10.jpg?itok=Whi8hHo9"
                            alt=""
                        />
                        <img
                            class ="carousel-image"
                            src="https://www.sticky.digital/wp-content/uploads/2013/11/img-6.jpg"
                            alt=""
                        />
                    
                        <p class="image-num">1/7</p>
                        <div class="arrow forward">
                            <div></div>
                        </div>
                        <div class="arrow backward">
                            <div></div>
                        </div>
                    </div>
                    <div class="all-images">
                    <div>
                        <img
                            src="https://r-cf.bstatic.com/images/hotel/max1024x768/468/46842174.jpg"
                            alt=""
                        />
                    </div>
                    <div>
                        <img
                            src="https://imgcomfort.com/Userfiles/Upload/images/illustration-geiranger.jpg"
                            alt=""
                        />
                    </div>
                    <div>
                        <img
                            src="https://www.tandemconstruction.com/sites/default/files/styles/project_slider_main/public/images/project-images/IMG-Fieldhouse-10.jpg?itok=Whi8hHo9"
                            alt=""
                        />
                    </div>
                    <div>
                        <img
                            src="https://www.sticky.digital/wp-content/uploads/2013/11/img-6.jpg"
                            alt=""
                        />
                    </div>
                    <div>
                        <img
                            src="https://imgcomfort.com/Userfiles/Upload/images/illustration-geiranger.jpg"
                            alt=""
                        />
                    </div>
                    </div>
				</div><!-- #primary -->
			</div><!-- .columns medium-8 -->
			<div class="columns small-12 medium-12 large-4">
                <div class="seller-card">
                    <div class="seller-map" id="map"></div>
                    <div class="seller-info">
                        <img class="seller-avatar" src="https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg" alt="">
                        <p>Gosho</p>
                        <button class="button secondary">Contact</button>
                    </div>
                </div>
			</div><!-- .columns medium-4 -->
		</div><!-- .row -->
	</section><!-- .section-fullwidth section-main -->

<?php
get_footer();
