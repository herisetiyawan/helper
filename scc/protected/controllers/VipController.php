<?php

class VipController extends Controller {

    public $layout = '//layouts/scc_admin/column1';

    public function init() {
        if (Yii::app()->session['admin'] == NULL) {
            $this->redirect(Yii::app()->user->returnUrl);
        }
    }

    public function actionIndex() {
        $this->render('index');
    }

}