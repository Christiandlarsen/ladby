<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ladby Museum præsentere ladbyskibet. Med denne kampagneside er vil du få alt den information du behøver for at deltage i ladbyskibets søsætning" />
    <meta name="keywords" content="Viking,Kultur,Fyn,Ladby,Grav,Skib,Museum,Oplevelse,">

<!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Ladbyskibet søsættes">
    <meta itemprop="description" content="Ladby Museum præsentere ladbyskibet. Med denne kampagneside er vil du få alt den information du behøver for at deltage i ladbyskibets søsætning">
    <meta itemprop="image" content="http://www.vikingemuseetladby.dk/media/45445/vikingemuseet-ladby-logo.jpg">

<!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@vikingmuseet">
    <meta name="twitter:title" content="Ladbyskibet søsættes">
    <meta name="twitter:description" content="Ladby Museum præsentere ladbyskibet. Med denne kampagneside er vil du få alt den information du behøver for at deltage i ladbyskibets søsætning">
    <meta name="twitter:creator" content="@vikingemuseet">
<!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="http://www.vikingemuseetladby.dk/media/45445/vikingemuseet-ladby-logo.jpg">

<!-- Open Graph data -->
    <meta property="og:title" content="Ladbyskibet søsættes" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.vikingemuseetladby.dk/" />
    <meta property="og:image" content="http://www.vikingemuseetladby.dk/media/45445/vikingemuseet-ladby-logo.jpg" />
    <meta property="og:description" content="Ladby Museum præsentere ladbyskibet. Med denne kampagneside er vil du få alt den information du behøver for at deltage i ladbyskibets søsætning" />
    <meta property="og:site_name" content="Ladbyskibet søsættes" />
    <meta property="article:published_time" content="2015-12-09T05:59:00+01:00" />
    <meta property="article:modified_time" content="2015-12-09T05:59:00+01:00" />
    <meta property="article:section" content="Article Section" />
    <meta property="article:tag" content="Article Tag" />
    <link rel="shortcut icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />
    <title>Vikinge museet Ladby</title>

   
    <?php wp_head(); ?>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
       
</head>
<body>
   <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <header id="site-header">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <a href="<?php echo get_option( 'home' ) ?>">
                <div class="logo"></div>
            </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" type="button" aria-controls="navbar" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div id="navbar" class="collapse navbar-collapse navHeaderCollapse"> 
                    <?php wp_nav_menu(array(
                        'theme_location' => 'main-nav',
                        'container' => 'false',
                        'menu_class'  => 'nav navbar-nav',
                        'menu' => 'Hovedmenu'
                    )); ?>
                </div>
        </div>
    </header>



