<?php
class SmtpAccount extends AppModel {

	var $name = 'SmtpAccount';
	var $useTable = 'smtp_accounts';
	var $validate = array(
		'username' => array('alphaNumeric'),
		'password' => array('alphaNumeric'),
		'host' => array('alphaNumeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'MailTransmissionSchedule' => array('className' => 'MailTransmissionSchedule',
								'foreignKey' => 'smtp_account_id',
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