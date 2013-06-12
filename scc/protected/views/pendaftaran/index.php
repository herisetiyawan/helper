<?php
/* @var $this PendaftaranController */

$this->breadcrumbs = array(
    'Pendaftaran',
);
?>
<div class="content" style="background-color: white;padding: 8px;">
    <?php
    $this->renderPartial('_form', array(
        'model' => $model,
    ));
    ?>
</div>
