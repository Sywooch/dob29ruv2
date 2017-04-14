<?php
/**
 * User: Администратор
 * Date: 05.04.2017
 * Time: 0:14
 */
use frontend\components\sitesearch\SiteSearch;
use frontend\components\sitesearch\SearchForm;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$model = new SearchForm();

$form = ActiveForm::begin( [ 'id'      => 'searchForm',
                             'options' => [ 'class' => 'form' ] ] );

?>
<?=
$form->field( $model, 'qact' )->hiddenInput( [ 'options' => [ 'value' => 'search_adv' ] ] )->label( false )->error( false ),
$form->field( $model, 'SortBy' )->hiddenInput( [ 'options' => [ 'value' => 'Time' ] ] )->label( false )->error( false ),
$form->field( $model, 'Dir' )->hiddenInput( [ 'option' => [ 'value' => 'd' ] ] )->label( false )->error( false ),
$form->field( $model, 'City' )->hiddenInput( [ 'option' => [ 'value' => '-1' ] ] )->label( false )->error( false ),
$form->field( $model, 'Folder' )->hiddenInput( [ 'option' => [ 'value' => '-1' ] ] )->label( false )->error( false ),
$form->field( $model, 'Type' )->hiddenInput( [ 'option' => [ 'value' => '-1' ] ] )->label( false )->error( false ),
$form->field( $model, 'Price_Start' )->hiddenInput( [ 'option' => [ 'value' => '' ] ] )->label( false )->error( false ),
$form->field( $model, 'Price_End' )->hiddenInput( [ 'option' => [ 'value' => '' ] ] )->label( false )->error( false ),
$form->field( $model, 'Currency' )->hiddenInput( [ 'option' => [ 'value' => '1' ] ] )->label( false )->error( false ),
$form->field( $model, 'Period' )->hiddenInput( [ 'option' => [ 'value' => '3000' ] ] )->label( false )->error( false ),
$form->field( $model, 'OwnerAdvID' )->hiddenInput( [ 'option' => [ 'value' => '0' ] ] )->label( false )->error( false ),
$form->field( $model, 'searchWord', [
    'inputTemplate' => '<div class="input-group">{input}<span class="input-group-btn"><button id="sub-btn-search" class="btn btn-primary" type="button">Найти</button></span></div>',
    'inputOptions'  => [ 'placeholder' => 'Поиск объявления',
                         'autofocus'   => true,
                         'style'       => '' ]
] )->label( false ); ?>

<?php ActiveForm::end(); ?>
