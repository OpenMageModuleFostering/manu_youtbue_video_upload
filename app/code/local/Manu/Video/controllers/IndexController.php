<?php
class Manu_Video_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/video?id=15 
    	 *  or
    	 * http://site.com/video/id/15 	
    	 */
    
		$video_id = $this->getRequest()->getParam('id');

  		if($video_id != null && $video_id != '')	{
			$video = Mage::getModel('video/video')->load($video_id)->getData();
		} else {
			$video = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    
    	if($video == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$videoTable = $resource->getTableName('video');
			
			$select = $read->select()
			   ->from($videoTable,array('video_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$video = $read->fetchRow($select);
		}
		Mage::register('video', $video);
		

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}