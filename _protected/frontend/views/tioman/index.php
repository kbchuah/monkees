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
<!-- /.wrapper -->

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

<div id="accommodation" class="wrapper light-wrapper">
  <div class="container inner">
    <h2 class="section-title mb-40 text-center">Accommodation</h2>
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="tabs-wrapper bordered">
          <ul class="nav nav-tabs">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tab2-1">Salang Indah Resort</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab2-2">Salang Pusaka Resort</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab2-3">Pondok Sri Salang</a> </li>
          </ul>
          <!-- /.nav-tabs -->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tab2-1">
              <div class="row">
                <div class="col-md-12">
                <div class="space50"></div>
                  <table class="table table-sm">
                    <thead>
                      <tr>
                      <th style="width: 35%;" scope="col">ROOM TYPE</th>
                      <th style="width: 30%;" scope="col">BEDS</th>
                      <th style="width: 10%;" scope="col">SHOWER</th>
                      <th style="width: 10%;" scope="col">FRIDGE</th>
                      <th style="width: 15%;" scope="col">PRICE</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Basic Fan</td>
                        <td>1 Double</td>
                        <td>Cold</td>
                        <td>No</td>
                        <td>RM 60</td>
                      </tr>
                      <tr>
                        <td>Basic a/c</td>
                        <td>1 Double</td>
                        <td>Cold</td>
                        <td>No</td>
                        <td>RM 110</td>
                      </tr>
                      <tr>
                        <td>Basic Family a/c</td>
                        <td>2 Double + 1 Single</td>
                        <td>Cold</td>
                        <td>No</td>
                        <td>RM 140</td>
                      </tr>
                      <tr>
                        <td>Standard Hillside Twin a/c</td>
                        <td>1 Double</td>
                        <td>Hot</td>
                        <td>Yes</td>
                        <td>RM 150</td>
                      </tr>
                      <tr>
                        <td>Standard Quad a/c</td>
                        <td>2 Double</td>
                        <td>Hot</td>
                        <td>Yes</td>
                        <td>RM 240</td>
                      </tr>
                      <tr>
                        <td>Deluxe Hillside Twin a/c</td>
                        <td>1 Double</td>
                        <td>Hot</td>
                        <td>Yes</td>
                        <td>RM 180</td>
                      </tr>
                      <tr>
                        <td>Deluxe Garden View Triple a/c</td>
                        <td>1 Double + 1 Single</td>
                        <td>Hot</td>
                        <td>Yes</td>
                        <td>RM 240</td>
                      </tr>
                      <tr>
                        <td>Deluxe Garden View Quad a/c</td>
                        <td>2 Double</td>
                        <td>Hot</td>
                        <td>Yes</td>
                        <td>RM 380</td>
                      </tr>
                      <tr>
                        <td>Standard Hillside Family a/c</td>
                        <td>2 Double</td>
                        <td>Hot</td>
                        <td>Yes</td>
                        <td>RM 240</td>
                      </tr>
                      <tr>
                        <td>Deluxe Sea Veiw a/c 1</td>
                        <td>2 Double</td>
                        <td>Hot</td>
                        <td>Yes</td>
                        <td>RM 380</td>
                      </tr>
                      <tr>
                        <td>Deluxe Sea Veiw a/c 2</td>
                        <td>1 Double + 1 Single</td>
                        <td>Hot</td>
                        <td>Yes</td>
                        <td>RM 330</td>
                      </tr>
                      <tr>
                        <td>Deluxe Family Sunset View a/c</td>
                        <td>2 Double</td>
                        <td>Hot</td>
                        <td>Yes</td>
                        <td>RM 380</td>
                      </tr>
                      <tr>
                        <td>Deluxe Family Hillside View a/c</td>
                        <td>2 Double</td>
                        <td>Hot</td>
                        <td>Yes</td>
                        <td>RM 380</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <p>※ Surcharge for school/public holidays: RM 20 per night<br>※ Adding a mattress: RM 30 per night</p>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane fade" id="tab2-2">
              <div class="row">
                <div class="col-md-12">
                <div class="space50"></div>
                  <table class="table table-sm">
                    <thead>
                      <tr>
                      <th style="width: 30%;" scope="col">ROOM TYPE</th>
                      <th style="width: 35%;" scope="col">BEDS</th>
                      <th style="width: 10%;" scope="col">SHOWER</th>
                      <th style="width: 10%;" scope="col">FRIDGE</th>
                      <th style="width: 15%;" scope="col">PRICE</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Standard a/c</td>
                        <td>1 Double or 2 Single</td>
                        <td>Hot</td>
                        <td>Yes</td>
                        <td>RM 140</td>
                      </tr>
                      <tr>
                        <td>Deluxe a/c</td>
                        <td>1 Double or 2 Single</td>
                        <td>Hot</td>
                        <td>Yes</td>
                        <td>RM 160</td>
                      </tr>
                      <tr>
                        <td>Superior a/c</td>
                        <td>1 Double</td>
                        <td>Hot</td>
                        <td>Yes</td>
                        <td>RM 180</td>
                      </tr>
                      <tr>
                        <td >Pusaka Suite a/c</td>
                        <td >1 Double</td>
                        <td >Hot</td>
                        <td >Yes</td>
                        <td >RM 260</td>
                      </tr>
                      <tr>
                        <td >Love Suite a/c</td>
                        <td >1 Double + 1 Single</td>
                        <td >Hot</td>
                        <td >Yes</td>
                        <td >RM 360</td>
                      </tr>
                      <tr>
                        <td >Deluxe Triple a/c</td>
                        <td >1 Double + 1 Single or 3 Single</td>
                        <td >Hot</td>
                        <td >Yes</td>
                        <td >RM 180</td>
                      </tr>
                      <tr>
                        <td >Superior Triple a/c</td>
                        <td >1 Double + 1 Single</td>
                        <td >Hot</td>
                        <td >Yes</td>
                        <td >RM 200</td>
                      </tr>
                      <tr>
                        <td >Standard Quad a/c</td>
                        <td >2 Double</td>
                        <td >Hot</td>
                        <td >No</td>
                        <td >RM 150</td>
                      </tr>
                      <tr>
                        <td >Deluxe Quad a/c</td>
                        <td >2 Double</td>
                        <td >Hot</td>
                        <td >Yes</td>
                        <td >RM 200</td>
                      </tr>
                      <tr>
                        <td >Pusaka Suite Quad a/c</td>
                        <td >2 Double</td>
                        <td >Hot</td>
                        <td >Yes</td>
                        <td >RM 250</td>
                      </tr>
                      <tr>
                        <td >Garden Family Suite a/c</td>
                        <td >2 Double + 1 Single</td>
                        <td >Hot</td>
                        <td >Yes</td>
                        <td >RM 240</td>
                      </tr>
                      <tr>
                        <td >Love Family Suite a/c</td>
                        <td >2 Double + 1 Single</td>
                        <td >Hot</td>
                        <td >Yes</td>
                        <td >RM 460</td>
                      </tr>
                      <tr>
                        <td >Tropical Family Suite a/c</td>
                        <td >For 11 pax</td>
                        <td >Hot</td>
                        <td >Yes</td>
                        <td >RM 550</td>
                      </tr>
                      <tr>
                        <td >Soul Family Suite a/c</td>
                        <td >For 9 pax</td>
                        <td >Hot</td>
                        <td >Yes</td>
                        <td >RM 700</td>
                      </tr>
                      <tr>
                        <td >Home Style Villas a/c<br>
                        (3-4 bedrooms)</td>
                        <td >For 7-14 pax</td>
                        <td >Hot</td>
                        <td >Yes</td>
                        <td >RM 1000 – RM1500</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane fade" id="tab2-3">
              <div class="row">
                <div class="col-md-12">
                <div class="space50"></div>
                  <table class="table table-sm">
                    <thead>
                      <tr>
                        <th style="width: 25%;" scope="col">ROOM TAPE</th>
                        <th style="width: 40%;" scope="col">BEDS</th>
                        <th style="width: 10%;" scope="col">SHOWER</th>
                        <th style="width: 10%;" scope="col">FRIDGE</th>
                        <th style="width: 15%;" scope="col">PRICE</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td >Twin Room a/c</td>
                        <td >1 Double</td>
                        <td >Hot</td>
                        <td >No</td>
                        <td >RM 150</td>
                      </tr>
                      <tr>
                        <td >Triple Room a/c</td>
                        <td >1 Double + 1 Single or 3 Single</td>
                        <td >Hot</td>
                        <td >No</td>
                        <td >RM 180</td>
                      </tr>
                      <tr>
                        <td >Quad Room a/c</td>
                        <td >2 Double</td>
                        <td >Hot</td>
                        <td >No</td>
                        <td >RM 210</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.tabs-wrapper -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.wrapper -->
