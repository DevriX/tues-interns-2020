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

                        <form id="search-form" class="search-form" action="/search" method="GET">
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
                                    <option value="Благоевград">Благоевград</option>
                                    <option value="Бургас">Бургас</option>
                                    <option value="Варна">Варна</option>
                                    <option value="Велико Търново">Велико Търново</option>
                                    <option value="Видин">Видин</option>
                                    <option value="Враца">Враца</option>
                                    <option value="Габрово">Габрово</option>
                                    <option value="Добрич">Добрич</option>
                                    <option value="Дупница">Дупница</option>
                                    <option value="Кърджали">Кърджали</option>
                                    <option value="Кюстендил">Кюстендил</option>
                                    <option value="Ловеч">Ловеч</option>
                                    <option value="Монтана">Монтана</option>
                                    <option value="Пазарджик">Пазарджик</option>
                                    <option value="Перник">Перник</option>
                                    <option value="Плевен">Плевен</option>
                                    <option value="Пловдив">Пловдив</option>
                                    <option value="Разград">Разград</option>
                                    <option value="Русе">Русе</option>
                                    <option value="Силистра">Силистра</option>
                                    <option value="Сливен">Сливен</option>
                                    <option value="Смолян">Смолян</option>
                                    <option value="София">София</option>
                                    <option value="Стара Загора">Стара Загора</option>
                                    <option value="Търговище">Търговище</option>
                                    <option value="Хасково">Хасково</option>
                                    <option value="Шумен">Шумен</option>
                                    <option value="Ямбол">Ямбол</option>
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
                                    <a href="http://local.carmag.com/index.php/advanced-search/" class="advanced-button button secondary">Advanced Search</a>
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
        for($i = 0; $i < 6; $i++) :
            get_template_part( 'template-parts/content', 'card' );
        endfor;
    ?>
    
    </div>
</section><!-- .section-fullwidth section-main -->

<?php
get_footer();
?>
