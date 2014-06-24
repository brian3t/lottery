<?php
/* @var $this WinningGroupController */
/* @var \$model WinningGroup */
?>

<?php
$this->breadcrumbs=array(
	'Winning Groups'=>array('index'),
	$model->id,
);
$b = Yii::app()->request->baseUrl;

$this->menu=array(
	array('label'=>'List WinningGroup', 'url'=>array('index')),
	array('label'=>'Create WinningGroup', 'url'=>array('create')),
	array('label'=>'Update WinningGroup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete WinningGroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WinningGroup', 'url'=>array('admin')),
);
?>

<h1>View WinningGroup #<?php echo $model->id; ?></h1>
<div class="col-md-9">
<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table-striped table-condensed table-hover view-box col-xs-12 col-sm-12 col-md-9 col-lg-9',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'group_tier',
		'amount',
		'num_of_winning_shares',
		'toto_result_id',
	),
)); ?>
</div>
<div class="col-md-3">
	<div class="widget">
		<h3>
			Operations
		</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>/update/<?=$model->id?>">Update This <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>">List <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>/create">Create <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>/admin">Manage <?=get_class($model)?>s</a></li>
		</ul>
	</div>
</div>