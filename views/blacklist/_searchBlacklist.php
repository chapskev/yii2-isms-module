<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var dinhtrung\isms\models\BlacklistSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="blacklist-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'fid') ?>

    <?= $form->field($model, 'isdn') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('isms', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('isms', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
