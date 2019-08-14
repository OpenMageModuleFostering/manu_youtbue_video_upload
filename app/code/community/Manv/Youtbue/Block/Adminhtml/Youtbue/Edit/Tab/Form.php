<?php
class Manv_Youtbue_Block_Adminhtml_Youtbue_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("youtbue_form", array("legend"=>Mage::helper("youtbue")->__("Item information")));

				
						$fieldset->addField("title", "text", array(
						"label" => Mage::helper("youtbue")->__("Title"),
						"name" => "title",
						));
					
						$fieldset->addField("url", "text", array(
						"label" => Mage::helper("youtbue")->__("Video URL"),
						"name" => "url",
						));
					
						$fieldset->addField("description", "textarea", array(
						"label" => Mage::helper("youtbue")->__("Description"),
						"name" => "description",
						));
									
						 $fieldset->addField('status', 'select', array(
						'label'     => Mage::helper('youtbue')->__('Status'),
						'values'   => Manv_Youtbue_Block_Adminhtml_Youtbue_Grid::getValueArray3(),
						'name' => 'status',
						));

				if (Mage::getSingleton("adminhtml/session")->getYoutbueData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getYoutbueData());
					Mage::getSingleton("adminhtml/session")->setYoutbueData(null);
				} 
				elseif(Mage::registry("youtbue_data")) {
				    $form->setValues(Mage::registry("youtbue_data")->getData());
				}
				return parent::_prepareForm();
		}
}
