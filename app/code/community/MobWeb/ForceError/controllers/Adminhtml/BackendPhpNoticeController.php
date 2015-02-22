<?php

class MobWeb_ForceError_Adminhtml_BackendPhpNoticeController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction() {
		echo $this_does_not_exist;
	}
}