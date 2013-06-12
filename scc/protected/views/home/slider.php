<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php

$this->widget('ext.xflexslider.XFlexSlider', array(
    'slides' => array(
//use content
        'slide1' => array(
            'id' => 'slide1',
            'caption' => 'Captions and cupcakes. Winning combination.',
            'thumb' => Yii::app()->request->baseUrl . '/images/slide1.jpg',
            'content' => '<img src="' . Yii::app()->request->baseUrl . '/images/slide1.jpg" />', '<img src="' . Yii::app()->request->baseUrl . '/images/slide1.jpg" />',
        ),
        'slide2' => array(
            'id' => 'slide2',
            'caption' => 'Captions and cupcakes. Winning combination.',
            'thumb' => Yii::app()->request->baseUrl . '/images/slide2.jpg',
            'content' => '<img src="' . Yii::app()->request->baseUrl . '/images/slide2.jpg" />', '<img src="' . Yii::app()->request->baseUrl . '/images/slide2.jpg" />',
        ),
        'slide3' => array(
            'id' => 'slide1',
            'caption' => 'Captions and cupcakes. Winning combination.',
            'thumb' => Yii::app()->request->baseUrl . '/images/slide1.jpg',
            'content' => '<img src="' . Yii::app()->request->baseUrl . '/images/slide1.jpg" />', '<img src="' . Yii::app()->request->baseUrl . '/images/slide1.jpg" />',
        ),
        'slide4' => array(
            'id' => 'slide2',
            'caption' => 'Captions and cupcakes. Winning combination.',
            'thumb' => Yii::app()->request->baseUrl . '/images/slide2.jpg',
            'content' => '<img src="' . Yii::app()->request->baseUrl . '/images/slide2.jpg" />', '<img src="' . Yii::app()->request->baseUrl . '/images/slide2.jpg" />',
        ),
    //use view
//        'slide2'=>array(
//            'caption'=>'This image is wrapped in a link!',
//            'view'=>'_slide2',
//        ),
    ),
    'flexsliderOptions' => array(
        'animation' => "'slide'",
        'slideDirection' => "'vertical'",
        'mousewheel' => true,
        'animationLoop' => true,
        'smoothHeight' => true,
    ),
));
?>
