<?php

class MobWeb_ForceError_Adminhtml_ExceptionController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction() {
		Mage::throwException('This is a test exception in the backend.');
	}
}