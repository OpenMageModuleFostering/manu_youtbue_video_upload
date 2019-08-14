<?php

class Manu_Video_Model_Mysql4_Video extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the video_id refers to the key field in your database table.
        $this->_init('video/video', 'video_id');
    }
}