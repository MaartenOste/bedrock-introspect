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
                <a href="<?php echo get_home_url(); ?>" class="logo">
                    <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    
                    if ( has_custom_logo() ) {
                            echo '<img src="'  . $logo[0] . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                            echo get_bloginfo( 'name' );
                    }
                    ?>
                </a>
                
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
