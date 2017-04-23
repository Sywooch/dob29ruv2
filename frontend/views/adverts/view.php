<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Adverts */

$this->title = $model->ad_id;
$this->params['breadcrumbs'][] = ['label' => 'Adverts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adverts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ad_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ad_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ad_id',
            'ad_sid',
            'ad_folder',
            'ad_type',
            'ad_header:ntext',
            'ad_comment:ntext',
            'ad_city',
            'ad_price',
            'ad_currency',
            'ad_period',
            'ad_time:datetime',
            'ad_approved',
            'ad_active',
            'ad_placed',
            'ad_selected',
            'ad_selected_start',
            'ad_selected_dur',
            'ad_special',
            'ad_special_start',
            'ad_special_dur',
            'ad_image1',
            'ad_image2',
            'ad_image3',
            'ad_image4',
            'ad_image5',
            'ad_image6',
            'ad_userid',
            'ad_username',
            'ad_useremail:email',
            'ad_userphone',
            'ad_url:url',
            'ad_rate',
            'ad_viewday',
            'ad_viewweek',
            'ad_viewmonth',
            'ad_ipadress',
            'ad_ipproxyadress',
            'ad_sendviaemail:email',
            'ad_customvalues:ntext',
            'ad_pass',
            'ad_imgdescription:ntext',
            'ad_advhash:ntext',
            'ad_time_originated:datetime',
            'ad_sold',
            'ad_responses',
            'ad_address:ntext',
            'ad_up',
            'ad_img',
            'ad_email_real:email',
            'exist_adv_id',
        ],
    ]) ?>

</div>
