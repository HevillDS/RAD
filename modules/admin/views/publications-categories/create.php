<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PublicationsCategories */

$this->title = 'Create Publications Categories';
$this->params['breadcrumbs'][] = ['label' => 'Publications Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publications-categories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
