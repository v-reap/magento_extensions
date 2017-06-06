<?php
/*
 * Arcanum Dev PayPal Enabler
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to arcanumdev@wafunotamago.com so we can send you a copy immediately.
 *
 * @category	Magento Checkout/Shopping Cart Extension
 * @package		Paypal Currency Enabler
 * @author		Amon Antiga 2012/02/26
 * @copyright	Copyright (c) 2012 Arcanum Dev. Y.K.
 * @license		http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Arcanumdev_Paypalenabler_Model_Currency extends Mage_Directory_Model_Currency{const XML_PATH_CURRENCY_ALLOW='currency/options/allow';const XML_PATH_CURRENCY_DEFAULT='currency/options/default';const XML_PATH_CURRENCY_BASE='currency/options/base';protected $_filter;protected $_rates;protected function _construct(){$this->_init('directory/currency');}public function getCode(){return $this->_getData('currency_code');}public function getCurrencyCode(){return $this->_getData('currency_code');}public function getRates(){return $this->_rates;}public function setRates(array $rates){$this->_rates=$rates;return $this;}public function load($id,$field=null){$this->unsRate();$this->setData('currency_code',$id);return $this;}public function getRate($toCurrency){if (is_string($toCurrency)){$code=$toCurrency;}elseif ($toCurrency instanceof Mage_Directory_Model_Currency){$code=$toCurrency->getCurrencyCode();}else{throw Mage::exception('Mage_Directory',Mage::helper('directory')->__('Invalid target currency.'));}$rates=$this->getRates();if (!isset($rates[$code])){$rates[$code]=$this->_getResource()->getRate($this->getCode(),$toCurrency);$this->setRates($rates);}return $rates[$code];}public function getAnyRate($toCurrency){if (is_string($toCurrency)){$code=$toCurrency;}elseif ($toCurrency instanceof Mage_Directory_Model_Currency){$code=$toCurrency->getCurrencyCode();}else{throw Mage::exception('Mage_Directory',Mage::helper('directory')->__('Invalid target currency.'));}$rates=$this->getRates();if (!isset($rates[$code])){$rates[$code]=$this->_getResource()->getAnyRate($this->getCode(),$toCurrency);$this->setRates($rates);}return $rates[$code];}public function convert($price,$toCurrency=null){if (is_null($toCurrency)){return $price;}elseif ($rate=$this->getRate($toCurrency)){$cur=Mage::app()->getStore()->getCurrentCurrencyCode();if ($cur=='JPY' or $cur=='HUF' or $cur=='TWD'){return round($price*$rate);}else{return round($price*$rate,2);}}throw new Exception(Mage::helper('directory')->__('Undefined rate from "%s-%s".',$this->getCode(),$toCurrency->getCode()));}public function getFilter(){if (!$this->_filter){$this->_filter=new Mage_Directory_Model_Currency_Filter($this->getCode());}return $this->_filter;}public function format($price,$options=array(),$includeContainer=true,$addBrackets=false){return $this->formatPrecision($price,2,$options,$includeContainer,$addBrackets);}public function formatPrecision($price,$precision,$options=array(),$includeContainer=true,$addBrackets=false){if (!isset($options['precision'])){$options['precision']=$precision;}if ($includeContainer){return '<span class="price">' . ($addBrackets ? '[' : '') . $this->formatTxt($price,$options) . ($addBrackets ? ']' : '') . '</span>';}return $this->formatTxt($price,$options);} public function formatTxt($price,$options=array()){if (!is_numeric($price)){$price=Mage::app()->getLocale()->getNumber($price);}$price=sprintf("%F",$price);return Mage::app()->getLocale()->currency($this->getCode())->toCurrency($price,$options);}public function getOutputFormat(){$formated=$this->formatTxt(0);$number=$this->formatTxt(0,array('display'=>Zend_Currency::NO_SYMBOL));return str_replace($number,'%s',$formated);}public function getConfigAllowCurrencies(){$allowedCurrencies=$this->_getResource()->getConfigCurrencies($this,self::XML_PATH_CURRENCY_ALLOW);$appBaseCurrencyCode=Mage::app()->getBaseCurrencyCode();if (!in_array($appBaseCurrencyCode,$allowedCurrencies)){$allowedCurrencies[]=$appBaseCurrencyCode;}foreach (Mage::app()->getStores() as $store){$code=$store->getBaseCurrencyCode();if (!in_array($code,$allowedCurrencies)){$allowedCurrencies[]=$code;}}return $allowedCurrencies;}public function getConfigDefaultCurrencies(){$defaultCurrencies=$this->_getResource()->getConfigCurrencies($this,self::XML_PATH_CURRENCY_DEFAULT);return $defaultCurrencies;}public function getConfigBaseCurrencies(){$defaultCurrencies=$this->_getResource()->getConfigCurrencies($this,self::XML_PATH_CURRENCY_BASE);return $defaultCurrencies;}public function getCurrencyRates($currency,$toCurrencies=null){if ($currency instanceof Mage_Directory_Model_Currency){$currency=$currency->getCode();}$data=$this->_getResource()->getCurrencyRates($currency,$toCurrencies);return $data;}public function saveRates($rates){$this->_getResource()->saveRates($rates);return $this;}}