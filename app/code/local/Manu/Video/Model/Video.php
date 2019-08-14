<?php

class Manu_Video_Model_Video extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('video/video');
    }
}