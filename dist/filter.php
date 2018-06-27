<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.min.css">
    <!-- <link rel="stylesheet" href="css/filter-page/filter-page.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/filter-page.css">
    <title>O2 Filter</title>
</head>
<body>
<div class="page-wrapper">
    <?php include_once('includes/menu.php'); ?>
    <?php include_once('includes/forms/callback_form.php'); ?>
    <div class="slideable-page-content">
    <?php include_once('includes/header.php'); ?>

        <section class="filter">
            <div class="page-hero">
                <div class="wrapper page-hero__wrapper">
                    <div class="page-hero_nav">
                        <h1 class="page-hero__heading">
                            Обрати квартиру
                        </h1>
                        <div class="page-hero__nav-links">
                            <a class="page-hero__nav-link page-hero__nav-link_main" href="/">Головна</a>
                            <span class="page-hero_vertical-line"></span>
                            <a class="page-hero__nav-link page-hero__nav-link_active" href="#">Фільтр</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapper">
              <div class="param_container1">
                <div class="filter__mainname">Фільтр</div>
                <div class="param_container">
    							<!-- <a class="close" href="javascript:history.go(-1)" mce_href="javascript:history.go(-1)"><img src="/img/close.svg" alt="close" width="40px"></a> -->
                  <div class="range_box">
                      <div class="range__item js-filter__slider_pt">
                    	 <div class="filter_name">Вартість, грн</div>
                       <div class="filter__texts">
                            <input class="filter__text js-filter__text_min" type="number"/>
                            <input class="filter__text js-filter__text_max" type="number"/>
                        </div>
                        <div class="filter__ranges filter__ranges_pt">
                            <?php /*Place PHP values here*/?>
                                <input type="range" min="500" max="5000000" class="filter__hidden-values filter__hidden-values_pt js-filter__hidden-values" style="display: none;">
                            <?php /*Place PHP values here*/?>
                            <input class="filter__range filter__range_pt js-filter__range" id="price" type="text">
                        </div>
                     </div>

                     <div class="range__item js-filter__slider_ta">
                      <div class="filter_name">Загальна площа, м.кв</div>
                      <div class="filter__texts">
                            <input class="filter__text js-filter__text_min" type="number"/>
                            <input class="filter__text js-filter__text_max" type="number"/>
                        </div>
                        <div class="filter__ranges filter__ranges_ta">
                            <?php /*Place PHP values here*/?>
                                <input type="range" min="5" max="100" class="filter__hidden-values filter__hidden-values_ta js-filter__hidden-values" style="display: none;">
                            <?php /*Place PHP values here*/?>
                            <input class="filter__range filter__range_ta js-filter__range" id="square" type="text">
                        </div>
                    </div>

                  </div>
                  <div class="checkbox__box js-filter__rooms">
                    <div class="filter_name">Кіл-ть кімнат</div>
                    <div class="checkbox__item checkboxes__rooms">
                      <input id="checkbox__room1" class="checkbox__room filter__checkbox" type="checkbox" value="1"/>
                      <label for="checkbox__room1" class="checkbox__text">1</label>
                      <input id="checkbox__room2" class="checkbox__room filter__checkbox" type="checkbox" value="2"/>
                      <label for="checkbox__room2" class="checkbox__text">2</label>
                      <input id="checkbox__room3" class="checkbox__room filter__checkbox" type="checkbox" value="3"/>
                      <label for="checkbox__room3" class="checkbox__text">3</label>
                      <input id="checkbox__room4" class="checkbox__room filter__checkbox" type="checkbox" value="4"/>
                      <label for="checkbox__room4" class="checkbox__text">4</label>
                    </div>

                  </div>
                  <div class="range_box">

                      <div class="range__item js-filter__slider_pm">
                    	 <div class="filter_name">Ціна за м.кв, грн</div>
                       <div class="filter__texts">
                            <input class="filter__text js-filter__text_min" type="number"/>
                            <input class="filter__text js-filter__text_max" type="number"/>
                        </div>
                        <div class="filter__ranges filter__ranges_pm">
                            <?php /*Place PHP values here*/?>
                                <input type="range" min="7000" max="50000" class="filter__hidden-values filter__hidden-values_pm js-filter__hidden-values" style="display: none;">
                            <?php /*Place PHP values here*/?>
                            <input class="filter__range filter__range_pm js-filter__range" id="priceM" type="text">
                        </div>
                     </div>

                     <div class="range__item js-filter__slider_la">
                      <div class="filter_name">Загальна площа, м.кв</div>
                      <div class="filter__texts">
                            <input class="filter__text js-filter__text_min" type="number"/>
                            <input class="filter__text js-filter__text_max" type="number"/>
                        </div>
                        <div class="filter__ranges filter__ranges_la">
                            <?php /*Place PHP values here*/?>
                                <input type="range" min="12" max="154" class="filter__hidden-values filter__hidden-values_la js-filter__hidden-values" style="display: none;">
                            <?php /*Place PHP values here*/?>
                            <input class="filter__range filter__range_la js-filter__range" id="squareLiv" type="text">
                        </div>
                     </div>
                    </div>
                  </div>
                </div>
                <div class="button__box">
                  <span class="filter_rev">За вашими параметрами знайдено <span class="number_flats filter__results-found-numb">0</span> квартир</span>
                  <a href="#" class="button button__search js-filter__btn">Шукати</a>
                  <a class="reset-button js-filter__reset" href="#" id="reset_button">Зкинути параметри</a>
                </div>
              </div><!--end param container -->

              <div class="wrapper">
                <div class="filter__info">
                  <div class="filter__info__quant">
                    Знайдено квартир: <span>123</span>
                  </div>
                  <ul class="filter_info__list">
                    <li><a href="#">1-кімнатні</a></li>
                    <li><a href="#">2-кімнатні</a></li>
                    <li><a href="#">3-кімнатні</a></li>
                    <li><a href="#">4-кімнатні</a></li>
                  </ul>
                </div>
              </div>

            <div class="wrapper filter__results-wrap">
            
              <ul class="result__list with-empty-cells">
                <li class="sort result__item cell filter__result_hidden js-filter__result" 
                data-pricetotal="10000"
                data-totalarea="40"
                data-rooms="1"
                data-pricemeter="11000"
                data-livingarea="20" >
                  <div class="result__item__inner">
                    <div class="result__img">
                      <img src="/img/filter/Plan.png" alt="">
                    </div>
                    <table style="width:100%; line-height:1.5;">
                      <tr><td>Секція</td><td>4</td></tr>
                      <tr><td>Кількість кімнат</td><td>2</td></tr>
                      <tr><td>Загальна площа</td><td>78,5</td></tr>
                      <tr><td>Житлова площа</td><td>52</td></tr>
                    </table>
                  </div>
                  <a class="button" href="">Дивитися квартиру</a>
                </li>
                <li class="sort result__item cell filter__result_hidden js-filter__result"
                data-pricetotal="20000"
                data-totalarea="20"
                data-rooms="2"
                data-pricemeter="12000"
                data-livingarea="30">
                    <div class="result__item__inner">
                      <div class="result__img">
                        <img src="/img/filter/Plan.png" alt="">
                      </div>
                      <table style="width:100%; line-height:1.5;">
                        <tr><td>Секція</td><td>4</td></tr>
                        <tr><td>Кількість кімнат</td><td>2</td></tr>
                        <tr><td>Загальна площа</td><td>78,5</td></tr>
                        <tr><td>Житлова площа</td><td>52</td></tr>
                      </table>
                    </div>
                    <a class="button" href="">Дивитися квартиру</a>
                  </li>
                  <li class="sort result__item cell filter__result_hidden js-filter__result"
                  data-pricetotal="60000"
                  data-totalarea="80"
                  data-rooms="3"
                  data-pricemeter="13000"
                  data-livingarea="40">
                    <div class="result__item__inner">
                      <div class="result__img">
                        <img src="/img/filter/Plan.png" alt="">
                      </div>
                      <table style="width:100%; line-height:1.5;">
                        <tr><td>Секція</td><td>4</td></tr>
                        <tr><td>Кількість кімнат</td><td>2</td></tr>
                        <tr><td>Загальна площа</td><td>78,5</td></tr>
                        <tr><td>Житлова площа</td><td>52</td></tr>
                      </table>
                    </div>
                    <a class="button" href="">Дивитися квартиру</a>
                  </li>
                  <li class="sort result__item cell filter__result_hidden js-filter__result"
                  data-pricetotal="5000"
                  data-totalarea="10"
                  data-rooms="1"
                  data-pricemeter="14000"
                  data-livingarea="50">
                    <div class="result__item__inner">
                      <div class="result__img">
                        <img src="/img/filter/Plan.png" alt="">
                      </div>
                      <table style="width:100%; line-height:1.5;">
                        <tr><td>Секція</td><td>4</td></tr>
                        <tr><td>Кількість кімнат</td><td>2</td></tr>
                        <tr><td>Загальна площа</td><td>78,5</td></tr>
                        <tr><td>Житлова площа</td><td>52</td></tr>
                      </table>
                    </div>
                    <a class="button" href="">Дивитися квартиру</a>
                  </li>
                  <li class="sort result__item cell filter__result_hidden js-filter__result"
                  data-pricetotal="2000"
                  data-totalarea="90"
                  data-rooms="4"
                  data-pricemeter="15000"
                  data-livingarea="60">
                    <div class="result__item__inner">
                      <div class="result__img">
                        <img src="/img/filter/Plan.png" alt="">
                      </div>
                      <table style="width:100%; line-height:1.5;">
                        <tr><td>Секція</td><td>4</td></tr>
                        <tr><td>Кількість кімнат</td><td>2</td></tr>
                        <tr><td>Загальна площа</td><td>78,5</td></tr>
                        <tr><td>Житлова площа</td><td>52</td></tr>
                      </table>
                    </div>
                    <a class="button" href="">Дивитися квартиру</a>
                  </li>
                  <li class="sort result__item cell filter__result_hidden js-filter__result" 
                  data-pricetotal="300000"
                  data-totalarea="50"
                  data-rooms="2"
                  data-pricemeter="16000"
                  data-livingarea="70">
                    <div class="result__item__inner">
                      <div class="result__img">
                        <img src="/img/filter/Plan.png" alt="">
                      </div>
                      <table style="width:100%; line-height:1.5;">
                        <tr><td>Секція</td><td>4</td></tr>
                        <tr><td>Кількість кімнат</td><td>2</td></tr>
                        <tr><td>Загальна площа</td><td>78,5</td></tr>
                        <tr><td>Житлова площа</td><td>52</td></tr>
                      </table>
                    </div>
                    <a class="button" href="">Дивитися квартиру</a>
                  </li>
              </ul>
              <a class="button filter__more js-filter__more-results" href="#">Завантажити більше планувань</a>
            </div> 
        </section>

        <? include_once('includes/footer.php'); ?>
    </div>
</div>
<!-- <script src="js/common.min.js"></script> -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/filter.min.js"></script>

</body>
</html>
