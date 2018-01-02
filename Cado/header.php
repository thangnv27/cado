<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <meta name="keywords" content="<?php echo get_option('keywords_meta') ?>" />
        <meta name="author" content="cacuoc.biz" />
        <meta name="robots" content="index, follow" /> 
        <meta name="googlebot" content="index, follow" />
        <meta name="bingbot" content="index, follow" />
        <meta name="geo.region" content="VN" />
        <meta name="geo.position" content="14.058324;108.277199" />
        <meta name="ICBM" content="14.058324, 108.277199" />

        <!--<meta name="viewport" content="initial-scale=1.0" />-->

        <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />        
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/common.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/wp-default.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/tab.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

        <script>
            var siteUrl = "<?php bloginfo('siteurl'); ?>";
            var themeUrl = "<?php bloginfo('stylesheet_directory'); ?>";
            var no_image_src = themeUrl + "/images/no_image_available.jpg";
            var is_home = <?php echo is_home() ? 'true' : 'false'; ?>;
            var ajaxurl = siteUrl + '/wp-admin/admin-ajax.php';
        </script>
        <style type="text/css">#overlay {background-color:#000000;}</style>

        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/tabber.js" type="text/javascript"></script>
        <script type="text/javascript">
            document.write('<style type="text/css">.tabber{display:none;}<\/style>');
            var tabberOptions = {manualStartup: false};
            function begForMoney()
            {
                if (!arguments.callee.stopBegging) {
                    arguments.callee.stopBegging = true;
                }
            }
        </script>
        <script type="text/javascript"><!--//--><![CDATA[//><!--
            sfHover = function() {
                if (!document.getElementsByTagName)
                    return false;
                var sfEls = document.getElementById("nav").getElementsByTagName("li");

                // if you only have one main menu - delete the line below //
                var sfEls1 = document.getElementById("subnav").getElementsByTagName("li");
                //

                for (var i = 0; i < sfEls.length; i++) {
                    sfEls[i].onmouseover = function() {
                        this.className += " sfhover";
                    }
                    sfEls[i].onmouseout = function() {
                        this.className = this.className.replace(new RegExp(" sfhover\\b"), "");
                    }
                }

                // if you only have one main menu - delete the "for" loop below //
                for (var i = 0; i < sfEls1.length; i++) {
                    sfEls1[i].onmouseover = function() {
                        this.className += " sfhover1";
                    }
                    sfEls1[i].onmouseout = function() {
                        this.className = this.className.replace(new RegExp(" sfhover1\\b"), "");
                    }
                }
                //

            }
            if (window.attachEvent)
                window.attachEvent("onload", sfHover);
            //--><!]]></script>

        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->

<?php
if (is_singular())
    wp_enqueue_script('comment-reply');

wp_head();
?>
    </head>
    <body>
        <div id="wrap">
            <div id="topnavbar">

                <div class="topnavbarleft">
                    <p><script src="<?php bloginfo('stylesheet_directory'); ?>/js/date.js" type="text/javascript"></script></p>
                </div>

                <div class="topnavbarright">
                    <p>
                        <a href="<?php bloginfo('rss2_url'); ?>">
                            <img style="vertical-align:middle" src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.gif" alt="Subscribe to <?php bloginfo("name"); ?>" />
                            News Feed
                        </a>
                        <a href="<?php bloginfo('comments_rss2_url'); ?>">
                            <img style="vertical-align:middle;margin-left:10px;" src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.gif" alt="Subscribe to <?php bloginfo("name"); ?>" />
                            Comments
                        </a>
                    </p>
                </div>

            </div>

            <div id="header">
                <div class="headerleft">
                    <a href="<?php bloginfo('siteurl'); ?>">
                        <img src="<?php echo get_option("sitelogo"); ?>" alt="<?php bloginfo('name'); ?>" />
                    </a>
                </div>

                <div class="headerright">
                    <?php echo stripslashes(get_option(SHORT_NAME . "_adHead")); ?>
                </div>

            </div>

            <div id="navbar">

                <div id="navbarleft">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => '',
                        'menu_id' => 'nav'
                    ));
                    ?>
                </div>

                <div id="navbarright">
                    <form id="searchform" method="get" action="<?php echo home_url(); ?>">
                        <input type="text" value="Search this website..." name="s" id="s" 
                               onfocus="if (this.value == this.defaultValue)
                    this.value = '';" 
                               onblur="if (this.value == '')
                                           this.value = this.defaultValue;" />
                        <input type="submit" id="sbutt" value="GO" /></form>
                </div>

            </div>

            <div style="clear:both;"></div>