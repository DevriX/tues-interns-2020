<?php 
/**
 * Template Name: Publish Offers
 *
 * Custom homepage template for the theme
 * 
 * @since  v1.0.0
 * @package CarMag
 */


get_header(); ?>

<div class="section-fullwidth inverted">
    <form method="POST" action="<?php echo admin_url( 'admin-post.php' ) ?>">
        <input type="hidden" name="action" value="process_offer">
        <h1>Publish offer</h1>
        <div class="offer-info">
            <h2>What is your vehicle type ?</h2>
            <div class="vehicle-type">
                <span id="car" class="selected type"><i class="fas fa-car"></i></span>
                <span id="truck" class="type"><i class="fas fa-truck"></i></span>
                <span id="motorcycle" class="type"><i class="fas fa-motorcycle"></i></span>
                <span id="tractor" class="type"><i class="fas fa-tractor"></i></span>
                <span id="bus" class="type"><i class="fas fa-bus"></i></span>
                <input type="hidden" name="vehicle-category" id="category" value="car">
            </div>
            <div class="specifications">
                <h2>Specifications about your vehicle</h2>
                <div class="elements">
                    <select class="brands" id="brands" onChange="handleModels()" name="brand">
                        <option selected="" value="">Brand</option>
                    </select>

                    <select class="models" id="models" name="vehicle-model">
                        <option selected="" value="">Model</option>    
                    </select>

                    <select class="fuelType" name="vehicle-fuel">
                        <option selected="" value="">Fuel type</option>
                        <option value="Gasoline">Gasoline</option>
                        <option value="Diesel">Diesel</option>
                        <option value="All-Electric">All-Electric</option>
                        <option value="Hybrid">Hybrid</option>
                    </select>

                    <select class="condition" name="vehicle-condition">
                        <option selected="" value="">Condition</option>
                        <option value="Factory new">Factory new</option>
                        <option value="Used">Used</option>
                        <option value="For parts">For parts</option>
                    </select>

                    <select class="gearbox" name="vehicle-gearbox">
                        <option selected="" value="">Gearbox</option>
                        <option value="Manual">Manual</option>
                        <option value="Automatic">Automatic</option>
                        <option value="Semi-automatic">Semi-automatic</option>
                    </select>

                    <input type="text" class="input" id="year" name="vehicle-year" placeholder="Year">

                    <input type="text" class="input" id="horsepower" name="vehicle-horsepower" placeholder="Horsepower">

                    <select class="types" name="vehicle-type">
                        <option value="">All categories</option>
                        <option value="Hatchback">Hatchback</option>
                        <option value="Coupe">Coupe</option>
                        <option value="Cabriolet">Cabriolet</option>
                        <option value="Sedan">Sedan</option>
                        <option value="Wagon">Wagon</option>
                        <option value="Limousine">Limousine</option>
                        <option value="SUV">SUV</option>
                        <option value="Pickup truck">Pickup truck</option>
                        <option value="Van">Van</option>
                        <option value="Minivan">Minivan</option>
                    </select>
                </div>

                <div class="sorting">
                    <h2>Enter a price for your offer</h2>
                    <h2>Upload images for your offer</h2>
                    <input type="text" class="price" id="price" name="price" placeholder="$50,000">
                    <div>
                        <label for="file-upload" class="custom-file-upload">
                            <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                        </label>
                        <input id="file-upload" type="file"/>
                        <label for="file-upload" class="custom-file-upload">
                            <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                        </label>
                        <input id="file-upload" type="file"/>
                    </div>
                </div>

                <div class="device">
                    <h2>Enter a price for your offer</h2>
                    <input type="text" class="price" id="price" name="price" placeholder="$50,000">
                    <h2>Upload images for your offer</h2>
                    <div>
                        <label for="file-upload" class="custom-file-upload">
                            <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                        </label>
                        <input id="file-upload" type="file"/>
                        <label for="file-upload" class="custom-file-upload">
                            <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                        </label>
                        <input id="file-upload" type="file"/>
                    </div>
                </div>

                <div class="description">
                    <h2>Add a short description about your offer</h2>
                    <input type="text" class="input desc" id="description" name="vehicle-description">
                </div>
            
                <button type="submit" class="publishOfferButton button secondary" form="publishOffer" value="publishOffer" >Publish offer</button>
            </div>
        </div>
    <form>
</div><!-- .section-fullwidth -->

<?php get_footer(); ?>
