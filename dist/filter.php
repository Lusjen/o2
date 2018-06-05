<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" type="text/css" href="/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="/css/ion.rangeSlider.skinHTML5.css">
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
                <div class="param_container clearfix">
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
            <a class="button filter__more" href="#">Загрузить больше планировок</a>
        </section>

      <style media="screen">
        .filter .page-hero{
          background-image: url('../img/filter/filter_bg.jpg');
        }
        input[type="submit"] {
          outline: none;
        }
        .load-more-container {
          text-align: center;
        }
        .param_container{
          text-align: center;
          padding-bottom: 30px;
          font-size: 18px;
          color: #000;
          display: flex;
          justify-content: space-between;
          display: -webkit-flex;
          -webkit-justify-content: space-between;
        }
        .param_container1{
          border: 1px solid #b8b8b8;
          border-radius: 4px;
          margin: 20px auto;
        }
        .filter_name{
          font-size: 12px;
        }
        .range_box{
          width: 40%;
          margin: 0;
          padding: 20px 50px 0;
          box-sizing: border-box;
        }
        .checkbox__box{
          width: 10%;
          padding: 20px 10px;
          }
        .checkbox__item{
          text-align: center;
          }
        .filter__checkbox {
          display: none;
          }
        .filter__checkbox:checked + label {
          background-color: red;
          }
        .checkbox__text{
          display: block;
          border: 1px solid #b8b8b8;
          padding: 4px 0;
          text-align: center;
          width: 30px;
          font-size: 12px;
          margin: 12px auto;
          cursor: pointer;
          border-radius: 4px;
          transition: 0.4s;
          -webkit-transition: 0.4s;
          background: transparent;
        }
        .checkbox__text:hover{
          background: #98c45a;
          color: #fff;
        }
        .button__box{
          display: flex;
          justify-content: space-between;
          display: -webkit-flex;
          -webkit-justify-content: space-between;
          margin: 0 20px 20px;
        }
        .button__box > *{
          width: 30%;
          text-align: center;
        }
        input[type="number"]{
          width: 38%;
          display: inline-block;
          margin: 10px;
          margin-bottom: 10px;
          background: rgba(0,0,0,0);
          border: 1px solid #b8b8b8;
          border-radius: 4px;
          outline: none;
          text-align: center;
          padding: 4px 0;
          font-size: 12px;
        }
        input[type="number"]:active,
        input[type="number"]:focus{
          border-color: #ef4136;
          box-shadow: #ef4136 0px 0px 10px -1px;
          transition: 0.4s;
          -webkit-transition: 0.4s;
        }
        input[type="submit"]{
          -webkit-appearance: none;
          background: #98c45a;
          width: 100%;
          border: none;
          max-width: 230px;
          text-align: center;
          cursor: pointer;
          display: inline-block;
          font-size: 12px;
          color: #fff;
          border-radius: 4px;
          padding: 12px 0;
          transition: 0.4s;
          -webkit-transition: 0.4s;
        }
        input[type="submit"]:hover{
          background: #739444;
        }
        .filter_rev{
          color: #7f7f7f;
          font-size: 12px;
        }
        .number_flats{
          color: #000;
        }
        .reset-button{
          color: #7f7f7f;
          text-decoration: underline;
          font-size: 12px;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
        .filter__info{
          display: flex;
          display: -webkit-flex;
          justify-content: space-between;
          -webkit-justify-content: space-between;
          color: #000;
          padding: 10px 0 30px;
        }
        .filter__info__quant{
          margin: 0 20px;
        }
        .filter_info__list li{
          display: inline-block;
          margin: 0 20px;
        }
        .filter_info__list li a{
          color: #000;
          border-bottom: 1px solid transparent;
          transition: 0.36s;
          -webkit-transition: 0.36s;
        }
        .filter_info__list li a:hover{
          border-bottom: 1px solid #000;
        }
        .result__list{
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          display: -webkit-flex;
          -webkit-flex-wrap: wrap;
          -webkit-justify-content: space-between;
          margin: 0 auto;
          }
        .cell.is-empty {
          width: 19%;
          height: 0;
          padding-top: 0;
          padding-bottom: 0;
          margin-top: 0;
          margin-bottom: 0;
          }
        .result__item{
          width: 19%;
          border: 1px solid #b8b8b8;
          border-radius: 4px;
          color: #000;
          font-size: 12px;
          margin-bottom: 12px;
          box-sizing: border-box;
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          display: -webkit-flex;
          -webkit-flex-direction: column;
          -webkit-justify-content: space-between;
          }
        .result__item:hover{
          box-shadow: rgba(0,0,0,0.6) 0px 0px 10px -1px;
          transition: 0.4s;
          -webkit-transition: 0.4s;
          }
        .result__item__inner{
          padding: 20px;
        }
        .button{
          display: block;
          width: 100%;
          background: #98c45a;
          box-sizing: border-box;
          text-align: center;
          margin-top: 6px;
          border-radius: 4px;
          padding: 12px 0;
          transition: 0.35s;
          -webkit-transition: 0.35s;
          }
        .button:hover{
          background: #739444;
        }
        .result__img{
          width: 90%;
          margin: 10px auto;
          box-sizing: border-box;
        }
        .result__img img{
          width: 100%;
          height: auto;
        }
        .button.filter__more{
          max-width: 500px;
          margin: 20px auto 30px;
        }
      @media only screen and (max-width: 1200px){
        .content_param .range_box {
          width: 100%;
          padding-top: 0px;
        }
      }
      @media only screen and (max-width:960px) {
        .checkbox__text {
          margin: 4px;
          }
        input[type="number"] {
          margin: 10px 4px 100px;
          }
        .result__item {
          width: 32%;
          }
        }
      @media only screen and (max-width:768px){
        .checkbox__box{
          padding: 24px;
          flex-direction: column;
          -webkit-flex-direction: column;
        }
        .checkbox__item{
          margin-bottom: 12px;
        }
        .range_box{
          flex-direction: column;
          -webkit-flex-direction: column;
        }
        .range__item{
          width: 100%;
        }
        input[type="submit"]{
          display: block;
          margin: 12px auto 30px;
        }
        .result__list{
          width: 96%;
          margin-top: 12px;
        }
        .result__item {
          width: 49%;
          padding: 20px 10px;
        }
      }
      </style>
        <? include_once('includes/footer.php'); ?>
    </div>
</div>
<script src="js/common.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/ion.rangeSlider.js"></script>
<script src="js/range.js"></script>
<!-- <script type="text/javascript">
  var emptyCells, i;

  $('.with-empty-cells').each(function() {
  emptyCells = [];
  for (i = 0; i < $(this).find('.cell').length; i++) {
  emptyCells.push($('<li>', {
  class: 'cell is-empty'
  }));
  }
  $(this).append(emptyCells);
  });

</script> -->
</body>
</html>
