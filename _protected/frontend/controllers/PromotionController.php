<?php
namespace frontend\controllers;

use common\models\User;
use common\models\LoginForm;
use frontend\models\AccountActivation;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\helpers\Html;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use Yii;

/**
 * Site controller.
 * It is responsible for displaying static pages, logging users in and out,
 * sign up and account activation, password reset.
 */
class PromotionController extends Controller
{
    // public $layout = 'main_solidnav';

    /**
     * Declares external actions for the controller.
     *
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

//------------------------------------------------------------------------------------------------//
// STATIC PAGES
//------------------------------------------------------------------------------------------------//

    /**
     * Displays the about page.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new ContactForm();
        $this->view->params['model'] = $model;

        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            if ($model->contact(Yii::$app->params['adminEmail']))
            {
                Yii::$app->session->setFlash('success',
                    'Thank you for contacting us. We will respond to you as soon as possible.');
            }
            else
            {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();

        }

        if($model->load(Yii::$app->request->post()) && !$model->validate()){
            Yii::$app->session->setFlash('error', 'There was an error in your form. Kindly check the contact form again.');
        }

        return $this->render('index', [
          'model' => $model
        ]);
    }

}
