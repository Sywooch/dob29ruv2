<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register( $this );
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode( $this->title ) ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
	<?php
	NavBar::begin( [
			'brandLabel' => 'dob29.ru',
			'brandUrl'   => Yii::$app->homeUrl,
			'options'    => [
					'class' => 'navbar-inverse navbar-fixed-top',
			],
	] );
	$menuItems0 = [
			[ 'label' => '<i class="fa fa-list-alt"></i> Объявления',
				'url'   => [ '/site/index' ] ],
			[ 'label' => 'Контакты',
				'url'   => [ '/site/contact' ] ],
	];
	if ( Yii::$app->user->isGuest ){
		$menuItems[] = [ 'label' => 'Signup',
										 'url'   => [ '/site/signup' ] ];
		$menuItems[] = [ 'label' => 'Login',
										 'url'   => [ '/site/login' ] ];
	} else {

		$menuItems[] = '<li>'
				. '<noindex><div id="social-maintop">
              <a id="vk" href="javascript:void()" class="social_share" data-type="vk">
              <span class="fa-stack fa-lg" title="Вконтакте">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-vk fa-stack-1x fa-inverse"></i>
              </span>
              </a>
              <a id="ok" href="javascript:void()" class="social_share" data-type="ok"><span class="fa-stack fa-lg" title="Одноклассники"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-odnoklassniki fa-stack-1x fa-inverse"></i></span></a>
              <a id="fb" href="javascript:void()" class="social_share" data-type="fb"><span class="fa-stack fa-lg" title="Фейсбук"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a>
              <a id="tw" href="javascript:void()" class="social_share" data-type="tw"><span class="fa-stack fa-lg" title="Твиттер"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a>
              <a id="gg" href="javascript:void()" class="social_share" data-type="gg"><span class="fa-stack fa-lg" title="Google+"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x fa-inverse"></i></span></a>
              </div></noindex></li><!-- Socials -->
        <li>'
				. Html::beginForm( [ '/site/logout' ], 'post' )
				. Html::submitButton(
						'Выйти (' . Yii::$app->user->identity->username . ')',
						[ 'class' => 'btn btn-link logout' ]
				)
				. Html::endForm()
				. '</li>';

	}
	echo Nav::widget( [
			'options'      => [ 'class' => 'nav navbar-nav' ],
			'encodeLabels' => false,

			'items' => $menuItems0,
	] );
	echo Nav::widget( [
			'options' => [ 'class' => 'navbar-nav navbar-right' ],
			'items'   => $menuItems,
	] );
	NavBar::end();
	?>

	<div class="container">
		<?= Breadcrumbs::widget( [
				'links' => isset( $this->params['breadcrumbs'] ) ? $this->params['breadcrumbs'] : [ ],
		] ) ?>
		<?= Alert::widget() ?>
		<?= $content ?>
	</div>
</div>

<footer class="footer">
	<div class="container">
		<p class="pull-left">2014&nbsp;-&nbsp;<?= date( 'Y' ) ?>&nbsp;&copy;&nbsp;www.dob29.ru</p>

		<p class="pull-right"></p>
	</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
