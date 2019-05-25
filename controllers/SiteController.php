<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Registry;
use app\models\Login;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

  




    public function actionLogin()
    {

        $login_model = new Login();
        
        if( Yii::$app->request->post('Login'))
        {
            $login_model->attributes = Yii::$app->request->post('Login');

            if($login_model->validate())
            {
                Yii::$app->user->login($login_model->getUser());
                return $this->redirect(['publications']);
            }
        }

        if(!Yii::$app->user->isGuest)
        {
            return $this->redirect(['index']);
        }

        return $this->render('login',['login_model'=>$login_model]);
    }







       

    public function actionRegistry()
    {   
        $model = new Registry();

        if(isset($_POST['Registry']))
            {
                $model->attributes = Yii::$app->request->post('Registry');

                if($model->validate() && $model->registry()) {
                    return $this->redirect(['login']);
                }
            }

        return $this->render('registry',['model'=>$model]);
    }

    public function actionPublications()
    {
        return $this->render('publications');
    }


    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
