<?php
/**
 * ShopWeDo
 * Make Easy Shipper Labels
 *
 * Adds a button to a Sales Order View which opens a new window with the EasyShipper
 */
class ShopWeDo_EasyShipper_Block_Adminhtml_Sales_Order_View extends Mage_Adminhtml_Block_Sales_Order_View {
    public function  __construct() {
        parent::__construct();
		$orderId = $this->getOrder()->getIncrementId();
        $url = "https://startsendr.com/admin/shipper/add?".http_build_query(array('ext'=>'magento','order'=>$orderId));
        $this->addButton('sendtoswdsendr', array(
            'label'     => Mage::helper('sales')->__('Get a label with sendr'),
            'onclick'   => "window.open('".$url."','_blank')",
            'class'     => "go",
        ), 0, 99, 'header', 'header');
    }
}
?>