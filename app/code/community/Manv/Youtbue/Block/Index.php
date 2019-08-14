<?php   
class Manv_Youtbue_Block_Index extends Mage_Core_Block_Template{   


public function getYoutbuevideouploadEnabled()
    {
        return Mage::getStoreConfig('manvvideogallerysection/manvvideogallerygroup/status',Mage::app()->getStore());
    }
public function getYoutbuevideouploadimageheight()
    {
        return Mage::getStoreConfig('manvvideogallerysection/manvvideogallerygroup/imageheight',Mage::app()->getStore());
    }

public function getYoutbuevideouploadimagewidth()
    {
        return Mage::getStoreConfig('manvvideogallerysection/manvvideogallerygroup/imagewidht',Mage::app()->getStore());
    }

public function getYoutbuevideouploadvideohight()
    {
        return Mage::getStoreConfig('manvvideogallerysection/manvvideogallerygroup/videoheight',Mage::app()->getStore());
    }

public function getYoutbuevideouploadvideowidth()
    {
        return Mage::getStoreConfig('manvvideogallerysection/manvvideogallerygroup/videowidth',Mage::app()->getStore());
    }

public function getYoutbuevideouploadonerowitem()
    {
        return Mage::getStoreConfig('manvvideogallerysection/manvvideogallerygroup/numbofiteninrow',Mage::app()->getStore());
    }

public function getYoutbuevideouploadproductsperpage()
    {
        return Mage::getStoreConfig('manvvideogallerysection/manvvideogallerygroup/numofiteminpage',Mage::app()->getStore());
    }


public function getYoutbuevideouploadautoplay()
    {
        return Mage::getStoreConfig('manvvideogallerysection/manvvideogallerygroup/autoplay',Mage::app()->getStore());
    }

public function getYoutbuevideouploadpopupspeed()
    {
        return Mage::getStoreConfig('manvvideogallerysection/manvvideogallerygroup/popupspeed',Mage::app()->getStore());
    }
public function getYoutbuevideouploaddescription()
    {
        return Mage::getStoreConfig('manvvideogallerysection/manvvideogallerygroup/description',Mage::app()->getStore());
    }
public function getYoutbuevideouploadpagination()
    {
        return Mage::getStoreConfig('manvvideogallerysection/manvvideogallerygroup/pagination',Mage::app()->getStore());
    }







}
