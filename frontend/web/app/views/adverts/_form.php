<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Adverts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adverts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ad_sid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ad_folder')->textInput() ?>

    <?= $form->field($model, 'ad_type')->textInput() ?>

    <?= $form->field($model, 'ad_header')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ad_comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ad_city')->textInput() ?>

    <?= $form->field($model, 'ad_price')->textInput() ?>

    <?= $form->field($model, 'ad_currency')->textInput() ?>

    <?= $form->field($model, 'ad_period')->textInput() ?>

    <?= $form->field($model, 'ad_time')->textInput() ?>

    <?= $form->field($model, 'ad_approved')->textInput() ?>

    <?= $form->field($model, 'ad_active')->textInput() ?>

    <?= $form->field($model, 'ad_placed')->textInput() ?>

    <?= $form->field($model, 'ad_selected')->textInput() ?>

    <?= $form->field($model, 'ad_selected_start')->textInput() ?>

    <?= $form->field($model, 'ad_selected_dur')->textInput() ?>

    <?= $form->field($model, 'ad_special')->textInput() ?>

    <?= $form->field($model, 'ad_special_start')->textInput() ?>

    <?= $form->field($model, 'ad_special_dur')->textInput() ?>

    <?= $form->field($model, 'ad_image1')->textInput() ?>

    <?= $form->field($model, 'ad_image2')->textInput() ?>

    <?= $form->field($model, 'ad_image3')->textInput() ?>

    <?= $form->field($model, 'ad_image4')->textInput() ?>

    <?= $form->field($model, 'ad_image5')->textInput() ?>

    <?= $form->field($model, 'ad_image6')->textInput() ?>

    <?= $form->field($model, 'ad_userid')->textInput() ?>

    <?= $form->field($model, 'ad_username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ad_useremail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ad_userphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ad_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ad_rate')->textInput() ?>

    <?= $form->field($model, 'ad_viewday')->textInput() ?>

    <?= $form->field($model, 'ad_viewweek')->textInput() ?>

    <?= $form->field($model, 'ad_viewmonth')->textInput() ?>

    <?= $form->field($model, 'ad_ipadress')->textInput() ?>

    <?= $form->field($model, 'ad_ipproxyadress')->textInput() ?>

    <?= $form->field($model, 'ad_sendviaemail')->textInput() ?>

    <?= $form->field($model, 'ad_customvalues')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ad_pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ad_imgdescription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ad_advhash')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ad_time_originated')->textInput() ?>

    <?= $form->field($model, 'ad_sold')->textInput() ?>

    <?= $form->field($model, 'ad_responses')->textInput() ?>

    <?= $form->field($model, 'ad_address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ad_up')->textInput() ?>

    <?= $form->field($model, 'ad_img')->textInput() ?>

    <?= $form->field($model, 'ad_email_real')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exist_adv_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
