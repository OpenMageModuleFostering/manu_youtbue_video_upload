<?php

class Manu_Video_Block_Adminhtml_Video_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('video_form', array('legend'=>Mage::helper('video')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('video')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('video')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('video')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('video')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('video')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('video')->__('Content'),
          'title'     => Mage::helper('video')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getVideoData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getVideoData());
          Mage::getSingleton('adminhtml/session')->setVideoData(null);
      } elseif ( Mage::registry('video_data') ) {
          $form->setValues(Mage::registry('video_data')->getData());
      }
      return parent::_prepareForm();
  }
}