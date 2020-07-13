<?php
/**
 * Template Name: Advanced Search
 *
 * Custom advanced search template for the theme
 *
 * @since  v1.0.0
 * @package CarMag
 */

get_header();
?>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<section class="section-fullwidth section-search">
    <div class="row">
          <div class="column small-32 medium-32">
              <div id="primary" class="content-area">
                  <main id="main" class="site-main">
                    <div class="section-fullwidth inverted">
                        <div class="simple-search">
                            <div class="specifications">
                                <h2>Find your dream car</h2>
                                <div class="elements">
                                    <select class="brands" id="brands" onChange="handleModels()">
                                        <option selected="" value="">Brand</option>
                                    </select>

                                    <select class="models" id="models">
                                        <option selected="" value="">Model</option>
                                    </select>

                                    <select class="condition">
                                        <option selected="" value="">Condition</option>
                                        <option value="Factory new">Factory new</option>
                                        <option value="Used">Used</option>
                                        <option value="For parts">For parts</option>
                                    </select>

                                    <select class="condition">
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

                                    <div class="wrapper">
                                        <input type="text" class="price-first"  id="price-first" name="price-first" placeholder="$2000">
                                        <div class="separator" onclick="myFunction()" id="test"><i class="fas fa-exchange-alt"></i> </div>
                                        <input type="text" class="price-second"  id="price-second" name="price-second" placeholder="$15,900">
                                        </div>

                                </div>

                                <div class="vehicle-type">
                                    <a id="car" class="selected" href="#"><i class="fas fa-car"></i></a>
                                    <a id="car" href="#"><i class="fas fa-truck"></i></a>
                                    <a id="car" href="#"><i class="fas fa-motorcycle"></i></a>
                                    <a id="car" href="#"><i class="fas fa-tractor"></i></a>
                                    <a id="car" href="#"><i class="fas fa-bus"></i></a>
                                </div>

                                <button type="submit" class="searchButton button secondary" form="searchButton">Search now</button>

                        </div>
                    </div><!-- .section-fullwidth -->
                  </main><!-- #main -->
              </div><!-- #primary -->
      </div><!-- .column -->
      </div><!-- .row -->
  </section><!-- .section-fullwidth section-main -->

<?php
get_footer();
?>
