<?php
class Permission extends AppModel {

	var $name = 'Permission';
	var $useTable = 'permissions';
	var $validate = array(
		'user_id' => array('numeric'),
		'action_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'User' => array('className' => 'User',
								'foreignKey' => 'user_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			),
			'Action' => array('className' => 'Action',
								'foreignKey' => 'action_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

}
?>