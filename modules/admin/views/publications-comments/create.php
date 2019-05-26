<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PublicationsComments */

$this->title = 'Create Publications Comments';
$this->params['breadcrumbs'][] = ['label' => 'Publications Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publications-comments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
