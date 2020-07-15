<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CarMag
 */

$no_answer = __( 'N/A' );
get_header(); ?>

	<section class="section-fullwidth section-main single-vehicle">
		<div class="row">
			<div class="columns small-12 medium-12 large-8">
                <div class="carousel">
									<?php
											$images = ( array )json_decode( get_post_meta( get_the_ID(), __( 'vehicle-images' ), true ) );
											foreach ( $images as $image ) {
													echo( '<img class="carousel-image" src="' . $image . '" alt="">' );
											}
									?>
                    <p class="image-num">1/7</p>
                    <div class="arrow forward">
                        <div></div>
                    </div>
                    <div class="arrow backward">
                        <div></div>
                    </div>
                </div>
                <div class="all-images">
									<?php
											$images = ( array )json_decode( get_post_meta( get_the_ID(), __( 'vehicle-images' ), true ) );
											foreach ( $images as $image ) {
													echo( '<div><img src="' . $image . '" alt=""></div>' );
											}
									?>
                </div>
                <div class="vehicle-information">
                    <h2><?php echo( sanitize_text_field( get_the_title() ) ) ?></h2>
                    <ul class="vehicle-properties">
                        <li>
                            <i class="fas fa-calendar-alt"></i>
                            <p><?php echo( sanitize_text_field( ( get_post_meta( get_the_ID(), __( 'vehicle-year' ), true ) == null ) ? $no_answer : get_post_meta( get_the_ID(), __( 'vehicle-year' ), true ) ) ) ?></p>
                        </li>
                        <li>
                            <i class="fas fa-gas-pump">&#xf52f;</i>
                            <p><?php echo( sanitize_text_field( get_the_terms( get_the_ID(), __( 'vehicle-fuel' ) ) ? get_the_terms( get_the_ID(), __( 'vehicle-fuel' ) )[0]->name : $no_answer ) ) ?></p>
                        </li>
                        <li>
                            <i class="fas fa-road"></i>
                            <p><?php echo( sanitize_text_field( ( get_post_meta( get_the_ID(), __( 'vehicle-range' ), true ) == null ) ? $no_answer : get_post_meta( get_the_ID(), __( 'vehicle-range' ), true ) ) ) ?> <?php _e( 'km' ) ?></p>
                        </li>
                        <li>
                            <i class="fas fa-tachometer-alt"></i>
                            <p><?php echo( sanitize_text_field( ( get_post_meta( get_the_ID(), __( 'vehicle-horsepower' ), true ) == null ) ? $no_answer : get_post_meta( get_the_ID(), __( 'vehicle-horsepower' ), true ) ) ) ?> <?php _e( 'hp' ) ?></p>
                        </li>
                        <li>
                            <i class="fas fa-cogs"></i>
                            <p><?php echo( sanitize_text_field( get_the_terms( get_the_ID(), __( 'vehicle-gearbox' ) ) ? get_the_terms( get_the_ID(), __( 'vehicle-gearbox' ) )[0]->name : $no_answer ) ) ?></p>
                        </li>
                        <li>
                            <i class="fas fa-car"></i>
                            <p><?php echo( sanitize_text_field( get_the_terms( get_the_ID(), __( 'vehicle-type' ) ) ? get_the_terms( get_the_ID(), __( 'vehicle-type' ) )[1]->name : $no_answer ) ) ?></p>
                        </li>
                    </ul>
                    <p class="vehicle-description"><?php echo( sanitize_text_field( get_post()->post_content ) ) ?></p>
                </div>
			</div><!-- .columns medium-8 -->
			<div class="columns small-12 medium-12 large-4 ">
                <div class="seller-card">
                    <div class="seller-map" id="map"></div>
                    <div class="seller-info">
                        <?php echo '<img class="seller-avatar" src="' . sanitize_text_field( get_avatar_url( get_post()->post_author ) ) . '" alt="">' ?>
                        <p><?php echo sanitize_text_field( get_the_author_meta( __( 'display_name' ), get_post()->post_author ) ) ?></p>
                        <button class="button secondary">Contact</button>
                    </div>
                </div>
			</div><!-- .columns medium-4 -->
		</div>
	</section><!-- .section-fullwidth section-main -->

<?php
get_footer();
