<?php
/* @var $this DeveloperController */
/* @var $model Developer */
?>

<?php
$this->breadcrumbs=array(
	'Developers'=>array('index'),
	$model->name,
);
$b = Yii::app()->request->baseUrl;

$this->menu=array(
	array('label'=>'List Developer', 'url'=>array('index')),
	array('label'=>'Create Developer', 'url'=>array('create')),
	array('label'=>'Update Developer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Developer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Developer', 'url'=>array('admin')),
);
?>

<h1>View Developer #<?php echo $model->id; ?></h1>
<div class="col-md-9">
<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table-striped table-condensed table-hover view-box col-xs-12 col-sm-12 col-md-9 col-lg-9',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'name',
	),
)); ?>
</div>
<div class="col-md-3">
	<div class="widget">
		<h3>
			Operations
		</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="<?=$b?>/developer/update/<?=$model->id?>">Update This Developer</a></li>
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>/delete/<?=$model->id?>">Delete This <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=$b?>/developer">List Developer</a></li>
			<li class="list-group-item"><a href="<?=$b?>/developer/create">Create Developer</a></li>
			<li class="list-group-item"><a href="<?=$b?>/developer/admin">Manage Developers</a></li>
		</ul>
	</div>
</div>