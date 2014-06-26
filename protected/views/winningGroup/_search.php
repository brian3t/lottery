<?php
/* @var $this WinningGroupController */
/* @var $model WinningGroup */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('class'=>'col-md-6')); ?>

                    <?php echo $form->textFieldControlGroup($model,'group_tier',array('class'=>'col-md-6')); ?>

                    <?php echo $form->textFieldControlGroup($model,'amount',array('class'=>'col-md-6','maxlength'=>20)); ?>

                    <?php echo $form->textFieldControlGroup($model,'num_of_winning_shares',array('class'=>'col-md-6')); ?>

                    <?php echo $form->textFieldControlGroup($model,'toto_result_id',array('class'=>'col-md-6')); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->