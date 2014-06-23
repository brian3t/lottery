<?php
/* @var $this ProjectMessageController */
/* @var $model ProjectMessage */
/* @var $form TbActiveForm */
?>

<div class="form">

	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'project-message-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
	)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldControlGroup($model,'description',array('span'=>5,'maxlength'=>255)); ?>

	<?php echo $form->textFieldControlGroup($model,'dateCreated',array('span'=>5)); ?>

	<?php echo $form->textFieldControlGroup($model,'dateChanged',array('span'=>5)); ?>

	<?php echo $form->dropDownListControlGroup($model,'user_id',CHtml::listData(User::model()->findAll(),'id','name'),array('class'=>'span3','prompt'=>'Select a User')); ?>

	<?php echo $form->dropDownListControlGroup($model,'old_project_status_id',CHtml::listData(ProjectStatus::model()->findAll(),'id','name'),array('class'=>'span3','prompt'=>'Select old status')); ?>

	<?php echo $form->dropDownListControlGroup($model,'new_project_status_id',CHtml::listData(ProjectStatus::model()->findAll(),'id','name'),array('class'=>'span3','prompt'=>'Select old status')); ?>

	<?php echo $form->dropDownListControlGroup($model,'project_id',CHtml::listData(Project::model()->findAll(),'id','name'),array('class'=>'span3','prompt'=>'Select a Project')); ?>

	<?php echo $form->textFieldControlGroup($model,'message',array('span'=>5,'maxlength'=>2000)); ?>

	<div class="form-actions">
		<?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
			'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
			'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->