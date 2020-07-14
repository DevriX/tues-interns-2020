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
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<section class="section-fullwidth section-search">
    <div class="row">
          <div class="column small-32 medium-32">
              <div id="primary" class="content-area">
                  <main id="main" class="site-main">
                    <div class="section-fullwidth inverted">
                        <div class="simple-search">
                          <div class="specifications">
                            <h2>Find your ream car</h2>

                            <form class="" action="index.html" method="post">

                            </form>
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


                                      <div class="vehicle-type">
                                            <span id="car" class="selected type"><i class="fas fa-car"></i></span>
                                            <span id="truck" class="type"><i class="fas fa-truck"></i></span>
                                            <span id="motorcycle" class="type"><i class="fas fa-motorcycle"></i></span>
                                            <span id="tractor" class="type"><i class="fas fa-tractor"></i></span>
                                            <span id="bus" class="type"><i class="fas fa-bus"></i></span>
                                            <input type="hidden" name="category" id="category" value="car">
                                          </div>

                              </div>

                                <div class="searchButton button secondary" id="search-button" form="searchButton">Search now</div>

                                <a href="http://local.carmag.com/index.php/advanced-search/" class="advanced-button">Advanced Search</a>

                        </div>
                    </div><!-- .section-fullwidth -->
                  </main><!-- #main -->
              </div><!-- #primary -->
      </div><!-- .column -->
      </div><!-- .row -->
  </section><!-- .section-fullwidth section-main -->

  <script>
function myFunction() {
  let price1 = document.getElementById('price-first');
  let price2 = document.getElementById('price-second');
  price2 = [price1, price1 = price2][0];
  document.getElementById("test").innerHTML = "test";
}
</script>

<section class="section-fullwidth section-latestoffers">
    <div class="row latestoffers-text">
        Check our latest deals
    </div><!-- .row -->
    <div class="view latestoffers-grid">
    <?php
for ($i = 0; $i < 6; $i++):
    get_template_part('template-parts/content', 'card');
endfor;
?>

    </div>
</section><!-- .section-fullwidth section-main -->

<?php
get_footer();
?>
