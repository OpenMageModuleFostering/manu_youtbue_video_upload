<?php


class Manv_Youtbue_Block_Adminhtml_Youtbue extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_youtbue";
	$this->_blockGroup = "youtbue";
	$this->_headerText = Mage::helper("youtbue")->__("Youtbue Manager");
	$this->_addButtonLabel = Mage::helper("youtbue")->__("Add New Item");
	parent::__construct();
	
	}

}