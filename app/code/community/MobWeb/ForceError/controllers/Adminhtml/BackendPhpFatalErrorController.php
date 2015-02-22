<?php

class MobWeb_ForceError_Adminhtml_BackendPhpFatalErrorController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction() {
		this_does_not_exist();
	}
}