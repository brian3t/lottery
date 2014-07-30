<?php
/* @var $this WinningGroupController */
/* @var $model WinningGroup */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'winning-group-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Enter a winning group for a toto result. Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
			<label class="control-label" for="WinningGroup_toto_result_id">Toto Result</label>
			<?php echo $form->dropDownList($model,'toto_result_id',CHtml::listData(TotoResult::model()->findAll(),'id','date'),array('class'=>'span3','prompt'=>'Select a TotoResult')); ?>
			<br/>
            <?php echo $form->dropDownListControlGroup($model,'group_tier',array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6'), array('class'=>'col-md-6')); ?>

            <?php echo $form->textFieldControlGroup($model,'amount',array('class'=>'col-md-6','maxlength'=>20)); ?>

            <?php echo $form->textFieldControlGroup($model,'num_of_winning_shares',array('class'=>'col-md-6')); ?>
			<?php echo $form->textAreaControlGroup($model,'winning_booths',array('class'=>'col-md-6','rows'=>20)); ?>


        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->