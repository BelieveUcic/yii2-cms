<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yiichina\select2\Select2;
use yiichina\icheck\ICheck;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'roles')->widget(Select2::className(), ['items' => $model->roleItems, 'bootstrapTheme' => true, 'multiple' => true, 'select2Options' => ['width' => '100%']]) ?>

    <?= $form->field($model, 'group')->widget(Select2::className(), ['items' => $model->groupItems, 'bootstrapTheme' => true, 'select2Options' => ['width' => '100%']]) ?>

    <?= $form->field($model, 'status')->widget(ICheck::className(), ['type' => ICheck::TYPE_RADIO_LIST, 'items' => $model->statusList]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
