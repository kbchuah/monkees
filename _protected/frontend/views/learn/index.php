<?php
use yii\web\View;

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name) . ' | ' . Yii::t('app', 'Learn With Us');

?>

<?php $bg_img1 = Yii::getAlias('@web').'/themes/brailie/style/images/art/monkees-bg4.jpg' ?>
<div class="fixed-bg-mobile" style='background-image: url("<?= $bg_img1 ?>")'></div>

<div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-bg4.jpg">
  <div class="container inner pt-250 pb-120">
    <h1 class="heading text-center mb-50 hide-md">Ready to <span class="typer" data-delay="100" data-delim=":" data-words="dive?"></span><span class="cursor" data-owner="typer"></span></h1>
    <h1 class="heading text-center mb-50 show-md">Ready to <br><span class="typer" data-delay="100" data-delim=":" data-words="dive?"></span><span class="cursor" data-owner="typer"></span></h1>
    <p class="lead larger text-center">
      We have everything from beginner to advanced levels and specialty courses. <br>
      Not sure where to start? Check out our <span class="color-yellow">recommended diver's journey:</span>
    </p>
    <div class="row gutter-50 gutter-md-30 process-wrapper arrow text-center">
      <div class="col-md-3">
        <a href="#" data-toggle="modal" data-target="#open-water">
          <span class="icon icon-bg bg-default mb-20"><span class="number">01</span></span>
          <h5>Open Water Diver</h5>
        </a>
      </div>
      <!--/column -->
      <div class="col-md-3">
        <a href="#" data-toggle="modal" data-target="#advanced-open-water">
          <span class="icon icon-bg bg-default mb-20"><span class="number">02</span></span>
          <h5>Advanced OW Diver</h5>
        </a>
      </div>
      <!--/column -->
      <div class="col-md-3">
        <a href="#" data-toggle="modal" data-target="#rescue-diver">
          <span class="icon icon-bg bg-default mb-20"><span class="number">03</span></span>
          <h5>Rescue Diver</h5>
        </a>
      </div>
      <!--/column -->
      <div class="col-md-3">
        <a href="#" data-toggle="modal" data-target="#divemaster">
          <span class="icon icon-bg bg-default mb-20"><span class="number">04</span></span>
          <h5>Divemaster</h5>
        </a>
      </div>
      <!--/column -->
    </div>
    <!--/row -->
    <div class="space30"></div>
    <p class="lead larger text-center">- OR -</p>
    <p class="lead larger text-center">Explore our list of available courses below:</p>
    <p class="text-center">
      <a href="#discover" class="btn btn-border btn-full-rounded">Discover</a>
      <a href="#beginner" class="btn btn-border btn-full-rounded">Beginner</a>
      <a href="#advanced" class="btn btn-border btn-full-rounded">Advanced</a>
      <a href="#specialty" class="btn btn-border btn-full-rounded">Specialty</a>
    </p>
    <p class="lead larger text-center"><i class="si-arrows_double-arrow-down"></i></p>
    <div class="space30"></div>

    <hr>

    <div id="discover" class="pt-100">
      <h2 class="section-title mb-40 text-center color-ice hide-md"><span class="inverse-text">Ready to </span><span class="typer" data-delay="100" data-delim=":" data-words="DISCOVER?"></span><span class="cursor" data-owner="typer"></span> </h2>
      <h2 class="section-title mb-40 text-center color-ice show-md"><span class="inverse-text">Ready to <br></span><span class="typer" data-delay="100" data-delim=":" data-words="DISCOVER?"></span><span class="cursor" data-owner="typer"></span> </h2>
      <div class="container-timeline">
         <div class="timeline-block timeline-block-right">
            <div class="marker"></div>
            <div class="timeline-content">
               <h3>Bubble Maker <i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h3>
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
              <h3>Scuba Try Out <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h3>
              <p>Have you ever wondered what it’s like to breathe underwater. If you want to find out but aren’t quite ready to take the plunge into a certification course, Scuba Try Out will let you try scuba at your own pace. </p>
              <p>While not an actual scuba certification, during the Scuba Try Out experience you’ll learn how to use scuba equipment in shallow water and get a quick and easy introduction to what it takes to explore the underwater world.</p>
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
    </div>

    <div id="beginner" class="pt-100">
      <h2 class="section-title mb-40 text-center color-ice hide-md"><span class="inverse-text">Ready to get certified? For </span><span class="typer" data-delay="100" data-delim=":" data-words="BEGINNERS."></span><span class="cursor" data-owner="typer"></span> </h2>
      <h2 class="section-title mb-40 text-center color-ice show-md"><span class="inverse-text">Ready to get certified? <br>For </span><span class="typer" data-delay="100" data-delim=":" data-words="BEGINNERS."></span><span class="cursor" data-owner="typer"></span> </h2>
      <div class="container-timeline">
         <div class="timeline-block timeline-block-right">
            <div class="marker"></div>
            <div class="timeline-content">
               <h3>Scuba Diver Course <i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h3>
               <p>Short on time but have the urge to become a certified diver? The PADI Scuba Diver certification might just be for you. This course requires less time than the PADI Open Water Diver course, covering only the basics in scuba diving, resulting in a limited certification. </p>
               <p>Recommended for those planning on diving with guides or with just too busy schedules.</p>
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
              <?= $this->render('//layouts/_open_water'); ?>
           </div>
         </div>
      </div>
    </div>

    <div id="advanced" class="pt-100">
      <h2 class="section-title mb-40 text-center color-ice hide-md"><span class="inverse-text">Already certified? Time to go </span><span class="typer" data-delay="100" data-delim=":" data-words="ADVANCED!"></span><span class="cursor" data-owner="typer"></span> </h2>
      <h2 class="section-title mb-40 text-center color-ice show-md"><span class="inverse-text">Already certified? <br>Time to go <br></span><span class="typer" data-delay="100" data-delim=":" data-words="ADVANCED!"></span><span class="cursor" data-owner="typer"></span> </h2>
      <div class="container-timeline">
         <div class="timeline-block timeline-block-right">
            <div class="marker"></div>
            <div class="timeline-content">
               <h3>Scuba Review <i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h3>
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
             <h3>Adventure Diver Course <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h3>
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
               <?= $this->render('//layouts/_adv_open_water'); ?>
            </div>
         </div>
      </div>
    </div>

    <div id="specialty" class="pt-100">
      <h2 class="section-title text-center color-ice hide-md"><span class="inverse-text">Looking for something.. </span><span class="typer" data-delay="100" data-delim=":" data-words="SPECIAL?"></span><span class="cursor" data-owner="typer"></span> </h2>
      <h2 class="section-title text-center color-ice show-md"><span class="inverse-text">Looking for something.. </span><br><span class="typer" data-delay="100" data-delim=":" data-words="SPECIAL?"></span><span class="cursor" data-owner="typer"></span> </h2>
      <p class="mb-40 text-center lead larger hide-md">Challenge yourself. It's time to go <span class="typer" data-delay="100" data-delim=":" data-words="professional!:beyond recreational!"></span><span class="cursor" data-owner="typer"></span> </p>
      <p class="mb-40 text-center lead larger show-md">Challenge yourself. It's time to <br>go <span class="typer" data-delay="100" data-delim=":" data-words="professional!:beyond recreational!"></span><span class="cursor" data-owner="typer"></span> </p>
      <div class="container-timeline">
         <div class="timeline-block timeline-block-left">
            <div class="marker"></div>
            <div class="timeline-content">
               <h3 class="color-yellow">Enriched Air Diver <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h3>
               <p>The PADI Enriched Air Diver course is PADI’s most popular specialty scuba course. Perfect for divers who want to maximize their bottom time! Scuba diving with enriched air Nitrox gives you more no decompression time, especially on repetitive scuba dives.</p>
               <p>If staying down longer and getting back in the water sooner sounds appealing, then don’t hesitate to become an enriched air diver.</p>
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
              <h3>Emergency First Responder <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h3>
              <p>First aid and CPR are good skills for anyone involved in adventure sports and you need these skills for the PADI Rescue Diver course. Emergency First Response is a PADI affiliate that specializes in teaching these lifesaving skills.</p>
              <p>The fun part about Emergency First Response training is learning serious medical emergency response skills in an upbeat, positive environment. You will gain the vital skills, knowledge and confidence to be able to respond to an emergency situation.</p>
              <ul class="icon-list list-green">
                 <li><i class="fa fa-angle-right"></i>Schedule: 8 hrs</li>
                 <li><i class="fa fa-angle-right"></i>Price : RM 500</li>
              </ul>
           </div>
         </div>
         <div class="timeline-block timeline-block-left">
            <div class="marker"></div>
            <div class="timeline-content">
                <?= $this->render('//layouts/_rescue_diver'); ?>
            </div>
         </div>
         <div class="timeline-block timeline-block-right">
            <div class="marker"></div>
            <div class="timeline-content">
                <?= $this->render('//layouts/_divemaster'); ?>
            </div>
         </div>
      </div>
    </div>

    <hr>

    <p class="text-center lead larger">For any enquiries regarding our courses</p>
    <p class="lead larger text-center"><i class="si-arrows_double-arrow-down"></i></p>
    <?= $this->render('//layouts/_contact_us', [
        'model' => $model
    ]); ?>

  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<div class="wrapper light-wrapper">
  <div class="modal inverse-text modal-transparent faded" id="open-water" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <?= $this->render('//layouts/_open_water'); ?>
      </div>
    </div>
  </div>
</div>
<!-- /.wrapper -->

<div class="wrapper light-wrapper">
  <div class="modal inverse-text modal-transparent faded" id="advanced-open-water" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <?= $this->render('//layouts/_adv_open_water'); ?>
      </div>
    </div>
  </div>
</div>
<!-- /.wrapper -->

<div class="wrapper light-wrapper">
  <div class="modal inverse-text modal-transparent faded" id="rescue-diver" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <?= $this->render('//layouts/_rescue_diver'); ?>
      </div>
    </div>
  </div>
</div>
<!-- /.wrapper -->

<div class="wrapper light-wrapper">
  <div class="modal inverse-text modal-transparent faded" id="divemaster" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <?= $this->render('//layouts/_divemaster'); ?>
      </div>
    </div>
  </div>
</div>
<!-- /.wrapper -->
