<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\personal\models\Personal */

$this->title = $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Personals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->user_id], [
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
            'user.username',
            'user.email',
            'department.department',
            'firstname',
            'lastname',
            'address:ntext',
            'tel',
            'color',
        ],
    ]) ?>

</div>
