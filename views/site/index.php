<?php
$color = "red";
/** @var yii\web\View $this */


use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Aeroflot</h1>

        <p class="lead">Что подарить тому, у кого всё есть? А что, если путешествие?</p>

      
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
			
                <h1>Горячие туры</h1>

                <p> это программа субсидирования процентных ставок по кредитам на покупку жилья: государство помогает отдельным категориям граждан приобрести собственную недвижимость в ипотеку по сниженной процентной ставке</p>

                <p><?= Html::a('Перейти', ['site/gipoteka']) ?></p>
			  </div>	
				
            <div class="col-lg-3">
                <h1>Деловой проездной</h1>

                <p> Специально для тех пассажиров, которые регулярно совершают полеты на рейсах авиакомпании, мы предлагаем удобный тарифный продукт «Деловой проездной». Вы можете воспользоваться предложением на направлениях:</p>
				
				<p><?= Html::a('Перейти', ['site/sipoteka']) ?></p>
               
            </div>
            <div class="col-lg-3">
                <h1>Для пенсионеров</h1>

                <p>  с 17 августа вводит специальный тариф для пассажиров пенсионного возраста на внутрироссийских маршрутах из Москвы, Санкт-Петербурга и Красноярска и в обратном направлении. Новое предложение Аэрофлота значительно расширит льготные условия перевозки для данной категории граждан.</p>

                <p><?= Html::a('Перейти', ['site/vipoteka']) ?></p>
            </div>
        
		
		<div class="col-lg-3">
		
                <h1>Подарочный сертификат</h1>

                <p> Подарите своим близким радость путешествия и свободу выбора!</p>
				<p><?= Html::a('Перейти', ['site/itipoteka']) ?></p>
				
				
              
        </div>

    </div>
</div>
