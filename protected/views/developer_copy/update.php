<?php
/* @var $this DeveloperController */
/* @var $model Developer */
?>

<?php
$this->breadcrumbs=array(
	'Developers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);
$b = Yii::app()->request->baseUrl;

$this->menu=array(
	array('label'=>'List Developer', 'url'=>array('index')),
	array('label'=>'Create Developer', 'url'=>array('create')),
	array('label'=>'View Developer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Developer', 'url'=>array('admin')),
);
?>

    <h1>Update Developer <?php echo $model->id; ?></h1>
<div class="col-md-9">

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
<div class="col-md-3">
	<div class="widget">
		<h3>
			Operations
		</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="<?=$b?>/developer">List Developer</a></li>
			<li class="list-group-item"><a href="<?=$b?>/developer/create">Create Developer</a></li>
			<li class="list-group-item"><a href="<?=$b?>/developer/admin">Manage Developers</a></li>
		</ul>
	</div>
</div>