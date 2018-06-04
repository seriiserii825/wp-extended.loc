<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php wp_head(); ?>
</head>

<body>
<div class="karkas">
    <div class="header">
        <a href="#"><img class="logo" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Extendet" /></a>
        <p class="head-contakt">
            <img src="<?php bloginfo('template_url'); ?>/images/head-mail.png" alt="" /> <a href="mailto:<?php bloginfo('admin_email'); ?>"><?php bloginfo('admin_email'); ?></a>&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_url'); ?>/images/head-mail.png" alt="" /> <?php echo get_option( 'phone' ); ?>

        </p>
        <div class="head-soc">
            <?php if(!dynamic_sidebar( 'header-icons' )) : ?>
                <span style="color: white;">Место для иконок</span>
            <?php endif; ?>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="#">The Team</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="our-work.html">Our Work</a></li>
                <li><a href="#">Our Videos</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>    
            <div class="serach">
                <form action="">
                    <input class="search-txt" type="text" value="Search" onBlur="if(this.value=='')this.value='Search'" onFocus="if(this.value=='Search')this.value=''" />
                    <input type="image" src="<?php bloginfo('template_url'); ?>/images/search-bg.png" name="go" />
                </form>
            </div>
        </div>
    </div>