	<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use dosamigos\tinymce\TinyMce;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="user-search">
	<?php $form = ActiveForm::begin([
		'action' => ['index'],
		'method' => 'get',
	]); ?>
	
	<?php $form = ActiveForm::begin(); ?>
		<!-- acc section -->
		<div class="accsection">
			<div class="topwrap">
				<div class="row">
					<div class="col-lg-3 col-md-3"><?= $form->field($model, 'type')->dropDownList(ArrayHelper::map($type, 'id', 'name'), ['prompt' => Yii::t('admin', 'Please choose your type')]) ?></div>
					<div class="col-lg-3 col-md-3"><?= $form->field($model, 'status')->dropDownList(ArrayHelper::map($status, 'id', 'name'), ['prompt' => Yii::t('admin', 'Please choose your status')]) ?></div>
					<div class="col-lg-3 col-md-3"><?= $form->field($model, 'email')->textInput(['maxlength' => 32, 'placeholder' => Yii::t('admin', 'email')]) ?></div>
					<div class="col-lg-3 col-md-3"><?= $form->field($model, 'facebook_login_id')->textInput(['maxlength' => 32, 'placeholder' => Yii::t('admin', 'Facebook login id')]) ?></div>
				</div>
				
				<div class="row">
					<div class="col-lg-3 col-md-3"><?= $form->field($model, 'first_name')->textInput(['maxlength' => 32, 'placeholder' => Yii::t('admin', 'First name')]) ?></div>
					<div class="col-lg-3 col-md-3"><?= $form->field($model, 'last_name')->textInput(['maxlength' => 32, 'placeholder' => Yii::t('admin', 'Last name')]) ?></div>
					<div class="col-lg-3 col-md-3"><?= $form->field($model, 'identifier')->textInput(['maxlength' => 32, 'placeholder' => Yii::t('admin', 'Identifier')]) ?></div>
					<div class="col-lg-3 col-md-3"><?= $form->field($model, 'age')->textInput(['maxlength' => 2, 'placeholder' => Yii::t('admin', 'Age')]) ?></div>
				</div>
				
				<div class="row">
					<div class="col-lg-3 col-md-3"> <?= $form->field($model, 'address')->textInput(['maxlength' => 45, 'placeholder' => Yii::t('admin', 'Address')]) ?></div>
					<div class="col-lg-3 col-md-3"> <?= $form->field($model, 'city_id')->dropDownList(ArrayHelper::map($cityList, 'id', 'name'), ['prompt' => Yii::t('admin', 'Please choose your city')]) ?></div>
					<div class="col-lg-3 col-md-3"> <?= $form->field($model, 'address')->textInput(['maxlength' => 45, 'placeholder' => Yii::t('admin', 'Address')]) ?></div>
					<div class="col-lg-3 col-md-3"> <?= $form->field($model, 'contact_number')->textInput(['maxlength' => 32, 'placeholder' => Yii::t('admin', 'Phone')]) ?></div>
					<div class="col-lg-3 col-md-3">
						<?php $form->field($model, 'create_datetime')
								->widget(DatePicker::className(), [
									'dateFormat' => 'php:Y-m-d',
									'options' => [
										'class' => 'form-control',
										'placeholder' => 'Create date'
									],
								]);
						?>
					</div>
				</div>
					
					<div class="clearfix"></div>
					<div>
						<?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
						<?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
					</div>
			</div>
		</div><!-- acc section END -->
	<?php ActiveForm::end(); ?>
	<br /><?php if (Yii::$app->session->getFlash('update_success')) {?><div class='message_success'><?= Yii::$app->session->getFlash('update_success'); ?> <?= Yii::$app->session->getFlash('account_delete'); ?></div><br /><?php } ?>
</div><!-- POST -->
