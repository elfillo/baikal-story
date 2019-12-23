<?php
/*
Template Name: Спасибо
*/
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="description" content="" />
    <title>Успешная отправка!</title>
    <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="" />

    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/AngleciaPro.woff" as="font" type="font/woff" crossorigin="anonymous" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/AngleciaPro.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Stolzl-Light.woff" as="font" type="font/woff" crossorigin="anonymous" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Stolzl-Light.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Stolzl-Regular.woff" as="font" type="font/woff" crossorigin="anonymous" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Stolzl-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Stolzl-Medium.woff" as="font" type="font/woff" crossorigin="anonymous" />
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Stolzl-Medium.woff2" as="font" type="font/woff2" crossorigin="anonymous" />

    <!-- Begin styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/media_1.css" />
    <!-- End styles -->
</head>

<body class="page ">

    <section class="success">
        <div class="container">
            <div class="success__inner">
                <a href="/" class="success__logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo_white.svg" width="103" height="101" alt="Baikal Story">
                </a>
                <h2 class="display display_size_small success__title"><?php pll_e('Спасибо за бронирование')?></h2>
                <div class="success__text">
                    <p>
                        <?php pll_e('В ближайшее время мы свяжемся с вами для подтверждения бронирования')?>
                    </p>
                </div>
            </div>
        </div>
    </section>


</body>

</html>