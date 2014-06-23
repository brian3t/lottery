<?php
/* @var $this DeveloperController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Developers',
);

$this->menu=array(
	array('label'=>'Create Developer','url'=>array('create')),
	array('label'=>'Manage Developer','url'=>array('admin')),
);
$thisClass = get_class($this);
$modelName = substr($thisClass,0, strlen($thisClass) - strlen("Controller"));
$b = Yii::app()->request->baseUrl;
?>

<h1>Developers</h1>
<div class="col-md-9">
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
<div class="col-md-3">
	<div class="widget">
		<h3>
			Operations
		</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="<?=$b?>/developer">List <?=$modelName ?></a></li>
			<li class="list-group-item"><a href="<?=$b?>/developer/create">Create Developer</a></li>
			<li class="list-group-item"><a href="<?=$b?>/developer/admin">Manage Developers</a></li>
		</ul>
	</div>
</div>