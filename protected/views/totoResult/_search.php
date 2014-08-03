<?php
/* @var $this TotoResultController */
/* @var $model TotoResult */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('class'=>'col-md-6')); ?>

                    <?php echo $form->textFieldControlGroup($model,'date',array('class'=>'col-md-6')); ?>

	<?php echo $form->textFieldControlGroup($model,'winning_numbers',array('class'=>'col-md-6','maxlength'=>800)); ?>
	<?php echo $form->dateFieldControlGroup($model,'jackpot_date_time',array('class'=>'col-md-6','maxlength'=>800)); ?>
	<?php echo $form->textFieldControlGroup($model,'jackpot_result',array('class'=>'col-md-6','maxlength'=>800)); ?>

                    <?php echo $form->textFieldControlGroup($model,'additional_winning_number',array('class'=>'col-md-6')); ?>

                    <?php echo $form->textFieldControlGroup($model,'draw_number',array('class'=>'col-md-6')); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->