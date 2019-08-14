<?php
class ShopWeDo_EasyShipper_Model_Api extends Mage_Api_Model_Resource_Abstract
{        
	public function swdShipments()
    {
    	return $this->getShipments();
    }        
	public function swdPaginationableOrders()
    {
    	return $this->getOrders();
    }
}