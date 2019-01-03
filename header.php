<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>


    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"
    />
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" media="screen,projection"
    />

    <title>
        <?php wp_title(''); ?>
    </title>

    <?php wp_head();
    ?>


</head>

<body <?php body_class(); ?>>


    <header>
<div>

<div class="navbar-fixed">
    <nav class="nav-extended black">
    <div class="nav-wrapper">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo"><img src="<?php echo get_template_directory_uri(); ?>"></a>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger grey darken-3"><i class="material-icons">menu</i></a>
      <a  href="#share" class="modal-trigger share"><i style="padding:0 15px;" class="material-icons white-text right hide-on-large-only">reply</i></a>
      
      <ul class="right hide-on-med-and-down">
      

      </ul>

    </div>

    <div class="nav-content hide-on-med-and-down">
      <ul class="tabs tabs-transparent blue valign-wrapper">
  

      </ul>

    </div>
  </nav>
</div>

  <ul id="nav-mobile" class="sidenav">

  </ul>

    </header>

    <main>