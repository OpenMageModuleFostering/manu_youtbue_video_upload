<?php
class Manu_Video_Block_Video extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getVideo()     
     { 
        if (!$this->hasData('video')) {
            $this->setData('video', Mage::registry('video'));
        }
        return $this->getData('video');
        
    }
}