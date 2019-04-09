<?php

namespace CreditClick\PriceModule\Helper;


class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	const CREDITCLICK_PRICEMODULE_ENABLE_CATALOG_CATEGORY     = 'creditclick_pricemodule/general/enable_catalog_category';
	const CREDITCLICK_PRICEMODULE_ENABLE_CATALOG_PRODUCT      = 'creditclick_pricemodule/general/enable_catalog_product';
	const CREDITCLICK_PRICEMODULE_ENABLE_CATALOGSEARCH_RESULT = 'creditclick_pricemodule/general/enable_catalogsearch_result';
	const CREDITCLICK_PRICEMODULE_ENABLE_CHECKOUT_CART        = 'creditclick_pricemodule/general/enable_checkout_cart';
	const CREDITCLICK_PRICEMODULE_COUNTRY                     = 'creditclick_pricemodule/general/country';
	const CREDITCLICK_PRICEMODULE_CUSTOM_CSS                  = 'creditclick_pricemodule/general/custom_css';

	/**
	 * @param \Magento\Framework\App\Helper\Context $context
	 */
	public function __construct(
		\Magento\Framework\App\Helper\Context $context
	) {

		parent::__construct($context);
	}

	public function get_enable_catalog_category()
	{
		return $this->scopeConfig->getValue(
			self::CREDITCLICK_PRICEMODULE_ENABLE_CATALOG_CATEGORY,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	public function get_enable_catalog_product()
	{
		return $this->scopeConfig->getValue(
			self::CREDITCLICK_PRICEMODULE_ENABLE_CATALOG_PRODUCT,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	public function get_enable_catalogsearch_result()
	{
		return $this->scopeConfig->getValue(
			self::CREDITCLICK_PRICEMODULE_ENABLE_CATALOGSEARCH_RESULT,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	public function get_enable_checkout_cart()
	{
		return $this->scopeConfig->getValue(
			self::CREDITCLICK_PRICEMODULE_ENABLE_CHECKOUT_CART,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	public function get_country()
	{
		return $this->scopeConfig->getValue(
			self::CREDITCLICK_PRICEMODULE_COUNTRY,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}

	public function get_custom_css()
	{
		return $this->scopeConfig->getValue(
			self::CREDITCLICK_PRICEMODULE_CUSTOM_CSS,
			\Magento\Store\Model\ScopeInterface::SCOPE_STORE
		);
	}
}