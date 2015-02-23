<?php

class MobWeb_ForceError_ExceptionController extends Mage_Core_Controller_Front_Action
{
	public function indexAction() {
		Mage::throwException('This is a test exception in the frontend.');
	}
}