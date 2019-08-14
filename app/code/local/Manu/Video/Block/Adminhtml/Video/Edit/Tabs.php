<?php

class Manu_Video_Block_Adminhtml_Video_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('video_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('video')->__('Video Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('video')->__('Video Information'),
          'title'     => Mage::helper('video')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('video/adminhtml_video_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}
