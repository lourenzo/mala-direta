<?php
class MailTransmissionSchedule extends AppModel {

	var $name = 'MailTransmissionSchedule';
	var $useTable = 'mail_transmission_schedules';
	var $validate = array(
		'smtp_account_id' => array('numeric'),
		'subscriber_group_id' => array('numeric'),
		'message_id' => array('numeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'SmtpAccount' => array('className' => 'SmtpAccount',
								'foreignKey' => 'smtp_account_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			),
			'SubscriberGroup' => array('className' => 'SubscriberGroup',
								'foreignKey' => 'subscriber_group_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			),
			'Message' => array('className' => 'Message',
								'foreignKey' => 'message_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

	var $hasMany = array(
			'MtsLog' => array('className' => 'MtsLog',
								'foreignKey' => 'mail_transmission_schedule_id',
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