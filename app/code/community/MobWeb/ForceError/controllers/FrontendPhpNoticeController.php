<?php

class MobWeb_ForceError_FrontendPhpNoticeController extends Mage_Core_Controller_Front_Action
{
	public function indexAction() {
		echo $this_does_not_exist;
	}
}