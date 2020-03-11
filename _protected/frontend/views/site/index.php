<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name);

?>

<div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-bg1.jpg">
  <div class="container inner pt-250 pb-250 text-center">
    <h1 class="heading">Looking for a new adventure?</h1>
    <p class="lead larger">Join us and discover a whole new world</p>
    <div class="space10"></div>
    <ul class="social social-mute social-m">
      <li><a href="https://www.instagram.com/marinemonkees/"><i class="fa fa-instagram"></i></a></li>
      <li><a href="https://www.facebook.com/MMonkees/"><i class="fa fa-facebook-f"></i></a></li>
      <li><a href="https://www.youtube.com/channel/UCP0qmYNDZ4yrVG8IPAH5-VA"><i class="fa fa-youtube"></i></a></li>
    </ul>
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<div class="wrapper light-wrapper">
  <div class="container inner">
    <!-- <h2 class="section-title mb-40 text-center">Why scuba dive?</h2> -->
    <h2 class="section-title mb-40 text-center">Why scuba dive? <span class="typer" data-delay="100" data-delim=":" data-words="Why not?:Escape.:Explore.:Experience."></span><span class="cursor" data-owner="typer"></span> </h2>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <p>
          <span class="dropcap color-sky">W</span>hy not?
          That's the usual answer we would give when someone asks us why we do what we do. There are many benefits to scuba diving. One, it makes you happy, by improving your mental and emotional well-being & helps relieve stress. Secondly, who doesn't like the beach? Imagine being surrounded by crystal clear sea, the sun kissing your skin & sand between your toes. Being a diver, you will travel and explore places you've never heard of, and return home full of wonderful stories & adventures to share. Marvel at the beauty of nature, enjoy the peace & quiet the underwater world brings.
        </p>
        <p>
          And the best part of it all, you will definitely make new friends, expand your network & share your stories and experiences. And that's how we (Marine Monkees) started. Have fun exploring our site, or if you need more information feel free to contact us anytime!
        </p>
        <p class="text-center">
          <a href="<?=Url::toRoute(['about/'])?>" class="btn btn-full-rounded btn-sky">About Us</a>
        </p>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<div class="wrapper dark-wrapper inverse-text">
  <div class="container inner">
    <div class="row">
      <div class="col-md-8">
        <div data-aos="fade" class="light-gallery">
          <figure class="overlay overlay1 mb-10"> <a href="https://youtu.be/f8wO3d5hHq0"><span class="bg"></span><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tioman-aerial-shot.jpg" alt=""></a>
            <figcaption class="d-flex">
              <div class="align-self-center mx-auto">
                <h5 class="mb-0">Check our humble home out!</h5>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
      <!--/column -->
      <div class="col-md-4 pl-md-5">
        <h2 class="section-title">Brief Introduction About Tioman</h2>
        <p>
          <span class="dropcap color-sky">L</span>ocated about 2.5 hours off the east coast of Peninsula Malaysia, it was definitely love at first sight. On the surface, the densely forested island is very well kept and sparsely inhabited. Beneath, it is surrounded by healthy coral reefs making it one of the best diving spots in Malaysia. We fell in love with this place and decided to make it our home.
        </p>
        <div class="space10"></div>
        <a href="<?=Url::toRoute(['tioman/'])?>" class="btn btn-full-rounded btn-sky">More about Tioman</a> </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-bg2.jpg">
  <div class="container inner pt-120 pb-120">
    <h2 class="section-title mb-40 text-center">Why Us?</h2>
    <div class="row gutter-50 text-center">
      <div class="col-md-4"> <span class="icon icon-bg bg-dark fs-34 mb-20"><i class="fa fa-thumbs-up"></i></span>
        <h5>Excellent Service</h5>
        <p>Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo odio dapibus ac facilisis in egestas.</p>
      </div>
      <!--/column -->
      <div class="col-md-4"> <span class="icon icon-bg bg-default fs-34 mb-20"><i class="fa fa-heartbeat"></i></span>
        <h5>Safety in Mind</h5>
        <p>Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo odio dapibus ac facilisis in egestas.</p>
      </div>
      <!--/column -->
      <div class="col-md-4"> <span class="icon icon-bg bg-gradient fs-34 mb-20"><i class="fa fa-mortar-board"></i></span>
        <h5>Outstanding Education</h5>
        <p>Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo odio dapibus ac facilisis in egestas.</p>
      </div>
      <!--/column -->
    </div>
    <!-- /.row -->
    <div class="divider-icon"><i class="fa fa-sign-language-int"></i></div>
    <div class="row counter">
      <div class="col-md-3 text-center">
        <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-cafe_open-shop"></i> </div>
        <h3 class="value">12</h3>
        <p class="text-uppercase color-dark">Years of Experience</p>
      </div>
      <!--/column -->
      <div class="col-md-3 text-center">
        <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-badges_post-card"></i> </div>
        <h3 class="value">388</h3>
        <p class="text-uppercase color-dark">Certifications</p>
      </div>
      <!--/column -->
      <div class="col-md-3 text-center">
        <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-badges_water-symbol"></i> </div>
        <h3 class="value">784</h3>
        <p class="text-uppercase color-dark">Total Dives</p>
      </div>
      <!--/column -->
      <div class="col-md-3 text-center">
        <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-sports_medal-2"></i> </div>
        <h3 class="value">12</h3>
        <p class="text-uppercase color-dark">Awards Rewarded</p>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
    <!-- <p class="text-center">
      <a href="#" class="btn btn-full-rounded btn-sky">Full Rounded Button</a>
    </p> -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<div class="wrapper light-wrapper">
  <div class="container inner">
    <h2 class="section-title mb-40 text-center">Our Services</h2>
    <div class="tiles">
      <div class="items row">
        <div class="item col-md-4">
          <figure class="overlay overlay4"><span><span class="bg"></span><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-courses.jpg" alt=""></span>
            <figcaption class="d-flex">
              <div class="align-self-end mx-auto">
                <h4 class="mb-0">Courses</h4>
              </div>
            </figcaption>
          </figure>
        </div>
        <!--/.item -->
        <div class="item col-md-4">
          <figure class="overlay overlay4"><span><span class="bg"></span><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-dive-trips.jpg" alt=""></span>
            <figcaption class="d-flex">
              <div class="align-self-end mx-auto">
                <h4 class="mb-0">Dive Trips</h4>
              </div>
            </figcaption>
          </figure>
        </div>
        <!--/.item -->
        <div class="item col-md-4">
          <figure class="overlay overlay4"><span><span class="bg"></span><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-career.jpg" alt=""></span>
            <figcaption class="d-flex">
              <div class="align-self-end mx-auto">
                <h4 class="mb-0">Career</h4>
              </div>
            </figcaption>
          </figure>
        </div>
        <!--/.item -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.tiles -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<div class="wrapper gray-wrapper">
  <div class="container inner">
    <h2 class="section-title mb-40 text-center">Single Testimonial Carousel - Alternative</h2>
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="swiper-container-wrapper basic-slider">
          <div class="swiper-container text-center">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="row gutter-50 d-flex">
                  <div class="col-md-6">
                    <figure><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/te1.jpg" alt="" /></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-6 align-self-center">
                    <blockquote class="icon icon-top">
                      <p>Consectetur adipiscing elit. Duis mollis, est non commodo luctus gestas eget quam integer. Curabitur blandit tempus rutrum faucibus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                      <footer class="blockquote-footer">Mildred & Austin</footer>
                    </blockquote>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!-- /.swiper-slide -->
              <div class="swiper-slide">
                <div class="row gutter-50 d-flex">
                  <div class="col-md-6">
                    <figure><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/te2.jpg" alt="" /></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-6 align-self-center">
                    <blockquote class="icon icon-top">
                      <p>Consectetur adipiscing elit. Duis mollis, est non commodo luctus gestas eget quam integer. Curabitur blandit tempus rutrum faucibus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                      <footer class="blockquote-footer">Diana & Wayne</footer>
                    </blockquote>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!-- /.swiper-slide -->
              <div class="swiper-slide">
                <div class="row gutter-50 d-flex">
                  <div class="col-md-6">
                    <figure><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/te3.jpg" alt="" /></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-6 align-self-center">
                    <blockquote class="icon icon-top">
                      <p>Consectetur adipiscing elit. Duis mollis, est non commodo luctus gestas eget quam integer. Curabitur blandit tempus rutrum faucibus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                      <footer class="blockquote-footer">Evelyn & John</footer>
                    </blockquote>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.swiper-container -->
          <div class="swiper-pagination gap-large"></div>
        </div>
        <!-- .swiper-container-wrapper -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<div class="wrapper light-wrapper">
  <div class="container inner">
    <div class="row">
      <div class="col-md-8">
        <h2 class="section-title">Get in Touch</h2>
        <p>Nullam quis risus eget urna mollis ornare vel eu leo. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat.</p>
        <div class="space10"></div>
        <div class="form-container">
          <form action="contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate="" data-vf-id="daf49148-9058-c47f-e922-9562d77936fd">
            <div class="row text-center">
              <div class="col-md-6 pr-10">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Your name" required="required">
                </div>
                <!--/.form-group -->
              </div>
              <!--/column -->
              <div class="col-md-6 pl-10">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Your e-mail" required="required">
                </div>
                <!--/.form-group -->
              </div>
              <!--/column -->
              <div class="col-md-6 pr-10">
                <div class="form-group">
                  <input type="tel" class="form-control" name="tel" placeholder="Phone">
                </div>
                <!--/.form-group -->
              </div>
              <!--/column -->
              <div class="col-md-6 pl-10">
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <!--/.form-group -->
              </div>
              <!--/column -->
              <div class="col-12">
                <textarea name="message" class="form-control" rows="3" placeholder="Type your message here..." required=""></textarea>
                <div class="space20"></div>
                <button type="submit" class="btn btn-full-rounded state-initial" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!" data-initial="" value="">Submit</button>
                <footer class="notification-box"></footer>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </form>
          <!--/.vanilla-form -->
        </div>
        <!--/.form-container -->
      </div>
      <!--/column -->
      <aside class="col-md-4 sidebar">
        <div class="sidebox widget">
          <h5 class="widget-title">Address</h5>
          <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur.</p>
          <ul class="icon-list">
            <li><i class="fa fa-map"></i>Moonshine St. 14/05 Light City</li>
            <li><i class="fa fa-envelope"></i><a href="mailto:first.last@email.com" class="nocolor">first.last@email.com</a></li>
            <li><i class="fa fa-phone-square"></i>+00 (123) 456 78 90 </li>
          </ul>
        </div>
        <!-- /.widget -->
      </aside>
      <!-- /column .sidebar -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<?php /*
<div class="wrapper gray-wrapper">
  <div class="container inner pb-40">
    <h2 class="section-title mb-0 text-center">Fullscreen Instagram Carousel</h2>
  </div>
  <!-- /.container -->
  <div class="instagram-wrapper">
    <div class="swiper-container-wrapper">
      <div class="swiper-container swiper-instagram2">
        <div id="instafeed4" class="swiper-wrapper"></div>
      </div>
      <!-- /.swiper-container -->
    </div>
    <!-- /.swiper-container-wrapper -->
    <a href="https://www.instagram.com/marinemonkees/" target="_blank" class="btn btn-full">Follow us @ Instagram</a> </div>
  <!-- /.instagram-wrapper -->
</div>
<!-- /.wrapper -->
*/ ?>


<?php /*


<div class="wrapper gray-wrapper">
  <div class="container inner">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="blog classic-view">
          <div class="post">
            <h2 class="section-title mb-40 text-center">Brief Introduction</h2>
            <figure class="mb-25"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tioman-aerial-shot.jpg" alt="" /></figure>
            <div class="post-content">
              <p>We are located in Tioman, <a href="#" class="hover">this is a link</a> </p>
              <div class="space10"></div>
              <blockquote class="icon icon-left">
                <p>Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                <footer class="blockquote-footer">Very important person</footer>
              </blockquote>
              <div class="space10"></div>
              <h3>Countless dive sites</h3>
              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <div class="space10"></div>
              <div class="tiles light-gallery">
                <div class="items row text-center">
                  <div class="item col-md-6">
                    <figure class="overlay overlay2"><a href="style/images/art/bp1-full.jpg"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tioman-aerial-shot.jpg" alt="" /></a></figure>
                  </div>
                  <!--/column -->
                  <div class="item col-md-6">
                    <figure class="overlay overlay2"><a href="style/images/art/bp2-full.jpg"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tioman-aerial-shot.jpg" alt="" /></a></figure>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!-- /.tiles -->
              <div class="clearfix"></div>
              <div class="space20"></div>
              <h3>More details</h3>
              <a href="#" class="hover">this is a link</a>
              <ul class="social social-mute social-s text-center">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
              <!-- /.social -->
            </div>
            <!-- /.post-content -->
          </div>

        </div>
        <!-- /.blog -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<div class="wrapper light-wrapper">
  <div class="container inner">
    <div class="row">
      <div class="col-md-8">
        <div data-aos="fade">
          <video class="js-player" poster="http://themes.iki-bir.com/media/v11.jpg" controls preload="none">
            <source src="http://themes.iki-bir.com/media/v11.mp4" type="video/mp4">
            <source src="http://themes.iki-bir.com/media/v11.webm" type="video/webm">
          </video>
        </div>
      </div>
      <!--/column -->
      <div class="col-md-4 pl-md-5">
        <h2 class="section-title">Marine Monkees</h2>
        <div class="meta larger">This is our home!</div>
        <div class="space10"></div>
        <a href="#" class="btn btn-full-rounded btn-sky">Check all videos</a> </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->






<div class="wrapper light-wrapper">
  <div class="container inner">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <h2 class="section-title mb-40 text-center">Some of My Works</h2>
        <div class="cocoen"> <img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/ba13.jpg" alt=""> <img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/ba14.jpg" alt=""> </div>
        <div class="space30"></div>
        <div class="cocoen"> <img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/ba15.jpg" alt=""> <img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/ba16.jpg" alt=""> </div>
        <div class="space30"></div>
        <div class="row">
          <div class="col-sm-6">
            <div class="cocoen"> <img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/ba17.jpg" alt=""> <img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/ba18.jpg" alt=""> </div>
          </div>
          <!--/column -->
          <div class="col-sm-6">
            <div class="cocoen"> <img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/ba19.jpg" alt=""> <img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/ba20.jpg" alt=""> </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<div class="wrapper gray-wrapper">
  <div class="container inner">
    <h2 class="section-title mb-40 text-center">My Process</h2>
    <div class="row gutter-60 gutter-md-30">
      <div class="col-md-6">
        <h2 class="sub-heading text-center text-md-right">Great design comes with understanding customer needs</h2>
      </div>
      <!-- /column -->
      <div class="col-md-6">
        <p class="lead text-center text-md-left">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Morbi leo risus.</p>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
    <div class="space50"></div>
    <div class="row gutter-50 process-wrapper line text-center">
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">01</span></span>
        <h5>Concept</h5>
        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
      </div>
      <!--/column -->
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">02</span></span>
        <h5>Prepare</h5>
        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
      </div>
      <!--/column -->
      <div class="space20 d-md-none clearfix"></div>
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">03</span></span>
        <h5>Retouch</h5>
        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
      </div>
      <!--/column -->
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">04</span></span>
        <h5>Finalize</h5>
        <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/bg4.jpg">
  <div class="container inner pt-120 pb-120">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="swiper-container-wrapper basic-slider">
          <div class="swiper-container text-center">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <blockquote class="icon icon-top larger">
                  <p>Consectetur adipiscing elit. Duis mollis, est non commodo luctus gestas eget quam integer. Curabitur blandit tempus rutrum faucibus.</p>
                  <footer class="blockquote-footer">Connor Gibson</footer>
                </blockquote>
              </div>
              <!-- /.swiper-slide -->
              <div class="swiper-slide">
                <blockquote class="icon icon-top larger">
                  <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Cras justo odio.</p>
                  <footer class="blockquote-footer">Coriss Ambady</footer>
                </blockquote>
              </div>
              <!-- /.swiper-slide -->
              <div class="swiper-slide">
                <blockquote class="icon icon-top larger">
                  <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis.</p>
                  <footer class="blockquote-footer">Barclay Widerski</footer>
                </blockquote>
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.swiper-container -->
          <div class="swiper-pagination gap-small"></div>
        </div>
        <!-- .swiper-container-wrapper -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<div class="wrapper light-wrapper">
  <div class="container inner">
    <h2 class="section-title text-center">Pricing</h2>
    <p class="lead text-center">Awesome deals with simple pricing model are here! We offer great prices,<br class="d-none d-xl-block" />
      premium products and quality service for your business.</p>
    <div class="space30"></div>
    <div class="row no-gutter">
      <div class="col-md-4">
        <div class="pricing panel">
          <div class="panel-heading">
            <div class="icon icon-color color-default fs-48"><i class="si-building_home"></i></div>
            <h4 class="panel-title color-dark">Individuals</h4>
            <div class="price color-dark"> <span class="price-currency">$</span><span class="price-value">35</span> <span class="price-duration">year</span></div>
          </div>
          <!--/.panel-heading -->
          <div class="panel-body">
            <table class="table">
              <tr>
                <td><strong>1</strong> Project </td>
              </tr>
              <tr>
                <td><strong>100K</strong> API Access </td>
              </tr>
              <tr>
                <td><strong>100MB</strong> Storage </td>
              </tr>
              <tr>
                <td> Custom <strong>Cloud</strong> Services </td>
              </tr>
              <tr>
                <td> Weekly <strong>Reports</strong></td>
              </tr>
              <tr>
                <td> 7/24 <strong>Support</strong></td>
              </tr>
            </table>
          </div>
          <!--/.panel-body -->
          <div class="panel-footer"> <a href="#" class="btn btn-full-rounded" role="button">Choose Plan</a></div>
        </div>
        <!--/.pricing -->
      </div>
      <!--/column -->
      <div class="col-md-4">
        <div class="pricing panel">
          <div class="panel-heading">
            <div class="icon icon-color color-default fs-48"><i class="si-building_small-shop"></i></div>
            <h4 class="panel-title color-dark">Small Team</h4>
            <div class="price color-dark"> <span class="price-currency">$</span><span class="price-value">45</span> <span class="price-duration">year</span></div>
          </div>
          <!--/.panel-heading -->
          <div class="panel-body">
            <table class="table">
              <tr>
                <td><strong>5</strong> Projects </td>
              </tr>
              <tr>
                <td><strong>100K</strong> API Access </td>
              </tr>
              <tr>
                <td><strong>200MB</strong> Storage </td>
              </tr>
              <tr>
                <td> Custom <strong>Cloud</strong> Services </td>
              </tr>
              <tr>
                <td> Weekly <strong>Reports</strong></td>
              </tr>
              <tr>
                <td> 7/24 <strong>Support</strong></td>
              </tr>
            </table>
          </div>
          <!--/.panel-body -->
          <div class="panel-footer"> <a href="#" class="btn btn-full-rounded" role="button">Choose Plan</a></div>
        </div>
        <!--/.pricing -->
      </div>
      <!--/column -->
      <div class="col-md-4">
        <div class="pricing panel">
          <div class="panel-heading">
            <div class="icon icon-color color-default fs-48"><i class="si-building_resident-block"></i></div>
            <h4 class="panel-title color-dark">Organization</h4>
            <div class="price color-dark"> <span class="price-currency">$</span><span class="price-value">55</span> <span class="price-duration">year</span></div>
          </div>
          <!--/.panel-heading -->
          <div class="panel-body">
            <table class="table">
              <tr>
                <td><strong>20</strong> Projects </td>
              </tr>
              <tr>
                <td><strong>300K</strong> API Access </td>
              </tr>
              <tr>
                <td><strong>500MB</strong> Storage </td>
              </tr>
              <tr>
                <td> Custom <strong>Cloud</strong> Services </td>
              </tr>
              <tr>
                <td> Weekly <strong>Reports</strong></td>
              </tr>
              <tr>
                <td> 7/24 <strong>Support</strong></td>
              </tr>
            </table>
          </div>
          <!--/.panel-body -->
          <div class="panel-footer"> <a href="#" class="btn btn-full-rounded" role="button">Choose Plan</a></div>
        </div>
        <!--/.pricing -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

*/ ?>
