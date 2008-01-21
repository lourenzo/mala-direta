<?php
class Actions extends AppModel {

	var $name = 'Actions';
	var $useTable = 'actions';
	var $validate = array(
		'name' => array('alphaNumeric'),
		'about' => array('alphaNumeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'Permission' => array('className' => 'Permission',
								'foreignKey' => 'action_id',
								'dependent' => false,
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'limit' => '',
								'offset' => '',
								'exclusive' => '',
								'finderQuery' => '',
								'counterQuery' => ''
			)
	);

}
?>