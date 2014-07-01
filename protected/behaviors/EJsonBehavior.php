<?php
class EJsonBehavior extends CBehavior{
	
	private $owner;
	private $relations;

	// $rels should be array of relation names to get
	public function toJSON($rels=false) {
		$this->owner = $this->getOwner();
		if (is_subclass_of($this->owner,'CActiveRecord')){
			$attributes = $this->owner->getAttributes();
			$this->relations    = $this->getRelated($rels);
			$jsonDataSource = array_merge($attributes,$this->relations);
			return CJSON::encode($jsonDataSource);
		}
		return false;
	}

	private function getRelated($rels=false)
	{
		$related = array();
		$obj = null;
		$md=$this->owner->getMetaData();
		foreach($md->relations as $name=>$relation) {
			if ($rels) {
				if (in_array($name,$rels)) $obj = $this->owner->getRelated($name);
			} else {
				$obj = $this->owner->getRelated($name, true);
			}
			$related[$name] = $obj instanceof CActiveRecord ? $obj->getAttributes() : $obj;
		}
		return $related;
	}

}