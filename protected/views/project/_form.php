<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form TbActiveForm */
?>

<div class="form">

	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'project-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
	)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldControlGroup($model,'description',array('span'=>5,'maxlength'=>8000)); ?>

	<?php echo $form->textFieldControlGroup($model,'short_description',array('span'=>5,'maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'price',array('span'=>5)); ?>

	<?php echo $form->textFieldControlGroup($model,'location',array('span'=>5,'maxlength'=>800)); ?>

	<?php echo $form->textFieldControlGroup($model,'zipcode',array('span'=>5,'maxlength'=>45)); ?>

	<?php echo $form->textFieldControlGroup($model,'size',array('span'=>5,'maxlength'=>45)); ?>

	<?php echo $form->textFieldControlGroup($model,'name',array('span'=>5,'maxlength'=>400)); ?>

	<?php echo $form->dropDownListControlGroup($model,'development_type_id',CHtml::listData(DevelopmentType::model()->findAll(),'id','name'),array('class'=>'span3','prompt'=>'Select a Development Type')); ?>

	<?php echo $form->dropDownListControlGroup($model,'developer_id',CHtml::listData(Developer::model()->findAll(),'id','name'),array('class'=>'span3','prompt'=>'Select a Developer')); ?>

	<?php echo $form->dropDownListControlGroup($model,'user_id',CHtml::listData(User::model()->findAll(),'id','email'),array('class'=>'span3','prompt'=>'Select a Developer'));	?>


	<div class="form-actions">
		<?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
			'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
			'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->