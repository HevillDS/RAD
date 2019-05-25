<?php

use yii\helpers\Html;
use \yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'Регистрация';
// ?>

<main class="signUp__page">
<h1>Авторизация</h1>
<?php
  $form = ActiveForm::begin([
    'class'=>'horizontal',
  ]);
?>

<section>
  <br>
  <br>
  <br>
  <?= $form->field($login_model,'email')->textInput(['autofocus'=>true]) ?>
  <span class="bar"></span>
</section>

<section>
  <br>
  <br>
  <br>    
  <?= $form->field($login_model,'password')->passwordInput()?>
  <span class="bar"></span>
</section>

<div>
  <button type="submit">Вход</button><br>
  <a href=<?= Url::toRoute(['site/registry'])?>>Нет аккаунта?</a>
</div>

<?php ActiveForm::end(); ?>

</main>
