<?php
/*
 * MalaDireta
 *
 * Created on 20/01/2008
 * by lourenzo
 *
 */
class MessagesController extends AppController
{
	function beforeFilter()
    {
        $this->checkSession();
    }

	var $name = "Messages";


	function index()
	{
		$this->set('messages', $this->Message->findAll());
	}


    function add()
    {
        if (!empty($this->data))
        {
            if ($this->Message->save($this->data))
            {
                $this->Session->setFlash(_('Your message has been saved.'));
                $this->redirect('/messages');

            }
        }
    }

	function edit($id = null)
	{
	    if (empty($this->data))
	    {
	        $this->Message->id = $id;
	        $this->data = $this->Message->read();
	    }
	    else
	    {
	        if ($this->Message->save($this->data['Message']))
	        {
	            $this->Session->setFlash(_('Your message has been updated.'));
	            $this->redirect('/messages');
	        }
	    }
	}

	function delete($id)
	{
	    $this->Message->del($id);
	    $this->Session->setFlash(sprintf(_("The message with id: '%s' has been deleted."),$id));
	    $this->redirect('/messages');
	}
}
?>
