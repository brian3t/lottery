<?php
/* @var $this TotoResultController */
/* @var \ $model TotoResult */
?>

<?php
$this->breadcrumbs=array(
	'Toto Results'=>array('index'),
	$model->id,
);
$b=Yii::app()->request->baseUrl;

$this->menu=array(
	array('label'=>'List TotoResult','url'=>array('index')),
	array('label'=>'Create TotoResult','url'=>array('create')),
	array('label'=>'Update TotoResult','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TotoResult','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TotoResult','url'=>array('admin')),
);
?>

<h1>View TotoResult #<?php echo $model->id; ?></h1>
<div class="col-md-9">
	<?php $this->widget('zii.widgets.CDetailView',array(
		'htmlOptions'=>array(
			'class'=>'table-striped table-condensed table-hover view-box col-xs-12 col-sm-12 col-md-9 col-lg-9',
		),
		'data'=>$model,
		'attributes'=>array(
			'date',
			'jackpot_result',
			'winning_numbers',
			'additional_winning_number',
			'draw_number',
		),
	));
	?>
	<h2> Winning groups:
	</h2>
	<?php
	$config=array();
	$dataProvider=new CArrayDataProvider($rawData=$model->winningGroups,$config);

	$this->widget('zii.widgets.grid.CGridView',array(
		'dataProvider'=>$dataProvider
	,'columns'=>array(
			'group_tier' => array('name'=>'group_tier',
			'header' => 'Group Tier')
		,'amount' => array(
				'name' => 'amount',
				'header' => 'Amount'
			)
		,
			'num_of_winning_shares' => array(
				'name' => 'num_of_winning_shares',
				'header' => 'Num. of Winning Shares'
			),
			'winning_booths' => array(
				'name' => 'winning_booths',
				'header' => 'Winning Booths'
			)
		,array(
				'class'=>'CButtonColumn'
			,'viewButtonUrl'=>'Yii::app()->createUrl("/WinningGroup/view", array("id"=>$data["id"]))'
			,'updateButtonUrl'=>'Yii::app()->createUrl("/WinningGroup/update", array("id"=>$data["id"]))'
			,'deleteButtonUrl'=>'Yii::app()->createUrl("/WinningGroup/delete", array("id"=>$data["id"]))'
			)
		)
	));

	?>
</div>
<div class="col-md-3">
	<div class="widget">
		<h3>
			Operations
		</h3>
		<ul class="list-group">
			<li class="list-group-item"><a
					href="<?= Yii::app()->getBaseUrl() ?>/<?= get_class($model) ?>/update/<?= $model->id ?>">Update
					This <?= get_class($model) ?></a></li>
			<li class="list-group-item"><a
					href="<?= Yii::app()->getBaseUrl() ?>/<?= get_class($model) ?>">List <?= get_class($model) ?></a>
			</li>
			<li class="list-group-item"><a
					href="<?= Yii::app()->getBaseUrl() ?>/<?= get_class($model) ?>/create">Create <?= get_class($model) ?></a>
			</li>
			<li class="list-group-item"><a
					href="<?= Yii::app()->getBaseUrl() ?>/<?= get_class($model) ?>/admin">Manage <?= get_class($model) ?>s</a></li>
			<li class="list-group-item"><a
					href="<?= Yii::app()->getBaseUrl() ?>/WinningGroup/batchUpdate/totoResultId/<?=$model->id?>">Update Winning Groups For this Toto Result</a></li>
			<li class="list-group-item"><a
					href="<?= Yii::app()->getBaseUrl() ?>/WinningGroup/create/totoResultId/<?=$model->id?>">Create a Winning Group For this Toto Result</a></li>

		</ul>
	</div>
</div>