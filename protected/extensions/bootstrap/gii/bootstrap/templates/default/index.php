<?php
/**
 * The following variables are available in this template:
 * - $this: the BootstrapCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $dataProvider CActiveDataProvider */
<?php echo "?>\n"; ?>

<?php
echo "<?php\n";
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label',
);\n";
?>
$b = Yii::app()->request->baseUrl;

$this->menu=array(
	array('label'=>'Create <?php echo $this->modelClass; ?>','url'=>array('create')),
	array('label'=>'Manage <?php echo $this->modelClass; ?>','url'=>array('admin')),
);
$thisClass = get_class($this);
$modelName = substr($thisClass,0, strlen($thisClass) - strlen("Controller"));
?>

<h1><?php echo $label; ?></h1>
<div class="col-md-9">

<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbListView',array(
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
			<li class="list-group-item"><a href="/<?="<?=\$modelName?>"?>">List <?="<?=\$modelName?>"?></a></li>
			<li class="list-group-item"><a href="/<?="<?=\$modelName?>"?>/create">Create <?="<?=\$modelName?>"?></a></li>
			<li class="list-group-item"><a href="/<?="<?=\$modelName?>"?>/admin">Manage <?="<?=\$modelName?>"?></a></li>
		</ul>
	</div>
</div>