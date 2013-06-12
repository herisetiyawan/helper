<?php

class PendaftaranController extends Controller {

    public function actionIndex() {
        $model = new Pelajar;

// Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['Pelajar'])) {
            $model->attributes = $_POST['Pelajar'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_pelajar));
        }

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionKelas() {

        if ($_POST['Pelajar']['sekolah'] == 'SD') {
            $data = array('1' => '1 (satu)', '2' => '2 (dua)', '3' => '3 (tiga)', '4' => '4 (empat)', '5' => '5 (lima)', '6' => '6 (enam)');
        } else {
            $data = array('1' => '1 (satu)', '2' => '2 (dua)', '3' => '3 (tiga)');
        }

        foreach ($data as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
        }
    }

    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'pelajar-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}