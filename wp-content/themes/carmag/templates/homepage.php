<?php
/**
 * Template Name: Homepage
 *
 * Custom homepage template for the theme
 *
 * @since  v1.0.0
 * @package CarMag
 */

get_header();
?>

<section class="section-fullwidth section-search">
    <div class="row">
        <div class="column small-12 medium-12">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="simple-search">
                        <h2>Find your dream car</h2>

                        <form id="search-form" class="search-form" action="/" method="GET">
                            <input type="hidden" name="search" value="vehicles">
                            <div class="form-content">
                                <select id="brands" name="brand" class="form-field brands" onChange="handleModels()">
                                    <option selected="" value="">Brand</option>
                                </select>
    
                                <select name="model" id="models" class="form-field models">
                                    <option selected="" value="">Model</option>
                                </select>
    
                                <select name="condition" class="form-field condition">
                                    <option selected="" value="">Condition</option>
                                    <option value="new">Factory new</option>
                                    <option value="used">Used</option>
                                    <option value="for_parts">For parts</option>
                                </select>
    
                                <select name="location" class="form-field location">
                                    <option selected="" value="">Location</option>
                                    <option value="blagoevgrad">Благоевград</option>
                                    <option value="burgas">Бургас</option>
                                    <option value="varna">Варна</option>
                                    <option value="velikoturnovo">Велико Търново</option>
                                    <option value="vidin">Видин</option>
                                    <option value="vratsa">Враца</option>
                                    <option value="gabrovo">Габрово</option>
                                    <option value="dobrich">Добрич</option>
                                    <option value="dupnitsa">Дупница</option>
                                    <option value="kurdjali">Кърджали</option>
                                    <option value="kustendil">Кюстендил</option>
                                    <option value="lovech">Ловеч</option>
                                    <option value="montana">Монтана</option>
                                    <option value="pazardjik">Пазарджик</option>
                                    <option value="pernik">Перник</option>
                                    <option value="pleven">Плевен</option>
                                    <option value="plovdiv">Пловдив</option>
                                    <option value="razgrad">Разград</option>
                                    <option value="ruse">Русе</option>
                                    <option value="silistra">Силистра</option>
                                    <option value="sliven">Сливен</option>
                                    <option value="smolqn">Смолян</option>
                                    <option value="sofia">София</option>
                                    <option value="starazagora">Стара Загора</option>
                                    <option value="turgovishte">Търговище</option>
                                    <option value="haskovo">Хасково</option>
                                    <option value="shumen">Шумен</option>
                                    <option value="qmbol">Ямбол</option>
                                </select>
    
    
    
                                <div class="wrapper-price">
                                    <div class="price"><input type="number" class="form-field price-first" name="start_price" value="2000"></div>
                                    <div class="switcher"><i class="fas fa-exchange-alt"></i> </div>
                                    <div class="price"><input type="number" class="form-field price-second" name="end_price" value="16000"></div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <div class="actions-vehicle-type">
                                    <span id="car" class="selected type"><i class="fas fa-car"></i></span>
                                    <span id="truck" class="type"><i class="fas fa-truck"></i></span>
                                    <span id="motorcycle" class="type"><i class="fas fa-motorcycle"></i></span>
                                    <span id="tractor" class="type"><i class="fas fa-tractor"></i></span>
                                    <span id="bus" class="type"><i class="fas fa-bus"></i></span>
                                    <input type="hidden" name="category" id="category" value="car">
                                </div>
    
                                <div class="actions-buttons">
                                    <a href="<?php echo home_url( '/advanced-search/' ); ?>" class="advanced-button button secondary">Advanced Search</a>
                                    <button type="submit" class="search-button button secondary" form="search-form">Search now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .column -->
    </div><!-- .row -->
</section><!-- .section-fullwidth section-main -->

<section class="section-fullwidth section-latestoffers">
    <div class="row latestoffers-text">
        Check our latest deals
    </div><!-- .row -->
    <div class="view latestoffers-grid">
    <?php
        $new_loop = new WP_Query( array(
        'post_type' => 'vehicles',
            'posts_per_page' => 6
        ) );
    ?>

    <?php if ( $new_loop->have_posts() ) : ?>
        <?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>
            <?php 
                $images = ( array )json_decode( get_post_meta( get_the_ID(), __( 'vehicle-images' ), true ) );
                set_query_var('name', sanitize_text_field( get_the_title() ));
                set_query_var('price', sanitize_text_field( get_post_meta( get_the_ID(), __( 'vehicle-price' ), true ) ) );
                set_query_var('url', sanitize_text_field( get_post_permalink( get_the_ID() ) ) );
                set_query_var('image', sanitize_text_field( array_pop( $images ) ));
            ?> 
            <?php get_template_part( 'template-parts/content', 'card' ); ?>
        <?php endwhile;?>
    <?php else: ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    
    </div>
</section><!-- .section-fullwidth section-main -->

<?php
get_footer();
?>
