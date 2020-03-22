<?php
use yii\helpers\Url;
?>

<div class="collapse navbar-collapse">
  <ul class="nav navbar-nav ml-auto">
    <li class="nav-item"><a class="nav-link" href="<?=Url::home()?>">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="<?=Url::toRoute(['about/'])?>">About</a></li>
    <li class="nav-item"><a class="nav-link" href="<?=Url::toRoute(['dive/'])?>">Dive</a></li>
    <li class="nav-item"><a class="nav-link" href="<?=Url::toRoute(['learn/'])?>">Learn</a></li>
    <li class="nav-item"><a class="nav-link" href="<?=Url::toRoute(['promotion/'])?>">Promotion</a></li>
    <li class="nav-item"><a class="nav-link" href="<?=Url::toRoute(['tioman/'])?>">Tioman</a></li>
    <li class="nav-item"><a class="nav-link" href="<?=Url::toRoute(['faq/'])?>">FAQ</a></li>
    <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#contact-us">Get In Touch</a></li>
  </ul>
  <!-- /.navbar-nav -->
  <div class="mr-20 d-none d-lg-block"></div>
  <div class="navbar-divider d-lg-none d-xl-none"></div>
  <ul class="social social-mute social-s">
    <li><a href="https://www.instagram.com/marinemonkees/"><i class="fa fa-instagram"></i></a></li>
    <li><a href="https://www.facebook.com/MMonkees/"><i class="fa fa-facebook-f"></i></a></li>
    <li><a href="https://www.youtube.com/channel/UCP0qmYNDZ4yrVG8IPAH5-VA"><i class="fa fa-youtube"></i></a></li>
  </ul>
</div>
<!-- /.navbar-collapse -->
