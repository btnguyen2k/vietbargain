<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
?>

<div class="post">
    <?php $form = ActiveForm::begin(['options' => ['class' => 'form newtopic', 'id' => 'login-form']]); ?>
        <div class="postinfotop">
            <h2><?php echo Yii::t('admin', 'Login'); ?></h2>
        </div>

        <div class="login-panel panel panel-default">
            <div class="panel-body">
                <fieldset>
                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email']) ?>

                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => Yii::t('admin', 'Password')]) ?>
                    <!-- Change this to a button or input when using this as a form -->
                    <a href="javascript:$('form#login-form').submit();" class="btn btn-lg btn-success btn-block">
                        <?php echo Yii::t('admin', 'Login'); ?></a>
                </fieldset>

                <?= Html::a(Yii::t('admin', 'Forget password?'), ['recover-password']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>