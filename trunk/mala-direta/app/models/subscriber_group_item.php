<?php
class SubscriberGroupItem extends AppModel {

	var $name = 'SubscriberGroupItem';
	var $useTable = 'subscriber_group_items';
	var $validate = array(
		'subscriber_group_id' => array('numeric'),
		'subscriber_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'SubscriberGroup' => array('className' => 'SubscriberGroup',
								'foreignKey' => 'subscriber_group_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			),
			'Subscriber' => array('className' => 'Subscriber',
								'foreignKey' => 'subscriber_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

}
?>