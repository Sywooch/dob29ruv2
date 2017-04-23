<?php

use yii\helpers\Html;
use \frontend\components\sitesearch\SiteSearch;
use frontend\components\menu12btns\Menu12Btns;
use frontend\models\Adverts;
use yii\grid\GridView;

/* @var $this yii\web\View */

$this->title = 'www.dob29.ru - Объявления';
?>
<div class="site-index">

	<!--<div class="jumbotron">
		<h1>Congratulations!</h1>

		<p class="lead">You have successfully created your Yii-powered application.</p>

		<p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
	</div>-->

	<div class="body-content">

		<div class="row">
			<div class="col-sm-9">
				<!-- Статистика объявлений -->
				<p class="help-block">Всего в базе объявлений <strong class="text-primary">666</strong>, за месяц 444, за сутки
					333</p>

				<?= SiteSearch::widget(); ?>

				<p class="help-block">
					Пример: nokia&nbsp;&nbsp;
					<b><a id="ext-search-link" href="javascript:void();"><i class="fa fa-search-plus"></i>&nbsp;&nbsp;Расширенный
							поиск</a></b>
				</p>

				<?= Menu12Btns::widget(); ?>
				<br>
				<div class="row">
					<div class="col-sm-5">
						<h4>Последние добавленные объявления</h4>
					</div>
					<div class="col-sm-7 text-right">

						<div id="list-btn-a-link" class="btn-group" role="group" aria-label="...">
							<button id="ads-sort" type="button" class="btn btn-default"><i class="fa fa-sort"></i>Сортировать</button>
							<a id="list-btn-toggle-a" class="btn btn-default" href="javascript:void(0);"
								 title="Вывод объявлений списком"><i class="fa fa-th-list"></i></a>
							<a id="block-btn-toggle-a" class="btn btn-default" href="javascript:void(0);"
								 title="Вывод объявлений блоками"><i class="fa fa-th-large"></i></a>
						</div>
					</div>
					<div class="col-sm-12">
						<hr>
					</div>
				</div>

				<?php
//				print '<pre>';
//				var_dump($dataProvider);
//				print '</pre>';
				?>

				<?=
				/** @var $dataProvider frontend\controllers\ */
				yii\widgets\ListView::widget([
						'dataProvider' => $dataProvider,
//						'options' => [
//								'class' => 'list-wrapper',
//								'id' => 'list-wrapper',
//						],
//						'layout' => "{pager}\n{items}\n{summary}",
						'summary' => false,
						'itemView' => function ($model, $key, $index, $widget) {
							return $this->render('single_list_ad',['model' => $model]);

							// or just do some echo
//							 return $model->ad_id . '_' . $model->ad_header;
						},
						'itemOptions' => [
								'tag' => false,
						],
						'pager' => [
								'firstPageLabel' => '<i class="fa fa-angle-double-left" aria-hidden="true"></i>',
								'lastPageLabel' => '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
								'prevPageLabel' => '<i class="fa fa-angle-left" aria-hidden="true"></i>',
								'nextPageLabel' => '<i class="fa fa-angle-right" aria-hidden="true"></i>',
						],
				])
						?>

			</div>

			<div class="col-sm-3">

				<button id="add-ads-main-red" class="btn btn-lg btn-danger btn-block"><i class="fa fa-pencil-square-o"></i> Подать объявление</button>

			</div>
		</div>

	</div>

</div>
