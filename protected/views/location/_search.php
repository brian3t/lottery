<?php
/* @var $this LocationController */
/* @var $model Location */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('class'=>'col-md-6')); ?>

                    <?php echo $form->textFieldControlGroup($model,'store_name',array('class'=>'col-md-6','maxlength'=>500)); ?>

                    <?php echo $form->textFieldControlGroup($model,'address_line_1',array('class'=>'col-md-6','maxlength'=>800)); ?>

                    <?php echo $form->textFieldControlGroup($model,'address_line_2',array('class'=>'col-md-6','maxlength'=>800)); ?>

                    <?php echo $form->textFieldControlGroup($model,'city',array('class'=>'col-md-6','maxlength'=>255)); ?>

                    <?php echo $form->textFieldControlGroup($model,'state',array('class'=>'col-md-6','maxlength'=>45)); ?>

                    <?php echo $form->textFieldControlGroup($model,'zipcode',array('class'=>'col-md-6','maxlength'=>45)); ?>

                    <?php echo $form->textFieldControlGroup($model,'country_code',array('class'=>'col-md-6','maxlength'=>2)); ?>

                    <?php echo $form->textFieldControlGroup($model,'note',array('class'=>'col-md-6','maxlength'=>45)); ?>

                    <?php echo $form->textFieldControlGroup($model,'latitude',array('class'=>'col-md-6')); ?>

                    <?php echo $form->textFieldControlGroup($model,'longitude',array('class'=>'col-md-6')); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->