<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @copyright  Copyright (c) 2008 Irubin Consulting Inc. DBA Varien (http://www.varien.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


class Monk_Blog_Model_Route extends Mage_Core_Model_Config_Data
{
	public function toOptionArray()
    {
        $options = array();
		return $options;
    }
	
    protected function _beforeSave()
    {
		$value = $this->getValue();
        if (trim($value) == "") {
            $value = "blog";
        }
        $this->setValue($value);
        return $this;
    }
}
