<?php
/**
 * Model template file.
 *
 * Used by bake to create new Model files.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.classes
 * @since         CakePHP(tm) v 1.3
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Model', 'Model');
$pobjects = ClassRegistry::init('Project.Pobject');
$flds = ClassRegistry::init('Project.Fld');
//$pbehaviors = ClassRegistry::init('Project.FldsFldbehaviors');
$pbehaviors = ClassRegistry::init('Project.PobjectsPobjectbehaviors');
$behaviors = ClassRegistry::init('Project.Pobjectbehaviors');
//$behaviors = ClassRegistry::init('Project.Fldbehaviors');
//find the project object
$pobject = $pobjects->find('first', array('conditions'=>array('name'=>Inflector::tableize($name))));

$fld = $flds->find('first', array('conditions'=>array('pobject_id'=>$pobject['Pobject']['id']), 'Fld.display'=>1));
if(!empty($fld['Fld'])){
		$displayField = $fld['Fld']['name'];
}

$pbehavior = $pbehaviors->find('list', array('fields'=>array('pobjectbehavior_id'),'conditions'=>array('pobject_id'=>$pobject['Pobject']['id'])));
if(!empty($pbehavior)){
		$behavior = $behaviors->find('list', array('conditions'=>array('id'=>array_values($pbehavior))));
		if(!empty($behavior)){
			$actsAs = $behavior;
		}
}
//print_r($attributes);
echo "<?php\n";
echo "App::uses('{$plugin}AppModel', '{$pluginPath}Model');\n";
?>
/**
 * <?php echo $name ?> Model
 *
<?php
foreach (array('hasOne', 'belongsTo', 'hasMany', 'hasAndBelongsToMany') as $assocType) {
	if (!empty($associations[$assocType])) {
		foreach ($associations[$assocType] as $relation) {
			echo " * @property {$relation['className']} \${$relation['alias']}\n";
		}
	}
	
}
?>
 */
class <?php echo $name ?> extends <?php echo $plugin; ?>AppModel {

<?php if ($useDbConfig !== 'default'): ?>
/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = '<?php echo $useDbConfig; ?>';

<?php endif;

if ($useTable && $useTable !== Inflector::tableize($name)):
	$table = "'$useTable'";
	echo "/**\n * Use table\n *\n * @var mixed False or table name\n */\n";
	echo "\tpublic \$useTable = $table;\n\n";
endif;

if ($primaryKey !== 'id'): ?>
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = '<?php echo $primaryKey; ?>';

<?php endif;

if ($displayField): ?>
/**
 * Display field
 *
 * @var string
 */
	public $displayField = '<?php echo $displayField; ?>';

<?php endif; ?>
/**
 * Behaviors
 *
 * @var array
 */
	public $actsAs = array('AuditLog.Auditable'
 <?php if (!empty($actsAs)) {
  		echo ",\n\t"; foreach ($actsAs as $behavior): echo "\t"; var_export($behavior); echo ",\n\t"; endforeach;
 }?>
    );
<?php

if (!empty($validate)):
	echo "/**\n * Validation rules\n *\n * @var array\n */\n";
	echo "\tpublic \$validate = array(\n";
	foreach ($validate as $field => $validations):
		echo "\t\t'$field' => array(\n";
		foreach ($validations as $key => $validator):
			echo "\t\t\t'$key' => array(\n";
			echo "\t\t\t\t'rule' => array('$validator'),\n";
			echo "\t\t\t\t//'message' => 'Your custom message here',\n";
			echo "\t\t\t\t//'allowEmpty' => false,\n";
			echo "\t\t\t\t//'required' => false,\n";
			echo "\t\t\t\t//'last' => false, // Stop validation after this rule\n";
			echo "\t\t\t\t//'on' => 'create', // Limit validation to 'create' or 'update' operations\n";
			echo "\t\t\t),\n";
		endforeach;
		echo "\t\t),\n";
	endforeach;
	echo "\t);\n";
endif;

foreach ($associations as $assoc):
	if (!empty($assoc)):
?>

	//The Associations below have been created with all possible keys, those that are not needed can be removed
<?php
		break;
	endif;
endforeach;

//add associations for objectlinked fields
//get the fields.
echo "/*";
$fld = $flds->find('all', array('conditions'=>array('OR'=>array('Not'=>array('Fld.objectlink'=>''), 'Not'=>array('Fld.objectlink'=> NULL), 'Not'=>array('Fld.objectlink'=> 0)))));
$pobjs = $pobjects->find('list');
$i = 0;
$out = '';
foreach($fld as $field){
	
	$objname = Inflector::classify($pobjs[$field['Fld']['pobject_id']]);
	
	if(trim($name) == trim($objname)){
		//print_r($field['Fld']);
		//special cases for other plugins
		switch($field['Fld']['objectlink']){
			
			//users
			case -5:
			
			$associations['belongsTo'][] = array('alias' =>ucfirst($field['Fld']['name']), 'className'=>'Users.User', 'foreignKey'=>$field['Fld']['name']);
			/*
			$out = "\n\t\t'".ucfirst($field['Fld']['name'])."' => array(\n";
			$out .= "\t\t\t'className' => 'Users.User',\n";
			$out .= "\t\t\t'foreignKey' => '{$field['Fld']['name']}',\n";
			$out .= "\t\t\t'conditions' => '',\n";
			$out .= "\t\t\t'fields' => '',\n";
			$out .= "\t\t\t'order' => ''\n";
			$out .= "\t\t)";
			if ($i + 1 < count($fld)) {
				$out .= ",";
			}
			*/
			break;
			//Attachments
			case -4:
			$associations['belongsTo'][] = array('alias' =>ucfirst($field['Fld']['name']), 'className'=>'FileManager.Attachment', 'foreignKey'=>$field['Fld']['name']);
			/*
			$out = "\n\t\t'".ucfirst($field['Fld']['name'])."' => array(\n";
			$out .= "\t\t\t'className' => 'FileManager.Attachment',\n";
			$out .= "\t\t\t'foreignKey' => '{$field['Fld']['name']}',\n";
			$out .= "\t\t\t'conditions' => '',\n";
			$out .= "\t\t\t'fields' => '',\n";
			$out .= "\t\t\t'order' => ''\n";
			$out .= "\t\t)";
			if ($i + 1 < count($fld)) {
				$out .= ",";
			}
			*/
			break;
			default:
			$associations['belongsTo'][] = array('alias' =>ucfirst($field['Fld']['name']), 'className'=>Inflector::classify($pobjs[$field['Fld']['objectlink']]), 'foreignKey'=>$field['Fld']['name']);
			/*	
			$out = "\n\t\t'".ucfirst($field['Fld']['name'])."' => array(\n";
			$out .= "\t\t\t'className' => '".Inflector::classify($pobjs[$field['Fld']['objectlink']])."',\n";
			$out .= "\t\t\t'foreignKey' => '{$field['Fld']['name']}',\n";
			$out .= "\t\t\t'conditions' => '',\n";
			$out .= "\t\t\t'fields' => '',\n";
			$out .= "\t\t\t'order' => ''\n";
			$out .= "\t\t)";
			if ($i + 1 < count($fld)) {
				$out .= ",";
			}
			*/
			break;
		}
		$i++;
	}
}
$out1 = ($out!=''?$out:'');
echo "*/";
foreach (array('hasOne', 'belongsTo') as $assocType):
	if (!empty($associations[$assocType])):
		$typeCount = count($associations[$assocType]);
		echo "\n/**\n * $assocType associations\n *\n * @var array\n */";
		echo "\n\tpublic \$$assocType = array(";
		foreach ($associations[$assocType] as $i => $relation):
			switch($relation['className']){
				case 'Attachment':
					$out = "\n\t\t'{$relation['alias']}' => array(\n";
					$out .= "\t\t\t'className' => 'FileManager.{$relation['className']}',\n";
					$out .= "\t\t\t'foreignKey' => '{$relation['foreignKey']}',\n";
					$out .= "\t\t\t'conditions' => '',\n";
					$out .= "\t\t\t'fields' => '',\n";
					$out .= "\t\t\t'order' => ''\n";
					$out .= "\t\t)";
					if ($i + 1 < $typeCount) {
						$out .= ",";
					}
				break;
				
				default:
					$out = "\n\t\t'{$relation['alias']}' => array(\n";
					$out .= "\t\t\t'className' => '{$relation['className']}',\n";
					$out .= "\t\t\t'foreignKey' => '{$relation['foreignKey']}',\n";
					$out .= "\t\t\t'conditions' => '',\n";
					$out .= "\t\t\t'fields' => '',\n";
					$out .= "\t\t\t'order' => ''\n";
					$out .= "\t\t)";
					if ($i + 1 < $typeCount) {
						$out .= ",";
					}
				
				break;
			}
			echo $out;
		endforeach;
		
		echo $out1;
		
		echo "\n\t);\n";
	endif;
endforeach;

if (!empty($associations['hasMany'])):
	$belongsToCount = count($associations['hasMany']);
	echo "\n/**\n * hasMany associations\n *\n * @var array\n */";
	echo "\n\tpublic \$hasMany = array(";
	foreach ($associations['hasMany'] as $i => $relation):
		$out = "\n\t\t'{$relation['alias']}' => array(\n";
		$out .= "\t\t\t'className' => '{$relation['className']}',\n";
		$out .= "\t\t\t'foreignKey' => '{$relation['foreignKey']}',\n";
		$out .= "\t\t\t'dependent' => false,\n";
		$out .= "\t\t\t'conditions' => '',\n";
		$out .= "\t\t\t'fields' => '',\n";
		$out .= "\t\t\t'order' => '',\n";
		$out .= "\t\t\t'limit' => '',\n";
		$out .= "\t\t\t'offset' => '',\n";
		$out .= "\t\t\t'exclusive' => '',\n";
		$out .= "\t\t\t'finderQuery' => '',\n";
		$out .= "\t\t\t'counterQuery' => ''\n";
		$out .= "\t\t)";
		if ($i + 1 < $belongsToCount) {
			$out .= ",";
		}
		echo $out;
	endforeach;
	echo "\n\t);\n\n";
endif;

if (!empty($associations['hasAndBelongsToMany'])):
	$habtmCount = count($associations['hasAndBelongsToMany']);
	echo "\n/**\n * hasAndBelongsToMany associations\n *\n * @var array\n */";
	echo "\n\tpublic \$hasAndBelongsToMany = array(";
	foreach ($associations['hasAndBelongsToMany'] as $i => $relation):
		$out = "\n\t\t'{$relation['alias']}' => array(\n";
		$out .= "\t\t\t'className' => '{$relation['className']}',\n";
		$out .= "\t\t\t'joinTable' => '{$relation['joinTable']}',\n";
		$out .= "\t\t\t'foreignKey' => '{$relation['foreignKey']}',\n";
		$out .= "\t\t\t'associationForeignKey' => '{$relation['associationForeignKey']}',\n";
		$out .= "\t\t\t'unique' => 'keepExisting',\n";
		$out .= "\t\t\t'conditions' => '',\n";
		$out .= "\t\t\t'fields' => '',\n";
		$out .= "\t\t\t'order' => '',\n";
		$out .= "\t\t\t'limit' => '',\n";
		$out .= "\t\t\t'offset' => '',\n";
		$out .= "\t\t\t'finderQuery' => '',\n";
		$out .= "\t\t)";
		if ($i + 1 < $habtmCount) {
			$out .= ",";
		}
		echo $out;
	endforeach;
	echo "\n\t);\n\n";
endif;
?>
}
