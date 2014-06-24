<?php
/* @var $this DeveloperController */
/* @var $model Developer */
?>

<?php
$this->breadcrumbs=array(
	'Developers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Developer', 'url'=>array('index')),
	array('label'=>'Manage Developer', 'url'=>array('admin')),
);
$b = Yii::app()->request->baseUrl;
?>
<h1>Create Developer</h1>
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