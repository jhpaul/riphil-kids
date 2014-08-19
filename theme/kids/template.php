<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         template.php
* @Package:      GetSimple
* @Action:       Beadysite theme for GetSimple CMS
*
*****************************************************/
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php get_page_clean_title(); ?> | <?php get_site_name(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php get_header(); ?>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        

        <link rel="stylesheet" href="theme/kids/css/normalize.css">
        <link rel="stylesheet" href="theme/kids/css/main.css">
        <script src="theme/kids/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body id="<?php get_page_slug(); ?>" >
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <header>
            <a href="<?php get_site_url(); ?>"><img src="http://placehold.it/300x150&text=<?php get_site_name(); ?>" alt="<?php get_site_name(); ?>" /></a>
        </header>



        <p>Hello world! This is HTML5 Boilerplate.</p>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="theme/kids/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="theme/kids/js/plugins.js"></script>
        <script src="theme/kids/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
