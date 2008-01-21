<?php
/*
 * MalaDireta
 *
 * Created on 20/01/2008
 * by lourenzo
 *
 */
class Message extends AppModel{
	var $name = "Message";
	var $validate = array(

        'subject'  => VALID_NOT_EMPTY,
        'html'   => VALID_NOT_EMPTY

    );
}
?>
