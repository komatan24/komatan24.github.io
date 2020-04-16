<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>

    <!-- wordpress管理画面などから設定した内容が反映される -->
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <!-- ヘッダー -->
    <header>
        <h1>
            <a href="<?php echo home_url(); ?>">公立長生病院
                <span>chosei hospital</span>
            </a>
        </h1>
    </header>
