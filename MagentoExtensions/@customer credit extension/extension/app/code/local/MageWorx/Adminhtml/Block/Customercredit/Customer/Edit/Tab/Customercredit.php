<?php
class MageWorx_Adminhtml_Block_Customercredit_Customer_Edit_Tab_Customercredit
    extends Mage_Adminhtml_Block_Template
    implements Mage_Adminhtml_Block_Widget_Tab_Interface
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('customercredit_credit');
    }
    
    public function getAfter()
    {
        return 'tags';
    }
    
    public function getTabLabel()
    {
        return Mage::helper('customer')->__('Internal Credit');
    }

    public function getTabTitle()
    {
        return Mage::helper('customer')->__('Internal Credit');
    }

    public function canShowTab()
    {
        return true;
    }

    public function isHidden()
    {
        if (Mage::registry('current_customer')->getId()) {
            return false;
        }
        return true;
    }
    
    protected function _toHtml()
    {
        return parent::_toHtml() . $this->getChildHtml();
    }
}