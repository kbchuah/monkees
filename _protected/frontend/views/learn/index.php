<?php
use yii\web\View;

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name) . ' | ' . Yii::t('app', 'Learn With Us');

?>

<div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-bg4.jpg">
  <div class="container inner pt-250 pb-150">
    <h1 class="heading text-center">Ready to dive in?</h1>
    <p class="lead larger text-center">
      We have everything from beginner to advanced levels and specialty courses.<br />
      Explore our list of available courses below.<br />
      <i class="si-arrows_double-arrow-down"></i>
    </p>
    <div class="space30"></div>

    <h2 class="section-title mb-40 text-center">Beginner? <span class="typer" data-delay="100" data-delim=":" data-words="Check out these options."></span><span class="cursor" data-owner="typer"></span> </h2>
    <div class="container-timeline">
       <div class="timeline-block timeline-block-right">
          <div class="marker"></div>
          <div class="timeline-content">
             <h3>Bubble Maker</h3>
             <p>A great way to introduce children to scuba diving in a safe, fun and relaxed environment. Join with friends or family in this unique and exciting experience under the direct care and supervision of PADI Instructors.</p>
             <ul class="icon-list list-green">
                <li><i class="fa fa-angle-right"></i>Minimum age: 8 years old</li>
                <li><i class="fa fa-angle-right"></i>Maximum depth: 2 meters / 6 feet</li>
                <li><i class="fa fa-angle-right"></i>Location: Pool only</li>
                <li><i class="fa fa-angle-right"></i>Schedule: 2 hrs</li>
             </ul>
          </div>
       </div>
       <div class="timeline-block timeline-block-left">
         <div class="marker"></div>
         <div class="timeline-content">
            <h3>Scuba Try Out <i class="si-ecommerce_star-favorites"></i><i class="si-ecommerce_star-favorites"></i></h3>
            <p>Have you ever wondered what it’s like to breathe underwater. If you want to find out but aren’t quite ready to take the plunge into a certification course, Scuba Try Out will let you try scuba at your own pace. While not an actual scuba certification, during the Scuba Try Out experience you’ll learn how to use scuba equipment in shallow water and get a quick and easy introduction to what it takes to explore the underwater world.</p>
            <ul class="icon-list list-green">
               <li><i class="fa fa-angle-right"></i>Minimum age: 10 years old</li>
               <li><i class="fa fa-angle-right"></i>Maximum depth (1st time): 6 meters / 19 feet</li>
               <li><i class="fa fa-angle-right"></i>Maximum depth (subsequent try outs): 12 meters / 40 feet</li>
               <li><i class="fa fa-angle-right"></i>Schedule: 2-3 hrs</li>
               <li><i class="fa fa-angle-right"></i>Price: RM 160</li>
            </ul>
         </div>
       </div>
    </div>

    <h2 class="section-title mb-40 text-center">Ready to get certified? <span class="typer" data-delay="100" data-delim=":" data-words="We have the right courses for you."></span><span class="cursor" data-owner="typer"></span> </h2>
    <div class="container-timeline">
       <div class="timeline-block timeline-block-right">
          <div class="marker"></div>
          <div class="timeline-content">
             <h3>Scuba Diver Course</h3>
             <p>Short on time but have the urge to become a certified diver? The PADI Scuba Diver certification might just be for you. This course requires less time than the PADI Open Water Diver course, covering only the basics in scuba diving, resulting in a limited certification. Recommended for those planning on diving with guides or with just too busy schedules.</p>
             <ul class="icon-list list-green">
                <li><i class="fa fa-angle-right"></i>Minimum age: 10 years old</li>
                <li><i class="fa fa-angle-right"></i>Maximum depth: 12 meters / 40 feet</li>
                <li><i class="fa fa-angle-right"></i>Schedule: 2 days</li>
                <li><i class="fa fa-angle-right"></i>Price: RM 860</li>
             </ul>
          </div>
       </div>
       <div class="timeline-block timeline-block-left">
         <div class="marker"></div>
         <div class="timeline-content">
            <h3 class="color-yellow">Open Water Diver Course <i class="si-ecommerce_star-favorites"></i><i class="si-ecommerce_star-favorites"></i><i class="si-ecommerce_star-favorites"></i></h3>
            <p>Start your diving journey by enrolling in the PADI Open Water Diver course. An entry level course that teaches you all about the mechanics behind diving but more importantly, opens a whole new world for you to explore and enjoy. The course includes basic theory, confined water training and finally open water dives. This course is a lot of fun and very exciting for first time divers.</p>
            <ul class="icon-list list-green">
               <li><i class="fa fa-angle-right"></i>Minimum age: 10 years old</li>
               <li><i class="fa fa-angle-right"></i>Maximum depth: 18 meters / 60 feet</li>
               <li><i class="fa fa-angle-right"></i>Schedule: 3-4 days</li>
               <li><i class="fa fa-angle-right"></i>Price: RM 1190</li>
            </ul>
         </div>
       </div>
    </div>

    <h2 class="section-title mb-40 text-center">Already certified? <span class="typer" data-delay="100" data-delim=":" data-words="Time to refresh your skills!:Sharpen & refine your skills!"></span><span class="cursor" data-owner="typer"></span> </h2>
    <div class="container-timeline">
       <div class="timeline-block timeline-block-right">
          <div class="marker"></div>
          <div class="timeline-content">
             <h3>Scuba Review</h3>
             <p>Has it been a while since you last dived? Feeling a little rusty? Have no fear, conduct a scuba review before your next fun dive or PADI course. Sharpen your skills and improve your confidence to ensure you enjoy your next dive to the fullest.</p>
             <ul class="icon-list list-green">
                <li><i class="fa fa-angle-right"></i>For certified divers</li>
                <li><i class="fa fa-angle-right"></i>Schedule: 2-3 hrs</li>
             </ul>
          </div>
       </div>
       <div class="timeline-block timeline-block-left">
         <div class="marker"></div>
         <div class="timeline-content">
            <h3>Adventure Diver Course <i class="si-ecommerce_star-favorites"></i></h3>
            <p>The PADI Adventure Diver course helps you get more out of diving by introducing you to new types of scuba diving adventures. It’s a great opportunity to work with your instructor to build your scuba diving skills and gain more confidence.</p>
            <ul class="icon-list list-green">
               <li><i class="fa fa-angle-right"></i>Minimum age: 12 years old (For sidemount adventure course, 15 years old)</li>
               <li><i class="fa fa-angle-right"></i>Schedule: 1 or 2 days</li>
               <li><i class="fa fa-angle-right"></i>Adventure dives : Deep, Wreck, Night, Underwater Navigation, Naturalist, Fish ID, Drift, Boat, Peak Performance Buoyancy, Search and Recovery</li>
            </ul>
         </div>
       </div>
       <div class="timeline-block timeline-block-right">
          <div class="marker"></div>
          <div class="timeline-content">
             <h3 class="color-yellow">Advanced Open Water Diver Course <i class="si-ecommerce_star-favorites"></i><i class="si-ecommerce_star-favorites"></i><i class="si-ecommerce_star-favorites"></i></h3>
             <p>Exploration, Excitement, Experiences – This is what the PADI Advanced Open Water Diver course is all about. You don’t have to be “advanced” to take it – it’s designed so you can go straight into it after the PADI Open Water Diver course.  The Advanced Open Water Diver course helps you increase your confidence, develop new skills, dive deeper, explore underwater wrecks and discover the hidden aquatic life whilst conducting night dives.</p>
             <ul class="icon-list list-green">
               <li><i class="fa fa-angle-right"></i>Minimum age: 12 years old (For sidemount adventure course, 15 years old)</li>
               <li><i class="fa fa-angle-right"></i>Schedule: 2 days</li>
               <li><i class="fa fa-angle-right"></i>Adventure dives : Deep, Wreck, Night, Underwater Navigation, Naturalist, Fish ID, Drift, Boat, Peak Performance Buoyancy, Search and Recovery</li>
               <li><i class="fa fa-angle-right"></i>Price: RM 950</li>
             </ul>
          </div>
       </div>
    </div>

    <h2 class="section-title mb-40 text-center">Looking for something special? <span class="typer" data-delay="100" data-delim=":" data-words="Go beyond recreational: Go professional!: Challenge yourself!"></span><span class="cursor" data-owner="typer"></span> </h2>
    <div class="container-timeline">
       <div class="timeline-block timeline-block-left">
          <div class="marker"></div>
          <div class="timeline-content">
             <h3 class="color-yellow">Enriched Air Diver <i class="si-ecommerce_star-favorites"></i><i class="si-ecommerce_star-favorites"></i><i class="si-ecommerce_star-favorites"></i></h3>
             <p>The PADI Enriched Air Diver course is PADI’s most popular specialty scuba course. Perfect for divers who want to maximize their bottom time! Scuba diving with enriched air Nitrox gives you more no decompression time, especially on repetitive scuba dives. If staying down longer and getting back in the water sooner sounds appealing, then don’t hesitate to become an enriched air diver.</p>
             <ul class="icon-list list-green">
                <li><i class="fa fa-angle-right"></i>Minimum age: 12 years old</li>
                <li><i class="fa fa-angle-right"></i>Schedule: 1–2 days</li>
                <li><i class="fa fa-angle-right"></i>Price : RM 700 (inclusive of 2 dives on Nitrox)</li>
             </ul>
          </div>
       </div>
       <div class="timeline-block timeline-block-right">
         <div class="marker"></div>
         <div class="timeline-content">
            <h3>Emergency First Responder</h3>
            <p>First aid and CPR are good skills for anyone involved in adventure sports and you need these skills for the PADI Rescue Diver course. Emergency First Response is a PADI affiliate that specializes in teaching these lifesaving skills. The fun part about Emergency First Response training is learning serious medical emergency response skills in an upbeat, positive environment. You will gain the vital skills, knowledge and confidence to be able to respond to an emergency situation.</p>
            <ul class="icon-list list-green">
               <li><i class="fa fa-angle-right"></i>Schedule: 8 hrs</li>
               <li><i class="fa fa-angle-right"></i>Price : RM 500</li>
            </ul>
         </div>
       </div>
       <div class="timeline-block timeline-block-left">
          <div class="marker"></div>
          <div class="timeline-content">
             <h3 class="color-yellow">Rescue Diver Course <i class="si-ecommerce_star-favorites"></i><i class="si-ecommerce_star-favorites"></i><i class="si-ecommerce_star-favorites"></i></h3>
             <p>
               You’re already a PADI Advanced Diver? looking for a new challenge? Look no further than the PADI Rescue Diver course. Not just focusing on your own, but also the safety of other divers, this 3 day course will challenge your abilities as a diver and improve your knowledge through a series of fun and exciting exercises. <br>
               Scuba divers describe the PADI Rescue Diver course as the most challenging, yet most rewarding course they’ve ever taken. Why? Because you learn to prevent and manage problems in the water, and become more confident in your skills as a diver, knowing that you can help others if needed. During the course, you learn to become a better buddy by practicing problem solving skills until they become second nature. Plus, the course is just fun – it’s serious, but still allows for lots of laughter in between the focused learning. <br>
               The PADI Rescue Diver course prepares you to deal with dive emergencies, minor and major, using a variety of techniques. Through knowledge development and rescue exercises, you learn what to look for and how to respond. During rescue scenarios, you put into practice your knowledge and skills.
               <br><br>
               [Topics include]
               <br>
                • Self-rescue<br>
                • Recognizing and managing stress in other divers<br>
                • Emergency management and equipment<br>
                • Rescuing panicked divers<br>
                • Rescuing unresponsive divers
             </p>
             <ul class="icon-list list-green">
               <li><i class="fa fa-angle-right"></i>Minimum age: 12 years old</li>
               <li><i class="fa fa-angle-right"></i>Schedule: 3 days</li>
               <li><i class="fa fa-angle-right"></i>Price : RM 1100</li>
             </ul>
          </div>
       </div>
       <div class="timeline-block timeline-block-right">
          <div class="marker"></div>
          <div class="timeline-content">
             <h3 class="color-yellow">Divemaster Course <i class="si-ecommerce_star-favorites"></i><i class="si-ecommerce_star-favorites"></i><i class="si-ecommerce_star-favorites"></i></h3>
             <p>
               Looking for the first step in working with scuba as a career? Your adventure into the professional levels of recreational scuba diving begins with the PADI Divemaster program. Working closely with a PADI Instructor, in this program you expand your dive knowledge and hone your skills to the professional level. PADI Divemaster training develops your leadership abilities, qualifying you to supervise dive activities and assist instructors with student divers. PADI Divemaster is the prerequisite certification for both the PADI Assistant Instructor and PADI Open Water Scuba Instructor certifications.
               <br><br>
               [Prerequisites]
               <br>
                • Certified as a PADI Advanced Open Water Diver and PADI Rescue Diver<br>
                • Minimum 18 years old<br>
                • Minimum of 40 logged scuba dives<br>
                • Completed EFR Primary and Seceondary Care training within 24 months<br>
                • Medically evaluated and cleared for diving by a physician within 12 months
             </p>
             <ul class="icon-list list-green">
               <li><i class="fa fa-angle-right"></i>Schedule: inquire</li>
               <li><i class="fa fa-angle-right"></i>Price : inquire</li>
             </ul>
          </div>
       </div>
    </div>

    <h2 class="section-title mb-40 text-center">Recommended Courses</h2>
    <div class="row gutter-50 gutter-md-30 process-wrapper arrow text-center">
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">01</span></span>
        <h5>Open Water Diver Course</h5>
      </div>
      <!--/column -->
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">02</span></span>
        <h5>Advanced Open Water Diver Course</h5>
      </div>
      <!--/column -->
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">03</span></span>
        <h5>Rescue Diver Course</h5>
      </div>
      <!--/column -->
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">04</span></span>
        <h5>Divemaster Course</h5>
      </div>
      <!--/column -->
    </div>
    <!--/row -->

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
