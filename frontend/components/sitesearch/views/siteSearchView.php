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

$form = ActiveForm::begin( [ 'id'      => 'searchFrm',
                                   'options' => [ 'class' => 'form-inline' ] ] );

        $this->form->field( $this->model, 'qact' )->hiddenInput( [ 'options' => [
            'value' => 'search_adv' ] ] );

//    <input type="hidden" name="qact" value="search_adv">
//    <input type="hidden" name="SortBy" value="Time">
//    <input type="hidden" name="Dir" value="d">
//    <input type="hidden" name="City" value="-1">
//    <input type="hidden" name="Folder" value="-1">
//    <input type="hidden" name="Type" value="-1">
//    <input type="hidden" name="Price_Start" value="">
//    <input type="hidden" name="Price_End" value="">
//    <input type="hidden" name="Currency" value="1">
//    <input type="hidden" name="Period" value="3000">
//    <input type="hidden" name="OwnerAdvID" value="0">

var_dump($this->form);
        $this->form->field( $this->model, 'searchWord' )->textInput( [ 'autofocus'   => true,
                                                                       'placeholder' => 'Поиск объявления' ] )->label( '' );
//
Html::submitButton( 'Submit', [ 'class' => 'btn btn-primary',
                                'style' => 'margin-bottom: 10px;' ] );

ActiveForm::end();
