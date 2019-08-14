<?php
class Manu_Video_Block_Adminhtml_Video extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_video';
    $this->_blockGroup = 'video';
    $this->_headerText = Mage::helper('video')->__('Video Manager');
    $this->_addButtonLabel = Mage::helper('video')->__('Add Video');
    parent::__construct();
  }
}
