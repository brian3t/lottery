<?php
/* @var $this TotoResultController */
/* @var $data TotoResult */
?>

<div class="view">

<!--    	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('id')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
<!--	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->date),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('winning_numbers')); ?>:</b>
	<?php echo CHtml::encode($data->winning_numbers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jackpot_date_time')); ?>:</b>
	<?php echo CHtml::encode($data->jackpot_date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jackpot_result')); ?>:</b>
	<?php echo CHtml::encode($data->jackpot_result); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_winning_number')); ?>:</b>
	<?php echo CHtml::encode($data->additional_winning_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('draw_number')); ?>:</b>
	<?php echo CHtml::encode($data->draw_number); ?>
	<br />


</div>