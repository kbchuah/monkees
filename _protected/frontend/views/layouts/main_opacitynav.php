<?php
use frontend\assets\Index48Asset;
use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

Index48Asset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="text" content="">
    <meta name="author" content="KB Chuah">
    <link rel="shortcut icon" href="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/favicon.png">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

    <div class="content-wrapper">

        <nav class="navbar solid opacity absolute nav-wrapper-dark inverse-text navbar-expand-lg">
          <div class="container">
            <div class="navbar-header">
              <div class="navbar-brand"><a href="index.html"><img src="#" srcset="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/logo-light.png 1x, <?=Yii::getAlias('@web')?>/themes/brailie/style/images/logo-light@2x.png 2x" alt="" /></a></div>
              <div class="navbar-hamburger ml-auto d-lg-none d-xl-none"><button class="hamburger animate" data-toggle="collapse" data-target=".navbar-collapse"><span></span></button></div>
            </div>
            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="mega-menu-content">
                      <div class="row">
                        <div class="col-lg-3">
                          <ul class="list-unstyled">
                            <li><a href="index.html">Dark + Fullscreen + Lightbox</a></li>
                            <li><a href="index2.html">Onepage + Fullscreen</a></li>
                            <li><a href="index3.html">Revolution Slider + Typography</a></li>
                            <li><a href="index4.html">Dark + Fullscreen + Lightbox</a></li>
                            <li><a href="index5.html">Justifed Portfolio + Lightbox</a></li>
                            <li><a href="index6.html">Filmstrip + Lightbox</a></li>
                            <li><a href="index7.html">Box Layout + Fullscreen</a></li>
                            <li><a href="index8.html">Slide Portfolio + Parallax</a></li>
                            <li><a href="index9.html">Fullscreen + Revolution Slider</a></li>
                            <li><a href="index10.html">Carousel + Fullscreen</a></li>
                            <li><a href="index11.html">Category Slider + Typography</a></li>
                            <li><a href="index12.html">Split Slider + Lightbox</a></li>
                            <li><a href="index13.html">Image Comparison + Retouch</a></li>
                            <li><a href="index14.html">Fullscreen Portfolio + Minimal</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                        <div class="col-lg-3">
                          <ul class="list-unstyled">
                            <li><a href="index15.html">Flow Gallery + Video</a></li>
                            <li><a href="index16.html">Filmstrip + Justifed Portfolio</a></li>
                            <li><a href="index17.html">Box Layout + Magazine</a></li>
                            <li><a href="index18.html">Split Slider + Typography</a></li>
                            <li><a href="index19.html">Fullscreen + Minimal</a></li>
                            <li><a href="index20.html">Onapage + Carousel + Dark</a></li>
                            <li><a href="index21.html">Typewriter + Carousel</a></li>
                            <li><a href="index22.html">Box Slider + Minimal</a></li>
                            <li><a href="index23.html">Thumbnail Slider + Travel</a></li>
                            <li><a href="index24.html">Slide Portfolio + Image Block</a></li>
                            <li><a href="index25.html">Fullscreen + Dark + Carousel</a></li>
                            <li><a href="index26.html">Filmstrip + Justifed Portfolio</a></li>
                            <li><a href="index27.html">Mosaic Portfolio + Box Slider</a></li>
                            <li><a href="index28.html">Carousel + Portrait</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                        <div class="col-lg-3">
                          <ul class="list-unstyled">
                            <li><a href="index29.html">Onepage + Fullscreen</a></li>
                            <li><a href="index30.html">Split Layout + Lightbox</a></li>
                            <li><a href="index31.html">Filterable Carousel</a></li>
                            <li><a href="index32.html">Justified Portfolio + Parallax</a></li>
                            <li><a href="index33.html">Fullscreen Video + Carousel</a></li>
                            <li><a href="index34.html">Typewriter + Bevel</a></li>
                            <li><a href="index35.html">Fullscreen Autowidth Carousel</a></li>
                            <li><a href="index36.html">Modal Gallery + Parallax</a></li>
                            <li><a href="index37.html">Minimal + Masonry Portfolio</a></li>
                            <li><a href="index38.html">Blog + Magazine</a></li>
                            <li><a href="index39.html">Grid Blog + Carousel</a></li>
                            <li><a href="index40.html">Box Layout + Mosaic Portfolio</a></li>
                            <li><a href="index41.html">Grid Blog + Parallax</a></li>
                            <li><a href="index42.html">Fullscreen Carousel + Lightbox</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                        <div class="col-lg-3">
                          <ul class="list-unstyled">
                            <li><a href="index43.html">Fullscreen + Modal Gallery</a></li>
                            <li><a href="index44.html">Box Layout + Masonry Portfolio</a></li>
                            <li><a href="index45.html">Split Layout + Overlay Menu</a></li>
                            <li><a href="index46.html">Split Layout + Modal Gallery</a></li>
                            <li><a href="index47.html">Overlay Menu + Mosaic Portfolio</a></li>
                            <li><a href="index48.html">Image Comparison + Parallax</a></li>
                            <li><a href="index49.html">Dark + Autowidth Slider</a></li>
                            <li><a href="index50.html">Box Layout + Magazine</a></li>
                            <li><a href="index51.html">Fullscreen Content Menu</a></li>
                            <li><a href="index52.html">Split Layout + Fullscreen</a></li>
                            <li><a href="index53.html">Split Layout + Maintenance</a></li>
                            <li><a href="index54.html">Maintenance + Fullscreen</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                      </div>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Features</a>
                  <ul class="dropdown-menu dropdown-menu-left">
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Header</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Classic Header</a>
      	                <ul class="dropdown-menu">
      	                  <li><a class="dropdown-item" href="header.html">Transparent Light</a></li>
      	                  <li><a class="dropdown-item" href="header2.html">Transparent Dark</a></li>
      	                  <li><a class="dropdown-item" href="header3.html">Dark Solid</a></li>
      	                  <li><a class="dropdown-item" href="header4.html">Light Solid</a></li>
      	                  <li><a class="dropdown-item" href="header5.html">Dark Opacity</a></li>
      	                  <li><a class="dropdown-item" href="header6.html">Light Opacity</a></li>
      	                </ul>
      	              </li>
      	              <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Centered Logo</a>
      	                <ul class="dropdown-menu">
      	                  <li><a class="dropdown-item" href="header7.html">Transparent Light</a></li>
      	                  <li><a class="dropdown-item" href="header8.html">Transparent Dark</a></li>
      	                  <li><a class="dropdown-item" href="header9.html">Dark Solid</a></li>
      	                  <li><a class="dropdown-item" href="header10.html">Light Solid</a></li>
      	                  <li><a class="dropdown-item" href="header11.html">Dark Opacity</a></li>
      	                  <li><a class="dropdown-item" href="header12.html">Light Opacity</a></li>
      	                </ul>
      	              </li>
      	              <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Overlay Menu</a>
      	                <ul class="dropdown-menu">
      	                  <li><a class="dropdown-item" href="header13.html">Transparent Light</a></li>
      	                  <li><a class="dropdown-item" href="header14.html">Transparent Dark</a></li>
      	                  <li><a class="dropdown-item" href="header15.html">Dark Solid</a></li>
      	                  <li><a class="dropdown-item" href="header16.html">Light Solid</a></li>
      	                  <li><a class="dropdown-item" href="header17.html">Dark Opacity</a></li>
      	                  <li><a class="dropdown-item" href="header18.html">Light Opacity</a></li>
      	                </ul>
      	              </li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Slider</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="slider.html">Revolution Slider - Static Caption</a></li>
                        <li><a class="dropdown-item" href="slider2.html">Revolution Slider - Single Slide</a></li>
                        <li><a class="dropdown-item" href="slider3.html">Revolution Slider - Classic Fullscreen</a></li>
                        <li><a class="dropdown-item" href="slider4.html">Revolution Slider - Auto Layout</a></li>
                        <li><a class="dropdown-item" href="slider5.html">Revolution Slider - Thumbnail Fullscreen</a></li>
                        <li><a class="dropdown-item" href="slider6.html">Revolution Slider - Thumbnail Auto</a></li>
                        <li><a class="dropdown-item" href="slider7.html">Revolution Slider - Category Gallery</a></li>
                        <li><a class="dropdown-item" href="slider8.html">Revolution Slider - Flow Gallery</a></li>
                        <li><a class="dropdown-item" href="slider9.html">Revolution Slider - Video Gallery</a></li>
                        <li><a class="dropdown-item" href="slider10.html">Revolution Slider - Filmstrip Effect</a></li>
                        <li><a class="dropdown-item" href="slider11.html">Revolution Slider - Typewriter Effect</a></li>
                        <li><a class="dropdown-item" href="slider12.html">Revolution Slider - Split Slider</a></li>
                        <li><a class="dropdown-item" href="slider13.html">Image Comparison Slider</a></li>
                        <li><a class="dropdown-item" href="slider14.html">Swiper Basic Slider</a></li>
                        <li><a class="dropdown-item" href="slider15.html">Swiper Blog Slider</a></li>
                        <li><a class="dropdown-item" href="slider16.html">Swiper Portfolio Carousel</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Footer</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="footer.html">Centered Footer</a></li>
                        <li><a class="dropdown-item" href="footer2.html">Simple Footer</a></li>
                        <li><a class="dropdown-item" href="footer3.html">Detailed Footer</a></li>
                        <li><a class="dropdown-item" href="footer4.html">Widget Footer</a></li>
                        <li><a class="dropdown-item" href="footer5.html">Minimalist Footer</a></li>
                        <li><a class="dropdown-item" href="footer6.html">Reveal Footer</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Fonts</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="font1.html">Muli + Montserrat</a></li>
                        <li><a class="dropdown-item" href="font2.html">EB Garamond</a></li>
                        <li><a class="dropdown-item" href="font3.html">Roboto Slab + Roboto Sans</a></li>
                        <li><a class="dropdown-item" href="font4.html">Overpass</a></li>
                        <li><a class="dropdown-item" href="font5.html">Vidaloka + Muli</a></li>
                        <li><a class="dropdown-item" href="font6.html">IBM Plex Sans Condensed</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Colors</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="color1.html">Aqua</a></li>
                        <li><a class="dropdown-item" href="color2.html">Blue</a></li>
                        <li><a class="dropdown-item" href="color3.html">Brown</a></li>
                        <li><a class="dropdown-item" href="color4.html">Forest</a></li>
                        <li><a class="dropdown-item" href="color5.html">Green</a></li>
                        <li><a class="dropdown-item" href="color6.html">Ice</a></li>
                        <li><a class="dropdown-item" href="color7.html">Navy</a></li>
                        <li><a class="dropdown-item" href="color8.html">Oasis</a></li>
                        <li><a class="dropdown-item" href="color9.html">Orange</a></li>
                        <li><a class="dropdown-item" href="color10.html">Pink</a></li>
                        <li><a class="dropdown-item" href="color11.html">Purple</a></li>
                        <li><a class="dropdown-item" href="color12.html">Red</a></li>
                        <li><a class="dropdown-item" href="color13.html">Salmon</a></li>
                        <li><a class="dropdown-item" href="color14.html">Sky</a></li>
                        <li><a class="dropdown-item" href="color15.html">Teal</a></li>
                        <li><a class="dropdown-item" href="color16.html">Yellow</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="dropdown-item" href="box-layout.html">Box Layout</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Portfolio</a>
                  <ul class="dropdown-menu dropdown-menu-left">
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Grid Portfolio</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="portfolio.html">Classic Grid</a></li>
                        <li><a class="dropdown-item" href="portfolio2.html">Fullscreen Grid</a></li>
                        <li><a class="dropdown-item" href="portfolio3.html">3 Columns with Detail</a></li>
                        <li><a class="dropdown-item" href="portfolio4.html">2 Columns with Detail</a></li>
                        <li><a class="dropdown-item" href="portfolio5.html">Classic Grid with Caption</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Masonry Portfolio</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="portfolio6.html">3 Columns Masonry</a></li>
                        <li><a class="dropdown-item" href="portfolio7.html">2 Columns Masonry</a></li>
                        <li><a class="dropdown-item" href="portfolio8.html">Fullscren Masonry</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Justified Portfolio</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="portfolio9.html">Classic Justified</a></li>
                        <li><a class="dropdown-item" href="portfolio10.html">Fullscreen Justified</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Mosaic Portfolio</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="portfolio11.html">Classic Mosaic</a></li>
                        <li><a class="dropdown-item" href="portfolio12.html">Fullscreen Mosaic</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Modal Portfolio</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="portfolio13.html">Single Column with Modal</a></li>
                        <li><a class="dropdown-item" href="portfolio14.html">Fullscreen Grid with Modal</a></li>
                        <li><a class="dropdown-item" href="portfolio15.html">Parallax Portfolio with Modal</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Slide Portfolio</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="portfolio16.html">2 Column Grid with Slide</a></li>
                        <li><a class="dropdown-item" href="portfolio17.html">Card Grid with Slide</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Carousel Portfolio</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="portfolio18.html">Fullpage Carousel</a></li>
                        <li><a class="dropdown-item" href="portfolio19.html">Fullpage + Autowidth Carousel</a></li>
                        <li><a class="dropdown-item" href="portfolio20.html">Filtered Carousel</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="dropdown-item" href="portfolio21.html">Videocase</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Portfolio Posts</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="portfolio-post.html">Post with Story</a></li>
                        <li><a class="dropdown-item" href="portfolio-post2.html">Post with Multiplte Images</a></li>
                        <li><a class="dropdown-item" href="portfolio-post3.html">Post with Image Grid</a></li>
                        <li><a class="dropdown-item" href="portfolio-post4.html">Post with Carousel</a></li>
                        <li><a class="dropdown-item" href="portfolio-post5.html">Post with Thumbnail Slider</a></li>
                        <li><a class="dropdown-item" href="portfolio-post6.html">Post with Simple Slider</a></li>
                        <li><a class="dropdown-item" href="portfolio-post7.html">Post with Masonry Gallery</a></li>
                        <li><a class="dropdown-item" href="portfolio-post8.html">Post with Justified Gallery</a></li>
                        <li><a class="dropdown-item" href="portfolio-post9.html">Post with Comparison Slider</a></li>
                        <li><a class="dropdown-item" href="portfolio-post10.html">Post with Video</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Blog</a>
                  <ul class="dropdown-menu dropdown-menu-left">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Newspaper Grid View</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog.html">Newspaper Grid No Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog2.html">Newspaper Grid with Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog3.html">Newspaper Grid with Left Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Grid View</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog4.html">Grid View No Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog5.html">Grid View with Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog6.html">Grid View with Left Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Masonry Grid View</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog7.html">Masonry Grid View No Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog8.html">Masonry Grid View with Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog9.html">Masonry Grid View with Left Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Image Grid View</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog10.html">Image Grid View No Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog11.html">Image Grid View with Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog12.html">Image Grid View with Left Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">List View</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog13.html">List View No Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog14.html">List View with Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog15.html">List View with Left Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Classic View</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog16.html">Classic View No Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog17.html">Classic View with Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog18.html">Classic View with Left Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Blog Post</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog-post.html">Blog Post with Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog-post2.html">Blog Post with Left Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog-post3.html">Blog Post No Sidebar</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#">Pages</a>
                  <ul class="dropdown-menu dropdown-menu-left">
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">About</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="about.html">About 1</a></li>
                        <li><a class="dropdown-item" href="about2.html">About 2</a></li>
                        <li><a class="dropdown-item" href="about3.html">About 3</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Services</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="services.html">Services 1</a></li>
                        <li><a class="dropdown-item" href="services2.html">Services 2</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Shop</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="shop.html">Shop with 4 Columns</a></li>
                        <li><a class="dropdown-item" href="shop2.html">Shop with 3 Columns</a></li>
                        <li><a class="dropdown-item" href="shop3.html">Shop with Sidbear</a></li>
                        <li><a class="dropdown-item" href="shop4.html">Shop with Left Sidbear</a></li>
                        <li><a class="dropdown-item" href="shop-product.html">Product Page</a></li>
                        <li><a class="dropdown-item" href="shop-cart.html">Shopping Cart</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-item dropdown-toggle" href="#">Contact</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="contact.html">Contact 1</a></li>
                        <li><a class="dropdown-item" href="contact2.html">Contact 2</a></li>
                        <li><a class="dropdown-item" href="contact3.html">Contact 3</a></li>
                        <li><a class="dropdown-item" href="contact4.html">Contact 4</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="dropdown-item" href="page-loading.html">Page Loading</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Elements</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="mega-menu-content">
                      <div class="row">
                        <div class="col-lg-3">
                          <ul class="icon-list">
                            <li><a href="accordion.html"><i class="fa fa-bars"></i>Accordion</a></li>
                            <li><a href="alerts.html"><i class="fa fa-exclamation-circle"></i>Alerts</a></li>
                            <li><a href="animated-text.html"><i class="fa fa-align-left"></i>Animated Text</a></li>
                            <li><a href="blockquote.html"><i class="fa fa-quote-left"></i>Blockquote</a></li>
                            <li><a href="buttons-badges.html"><i class="fa fa-tags"></i>Buttons & Badges</a></li>
                            <li><a href="carousel.html"><i class="fa fa-pencil-square-o"></i>Carousel</a></li>
                            <li><a href="clients.html"><i class="fa fa-user"></i>Clients</a></li>
                            <li><a href="countdown.html"><i class="fa fa-clock-o"></i>Countdown</a></li>
                            <li><a href="counter.html"><i class="fa fa-circle-o-notch"></i>Counter</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                        <div class="col-lg-3">
                          <ul class="icon-list">
                            <li><a href="dividers.html"><i class="fa fa-minus"></i>Dividers</a></li>
                            <li><a href="dropcap.html"><i class="fa fa-adn"></i>Dropcap</a></li>
                            <li><a href="forms.html"><i class="fa fa-envelope"></i>Forms</a></li>
                            <li><a href="icon-solid.html"><i class="fa fa-heart"></i>Icons - Solid</a></li>
                            <li><a href="icon-line.html"><i class="fa fa-heart-o"></i>Icons - Line</a></li>
                            <li><a href="hover.html"><i class="fa fa-plus"></i>Image Hover</a></li>
                            <li><a href="lightbox.html"><i class="fa fa-expand"></i>Lightbox</a></li>
                            <li><a href="lists.html"><i class="fa fa-list"></i>Lists</a></li>
                            <li><a href="list-group.html"><i class="fa fa-list-alt"></i>List Group</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                        <div class="col-lg-3">
                          <ul class="icon-list">
                            <li><a href="player.html"><i class="fa fa-youtube-play"></i>Media Player</a></li>
                            <li><a href="pagination.html"><i class="fa fa-ellipsis-h"></i>Pagination</a></li>
                            <li><a href="pricing.html"><i class="fa fa-dollar"></i>Pricing Tables</a></li>
                            <li><a href="process.html"><i class="fa fa-signal"></i>Process Steps</a></li>
                            <li><a href="progressbar.html"><i class="fa fa-bar-chart"></i>Progress Bar</a></li>
                            <li><a href="animations.html"><i class="fa fa-mouse-pointer"></i>Scroll Animations</a></li>
                            <li><a href="services-icon.html"><i class="fa fa-gear"></i>Services - Icon</a></li>
                            <li><a href="services-image.html"><i class="fa fa-image"></i>Services - Image</a></li>
                            <li><a href="feed-flickr.html"><i class="fa fa-flickr"></i>Social Feed - Flickr</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                        <div class="col-lg-3">
                          <ul class="icon-list">
                            <li><a href="feed-instagram.html"><i class="fa fa-instagram"></i>Social Feed - Instagram</a></li>
                            <li><a href="social-icons.html"><i class="fa fa-share-alt"></i>Social Icons</a></li>
                            <li><a href="tables.html"><i class="fa fa-table"></i>Tables</a></li>
                            <li><a href="tabs.html"><i class="fa fa-window-restore"></i>Tabs</a></li>
                            <li><a href="team.html"><i class="fa fa-users"></i>Team</a></li>
                            <li><a href="testimonials.html"><i class="fa fa-comments"></i>Testimonials</a></li>
                            <li><a href="tooltip-popover.html"><i class="fa fa-external-link-square"></i>Tooltip & Popover</a></li>
                            <li><a href="typography.html"><i class="fa fa-font"></i>Typography</a></li>
                            <li><a href="wrappers.html"><i class="fa fa-code"></i>Wrappers</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                      </div>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="navbar-divider"></div>
              <ul class="social social-mute social-s">
                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.container -->
        </nav>
        <!-- /.navbar -->

        <?= $content ?>

        <footer class="dark-wrapper inverse-text">
          <div class="sub-footer">
            <div class="container inner text-center"> <img src="#" srcset="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/logo-light.png 1x, <?=Yii::getAlias('@web')?>/themes/brailie/style/images/logo-light@2x.png 2x" alt="" />
              <div class="space25"></div>
              <p>© 2018 Brailie. All rights reserved. Theme by elemis.</p>
              <div class="space30"></div>
              <ul class="social social-bg social-s">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
            <!-- /.container -->
          </div>
          <!-- /.sub-footer -->
        </footer>
        <!-- footer /.dark-wrapper -->

    </div>

<?php /* THIS IS ORIGINAL CODES FOR YII 2 - REFER TO HERE ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => Yii::t('app', Yii::$app->name),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top',
                ],
            ]);

            // everyone can see Home page
            $menuItems[] = ['label' => Yii::t('app', 'Home'), 'url' => ['/site/index']];

            // we do not need to display Article/index, About and Contact pages to editor+ roles
            if (!Yii::$app->user->can('editor'))
            {
                $menuItems[] = ['label' => Yii::t('app', 'Articles'), 'url' => ['/article/index']];
                $menuItems[] = ['label' => Yii::t('app', 'About'), 'url' => ['/site/about']];
                $menuItems[] = ['label' => Yii::t('app', 'Contact'), 'url' => ['/site/contact']];
            }

            // display Article admin page to editor+ roles
            if (Yii::$app->user->can('editor'))
            {
                $menuItems[] = ['label' => Yii::t('app', 'Articles'), 'url' => ['/article/admin']];
            }

            // display Signup and Login pages to guests of the site
            if (Yii::$app->user->isGuest)
            {
                $menuItems[] = ['label' => Yii::t('app', 'Signup'), 'url' => ['/site/signup']];
                $menuItems[] = ['label' => Yii::t('app', 'Login'), 'url' => ['/site/login']];
            }
            // display Logout to all logged in users
            else
            {
                $menuItems[] = [
                    'label' => Yii::t('app', 'Logout'). ' (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; <?= Yii::t('app', Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php THIS IS ORIGINAL CODES FOR YII 2 - REFER TO HERE */ ?>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
