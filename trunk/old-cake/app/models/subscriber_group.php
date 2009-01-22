<?php
class SubscriberGroup extends AppModel {

	var $name = 'SubscriberGroup';
	var $useTable = 'subscriber_groups';
	var $validate = array(
		'name' => array('alphaNumeric'),
		'about' => array('alphaNumeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'MailTransmissionSchedule' => array('className' => 'MailTransmissionSchedule',
								'foreignKey' => 'subscriber_group_id',
								'dependent' => false,
								'conditions' => '',
								'fields' => '',
								'order' => '',
								'limit' => '',
								'offset' => '',
								'exclusive' => '',
								'finderQuery' => '',
								'counterQuery' => ''
			),
			'SubscriberGroupItem' => array('className' => 'SubscriberGroupItem',
								'foreignKey' => 'subscriber_group_id',
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