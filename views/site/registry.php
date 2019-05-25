<?php

use yii\helpers\Html;
use \yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'Регистрация';
// ?>

<main class="signUp__page">
<h1>Регистрация</h1>
<?php
    $form = ActiveForm::begin([
      'class'=>'horizontal',
    ]);
?>

<section>
  <br>
  <br>
  <br>
  <?= $form->field($model,'name')->textInput(['autofocus'=>true]) ?>
  <span class="bar"></span>
</section>

<section>
<br>
<br>
<br>
    <?= $form->field($model,'email')->textInput(['autofocus'=>true]) ?>
    <span class="bar"></span>
</section>

<section>
<br>
<br>
<br>    
    <?= $form->field($model,'password')->passwordInput()?>
    <span class="bar"></span>
</section>

<button type="submit">Зарегистрироваться</button>

<?php
    ActiveForm::end();
?>

</main>

