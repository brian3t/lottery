<?php
/* @var $this LocationController */
/* @var $model Location */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'location-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'store_name',array('span'=>5,'maxlength'=>500)); ?>

            <?php echo $form->textFieldControlGroup($model,'address_line_1',array('span'=>5,'maxlength'=>800)); ?>

            <?php echo $form->textFieldControlGroup($model,'address_line_2',array('span'=>5,'maxlength'=>800)); ?>

            <?php echo $form->textFieldControlGroup($model,'city',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'state',array('span'=>5,'maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'zipcode',array('span'=>5,'maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'country_code',array('span'=>5,'maxlength'=>2)); ?>

            <?php echo $form->textFieldControlGroup($model,'note',array('span'=>5,'maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'latitude',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'longitude',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->