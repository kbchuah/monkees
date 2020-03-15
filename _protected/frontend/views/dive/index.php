<?php

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name). ' | ' .Yii::t('app', 'Dive With Us');

$column_height = '400px';
?>

<div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/monkees-bg1.jpg">
  <div class="container inner pt-150 pb-100 text-center">
    <h1 class="heading">Daily Diving Trip</h1>
    <!-- <h1 class="section-title mb-40 text-center">Daily Diving Trip</h2> -->
    <p>Typically we have 2-3 dives daily. There are different dives for you to choose from:</p>
    <div class="row">
      <div class="col-md-4">
        <div class="pricing panel box box-border" style="height:<?=$column_height?>">
          <div class="panel-heading">
            <h4 class="panel-title color-dark pb-0">Boat Dive</h4>
            <div class="price color-dark"> <span class="price-currency">MYR</span><span class="price-value">199</span> <span class="price-duration">2 dives</span></div>
          </div>
          <!--/.panel-heading -->
          <div class="panel-body">
            <table class="table">
              <tbody>
                <tr>
                  <td><strong>Daily</strong> from <strong>09:00 to 13:30</strong></td>
                </tr>
                <tr>
                  <td><small>[Dive guide, equipment & light snack included]</small></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td><strong>Additional dive</strong> from <strong>15:30 to 17:00</strong></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--/.panel-body -->
        </div>
        <!--/.pricing -->
      </div>
      <!--/column -->
      <div class="col-md-4">
        <div class="pricing panel box box-border" style="height:<?=$column_height?>">
          <div class="panel-heading">
            <h4 class="panel-title color-dark pb-0">Shore Dive</h4>
            <div class="price color-dark"> <span class="price-currency">MYR</span><span class="price-value">55</span> <span class="price-duration">dive</span></div>
          </div>
          <!--/.panel-heading -->
          <div class="panel-body">
            <table class="table">
              <tbody>
                <tr>
                  <td><strong>Daily</strong> from <strong>09:00 to 17:00</strong></td>
                </tr>
                <tr>
                  <td><small>[Dive guide & equipment included]</small></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--/.panel-body -->
        </div>
        <!--/.pricing -->
      </div>
      <!--/column -->
      <div class="col-md-4">
        <div class="pricing panel box box-border" style="height:<?=$column_height?>">
          <div class="panel-heading">
            <h4 class="panel-title color-dark pb-0">Night Dive</h4>
            <div class="price color-dark"> <span class="price-currency">MYR</span><span class="price-value">90</span> <span class="price-duration">dive</span></div>
          </div>
          <!--/.panel-heading -->
          <div class="panel-body">
            <table class="table">
              <tbody>
                <tr>
                  <td><strong>Daily</strong> from <strong>19:30 to 21:00</strong></td>
                </tr>
                <tr>
                  <td><small>[Dive guide, equipment & torch included]</small></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td><strong>Night boat dive</strong> at <strong>MYR<big>130</big> / dive</strong> **</td>
                </tr>
                <tr>
                  <td>** <small>Please check with us, schedule subject to change depending on <strong>weather & availability</strong></small></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--/.panel-body -->
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

<div class="wrapper light-wrapper">
  <div class="container inner">
    <!-- <h2 class="section-title mb-40 text-center">Why scuba dive?</h2> -->
    <h2 class="section-title mb-40 text-center">Why scuba dive? <span class="typer" data-delay="100" data-delim=":" data-words="Why not?:Escape.:Explore.:Experience."></span><span class="cursor" data-owner="typer"></span> </h2>
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

<div class="wrapper dark-wrapper">
  <div id="cube-grid-full" class="cbp">
    <div class="cbp-item">
      <figure class="overlay-info hovered"><a href="#" data-toggle="modal" data-target="#myModal1"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg1.jpg" alt="" /></a>
        <figcaption class="d-flex">
          <div class="align-self-center mx-auto">
            <h3 class="mb-0">Roger's Wreck</h3>
            <p>Level: Advanced</p>
          </div>
        </figcaption>
      </figure>
    </div>
    <!--/.cbp-item -->
    <div class="cbp-item">
      <figure class="overlay-info hovered"><a href="#" data-toggle="modal" data-target="#myModal2"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg2.jpg" alt="" /></a>
        <figcaption class="d-flex">
          <div class="align-self-center mx-auto">
            <h3 class="mb-0">Viking Artificial Reef</h3>
            <p>Level: Beginner-Intermediate</p>
          </div>
        </figcaption>
      </figure>
    </div>
    <!--/.cbp-item -->
    <div class="cbp-item">
      <figure class="overlay-info hovered"><a href="#" data-toggle="modal" data-target="#myModal3"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/jetty-cover.jpg" alt="" /></a>
        <figcaption class="d-flex">
          <div class="align-self-center mx-auto">
            <h3 class="mb-0">Salang Jetty</h3>
            <p>Level: Beginner-Intermediate</p>
          </div>
        </figcaption>
      </figure>
    </div>
    <!--/.cbp-item -->
    <div class="cbp-item">
      <figure class="overlay-info hovered"><a href="#" data-toggle="modal" data-target="#myModal4"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg4.jpg" alt="" /></a>
        <figcaption class="d-flex">
          <div class="align-self-center mx-auto">
            <h3 class="mb-0">Salang Bay</h3>
            <p>Level: Beginner</p>
          </div>
        </figcaption>
      </figure>
    </div>
    <!--/.cbp-item -->
    <div class="cbp-item">
      <figure class="overlay-info hovered"><a href="#" data-toggle="modal" data-target="#myModal5"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg5.jpg" alt="" /></a>
        <figcaption class="d-flex">
          <div class="align-self-center mx-auto">
            <h3 class="mb-0">Soyak</h3>
            <p>Level: Beginner-Advanced</p>
          </div>
        </figcaption>
      </figure>
    </div>
    <!--/.cbp-item -->
    <div class="cbp-item">
      <figure class="overlay-info hovered"><a href="#" data-toggle="modal" data-target="#myModal6"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg6.jpg" alt="" /></a>
        <figcaption class="d-flex">
          <div class="align-self-center mx-auto">
            <h3 class="mb-0">KM Sipadan & Sawadee Wreck</h3>
            <p>Level: Advanced</p>
          </div>
        </figcaption>
      </figure>
    </div>
    <!--/.cbp-item -->
    <div class="cbp-item">
      <figure class="overlay-info hovered"><a href="#" data-toggle="modal" data-target="#myModal7"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg7.jpg" alt="" /></a>
        <figcaption class="d-flex">
          <div class="align-self-center mx-auto">
            <h3 class="mb-0">Renggis</h3>
            <p>Level: Beginner</p>
          </div>
        </figcaption>
      </figure>
    </div>
    <!--/.cbp-item -->
    <div class="cbp-item">
      <figure class="overlay-info hovered"><a href="#" data-toggle="modal" data-target="#myModal8"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/malang-rock-cover.jpg" alt="" /></a>
        <figcaption class="d-flex">
          <div class="align-self-center mx-auto">
            <h3 class="mb-0">Malang Rock</h3>
            <p>Level: Beginner</p>
          </div>
        </figcaption>
      </figure>
    </div>
    <!--/.cbp-item -->
    <div class="cbp-item">
      <figure class="overlay-info hovered"><a href="#" data-toggle="modal" data-target="#myModal9"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9.jpg" alt="" /></a>
        <figcaption class="d-flex">
          <div class="align-self-center mx-auto">
            <h3 class="mb-0">Fan Canyon</h3>
            <p>Level: Beginner-Advanced</p>
          </div>
        </figcaption>
      </figure>
    </div>
    <!--/.cbp-item -->
    <div class="cbp-item">
      <figure class="overlay-info hovered"><a href="#" data-toggle="modal" data-target="#myModal10"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9.jpg" alt="" /></a>
        <figcaption class="d-flex">
          <div class="align-self-center mx-auto">
            <h3 class="mb-0">Chebeh</h3>
            <p>Level: Beginner-Intermediate</p>
          </div>
        </figcaption>
      </figure>
    </div>
    <!--/.cbp-item -->
    <div class="cbp-item">
      <figure class="overlay-info hovered"><a href="#" data-toggle="modal" data-target="#myModal11"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9.jpg" alt="" /></a>
        <figcaption class="d-flex">
          <div class="align-self-center mx-auto">
            <h3 class="mb-0">Labas</h3>
            <p>Level: Beginner-Intermediate</p>
          </div>
        </figcaption>
      </figure>
    </div>
    <!--/.cbp-item -->
    <div class="cbp-item">
      <figure class="overlay-info hovered"><a href="#" data-toggle="modal" data-target="#myModal12"><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/tiger-reef-cover.jpg" alt="" /></a>
        <figcaption class="d-flex">
          <div class="align-self-center mx-auto">
            <h3 class="mb-0">Tiger Reef</h3>
            <p>Level: Advanced</p>
          </div>
        </figcaption>
      </figure>
    </div>
    <!--/.cbp-item -->
  </div>
  <!--/.cbp -->
  <div class="modal inverse-text modal-transparent faded" id="myModal1" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content text-center">
        <h2 class="text-uppercase">Roger's Wreck</h2>
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
  <!--/.modal -->
  <div class="modal inverse-text modal-transparent faded" id="myModal2" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content text-center">
        <h2 class="text-uppercase">Viking Artificial Reef</h2>
        <p>Funded by the Viking Dive group and created by our own Marine Monkees crew in 2012. The Viking Reef offers something different from the local island
            sites. On the way to the artificial reef you swim past patches of hard corals, home to giant moray eels, cuttlefish and at night, coral cat sharks. The
              Viking Reef itself is home to Batfish, Filefish and many more. Going a little deeper out of the bay you can find an old engine block home to a beautiful honeycomb eel.</p>
        <h4 class="text-center">Level: Beginner-Intermediate | Depth: 6m-20m</h4>
        <h4 class="title-color color-yellow text-center">Highlight: Artificial Reef, Flabellina, Moray and Honey Comb Eel</h4>
        <div class="space10"></div>
        <ul class="basic-gallery">
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg2-1.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg2-2.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg2-3.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg2-4.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg2-5.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg2-6.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg2-7.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg2-8.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg2-9.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <!--/.modal -->
  <div class="modal inverse-text modal-transparent faded" id="myModal3" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content text-center">
        <h2 class="text-uppercase">Salang Jetty</h2>
        <p>A surprising little dive site, full of huge school of yellowstripe big eyed scad fish, giant moray eel, white eye moray, cuttlefish, yellowbox fish, pufferfish,
            electric ray, snake eels, stonefish, scorpionfish, bobbit worm, skeleton shrimp, nudibranch and more. The jetty, although not the most natural back drop is a
              great place to spend time searching for your favourites all under one roof (jetty).</p>
        <h4 class="text-center">Level: Beginner-Intermediate | Depth: 5m – 15m</h4>
        <h4 class="title-color color-yellow text-center">Highlights: Variety of marine lives</h4>
        <div class="space10"></div>
        <ul class="basic-gallery">
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/jetty1.jpg" alt=""></li>
          <li><i class="si-arrows_double-arrow-up"></i> School of fishes between the pillars of Salang jetty</li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/jetty2.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/jetty3.jpg" alt=""></li>
          <li><i class="si-arrows_double-arrow-up"></i> Special delivery for Viking artifical reef at Salang Bay</li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/jetty4.jpg" alt=""></li>
          <li><i class="si-arrows_double-arrow-up"></i> Skeleton shrimps hanging out on some rocks</li>          
        </ul>
      </div>
    </div>
  </div>
  <!--/.modal -->
  <div class="modal inverse-text modal-transparent faded" id="myModal4" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content text-center">
        <h2 class="text-uppercase">Salang Bay</h2>
        <p>Salang bay is a sandy bottom, sheltered dive site that offers fantastic visibility and is host to many small fishes such as damsel, parrot, sergeant major and angelfish.
            Swimming away from the coral into the sandy abyss look out for electric rays and on the occasion.. eagle rays.</p>
        <h4 class="text-center">Level: Beginner | Depth: 5m – 15m</h4>
        <h4 class="title-color color-yellow text-center">Highlights: reef fishes, electric rays, eagle ray</h4>
        <div class="space10"></div>
        <ul class="basic-gallery">
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg4-1.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg4-2.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg4-3.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg4-4.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg4-5.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg4-6.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg4-7.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg4-8.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <!--/.modal -->
  <div class="modal inverse-text modal-transparent faded" id="myModal5" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content text-center">
        <h2 class="text-uppercase">Soyak</h2>
        <p>Right outside Salang jetty is this island and is situated a stone’s throw from the main island of Tioman. You can expect to see pufferfish,
            lionfish, turtles, bumphead parrot fish, emperor fish, scorpionfish, chevron barracuda, nudibranch, sharks and more.</p>
        <p> There is also an artificial reef sponsored by h2Oplus Malaysia and Hume Cement Sdn Bhd, planned, managed and built by Marine Monkees crew in 2013.</p>
        <h4 class="text-center">Level: Beginner-Advanced | Depth: 5m – 30m</h4>
        <h4 class="title-color color-yellow text-center"> Highlights: H20 Artificial Reef, chevron barracuda, nudibranch, turtle</h4>
        <div class="space10"></div>
        <ul class="basic-gallery">
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg5-1.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg5-2.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg5-3.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg5-4.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg5-5.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg5-6.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg5-7.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg5-8.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg5-9.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg5-10.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <!--/.modal -->
  <div class="modal inverse-text modal-transparent faded" id="myModal6" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content text-center">
        <h2 class="text-uppercase">KM Sipadan & Sawadee Wreck</h2>
        <p>The decommissioned Royal Navy warship KM Sipadan was sunk on the 29th March 2012 to become an artificial reef. It lies at 30m, right next to the Sawadee wooden wreck.
            You can sometimes barely see the wreck due to the amount of fish schooling around it. It’s also home to lionfish and batfish. At 31.5m in length and 7m in width, it’s
              not the biggest but well worth the deep dive down to have a good look around a more modern wreck.</p>
        <h4 class="text-center">Level: Advanced | Depth: 20m – 30m</h4>
        <h4 class="title-color color-yellow text-center">Highlights: Wreck, schools of fishes</h4>
        <div class="space10"></div>
        <ul class="basic-gallery">
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg6-1.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg6-2.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg6-3.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg6-4.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg6-5.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg6-6.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg6-7.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg6-8.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <!--/.modal -->
  <div class="modal inverse-text modal-transparent faded" id="myModal7" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content text-center">
        <h2 class="text-uppercase">Renggis</h2>
        <p>Just near to the main town Tekek, this small island is one of Tioman’s popular dive sites. Home to many Blacktip reef sharks, barracuda and turtles, circumnavigating
            this island is a joy to behold. Hosting numerous types of hard corals that slope gently out on to a sandy bottom, you’ll be surprised how many varieties of aquatic life
              you will find.</p>
        <h4 class="text-center">Level: Beginner | Depth: 6m – 15m</h4>
        <h4 class="title-color color-yellow text-center">Highlights: Hard coral, blacktip sharks, baracudda, stingray</h4>
        <div class="space10"></div>
        <ul class="basic-gallery">
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg7-1.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg7-2.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg7-3.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg7-4.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg7-5.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg7-6.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg7-7.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <!--/.modal -->
  <div class="modal inverse-text modal-transparent faded" id="myModal8" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content text-center">
        <h2 class="text-uppercase">Malang Rock</h2>
        <p>A Marine Monkees’ favourite, Malang Rock never fails to please. Situated right next to Coral Island, this popular dive sight has it all. Hard and soft corals, swim-throughs,
            sharks, turtles, nudibranchs and beautiful cascading rock formations.</p>
        <h4 class="text-center">Level: Beginner | Depth: 5m – 18m</h4>
        <h4 class="title-color color-yellow text-center">Highlights: nudibranch, swim-throughs</h4>
        <div class="space10"></div>
        <ul class="basic-gallery">
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/malang-rock1.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/malang-rock2.jpg" alt=""></li>
          <li><i class="si-arrows_double-arrow-up"></i> Divers exploring one of the many swim-throughs in Batu Malang site</li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/malang-rock3.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/malang-rock4.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/malang-rock5.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/malang-rock6.jpg" alt=""></li>
          <li><i class="si-arrows_double-arrow-up"></i> Swimming around a myriad of corals around</li>
        </ul>
      </div>
    </div>
  </div>
  <!--/.modal -->
  <div class="modal inverse-text modal-transparent faded" id="myModal9" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content text-center">
        <h2 class="text-uppercase">Fan Canyon</h2>
        <p>Situated on the North East side of Coral Island, this dive site boasts.. As the name suggest.. A plethora of huge sea fans. Along the way to the infamous fan canyon you
            will also see an abundant supply of small schools of fish, barracuda, eels and at deeper levels for those who have a keen eye.. large stonefish.</p>
        <h4 class="text-center">Level: Beginner-Advanced | Depth: 8m-25m</h4>
        <h4 class="title-color color-yellow text-center">Highlights: Giant Sea Fans</h4>
        <div class="space10"></div>
        <ul class="basic-gallery">
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-1.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-2.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-3.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-4.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-5.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-6.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-7.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-8.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <!--/.modal -->
  <div class="modal inverse-text modal-transparent faded" id="myModal10" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content text-center">
        <h2 class="text-uppercase">Chebeh</h2>
        <p>This island is surrounded by huge volcanic rock formations that provide brilliant swim-throughs to explore. Definitely for the adventurous types, Chebeh boasts a large variety
            of aquatic life and if you’re lucky, between the months of March – October there have been sightings of whale sharks and dolphins (surface)!</p>
        <h4 class="text-center">Level: Beginner-Intermediate | Depth: 10m-30m</h4>
        <h4 class="title-color color-yellow text-center">Highlights: swim-throughs, barracuda, whale shark (if you’re really lucky)</h4>
        <div class="space10"></div>
        <ul class="basic-gallery">
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-1.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-2.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-3.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-4.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-5.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-6.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-7.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-8.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <!--/.modal -->
  <div class="modal inverse-text modal-transparent faded" id="myModal11" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content text-center">
        <h2 class="text-uppercase">Labas</h2>
        <p>If you like swim-throughs then this is the dive site for you. You can spend the entire dive just discovering what’s hidden under the maze of rock formations. Labas also has
            beautiful coral gardens where you’ll find macro fanatics trying to get that special shot of one of many nudibranchs or other macro organisms that make Labas their home.
            Occasionally giant grouper and giant barracuda has been seen taking shelther under those rocks.</p>
        <h4 class="text-center">Level: Beginner-Intermediate | Depth: 10m-18m</h4>
        <h4 class="title-color color-yellow text-center">Highlights: Swim-throughs, nudibranch, macro life</h4>
        <div class="space10"></div>
        <ul class="basic-gallery">
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-1.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-2.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-3.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-4.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-5.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-6.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-7.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-8.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <!--/.modal -->
  <div class="modal inverse-text modal-transparent faded" id="myModal12" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content text-center">
        <h2 class="text-uppercase">Tiger Reef</h2>
        <p>A submerged reef situated between Labas and Sepoi Island. This reef is a hidden gem, largely undisturbed due to exposure to stronger currents. Tiger Reef has beautiful
            sponges, soft corals and classic rock formations. You can find a large variety of nudibranch and also less commonly seen fish like mackerel, barracuda and whale shark
              (if you’re really lucky).</p>
        <h4 class="text-center">Level: Advanced | Depth: 10m-25m</h4>
        <h4 class="title-color color-yellow text-center">Highlights: Prolific sponges, nudibranch, unspoilt natural beauty</h4>
        <div class="space10"></div>
        <ul class="basic-gallery">
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/tiger-reef1.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/dive-sites/tiger-reef2.jpg" alt=""></li>
          <li><i class="si-arrows_double-arrow-up"></i> Lucky enough to spot one of the rarest marine creature in Tioman</li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-2.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-3.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-4.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-5.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-6.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-7.jpg" alt=""></li>
          <li><img src="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/art/tg9-8.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>
  <!--/.modal -->
</div>
<!-- /.wrapper -->
