<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$ispage = $this->id . '/' . $this->action->id;
?>
<div id="menu">
    <ul class="menu">
        <li <?php ($ispage == 'home/index') ? print 'class="current"'  : ''; ?>><a href="<?php print Yii::app()->createUrl('/home/index'); ?>"><span>Home <span class="subtext">home</span></span></a></li>
        <li <?php ($ispage == 'profil/index') ? print 'class="current"'  : ''; ?>><a href="<?php print Yii::app()->createUrl('/profil/index'); ?>"><span>Profil <span class="subtext">profil</span></span></a></li>
        <li <?php ($ispage == 'pendaftaran/index') ? print 'class="current"'  : ''; ?>><a href="<?php print Yii::app()->createUrl('/pendaftaran/index'); ?>"><span>Pendaftaran <span class="subtext">pendaftaran</span></span></a></li>
        <li <?php ($ispage == 'program_studi/index') ? print 'class="current"'  : ''; ?>><a href="<?php print Yii::app()->createUrl('/program_studi/index'); ?>"><span>Program Studi <span class="subtext">program studi</span></span></a></li>
        <?php if (Yii::app()->session['student'] == NULL) { ?>
            <li <?php ($ispage == 'account/index') ? print 'class="last current"'  : 'class="last"'; ?>><a href="<?php print Yii::app()->createUrl('/account/index'); ?>"><span>Login <span class="subtext">login</span></span></a></li>
        <?php } else { ?>
            <li class="last"><a href="<?php print Yii::app()->createUrl('/ssc/logout'); ?>"><span>Logout</span></a></li>
            <?php } ?>
    </ul>
</div>

