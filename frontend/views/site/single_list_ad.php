<?php
/**
 * User: Администратор
 * Date: 22.04.2017
 * Time: 0:51
 */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\Adverts;
use common\utils\Utils;

?>
<?php
//print '<pre>';
//print_r ($model['ad_id']);
//print '</pre>';
?>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php //var_dump($model); exit; ?>
<div class="row f-adv">
	<div class="col-sm-2">
		<div class="thumbnail">
			<a href="javascript:void(0);">
				<?= Html::img( '/frontend/web/files/i/1x1.png', [ 'alt' => '' ] ) ?>
			</a>
		</div>
	</div>

	<div class="col-sm-10">
		<a href="<?= Yii::$app->urlManager->createUrl( [ '',
																										 'param' => $model['ad_id'] ] ); ?>">
			<h5><?= Html::encode($model['ad_header']); ?></h5>
		</a>
		<p>
			<small>
										<span><?php
											echo Utils::publicationDay( $model['ad_time_originated'], $model['ad_time'] ); ?>
											&nbsp;&nbsp;&nbsp;<span><i
														class="fa fa-map-marker"></i>г. <?= $model['city_list_name']; ?></span>,&nbsp;&nbsp;&nbsp;<i
													class="fa fa-folder-open"></i><?= $model['cat_name']; ?> / <?= $model['sub_name']?></span>
			</small>
		</p>

		<p class="text-danger price-str"><?= $model['ad_price']; ?> руб.</p>
		<div class="pull-right data-extra">

			<ul class="list-inline">

				<li title="Количество фотографий">
					<i class="fa fa-file-image-o"></i>
					<span class="badge"></span>
				</li>
				<li>Коротко:
					<a href="javascript:void(0);" data-container="body" data-toggle="popover" animation="true"
						 data-placement="top"
						 data-content="<?= Utils::getShortComment( $model['ad_comment'], 140 ); ?>"
						 data-original-title="" title="" style="z-index: -222;">
						<i class="fa fa-align-left"></i>
					</a>
				</li>
				<li class="adv-type">Тип:&nbsp;<strong><span>Продам</span></strong></li>
				<li>Просмотров:&nbsp;<span class="badge">1</span></li>
			</ul>

		</div>

	</div>
	<div class="col-sm-12">
		<hr>
	</div>
</div>