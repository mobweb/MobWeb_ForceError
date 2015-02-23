<?php

class MobWeb_ForceError_Adminhtml_NoticeController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction() {
		echo $this_does_not_exist;
	}
}