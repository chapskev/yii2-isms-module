<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var dinhtrung\isms\models\Organization $model
 */

$this->title = Yii::t('isms', 'Create {modelClass}', [
  'modelClass' => 'Organization',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('isms', 'Organizations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organization-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formOrganization', [
        'model' => $model,
    ]) ?>

</div>
