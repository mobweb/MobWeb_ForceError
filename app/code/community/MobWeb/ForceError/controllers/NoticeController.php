<?php

class MobWeb_ForceError_NoticeController extends Mage_Core_Controller_Front_Action
{
	public function indexAction() {
		echo $this_does_not_exist;
	}
}