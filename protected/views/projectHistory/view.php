<?php
/* @var $this ProjectHistoryController */
/* @var \$model ProjectHistory */
?>

<?php
$this->breadcrumbs=array(
	'Project Histories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProjectHistory', 'url'=>array('index')),
	array('label'=>'Create ProjectHistory', 'url'=>array('create')),
	array('label'=>'Update ProjectHistory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProjectHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProjectHistory', 'url'=>array('admin')),
);
?>

<h1>View ProjectHistory #<?php echo $model->id; ?></h1>
<div class="col-md-9">
<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table-striped table-condensed table-hover view-box col-xs-12 col-sm-12 col-md-9 col-lg-9',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'description',
		'dateCreated',
		'dateChanged',
		'user_id',
		'old_project_status_id',
		'new_project_status_id',
		'project_id',
	),
)); ?>
</div>
<div class="col-md-3">
	<div class="widget">
		<h3>
			Operations
		</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="/<?=get_class($model)?>/update/<?=$model->id?>">Update This <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="/<?=get_class($model)?>">List <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="/<?=get_class($model)?>/create">Create <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="/<?=get_class($model)?>/admin">Manage <?=get_class($model)?>s</a></li>
		</ul>
	</div>
</div>