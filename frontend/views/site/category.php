<?php

use \frontend\components\sitesearch\SiteSearch;
use frontend\components\menu12btns\Menu12Btns;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */

$this->title = 'www.dob29.ru - Category'; 
?>
<div class="site-index">

	<div class="body-content">

		<div class="row">
			<div class="col-sm-9">
				<!-- Статистика объявлений -->
				<p class="help-block">Всего в базе объявлений <strong class="text-primary">666</strong>, за месяц 444, за сутки
					333</p>

				<?= SiteSearch::widget(); ?>

				<?= Menu12Btns::widget(['id' => 1]); ?>
				<br>
				<div class="row">
					<div class="col-sm-5">
						<h4><?= ArrayHelper::getValue( $dataProvider, 'allModels.0.cat_name' ) ?></h4>
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
				<?=
				/** @var $dataProvider frontend\controllers\ */
				yii\widgets\ListView::widget( [
						'dataProvider' => $dataProvider,
						'summary'      => false,
						'itemView'     => function ( $model, $key, $index, $widget ){
							return $this->render( 'single_list_ad', [ 'model' => $model ] );
						},
						'itemOptions'  => [
								'tag' => false,
						],
						'pager'        => [
								'firstPageLabel' => '<i class="fa fa-angle-double-left" aria-hidden="true"></i>',
								'lastPageLabel'  => '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
								'prevPageLabel'  => '<i class="fa fa-angle-left" aria-hidden="true"></i>',
								'nextPageLabel'  => '<i class="fa fa-angle-right" aria-hidden="true"></i>',
						],
				] )
				?>

			</div>

			<div class="col-sm-3">

				<button id="add-ads-main-red" class="btn btn-lg btn-danger btn-block"><i class="fa fa-pencil-square-o"></i>
					Подать объявление
				</button>

			</div>
		</div>

	</div>

</div>
