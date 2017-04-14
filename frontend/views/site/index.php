<?php

use \yii\bootstrap\Button;
use \frontend\components\sitesearch\SiteSearch;
use \frontend\components\menu12btns\Menu12Btns;

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
					<div class="col-sm-12"><hr></div>
				</div>


				<?php
				//
				/** @var $ads frontend\models\Adverts */
				foreach( $ads as $key => $v ){ ?>
					<div class="row f-adv">
						<div class="col-sm-2">
							<div class="thumbnail">
								<a href="javascript:void(0);">
									<img src="/frontend/web/files/i/1x1.png" alt="" width="149" height="112">
								</a>
							</div>
						</div>

						<div class="col-sm-10">
							<a href="<?= Yii::$app->urlManager->createUrl( [ '',
																															 'param' => $v['ad_id'] ] ); ?>">
								<h5><?= $v["ad_header"]; ?></h5>
							</a>
						</div>
						<div class="clearfix">
							<hr>
						</div>
					</div>
				<?php } ?>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
					dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
					ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
					fugiat nulla pariatur.</p>

				<p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
			</div>

			<div class="col-sm-3">

				<?php echo Button::widget( [
						'label'       => '<i class="fa fa-pencil-square-o"></i> Добавить объявление',
						'encodeLabel' => false,
						'options'     => [
								'id'    => 'add-adv-btn',
								'class' => 'btn-lg btn-danger btn-block',
								'style' => 'border-bottom-width: 4px; box-shadow: 0 1px 2px rgba(0,0,0,0.3); text-transform: uppercase; font-size: 14px;'
						]
				] );
				?>


				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
					dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
					ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
					fugiat nulla pariatur.</p>

				<p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>

			</div>
		</div>

	</div>

</div>
