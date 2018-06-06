<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>O2 - Choose Apartment</title>
</head>
<body>
<div class="page-wrapper">
    <?php include_once('includes/menu.php'); ?>
    <?php  include_once('includes/forms/callback_form.php'); ?> 
    <div class="slideable-page-content">
    <?php include_once('includes/header.php'); ?>
        <section class="stub">
            <div class="page-hero">
                <div class="wrapper page-hero__wrapper">
                    <div class="page-hero_nav">
                        <h1 class="page-hero__heading">
                            Обрати квартиру
                        </h1>
                        <div class="page-hero__nav-links">
                            <a class="page-hero__nav-link page-hero__nav-link_main" href="/">Головна</a>
                            <span class="page-hero_vertical-line"></span>
                            <a class="page-hero__nav-link page-hero__nav-link_main" href="#">Обрати будинок</a>
                            <span class="page-hero_vertical-line"></span>
                            <a class="page-hero__nav-link page-hero__nav-link_main" href="#">Обрати поверх</a>
                            <span class="page-hero_vertical-line"></span>
                            <a class="page-hero__nav-link page-hero__nav-link_active" href="#">2.4 квартира<span class="btn_arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="select-apartmens">
            <div class="wrapper">
                <div class="select-apartmens-wrap select-apartmens-wrap_height_auto">
                    <div class="select-apartmens-top select-apartmens-top_margin-bottom">
                        <a href="#" class="select-button">
                            <svg class="select-button__icon select-button__icon_rotate" xmlns="http://www.w3.org/2000/svg" width="444.819" height="444.819" viewBox="0 0 444.819 444.819"><path d="M352.025 196.712L165.884 10.848C159.029 3.615 150.469 0 140.187 0s-18.842 3.619-25.697 10.848L92.792 32.264c-7.044 7.043-10.566 15.604-10.566 25.692 0 9.897 3.521 18.56 10.566 25.981L231.545 222.41 92.786 361.168c-7.042 7.043-10.564 15.604-10.564 25.693 0 9.896 3.521 18.562 10.564 25.98l21.7 21.413c7.043 7.043 15.612 10.564 25.697 10.564 10.089 0 18.656-3.521 25.697-10.564L352.025 248.39c7.046-7.423 10.571-16.084 10.571-25.981.001-10.088-3.525-18.654-10.571-25.697z"/></svg>
                            <svg class="select-button__icon select-button__icon_rotate" xmlns="http://www.w3.org/2000/svg" width="444.819" height="444.819" viewBox="0 0 444.819 444.819"><path d="M352.025 196.712L165.884 10.848C159.029 3.615 150.469 0 140.187 0s-18.842 3.619-25.697 10.848L92.792 32.264c-7.044 7.043-10.566 15.604-10.566 25.692 0 9.897 3.521 18.56 10.566 25.981L231.545 222.41 92.786 361.168c-7.042 7.043-10.564 15.604-10.564 25.693 0 9.896 3.521 18.562 10.564 25.98l21.7 21.413c7.043 7.043 15.612 10.564 25.697 10.564 10.089 0 18.656-3.521 25.697-10.564L352.025 248.39c7.046-7.423 10.571-16.084 10.571-25.981.001-10.088-3.525-18.654-10.571-25.697z"/></svg>
                            <span class="select-button__text">Обрати квартиру</span>
                        </a>
                        
                        <div class="select-floor">
                            <p class="select-floor__text select-floor__text_full-width">2.4 квартира</p>
                        </div>
                    
                        <a href="#" class="select-button">
                            <img src="img/choose-apartment/filter.png" alt="icon" class="select-button__icon select-button__icon_long">
                            <span class="select-button__text">Фільтр</span>
                        </a>
                    </div>

                    <div class="select-apartmens-middle select-apartmens-middle_margin-bottom">
                        <div class="flat__image-wrap">
                            <img src="img/flat-plan/f2-5_ap2A.png" alt="" class="flat__image">
                        </div>

                        <div class="flat-parameters-wrap">
                            <p class="flat-parameters__heading">
                                Параметри
                            </p>
                            <ul class="flat-parameters-list">
                                <li class="flat-parameters-list__item">
                                    <p class="flat-parameters-list__text">
                                        Загальна: 64.89 м<span class="exponent">2</span>
                                    </p>
                                </li>
                                <li class="flat-parameters-list__item">
                                    <p class="flat-parameters-list__text">
                                        Житлова: 36.27 м<span class="exponent">2</span>
                                    </p>
                                </li>
                                <li class="flat-parameters-list__item">
                                    <p class="flat-parameters-list__text">
                                        Передпокій: 9.76 м<span class="exponent">2</span>
                                    </p>
                                </li>
                                <li class="flat-parameters-list__item">
                                    <p class="flat-parameters-list__text">
                                        Кухня: 11.31 м<span class="exponent">2</span>
                                    </p>
                                </li>
                                <li class="flat-parameters-list__item">
                                    <p class="flat-parameters-list__text"></p>
                                </li>
                                <li class="flat-parameters-list__item">
                                    <p class="flat-parameters-list__text">
                                        Вітальня: 17.24 м<span class="exponent">2</span>
                                    </p>
                                </li>
                                <li class="flat-parameters-list__item">
                                    <p class="flat-parameters-list__text">
                                        Спальня: 19.03 м<span class="exponent">2</span>
                                    </p>
                                </li>
                                <li class="flat-parameters-list__item">
                                    <p class="flat-parameters-list__text">
                                        Санвузол: 3.01 м<span class="exponent">2</span>
                                    </p>
                                </li>
                                <li class="flat-parameters-list__item">
                                    <p class="flat-parameters-list__text">
                                        Ванна: 4.54 м<span class="exponent">2</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="select-apartmens-bottom">
                        <div class="apartmens-plan">
                            <p class="apartmens-plan__text">План поверху</p>
                            <div class="apartmens-plan-image-wrap">
                                <? include_once('includes/houses/2.php'); ?>
                            </div>   
                        </div>
                        <a href="#" class="select-apartmens-bottom__button">
                            <img src="../dist/img/flat-plan/pdf.png" alt="icon" class="select-apartmens-bottom__button-icon">
                            Завантажити PDF
                        </a>
                        <a href="#" class="select-apartmens-bottom__button">
                            Дізнатися ціну
                        </a>
                        <img src="../dist/img/choose-apartment/nav.png" alt="image" class="select-apartmens-bottom__image">
                    </div>
                </div>
            </div>
        </section>



        <? include_once('includes/footer.php'); ?>
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="js/common.min.js"></script>
<script src="js/apartment-select.js"></script>
</body>
</html>