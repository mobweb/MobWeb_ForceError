<?php

class MobWeb_ForceError_ErrorController extends Mage_Core_Controller_Front_Action
{
	public function indexAction() {
		this_does_not_exist();
	}
}