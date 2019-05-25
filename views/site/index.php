<?php
/* @var $this yii\web\View */

$this->title = 'RollAllDay';
?>

<main class="index_page">
  <section style="background: url(<?php echo Yii::$app->request->baseUrl;?>/img/index/back1.jpg) no-repeat; background-size: contain"> 
    <p>
      Aviator - ростовское сообщество, одержимое велотемой. "Штабом" является Парк Авиаторов, где участники строят единственную в Ростове-на-Дону трассу для МТБ или другими словами - спот, а также каждый день прогрессируют и оттачивают мастество владения велосипедом.
    </p>
  </section> 
  <section>
    <h1 class="wow jackInTheBox" data-wow-offset="200" data-wow-duration="1s">На нашем сайте Вы найдете:</h1>
    <article class="wow rollIn" data-wow-offset="200" data-wow-duration="1s" data-wow-delay="0.5s">       
      <a><img src="<?php echo Yii::$app->request->baseUrl;?>/img/index/news.png" alt="news"></a>
      <a href="publications.html"><h2 class="animated">НОВОСТНЫЕ ПУБЛИКАЦИИ</h2></a>
      <p>Новости со стройки спота в Парке Авиаторов, объявления о сборах,</p>
      <p>а также публикации о соревнованиях, </p>
      <p>где выступали участники сообщества</p>
    </article>
    <hr>
    <article class="wow rollIn" data-wow-duration="1s">
      <a><img src="<?php echo Yii::$app->request->baseUrl;?>/img/index/article.png" alt="articles"></a>
      <a href="publications.html"><h2 class="animated">ОБУЧАЮЩИЕ СТАТЬИ</h2></a>
      <p>Публикации, которые помогут Вам в повышении навыка владения велосипедом</p>
    </article>    
    <article class="wow rollIn" data-wow-duration="1s">
      <a><img src="<?php echo Yii::$app->request->baseUrl;?>/img/index/media.png" alt="articles"></a>
      <a href="publications.html"><h2 class="animated">ОТЧЁТЫ</h2></a>
      <p>Отчёты со спортивных мероприятий, которые посещали</p>
      <p>участники нашего сообщества</p>
    </article>
  </section>
  <section>
    <div>
      <h2>Присоединяйтесь к нам!</h2>
      <p>
        Небольшая группа смельчаков выросла до целого сообщества.
          Над трассой трудится не два человека, а уже много больше, 
          имеется финансирование от магазин ВелоАС. Также участники посещают соревнования и спортивные сборы, 
          активно развивают свои навыки в сфере экстремального велоспорта. 
      </p>
    </div>
    <div>
      <img src="<?php echo Yii::$app->request->baseUrl;?>/img/index/back2.jpg" alt="">
    </div>      
  </section>
</main>