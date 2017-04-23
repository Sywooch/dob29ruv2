<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SearchAdverts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adverts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ad_id') ?>

    <?= $form->field($model, 'ad_sid') ?>

    <?= $form->field($model, 'ad_folder') ?>

    <?= $form->field($model, 'ad_type') ?>

    <?= $form->field($model, 'ad_header') ?>

    <?php // echo $form->field($model, 'ad_comment') ?>

    <?php // echo $form->field($model, 'ad_city') ?>

    <?php // echo $form->field($model, 'ad_price') ?>

    <?php // echo $form->field($model, 'ad_currency') ?>

    <?php // echo $form->field($model, 'ad_period') ?>

    <?php // echo $form->field($model, 'ad_time') ?>

    <?php // echo $form->field($model, 'ad_approved') ?>

    <?php // echo $form->field($model, 'ad_active') ?>

    <?php // echo $form->field($model, 'ad_placed') ?>

    <?php // echo $form->field($model, 'ad_selected') ?>

    <?php // echo $form->field($model, 'ad_selected_start') ?>

    <?php // echo $form->field($model, 'ad_selected_dur') ?>

    <?php // echo $form->field($model, 'ad_special') ?>

    <?php // echo $form->field($model, 'ad_special_start') ?>

    <?php // echo $form->field($model, 'ad_special_dur') ?>

    <?php // echo $form->field($model, 'ad_image1') ?>

    <?php // echo $form->field($model, 'ad_image2') ?>

    <?php // echo $form->field($model, 'ad_image3') ?>

    <?php // echo $form->field($model, 'ad_image4') ?>

    <?php // echo $form->field($model, 'ad_image5') ?>

    <?php // echo $form->field($model, 'ad_image6') ?>

    <?php // echo $form->field($model, 'ad_userid') ?>

    <?php // echo $form->field($model, 'ad_username') ?>

    <?php // echo $form->field($model, 'ad_useremail') ?>

    <?php // echo $form->field($model, 'ad_userphone') ?>

    <?php // echo $form->field($model, 'ad_url') ?>

    <?php // echo $form->field($model, 'ad_rate') ?>

    <?php // echo $form->field($model, 'ad_viewday') ?>

    <?php // echo $form->field($model, 'ad_viewweek') ?>

    <?php // echo $form->field($model, 'ad_viewmonth') ?>

    <?php // echo $form->field($model, 'ad_ipadress') ?>

    <?php // echo $form->field($model, 'ad_ipproxyadress') ?>

    <?php // echo $form->field($model, 'ad_sendviaemail') ?>

    <?php // echo $form->field($model, 'ad_customvalues') ?>

    <?php // echo $form->field($model, 'ad_pass') ?>

    <?php // echo $form->field($model, 'ad_imgdescription') ?>

    <?php // echo $form->field($model, 'ad_advhash') ?>

    <?php // echo $form->field($model, 'ad_time_originated') ?>

    <?php // echo $form->field($model, 'ad_sold') ?>

    <?php // echo $form->field($model, 'ad_responses') ?>

    <?php // echo $form->field($model, 'ad_address') ?>

    <?php // echo $form->field($model, 'ad_up') ?>

    <?php // echo $form->field($model, 'ad_img') ?>

    <?php // echo $form->field($model, 'ad_email_real') ?>

    <?php // echo $form->field($model, 'exist_adv_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
