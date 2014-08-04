<h1>Batch update WinningGroup</h1>
<div class="form">
	<?php echo CHtml::beginForm(); ?>
	<table>

		<?php foreach($items as $i=>$item): ?>

			<tr>
				<p>
				<td><?php echo CHtml::activeLabel($item,'toto_result_id');?></td>
				<td><?php echo CHtml::activeDropDownList($item,'toto_result_id',CHtml::listData(TotoResult::model()->findAll(array('order'=>'date desc')),'id','date'),array('prompt'=>'Select a TotoResult')); ?></td></p>
			</tr>

			<tr>
				<p>
				<td><?php echo CHtml::activeLabel($item,'group_tier');?></td>
				<td><?php echo CHtml::activeDropDownList($item,'group_tier',array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6'),array('prompt'=>'Select a group tier')); ?></td></p>
			</tr>


			<tr>
				<p><td><?php echo CHtml::activeLabel($item,'amount');?></td>
				<td><?php echo CHtml::activeNumberField($item,"[$i]amount");?></td></p>
			</tr>
			<tr>
				<p><td><?php echo CHtml::activeLabel($item,'num_of_winning_shares');?></td>
				<td><?php echo CHtml::activeNumberField($item,"[$i]num_of_winning_shares");?></td></p>
			</tr>
			<tr>
				<p><td><?php echo CHtml::activeLabel($item,'winning_booths');?></td>
				<td><?php echo CHtml::activeTextArea($item,"[$i]winning_booths",$htmlOptions=array ('rows'=>12,'cols'=>60));?></td></p>
			</tr>

			<tr>
				<p><td><?php echo CHtml::submitButton('Save',array('background-color'=>'#006dcc'));?></td></p></tr>
			<tr><td style="border-bottom: 1px solid #000;height: 15px;"></td><td style="border-bottom: 1px solid #000; height: 15px;"></td></tr>
			<tr><td style="height: 15px;"></td><td style="height: 15px;"></td></tr>
<!--			<label class="control-label" for="WinningGroup_toto_result_id">Toto Result</label>-->
<!--			--><?php //echo $form->dropDownList($model,'toto_result_id',CHtml::listData(TotoResult::model()->findAll(array('order'=>'date desc')),'id','date'),array('class'=>'span3','prompt'=>'Select a TotoResult')); ?>
<!--			<br/>-->
<!--			--><?php //echo $form->dropDownListControlGroup($model,'group_tier',array('1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6'), array('class'=>'col-md-6')); ?>
<!---->
<!--			--><?php //echo $form->textFieldControlGroup($model,'amount',array('class'=>'col-md-6','maxlength'=>20)); ?>
<!---->
<!--			--><?php //echo $form->textFieldControlGroup($model,'num_of_winning_shares',array('class'=>'col-md-6')); ?>
<!--			--><?php //echo $form->textAreaControlGroup($model,'winning_booths',array('class'=>'col-md-6','rows'=>20)); ?>
<!---->
<!---->
<!--			<div class="form-actions">-->
<!--				--><?php //echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
//					'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
//					'size'=>TbHtml::BUTTON_SIZE_LARGE,
//				)); ?>
<!--			</div>-->

		<?php endforeach; ?>
	</table>


	<?php echo CHtml::endForm(); ?>
</div><!-- form -->