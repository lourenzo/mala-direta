<?php
class MailShot extends AppModel {

	var $name = 'MailShot';
	var $useTable = 'mail_shots';
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

}
?>