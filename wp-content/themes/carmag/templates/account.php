<?php 
/**
 * Template Name: Account Page
 *
 * Custom account template for the theme
 * 
 * @since  v1.0.0
 * @package CarMag
 */


get_header(); ?>

<?php // Custom page template structure ?>
<section class="section-fullwidth">
    
    <div class="row">
		<div class="column small-12 medium-11 account">
            <h1 class="account-heading">Your Account</h1>
            <form class="account-form">
                <div class="account-picture">
                    <img  src="https://babeltechreviews.com/wp-content/uploads/2018/07/rendition1.img_.jpg" alt="">
                    <i class='fas fa-edit' id="profile-picture-button"></i>
                    <input type="file" id="profile-picture">
                </div>
                <div class="account-info">
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="number" placeholder="Phone Number">
                    <input type="email" name="email" placeholder="Email">
                    <select name="Location" id="" placeholder="Location">
                        <option selected disabled value="" style="color:gray;">Location</option>
                        <option value="Sofia">Sofia</option>
                    </select>
                    <button type="submit" class="button primary">Save</button>
                </div>
            </form>
        </div><!-- .column -->
        <div class="column small-12 medium-12 offers">
            <h2>Your Offers</h2>
            <ul class="offers-list">
            </ul>
            <p class="no-offers">No Offers</p>
            <a href="#newOffer" class="button secondary">Add new offer</a>
        </div>
	</div><!-- .row -->
</section><!-- .section-fullwidth section-main -->

<?php get_footer(); ?>
