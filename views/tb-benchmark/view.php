<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbBenchmark */

$this->title = $model->framework;
$this->params['breadcrumbs'][] = ['label' => 'Tb Benchmarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->framework;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-benchmark-view">

    <h1><?= Html::encode($model->framework) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'framework',
            'nilai',
            'penggunaan',
        ],
    ]) ?>

</div>
