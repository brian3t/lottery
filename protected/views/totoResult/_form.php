<?php
/* @var $this TotoResultController */
/* @var $model TotoResult */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'toto-result-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

	<div class="control-group">
		<label class="control-label" for="TotoResult_date">Lottery result date</label>
		<div class="controls">
			<div class="input-append">
				<?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
					'name' => 'TotoResult[date]',
					'id' => 'TotoResult_date',
					'pluginOptions' => array(
						'format' => 'yyyy-MM-dd',
						'type' => 'date',
					),
					'value' => $model->date
				));
				?>
				<span class="add-on"><icon class="icon-calendar"></icon></span>
			</div>
		</div>
	</div>

<!--            --><?php //echo $form->dateFieldControlGroup($model,'date_time',array('class'=>'col-md-6')); ?>

            <?php echo $form->textFieldControlGroup($model,'winning_numbers',array('class'=>'col-md-6','maxlength'=>800)); ?>
	<div class="control-group">
		<label class="control-label" for="TotoResult_date">Lottery jackpot date time</label>
		<div class="controls">
			<div class="input-append">
				<?php $this->widget('yiiwheels.widgets.datetimepicker.WhDateTimePicker', array(
					'name' => 'TotoResult[jackpot_date_time]',
					'id' => 'TotoResult_jackpot_date_time',
					'pluginOptions' => array(
						'format' => 'yyyy-MM-dd hh:mm:ss',
//						'type' => 'date_time',
					),
					'value' => $model->jackpot_date_time
				));
				?>
			</div>
		</div>
	</div>	<?php echo $form->textFieldControlGroup($model,'jackpot_result',array('class'=>'col-md-6','maxlength'=>800)); ?>

            <?php echo $form->textFieldControlGroup($model,'additional_winning_number',array('class'=>'col-md-6')); ?>

            <?php echo $form->textFieldControlGroup($model,'draw_number',array('class'=>'col-md-6')); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->