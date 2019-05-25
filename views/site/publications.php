<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Публикации';
// ?>

<main class="publication__main">
    <aside>
        <h2>Категории</h2>
        <ul>
          <li><a href="#">Обучающие</a></li>
          <li><a href="#">Путешествия</a></li>
          <li><a href="#">Новости</a></li>
        </ul>
      </aside>
    <article>
      <section>
        <h2><a href=<?= Url::toRoute(['site/publication'])?>>Название статьи</a></h2>
        <img src="<?php echo Yii::$app->request->baseUrl;?>/img/publication/publication.jpg" alt="">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum laboriosam cupiditate fuga quam numquam volupt
          ate obcaecati at, iure ducimus odit provident officia recusandae eius autem sapiente labore vero qui. Natus.
          ate obcaecati at, iure ducimusc
        </p>
      </section>
    </article>
  </main>
