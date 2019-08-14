<?php
class Manv_Youtbue_Block_Adminhtml_Youtbue_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("youtbue_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("youtbue")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("youtbue")->__("Item Information"),
				"title" => Mage::helper("youtbue")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("youtbue/adminhtml_youtbue_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
