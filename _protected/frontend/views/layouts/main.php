<?php
use frontend\assets\Index48Asset;
use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
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

        <nav class="navbar transparent absolute nav-wrapper-dark inverse-text navbar-expand-lg text-uppercase">
          <div class="container">
            <div class="navbar-header">
              <div class="navbar-brand"><a href="<?=Url::home()?>"><img src="#" srcset="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/logo-light.png 1x, <?=Yii::getAlias('@web')?>/themes/brailie/style/images/logo-light@2x.png 2x" alt="" /></a></div>
              <div class="navbar-hamburger ml-auto d-lg-none d-xl-none"><button class="hamburger animate" data-toggle="collapse" data-target=".navbar-collapse"><span></span></button></div>
            </div>
            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="<?=Url::home()?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=Url::toRoute(['about/'])?>">About</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=Url::toRoute(['dive/'])?>">Dive</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=Url::toRoute(['learn/'])?>">Learn</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=Url::toRoute(['tioman/'])?>">Tioman</a></li>
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
                <li><a href="https://www.instagram.com/marinemonkees/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/MMonkees/"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCP0qmYNDZ4yrVG8IPAH5-VA"><i class="fa fa-youtube"></i></a></li>
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
