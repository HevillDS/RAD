<?php

use yii\helpers\Url;
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body>
  <?php $this->beginBody() ?>
  <header>
    <nav>
      <div class="menu__icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <?php
        echo Menu::widget([
          'items' => [
            ['label' => 'Авиатор', 'url' => ['/site/index'], 'options'=>['class'=>'menu__links-item']],
            ['label' => 'Публикации', 'url' => ['/site/publications'], 'options'=>['class'=>'menu__links-item']],
            ['label' => 'Регистрация', 'url' => ['/site/registry'], 'options'=>['class'=>'menu__links-item'], 'visible'=>Yii::$app->user->isGuest],
            Yii::$app->user->isGuest ?
                ['label' => 'Вход', 'url' => ['/site/login'], 'options'=>['class'=>'menu__links-item']] :
                [
                    'label' => 'Выход (' . Yii::$app->user->identity->name . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post'],
                    'options'=>['class'=>'menu__links-item']
                ],
            ],
            'options' => [
              'class' => 'menu__links',
              'data'=>'menu',
            ],
      ]);
      ?>
    </nav>
  </header>

    <?= $content ?>

    <footer>
      <section>
        <a class="animated" href="#" target="_blank" ><img src="<?php echo Yii::$app->request->baseUrl;?>/img/logo/youtube.png" alt="YTlogo" ></a>
        <a class="animated" href="#" target="_blank"><img src="<?php echo Yii::$app->request->baseUrl;?>/img/logo/telegram.png" alt="TELEGRAMlogo"></a>
        <a class="animated" href="#" target="_blank"><img src="<?php echo Yii::$app->request->baseUrl;?>/img/logo/instagram.png" alt="INSTAGRAMlogo"></a>
        <a class="animated" href="https://vk.com/aviator_open" target="_blank"><img src="<?php echo Yii::$app->request->baseUrl;?>/img/logo/vk.png" alt="VKlogo"></a>
      </section>
    </footer>

  <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
