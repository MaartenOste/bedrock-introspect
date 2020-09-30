<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php bloginfo('name') . ' - ' . wp_title(); ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

    <!-- Header -->
        <header id="header">
            <div class="inner">
                <a href="index.html" class="logo">introspect</a>
                
                <nav id="nav">
                <?php 
                    $locations = get_nav_menu_locations();
                    $menuId = $locations['primary'];
                    $primaryNav = wp_get_nav_menu_items($menuId);
                    foreach($primaryNav as $menuItem) :
                ?>
                <a href="<?php echo $menuItem->url; ?>">
                    <?php echo $menuItem->title; ?>
                </a>
                <?php endforeach; ?>
                </nav>
            </div>
        </header>
        <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
