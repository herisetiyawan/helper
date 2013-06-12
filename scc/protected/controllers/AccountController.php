<?php

class AccountController extends Controller {

    public function actionIndex() {
        if (!Yii::app()->user->isGuest)
            $this->redirect($this->createUrl('/vip'));
        $model = new LoginForm;
        $model->via = 'student';
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

}