<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
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
                <div class="param_container">
                  <div class="filter__name">Фільтр</div>
    							<!-- <a class="close" href="javascript:history.go(-1)" mce_href="javascript:history.go(-1)"><img src="/img/close.svg" alt="close" width="40px"></a> -->
                  <div class="range_box">
                      <div class="range__item">
                    	 <div class="filter_name">Вартість, грн</div>
                       <input
                         class="slider__currentMin slider__currentMin<?=$t?>"
                         type="number"
                         min="100000"
                         value="100000"
                         max="500000">
                       <input
                         class="slider__currentMax slider__currentMax<?=$t?>"
                         type="number"
                         min="100000"
                         value="500000"
                         max="500000">
                    	 <input type="text" id="price"  value="200000"/>
                    	 <input type="hidden" id="" value="<?echo $Rest[$t]['min'].'/'.$Rest[$t]['max']?>"/>
                     </div>

                     <div class="range__item">
                      <div class="filter_name">Загальна площа, м.кв</div>
                      <input
                        class="slider__currentMin slider__currentMin<?=$t?>"
                        type="number"
                        min="42"
                        value="42"
                        max="150">
                      <input
                        class="slider__currentMax slider__currentMax<?=$t?>"
                        type="number"
                        min="42"
                        value="150"
                        max="150">
                      <input type="text" id="square"  value="44"/>
                      <input type="hidden" id="" value="<?echo $Rest[$t]['min'].'/'.$Rest[$t]['max']?>"/>
                    </div>

                  </div>
                  <div class="checkbox__box">
                    <div class="checkbox__item checkboxes__rooms">
                      <div class="filter_name">Кіл-ть кімнат</div>
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

                      <div class="range__item">
                    	 <div class="filter_name">Ціна за м.кв, грн</div>
                       <input
                         class="slider__currentMin slider__currentMin<?=$t?>"
                         type="number"
                         min="7000"
                         value="7000"
                         max="50000">
                       <input
                         class="slider__currentMax slider__currentMax<?=$t?>"
                         type="number"
                         min="7000"
                         value="50000"
                         max="50000">
                    	 <input type="text" id="priceM"  value="7000"/>
                    	 <input type="hidden" id="" value="<?echo $Rest[$t]['min'].'/'.$Rest[$t]['max']?>"/>
                     </div>

                     <div class="range__item">
                      <div class="filter_name">Загальна площа, м.кв</div>
                      <input
                        class="slider__currentMin slider__currentMin<?=$t?>"
                        type="number"
                        min="12"
                        value="12"
                        max="154">
                      <input
                        class="slider__currentMax slider__currentMax<?=$t?>"
                        type="number"
                        min="12"
                        value="154"
                        max="154">
                      <input type="text" id="squareLiv"  value="52"/>
                      <input type="hidden" id="" value="<?echo $Rest[$t]['min'].'/'.$Rest[$t]['max']?>"/>
                    </div>

                  </div>


                </div>
                <div class="button__box">
                  <span class="filter_rev">За вашими параметрами знайдено <span class="number_flats">0</span> квартир</span>
                  <input class="button" type="submit" value="Шукати">
                  <a class="reset-button js-reset-filter-button" href="#" id="reset_button">Зкинути параметри</a>
                </div>
              </div><!--end param container -->

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

              <ul class="result__list with-empty-cells">
                <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
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
                <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
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
                  <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
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
                  <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
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
                  <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
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
                  <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
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
                  <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
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

                  <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
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
            </div>
            <a class="button filter__more" href="#">Завантажити більше планувань</a>
        </section>

        <? include_once('includes/footer.php'); ?>
    </div>
</div>
<script src="js/common.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/ion.rangeSlider.js"></script>
<script src="js/range.js"></script>

</body>
</html>
