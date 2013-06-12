<?php

class SccController extends Controller {

    public $layout = '//layouts/scc_front/column1';

    public function actionIndex() {
        $this->render('index');
    }

    public function actionAdmin() {
        if (!Yii::app()->user->isGuest)
            $this->redirect($this->createUrl('/vip'));
        $this->layout = '//layouts/scc_admin/column1';
        $model = new LoginForm;
        $model->via = 'admin';

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->createUrl('/ssc/admin'));
        }
        // display the login form
        $this->render('admin_login', array('model' => $model));
    }

    public function actionLogout() {
        Yii::app()->user->logout();
        if (isset($_GET['admin'])) {
            $this->redirect($this->createUrl('/ssc/admin'));
        }

        $this->redirect(Yii::app()->homeUrl);
    }

}