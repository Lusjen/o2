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
              <ul class="result__list">
                <?
                  foreach($REZULT as $key=>$s){
                    $s['img']= str_replace('.png', "",  $s['img']);
                    $s['img']= str_replace('.jpg', "",  $s['img']);
                    $url="$url_link_shlashbefore/plan{$s['buld']}/sections{$s['sec']}/floor{$s['floor']}/flat{$s['number']}_{$s['id']}/";
                    $img_flat='/img/houses/house'.$s['buld'].'_png_white/'.$s['img'].'.png';
                ?>
                  <li class="sort result__item"
                      data-floor='<?=$s['floor']?>'
                      data-area='<?=$s['all_room']?>'
                      data-room='<?=$s['kim']?>'
                      data-sec='<?=$s['sec']?>'
                      data-build='<?=$s['buld']?>'
                      style='' >
                      <div class="result__img">
                        <img src="<?=$img_flat?>" <?AltImgAdd($mes['fl-mes1'].' '.$REZULT2['number'])?>>
                      </div>
                      <table style="width:100%; line-height:1.5;">
                        <tr><td><?=$mes['par-mes1']?></td><td><?=$s['buld']?></td>
                        </tr>
                        <tr><td><?=$mes['pl-mes14']?></td><td><?=$s['floor']?></td>
                        </tr>
                        <tr><td><?=$mes['pl-mes3']?></td><td><?=$s['number']?></td>
                        </tr>
                        <tr><td><?=$mes['par-mes2']?></td><td><?=$s['kim']?></td>
                        </tr>
                        <tr><td><?=$mes['par-mes-area']?></td><td><?=$s['all_room']?></td>
                        </tr>
                      </table>
                    <a class="button" href="<?=$url;?>"><?=$mes['par-mes8']?></a>
                  </li>
             <?}?>
              </ul>

            </div>
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
            /* border-color: #ef4136; */
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
          .irs {
              height: 60px;
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
            background: #98c45a;;
            width: 100%;
            border: none;
            max-width: 200px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            font-size: 12px;
            color: #fff;
            border-radius: 4px;
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
              /* display: none; <- Crashes Chrome on hover */
              -webkit-appearance: none;
              margin: 0;
          }
          .result__list{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            display: -webkit-flex;
            -webkit-flex-wrap: wrap;
            -webkit-justify-content: space-between;
            width: 90%;
            margin: 0 auto;
            /* padding: 50px; */
          }
          .result__item{
            width: 24%;
            border: 1px solid #666;
            padding: 20px;
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
            box-shadow: rgba(0,0,0,0.8) 0px 0px 10px -1px;
            transition: 0.4s;
            -webkit-transition: 0.4s;
          }
          .result__item .button{
            width: 100%;
            box-sizing: border-box;
            text-align: center;
            margin-top: 20px;
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
          /* .range__item:nth-child(2){
            display: none;
          } */
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
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/ion.rangeSlider.js"></script>
<script src="js/range.js"></script>
</body>
</html>
