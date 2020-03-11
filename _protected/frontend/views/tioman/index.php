<?php
use yii\web\View;

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name) . ' | ' . Yii::t('app', 'Tioman Island');

?>

<div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-bg4.jpg">
  <div class="container inner pt-150 pb-150">
    <div class="row">
      <div class="col-md-4 pl-md-5">
        <h2 class="section-title">Tioman Island</h2>
        <p>
          Tioman Island (Malay language: Pulau Tioman) is a small island in Pahang, Malaysia. It is located 32 kilometers (20 miles) off the east coast of the state,
          and is some 20 kilometers (12 miles) long and 12 kilometers (7.5 miles) wide. The densely forested island is sparsely inhabited, and is surrounded by numerous coral reefs,
          making it a popular scuba diving spot. There are also a lot of resorts and chalets around the island which has duty-free status. There are some 8 villages on the island
          and around 18 beaches, most of them still very pristine and only accessible by boat. [wikipedia.org]
        </p>
        <div class="space10"></div>
      </div>
      <!--/column -->
    </div>
    <!--/row -->

    <hr>
    <!--/divider -->
    <div class="space30"></div>
    <h2 class="section-title title-color color-ice section-title-upper larger text-center">How to Get to Tioman Island from Kuala Lumpur or Singapore</h2>
    <div class="space10"></div>
    <h2 class="section-title mb-40 text-center"><span class="icon icon-color color-default fs-38 mb-20"><i class="si-transport_cruise-ship"></i></span> Mersing</h2>
    <div class="row gutter-50 gutter-md-30 process-wrapper line text-center">
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">01</span></span>
        <h5>KL/SG</h5>
        <p>THINK YOURSELF SOHAI</p>
      </div>
      <!--/column -->
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">02</span></span>
        <h5>Mersing Jetty</h5>
        <p>Mersing, the major gateway to the island. The common route for most visitors is to drive or take a bus ride up to Mersing then wait for the next available ferry out. </p>
        <a href="http://www.easybook.com/" target="_blank" rel="noopener noreferrer">[Book tickets online]</a>
        <div class="space30"></div>
        <a href="#" data-toggle="modal" data-target="#myModal1" class="btn btn-full-rounded btn-sky">Ferry Schedule</a>
      </div>
      <!--/column -->
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">03</span></span>
        <h5>Kg Salang</h5>
        <p> Salang is a popular beach destination at the north of Pulau Tioman, located along the west coast in a secluded bay. The last stop on the Mersing ferry route,
            Salang offers a balanced holiday getaway, having a good range of tourist facilities, activities and conveniences, but without being overwhelmed by development.</p>
      </div>
      <!--/column -->
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">04</span></span>
        <h5>Marine Monkees</h5>
        <p>When you arrive at Salang jetty in Tioman island, at the end of the jetty, turn left and then walk 150-200 meters/yards and look for the Marine Monkees Dive Center.
           Usually there are one or two divers relaxing on the boardwalk or at night you’ll probably find a larger group enjoying a social evening sharing their dive experiences.</p>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
    <div class="space30"></div>
    <h2 class="section-title mb-40 text-center"><span class="icon icon-color color-default fs-38 mb-20"><i class="si-transport_cruise-ship"></i></span> Tanjung Gemuk</h2>
    <div class="row gutter-50 gutter-md-30 process-wrapper line text-center">
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">01</span></span>
        <h5>KL/SG</h5>
        <p>THINK YOURSELF SOHAI</p>
      </div>
      <!--/column -->
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">02</span></span>
        <h5>Tg Gemuk Pier</h5>
        <p>Mersing, the major gateway to the island. The common route for most visitors is to drive or take a bus ride up to Mersing then wait for the next available ferry out. </p>
        <a href="http://www.easybook.com/" target="_blank" rel="noopener noreferrer">[Book tickets online]</a>
        <div class="space30"></div>
        <a href="#" data-toggle="modal" data-target="#myModal1" class="btn btn-full-rounded btn-sky">Ferry Schedule</a>
      </div>
      <!--/column -->
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">03</span></span>
        <h5>Kg Salang</h5>
        <p> Salang is a popular beach destination at the north of Pulau Tioman, located along the west coast in a secluded bay. The last stop on the Mersing ferry route,
            Salang offers a balanced holiday getaway, having a good range of tourist facilities, activities and conveniences, but without being overwhelmed by development.</p>
      </div>
      <!--/column -->
      <div class="col-md-3"> <span class="icon icon-bg bg-default mb-20"><span class="number">04</span></span>
        <h5>Marine Monkees</h5>
        <p>When you arrive at Salang jetty in Tioman island, at the end of the jetty, turn left and then walk 150-200 meters/yards and look for the Marine Monkees Dive Center.
           Usually there are one or two divers relaxing on the boardwalk or at night you’ll probably find a larger group enjoying a social evening sharing their dive experiences.</p>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->

    <hr>
    <!--/divider -->

  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->

<div class="wrapper light-wrapper">
  <div class="modal inverse-text modal-transparent faded" id="myModal1" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content text-center">
        <h2 class="text-uppercase">Tioman Ferry Schedule</h2>
        <p>Situated just in front of the north side of the bay, Roger's Wreck gets its name from one of the pioneer members of a dive centre in Tioman. A small wooden
            wreck which is fairly degraded still hosts large schools of fishes, scorpionfish and a large resident jenkins whipray! Ideal for first time wreck divers and
              for those conducting their PADI Advanced course.</p>
        <h4 class="text-center">Level: Advanced | Depth: 18m-26m</h4>
        <h4 class="title-color color-yellow text-center">Highlight: Wreck, yellowtail barracuda, big eye scad fish and the resident jenkins whipray</h4>
        <div class="space10"></div>
        <ul class="basic-gallery">
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-1.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-2.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-3.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-4.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-5.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-6.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-7.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-8.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="wrapper light-wrapper">
  <div class="modal inverse-text modal-transparent faded" id="myModal2" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content text-center">
        <h2 class="text-uppercase">Tioman Ferry Schedule</h2>
        <p>Situated just in front of the north side of the bay, Roger's Wreck gets its name from one of the pioneer members of a dive centre in Tioman. A small wooden
            wreck which is fairly degraded still hosts large schools of fishes, scorpionfish and a large resident jenkins whipray! Ideal for first time wreck divers and
              for those conducting their PADI Advanced course.</p>
        <h4 class="text-center">Level: Advanced | Depth: 18m-26m</h4>
        <h4 class="title-color color-yellow text-center">Highlight: Wreck, yellowtail barracuda, big eye scad fish and the resident jenkins whipray</h4>
        <div class="space10"></div>
        <ul class="basic-gallery">
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-1.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-2.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-3.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-4.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-5.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-6.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-7.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1-8.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- /.wrapper -->
