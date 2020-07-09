<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CarMag
 */

get_header(); ?>

	<section class="section-fullwidth section-main single-vehicle">
		<div class="row">
			<div class="columns small-12 medium-12 large-8">
                <div class="carousel">
                    <img
                        class ="carousel-image"
                        src="https://mobistatic2.focus.bg/mobile/photosmob/684/1/big/11589622941723684_g.jpg"
                        alt=""
                    />
                    <img
                        class ="carousel-image"
                        src="https://mobistatic2.focus.bg/mobile/photosmob/684/1//big/11589622941723684_tj.jpg"
                        alt=""
                    />
                    <img
                        class ="carousel-image"
                        src="https://mobistatic2.focus.bg/mobile/photosmob/684/1//big/11589622941723684_wV.jpg"
                        alt=""
                    />
                    <img
                        class ="carousel-image"
                        src="https://mobistatic2.focus.bg/mobile/photosmob/684/1//big/11589622941723684_3I.jpg"
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
                            src="https://mobistatic2.focus.bg/mobile/photosmob/684/1/big/11589622941723684_g.jpg"
                            alt=""
                        />
                    </div>
                    <div>
                        <img
                            src="https://mobistatic2.focus.bg/mobile/photosmob/684/1//big/11589622941723684_tj.jpg"
                            alt=""
                        />
                    </div>
                    <div>
                        <img
                            src="https://mobistatic2.focus.bg/mobile/photosmob/684/1//big/11589622941723684_wV.jpg"
                            alt=""
                        />
                    </div>
                    <div>
                        <img
                            src="https://mobistatic2.focus.bg/mobile/photosmob/684/1//big/11589622941723684_3I.jpg"
                            alt=""
                        />
                    </div>
                </div>
                <div class="vehicle-information">
                    <h2>Polo Comfortline 1.0 EVO BMT</h2>
                    <ul class="vehicle-properties">
                        <li>
                            <i class="fas fa-calendar-alt"></i>
                            <p>2020</p>
                        </li>
                        <li>
                            <i class="fas fa-gas-pump">&#xf52f;</i>
                            <p>Petrol</p>
                        </li>
                        <li>
                            <i class="fas fa-road"></i>
                            <p>200 km</p>
                        </li>
                        <li>
                            <i class="fas fa-tachometer-alt"></i>
                            <p>650 hp</p>
                        </li>
                        <li>
                            <i class="fas fa-cogs"></i>
                            <p>Manual</p>
                        </li>
                        <li>
                            <i class="fas fa-car"></i>
                            <p>Sedan</p>
                        </li>
                    </ul> 
                    <p class="vehicle-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
			</div><!-- .columns medium-8 -->
			<div class="columns small-12 medium-12 large-4 ">
                <div class="seller-card">
                    <div class="seller-map" id="map"></div>
                    <div class="seller-info">
                        <img class="seller-avatar" src="https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg" alt="">
                        <p>Gosho</p>
                        <button class="button secondary">Contact</button>
                    </div>
                </div>
			</div><!-- .columns medium-4 -->
		</div>
	</section><!-- .section-fullwidth section-main -->

<?php
get_footer();
