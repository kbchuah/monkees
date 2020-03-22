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

        <?php if(Yii::$app->session->getFlash('success') != '') { ?>
          <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
              <?= Yii::$app->session->getFlash('success');?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
          </div>
        <?php } else if (Yii::$app->session->getFlash('error') != '') { ?>
          <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
              <?= Yii::$app->session->getFlash('error');?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
          </div>
        <?php } ?>

        <nav class="navbar transparent absolute nav-wrapper-dark inverse-text navbar-expand-lg text-uppercase">
          <div class="container">
            <div class="navbar-header">
              <div class="navbar-brand"><a href="<?=Url::home()?>"><img src="#" srcset="<?=Yii::getAlias('@web')?>/themes/brailie/style/images/logo-light.png 1x, <?=Yii::getAlias('@web')?>/themes/brailie/style/images/logo-light@2x.png 2x" alt="" /></a></div>
              <div class="navbar-hamburger ml-auto d-lg-none d-xl-none"><button class="hamburger animate" data-toggle="collapse" data-target=".navbar-collapse"><span></span></button></div>
            </div>
            <!-- /.navbar-header -->
            <?= $this->render('//layouts/_header'); ?>
          </div>
          <!-- /.container -->
        </nav>
        <!-- /.navbar -->

        <?= $content ?>

        <?php
        $model = $this->params['model'];
        ?>
        <div class="wrapper light-wrapper">
          <div class="modal inverse-text modal-transparent faded" id="contact-us" tabindex="-1" role="dialog"> <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"></a>
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <?= $this->render('//layouts/_contact_us', [
                    'model' => $model
                ]); ?>
              </div>
            </div>
          </div>
        </div>
        <!-- /.wrapper -->

        <?= $this->render('//layouts/_footer'); ?>

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
