<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'description',array('span'=>5,'maxlength'=>8000)); ?>

                    <?php echo $form->textFieldControlGroup($model,'short_description',array('span'=>5,'maxlength'=>255)); ?>

                    <?php echo $form->textFieldControlGroup($model,'price',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'location',array('span'=>5,'maxlength'=>800)); ?>

                    <?php echo $form->textFieldControlGroup($model,'zipcode',array('span'=>5,'maxlength'=>45)); ?>

                    <?php echo $form->textFieldControlGroup($model,'size',array('span'=>5,'maxlength'=>45)); ?>

                    <?php echo $form->textFieldControlGroup($model,'name',array('span'=>5,'maxlength'=>400)); ?>

                    <?php echo $form->textFieldControlGroup($model,'development_type_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'developer_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'user_id',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->