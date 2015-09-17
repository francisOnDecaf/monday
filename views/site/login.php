<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-4 col-md-offset-4 login-container">
        <?= Html::img('/images/logo.png', ['class'=>'logo-login']); ?>
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
            'fieldConfig' => [
                'template' => "<div class=\"col-lg-12 \">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ],
        ]); ?>

            <?= $form->field($model, 'username')->textInput(array('placeholder' => 'Username'));  ?>

            <?= $form->field($model, 'password')->passwordInput()->textInput(array('placeholder' => 'Password')); ?>

            <div class="form-group">
                <div class="col-lg-12">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary col-md-12', 'name' => 'login-button']) ?>
                </div>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
