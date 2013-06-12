<?php
/* @var $this Controller */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />-->
        <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />-->
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/scc_admin.css" />
        <link type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/include/js/menu-admin/menu.css" rel="stylesheet" />
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/include/js/menu-admin/menu.js"></script>

    </head>

    <body>
        <div class="header-style"></div>
        <?php include_once 'header.php'; ?>
        <div class="container" id="page">
            <?php if (Yii::app()->session['admin'] != NULL): ?>
            <?php include_once 'nav-menu.php'; ?>
            <?php endif ?>
            <?php echo $content; ?>
        </div><!-- page -->
        <?php include_once 'bottom.php'; ?>
        <div class="header-style bottomh"></div>
        <div style="display: none;">Copyright &copy; 2013 <a href="http://apycom.com/"></a></div>
    </body>
</html>
