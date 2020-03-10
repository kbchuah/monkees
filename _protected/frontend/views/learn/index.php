<?php
use yii\web\View;

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name) . ' | ' . Yii::t('app', 'Learn With Us');

$this->registerJs(
    "
    (function($) {

    	$(document).ready(function() {
    		setupFade();
    		setupClickToScroll();
    		setupPostAnimation();
    		setupScrollToTop();
         enableScrollAbortion();

    		// Trigger window.scroll, this will initiate some of the scripts
    		$(window).scroll();
      });


      // Allow user to cancel scroll animation by manually scrolling
      function enableScrollAbortion() {
        var viewport = $('html, body');
        viewport.on('scroll mousedown DOMMouseScroll mousewheel keyup', function(e) {
            if ( e.which > 0 || e.type === 'mousedown' || e.type === 'mousewheel') {
                 viewport.stop();
            }
        });
      }

    	function setupScrollToTop() {
    		var scrollSpeed = 750;
    		$('.trigger-scroll-to-top').click(function(e) {
    			e.preventDefault();
    			$('html, body').animate({
    				scrollTop: 0
    			}, scrollSpeed);
    		});
    	}


    	function setupPostAnimation() {
    		var posts = $('.post-wrapper .post');
    		$(window).on('scroll resize', function() {

    			var currScroll = $(window).scrollTop() > $(document).scrollTop() ? $(window).scrollTop() : $(document).scrollTop(),
    				windowHeight = $(window).height(), // Needs to be here because window can resize
    				overScroll = Math.ceil(windowHeight*.20),
    				treshhold = (currScroll + windowHeight) - overScroll;

    			posts.each(function() {

    				var post = $(this),
    					postScroll = post.offset().top

    				if(postScroll > treshhold) {
    					post.addClass('hidden');
    				} else {
    					post.removeClass('hidden');
    				}

    			});

    		});
    	}

    	function setupFade() {

    		var posts = $('.post-wrapper .post').reverse(),
    			stemWrapper = $('.stem-wrapper'),
    			halfScreen = $(window).height() / 2;

    		$(window).on('scroll resize', function() {

    			delay(function() {

    				var currScroll = $(window).scrollTop() > $(document).scrollTop() ? $(window).scrollTop() : $(document).scrollTop(),
    					scrollSplit = currScroll + halfScreen;

    				posts.removeClass('active').each(function() {

    					var post = $(this),
    						postOffset = post.offset().top;

    					if(scrollSplit > postOffset) {

    						// Add active class to fade in
    						post.addClass('active')

    						// Get post color
    						var color = post.data('stem-color') ? post.data('stem-color') : null,
    							allColors = 'color-green color-yellow color-white'

    						stemWrapper.removeClass(allColors);

    						if(color !== null) {
    							stemWrapper.addClass('color-' + color);
    						}

    						return false;
    					}

    				});
    			}, 20);

    		});

    	}


    	function setupClickToScroll(post) {

    		var scrollSpeed = 750;

    		$('.post-wrapper .post .stem-overlay .icon').click(function(e) {
    			e.preventDefault();

    			var icon = $(this),
    				post = icon.closest('.post'),
    				postTopOffset = post.offset().top,
    				postHeight = post.height(),
    				halfScreen = $(window).height() / 2,
    				scrollTo = postTopOffset - halfScreen + (postHeight/2);

    			$('html, body').animate({
    				scrollTop: scrollTo
    			}, scrollSpeed);
    		});

    	}

    })(jQuery);




    /*==========  Helpers  ==========*/


    // Timeout function
    var delay = (function(){
    	var timer = 0;
    	return function(callback, ms){
    		clearTimeout (timer);
    		timer = setTimeout(callback, ms);
    	};
    })();

    $.fn.reverse = function() {
        return this.pushStack(this.get().reverse(), arguments);
    };
    ",
    View::POS_READY
);
?>

<?php /*
<div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-bg4.jpg">
  <div class="container inner pt-250 pb-250 text-center">
    <h1 class="heading">Ready to dive in?</h1>
    <p class="lead larger">Explore our list of available courses below.<br>
      We have everything from beginner to advanced and specialty courses
    </p>
    <div class="space10"></div>
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->
*/ ?>





<div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-bg4.jpg">
  <div class="container inner pt-250 pb-250 text-center">





<div class="stem-wrapper">
	<div class="stem"></div>
	<div class="stem-background"></div>
</div>

<?php /*
<header class="section header">
	<div class="section-inner">

		<div class="master-head">
			<h1 class="page-title">Redesign Method</h1>
			<p class="page-description">Our Redesign was Data-driven. Our design concept are a result of data generated from the following sources:</p>
		</div>

	</div> <!-- section-inner -->
</header> <!-- header -->
*/ ?>

<div class="section main-content">
	<div class="section-inner">

		<div class="stem-padding"></div>

		<div class="post-wrapper">

			<article class="post bitbucket-icon">
				<div class="stem-overlay">
					<div class="icon"></div>
					<div class="stem-mask"></div>
				</div>

				<div class="post-content">
					<h2 class="post-title">Surveys</h2>
					<div class="entry-content">
						<p>We had 10 current Phd students respond to our survey with a little nudge from the Phd co-ordinator.</p>
					</div>
				</div>
			</article>

			<article class="post m-icon" data-stem-color="green">
				<div class="stem-overlay">
					<div class="icon"></div>
					<div class="stem-mask"></div>
				</div>

				<div class="post-content">
					<h2 class="post-title">Interviews</h2>
					<div class="entry-content">
						<p>We interviewed two current Phd students at different levels in the program. One student had been in the program for the last 8 years and was about to complete his/her dissertation. The other student had been in the program for a year and was planning on trasfering out of the program. We also interviewed the program director and co-ordinator.</p>
					</div>
				</div>
			</article>

			<article class="post music-icon" data-stem-color="yellow">
				<div class="stem-overlay">
					<div class="icon"></div>
					<div class="stem-mask"></div>
				</div>

				<div class="post-content">
					<h2 class="post-title">Card Sorting exercise</h2>
					<div class="entry-content">
						<p>We conducted card sorting amongst ourselves and then again with three Phd students.</p>
					</div>
				</div>
			</article>

			<article class="post twitter-icon" data-stem-color="white">
				<div class="stem-overlay">
					<div class="icon"></div>
					<div class="stem-mask"></div>
				</div>

				<div class="post-content">
					<h2 class="post-title">Google Analytics</h2>
					<div class="entry-content">
						<p>We looked at data generated from google analytics dashboard. Data such as geolocation of people who visited, pages visited, time spent and how users found the existing phd website was analysed. </p>
					</div>
				</div>
			</article>

			<article class="post bitbucket-icon">
				<div class="stem-overlay">
					<div class="icon"></div>
					<div class="stem-mask"></div>
				</div>

				<div class="post-content">
					<h2 class="post-title">Cognitive Walkthrough</h2>
					<div class="entry-content">
						<p>We conducted a cognitive walkthrough with 2 students in the master's program to see if the current website was navigatable. We chose partcipants who had never used the website before.We wanted to study their information seeking behaviour.</p>
					</div>
				</div>
			</article>

			<article class="post music-icon" data-stem-color="yellow">
				<div class="stem-overlay">
					<div class="icon"></div>
					<div class="stem-mask"></div>
				</div>

				<div class="post-content">
					<h2 class="post-title">Content Available</h2>
					<div class="entry-content">
						<p>We looked at the content on the current website and also everything that was available in the Phd handbook. We also looked and other on-campus sites like the graduate school website, the international students website and the course registeration website to find all the content that a current or prospective student could access.</p>
					</div>
				</div>
			</article>

		</div> <!-- post-wrapper -->

		<!-- <div class="single-stem-icon scroll-to-top trigger-scroll-to-top"></div> -->

	</div> <!-- section-inner -->
</div> <!-- main-content -->


</div>
<!-- /.container -->
</div>
<!-- /.wrapper -->



<?php /*


<div class="wrapper gray-wrapper">
  <div class="container inner">
    <h2 class="section-title section-title-upper text-center">Beginners Courses</h2>
    <p class="lead larger text-center">Kickstart your adventure with the courses below!</p>
    <div class="space30"></div>
    <div id="slide-portfolio">
      <div class="tabs-wrapper filtered">
        <div class="space10"></div>
        <div class="tab-content">
          <div class="tab-pane fade pb-0 show active" id="tab1-1">
            <div class="row no-gutter block-wrapper arrowed">
              <div class="col-md-6 block">
                <figure><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-bubble-maker.jpg" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col-md-6 block">
                <div class="box bg-white h-100 d-flex flex-column justify-content-center">
                  <h3 class="text-uppercase text-center">Bubble Maker</h3>
                  <p class="mb-30 text-center">A great way to introduce children to scuba diving in a safe, fun and relaxed environment. Join with friends or family in this unique and exciting experience under the direct care and supervision of PADI Instructors.</p>
                  <ul class="unordered-list list-blue">
                    <li>Minimum age: 8 years old</li>
                    <li>Maximum depth: 2 meters / 6 feet</li>
                    <li>Location: Pool only</li>
                    <li>Schedule: 2 hrs</li>
                  </ul>
                </div>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
            <div class="row no-gutter block-wrapper arrowed">
              <div class="col-md-6 block order-md-2">
                <figure><img src="style/images/art/sg10.jpg" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col-md-6 block text-center">
                <div class="box bg-white h-100 d-flex flex-column justify-content-center">
                  <h3 class="text-uppercase">Enchanting Green</h3>
                  <p class="mb-30">Vestibulum ligula porta felis euismod semper. Duis mollis commodo luctus, ac commodo porttitor nibh.</p>
                  <div class="d-inline-block"><a href="#0" data-type="slide-portfolio-item-2" class="btn btn-s btn-full-rounded btn-icon-right slide-portfolio-item">See Gallery<i class="fa fa-angle-double-right"></i></a></div>
                </div>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
            <div class="row no-gutter block-wrapper arrowed">
              <div class="col-md-6 block">
                <figure><img src="style/images/art/sg11.jpg" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col-md-6 block text-center">
                <div class="box bg-white h-100 d-flex flex-column justify-content-center">
                  <h3 class="text-uppercase">Road Ahead</h3>
                  <p class="mb-30">Vestibulum ligula porta felis euismod semper. Duis mollis commodo luctus, ac commodo porttitor nibh.</p>
                  <div class="d-inline-block"><a href="#0" data-type="slide-portfolio-item-3" class="btn btn-s btn-full-rounded btn-icon-right slide-portfolio-item">See Gallery<i class="fa fa-angle-double-right"></i></a></div>
                </div>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
            <div class="row no-gutter block-wrapper arrowed">
              <div class="col-md-6 block order-md-2">
                <figure><img src="style/images/art/sg12.jpg" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col-md-6 block text-center">
                <div class="box bg-white h-100 d-flex flex-column justify-content-center">
                  <h3 class="text-uppercase">Surreal Shots</h3>
                  <p class="mb-30">Vestibulum ligula porta felis euismod semper. Duis mollis commodo luctus, ac commodo porttitor nibh.</p>
                  <div class="d-inline-block"><a href="#0" data-type="slide-portfolio-item-4" class="btn btn-s btn-full-rounded btn-icon-right slide-portfolio-item">See Gallery<i class="fa fa-angle-double-right"></i></a></div>
                </div>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.tabs-wrapper -->
    </div>
    <!--/#slide-portfolio -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->







<div class="wrapper light-wrapper">
  <div class="container inner">
    <!-- <h2 class="section-title mb-40 text-center">Why scuba dive?</h2> -->
    <h2 class="section-title mb-40 text-center">Why scuba dive? <span class="typer" data-delay="100" data-delim=":" data-words="Why not?"></span><span class="cursor" data-owner="typer"></span> </h2>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <p>
          <span class="dropcap color-sky">W</span>hy not?
          That's the usual answer we would give when someone asks us why we do what we do. There are many benefits to scuba diving. One, it makes you happy, by improving your mental and emotional well-being & helps relieve stress. Secondly, who doesn't like the beach? Imagine being surrounded by crystal clear sea, the sun kissing your skin & sand between your toes. Being a diver, you will travel and explore places you've never heard of, and return home full of wonderful stories & adventures to share. Marvel at the beauty of nature, enjoy the peace & quiet the underwater world brings. Make new friends, expand your network & share your stories and experiences.
        </p>
        <p class="text-center">
          <a href="#" class="btn btn-full-rounded btn-sky">Find Out More</a>
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
          Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
        </p>
        <div class="space10"></div>
        <a href="#" class="btn btn-full-rounded btn-sky">More about Tioman</a> </div>
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
    <a href="https://www.instagram.com/urbanshots/" target="_blank" class="btn btn-full">Follow us @ Instagram</a> </div>
  <!-- /.instagram-wrapper -->
</div>
<!-- /.wrapper -->

*/ ?>
