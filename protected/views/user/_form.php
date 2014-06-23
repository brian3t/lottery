<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->dropDownListControlGroup($model,'team_id',CHtml::listData(Team::model()->findAll(),'id','description'),array('class'=>'span3','prompt'=>'Select a team')); ?>

            <?php echo $form->textFieldControlGroup($model,'roles',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'name',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'cea_number',array('span'=>5,'maxlength'=>80)); ?>

            <?php echo $form->textFieldControlGroup($model,'nric',array('span'=>5,'maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'avatar',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'email',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->passwordFieldControlGroup($model,'password',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'username',array('span'=>5,'maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'status',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'password_strategy',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'requires_new_password',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'reset_token',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'login_attempts',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'login_time',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'login_ip',array('span'=>5,'maxlength'=>32)); ?>

            <?php echo $form->textFieldControlGroup($model,'activation_key',array('span'=>5,'maxlength'=>128)); ?>

            <?php echo $form->textFieldControlGroup($model,'validation_key',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'create_time',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'update_time',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'salt',array('span'=>5,'maxlength'=>255)); ?>

            <?php echo $form->textFieldControlGroup($model,'license_number',array('span'=>5,'maxlength'=>45)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->