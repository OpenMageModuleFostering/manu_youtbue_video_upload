<?php
	
class Manv_Youtbue_Block_Adminhtml_Youtbue_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "id";
				$this->_blockGroup = "youtbue";
				$this->_controller = "adminhtml_youtbue";
				$this->_updateButton("save", "label", Mage::helper("youtbue")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("youtbue")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("youtbue")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("youtbue_data") && Mage::registry("youtbue_data")->getId() ){

				    return Mage::helper("youtbue")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("youtbue_data")->getId()));

				} 
				else{

				     return Mage::helper("youtbue")->__("Add Item");

				}
		}
}